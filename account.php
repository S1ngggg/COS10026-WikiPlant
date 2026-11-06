<?php
require_once __DIR__ . '/includes/session.php';
if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

function account_text(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$section = $_GET['section'] ?? 'profile';
if (!in_array($section, ['profile', 'password', 'contributions'], true)) {
    $section = 'profile';
}
$sections = [
    'profile' => ['Edit Profile', 'Update your information'],
    'password' => ['Change Password', 'Account security'],
    'contributions' => ['My Contributions', 'Your plant records'],
];
$error = '';
$success = '';
$user = null;

try {
    require __DIR__ . '/includes/db_connect.inc.php';
    $userId = (int) $_SESSION['user_id'];
    $stmt = mysqli_prepare($conn, 'SELECT username, email, phone, address, password FROM `user` WHERE user_id = ?');
    if (!$stmt) throw new RuntimeException('Unable to prepare account query.');
    mysqli_stmt_bind_param($stmt, 'i', $userId);
    if (!mysqli_stmt_execute($stmt)) throw new RuntimeException('Unable to load account.');
    $user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    mysqli_stmt_close($stmt);
    if (!$user) {
        unset($_SESSION['user_id'], $_SESSION['username']);
        header('Location: login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!is_string($_POST['csrf_token'] ?? null)
            || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
            http_response_code(403);
            $error = 'Your form has expired. Please refresh this page and try again.';
        } elseif ($section === 'profile') {
            $input = [];
            foreach (['username', 'email', 'phone', 'address'] as $field) {
                $input[$field] = is_string($_POST[$field] ?? null) ? trim($_POST[$field]) : '';
            }
            if (!preg_match('/\A[A-Za-z0-9_]{1,25}\z/', $input['username'])) {
                $error = 'Username must be 1-25 letters, numbers or underscores.';
            } elseif (strlen($input['email']) > 100 || !filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
                $error = 'Please enter a valid email address (up to 100 characters).';
            } elseif (strlen($input['phone']) > 15 || ($input['phone'] !== '' && !preg_match('/\A[0-9+() -]+\z/', $input['phone']))) {
                $error = 'Please enter a valid phone number (up to 15 characters).';
            } elseif (strlen($input['address']) > 2000) {
                $error = 'Address must be no more than 2000 bytes.';
            } else {
                $stmt = mysqli_prepare($conn, 'SELECT user_id FROM `user` WHERE (username = ? OR email = ?) AND user_id <> ? LIMIT 1');
                if (!$stmt) throw new RuntimeException('Unable to prepare duplicate check.');
                mysqli_stmt_bind_param($stmt, 'ssi', $input['username'], $input['email'], $userId);
                if (!mysqli_stmt_execute($stmt)) throw new RuntimeException('Unable to check account details.');
                mysqli_stmt_store_result($stmt);
                $duplicate = mysqli_stmt_num_rows($stmt) > 0;
                mysqli_stmt_close($stmt);
                if ($duplicate) {
                    $error = 'This username or email address is already in use.';
                } else {
                    $stmt = mysqli_prepare($conn, 'UPDATE `user` SET username = ?, email = ?, phone = ?, address = ? WHERE user_id = ?');
                    if (!$stmt) throw new RuntimeException('Unable to prepare profile update.');
                    mysqli_stmt_bind_param($stmt, 'ssssi', $input['username'], $input['email'], $input['phone'], $input['address'], $userId);
                    if (!mysqli_stmt_execute($stmt)) throw new RuntimeException('Unable to update profile.');
                    mysqli_stmt_close($stmt);
                    $_SESSION['username'] = $input['username'];
                    $success = 'Your profile has been updated.';
                }
            }
            $user = array_merge($user, $input);
        } elseif ($section === 'password') {
            $current = $_POST['current_password'] ?? '';
            $new = $_POST['new_password'] ?? '';
            $confirm = $_POST['confirm_password'] ?? '';
            if (!is_string($current) || !password_verify($current, $user['password'])) {
                $error = 'Your current password is incorrect.';
            } elseif (!is_string($new) || !preg_match('/\A(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,15}\z/u', $new)) {
                $error = 'Use 8-15 characters with an uppercase letter, a lowercase letter and a number.';
            } elseif ($new !== $confirm) {
                $error = 'The new passwords do not match.';
            } elseif (password_verify($new, $user['password'])) {
                $error = 'Please choose a different password from your current one.';
            } else {
                $hash = password_hash($new, PASSWORD_DEFAULT);
                $stmt = mysqli_prepare($conn, 'UPDATE `user` SET password = ? WHERE user_id = ?');
                if (!$stmt) throw new RuntimeException('Unable to prepare password update.');
                mysqli_stmt_bind_param($stmt, 'si', $hash, $userId);
                if (!mysqli_stmt_execute($stmt)) throw new RuntimeException('Unable to update password.');
                mysqli_stmt_close($stmt);
                session_regenerate_id(true);
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                $success = 'Your password has been changed.';
            }
        }
    }
    mysqli_close($conn);
} catch (Throwable $exception) {
    error_log('Account error: ' . $exception->getMessage());
    http_response_code(500);
    $error = 'Your account could not be loaded or saved. Please try again later.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= account_text($sections[$section][0]) ?> - WikiPlant</title>
    <link rel="stylesheet" href="css/style.css?v=member-account-1">
</head>
<body class="member-account-page">
<?php include __DIR__ . '/includes/header.php'; ?>
<main class="member-account-main">
    <div class="member-account-intro">
        <p class="member-eyebrow">A LITTLE SPACE OF YOUR OWN</p>
        <h1>My Account<span>.</span></h1>
        <p>Welcome back, <?= account_text($_SESSION['username'] ?? 'Member') ?>. Keep growing with WikiPlant.</p>
    </div>
    <div class="member-account-layout">
        <nav class="member-account-nav" aria-label="Account">
            <?php foreach ($sections as $key => $labels): ?>
            <a href="account.php?section=<?= $key ?>" <?= $key === $section ? 'aria-current="page"' : '' ?>>
                <strong><?= $labels[0] ?></strong><small><?= $labels[1] ?></small>
            </a>
            <?php endforeach; ?>
            <a class="member-home-link" href="index.php">&#8592; Back to home</a>
            <form action="logout.php" method="post"><input type="hidden" name="csrf_token" value="<?= account_text($_SESSION['csrf_token']) ?>"><button type="submit" class="member-logout">Logout &#8618;</button></form>
        </nav>
        <section class="member-account-card" aria-labelledby="member-section-title">
            <p class="member-eyebrow"><?= account_text($sections[$section][1]) ?></p>
            <h2 id="member-section-title"><?= account_text($sections[$section][0]) ?></h2>
            <?php if ($error): ?><p class="member-message member-error" role="alert"><?= account_text($error) ?></p><?php endif; ?>
            <?php if ($success): ?><p class="member-message" role="status"><?= account_text($success) ?></p><?php endif; ?>
            <?php if ($user && $section === 'profile'): ?>
            <p class="member-section-copy">A few details to keep your account up to date.</p>
            <form method="post" action="account.php?section=profile" class="member-form">
                <input type="hidden" name="csrf_token" value="<?= account_text($_SESSION['csrf_token']) ?>">
                <div class="member-field-pair">
                    <label>Username<input name="username" value="<?= account_text($user['username']) ?>" maxlength="25" pattern="[A-Za-z0-9_]+" autocomplete="username" required></label>
                    <label>Email address<input type="email" name="email" value="<?= account_text($user['email']) ?>" maxlength="100" autocomplete="email" required></label>
                </div>
                <label>Phone number<input type="tel" name="phone" value="<?= account_text($user['phone'] ?? '') ?>" maxlength="15" autocomplete="tel"></label>
                <label>Address<textarea name="address" rows="3" maxlength="2000" autocomplete="street-address"><?= account_text($user['address'] ?? '') ?></textarea></label>
                <div class="member-form-footer"><span>Your details stay with your account.</span><button class="member-primary" type="submit">Save Changes &#8594;</button></div>
            </form>
            <?php elseif ($user && $section === 'password'): ?>
            <p class="member-section-copy">Use a unique password to keep your account secure.</p>
            <form method="post" action="account.php?section=password" class="member-form">
                <input type="hidden" name="csrf_token" value="<?= account_text($_SESSION['csrf_token']) ?>">
                <label>Current password<input type="password" name="current_password" autocomplete="current-password" required></label>
                <label>New password<input type="password" name="new_password" minlength="8" maxlength="15" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,15}" aria-describedby="password-help" autocomplete="new-password" required></label>
                <p id="password-help" class="member-help">8-15 characters, with at least one uppercase letter, one lowercase letter and one number.</p>
                <label>Confirm new password<input type="password" name="confirm_password" minlength="8" maxlength="15" autocomplete="new-password" required></label>
                <div class="member-form-footer"><button class="member-primary" type="submit">Change Password &#8594;</button></div>
            </form>
            <?php elseif ($user && $section === 'contributions'): ?>
            <div class="member-empty">
                <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M32 54V29M32 40C13 40 10 26 11 16c15-1 23 8 21 24ZM32 31c0-16 10-22 23-22 1 14-7 24-23 22Z"/></svg>
                <h3>Your field notes start here.</h3>
                <p>No plant records are linked to your account yet.</p>
                <p class="member-help">The contribution form is currently a preview. Personal records will be available when submissions are enabled.</p>
                <a href="contribution.php" class="member-primary">Explore the contribution form &#8594;</a>
            </div>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>

<?php
require_once __DIR__ . '/includes/session.php';

$pageTitle = 'Login - WikiPlant';
$bodyClass = 'contribution-page account-page account-login';
$cssVersion = 'account-paper-1';

$loginError = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/includes/db_connect.inc.php';

    $username = trim($_POST['loginId'] ?? '');
    $password = $_POST['loginPassword'] ?? '';

    if ($username === '' || $password === '') {
        $loginError = 'Please enter your username and password.';
    } else {
        $sql = 'SELECT user_id, username, password
                FROM `user`
                WHERE username = ?
                LIMIT 1';

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            error_log('Unable to prepare login query: ' . mysqli_error($conn));
            $loginError = 'Login is unavailable. Please try again.';
        } else {
            mysqli_stmt_bind_param($stmt, 's', $username);

            if (!mysqli_stmt_execute($stmt)) {
                error_log('Unable to execute login query: ' . mysqli_stmt_error($stmt));
                $loginError = 'Login is unavailable. Please try again.';
            } else {
                $userId = 0;
                $dbUsername = '';
                $passwordHash = '';

                mysqli_stmt_bind_result(
                    $stmt,
                    $userId,
                    $dbUsername,
                    $passwordHash
                );

                $validLogin = false;

                if (mysqli_stmt_fetch($stmt) && is_string($passwordHash)) {
                    $validLogin = password_verify($password, $passwordHash);
                }

                if ($validLogin) {
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);

                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['username'] = $dbUsername;

                    header('Location: index.php');
                    exit;
                }

                $loginError = 'Incorrect username or password.';
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <link
        rel="stylesheet"
        href="css/style.css?v=<?= urlencode($cssVersion) ?>"
    >
</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">

<?php include __DIR__ . '/includes/header.php'; ?>

<main class="page_main contribution-main account-main">
    <div class="page-header account-intro">
        <a class="account-logo" href="index.php" aria-label="WikiPlant home">
            <img src="images/logo.png" alt="WikiPlant logo">
        </a>

        <h1 id="account-title">Welcome Back.</h1>

        <p>Login to continue contributing to the WikiPlant database.</p>

        <div class="account-divider" aria-hidden="true">
            <span></span>
        </div>
    </div>

    <form action="login.php" method="post" class="record-form account-form">
        <?php if ($loginError !== ''): ?>
        <p class="member-message member-error" role="alert"><?= htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <fieldset>
            <legend>Your Account</legend>
            <div class="field-group">
                <label for="loginId">Username <span class="req">*</span></label>
                <input type="text" id="loginId" name="loginId" value="<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>" autocomplete="username" maxlength="25" required>
            </div>
            <div class="field-group">
                <label for="loginPassword">Password <span class="req">*</span></label>
                <input type="password" id="loginPassword" name="loginPassword" autocomplete="current-password" required>
            </div>
        </fieldset>
        <div class="form-actions"><button type="submit" class="btn btn-submit">Login</button></div>
        <p class="form-prompt">New to WikiPlant? <a href="register.php">Create an account</a></p>
    </form>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>

<?php
require_once __DIR__ . '/includes/session.php';
$pageTitle = 'Registration Details - WikiPlant';
$bodyClass = 'contribution-page account-page account-register';
$cssVersion = 'account-paper-5';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Please submit the registration form first.');
}

require_once __DIR__ . '/includes/db_connect.inc.php';

$fields = [
    'First Name' => 'firstName',
    'Last Name' => 'lastName',
    'Email Address' => 'regEmail',
    'Phone Number' => 'phoneNumber',
    'Street Address' => 'streetAddress',
    'City / Town' => 'cityTown',
    'State' => 'state',
    'Postcode' => 'postcode',
    'Username' => 'logUser',
];

$values = [];
foreach ($fields as $label => $name) {
    $values[$label] = trim((string) ($_POST[$name] ?? ''));
}

$firstName = $values['First Name'];
$lastName = $values['Last Name'];
$username = $values['Username'];
$email = $values['Email Address'];
$phoneNumber = $values['Phone Number'];
$streetAddress = $values['Street Address'];
$cityTown = $values['City / Town'];
$state = $values['State'];
$postcode = $values['Postcode'];
$password = $_POST['regPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

if (!is_string($password) || $password === '') {
    http_response_code(400);
    exit('Please enter a password.');
}

if (!is_string($confirmPassword) || $password !== $confirmPassword) {
    http_response_code(400);
    exit('Password and Confirm Password must match.');
}

if (!preg_match('/\A(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,15}\z/u', $password)) {
    http_response_code(400);
    exit('Password must be 8-15 characters and contain at least one uppercase letter, one lowercase letter and one number.');
}

$transactionStarted = false;

try {
    $duplicateCheck = mysqli_prepare(
        $conn,
        'SELECT EXISTS(SELECT 1 FROM `user` WHERE username = ?),
                EXISTS(SELECT 1 FROM `user` WHERE email = ?)'
    );

    if ($duplicateCheck === false) {
        throw new RuntimeException('Unable to prepare duplicate account check: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($duplicateCheck, 'ss', $username, $email);
    if (!mysqli_stmt_execute($duplicateCheck)) {
        throw new RuntimeException('Unable to check duplicate accounts: ' . mysqli_stmt_error($duplicateCheck));
    }

    $usernameExists = 0;
    $emailExists = 0;
    mysqli_stmt_bind_result($duplicateCheck, $usernameExists, $emailExists);
    if (mysqli_stmt_fetch($duplicateCheck) !== true) {
        throw new RuntimeException('Unable to fetch duplicate account check.');
    }
    mysqli_stmt_close($duplicateCheck);

    if ($usernameExists || $emailExists) {
        mysqli_close($conn);
        http_response_code(409);
        exit($usernameExists ? 'This username is already registered.' : 'This email address is already registered.');
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $address = implode(', ', [$streetAddress, $cityTown, $state, $postcode]);

    if (!mysqli_begin_transaction($conn)) {
        throw new RuntimeException('Unable to begin registration transaction: ' . mysqli_error($conn));
    }
    $transactionStarted = true;

    $userInsert = mysqli_prepare(
        $conn,
        'INSERT INTO `user` (`username`, `password`, `email`, `phone`, `address`) VALUES (?, ?, ?, ?, ?)'
    );
    if ($userInsert === false) {
        throw new RuntimeException('Unable to prepare user insert: ' . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($userInsert, 'sssss', $username, $passwordHash, $email, $phoneNumber, $address);
    if (!mysqli_stmt_execute($userInsert)) {
        throw new RuntimeException('Unable to save user: ' . mysqli_stmt_error($userInsert));
    }
    mysqli_stmt_close($userInsert);

    $insert = mysqli_prepare(
        $conn,
        'INSERT INTO `register`
            (`first_name`, `last_name`, `username`, `email`, `phone_number`,
             `street_address`, `city_town`, `state`, `postcode`)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)'
    );

    if ($insert === false) {
        throw new RuntimeException('Unable to prepare registration insert: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param(
        $insert,
        'sssssssss',
        $firstName,
        $lastName,
        $username,
        $email,
        $phoneNumber,
        $streetAddress,
        $cityTown,
        $state,
        $postcode
    );

    if (!mysqli_stmt_execute($insert)) {
        throw new RuntimeException('Unable to save registration: ' . mysqli_stmt_error($insert));
    }

    mysqli_stmt_close($insert);

    if (!mysqli_commit($conn)) {
        throw new RuntimeException('Unable to commit registration: ' . mysqli_error($conn));
    }
    $transactionStarted = false;
} catch (Throwable $error) {
    if ($transactionStarted) {
        mysqli_rollback($conn);
    }
    error_log('Registration failed: ' . $error->getMessage());
    mysqli_close($conn);
    http_response_code(500);
    exit('The registration could not be saved. Please try again later.');
}

mysqli_close($conn);

$passwordWasSubmitted = $password !== '';
$confirmPasswordWasSubmitted = $confirmPassword !== '';

function output_text(string $value): void
{
    echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link
        rel="stylesheet"
        href="css/style.css?v=<?= urlencode($cssVersion) ?>"
    >
</head>

<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">

<?php include __DIR__ . '/includes/header.php'; ?>

<main class="page_main contribution-main account-main">
    <div class="page-header account-intro">
        <a class="account-logo" href="index.php" aria-label="WikiPlant home">
            <img src="images/logo.png" alt="WikiPlant logo">
        </a>

        <h1 id="account-title">Registration Submitted.</h1>
        <p>Here is the information you entered.</p>

        <div class="account-divider" aria-hidden="true">
            <span></span>
        </div>

        <table class="registration-table">
            <caption>Submitted registration information</caption>
            <thead>
                <tr>
                    <th scope="col">Information</th>
                    <th scope="col">Your input</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($values as $label => $value) {
                echo '<tr><th scope="row">';
                output_text($label);
                echo '</th><td>';
                output_text($value);
                echo '</td></tr>';
            } ?>

            <tr>
                <th scope="row">Password</th>
                <td><?php echo $passwordWasSubmitted ? 'Received and hidden for security' : 'Not provided'; ?></td>
            </tr>

            <tr>
                <th scope="row">Confirm Password</th>
                <td><?php echo $confirmPasswordWasSubmitted ? 'Received and hidden for security' : 'Not provided'; ?></td>
            </tr>
            </tbody>
        </table>

        <p class="form-prompt">
            <a class="btn btn-submit return-button" href="login.php">
                Go to Login
            </a>
        </p>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

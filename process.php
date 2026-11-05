<?php
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

$insert = mysqli_prepare(
    $conn,
    'INSERT INTO `register`
        (`first_name`, `last_name`, `username`, `email`, `phone_number`,
         `street_address`, `city_town`, `state`, `postcode`)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)'
);

if ($insert === false) {
    error_log('Unable to prepare registration insert: ' . mysqli_error($conn));
    http_response_code(500);
    exit('The registration could not be saved. Please try again later.');
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
    error_log('Unable to save registration: ' . mysqli_stmt_error($insert));
    mysqli_stmt_close($insert);
    http_response_code(500);
    exit('The registration could not be saved. Please try again later.');
}

mysqli_stmt_close($insert);

$passwordWasSubmitted = (string) ($_POST['regPassword'] ?? '') !== '';
$confirmPasswordWasSubmitted = (string) ($_POST['confirmPassword'] ?? '') !== '';

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
                    <th scope="co1l">Information</th>
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
            <a class="btn btn-submit return-button" href="register.php">
                Return to registration
            </a>
        </p>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

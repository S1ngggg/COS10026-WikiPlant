<?php
require_once __DIR__ . '/includes/session.php';

// Only accept form submissions using POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Please submit the enquiry form first.');
}

// Receive form data
$firstName = trim((string) ($_POST['firstName'] ?? ''));
$lastName = trim((string) ($_POST['lastName'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phoneNumber = trim((string) ($_POST['phoneNumber'] ?? ''));
$category = trim((string) ($_POST['categories'] ?? ''));
$comments = trim((string) ($_POST['problem_review'] ?? ''));

// Validate first name
if (!preg_match('/\A[A-Za-z ]{1,25}\z/', $firstName)) {
    exit('Please enter a valid first name.');
}

// Validate last name
if (!preg_match('/\A[A-Za-z ]{1,25}\z/', $lastName)) {
    exit('Please enter a valid last name.');
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)
    || strlen($email) > 100) {
    exit('Please enter a valid email address.');
}

// Validate phone number
if (!preg_match('/\A[0-9]{1,10}\z/', $phoneNumber)) {
    exit('Please enter a valid phone number.');
}

// Validate enquiry category
$allowedCategories = [
    'families',
    'genera',
    'species',
    'identification',
    'others'
];

if (!in_array($category, $allowedCategories, true)) {
    exit('Please select a valid enquiry category.');
}

// Validate comments
if ($comments === '') {
    exit('Please enter your question or comment.');
}

// Connect to MySQL Database
require_once __DIR__ . '/includes/db_connect.inc.php';

try {
    // Prepare SQL INSERT statement
    $sql = "INSERT INTO `enquiry`
        (`first_name`, `last_name`, `email`,
         `phone_number`, `category`, `comments`)
        VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    // Bind form data
    mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $firstName,
        $lastName,
        $email,
        $phoneNumber,
        $category,
        $comments
    );

    // Save data into the database
    if (!mysqli_stmt_execute($stmt)) {
        throw new mysqli_sql_exception('Unable to save enquiry.');
    }

    // Close statement
    mysqli_stmt_close($stmt);

} catch (mysqli_sql_exception $e) {
    error_log("Enquiry database error: " . $e->getMessage());

    http_response_code(500);
    exit("Unable to save your enquiry. Please try again.");
}

// Close database connection
mysqli_close($conn);

$pageTitle = 'Enquiry Submitted - WikiPlant';
$bodyClass = 'contribution-page account-page account-enquiry';
$cssVersion = 'account-paper-1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="css/style.css?v=<?= urlencode($cssVersion) ?>">
</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="page_main contribution-main account-main">

        <div class="page-header account-intro">
            <h1>Enquiry Submitted.</h1>

            <p>
                Thank you for contacting WikiPlant.
                Your enquiry has been successfully saved.
            </p>

            <div class="account-divider" aria-hidden="true">
                <span></span>
            </div>
        </div>

        <div class="form-actions">
            <a href="index.php" class="btn btn-submit">Back to Home</a>
            <a href="enquiry_form.php" class="btn btn-reset">Submit Another Enquiry</a>
        </div>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

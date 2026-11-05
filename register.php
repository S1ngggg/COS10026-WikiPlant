
<?php
$pageTitle = 'Register - WikiPlant';
$bodyClass = 'contribution-page account-page account-register';
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
<?php include __DIR__ . '/includes/db_connect.inc.php';?>

<main class="page_main contribution-main account-main">

    <div class="page-header account-intro">
        <a class="account-logo" href="index.php" aria-label="WikiPlant home">
            <img src="images/logo.png" alt="WikiPlant logo">
        </a>

        <h1 id="account-title">Create an Account.</h1>

        <p>Join WikiPlant and help grow our plant database.</p>

        <div class="account-divider" aria-hidden="true">
            <span></span>
        </div>
    </div>

    <form class="record-form account-form" action="process.php" method="post">

        <fieldset>
            <legend>Personal Details</legend>

            
            <div class="field-row field-row-two">

                <div class="field-group">
                    <label for="firstName">
                        First Name <span class="req">*</span>
                    </label>

                    <input
                        type="text"
                        id="firstName"
                        name="firstName"
                        pattern="[A-Za-z\s]+"
                        maxlength="25"
                        title="Alphabetical characters only"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="lastName">
                        Last Name <span class="req">*</span>
                    </label>

                    <input
                        type="text"
                        id="lastName"
                        name="lastName"
                        pattern="[A-Za-z\s]+"
                        maxlength="25"
                        title="Alphabetical characters only"
                        required
                    >
                </div>

            </div>

            <div class="field-row field-row-two">

                <div class="field-group">
                    <label for="regEmail">
                        Email Address <span class="req">*</span>
                    </label>

                    <input
                        type="email"
                        id="regEmail"
                        name="regEmail"
                        placeholder="eg: abc@gmail.com"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="phoneNumber">
                        Phone Number <span class="req">*</span>
                    </label>

                    <input
                        type="tel"
                        id="phoneNumber"
                        name="phoneNumber"
                        pattern="\d{1,10}"
                        maxlength="10"
                        placeholder="eg: 0123456789"
                        title="Enter up to 10 digits"
                        required
                    >
                </div>

            </div>
        </fieldset>

        <fieldset>
            <legend>Address</legend>

            <div class="field-group">
                <label for="streetAddress">
                    Street Address <span class="req">*</span>
                </label>

                <input
                    type="text"
                    id="streetAddress"
                    name="streetAddress"
                    maxlength="40"
                    required
                >
            </div>

            <div class="field-row">

                <div class="field-group">
                    <label for="cityTown">
                        City / Town <span class="req">*</span>
                    </label>

                    <input
                        type="text"
                        id="cityTown"
                        name="cityTown"
                        maxlength="20"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="state">
                        State <span class="req">*</span>
                    </label>

                    <select id="state" name="state" required>
                        <option value="">-- Select State --</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="WP">Federal Territories</option>
                    </select>
                </div>

                <div class="field-group">
                    <label for="postcode">
                        Postcode <span class="req">*</span>
                    </label>

                    <input
                        type="text"
                        id="postcode"
                        name="postcode"
                        pattern="\d{5}"
                        maxlength="5"
                        title="Enter 5 digits"
                        required
                    >
                </div>

            </div>
        </fieldset>

        <fieldset>
            <legend>Account Security</legend>

            <div class="field-group">
                <label for="logUser">
                    Username <span class="req">*</span>
                </label>

                <input
                    type="text"
                    id="logUser"
                    name="logUser"
                    pattern="[A-Za-z\s]+"
                    maxlength="10"
                    title="Maximum 10 alphabetical characters only"
                    required
                >
            </div>

            <div class="field-row field-row-two">

                <div class="field-group">
                    <label for="regPassword">
                        Password <span class="req">*</span>
                    </label>

                    <input
                        type="password"
                        id="regPassword"
                        name="regPassword"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}"
                        title="8-15 characters, at least 1 uppercase, 1 lowercase, 1 digit"
                        minlength="8"
                        maxlength="15"
                        required
                    >
                </div>

                <div class="field-group">
                    <label for="confirmPassword">
                        Confirm Password <span class="req">*</span>
                    </label>

                    <input
                        type="password"
                        id="confirmPassword"
                        name="confirmPassword"
                        minlength="8"
                        maxlength="15"
                        required
                    >
                </div>

            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">
                Register
            </button>

            <button type="reset" class="btn btn-reset">
                Reset
            </button>
        </div>

        <p class="form-prompt">
            Already have an account?
            <a href="login.php">Login here</a>
        </p>

    </form>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


<?php
$pageTitle = 'Enquiry - WikiPlant';
$bodyClass = 'contribution-page account-page account-enquiry';
$cssVersion = 'account-paper-1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enquiry form for WikiPlant website">
    <meta name="keywords" content="enquiries, support">
    <meta name="author" content="Terry Lin Zhen Bin">

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

        <h1 id="account-title">WikiPlant Enquiry Form</h1>

        <p>Ask any question you want about our website or plant categories!</p>

        <p class="hint">
            Fields marked with <span class="req">*</span> are required.
        </p>

        <div class="account-divider" aria-hidden="true">
            <span></span>
        </div>
    </div>

    <form
        class="record-form account-form"
        method="post"
        action="mailto:106757438@students.swinburne.edu.my"
    >
        <fieldset>
            <legend>User Information</legend>

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
                        title="Maximum 25 alphabetical characters only"
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
                        title="Maximum 25 alphabetical characters only"
                        required
                    >
                </div>
            </div>

            <div class="field-row field-row-two">
                <div class="field-group">
                    <label for="email">
                        Email Address <span class="req">*</span>
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="name@domain.com"
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
                        placeholder="e.g. 0123456789"
                        required
                    >
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Enquiry Details</legend>

            <div class="field-group">
                <label for="categories">
                    Enquiry Category <span class="req">*</span>
                </label>

                <select id="categories" name="categories" required>
                    <option value="" disabled selected>
                        -- Select Product / Service --
                    </option>
                    <option value="families">Plant Families</option>
                    <option value="genera">Plant Genera</option>
                    <option value="species">Plant Species</option>
                    <option value="identification">Identification Tool</option>
                    <option value="others">Others / General Support</option>
                </select>
            </div>

            <div class="field-group">
                <label for="description">
                    Comments / Questions <span class="req">*</span>
                </label>

                <textarea
                    id="description"
                    name="problem_review"
                    rows="5"
                    cols="40"
                    placeholder="Write down your questions or comments here..."
                    required
                ></textarea>
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Submit</button>
            <button type="reset" class="btn btn-reset">Clear Form</button>
        </div>
    </form>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

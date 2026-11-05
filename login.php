
<?php
$pageTitle = 'Login - WikiPlant';
$bodyClass = 'contribution-page account-page account-login';
$cssVersion = 'account-paper-1';
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
<?php
$nameErr = $emailErr = "";
$name = $email = $phone = $add = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  $phone = test_input($_POST["phone"]);
  $add = test_input($_POST["add"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
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

    <form class="record-form account-form" action="#" method="post">
        <fieldset>
            <legend>Account Login</legend>

            <div class="field-group">
                <label for="loginId">
                    Login ID <span class="req">*</span>
                </label>

                <input
                    type="text"
                    id="loginId"
                    name="loginId"
                    placeholder="Enter your username"
                    pattern="[A-Za-z]+"
                    maxlength="10"
                    title="Maximum 10 alphabetical characters only"
                    required
                >

                <span class="hint">Maximum 10 characters.</span>
            </div>

            <div class="field-group">
                <label for="loginPassword">
                    Password <span class="req">*</span>
                </label>

                <input
                    type="password"
                    id="loginPassword"
                    name="loginPassword"
                    placeholder="Enter your password"
                    pattern="[A-Za-z]+"
                    maxlength="25"
                    title="Maximum 25 alphabetical characters only"
                    required
                >
            </div>

            <div class="radio-row remember-row">
                <label for="rememberMe">
                    <input
                        type="checkbox"
                        id="rememberMe"
                        name="rememberMe"
                        value="yes"
                    >
                    Remember me
                </label>
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-submit">Login</button>
            <button type="reset" class="btn btn-reset">Reset</button>
        </div>

        <p class="form-prompt">
            Don't have an account?
            <a href="register.php">Register here</a>
        </p>
    </form>
</main>


<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

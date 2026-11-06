<?php require_once __DIR__ . '/includes/session.php'; ?>

<?php
$pageTitle = 'WikiPlant | About Us';
$bodyClass = 'profile-page';
$cssVersion = 'profile-fix-1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet the WikiPlant team and explore each team member's profile.">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="stylesheet" href="css/style.css?v=<?= urlencode($cssVersion) ?>">
</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content" class="profile-hub">

    <!-- Team introduction -->
    <section class="team-intro" aria-labelledby="team-title">
        <div class="team-title-capsule">
            <p class="profile-eyebrow">OUR TEAM MEMBERS</p>
            <h1 id="team-title">MEET OUR TEAM !</h1>
        </div>
    </section>

    <!-- Team member profiles -->
    <section class="team-grid" aria-label="Team member profiles">

        <!-- Member 1: Sean -->
        <a href="aboutus-sean.php" class="member-card">
            <div class="card-header-bg">
                <div class="avatar-wrapper">
                    <img src="images/SeanL.jpeg" alt="Sean">
                </div>
            </div>

            <div class="card-content">
                <h2>Sean</h2>
                <span class="member-id">ID: 106763150</span>
            </div>
        </a>

        <!-- Member 2: Bryan -->
        <a href="aboutus-bryan.php" class="member-card">
            <div class="card-header-bg">
                <div class="avatar-wrapper">
                    <img src="images/BryanTan.jpeg" alt="Bryan">
                </div>
            </div>

            <div class="card-content">
                <h2>Bryan</h2>
                <span class="member-id">ID: 105806889</span>
            </div>
        </a>

        <!-- Member 3: Joshua -->
        <a href="aboutus-joshua.php" class="member-card">
            <div class="card-header-bg">
                <div class="avatar-wrapper">
                    <img src="images/joshuawiki.jpg" alt="Joshua">
                </div>
            </div>

            <div class="card-content">
                <h2>Joshua</h2>
                <span class="member-id">ID: 106764593</span>
            </div>
        </a>

        <!-- Member 4: Terry -->
        <a href="aboutus-terry.php" class="member-card">
            <div class="card-header-bg">
                <div class="avatar-wrapper">
                    <img src="images/terry-lin-zhen-bin.png" alt="Terry">
                </div>
            </div>

            <div class="card-content">
                <h2>Terry</h2>
                <span class="member-id">ID: 106757438</span>
            </div>
        </a>

    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

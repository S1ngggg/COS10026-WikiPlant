<?php require_once __DIR__ . '/includes/session.php'; ?>

<?php
$pageTitle = 'Enhancement - WikiPlant';
$bodyClass = 'enhancement-page';
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

<main class="enhancement-main" aria-label="Enhancement">
    <div class="wrap">
        <h1 class="intro-title">WikiPlant Website Enhancements</h1>

        <p class="enhancement-intro">
            This page highlights four major enhancements implemented in WikiPlant.
            These enhancements improve the website's responsiveness, usability,
            interactivity, and functionality beyond the basic project requirements.
        </p>

        <!-- 1. Fluid Layout and Hamburger Menu -->
        <section class="enhancement-section" id="fluid-layout">
            <h2>1. Fluid Layout (Hamburger Menu)</h2>

            <div class="enhancement-content">
                <div class="enhancement-image">
                    <video autoplay muted loop playsinline controls preload="metadata">
                        <source src="images/Fluid%20Layout%20%28Hamburger%20Menu%29.MP4" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                </div>

                <div class="enhancement-details">
                    <p>
                        WikiPlant uses a responsive fluid layout that adapts to
                        different screen sizes. On smaller screens, the navigation
                        links are replaced by a hamburger menu. This allows users
                        to access the website navigation without taking up excessive
                        screen space.
                    </p>

                    <div class="tags-group">
                        <h3>Applied Page:</h3>
                        <div class="tags-container">
                            <a href="index.php" class="tag">Index</a>
                            <a href="explorer.php" class="tag">Explorer</a>
                            <a href="explorer-family.php" class="tag">Explorer Family</a>
                            <a href="explorer-genus.php" class="tag">Explorer Genus</a>
                            <a href="explorer-species.php" class="tag">Explorer Species</a>
                            <a href="identify.php" class="tag">Identify</a>
                            <a href="contributor.php" class="tag">Contributor</a>
                            <a href="contribute.php" class="tag">Contribution Form</a>
                            <a href="profile.php" class="tag">About Us</a>
                            <a href="aboutus-sean.php" class="tag">Sean</a>
                            <a href="aboutus-bryan.php" class="tag">Bryan</a>
                            <a href="aboutus-joshua.php" class="tag">Joshua</a>
                            <a href="aboutus-terry.php" class="tag">Terry</a>
                            <a href="enquiry_form.php" class="tag">Enquiry</a>
                            <a href="register.php" class="tag">Register</a>
                            <a href="login.php" class="tag">Login</a>
                            <a href="enhancement.php" class="tag">Enhancement</a>
                            <a href="acknowledgement.php" class="tag">Acknowledgement</a>
                        </div>
                    </div>

                    <div class="tags-group">
                        <h3>Refer Sources:</h3>
                        <div class="tags-container">
                            <a href="https://www.w3schools.com/css/css_rwd_intro.asp"
                               class="tag" target="_blank" rel="noopener noreferrer">
                                W3Schools RWD
                            </a>
                            <a href="https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/CSS_layout/Responsive_Design"
                               class="tag" target="_blank" rel="noopener noreferrer">
                                MDN Responsive Design
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Fixed Navigation Bar -->
        <section class="enhancement-section" id="fixed-navigation">
            <h2>2. Fixed Navigation Bar</h2>

            <div class="enhancement-content">
                <div class="enhancement-image">
                    <video autoplay muted loop playsinline controls preload="metadata">
                        <source src="images/Fixed Navigation Bar.mp4" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                </div>

                <div class="enhancement-details">
                    <p>
                        The fixed navigation bar keeps the main navigation visible
                        and accessible while users scroll through a page. This
                        allows users to access other sections or pages without
                        having to scroll back to the top.
                    </p>

                    <div class="tags-group">
                        <h3>Applied Page:</h3>
                        <div class="tags-container">
                            <a href="index.php" class="tag">Index</a>
                            <a href="explorer.php" class="tag">Explorer</a>
                            <a href="explorer-family.php" class="tag">Explorer Family</a>
                            <a href="explorer-genus.php" class="tag">Explorer Genus</a>
                            <a href="explorer-species.php" class="tag">Explorer Species</a>
                            <a href="identify.php" class="tag">Identify</a>
                            <a href="contributor.php" class="tag">Contributor</a>
                            <a href="contribute.php" class="tag">Contribution Form</a>
                            <a href="profile.php" class="tag">About Us</a>
                            <a href="aboutus-sean.php" class="tag">Sean</a>
                            <a href="aboutus-bryan.php" class="tag">Bryan</a>
                            <a href="aboutus-joshua.php" class="tag">Joshua</a>
                            <a href="aboutus-terry.php" class="tag">Terry</a>
                            <a href="enquiry_form.php" class="tag">Enquiry</a>
                            <a href="register.php" class="tag">Register</a>
                            <a href="login.php" class="tag">Login</a>
                        </div>
                    </div>

                    <div class="tags-group">
                        <h3>Refer Sources:</h3>
                        <div class="tags-container">
                            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/position"
                               class="tag" target="_blank" rel="noopener noreferrer">
                                MDN CSS Position
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Flip Card -->
        <section class="enhancement-section" id="flip-card">
            <h2>3. Flip Card</h2>

            <div class="enhancement-content">
                <div class="enhancement-image">
                    <video autoplay muted loop playsinline controls preload="metadata">
                        <source src="images/Flip Card.mp4" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                </div>

                <div class="enhancement-details">
                    <p>
                        Flip cards provide an interactive way to display information.
                        When users click a card, it flips to reveal additional details
                        about a plant, such as its description, characteristics, or
                        other relevant information.
                    </p>

                    <div class="tags-group">
                        <h3>Applied Page:</h3>
                        <div class="tags-container">
                            <a href="contributor.php" class="tag">Contributor</a>
                        </div>
                    </div>

                    <div class="tags-group">
                        <h3>Refer Sources:</h3>
                        <div class="tags-container">
                            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform"
                               class="tag" target="_blank" rel="noopener noreferrer">
                                MDN CSS Transform
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Google Map -->
        <section class="enhancement-section" id="google-map">
            <h2>4. Google Map</h2>

            <div class="enhancement-content">
                <div class="enhancement-image">
                    <video autoplay muted loop playsinline controls preload="metadata">
                        <source src="images/Google Map.mp4" type="video/mp4">
                        Your browser does not support the video element.
                    </video>
                </div>

                <div class="enhancement-details">
                    <p>
                        Google Maps can display geographical locations related
                        to plant observations. This provides geographical context
                        and helps users understand where particular plant records
                        or observations are located.
                    </p>

                    <div class="tags-group">
                        <h3>Applied Page:</h3>
                        <div class="tags-container">
                            <a href="explorer.php" class="tag">Explorer</a>
                        </div>
                    </div>

                    <div class="tags-group">
                        <h3>Refer Sources:</h3>
                        <div class="tags-container">
                            <a href="https://developers.google.com/maps"
                               class="tag" target="_blank" rel="noopener noreferrer">
                                Google Maps Platform
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- All Website Pages -->
        <section class="enhancement-section" id="all-pages">
            <h2>All WikiPlant Pages</h2>

            <p class="enhancement-intro">
                Use the links below to access the main pages of WikiPlant.
            </p>

            <div class="all-pages">
                <h3>Home and Plant Exploration</h3>
                <div class="tags-container">
                    <a href="index.php" class="tag">Index</a>
                    <a href="explorer.php" class="tag">Explorer</a>
                    <a href="explorer-family.php" class="tag">By Family</a>
                    <a href="explorer-genus.php" class="tag">By Genus</a>
                    <a href="explorer-species.php" class="tag">By Species</a>
                    <a href="identify.php" class="tag">Identify</a>
                </div>
            </div>

            <div class="all-pages">
                <h3>Contributions and Team Profiles</h3>
                <div class="tags-container">
                    <a href="contributor.php" class="tag">Contributor</a>
                    <a href="contribute.php" class="tag">Contribution Form</a>
                    <a href="profile.php" class="tag">About Us</a>
                    <a href="aboutus-sean.php" class="tag">Sean</a>
                    <a href="aboutus-bryan.php" class="tag">Bryan</a>
                    <a href="aboutus-joshua.php" class="tag">Joshua</a>
                    <a href="aboutus-terry.php" class="tag">Terry</a>
                </div>
            </div>

            <div class="all-pages">
                <h3>Account and Other Pages</h3>
                <div class="tags-container">
                    <a href="enquiry_form.php" class="tag">Enquiry</a>
                    <a href="register.php" class="tag">Register</a>
                    <a href="login.php" class="tag">Login</a>
                    <a href="enhancement.php" class="tag" aria-current="page">Enhancement</a>
                    <a href="acknowledgement.php" class="tag">Acknowledgement</a>
                </div>

                <p class="all-pages-note">
                    Some links may need updating if your project uses different
                    filenames or if a page has not been created yet.
                </p>
            </div>
        </section>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

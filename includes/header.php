<?php
ob_start();
include __DIR__ . '/account-menu.php';
$headerAccountMenu = ob_get_clean();
$headerSignedIn = !empty($_SESSION['user_id']) || !empty($_SESSION['admin_id']);
$headerGuestButtons = $headerSignedIn ? '' : $headerAccountMenu;
$headerMemberMenu = $headerSignedIn ? $headerAccountMenu : '';
$headerHomeCurrent = basename($_SERVER['SCRIPT_FILENAME'] ?? "") === "index.php"
    ? " aria-current='page'"
    : "";

echo "
<header class='site-header'>
    <div class='wrap'>

        <a class='brand' href='index.php' aria-label='WikiPlant home'{$headerHomeCurrent}>
            <img src='images/logo.png' alt='WikiPlant logo'>
            <span class='brand-motto'>Wiki Plant</span>
        </a>

        <input class='nav-state' type='checkbox' id='navigation-toggle'
            aria-label='Open or close navigation'
            aria-controls='navigation-panel'>

        <label class='nav-toggle' for='navigation-toggle'>
            <span class='nav-toggle-lines' aria-hidden='true'>
                <span></span><span></span><span></span>
            </span>
            <span class='nav-close' aria-hidden='true'>&times;</span>
        </label>

        <label class='nav-backdrop' for='navigation-toggle'></label>

        <div class='nav-drawer-panel' id='navigation-panel'>

            <div class='nav-drawer-topbar'>
                <span>Navigation</span>
            </div>

            <nav class='main-nav' aria-label='Primary'>
                <ul>
                    <li class='nav-drop'>
                        <a href='explorer.php'>Explore</a>
                        <ul class='drop-menu'>
                            <li><a href='explorer-family.php'>By Family</a></li>
                            <li><a href='explorer-genus.php'>By Genus</a></li>
                            <li><a href='explorer-species.php'>By Species</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href='identify.php'>Identify</a>
                    </li>

                    <li class='nav-drop'>
                        <a href='contributor.php'>Contribute</a>
                        <ul class='drop-menu'>
                            <li>
                                <a href='contribute.php'>Contribution Form</a>
                            </li>
                        </ul>
                    </li>

                    <li class='nav-drop'>
                        <a href='profile.php'>About Us</a>
                        <ul class='drop-menu'>
                            <li><a href='aboutus-sean.php'>Sean</a></li>
                            <li><a href='aboutus-bryan.php'>Bryan</a></li>
                            <li><a href='aboutus-joshua.php'>Joshua</a></li>
                            <li><a href='aboutus-terry.php'>Terry</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href='enquiry_form.php'>Enquiry</a>
                    </li>
                </ul>
            </nav>

            {$headerGuestButtons}

        </div>
        {$headerMemberMenu}
    </div>
</header>
";
?>

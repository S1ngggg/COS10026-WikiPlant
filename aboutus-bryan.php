<?php require_once __DIR__ . '/includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet Bryan Tan Jia Poh, a WikiPlant team member.">
    <meta name="author" content="Bryan Tan Jia Poh">

    <title>Bryan Tan Jia Poh | About Us | WikiPlant</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="about-page about-bryan-page">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="about-main">

        <!-- Introduction to the page -->
        <section class="about-intro" aria-labelledby="about-title">
            <h1 id="about-title">
                The people behind<br>
                the page<span class="about-period">.</span>
            </h1>

            <p>
                A little introduction to our studies, our roots,
                and the things we enjoy.
            </p>
        </section>

        <!-- Bryan's profile section -->
        <section class="about-profile about-profile-bryan"
            aria-labelledby="bryan-member-name">

            <table class="about-profile-table">
                <caption class="about-sr-only">
                    Bryan Tan Jia Poh profile and contact information
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <tr>
                        <td colspan="2" class="about-name-cell">
                            <p class="about-eyebrow">Meet the member</p>

                            <h2 id="bryan-member-name" class="about-name">
                                Bryan Tan Jia Poh
                            </h2>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="about-portrait-cell">
                            <figure class="about-portrait">
                                <img
                                    class="about-photo"
                                    src="images/BryanTan.jpeg"
                                    alt="Personal photo of Bryan Tan Jia Poh"
                                    width="240"
                                    height="280">
                            </figure>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Introduction</th>

                        <td class="about-profile-value">
                            <div class="about-bio">
                                <h2>Hello, I&rsquo;m Bryan.</h2>

                                <p>
                                    I am an undergraduate student studying
                                    Computer Science at Swinburne University of
                                    Technology Sarawak. Welcome to my personal
                                    corner of WikiPlant, where you can get to
                                    know a little more about me.
                                </p>
                            </div>
                        </td>
                    </tr>

                    <!-- Student number -->
                    <tr class="about-info-row">
                        <th scope="row">Student number</th>

                        <td class="about-profile-value">
                            <span class="about-student-number">
                                105806889
                            </span>
                        </td>
                    </tr>

                    <!-- Course -->
                    <tr class="about-info-row">
                        <th scope="row">Course</th>

                        <td class="about-profile-value">
                            <span class="about-course">
                                Bachelor of Computer Science
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="about-contact about-profile-contact">
                <a
                    class="about-email-button"
                    href="mailto:105806889@students.swinburne.edu.my">
                    Email me
                </a>
            </div>
        </section>

        <!-- Personal Information -->
        <section class="about-personal"
            aria-labelledby="bryan-personal-title">

            <div class="about-section-heading">
                <div>
                    <p class="about-eyebrow">Beyond the classroom</p>

                    <h2 id="bryan-personal-title">
                        A little more about Bryan
                    </h2>
                </div>
            </div>

            <table class="about-personal-table">
                <caption class="about-sr-only">
                    Bryan Tan Jia Poh personal background,
                    hometown and hobbies
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <!-- Bryan's demographic information -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number"
                                aria-hidden="true">01</span>

                            Demographic information<br>
                            about me
                        </th>

                        <td>
                            <p>
                                I am Bryan Tan Jia Poh, an undergraduate
                                student pursuing a Bachelor of Computer
                                Science at Swinburne University of
                                Technology Sarawak. My current educational
                                journey focuses on developing my knowledge
                                and skills in computing and preparing for
                                future opportunities in the technology
                                field.
                            </p>

                            <p class="about-detail-note">
                                I come from Kuching, Sarawak.
                            </p>
                        </td>
                    </tr>

                    <!-- Bryan's hometown -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number"
                                aria-hidden="true">02</span>

                            Description of<br>
                            my hometown
                        </th>

                        <td>
                            <h3>Kuching, Sarawak</h3>

                            <p>
                                Kuching is my hometown and a place that
                                I feel closely connected to. It is known
                                for its diverse culture, local food,
                                friendly community, and unique
                                surroundings. Growing up in Kuching has
                                given me many memorable experiences and
                                a strong sense of connection to my home.
                            </p>
                        </td>
                    </tr>

                    <!-- Bryan's hobbies -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number"
                                aria-hidden="true">03</span>

                            My hobbies
                        </th>

                        <td>
                            <h3>Music &amp; Badminton.</h3>

                            <p>
                                In my free time, I enjoy listening to
                                music and playing badminton. Music helps
                                me relax and enjoy my free time, while
                                badminton allows me to stay active and
                                have fun.
                            </p>

                            <ul class="about-interest-list"
                                aria-label="Bryan's hobbies">
                                <li>Music</li>
                                <li>Badminton</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Navigation between member profiles -->
        <nav class="about-pagination" aria-label="Member profiles">

            <a
                class="about-pagination-link about-pagination-previous"
                href="aboutus-sean.php"
                aria-label="Previous profile: Sean"
                rel="prev">

                <span class="about-pagination-arrow"
                    aria-hidden="true">&larr;</span>

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">
                        Previous profile
                    </span>

                    <span class="about-pagination-title">
                        Sean
                    </span>
                </span>
            </a>

            <a
                class="about-pagination-link about-pagination-next"
                href="aboutus-terry.php"
                aria-label="Next profile: Terry"
                rel="next">

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">
                        Next profile
                    </span>

                    <span class="about-pagination-title">
                        Terry
                    </span>
                </span>

                <span class="about-pagination-arrow"
                    aria-hidden="true">&rarr;</span>
            </a>

        </nav>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>

</html>

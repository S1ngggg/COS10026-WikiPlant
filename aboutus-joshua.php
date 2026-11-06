<?php require_once __DIR__ . '/includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet Joshua Wong Hock Sing, a WikiPlant team member.">
    <meta name="author" content="Joshua Wong Hock Sing">

    <title>Joshua Wong | About Us | WikiPlant</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="about-page about-joshua">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="about-main">

        <!-- Joshua's Profile -->
        <section class="about-profile about-profile-sean about-profile-joshua"
            aria-labelledby="joshua-member-name">

            <table class="about-profile-table">
                <caption class="about-sr-only">
                    Joshua Wong Hock Sing profile and contact information
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <tr>
                        <td class="about-portrait-cell" colspan="2">
                            <figure class="about-portrait">
                                <img
                                    class="about-photo"
                                    src="images/joshuawiki.jpg"
                                    alt="Personal photo of Joshua Wong Hock Sing"
                                    width="240"
                                    height="280">
                            </figure>
                        </td>
                    </tr>

                    <tr>
                        <td class="about-name-cell" colspan="2">
                            <p class="about-eyebrow">
                                Meet the member
                            </p>

                            <h1 id="joshua-member-name" class="about-name">
                                Joshua Wong Hock Sing
                            </h1>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Introduction</th>

                        <td class="about-profile-value">
                            <div class="about-bio">
                                <h2>Hello, I&rsquo;m Joshua.</h2>

                                <p>
                                    I am a passionate student studying at
                                    Swinburne University of Technology!
                                    Currently, im pursuing a Bachelor in
                                    Computer Science ( Cybersecurity ).
                                    Welcome to my personal corner of
                                    WikiPlant, come and learn more about me!
                                </p>
                            </div>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Student number</th>

                        <td class="about-profile-value about-student-number">
                            106764593
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Course</th>

                        <td class="about-profile-value about-course">
                            Bachelor in Computer Science ( Cybersecurity )
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="about-contact about-profile-contact">
                <a
                    class="about-email-button"
                    href="mailto:106764593@students.swinburne.edu.my">
                    Email me
                </a>
            </div>
        </section>

        <!-- Joshua's Personal Information -->
        <section class="about-personal" aria-labelledby="personal-title">

            <div class="about-section-heading">
                <div>
                    <p class="about-eyebrow">
                        Beyond the classroom
                    </p>

                    <h2 id="personal-title">
                        A little more about Joshua
                    </h2>
                </div>
            </div>

            <table class="about-personal-table">
                <caption class="about-sr-only">
                    Joshua's personal background, hometown and hobbies
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <!-- Joshua's Demographic Information -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                01
                            </span>

                            Demographic information<br>
                            about me
                        </th>

                        <td>
                            <h3>Joshua Wong</h3>

                            <p>
                                I am Joshua Wong Hock Sing, a student who
                                has loads of interest in the current tech
                                world. I'm currently studying in Swinburne
                                University of Technology Sarawak, pursuing
                                a Bachelor in Computer Science
                                ( Cybersecurity ) degree. Prior to this,
                                I had taken Foundation in Computing in
                                Multimedia University in Cyberjaya.
                            </p>
                        </td>
                    </tr>

                    <!-- Joshua's Hometown -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                02
                            </span>

                            Description of<br>
                            my hometown
                        </th>

                        <td>
                            <h3>Sri Aman, Sarawak</h3>

                            <p>
                                I am from Sri Aman, Sarawak. However, I
                                currently reside in Kuching, Sarawak, a
                                beautiful city known for its beautiful
                                surrounding biodiversity and cultural
                                heritage. The wonderful atmosphere brings
                                me a sense of nostalgia and relief,
                                something I wouldn't trade for the world!
                            </p>
                        </td>
                    </tr>

                    <!-- Joshua's Hobbies -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                03
                            </span>

                            My hobbies
                        </th>

                        <td>
                            <h3>Indoors &amp; Outdoors.</h3>

                            <p>
                                My hobbies vary, ranging from playing
                                video games with my friends or going out
                                to play with my dear ones. Likewise, I
                                enjoy peaceful times, such as reading a
                                novel, watching a movie or even listening
                                to music! These are times I cherish the
                                most.
                            </p>

                            <ul class="about-interest-list"
                                aria-label="Joshua's hobbies">
                                <li>Badminton</li>
                                <li>Video Games</li>
                                <li>Reading</li>
                                <li>Music</li>
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
                href="aboutus-terry.php"
                aria-label="Previous profile: Terry"
                rel="prev">

                <span class="about-pagination-arrow" aria-hidden="true">
                    &larr;
                </span>

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">
                        Previous profile
                    </span>

                    <span class="about-pagination-title">
                        Terry
                    </span>
                </span>
            </a>

            <a
                class="about-pagination-link about-pagination-next"
                href="aboutus-sean.php"
                aria-label="Next profile: Sean"
                rel="next">

                <span class="about-pagination-copy">
                    <span class="about-pagination-title">
                        Sean
                    </span>
                </span>

                <span class="about-pagination-arrow" aria-hidden="true">
                    &rarr;
                </span>
            </a>

        </nav>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>

</html>

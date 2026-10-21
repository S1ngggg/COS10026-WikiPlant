
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Meet Terry Lin Zhen Bin, a WikiPlant team member and Bachelor of Computer Science student.">
    <meta name="author" content="Terry Lin Zhen Bin">
    <title>Terry Lin Zhen Bin | About Us | WikiPlant</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="about-page about-terry-page">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="about-main">

        <!-- Terry profile section -->
        <section class="about-profile about-profile-sean about-profile-terry"
                 aria-labelledby="terry-member-name">

            <table class="about-profile-table">
                <caption class="about-sr-only">
                    Terry Lin Zhen Bin's profile and contact information
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <tr>
                        <td class="about-portrait-cell" colspan="2">
                            <figure class="about-portrait">
                                <img class="about-photo"
                                     src="images/terry-lin-zhen-bin.png"
                                     alt="Illustrated profile avatar for Terry Lin Zhen Bin"
                                     width="240"
                                     height="280">
                            </figure>
                        </td>
                    </tr>

                    <tr>
                        <td class="about-name-cell" colspan="2">
                            <p class="about-eyebrow">Meet the member</p>
                            <h1 id="terry-member-name" class="about-name">
                                Terry Lin Zhen Bin
                            </h1>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Introduction</th>
                        <td class="about-profile-value">
                            <div class="about-bio">
                                <h2>Hello, I&rsquo;m Terry.</h2>
                                <p>
                                    I am studying for a Bachelor of Computer
                                    Science at Swinburne University of
                                    Technology. Welcome to my personal corner
                                    of WikiPlant, where you can get to know a
                                    little more about me.
                                </p>
                            </div>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Student number</th>
                        <td class="about-profile-value about-student-number">
                            106757438
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Course</th>
                        <td class="about-profile-value about-course">
                            Bachelor of Computer Science
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="about-contact about-profile-contact">
                <a class="about-email-button"
                   href="mailto:106757438@students.swinburne.edu.my">
                    Email me
                </a>
            </div>

        </section>

        <!-- Terry personal profile section -->
        <section class="about-personal" aria-labelledby="terry-personal-title">

            <div class="about-section-heading">
                <div>
                    <p class="about-eyebrow">Beyond the classroom</p>
                    <h2 id="terry-personal-title">
                        A little more about Terry
                    </h2>
                </div>
            </div>

            <table class="about-personal-table">
                <caption class="about-sr-only">
                    Terry Lin Zhen Bin's background, hometown and interests
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <!-- Demographic information -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                01
                            </span>
                            Demographic information<br>
                            about me
                        </th>
                        <td>
                            <p>
                                I am Terry Lin Zhen Bin, a student pursuing
                                a Bachelor of Computer Science.
                            </p>
                            <p class="about-detail-note">
                                My hometown is Miri, Sarawak.
                            </p>
                        </td>
                    </tr>

                    <!-- Hometown -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                02
                            </span>
                            Description of<br>
                            my hometown
                        </th>
                        <td>
                            <h3>Miri, Sarawak</h3>
                            <p>
                                Miri is a coastal city in northern Sarawak.
                                It is known as a gateway to nearby natural
                                attractions, including the Niah Caves and
                                Gunung Mulu National Park.
                            </p>
                        </td>
                    </tr>

                    <!-- Hobbies -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                03
                            </span>
                            My hobbies
                        </th>
                        <td>
                            <h3>Singing &amp; trading card games.</h3>
                            <p>
                                In my free time, I enjoy singing and playing
                                trading card games.
                            </p>

                            <ul class="about-interest-list"
                                aria-label="Terry's hobbies">
                                <li>Singing</li>
                                <li>Trading card games</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Profile pagination -->
        <nav class="about-pagination" aria-label="Member profiles">

            <a class="about-pagination-link about-pagination-previous"
               href="aboutus-bryan.php"
               aria-label="Previous profile: Bryan"
               rel="prev">

                <span class="about-pagination-arrow" aria-hidden="true">
                    &larr;
                </span>

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">
                        Previous profile
                    </span>
                    <span class="about-pagination-title">
                        Bryan
                    </span>
                </span>
            </a>

            <a class="about-pagination-link about-pagination-next"
               href="aboutus-joshua.php"
               aria-label="Next profile: Joshua"
               rel="next">

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">
                        Next profile
                    </span>
                    <span class="about-pagination-title">
                        Joshua
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

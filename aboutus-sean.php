
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet Sean Liew Shou Tian, a WikiPlant team member.">
    <meta name="author" content="Sean Liew Shou Tian">
    <title>Sean Liew Shou Tian | About Us | WikiPlant</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="about-page about-sean-page">

    <!-- Decorative background -->
    <div class="sean-background" aria-hidden="true">
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
        <span class="sean-ball"></span>
    </div>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="about-main">

        <!-- Sean profile section -->
        <section class="about-profile about-profile-sean" aria-labelledby="member-name">

            <table class="about-profile-table">
                <caption class="about-sr-only">
                    Sean Liew Shou Tian profile and contact information
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
                                     src="images/SeanL.jpeg"
                                     alt="Sean Liew Shou Tian"
                                     width="810"
                                     height="1080">
                            </figure>
                        </td>
                    </tr>

                    <tr>
                        <td class="about-name-cell" colspan="2">
                            <p class="about-eyebrow">Meet the member</p>
                            <h1 id="member-name" class="about-name">
                                Sean Liew Shou Tian
                            </h1>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Introduction</th>
                        <td class="about-profile-value">
                            <div class="about-bio">
                                <h2>Hello, I&rsquo;m Sean.</h2>
                                <p>
                                    I am studying for a Bachelor in Computer
                                    Science at Swinburne University of
                                    Technology. Welcome to my personal
                                    corner of WikiPlant, where you can get
                                    to know a little more about me.
                                </p>
                            </div>
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Student number</th>
                        <td class="about-profile-value about-student-number">
                            106763150
                        </td>
                    </tr>

                    <tr class="about-info-row">
                        <th scope="row">Course</th>
                        <td class="about-profile-value about-course">
                            Bachelor in Computer Science
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="about-contact about-profile-contact">
                <a class="about-email-button"
                   href="mailto:106763150@students.swinburne.edu.my">
                    Email me
                </a>
            </div>

        </section>

        <!-- Personal information -->
        <section class="about-personal" aria-labelledby="personal-title">

            <div class="about-section-heading">
                <div>
                    <p class="about-eyebrow">Beyond the classroom</p>
                    <h2 id="personal-title">A little more about Sean</h2>
                </div>
            </div>

            <table class="about-personal-table">
                <caption class="about-sr-only">
                    Sean Liew Shou Tian personal background,
                    hometown and hobbies
                </caption>

                <colgroup>
                    <col class="about-label-column">
                    <col>
                </colgroup>

                <tbody>
                    <!-- Sean Demographic Information -->
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
                                I am Sean Liew Shou Tian, a university
                                student pursuing a Bachelor in Computer
                                Science at Swinburne University of
                                Technology. My current educational
                                journey centres on developing my
                                knowledge of computing and preparing
                                for opportunities in the technology
                                field.
                            </p>
                            <p class="about-detail-note">
                                I am 21 years old and I come from
                                Kota Kinabalu, Sabah.
                            </p>
                        </td>
                    </tr>

                    <!-- Sean Hometown -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                02
                            </span>
                            Description of<br>
                            my hometown
                        </th>
                        <td>
                            <h3>Kota Kinabalu, Sabah</h3>
                            <p>
                                My hometown is where many of my earliest
                                memories began. Its familiar surroundings,
                                local food, and community make it a
                                meaningful part of my life. Growing up
                                there has helped shape my perspective and
                                given me a lasting sense of belonging.
                            </p>
                        </td>
                    </tr>

                    <!-- Sean Hobbies -->
                    <tr>
                        <th scope="row">
                            <span class="about-row-number" aria-hidden="true">
                                03
                            </span>
                            My hobbies
                        </th>
                        <td>
                            <h3>Curiosity, creativity &amp; time outdoors.</h3>
                            <p>
                                In my free time, I enjoy exploring small
                                programming projects, reading about new
                                ideas, taking walks outdoors, and playing
                                sports. These activities offer a balance
                                between learning, creative thinking,
                                and relaxation.
                            </p>

                            <ul class="about-interest-list"
                                aria-label="Sean's hobbies">
                                <li>Programming</li>
                                <li>Reading</li>
                                <li>Outdoor walks</li>
                                <li>Sports</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Next member profile -->
        <nav class="about-pagination about-pagination-end"
             aria-label="Member profiles">

            <a class="about-pagination-link about-pagination-next"
               href="aboutus-bryan.php"
               aria-label="Next profile: Bryan"
               rel="next">

                <span class="about-pagination-copy">
                    <span class="about-pagination-label">Next profile</span>
                    <span class="about-pagination-title">Bryan</span>
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

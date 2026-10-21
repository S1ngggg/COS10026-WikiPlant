
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Meet the WikiPlant community and explore sample plant observations from Malaysia.">
    <meta name="keywords" content="WikiPlant, contributors, plants, biodiversity, citizen science">
    <meta name="author" content="Bryan">
    <title>Community contributors | WikiPlant</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="contributor-page">

    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Main Content -->
    <main id="main" class="page_main">

        <!-- Page Introduction -->
        <section class="page-intro" aria-labelledby="page-title">

            <p class="eyebrow">PEOPLE · PLANTS · PLACE</p>

            <h1 id="page-title">Community contributions</h1>

            <p class="intro-copy">
                Local observations help build a richer picture of Malaysia’s
                plant life. Explore sample records from the WikiPlant community
                and learn how to share an observation responsibly.
            </p>

            <div class="intro-actions">

                <a class="intro-button" href="contribution.php">
                    Share an observation
                    <span aria-hidden="true">→</span>
                </a>

                <a class="text-link" href="#recent-observations">
                    Browse field notes
                    <span aria-hidden="true">↓</span>
                </a>

            </div>

        </section>

        <!-- Main Content Grid -->
        <div class="content_grid">

            <!-- Main Content Area -->
            <div class="main_content_area">

                <!-- About Section -->
                <section class="content_section about-section"
                         aria-labelledby="about-title">

                    <div class="section-kicker">
                        A shared field guide
                    </div>

                    <h2 id="about-title">
                        Science grows through shared observations
                    </h2>

                    <p>
                        WikiPlant uses a citizen science approach to invite
                        people to document plants they encounter in forests,
                        parks, gardens and other landscapes.
                    </p>

                    <p>
                        A clear photograph paired with a date, place and
                        habitat note gives researchers useful context for
                        reviewing an observation.
                    </p>

                    <p class="callout-note">
                        <strong>Respect the plant and its habitat.</strong>
                        Photograph plants in place, avoid collecting or
                        damaging them, and do not share precise locations
                        for sensitive species.
                    </p>

                </section>

                <!-- Recent Observations -->
                <section id="recent-observations"
                         class="content_section observation-section"
                         aria-labelledby="observations-title">

                    <div class="section-heading">
                        <div>
                            <div class="section-kicker">From the field</div>
                            <h2 id="observations-title">
                                Recent plant observations
                            </h2>
                        </div>
                    </div>

                    <div class="contribution_feed">

                        <!-- Observation 1 - Bryan Tan -->
                        <article class="feed_card">

                            <figure class="feed_img_box">
                                <img src="images/fragaria-vesca.jpg"
                                     alt="Wild strawberry (Fragaria vesca)"
                                     class="feed_img"
                                     width="900"
                                     height="600"
                                     loading="lazy">
                                <figcaption>Contributor photo</figcaption>
                            </figure>

                            <div class="feed_info">

                                <p class="record-type">
                                    COMMUNITY OBSERVATION
                                </p>

                                <h2>
                                    Wild strawberry
                                    <i>(Fragaria vesca)</i>
                                </h2>

                                <p class="feed_meta">
                                    <span>Contributor</span>
                                    Bryan Tan
                                    <span>Date</span>
                                    28 September 2026
                                </p>

                                <p class="feed_desc">
                                    “Trifoliate leaves and small white flowers,
                                    followed by fruit far smaller than its
                                    cultivated relatives.”
                                </p>

                            </div>

                            <details class="observation-comments">
                                <summary>Write a comment</summary>

                                <p class="comment-form-note">
                                    Your comment will be sent to the WikiPlant
                                    team by email and will not appear on this
                                    page automatically.
                                </p>

                                <form class="observation-comment-form"
                                      action="mailto:105806889@students.swinburne.edu.my"
                                      method="post"
                                      enctype="text/plain">

                                    <input type="hidden"
                                           name="Observation"
                                           value="Wild strawberry (Fragaria vesca) — Bryan Tan">

                                    <div class="comment-field">
                                        <label for="comment-name-strawberry">
                                            Your name
                                        </label>
                                        <input id="comment-name-strawberry"
                                               name="Name"
                                               type="text"
                                               maxlength="80"
                                               autocomplete="name"
                                               required>
                                    </div>

                                    <div class="comment-field">
                                        <label for="comment-strawberry">
                                            Comment
                                        </label>
                                        <textarea id="comment-strawberry"
                                                  name="Comment"
                                                  rows="3"
                                                  maxlength="1000"
                                                  placeholder="Share a helpful thought about this observation."
                                                  required></textarea>
                                    </div>

                                    <button class="comment-submit" type="submit">
                                        Send comment
                                    </button>

                                </form>
                            </details>

                        </article>

                        <!-- Observation 2 - Sarah Lim -->
                        <article class="feed_card">

                            <figure class="feed_img_box">
                                <img src="images/spathiphyllum-wallisii.jpg"
                                     alt="Peace lily (Spathiphyllum wallisii)"
                                     class="feed_img"
                                     width="1000"
                                     height="750"
                                     loading="lazy">
                                <figcaption>Contributor photo</figcaption>
                            </figure>

                            <div class="feed_info">

                                <p class="record-type">
                                    COMMUNITY OBSERVATION
                                </p>

                                <h2>
                                    Peace lily
                                    <i>(Spathiphyllum wallisii)</i>
                                </h2>

                                <p class="feed_meta">
                                    <span>Contributor</span>
                                    Sarah Lim
                                    <span>Date</span>
                                    27 September 2026
                                </p>

                                <p class="feed_desc">
                                    “Dark lance-shaped leaves and a single white
                                    spathe curling around a pale spadix.
                                    Tolerant of low light.”
                                </p>

                            </div>

                            <details class="observation-comments">
                                <summary>Write a comment</summary>

                                <p class="comment-form-note">
                                    Your comment will be sent to the WikiPlant
                                    team by email and will not appear on this
                                    page automatically.
                                </p>

                                <form class="observation-comment-form"
                                      action="mailto:106764593@students.swinburne.edu.my"
                                      method="post"
                                      enctype="text/plain">

                                    <input type="hidden"
                                           name="Observation"
                                           value="Peace lily (Spathiphyllum wallisii) — Sarah Lim">

                                    <div class="comment-field">
                                        <label for="comment-name-peace-lily">
                                            Your name
                                        </label>
                                        <input id="comment-name-peace-lily"
                                               name="Name"
                                               type="text"
                                               maxlength="80"
                                               autocomplete="name"
                                               required>
                                    </div>

                                    <div class="comment-field">
                                        <label for="comment-peace-lily">
                                            Comment
                                        </label>
                                        <textarea id="comment-peace-lily"
                                                  name="Comment"
                                                  rows="3"
                                                  maxlength="1000"
                                                  placeholder="Share a helpful thought about this observation."
                                                  required></textarea>
                                    </div>

                                    <button class="comment-submit" type="submit">
                                        Send comment
                                    </button>

                                </form>
                            </details>

                        </article>

                    </div>

                </section>

            </div>

            <!-- Sidebar -->
            <aside class="sidebar" aria-label="Contribution information">

                <!-- Join WikiPlant -->
                <section class="sidebar_box green_box"
                         aria-labelledby="join-title">

                    <p class="section-kicker">
                        Have a plant observation?
                    </p>

                    <h2 id="join-title">
                        Add your voice to the field guide.
                    </h2>

                    <p>
                        Share a clear photo and a few details about what
                        you observed. Your record can help others learn
                        about Malaysia’s plant diversity.
                    </p>

                    <a href="contribution.php" class="brutal_btn">
                        Open contribution form
                        <span aria-hidden="true">→</span>
                    </a>

                    <p class="login-note">
                        New to WikiPlant?
                        <a href="register.php">Create an account</a>
                        before contributing.
                    </p>

                </section>

                <!-- Before You Submit -->
                <section class="sidebar_box white_box"
                         aria-labelledby="quick-guidelines-title">

                    <h2 id="quick-guidelines-title">
                        Before you submit
                    </h2>

                    <ul class="styled_ul">
                        <li>Use clear, relevant photographs.</li>
                        <li>Include the plant name if known.</li>
                        <li>Describe the habitat and observation date.</li>
                        <li>Do not disturb the plant or its surroundings.</li>
                    </ul>

                </section>

                <!-- How Contributions Help -->
                <section class="content_section guidance-section"
                         aria-labelledby="guidance-title">

                    <div class="section-kicker">
                        A useful record
                    </div>

                    <h2 id="guidance-title">
                        How contributions help
                    </h2>

                    <p>
                        Good observations are specific, respectful and easy
                        for another person to review. Before submitting a
                        record:
                    </p>

                    <ol class="steps-list">

                        <li>
                            <span>01</span>
                            <div>
                                <strong>Observe without disturbance</strong>
                                <p>
                                    Leave the plant and its habitat as you
                                    found them.
                                </p>
                            </div>
                        </li>

                        <li>
                            <span>02</span>
                            <div>
                                <strong>Photograph useful details</strong>
                                <p>
                                    Capture the whole plant, then close views
                                    of leaves, flowers or fruit.
                                </p>
                            </div>
                        </li>

                        <li>
                            <span>03</span>
                            <div>
                                <strong>Add field context</strong>
                                <p>
                                    Record the date, a suitable location and
                                    the habitat where it was growing.
                                </p>
                            </div>
                        </li>

                        <li>
                            <span>04</span>
                            <div>
                                <strong>Review before submitting</strong>
                                <p>
                                    Check that your information is accurate
                                    and your photograph is clear before
                                    submitting the observation.
                                </p>
                            </div>
                        </li>

                    </ol>

                </section>

            </aside>

        </div>

        <!-- Contributors -->
        <section class="content_section people-section"
                 aria-labelledby="people-title">

            <div class="section-heading">
                <div>
                    <div class="section-kicker">
                        The people behind the records
                    </div>
                    <h2 id="people-title">Meet the contributors</h2>
                </div>
            </div>

            <p class="people-intro">
                Every careful observation adds another perspective
                to the field guide. Select a contributor to see a
                sample plant record.
            </p>

            <div class="contributor_cards">

                <!-- Bryan Tan - Wild strawberry -->
                <article class="contributor_card">

                    <input class="contributor-card-toggle"
                           type="checkbox"
                           id="bryan-card"
                           aria-label="Flip Bryan Tan's contribution card">

                    <label class="contributor-card-front" for="bryan-card">

                        <span class="contributor_avatar" aria-hidden="true">
                            B
                        </span>

                        <span class="profile-copy">

                            <span class="contributor-name">Bryan Tan</span>

                            <span class="contributor-role">
                                Community Contributor
                            </span>

                            <span class="badge">Plant Observer</span>

                            <span class="flip-prompt">
                                Tap to view plant contribution
                                <span aria-hidden="true">↻</span>
                            </span>

                        </span>

                    </label>

                    <div class="contributor-card-back">

                        <div class="photo-zoom">
                            <img src="images/fragaria-vesca.jpg"
                                 alt="Wild strawberry (Fragaria vesca)"
                                 loading="lazy">
                        </div>

                        <div class="contribution-copy">

                            <span class="contribution-label">
                                Sample contribution
                            </span>

                            <h2>Wild strawberry</h2>

                            <p><i>Fragaria vesca</i></p>

                            <p class="contribution-note">
                                “Trifoliate leaves and small white flowers,
                                followed by fruit far smaller than its
                                cultivated relatives.”
                            </p>

                            <label class="flip-return" for="bryan-card">
                                ↻ Back to contributor
                            </label>

                            <a href="explorer-species.php#fragaria">
                                Explore plant records
                            </a>

                        </div>

                    </div>

                </article>

                <!-- Sarah Lim - Peace lily -->
                <article class="contributor_card">

                    <input class="contributor-card-toggle"
                           type="checkbox"
                           id="sarah-card"
                           aria-label="Flip Sarah Lim's contribution card">

                    <label class="contributor-card-front" for="sarah-card">

                        <span class="contributor_avatar" aria-hidden="true">
                            S
                        </span>

                        <span class="profile-copy">

                            <span class="contributor-name">Sarah Lim</span>

                            <span class="contributor-role">
                                Community Contributor
                            </span>

                            <span class="badge">Plant Observer</span>

                            <span class="flip-prompt">
                                Tap to view plant contribution
                                <span aria-hidden="true">↻</span>
                            </span>

                        </span>

                    </label>

                    <div class="contributor-card-back">

                        <div class="photo-zoom">
                            <img src="images/spathiphyllum-wallisii.jpg"
                                 alt="Peace lily (Spathiphyllum wallisii)"
                                 loading="lazy">
                        </div>

                        <div class="contribution-copy">

                            <span class="contribution-label">
                                Sample contribution
                            </span>

                            <h2>Peace lily</h2>

                            <p><i>Spathiphyllum wallisii</i></p>

                            <p class="contribution-note">
                                “Dark lance-shaped leaves and a single white
                                spathe curling around a pale spadix.
                                Tolerant of low light.”
                            </p>

                            <label class="flip-return" for="sarah-card">
                                ↻ Back to contributor
                            </label>

                            <a href="explorer-species.php#spathiphyllum">
                                Explore plant records
                            </a>

                        </div>

                    </div>

                </article>

                <!-- Daniel Wong - Garden pea -->
                <article class="contributor_card">

                    <input class="contributor-card-toggle"
                           type="checkbox"
                           id="daniel-card"
                           aria-label="Flip Daniel Wong's contribution card">

                    <label class="contributor-card-front" for="daniel-card">

                        <span class="contributor_avatar" aria-hidden="true">
                            D
                        </span>

                        <span class="profile-copy">

                            <span class="contributor-name">Daniel Wong</span>

                            <span class="contributor-role">
                                Community Contributor
                            </span>

                            <span class="badge">Plant Observer</span>

                            <span class="flip-prompt">
                                Tap to view plant contribution
                                <span aria-hidden="true">↻</span>
                            </span>

                        </span>

                    </label>

                    <div class="contributor-card-back">

                        <div class="photo-zoom">
                            <img src="images/pisum-sativum.jpg"
                                 alt="Garden pea (Lathyrus oleraceus)"
                                 loading="lazy">
                        </div>

                        <div class="contribution-copy">

                            <span class="contribution-label">
                                Sample contribution
                            </span>

                            <h2>Garden pea</h2>

                            <p><i>Lathyrus oleraceus</i></p>

                            <p class="contribution-note">
                                “The cultivated garden pea, traditionally
                                known as <i>Pisum sativum</i>, is an annual
                                legume grown for its edible seeds and pods.”
                            </p>

                            <label class="flip-return" for="daniel-card">
                                ↻ Back to contributor
                            </label>

                            <a href="explorer-species.php#lathyrus-oleraceus">
                                Explore plant records
                            </a>

                        </div>

                    </div>

                </article>

            </div>

        </section>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

<?php require_once __DIR__ . '/includes/session.php'; ?>

<?php
$pageTitle = 'Explore — WikiPlant';
$bodyClass = 'explorer-page';
$cssVersion = '1';
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

<main>
    <div class="page-header explorer-index-header">
        <div class="wrap">
            <span class="kicker">Section A</span>

            <h1>Explorer</h1>

            <p>
                The collection is filed at three ranks, each on its own page.
                Start wherever makes sense for what you already know — a family
                name, a genus, or the plant you're looking for by species — and
                follow the links across to see how it sits with its relatives.
            </p>

            <p class="fam-common">
                <a href="identify.php" class="cta-btn">Verify your plant</a>
            </p>
        </div>
    </div>

    <div class="wrap">
        <div class="index-grid">

            <article class="index-card">
                <span class="no">Rank 1</span>
                <h2>By family</h2>
                <p>
                    The broadest shelf. Four families are logged so far, each
                    with a short description of what sets it apart and a count
                    of the genera filed underneath it.
                </p>
                <a class="btn btn-outline" href="explorer-family.php">
                    Browse families
                </a>
            </article>

            <article class="index-card">
                <span class="no">Rank 2</span>
                <h2>By genus</h2>
                <p>
                    Genera grouped under their family, each with the species
                    logged inside it. The middle shelf — narrower than a family,
                    still holding more than one plant.
                </p>
                <a class="btn btn-outline" href="explorer-genus.php">
                    Browse genera
                </a>
            </article>

            <article class="index-card">
                <span class="no">Rank 3</span>
                <h2>By species</h2>
                <p>
                    The full specimen record: every plant logged individually,
                    with its complete classification, a description, and an
                    accession number.
                </p>
                <a class="btn btn-outline" href="explorer-species.php">
                    Browse species
                </a>
            </article>

        </div>
    </div>

    <div class="wrap cta-wrap">
        <div class="cta-text-box">
            <h2>Help Us Grow the Index</h2>
            <p>
                WikiPlant is powered by a community of plant enthusiasts.
                See who is building our database or join us to share your own
                knowledge.
            </p>
            <a href="contributor.php" class="cta-btn">
                Meet Our Contributors
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

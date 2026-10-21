
<?php
$pageTitle = 'Explore Families — WikiPlant';
$bodyClass = 'explorer-page explorer-family-page';
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

<main id="main-content">

    <div class="page-header explorer-index-header">
        <div class="wrap">
            <span class="kicker">Section A · Rank 1</span>
            <h1>Families in the index</h1>

            <p>
                A family is the broadest shelf a specimen sits on — plants grouped by shared structure rather than
                appearance. Open a family to see the genera filed underneath it. Family-level traits help us compare
                how related plants solve the same biological problems, from fruiting patterns to leaf architecture
                and flower form.
            </p>

            <p class="fam-common">
                <a href="identify.php" class="cta-btn">Verify your plant</a>
            </p>
        </div>
    </div>

    <div class="wrap">

        <nav class="view-tabs" aria-label="Explore by rank">
            <a href="explorer-family.php" aria-current="page">Family</a>
            <a href="explorer-genus.php">Genus</a>
            <a href="explorer-species.php">Species</a>
        </nav>

        <div class="family-grid">

            <!-- Araceae -->
            <article class="family-card" id="araceae">

                <figure class="plant-photo">
                    <button type="button" class="photo-zoom"
                        popovertarget="family-araceae-photo"
                        aria-label="View full-size Monstera deliciosa photo">
                        <img src="images/monstera-deliciosa-flickr.jpg"
                            alt="Monstera deliciosa, representative of the Araceae family"
                            loading="lazy" decoding="async">
                    </button>

                    <div class="photo-lightbox" id="family-araceae-photo"
                        popover="auto" role="dialog"
                        aria-label="Full-size Monstera deliciosa photo">
                        <button type="button" class="photo-lightbox-close"
                            popovertarget="family-araceae-photo"
                            popovertargetaction="hide">Close</button>
                        <img src="images/monstera-deliciosa-flickr.jpg"
                            alt="Monstera deliciosa">
                    </div>
                </figure>

                <div class="family-card-content">
                    <h2 class="sci">Araceae</h2>
                    <span class="fam-common">The arum family</span>

                    <p>
                        Recognised by a flower structure unlike most other families: a spike of tiny flowers (the
                        spadix) wrapped in a single petal-like bract (the spathe). Leaves are often glossy and,
                        in climbing genera, develop distinctive perforations with age. Many arums are tropical
                        or humid-climate plants, and the family includes both vigorous climbers and popular
                        indoor foliage specimens.
                    </p>

                    <div class="distribution">
                        Distribution: Widespread, with greatest diversity in tropical regions.
                    </div>

                    <table class="spec-table" aria-label="Logged genera and species">
                        <tbody>
                            <tr>
                                <th scope="row">Genera logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>2</span>
                                        <div class="genus-tags">
                                            <a class="tag" href="explorer-genus.php#monstera">Monstera</a>
                                            <a class="tag" href="explorer-genus.php#spathiphyllum">Spathiphyllum</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Species logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>4</span>
                                        <div class="species-tags">
                                            <a class="tag" href="explorer-species.php#monstera">M. deliciosa</a>
                                            <a class="tag" href="explorer-species.php#monstera-acuminata">M. acuminata</a>
                                            <a class="tag" href="explorer-species.php#spathiphyllum">S. wallisii</a>
                                            <a class="tag" href="explorer-species.php#spathiphyllum-cannifolium">S. cannifolium</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <!-- Rosaceae -->
            <article class="family-card" id="rosaceae">

                <figure class="plant-photo">
                    <button type="button" class="photo-zoom"
                        popovertarget="family-rosaceae-photo"
                        aria-label="View full-size Rosa canina photo">
                        <img src="images/rosa-canina.jpg"
                            alt="Rosa canina, representative of the Rosaceae family"
                            loading="lazy" decoding="async">
                    </button>

                    <div class="photo-lightbox" id="family-rosaceae-photo"
                        popover="auto" role="dialog"
                        aria-label="Full-size Rosa canina photo">
                        <button type="button" class="photo-lightbox-close"
                            popovertarget="family-rosaceae-photo"
                            popovertargetaction="hide">Close</button>
                        <img src="images/rosa-canina.jpg" alt="Rosa canina">
                    </div>
                </figure>

                <div class="family-card-content">
                    <h2 class="sci">Rosaceae</h2>
                    <span class="fam-common">The rose family</span>

                    <p>
                        A large family typically bearing five-petalled flowers with a whorl of stamens, ranging
                        from thorned shrubs to fruit-bearing trees and low groundcovers. Many of the plants most
                        associated with orchards and hedgerows sit here, and the family includes both ornamental
                        species and important edible fruits such as strawberries, rose hips and apples.
                    </p>

                    <div class="distribution">
                        Distribution: Worldwide, especially in temperate regions.
                    </div>

                    <table class="spec-table" aria-label="Logged genera and species">
                        <tbody>
                            <tr>
                                <th scope="row">Genera logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>2</span>
                                        <div class="genus-tags">
                                            <a class="tag" href="explorer-genus.php#rosa">Rosa</a>
                                            <a class="tag" href="explorer-genus.php#fragaria">Fragaria</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Species logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>4</span>
                                        <div class="species-tags">
                                            <a class="tag" href="explorer-species.php#rosa">R. canina</a>
                                            <a class="tag" href="explorer-species.php#rosa-banksiae">R. banksiae</a>
                                            <a class="tag" href="explorer-species.php#fragaria">F. vesca</a>
                                            <a class="tag" href="explorer-species.php#fragaria-moschata">F. moschata</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <!-- Fabaceae -->
            <article class="family-card" id="fabaceae">

                <figure class="plant-photo">
                    <button type="button" class="photo-zoom"
                        popovertarget="family-fabaceae-photo"
                        aria-label="View full-size red clover photo">
                        <img src="images/trifolium-pratense.jpg"
                            alt="Red clover (Trifolium pratense), representative of the Fabaceae family"
                            loading="lazy" decoding="async">
                    </button>

                    <div class="photo-lightbox" id="family-fabaceae-photo"
                        popover="auto" role="dialog"
                        aria-label="Full-size red clover photo">
                        <button type="button" class="photo-lightbox-close"
                            popovertarget="family-fabaceae-photo"
                            popovertargetaction="hide">Close</button>
                        <img src="images/trifolium-pratense.jpg" alt="Red clover">
                    </div>
                </figure>

                <div class="family-card-content">
                    <h2 class="sci">Fabaceae</h2>
                    <span class="fam-common">The legume family</span>

                    <p>
                        Identified by pod fruits and, in many genera, compound leaves that fold at night. Roots
                        in this family commonly host bacteria that fix nitrogen into the surrounding soil,
                        helping plants grow in poor ground and improving soil fertility in gardens, grasslands
                        and agricultural systems. This is why clovers, peas and beans are so important in both
                        food production and ecological restoration.
                    </p>

                    <div class="distribution">
                        Distribution: Nearly worldwide, from tropical forests to temperate regions.
                    </div>

                    <table class="spec-table" aria-label="Logged genera and species">
                        <tbody>
                            <tr>
                                <th scope="row">Genera logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>2</span>
                                        <div class="genus-tags">
                                            <a class="tag" href="explorer-genus.php#lathyrus">Lathyrus</a>
                                            <a class="tag" href="explorer-genus.php#trifolium">Trifolium</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Species logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>4</span>
                                        <div class="species-tags">
                                            <a class="tag" href="explorer-species.php#lathyrus-oleraceus">L. oleraceus</a>
                                            <a class="tag" href="explorer-species.php#lathyrus-fulvus">L. fulvus</a>
                                            <a class="tag" href="explorer-species.php#trifolium-pratense">T. pratense</a>
                                            <a class="tag" href="explorer-species.php#trifolium-repens">T. repens</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <!-- Asparagaceae -->
            <article class="family-card" id="asparagaceae">

                <figure class="plant-photo">
                    <button type="button" class="photo-zoom"
                        popovertarget="family-asparagaceae-photo"
                        aria-label="View full-size Dracaena trifasciata photo">
                        <img src="images/dracaena-trifasciata.jpg"
                            alt="Dracaena trifasciata, representative of the Asparagaceae family"
                            loading="lazy" decoding="async">
                    </button>

                    <div class="photo-lightbox" id="family-asparagaceae-photo"
                        popover="auto" role="dialog"
                        aria-label="Full-size Dracaena trifasciata photo">
                        <button type="button" class="photo-lightbox-close"
                            popovertarget="family-asparagaceae-photo"
                            popovertargetaction="hide">Close</button>
                        <img src="images/dracaena-trifasciata.jpg" alt="Dracaena trifasciata">
                    </div>
                </figure>

                <div class="family-card-content">
                    <h2 class="sci">Asparagaceae</h2>
                    <span class="fam-common">A family redrawn more than once</span>

                    <p>
                        A broad family of strap- or blade-shaped leaves with parallel veins, brought together
                        from several older, smaller families as classification has been revised. Boundaries
                        here shift more than most, but the family is known for resilient foliage, often with
                        leaves adapted to dry, warm or low-light environments. That helps explain why many
                        dracaenas, agaves and houseplants fall within its modern definition.
                    </p>

                    <div class="distribution">
                        Distribution: Worldwide, with many species in tropical and subtropical regions.
                    </div>

                    <table class="spec-table" aria-label="Logged genera and species">
                        <tbody>
                            <tr>
                                <th scope="row">Genera logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>2</span>
                                        <div class="genus-tags">
                                            <a class="tag" href="explorer-genus.php#dracaena">Dracaena</a>
                                            <a class="tag" href="explorer-genus.php#chlorophytum">Chlorophytum</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Species logged</th>
                                <td>
                                    <div class="logged-cell">
                                        <span>4</span>
                                        <div class="species-tags">
                                            <a class="tag" href="explorer-species.php#dracaena">D. trifasciata</a>
                                            <a class="tag" href="explorer-species.php#dracaena-cinnabari">D. cinnabari</a>
                                            <a class="tag" href="explorer-species.php#chlorophytum">C. comosum</a>
                                            <a class="tag" href="explorer-species.php#chlorophytum-tuberosum">C. tuberosum</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

        </div>
    </div>

    <div class="wrap cta-wrap">
        <div class="cta-text-box">
            <h2>Help Us Grow the Index</h2>

            <p>
                WikiPlant is powered by a community of plant enthusiasts. See who is building our database
                or join us to share your own knowledge.
            </p>

            <a href="contributor.php" class="cta-btn">Meet Our Contributors</a>
        </div>
    </div>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

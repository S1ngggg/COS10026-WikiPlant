<?php require_once __DIR__ . '/includes/session.php'; ?>

<?php
$pageTitle = 'Explore Genera — WikiPlant';
$bodyClass = 'explorer-page explorer-genus-page';
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
            <span class="kicker">Section A · Rank 2</span>
            <h1>Genera in the index</h1>
            <p>
                A genus groups plants close enough to share a first name in their scientific classification.
                Each one below is filed under its family, with the species logged inside it. At this level,
                plants usually share a recognizable body plan, such as similar leaf structure, growth habit
                or flower form, even when their common names differ widely.
            </p>
            <p class="fam-common">
                <a href="identify.php" class="cta-btn">Verify your plant</a>
            </p>
        </div>
    </div>

    <div class="wrap">
        <nav class="view-tabs" aria-label="Explore by rank">
            <a href="explorer-family.php">Family</a>
            <a href="explorer-genus.php" aria-current="page">Genus</a>
            <a href="explorer-species.php">Species</a>
        </nav>

        <!-- Araceae -->
        <section class="family-section" id="araceae">
            <div class="family-section-head">
                <h2 class="sci">Araceae</h2>
                <span class="fam-common">
                    <a href="explorer-family.php#araceae">← back to family record</a>
                </span>
            </div>

            <div class="genus-grid">

                <article class="genus-card" id="monstera">
                    <h3 class="sci">Monstera</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-monstera-photo"
                            aria-label="View full-size Monstera deliciosa photo">
                            <img src="images/monstera-deliciosa-flickr.jpg"
                                alt="Monstera deliciosa, representative of the Monstera genus">
                        </button>

                        <div class="photo-lightbox" id="genus-monstera-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Monstera deliciosa photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-monstera-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/monstera-deliciosa-flickr.jpg"
                                alt="Monstera deliciosa">
                        </div>
                    </figure>

                    <p>
                        Climbing aroids that root as they grow, best known for the wide leaf perforations
                        that develop with maturity. Monstera species are famous for their aerial roots and
                        fenestrated foliage, which help them climb through rainforest canopies and capture
                        light in dense tropical habitats.
                    </p>

                    <div class="distribution">📍 Native range example: Panama</div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#araceae">Araceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#monstera">M. deliciosa</a>
                        <a class="tag" href="explorer-species.php#monstera-acuminata">M. acuminata</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Monstera"
                            src="https://www.google.com/maps?q=Panama&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

                <article class="genus-card" id="spathiphyllum">
                    <h3 class="sci">Spathiphyllum</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-spathiphyllum-photo"
                            aria-label="View full-size Spathiphyllum wallisii photo">
                            <img src="images/spathiphyllum-wallisii.jpg"
                                alt="Spathiphyllum wallisii, representative of the Spathiphyllum genus">
                        </button>

                        <div class="photo-lightbox" id="genus-spathiphyllum-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Spathiphyllum wallisii photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-spathiphyllum-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/spathiphyllum-wallisii.jpg"
                                alt="Spathiphyllum wallisii">
                        </div>
                    </figure>

                    <p>
                        Compact aroids grown for a single curved white spathe wrapped around a pale spadix.
                        Spathiphyllum species are often valued as houseplants because they tolerate shaded
                        interiors well, while their bold foliage and flowers give them a distinctive
                        tropical look.
                    </p>

                    <div class="distribution">📍 Native range example: Colombia</div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#araceae">Araceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#spathiphyllum">S. wallisii</a>
                        <a class="tag" href="explorer-species.php#spathiphyllum-cannifolium">S. cannifolium</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Spathiphyllum"
                            src="https://www.google.com/maps?q=Colombia&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

            </div>
        </section>

        <!-- Rosaceae -->
        <section class="family-section" id="rosaceae">
            <div class="family-section-head">
                <h2 class="sci">Rosaceae</h2>
                <span class="fam-common">
                    <a href="explorer-family.php#rosaceae">← back to family record</a>
                </span>
            </div>

            <div class="genus-grid">

                <article class="genus-card" id="rosa">
                    <h3 class="sci">Rosa</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-rosa-photo"
                            aria-label="View full-size Rosa canina photo">
                            <img src="images/rosa-canina.jpg"
                                alt="Rosa canina, representative of the Rosa genus">
                        </button>

                        <div class="photo-lightbox" id="genus-rosa-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Rosa canina photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-rosa-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/rosa-canina.jpg" alt="Rosa canina">
                        </div>
                    </figure>

                    <p>
                        Shrubs and climbers with five-petalled flowers; many species bear prickles, though
                        some, such as Lady Banks' rose, do not. Rosa is one of the most recognisable
                        ornamental genera because it includes both wild hedgerow roses and cultivated
                        garden roses selected for fragrance, colour and form.
                    </p>

                    <div class="distribution">
                        📍 Example native range (Rosa banksiae): China
                    </div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#rosaceae">Rosaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#rosa">R. canina</a>
                        <a class="tag" href="explorer-species.php#rosa-banksiae">R. banksiae</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Example native range for Rosa banksiae"
                            src="https://www.google.com/maps?q=China&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

                <article class="genus-card" id="fragaria">
                    <h3 class="sci">Fragaria</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-fragaria-photo"
                            aria-label="View full-size Fragaria vesca photo">
                            <img src="images/fragaria-vesca.jpg"
                                alt="Fragaria vesca, representative of the Fragaria genus">
                        </button>

                        <div class="photo-lightbox" id="genus-fragaria-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Fragaria vesca photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-fragaria-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/fragaria-vesca.jpg" alt="Fragaria vesca">
                        </div>
                    </figure>

                    <p>
                        Low, spreading plants with trifoliate leaves, grown for the small fruit that follows
                        their white flowers. Fragaria species are often found in open, sunny habitats and
                        are prized for their aromatic fruit, which has shaped both wild gathering and
                        cultivated strawberry breeding.
                    </p>

                    <div class="distribution">📍 Native range example: Europe</div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#rosaceae">Rosaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#fragaria">F. vesca</a>
                        <a class="tag" href="explorer-species.php#fragaria-moschata">F. moschata</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Fragaria"
                            src="https://www.google.com/maps?q=Europe&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

            </div>
        </section>

        <!-- Fabaceae -->
        <section class="family-section" id="fabaceae">
            <div class="family-section-head">
                <h2 class="sci">Fabaceae</h2>
                <span class="fam-common">
                    <a href="explorer-family.php#fabaceae">← back to family record</a>
                </span>
            </div>

            <div class="genus-grid">

                <article class="genus-card" id="lathyrus">
                    <h3 class="sci">Lathyrus</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-lathyrus-photo"
                            aria-label="View full-size garden pea photo">
                            <img src="images/pisum-sativum.jpg"
                                alt="Garden pea, representative of the Lathyrus genus">
                        </button>

                        <div class="photo-lightbox" id="genus-lathyrus-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size garden pea photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-lathyrus-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/pisum-sativum.jpg" alt="Garden pea">
                        </div>
                    </figure>

                    <p>
                        Herbaceous legumes with paired leaflets and tendrils; species include the garden pea
                        and many ornamental sweet peas. Lathyrus species are often recognised by their
                        climbing habit, pea-like flowers and nitrogen-fixing roots, which help them thrive
                        in open ground and disturbed sites.
                    </p>

                    <div class="distribution">
                        📍 Example native range (garden pea): Europe
                    </div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#fabaceae">Fabaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#lathyrus-oleraceus">L. oleraceus</a>
                        <a class="tag" href="explorer-species.php#lathyrus-fulvus">L. fulvus</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Example native range for the garden pea"
                            src="https://www.google.com/maps?q=Europe&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

                <article class="genus-card" id="trifolium">
                    <h3 class="sci">Trifolium</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-trifolium-photo"
                            aria-label="View full-size Trifolium pratense photo">
                            <img src="images/trifolium-pratense.jpg"
                                alt="Trifolium pratense, representative of the Trifolium genus">
                        </button>

                        <div class="photo-lightbox" id="genus-trifolium-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Trifolium pratense photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-trifolium-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/trifolium-pratense.jpg"
                                alt="Trifolium pratense">
                        </div>
                    </figure>

                    <p>
                        Herbaceous legumes with three-part leaves and rounded flower heads; many species are
                        grown as forage and cover crops. Trifolium species are especially useful in pasture
                        and soil-building systems because their roots support nitrogen fixation and their
                        flowers attract pollinators.
                    </p>

                    <div class="distribution">📍 Native range example: Europe</div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#fabaceae">Fabaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#trifolium-pratense">T. pratense</a>
                        <a class="tag" href="explorer-species.php#trifolium-repens">T. repens</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Trifolium"
                            src="https://www.google.com/maps?q=Europe&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

            </div>
        </section>

        <!-- Asparagaceae -->
        <section class="family-section" id="asparagaceae">
            <div class="family-section-head">
                <h2 class="sci">Asparagaceae</h2>
                <span class="fam-common">
                    <a href="explorer-family.php#asparagaceae">← back to family record</a>
                </span>
            </div>

            <div class="genus-grid">

                <article class="genus-card" id="dracaena">
                    <h3 class="sci">Dracaena</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-dracaena-photo"
                            aria-label="View full-size Dracaena cinnabari photo">
                            <img src="images/dracaena-cinnabari.jpg"
                                alt="Dracaena cinnabari, representative of the Dracaena genus">
                        </button>

                        <div class="photo-lightbox" id="genus-dracaena-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Dracaena cinnabari photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-dracaena-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/dracaena-cinnabari.jpg"
                                alt="Dracaena cinnabari">
                        </div>
                    </figure>

                    <p>
                        Rosette or upright plants with stiff, strap-like leaves, several formerly classed
                        under Sansevieria. Dracaena species are famous for resilient foliage and variable
                        growth forms, from compact houseplants to dramatic desert-island trees adapted to
                        dry, exposed conditions.
                    </p>

                    <div class="distribution">
                        📍 Native range example: Socotra Archipelago
                    </div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#asparagaceae">Asparagaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#dracaena">D. trifasciata</a>
                        <a class="tag" href="explorer-species.php#dracaena-cinnabari">D. cinnabari</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Dracaena"
                            src="https://www.google.com/maps?q=Socotra+Archipelago&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

                <article class="genus-card" id="chlorophytum">
                    <h3 class="sci">Chlorophytum</h3>

                    <figure class="plant-photo">
                        <button type="button" class="photo-zoom"
                            popovertarget="genus-chlorophytum-photo"
                            aria-label="View full-size Chlorophytum comosum photo">
                            <img src="images/chlorophytum-comosum.jpg"
                                alt="Chlorophytum comosum, representative of the Chlorophytum genus">
                        </button>

                        <div class="photo-lightbox" id="genus-chlorophytum-photo"
                            popover="auto" role="dialog"
                            aria-label="Full-size Chlorophytum comosum photo">
                            <button type="button" class="photo-lightbox-close"
                                popovertarget="genus-chlorophytum-photo"
                                popovertargetaction="hide">Close</button>
                            <img src="images/chlorophytum-comosum.jpg"
                                alt="Chlorophytum comosum">
                        </div>
                    </figure>

                    <p>
                        Arching, grass-like leaves that send out long runners tipped with plantlets.
                        Chlorophytum species are among the easiest foliage plants to propagate, making them
                        popular as apartment plants and easy-care garden specimens.
                    </p>

                    <div class="distribution">📍 Native range example: South Africa</div>

                    <div class="rank-line">
                        <span class="tag">
                            Family: <a href="explorer-family.php#asparagaceae">Asparagaceae</a>
                        </span>
                        <a class="tag" href="explorer-species.php#chlorophytum">C. comosum</a>
                        <a class="tag" href="explorer-species.php#chlorophytum-tuberosum">C. tuberosum</a>
                    </div>

                    <div class="map-frame">
                        <iframe title="Native range map for Chlorophytum"
                            src="https://www.google.com/maps?q=South+Africa&amp;output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                    </div>
                </article>

            </div>
        </section>

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

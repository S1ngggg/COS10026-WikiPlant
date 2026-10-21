
<?php
$pageTitle = 'Explore Species — WikiPlant';
$bodyClass = 'explorer-page explorer-species-page';

$plantGroups = [
    [
        'family_id' => 'araceae',
        'family' => 'Araceae',
        'family_description' => 'The arum family — leaves that shelter a spadix and spathe.',
        'genera' => [
            [
                'id' => 'genus-monstera',
                'name' => 'Monstera',
                'species' => [
                    [
                        'id' => 'monstera',
                        'accession' => '0142',
                        'common' => 'Swiss cheese plant',
                        'scientific' => 'Monstera deliciosa',
                        'epithet' => 'deliciosa',
                        'image' => 'monstera-deliciosa-flickr.jpg',
                        'alt' => 'Swiss cheese plant (Monstera deliciosa)',
                        'native' => 'Southern Mexico to Panama',
                        'map' => 'Monstera+deliciosa+Southern+Mexico+to+Panama',
                        'description' => 'Wide, glossy leaves that develop fenestrations as the plant matures. Climbs by aerial roots in its native range. Commonly grown as an indoor statement plant, it is one of the best-known tropical climbers and can become very large when given support and humidity.'
                    ],
                    [
                        'id' => 'monstera-acuminata',
                        'accession' => '0143',
                        'common' => 'Shingle plant',
                        'scientific' => 'Monstera acuminata',
                        'epithet' => 'acuminata',
                        'image' => 'monstera-acuminata.jpg',
                        'alt' => 'Shingle plant (Monstera acuminata)',
                        'native' => 'Central America & Mexico',
                        'map' => 'Mexico',
                        'description' => 'A tropical climbing vine native to Central America and Mexico, famous for its unique shingle growth habit and holey leaves. In its natural habitat it often grows along forest trees and rocks, using aerial roots to attach and climb toward brighter light.'
                    ]
                ]
            ],
            [
                'id' => 'genus-spathiphyllum',
                'name' => 'Spathiphyllum',
                'species' => [
                    [
                        'id' => 'spathiphyllum',
                        'accession' => '0144',
                        'common' => 'Peace lily',
                        'scientific' => 'Spathiphyllum wallisii',
                        'epithet' => 'wallisii',
                        'image' => 'spathiphyllum-wallisii.jpg',
                        'alt' => 'Peace lily (Spathiphyllum wallisii)',
                        'native' => 'Venezuela',
                        'map' => 'Venezuela',
                        'description' => 'Dark lance-shaped leaves and a single white spathe curling around a pale spadix. Tolerant of low light, it is prized as a resilient indoor plant and is often used in plant rooms or shaded patios where other tropical foliage struggles.'
                    ],
                    [
                        'id' => 'spathiphyllum-cannifolium',
                        'accession' => '0145',
                        'common' => 'Canna-leaf peace lily',
                        'scientific' => 'Spathiphyllum cannifolium',
                        'epithet' => 'cannifolium',
                        'image' => 'spathiphyllum-cannifolium.jpg',
                        'alt' => 'Canna-leaf peace lily (Spathiphyllum cannifolium)',
                        'native' => 'Northern South America',
                        'map' => 'Spathiphyllum+cannifolium+Northern+South+America',
                        'description' => 'A tropical, evergreen herbaceous perennial belonging to the Araceae (arum) family. Its broader leaves and more upright habit give it a stronger architectural form than many peace lilies, making it especially striking in tropical displays and conservatories.'
                    ]
                ]
            ]
        ]
    ],
    [
        'family_id' => 'rosaceae',
        'family' => 'Rosaceae',
        'family_description' => 'The rose family — five-petalled flowers, often with thorns.',
        'genera' => [
            [
                'id' => 'genus-rosa',
                'name' => 'Rosa',
                'species' => [
                    [
                        'id' => 'rosa',
                        'accession' => '0091',
                        'common' => 'Dog rose',
                        'scientific' => 'Rosa canina',
                        'epithet' => 'canina',
                        'image' => 'rosa-canina.jpg',
                        'alt' => 'Dog rose (Rosa canina)',
                        'native' => 'Europe & Western Asia',
                        'map' => 'Rosa+canina+Europe+Western+Asia',
                        'description' => 'A scrambling hedgerow rose with pale pink flowers and hooked thorns along an arching stem. It is a classic wild rose found along woodland edges and roadsides, where its hips provide food for birds and its thorny habit shelters small wildlife.'
                    ],
                    [
                        'id' => 'rosa-banksiae',
                        'accession' => '0092',
                        'common' => "Lady Banks' rose",
                        'scientific' => 'Rosa banksiae',
                        'epithet' => 'banksiae',
                        'image' => 'rosa-banksiae.jpg',
                        'alt' => "Lady Banks' rose (Rosa banksiae)",
                        'native' => 'China',
                        'map' => 'China',
                        'description' => 'A fast-growing, nearly thornless climbing shrub native to central and western China. Its dense clusters of small yellow flowers create a dramatic seasonal display, and the species is often trained over pergolas, fences and walls in warm gardens.'
                    ]
                ]
            ],
            [
                'id' => 'genus-fragaria',
                'name' => 'Fragaria',
                'species' => [
                    [
                        'id' => 'fragaria',
                        'accession' => '0093',
                        'common' => 'Wild strawberry',
                        'scientific' => 'Fragaria vesca',
                        'epithet' => 'vesca',
                        'image' => 'fragaria-vesca.jpg',
                        'alt' => 'Wild strawberry (Fragaria vesca)',
                        'native' => 'North America',
                        'map' => 'North+America',
                        'description' => 'Trifoliate leaves and small white flowers, followed by fruit far smaller than its cultivated relatives. Wild strawberries such as this are usually low-growing and spreading, often colonising sunny patches where their sweet fruit attracts birds and other wildlife.'
                    ],
                    [
                        'id' => 'fragaria-moschata',
                        'accession' => '0094',
                        'common' => 'Musk strawberry',
                        'scientific' => 'Fragaria moschata',
                        'epithet' => 'moschata',
                        'image' => 'fragaria-moschata.jpg',
                        'alt' => 'Musk strawberry (Fragaria moschata)',
                        'native' => 'Europe',
                        'map' => 'Fragaria+moschata+Europe',
                        'description' => 'A European wild strawberry species prized for its intensely aromatic, uniquely flavored fruit. Its musk-like fragrance and small, intensely sweet berries make it a classic wild relative of the cultivated strawberry, especially valued in traditional fruit-growing and habitat gardens.'
                    ]
                ]
            ]
        ]
    ],
    [
        'family_id' => 'fabaceae',
        'family' => 'Fabaceae',
        'family_description' => 'The legume family — pod fruits and nitrogen-fixing roots.',
        'genera' => [
            [
                'id' => 'genus-lathyrus',
                'name' => 'Lathyrus',
                'species' => [
                    [
                        'id' => 'lathyrus-oleraceus',
                        'accession' => '0210',
                        'common' => 'Garden pea',
                        'scientific' => 'Lathyrus oleraceus',
                        'epithet' => 'oleraceus',
                        'image' => 'pisum-sativum.jpg',
                        'alt' => 'Garden pea (Lathyrus oleraceus, traditionally Pisum sativum)',
                        'native' => 'Europe',
                        'map' => 'Europe',
                        'description' => 'The cultivated garden pea, traditionally known as Pisum sativum, is an annual legume grown for its edible seeds and pods. It is a cool-season crop valued in agriculture and home gardens because it is productive, easy to harvest and supports nitrogen fixation in the soil.'
                    ],
                    [
                        'id' => 'lathyrus-fulvus',
                        'accession' => '0211',
                        'common' => 'Tawny pea',
                        'scientific' => 'Lathyrus fulvus',
                        'epithet' => 'fulvus',
                        'image' => 'pisum-fulvum.jpg',
                        'alt' => 'Tawny pea (Lathyrus fulvus, traditionally Pisum fulvum)',
                        'native' => 'Middle East',
                        'map' => 'Lathyrus+fulvus+Middle+East',
                        'description' => 'A wild pea native to the eastern Mediterranean; it is traditionally known as Pisum fulvum. This species is often associated with dry, open habitats and is notable for its small, slender habit and its role as a wild relative in the cultivated pea lineage.'
                    ]
                ]
            ],
            [
                'id' => 'genus-trifolium',
                'name' => 'Trifolium',
                'species' => [
                    [
                        'id' => 'trifolium-pratense',
                        'accession' => '0212',
                        'common' => 'Red clover',
                        'scientific' => 'Trifolium pratense',
                        'epithet' => 'pratense',
                        'image' => 'trifolium-pratense.jpg',
                        'alt' => 'Red clover (Trifolium pratense)',
                        'native' => 'Europe, western Asia & northwest Africa',
                        'map' => 'Trifolium+pratense+Europe',
                        'description' => 'A familiar forage legume with three-part leaves and rounded heads of pink-red flowers. Red clover is especially valuable for pollinators and pasture productivity, with roots that help fix nitrogen and leaves that recover quickly after grazing.'
                    ],
                    [
                        'id' => 'trifolium-repens',
                        'accession' => '0213',
                        'common' => 'White clover',
                        'scientific' => 'Trifolium repens',
                        'epithet' => 'repens',
                        'image' => 'trifolium-repens.jpg',
                        'alt' => 'White clover (Trifolium repens)',
                        'native' => 'Europe & western Asia',
                        'map' => 'Trifolium+repens+Europe',
                        'description' => 'A low-growing perennial clover with creeping stems, three-part leaves and rounded heads of white flowers. White clover is widely used in lawns and pasture because it tolerates mowing and grazing, while its creeping growth helps form dense green ground cover.'
                    ]
                ]
            ]
        ]
    ],
    [
        'family_id' => 'asparagaceae',
        'family' => 'Asparagaceae',
        'family_description' => 'A family of strap-like leaves, redrawn by taxonomists more than once.',
        'genera' => [
            [
                'id' => 'genus-dracaena',
                'name' => 'Dracaena',
                'species' => [
                    [
                        'id' => 'dracaena',
                        'accession' => '0304',
                        'common' => 'Snake plant',
                        'scientific' => 'Dracaena trifasciata',
                        'epithet' => 'trifasciata',
                        'image' => 'dracaena-trifasciata.jpg',
                        'alt' => 'Snake plant (Dracaena trifasciata)',
                        'native' => 'Central Africa',
                        'map' => 'Dracaena+trifasciata+Central+Africa',
                        'description' => 'Stiff, upright leaves banded in mottled green. Reclassified from Sansevieria in recent revisions, it is one of the most common indoor foliage plants because it stores water in its leaves and tolerates drought and irregular watering.'
                    ],
                    [
                        'id' => 'dracaena-cinnabari',
                        'accession' => '0305',
                        'common' => 'Dragon blood tree',
                        'scientific' => 'Dracaena cinnabari',
                        'epithet' => 'cinnabari',
                        'image' => 'dracaena-cinnabari.jpg',
                        'alt' => "Dragon's blood tree (Dracaena cinnabari)",
                        'native' => 'Socotra Archipelago',
                        'map' => 'Dracaena+cinnabari+Socotra+Archipelago',
                        'description' => 'A rare, iconic evergreen tree famous for its dense, umbrella-shaped canopy and crimson-red resin. Endemic to the Socotra Archipelago, it is adapted to dry, windy cliffs and is one of the most distinctive trees in the world because of its unusual branching form.'
                    ]
                ]
            ],
            [
                'id' => 'genus-chlorophytum',
                'name' => 'Chlorophytum',
                'species' => [
                    [
                        'id' => 'chlorophytum',
                        'accession' => '0306',
                        'common' => 'Spider plant',
                        'scientific' => 'Chlorophytum comosum',
                        'epithet' => 'comosum',
                        'image' => 'chlorophytum-comosum.jpg',
                        'alt' => 'Spider plant (Chlorophytum comosum)',
                        'native' => 'Southern Africa',
                        'map' => 'Chlorophytum+comosum+Southern+Africa',
                        'description' => 'Arching grass-like leaves that send out long runners tipped with plantlets. Spider plant is a favourite indoor species because its arching form and easy vegetative propagation make it simple to grow and share with others.'
                    ],
                    [
                        'id' => 'chlorophytum-tuberosum',
                        'accession' => '0307',
                        'common' => 'Musli',
                        'scientific' => 'Chlorophytum tuberosum',
                        'epithet' => 'tuberosum',
                        'image' => 'chlorophytum-tuberosum.jpg',
                        'alt' => 'Musli (Chlorophytum tuberosum)',
                        'native' => 'Circar mountains, India',
                        'map' => 'Coromandel+Coast+India',
                        'description' => 'A small, tuberous perennial herb in the asparagus family that grows 20 to 50 cm tall. Its fleshy rootstock helps it survive seasonal drought, and its modest habit makes it well suited to dry, sunny places and ornamental border plantings.'
                    ]
                ]
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the WikiPlant species index, including plant classification, accession numbers, descriptions and native ranges.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main-content">

    <div class="page-header explorer-index-header">
        <div class="wrap">
            <span class="kicker">Section A · Rank 3</span>
            <h1>Species in the index</h1>

            <p>
                The full specimen record — every plant logged individually, with its complete
                classification and an accession number. Follow a tag up to its genus or family record.
            </p>

            <p class="fam-common">
                <a href="identify.php" class="cta-btn">Verify your plant</a>
            </p>
        </div>
    </div>

    <div class="wrap">

        <nav class="view-tabs" aria-label="Explore by rank">
            <a href="explorer-family.php">Family</a>
            <a href="explorer-genus.php">Genus</a>
            <a href="explorer-species.php" aria-current="page">Species</a>
        </nav>

        <div class="groups specimen-grid">

            <?php foreach ($plantGroups as $group): ?>

                <div
                    class="group"
                    data-family="<?= htmlspecialchars($group['family_id'], ENT_QUOTES, 'UTF-8') ?>"
                >

                    <div
                        class="family-heading"
                        id="<?= htmlspecialchars($group['family_id'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <h2 class="fam-latin sci">
                            <?= htmlspecialchars($group['family'], ENT_QUOTES, 'UTF-8') ?>
                        </h2>

                        <span class="fam-common">
                            <?= htmlspecialchars($group['family_description'], ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    </div>

                    <?php foreach ($group['genera'] as $genus): ?>

                        <div
                            class="genus-heading"
                            id="<?= htmlspecialchars($genus['id'], ENT_QUOTES, 'UTF-8') ?>"
                        >
                            <h3 class="genus-latin sci">
                                Genus: <?= htmlspecialchars($genus['name'], ENT_QUOTES, 'UTF-8') ?>
                            </h3>
                        </div>

                        <?php foreach ($genus['species'] as $plant): ?>

                            <article
                                class="specimen-card"
                                id="<?= htmlspecialchars($plant['id'], ENT_QUOTES, 'UTF-8') ?>"
                            >

                                <span class="accession">
                                    No. <?= htmlspecialchars($plant['accession'], ENT_QUOTES, 'UTF-8') ?>
                                </span>

                                <figure class="plant-photo">

                                    <button
                                        type="button"
                                        class="photo-zoom"
                                        popovertarget="full-photo-<?= htmlspecialchars($plant['id'], ENT_QUOTES, 'UTF-8') ?>"
                                        aria-label="View full-size <?= htmlspecialchars($plant['scientific'], ENT_QUOTES, 'UTF-8') ?> photo"
                                    >
                                        <img
                                            src="images/<?= htmlspecialchars($plant['image'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="<?= htmlspecialchars($plant['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                            class="specimen-img"
                                        >
                                    </button>

                                    <div
                                        class="photo-lightbox"
                                        id="full-photo-<?= htmlspecialchars($plant['id'], ENT_QUOTES, 'UTF-8') ?>"
                                        popover="auto"
                                        role="dialog"
                                        aria-label="Full-size <?= htmlspecialchars($plant['scientific'], ENT_QUOTES, 'UTF-8') ?> photo"
                                    >
                                        <button
                                            type="button"
                                            class="photo-lightbox-close"
                                            popovertarget="full-photo-<?= htmlspecialchars($plant['id'], ENT_QUOTES, 'UTF-8') ?>"
                                            popovertargetaction="hide"
                                        >
                                            Close
                                        </button>

                                        <img
                                            src="images/<?= htmlspecialchars($plant['image'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="<?= htmlspecialchars($plant['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                        >
                                    </div>

                                </figure>

                                <h4 class="common-name">
                                    <?= htmlspecialchars($plant['common'], ENT_QUOTES, 'UTF-8') ?>
                                </h4>

                                <span class="sci">
                                    <?= htmlspecialchars($plant['scientific'], ENT_QUOTES, 'UTF-8') ?>
                                </span>

                                <div class="rank-line">

                                    <a
                                        class="tag"
                                        href="explorer-family.php#<?= htmlspecialchars($group['family_id'], ENT_QUOTES, 'UTF-8') ?>"
                                    >
                                        Family: <?= htmlspecialchars($group['family'], ENT_QUOTES, 'UTF-8') ?>
                                    </a>

                                    <a
                                        class="tag"
                                        href="explorer-genus.php#<?= htmlspecialchars(
                                            strtolower($genus['name']),
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ) ?>"
                                    >
                                        Genus: <?= htmlspecialchars($genus['name'], ENT_QUOTES, 'UTF-8') ?>
                                    </a>

                                    <span class="tag">
                                        Species: <?= htmlspecialchars($plant['epithet'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>

                                </div>

                                <div class="distribution">
                                    📍 Native: <?= htmlspecialchars($plant['native'], ENT_QUOTES, 'UTF-8') ?>
                                </div>

                                <div class="map-frame">
                                    <iframe
                                        title="Native range map for <?= htmlspecialchars($plant['scientific'], ENT_QUOTES, 'UTF-8') ?>"
                                        src="https://www.google.com/maps?q=<?= htmlspecialchars($plant['map'], ENT_QUOTES, 'UTF-8') ?>&amp;output=embed"
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                        allowfullscreen
                                    ></iframe>
                                </div>

                                <p>
                                    <?= htmlspecialchars($plant['description'], ENT_QUOTES, 'UTF-8') ?>
                                </p>

                            </article>

                        <?php endforeach; ?>

                    <?php endforeach; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <div class="wrap species-cta-wrap">
        <div class="cta-text-box">
            <h2>Help Us Grow the Index</h2>

            <p>
                WikiPlant is powered by a community of plant enthusiasts. See who is building our
                database or join us to share your own knowledge.
            </p>

            <a href="contributor.php" class="cta-btn">Meet Our Contributors</a>
        </div>
    </div>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

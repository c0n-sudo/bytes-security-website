<?php
$pageTitle = "Cloud Security für Microsoft 365";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('cloud.title') ?></h1>
</section>

<section class="content">
    <h2><?= t('cloud.title') ?></h2>
    <p>
        <?= t('cloud.intro') ?>
    </p>

    <h3><?= t('cyber.overview') ?></h3>

    <h4><?= t('cloud.s1_title') ?></h4>
    <p>
        <?= t('cloud.s1_text') ?>
    </p>

    <h4><?= t('cloud.s2_title') ?></h4>
    <p>
        <?= t('cloud.s2_text') ?>
    </p>

    <h4><?= t('cloud.s3_title') ?></h4>
    <p>
        <?= t('cloud.s3_text') ?>
    </p>

    <h4><?= t('cloud.s4_title') ?></h4>
    <p>
        <?= t('cloud.s4_text') ?>
    </p>

    <p>
        <?= t('cloud.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
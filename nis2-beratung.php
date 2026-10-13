<?php
$pageTitle = "NIS2-Beratung";
$pageDescription = "Beratung zur NIS2-Richtlinie: Betroffenheitsprüfung, Risikoanalyse und Umsetzungsbegleitung.";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('nav.nis2') ?></h1>
</section>

<section class="content">
    <h2><?= t('nav.nis2') ?></h2>
    <p>
        <?= t('nis.intro') ?>
    </p>

    <h3><?= t('nis.s1_title') ?></h3>
    <p>
        <?= t('nis.s1_text') ?>
    </p>

    <h3><?= t('nis.s2_title') ?></h3>
    <p>
        <?= t('nis.s2_text') ?>
    </p>

    <h3><?= t('nis.s3_title') ?></h3>
    <p>
        <?= t('nis.s3_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
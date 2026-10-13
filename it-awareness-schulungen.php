<?php
$pageTitle = "IT-Awareness-Schulungen";
$pageDescription = "Beratung zu Security-Awareness-Trainings für Mitarbeiter Ihres Unternehmens.";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('nav.awareness') ?></h1>
</section>

<section class="content">
    <h2><?= t('nav.awareness') ?></h2>
    <p>
        <?= t('awr.intro') ?>
    </p>

    <h3><?= t('awr.s1_title') ?></h3>
    <p>
        <?= t('awr.s1_text') ?>
    </p>

    <h3><?= t('awr.s2_title') ?></h3>
    <p>
        <?= t('awr.s2_text') ?>
    </p>

    <h3><?= t('awr.s3_title') ?></h3>
    <p>
        <?= t('awr.s3_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
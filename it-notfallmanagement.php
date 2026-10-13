<?php
$pageTitle = "IT-Notfallmanagement";
$pageDescription = "Beratung zu IT-Notfallplänen, Backup-Strategien und Business Continuity für Ihr Unternehmen.";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('nav.emergency') ?></h1>
</section>

<section class="content">
    <h2><?= t('nav.emergency') ?></h2>
    <p>
        <?= t('emg.intro') ?>
    </p>

    <h3><?= t('emg.s1_title') ?></h3>
    <p>
        <?= t('emg.s1_text') ?>
    </p>

    <h3><?= t('emg.s2_title') ?></h3>
    <p>
        <?= t('emg.s2_text') ?>
    </p>

    <h3><?= t('emg.s3_title') ?></h3>
    <p>
        <?= t('emg.s3_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
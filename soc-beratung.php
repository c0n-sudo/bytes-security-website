<?php
$pageTitle = "SOC-Beratung";
$pageDescription = "Beratung zum Aufbau eines Security Operations Center für die kontinuierliche Überwachung Ihrer IT.";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('nav.soc') ?></h1>
</section>

<section class="content">
    <h2><?= t('nav.soc') ?></h2>
    <p>
        <?= t('soc.intro') ?>
    </p>

    <h3><?= t('soc.s1_title') ?></h3>
    <p>
        <?= t('soc.s1_text') ?>
    </p>

    <h3><?= t('soc.s2_title') ?></h3>
    <p>
        <?= t('soc.s2_text') ?>
    </p>

    <h3><?= t('soc.s3_title') ?></h3>
    <p>
        <?= t('soc.s3_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
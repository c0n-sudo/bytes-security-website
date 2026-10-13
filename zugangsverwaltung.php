<?php
$pageTitle = "Zugangs- und Nutzerverwaltung";
$pageDescription = "Beratung zu Rechten, Rollen und Multi-Faktor-Authentifizierung für Ihre IT-Systeme.";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('nav.access') ?></h1>
</section>

<section class="content">
    <h2><?= t('nav.access') ?></h2>
    <p>
        <?= t('acc.intro') ?>
    </p>

    <h3><?= t('acc.s1_title') ?></h3>
    <p>
        <?= t('acc.s1_text') ?>
    </p>

    <h3><?= t('acc.s2_title') ?></h3>
    <p>
        <?= t('acc.s2_text') ?>
    </p>

    <h3><?= t('acc.s3_title') ?></h3>
    <p>
        <?= t('acc.s3_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
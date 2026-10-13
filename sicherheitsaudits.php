<?php
$pageTitle = "Regelmäßige Sicherheitsaudits";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('cyber.audits') ?></h1>
</section>

<section class="content">
    <h2><?= t('au.heading') ?></h2>
    <p>
        <?= t('au.intro') ?>
    </p>

    <h3><?= t('cyber.overview') ?></h3>

    <h4><?= t('au.s1_title') ?></h4>
    <p>
        <?= t('au.s1_text') ?>
    </p>

    <h4><?= t('au.s2_title') ?></h4>
    <p>
        <?= t('au.s2_text') ?>
    </p>

    <h4><?= t('au.s3_title') ?></h4>
    <p>
        <?= t('au.s3_text') ?>
    </p>

    <h4><?= t('au.s4_title') ?></h4>
    <p>
        <?= t('au.s4_text') ?>
    </p>

    <p>
        <?= t('au.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
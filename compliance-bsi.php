<?php
$pageTitle = "Compliance-Management für BSI-Richtlinien";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('cyber.compliance') ?></h1>
</section>

<section class="content">
    <h2><?= t('cyber.compliance') ?></h2>
    <p>
        <?= t('comp.intro') ?>
    </p>

    <h3><?= t('cyber.overview') ?></h3>

    <h4><?= t('comp.s1_title') ?></h4>
    <p>
        <?= t('comp.s1_text') ?>
    </p>

    <h4><?= t('comp.s2_title') ?></h4>
    <p>
        <?= t('comp.s2_text') ?>
    </p>

    <h4><?= t('comp.s3_title') ?></h4>
    <p>
        <?= t('comp.s3_text') ?>
    </p>

    <h4><?= t('comp.s4_title') ?></h4>
    <p>
        <?= t('comp.s4_text') ?>
    </p>

    <p>
        <?= t('comp.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
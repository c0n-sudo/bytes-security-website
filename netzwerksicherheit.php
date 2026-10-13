<?php
$pageTitle = "Netzwerksicherheit";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('cyber.network') ?></h1>
</section>

<section class="content">
    <h2><?= t('cyber.network') ?></h2>
    <p>
        <?= t('net.intro') ?>
    </p>

    <h3><?= t('cyber.overview') ?></h3>

    <h4><?= t('net.s1_title') ?></h4>
    <p>
        <?= t('net.s1_text') ?>
    </p>

    <h4><?= t('net.s2_title') ?></h4>
    <p>
        <?= t('net.s2_text') ?>
    </p>

    <h4><?= t('net.s3_title') ?></h4>
    <p>
        <?= t('net.s3_text') ?>
    </p>

    <h4><?= t('net.s4_title') ?></h4>
    <p>
        <?= t('net.s4_text') ?>
    </p>

    <h4><?= t('net.s5_title') ?></h4>
    <p>
        <?= t('net.s5_text') ?>
    </p>

    <p>
        <?= t('net.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
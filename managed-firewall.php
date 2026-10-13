<?php
$pageTitle = "Managed Firewall-Services";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.cybersecurity') ?> &middot; <?= t('cyber.details') ?></p>
    <h1><?= t('fw.title') ?></h1>
</section>

<section class="content">
    <h2><?= t('cyber.firewall') ?></h2>
    <p>
        <?= t('fw.intro') ?>
    </p>

    <h3><?= t('cyber.overview') ?></h3>

    <h4><?= t('fw.s1_title') ?></h4>
    <p>
        <?= t('fw.s1_text') ?>
    </p>

    <h4><?= t('fw.s2_title') ?></h4>
    <p>
        <?= t('fw.s2_text') ?>
    </p>

    <h4><?= t('fw.s3_title') ?></h4>
    <p>
        <?= t('fw.s3_text') ?>
    </p>

    <p>
        <?= t('fw.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
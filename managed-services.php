<?php
$pageTitle = "Managed Services";
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('nav.services') ?> &middot; <?= t('nav.managed') ?></p>
    <h1><?= t('ms.title') ?></h1>
</section>

<section class="content">
    <h2><?= t('ms.title') ?></h2>
    <p>
        <?= t('ms.intro') ?>
    </p>

    <h3><?= t('ms.overview') ?></h3>

    <h4><?= t('ms.network_title') ?></h4>
    <ul>
        <li><?= t('ms.network1') ?></li>
        <li><?= t('ms.network2') ?></li>
    </ul>

    <h4><?= t('ms.backup_title') ?></h4>
    <ul>
        <li><?= t('ms.backup1') ?></li>
        <li><?= t('ms.backup2') ?></li>
    </ul>

    <h4><?= t('ms.vuln_title') ?></h4>
    <ul>
        <li><?= t('ms.vuln1') ?></li>
        <li><?= t('ms.vuln2') ?></li>
    </ul>

    <h4><?= t('ms.report_title') ?></h4>
    <ul>
        <li><?= t('ms.report1') ?></li>
        <li><?= t('ms.report2') ?></li>
    </ul>

    <p>
        <?= t('ms.outro') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
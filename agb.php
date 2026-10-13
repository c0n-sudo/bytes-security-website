<?php
$pageTitle = "AGB";
include 'includes/header.php';
?>

<section class="page-hero">
    <h1><?= t('agb.title') ?></h1>
</section>

<section class="page-hero">
    <p><strong>Bytes Security GmbH</strong><br>
    Ostenallee 48<br>
    59063 Hamm<br>
    <?= t('legal.country') ?><br>
    <?= t('contact.email') ?>: <a href="mailto:info@bytes-security.de">info@bytes-security.de</a><br>
    <?= t('legal.phone') ?>: +49 (0) 2381 999 797 0</p>

    <p><strong><?= t('agb.stand_label') ?>:</strong> <?= t('agb.stand_value') ?></p>

    <h3><?= t('agb.s1_title') ?></h3>
    <p><?= t('agb.s1_text') ?></p>

    <h3><?= t('agb.s2_title') ?></h3>
    <p><?= t('agb.s2_text') ?></p>

    <h3><?= t('agb.s3_title') ?></h3>
    <p><?= t('agb.s3_text') ?></p>

    <h3><?= t('agb.s4_title') ?></h3>
    <p><?= t('agb.s4_text') ?></p>

    <h3><?= t('agb.s5_title') ?></h3>
    <p><?= t('agb.s5_text') ?></p>

    <h3><?= t('agb.s6_title') ?></h3>
    <p><?= t('agb.s6_text') ?></p>

    <h3><?= t('agb.s7_title') ?></h3>
    <p><?= t('agb.s7_text') ?></p>

    <h3><?= t('agb.s8_title') ?></h3>
    <p><?= t('agb.s8_text') ?></p>

    <h3><?= t('agb.s9_title') ?></h3>
    <p><?= t('agb.s9_text') ?></p>

    <?php if ($lang !== 'de'): ?>
        <p><em><?= t('legal.notice') ?></em></p>
    <?php endif; ?>
</section>

<?php include 'includes/footer.php'; ?>
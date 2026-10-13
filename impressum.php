<?php
$pageTitle = "Impressum";
include 'includes/header.php';
?>

<section class="page-hero">
    <h1><?= t('footer.imprint') ?></h1>
</section>

<section class="content">
    <h3><?= t('imp.h_5') ?></h3>
    <p>Bytes Security GmbH<br>
    Ostenallee 48, 59063 Hamm<br>
    <?= t('imp.tel') ?>: +49 (0) 2381 999 797 0<br>
    <?= t('contact.email') ?>: <a href="mailto:info@bytes-security.de">info@bytes-security.de</a></p>

    <h3><?= t('imp.h_rep') ?></h3>
    <p>Thomas Karzelek</p>

    <h3><?= t('nav.contact') ?></h3>
    <p><?= t('imp.tel') ?>: +49 (0) 2381 999 797 0<br>
    <?= t('contact.email') ?>: <a href="mailto:info@bytes-security.de">info@bytes-security.de</a></p>

    <h3><?= t('imp.h_reg') ?></h3>
    <p><?= t('imp.ceo') ?>: Thomas Karzelek<br>
    <?= t('imp.register') ?>: <?= t('imp.court') ?><br>
    <?= t('imp.vat') ?>: DE364300784<br>
    <?= t('imp.seat') ?>: Hamm</p>

    <h3><?= t('imp.h_dispute') ?></h3>
    <p>
        <?= t('imp.dispute_a') ?><a href="https://ec.europa.eu/consumers/odr/" target="_blank">https://ec.europa.eu/consumers/odr/</a><?= t('imp.dispute_b') ?>
    </p>

    <?php if ($lang !== 'de'): ?>
        <p><em><?= t('legal.notice') ?></em></p>
    <?php endif; ?>
</section>

<?php include 'includes/footer.php'; ?>
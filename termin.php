<?php
$pageTitle = "Termin buchen";
include 'includes/header.php';
?>

<section class="page-hero">
    <h1><?= t('btn.booking') ?></h1>
</section>

<section class="booking-section">
    <iframe
        src="https://outlook.office.com/book/BytesSecurityGmbH1@bsitco.de/?ismsaljsauthenabled"
        width="100%"
        height="800"
        style="border: none;"
        title="<?= t('btn.booking') ?>">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
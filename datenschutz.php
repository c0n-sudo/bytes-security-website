<?php
$pageTitle = "Datenschutzerklärung";
include 'includes/header.php';
$msPrivacy = 'https://privacy.microsoft.com/' . ($lang === 'de' ? 'de-de' : 'en-us') . '/privacystatement';
?>

<section class="page-hero">
    <h1><?= t('footer.privacy') ?></h1>
</section>

<section class="content">

  <h3><?= t('dsg.s1_title') ?></h3>
  <p>
    Bytes Security GmbH<br>
    Ostenallee 48, 59063 Hamm<br>
    <?= t('legal.country') ?><br>
    <?= t('contact.email') ?>: <a href="mailto:info@bytes-security.de">info@bytes-security.de</a><br>
    <?= t('legal.phone') ?>: +49 (0) 2381 999 797 0<br>
    <?= t('dsg.repr') ?>: Thomas Karzelek
  </p>

  <h3><?= t('dsg.s2_title') ?></h3>
  <p>
    <?= t('dsg.s2_text') ?>
  </p>

  <h3><?= t('dsg.s3_title') ?></h3>
  <p>
    <?= t('dsg.s3_text') ?>
  </p>

  <h3><?= t('dsg.s4_title') ?></h3>
  <p>
    <?= t('dsg.s4_text') ?>
  </p>

  <h3><?= t('dsg.s5_title') ?></h3>
  <p>
    <?= t('dsg.s5_text') ?>
  </p>

  <h3><?= t('dsg.s6_title') ?></h3>
  <p>
    <?= t('dsg.s6_a') ?><a href="<?= $msPrivacy ?>" target="_blank"><?= $msPrivacy ?></a><?= t('dsg.s6_b') ?>
  </p>

  <h3><?= t('dsg.s7_title') ?></h3>
  <p>
    <?= t('dsg.s7_text') ?>
  </p>

  <h3><?= t('dsg.s8_title') ?></h3>
  <p>
    <?= t('dsg.s8_text') ?>
  </p>

  <h3><?= t('dsg.s9_title') ?></h3>
  <p>
    <?= t('dsg.s9_text') ?>
  </p>

  <p><em><?= t('dsg.stand') ?></em></p>

  <?php if ($lang !== 'de'): ?>
    <p><em><?= t('legal.notice') ?></em></p>
  <?php endif; ?>

</section>

<?php include 'includes/footer.php'; ?>
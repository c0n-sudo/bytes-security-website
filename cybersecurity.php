<?php
$pageTitle = "Cybersecurity";
include 'includes/header.php';
?>

<section class="solutions-grid">
    <a href="<?= url('managed-firewall.php') ?>" class="solution-card">
        <h3><?= t('cyber.firewall') ?></h3>
    </a>
    <a href="<?= url('virenschutz-malware.php') ?>" class="solution-card">
        <h3><?= t('cyber.antivirus') ?></h3>
    </a>
    <a href="<?= url('sicherheitsaudits.php') ?>" class="solution-card">
        <h3><?= t('cyber.audits') ?></h3>
    </a>
    <a href="<?= url('netzwerksicherheit.php') ?>" class="solution-card">
        <h3><?= t('cyber.network') ?></h3>
    </a>
    <a href="<?= url('compliance-bsi.php') ?>" class="solution-card">
        <h3><?= t('cyber.compliance') ?></h3>
    </a>
    <a href="<?= url('cloud-security.php') ?>" class="solution-card">
        <h3><?= t('cyber.cloud') ?></h3>
    </a>
    <a href="<?= url('nis2-beratung.php') ?>" class="solution-card">
        <h3><?= t('nav.nis2') ?></h3>
    </a>
    <a href="<?= url('zugangsverwaltung.php') ?>" class="solution-card">
        <h3><?= t('nav.access') ?></h3>
    </a>
    <a href="<?= url('it-notfallmanagement.php') ?>" class="solution-card">
        <h3><?= t('nav.emergency') ?></h3>
    </a>
    <a href="<?= url('it-awareness-schulungen.php') ?>" class="solution-card">
        <h3><?= t('nav.awareness') ?></h3>
    </a>
    <a href="<?= url('soc-beratung.php') ?>" class="solution-card">
        <h3><?= t('nav.soc') ?></h3>
    </a>
</section>

<?php include 'includes/footer.php'; ?>
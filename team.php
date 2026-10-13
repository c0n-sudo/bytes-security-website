<?php
$pageTitle = 'Team';
include 'includes/header.php';
?>

<section class="page-hero">
    <p class="breadcrumb"><?= t('team.breadcrumb') ?></p>
    <h1><?= t('nav.team_about') ?></h1>
</section>

<section class="team-grid">
    <div class="team-card">
        <img src="assets/img/thomas-karzelek.jpg" alt="Thomas Karzelek">
        <h3>Thomas Karzelek</h3>
        <p class="role"><?= t('team.thomas_role') ?></p>
        <p>
            <?= t('team.thomas_bio') ?>
        </p>
    </div>

    <div class="team-card">
        <img src="assets/img/lars-kasimir.jpg" alt="Lars Kasimir">
        <h3>Lars Kasimir</h3>
        <p class="role"><?= t('team.lars_role') ?></p>
        <p>
            <?= t('team.lars_bio') ?>
        </p>
    </div>

    <div class="team-card">
        <img src="assets/img/tobias-rottmann.jpg" alt="Tobias Rottmann">
        <h3>Tobias Rottmann</h3>
        <p class="role"><?= t('team.tobias_role') ?></p>
        <p>
            <?= t('team.tobias_bio') ?>
        </p>
    </div>

    <div class="team-card">
        <img src="assets/img/aleksandra-szczupakowska.jpg" alt="Aleksandra Szczupakowska">
        <h3>Aleksandra Szczupakowska</h3>
        <p class="role"><?= t('team.aleksandra_role') ?></p>
        <p>
            <?= t('team.aleksandra_bio') ?>
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
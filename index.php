<?php
$pageTitle = "Startseite";
include 'includes/header.php';
?>

<section class="hero">
    <div class="hero-bg"></div>
    <svg class="hero-network" viewBox="0 0 400 400" preserveAspectRatio="xMidYMid meet">
        <line x1="30" y1="40" x2="120" y2="20" stroke="#6366f1" stroke-width="1"/>
        <line x1="120" y1="20" x2="200" y2="70" stroke="#6366f1" stroke-width="1"/>
        <line x1="200" y1="70" x2="280" y2="40" stroke="#6366f1" stroke-width="1"/>
        <line x1="280" y1="40" x2="340" y2="110" stroke="#6366f1" stroke-width="1"/>
        <line x1="200" y1="70" x2="180" y2="160" stroke="#6366f1" stroke-width="1"/>
        <line x1="80" y1="140" x2="180" y2="160" stroke="#6366f1" stroke-width="1"/>
        <line x1="180" y1="160" x2="260" y2="180" stroke="#6366f1" stroke-width="1"/>
        <line x1="260" y1="180" x2="320" y2="240" stroke="#6366f1" stroke-width="1"/>
        <line x1="80" y1="140" x2="100" y2="260" stroke="#6366f1" stroke-width="1"/>
        <line x1="100" y1="260" x2="220" y2="280" stroke="#6366f1" stroke-width="1"/>
        <line x1="220" y1="280" x2="320" y2="240" stroke="#6366f1" stroke-width="1"/>
        <line x1="100" y1="260" x2="60" y2="320" stroke="#6366f1" stroke-width="1"/>
        <circle cx="30" cy="40" r="3" fill="#6366f1"/>
        <circle cx="120" cy="20" r="4" fill="#6366f1"/>
        <circle cx="200" cy="70" r="4" fill="#6366f1"/>
        <circle cx="280" cy="40" r="3" fill="#6366f1"/>
        <circle cx="340" cy="110" r="3" fill="#6366f1"/>
        <circle cx="80" cy="140" r="4" fill="#6366f1"/>
        <circle cx="180" cy="160" r="4" fill="#6366f1"/>
        <circle cx="260" cy="180" r="3" fill="#6366f1"/>
        <circle cx="320" cy="240" r="4" fill="#6366f1"/>
        <circle cx="100" cy="260" r="4" fill="#6366f1"/>
        <circle cx="220" cy="280" r="3" fill="#6366f1"/>
        <circle cx="60" cy="320" r="3" fill="#6366f1"/>
    </svg>
    <p class="eyebrow"><?= t('hero.eyebrow') ?></p>
    <h1><?= t('index.hero_title') ?></h1>
    <p>
        <?= t('index.hero_text') ?>
    </p>
</section>

<section id="services">
    <div class="services-grid">

        <article class="service-card">
            <h3><?= t('index.card1_title') ?></h3>
            <p>
                <?= t('index.card1_text') ?>
            </p>
        </article>

        <article class="service-card">
            <h3><?= t('index.card2_title') ?></h3>
            <p>
                <?= t('index.card2_text') ?>
            </p>
        </article>

        <article class="service-card">
            <h3><?= t('index.card3_title') ?></h3>
            <p>
                <?= t('index.card3_text') ?>
            </p>
        </article>
    </div>
</section>

<section id="schulungen" class="content">
    <p class="eyebrow"><?= t('nav.trainings') ?></p>
    <h2><?= t('index.training_title') ?></h2>
    <p>
        <?= t('index.training_intro') ?>
    </p>

    <h3><?= t('index.modules_title') ?></h3>
    <ul>
        <li><?= t('index.module1') ?></li>
        <li><?= t('index.module2') ?></li>
        <li><?= t('index.module3') ?></li>
        <li><?= t('index.module4') ?></li>
        <li><?= t('index.module5') ?></li>
        <li><?= t('index.module6') ?></li>
    </ul>

    <h3><?= t('index.support_title') ?></h3>
    <p>
        <?= t('index.support_text') ?>
    </p>
</section>

<section id="geschaeftsmodell" class="content">
    <p class="eyebrow"><?= t('nav.business') ?></p>
    <h2><?= t('index.business_title') ?></h2>
    <p>
        <?= t('index.business_intro') ?>
    </p>

    <h3><?= t('index.check_title') ?></h3>
    <p>
        <?= t('index.check_text1') ?>
    </p>
    <p>
        <?= t('index.check_text2') ?>
    </p>

    <h3><?= t('index.partner_title') ?></h3>
    <p>
        <?= t('index.partner_text') ?>
    </p>
</section>

<?php include 'includes/footer.php'; ?>
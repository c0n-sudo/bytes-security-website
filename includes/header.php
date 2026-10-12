<?php require_once __DIR__ . '/i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <script>document.documentElement.classList.add('js');</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Bytes Security' : 'Bytes Security GmbH'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Bytes Security GmbH - IT-Sicherheit, Managed Services und Compliance-Beratung aus Hamm.'; ?>">

    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' - Bytes Security' : 'Bytes Security GmbH'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Bytes Security GmbH - IT-Sicherheit, Managed Services und Compliance-Beratung aus Hamm.'; ?>">
    <meta property="og:image" content="https://bytes-security.de/assets/img/logo.png">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-inner">
            <a href="<?= url('index.php') ?>" class="logo">
                <img src="assets/img/logo.png" alt="Bytes Security">
            </a>

            <button class="nav-toggle" aria-label="Menü öffnen" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="nav-wrapper">
                <nav class="main-nav">
                    <span class="nav-highlight"></span>
                    <ul>
                        <li class="has-dropdown">
                            <a href="#"><?= t('nav.services') ?></a>
                            <button class="dropdown-toggle" aria-label="Untermenü öffnen" aria-expanded="false"></button>
                            <ul class="dropdown">
                                <li><a href="<?= url('cybersecurity.php') ?>"><?= t('nav.cybersecurity') ?></a></li>
                                <li><a href="<?= url('managed-services.php') ?>"><?= t('nav.managed') ?></a></li>
                                <li><a href="<?= url('bsi-konformitaet.php') ?>"><?= t('nav.bsi') ?></a></li>
                                <li><a href="<?= url('nis2-beratung.php') ?>"><?= t('nav.nis2') ?></a></li>
                                <li><a href="<?= url('zugangsverwaltung.php') ?>"><?= t('nav.access') ?></a></li>
                                <li><a href="<?= url('it-notfallmanagement.php') ?>"><?= t('nav.emergency') ?></a></li>
                                <li><a href="<?= url('it-awareness-schulungen.php') ?>"><?= t('nav.awareness') ?></a></li>
                                <li><a href="<?= url('soc-beratung.php') ?>"><?= t('nav.soc') ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?= url('index.php#services') ?>"><?= t('nav.solutions') ?></a></li>
                        <li><a href="<?= url('index.php#schulungen') ?>"><?= t('nav.trainings') ?></a></li>
                        <li><a href="<?= url('index.php#geschaeftsmodell') ?>"><?= t('nav.business') ?></a></li>
                        <li><a href="#footer-kontakt"><?= t('nav.contact') ?></a></li>
                        <li class="has-dropdown">
                            <a href="<?= url('team.php') ?>"><?= t('nav.team') ?></a>
                            <button class="dropdown-toggle" aria-label="Untermenü öffnen" aria-expanded="false"></button>
                            <ul class="dropdown">
                                <li><a href="<?= url('team.php') ?>"><?= t('nav.team_about') ?></a></li>
                                <li><a href="<?= url('rueckblick.php') ?>"><?= t('nav.review') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <span class="nav-divider"></span>
                <a href="<?= url('kontakt.php') ?>" class="btn-cta"><?= t('btn.inquiry') ?></a>
                <a href="<?= url('termin.php') ?>" class="btn-cta"><?= t('btn.booking') ?></a>

                <div class="lang-switch">
                    <?php foreach (SUPPORTED_LANGS as $code): ?>
                        <a href="?lang=<?= $code ?>"
                           class="<?= $code === $lang ? 'active' : '' ?>">
                            <?= strtoupper($code) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <main>
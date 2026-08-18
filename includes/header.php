<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <script>document.documentElement.classList.add('js');</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Bytes Security' : 'Bytes Security GmbH'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="logo">
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
                        <a href="#">Dienstleistungen</a>
                        <button class="dropdown-toggle" aria-label="Untermenü öffnen" aria-expanded="false"></button>
                        <ul class="dropdown">
                            <li><a href="cybersecurity.php">Cybersecurity</a></li>
                            <li><a href="managed-services.php">Managed Services</a></li>
                            <li><a href="bsi-konformitaet.php">BSI Konformität</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#services">Lösungen</a></li>
                    <li><a href="index.php#schulungen">Schulungen</a></li>
                    <li><a href="index.php#geschaeftsmodell">Geschäftsmodell</a></li>
                    <li><a href="#footer-kontakt">Kontakt</a></li>
                    <li class="has-dropdown">
                        <a href="team.php">Team</a>
                        <button class="dropdown-toggle" aria-label="Untermenü öffnen" aria-expanded="false"></button>
                        <ul class="dropdown">
                            <li><a href="team.php">Unser Team</a></li>
                            <li><a href="rueckblick.php">Bytes Security Rückblick</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <a href="kontakt.php" class="btn-cta">Anfrage stellen</a>
            <a href="termin.php" class="btn-cta">Termin buchen</a>
            </div>
        </div>
    </header>

    <main>
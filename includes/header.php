<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Bytes Security' : 'Bytes Security GmbH'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="Bytes Security">
            </a>

            <nav class="main-nav">
                <ul>
                    <li class="has-dropdown">
                        <a href="#">Dienstleistungen</a>
                        <ul clas="dropdown">
                            <li><a href="cybersecurity.php">Cybersecurity</a></li>
                            <li><a href="managed-services.php">Managed Services</a></li>
                            <li><a href="bsi-konformitaet.php">BSI Konformität</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#services">Lösungen</a></li>
                    <li><a href="index.php#schulungen">Schulungen</a></li>
                    <li><a href="index.php#geschaeftsmodell">Geschäftsmodell</a></li>
                    <li><a href="index.php#kontakt">Kontakt</a></li>
                </ul>
            </nav>

            <a href="index.php#kontakt" class="btn-cta">Anfrage stellen</a>
            <a href="termin.php" class="btn-cta">Termin buchen</a>
        </div>
    </header>

    <main>
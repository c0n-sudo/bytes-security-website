<?php
$pageTitle = "Startseite";
include 'includes/header.php';
?>

<section class="hero">
    <h1> Die Sicherheit unserer Kunden hat für uns obersten Priorität. </h1>
    <p>
        Wir unterstützen Unternehmen wie Ihres dabei, ihre IT-Infrastruktur im Bereich der Sicherheit zu optimieren. Wir verfügen über das notwendige Know-how und haben bereits zahlreichen Unternehmen erfolgreich geholfen. Wenn Sie erfahren möchten, wie Sie die Sicherheit in Ihrem Unternehmen weiter verbessern können, nehmen Sie gerne Kontakt mit uns auf. Wir freuen uns darauf, Ihnen zu helfen und gemeinsam die besten Lösungen für Ihre individuellen Anforderungen zu finden.
    </p>
</section>

<section id="services">
    <div class="services-grid">

        <article class="service-card">
            <h3> Management und Sicherheitsdienstleistungen </h3>
            <p> Wir sind uns bewusste, dass die primäre Aufgabe der IT-Abteilung in den meisten Fällen die Wartung ist. Der Fokus liegt daher auf der Unterstützung der Anwender und der reibungslosen Abwicklung der laufenden Prozesse im Unternehmen. Diese Prozesse sind von äußerster Bedeutung, da sie für die Produktion, den Vertrieb, die Kundengewinnung und die Qualitätssicherung verantwortlich sind. Die verfügbare Zeit für eine professionelles Management von Sicherheitsdienstleistungen ist oft begrenzt. Falls Sie sich in dieser Situation befinden oder generell Unterstützung im Bereich IT-Sicherheit oder Serveradministration benötigen, sind wir gerne für Sie da. Kontaktieren Sie uns, und wir erstellen Ihnen ein maßgeschneidertes Angebot, um diese Herausforderungen anzugehen und die Sicherheit in Ihrem Unternehmen zu verbesseren. </p>
        </article>

        <article class="service-card">
            <h3>Entwerfen von Lösungen</h3>
            <p>
                Die Herausforderungen, denen sich Unternehmen und IT-Abteilungen stellen müssen, sind direkt an die geschäftlichen Anforderungen geknüpft. Eine optimale Reaktion uaf spezifische Bedürfnisse erfordert die Nutzung umfassenden Wissens und umfangreicher Erfahrung. Dieses Vorgehen minimiert potenzielle Fehler. Unsere Projekte zeichnen sich durch praxiserpropter Funktionalität aus. Wir verfügen über die Fähigkeit, Lösungen nicht nur hinsichtlich ihrer erwarteten Funktionen, sondern auch in Bezug auf das Budget  und die zukünftige Entwicklung anzupassen. Dies ermöglicht Ihnen nicht nur Zeitersparnis, sondern auch die Kosteneffizienz. Unsere Kunden schätzen insbesondere unsere maßgeschneiderten Projekte. Überzeugen Sie sich selbst von unserer Expertise.
            </p>
        </article>

        <article class="service-card">
            <h3>Sicherheits-Audits</h3>
            <p>
                Wir werfen einen neutralen Blick auf Ihre IT-Struktur. Unsere Prüfung zeigt, ob alles nach bewährten Standards aufgebaut ist. Daraufhin erstellen wir einen Bericht und erklären unsere Einschätzung. Wir nehmen das Netzwerk, die Firewall-Einstellungen, die Benutzerauthentifizierung, Server und Backups genau unter die Lupe. Dabei geht es um klare Informationen. Wir finden Sicherheitslücken und zeigen auf, wo es Schwachstellen gibt, die bei einem Angriff ausgenutzt werden könnten. Zusätzlich geben wir Tipps zur Optimierung Ihrer bestehenden Umgebung. Das beste Ergebnis: Sie erhalten die Gewissheit, dass Ihre IT-Infrastruktur sicher ist. Möchten Sie uns ausprobieren? Sie können gerne eine kostenlose Sicherheitsüberprüfung anfordern.
            </p>
        </article>
</section>

<section id="schulungen">
    <!-- Schulungen: Awareness, Penetration Testing, Security Audits -->
</section>

<section id="geschaeftsmodell">
    <!-- Geschäftsmodell: Beratung, Implementierung, Support -->
</section>

<section id="kontakt">
    <h2>Kontakt</h2>
    <p>
        Nehmen Sie gerne Kontakt mit uns auf, wir melden uns schnellstmöglich bei Ihnen zurück.
    </p>

    <form action="php-mails.php" methode="POST" class="contact-form">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Telefon</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="subject">Betreff</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Nachricht</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit">Nachricht senden</button>

    </form>
</section>

<?php include 'includes/footer.php'; ?>
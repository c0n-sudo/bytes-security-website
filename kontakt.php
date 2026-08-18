<?php
$pageTitle = "Kontakt";
include 'includes/header.php';
?>

<section class="page-hero">
    <h1>Kontakt</h1>
</section>

<section id="kontakt" class="content">
    <p>
        Nehmen Sie gerne Kontakt mit uns auf - wir melden uns schnellstmöglich bei Ihnen zurück.
    </p>


    <form action="php-mails.php" method="POST" class="contact-form">

        <label for ="email">Name</label>
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
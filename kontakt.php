<?php
$pageTitle = "Kontakt";
include 'includes/header.php';
?>

<section class="page-hero">
    <h1><?= t('nav.contact') ?></h1>
</section>

<section id="kontakt" class="content">
    <p>
        <?= t('contact.intro') ?>
    </p>

    <form action="php-mails.php" method="POST" class="contact-form">

        <label for="name"><?= t('contact.name') ?></label>
        <input type="text" id="name" name="name" required>

        <label for="email"><?= t('contact.email') ?></label>
        <input type="email" id="email" name="email" required>

        <label for="phone"><?= t('contact.phone') ?></label>
        <input type="tel" id="phone" name="phone" required>

        <label for="subject"><?= t('contact.subject') ?></label>
        <input type="text" id="subject" name="subject" required>

        <label for="message"><?= t('contact.message') ?></label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit"><?= t('contact.submit') ?></button>

    </form>
</section>

<?php include 'includes/footer.php'; ?>
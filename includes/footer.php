</main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand">
                <img src="assets/img/logo.png" alt="Bytes Security">
                <p><?= t('footer.tagline') ?></p>
                <div class="footer-badges">
                    <img src="assets/img/cyberrisikocheck-logo.png"
                         alt="<?= t('a11y.badge_risk') ?>">
                    <img src="assets/img/allianz-cybersicherheit-teilnehmer-logo.png"
                         alt="<?= t('a11y.badge_alliance') ?>">
                </div>
            </div>

            <div class="footer-contact" id="footer-kontakt">
                <h2><?= t('footer.contact') ?></h2>
                <p>Bytes Security GmbH</p>
                <p>Ostenallee 48, 59063 Hamm</p>
                <p><a href="tel:+4923819997970">+49 (0) 2381 999 797 0</a></p>
                <p><a href="mailto:info@bytes-security.de">info@bytes-security.de</a></p>
            </div>

            <div class="footer-partner">
                <h2><?= t('footer.partner') ?></h2>
                <a href="https://bsitco.de/" target="_blank" rel="noopener" class="partner-link">
                    <img src="assets/img/BSITCO-logo.png" alt="BSITCO GmbH">
                    <span>BSITCO GmbH</span>
                </a>
            </div>

            <div class="footer-legal">
                <a href="<?= url('agb.php') ?>"><?= t('footer.terms') ?></a>
                <a href="<?= url('impressum.php') ?>"><?= t('footer.imprint') ?></a>
                <a href="<?= url('datenschutz.php') ?>"><?= t('footer.privacy') ?></a>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
const fadeTargets = document.querySelectorAll(
    '#services, #kontakt, .content, .team-grid, .solutions-grid, -booking-section'
);

if (fadeTargets.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserver(entry.target);
            }
        });
    }, { threshold: 0.15 });

    fadeTargets.forEach((el) => observer.observer(el));
}

const navToggle = document.querySelector('.nav-toggle');
const navWrapper = document.querySelector('.nav-wrapper');

if (navToggle && navWrapper) {
    navToggle.addEventListener('click', () => {
        const isOpen = navWrapper.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', isOpen);
    });
}

document.querySelectorAll('.dropdown-toggle').forEach((toggle) => {
    toggle.addEventListener('click', () => {
        const dropdown = toggle.nextElementSibling;
        const isOpen = dropdown.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen)
    });
});
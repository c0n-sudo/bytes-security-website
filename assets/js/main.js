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
const fadeTargets = document.querySelectorAll(
    '#services, #kontakt, .content, .team-grid, .solutions-grid, .booking-section'
);

if (fadeTargets.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    fadeTargets.forEach((el) => observer.observe(el));
}

const mainNav = document.querySelector('.main-nav');
const navHightlight = document.querySelector('nav-hightlight');
if (mainNav && navHightlight) {
    const navLinks = mainNav.querySelectorAll(':scope > ul > li > a');
    navLinks.forEach((link) => {
        link.addEventListener('mouseenter', () => {
            const linkRect = link.getBoundingClientRect();
            const navRect = mainNav.getBoundingClientRect();
            navHightlight.style.left = '${linkRect.left - navRect.left - 8}px';
            navHightlight.style.width = '${linkRect.width + 16}px';
            navHightlight.style.opacity= '1';
        });
    });
    mainNav.addEventListener('mouseleave', () => {
        navHightlight.style.opacity = '0';
    })
}

const siteHeader = document.querySelector('.site-header');
if (siteHeader) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            siteHeader.classList.add('is-scrolled');
        } else {
            siteHeader.classList.remove('is-scrolled');
        }
    })
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
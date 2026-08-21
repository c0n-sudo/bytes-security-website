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
let hasScrolled = false;
window.addEventListener('scroll', () => { hasScrolled = true }, { once: true });
const navHighlight = document.querySelector('.nav-highlight');
let activeSpyLink = null;

function setNavHighlight(link) {
    const linkRect = link.getBoundingClientRect();
    const navRect = mainNav.getBoundingClientRect();
    navHighlight.style.left = `${linkRect.left - navRect.left - 8}px`;
    navHighlight.style.width = `${linkRect.width + 16}px`;
    navHighlight.style.opacity = '1';
}

if (mainNav && navHighlight) {
    const navLinks = mainNav.querySelectorAll(':scope > ul > li > a');
    navLinks.forEach((link) => {
        link.addEventListener('mouseenter', () => {
            setNavHighlight(link);
        });
    });
    mainNav.addEventListener('mouseleave', () => {
        if (activeSpyLink) {
            setNavHighlight(activeSpyLink);
        } else {
            navHighlight.style.opacity = '0';
        }
    });

    const spySection = [];
    navLinks.forEach((link) => {
        const hash = link.hash;
        if (hash) {
            const target = document.querySelector(hash);
            if (target) {
                spySection.push({ link, target });
            }
        }
    });

    if (spySection.length && 'IntersectionObserver' in window) {
        const spyObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && hasScrolled) {
                    const match = spySection.find((s) => s.target === entry.target);
                    if (match) {
                        activeSpyLink = match.link;
                        setNavHighlight(activeSpyLink);
                    }
                }
            });
        }, { rootMargin: '-35% 0px -55% 0px' });

        spySection.forEach((s) => spyObserver.observe(s.target));
    }

    const kontaktSpy = spySection.find((s) => s.link.hash === '#footer-kontakt');
    if (kontaktSpy) {
        window.addEventListener('scroll', () => {
            const nearBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight - 50;
            if (nearBottom && hasScrolled) {
                activeSpyLink = kontaktSpy.link;
                setNavHighlight(activeSpyLink);
            }
        });
    }
}

const heroBg = document.querySelector('.hero-bg');
if (heroBg) {
    window.addEventListener('scroll', () => {
        const offset = window.scrollY * 0.15;
        heroBg.style.transform = `translateY(${offset}px)`;
    });
}

const heroNetwork = document.querySelector('.hero-network');
if (heroNetwork) {
    window.addEventListener('load', () => {
        setTimeout(() => {
            heroNetwork.classList.add('is-visible');
        }, 300);
    });
}

const siteHeader = document.querySelector('.site-header');
if (siteHeader) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 60) {
            siteHeader.classList.add('is-scrolled');
        } else if (window.scrollY < 20) {
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


/* Ignore statement follwing this line! */
console.log('%Build by c0n-sudo: https://github.com/c0n-sudo', 'color: #6366f1; font-size: 16px; font-weight: bold;');
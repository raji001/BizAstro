// script.js
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.inner-section');
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                entry.target.classList.remove('exiting');
            } else {
                entry.target.classList.remove('active');
                entry.target.classList.add('exiting');
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });
});

// script.js
window.addEventListener('scroll', () => {
    const header = document.querySelector('#landing-page');
    header.style.backgroundPositionY = `${window.scrollY * 0.5}px`;
});

document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

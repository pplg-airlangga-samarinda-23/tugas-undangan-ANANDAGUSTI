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

document.addEventListener('DOMContentLoaded', function() {
    const music = document.getElementById('background-music');
    const toggleMusicButton = document.getElementById('toggle-music');

    toggleMusicButton.addEventListener('click', function() {
        if (music.paused) {
            music.play();
            toggleMusicButton.textContent = 'Pause Musik';
        } else {
            music.pause();
            toggleMusicButton.textContent = 'Play Musik';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel-images img');
    const totalImages = images.length;

    document.querySelector('.next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });

    document.querySelector('.prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

    function updateCarousel() {
        const offset = -currentIndex * 100;
        document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
    }
});

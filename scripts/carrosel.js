const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel-item');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let index = 0;

function updateCarousel() {
    carousel.style.transform = `translateX(-${index * 100}%)`;
}

nextBtn.addEventListener('click', () => {
    index = (index + 1) % images.length;
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    index = (index - 1 + images.length) % images.length;
    updateCarousel();
});

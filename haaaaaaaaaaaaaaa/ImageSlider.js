// ImageSlider.js
document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.querySelector(".gallery");
    const images = gallery.querySelectorAll("img");
    let currentIndex = 0;

    function showImage(index) {
        images.forEach(img => img.classList.remove("active"));
        images[index].classList.add("active");
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    setInterval(nextImage, 3000); // Change image every 3 seconds
});

document.addEventListener('DOMContentLoaded', function() {
    var myCarousel = document.querySelector('#carouselExampleIndicators');
    if (myCarousel) {
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 6000 // Mengatur interval waktu antar slide (6000 milidetik = 6 detik)
        });

        // Event listeners for next and prev buttons
        document.querySelector('.carousel-control-next').addEventListener('click', function () {
            carousel.next();
        });

        document.querySelector('.carousel-control-prev').addEventListener('click', function () {
            carousel.prev();
        });
    }
});

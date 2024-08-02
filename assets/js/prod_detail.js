$(document).ready(function(){
    var mainCarousel = $(".main-carousel");
    var thumbnailCarousel = $(".thumbnail-carousel");

    // Initialize the main carousel
    mainCarousel.owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
    });

    // Initialize the thumbnail carousel
    thumbnailCarousel.owlCarousel({
        items: 2,
        margin: 10,
        nav: false,
        dots: false,
        center: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            }
        }
    });

    // Click event for thumbnail carousel
    thumbnailCarousel.on('click', '.owl-item', function(e) {
        e.preventDefault();
        var index = $(this).index();
        mainCarousel.trigger('to.owl.carousel', [index, 300, true]);
        thumbnailCarousel.trigger('to.owl.carousel', [index, 300, true]);
    });

    // Sync the thumbnail carousel with the main carousel
    mainCarousel.on('changed.owl.carousel', function(event) {
        var index = event.item.index;
        thumbnailCarousel.trigger('to.owl.carousel', [index, 300, true]);
    });
});

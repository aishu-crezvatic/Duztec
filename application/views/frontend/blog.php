<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owl Carousel Example</title>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .owl-item.active.center .item {
            border: 5px solid blue; /* Highlight with a blue border */
            transition: border 0.3s ease-in-out;
        }
        .owl-carousel .item {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 10px;
            padding: 10px;
        }
        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 2rem;
            color: blue;
            cursor: pointer;
            outline: none;
        }
        .owl-nav .owl-prev {
            left: -25px;
        }
        .owl-nav .owl-next {
            right: -25px;
        }
        .owl-nav button:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Our Gallery</h2>
    <div class="owl-carousel">
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
        <div class="item"> <img src="assets/images/gallery/gallery-image.png" alt=""> </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function(){
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                loop: true,
                margin: 10,
                center: true,
                nav: true,
                navText: ['<', '>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true
                    }
                },
                onTranslated: highlightCenter
            });

            function highlightCenter() {
                $(".owl-item").removeClass("center");
                var centerIndex = Math.floor($(".owl-item.active").length / 2);
                $(".owl-item.active").eq(centerIndex).addClass("center");
            }

            // Call highlightCenter initially to set the initial state
            highlightCenter();
        });
    </script>
</body>
</html>

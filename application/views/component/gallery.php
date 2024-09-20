<style>
    .swiper-container-custom {
        width: 100%;
        height: auto;
        overflow: visible;
        /* Allow slides to overflow container */
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        /* Optional shadow effect */
    }

    .swiper-slide-next,
    .swiper-slide-prev {
        transform: scale(0.8);
    }


    .swiper-slide-prev {
        left: 5%;
    }

    .swiper-slide-next {
        display: block !important;
        right: 5%;
        z-index: -1;
    }

    .swiper-button-prev,
    .swiper-rtl .swiper-button-next {
        left: 10% !important;
        right: auto;
    }

    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 60% !important;
    }

    .swiper-button-next,
    .swiper-rtl .swiper-button-prev {
        right: 10% !important;
        left: auto;
        font-size: 12px !important;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-family: swiper-icons;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        font-size: 22px !important;
        font-weight: 900;
        color: white;
        background-color: #2260A4;
        padding: 15px;
        border-radius: 100%;
    }
</style>


<!-- Swiper Container -->
<div class="swiper-container-custom overflow-hidden p-0 m-0">
    <div class="swiper-wrapper position-relative">
        <!-- <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 1"></div>
        <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 3"></div>
        <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 5"></div>
        <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 5"></div>
        <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 5"></div>
        <div class="swiper-slide"><img src="assets/images/products/ProductImageSection.webp" alt="Image 5"></div> -->
        <?php foreach ($images as $item): ?>
            <?php if ($item['is_video'] == 1): ?>
                <!-- Video element -->
                <a class="swiper-slide" href="<?php echo htmlspecialchars('uploads/gallery/' . $item['img_video']); ?>" target="_blank">

                <video  controls width="100%" style="height:300px">
                    <source src="<?php echo htmlspecialchars('uploads/gallery/' . $item['img_video']); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </a>
            <?php else: ?>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS and CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container-custom', {
        loop: true,
        centeredSlides: true, /* Center the active slide */
        slidesPerView: 3, /* Display 3 slides at a time */
        spaceBetween: 0, /* Space between slides */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });

</script>
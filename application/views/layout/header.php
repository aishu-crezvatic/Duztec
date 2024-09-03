<!DOCTYPE HTML>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Duztec</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Gallery css -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gallery.css">
        <!-- Favicon -->
        <link rel="icon" sizes="56x56" href="<?php echo base_url() ?>assets/images/fevicon.png">
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" media="all" />
        <!-- carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" media="all" />
        <!-- Animate Css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" media="all" />
        <!-- font-awesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/all.min.css" media="all" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css" media="all" />
        <!-- theme-default CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/template-default.css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css" type="text/css" media="all" />

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" media="all" />
        <!-- transitions CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css" media="all" />
        <!-- venobox CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>venobox/venobox.css" media="all" />
        <!-- animated CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animated-text.css" media="all" />
        <!-- widget CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/widget.css" media="all" />
        <!-- modernizr js -->
        <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" media="all" />

        <style>
            /* Style for the loader */
            #loader {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: #fff;
                /* You can change this to suit your design */
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }
        </style>
    </head>

    <body class="bg-water">

    <div id="loader">
        <video id="loader-video" autoplay muted loop class="w-100">
<<<<<<< HEAD
            <source src="<?php echo base_url()?>assets/video/DUZtech_New_Preloader_Video.mp4" type="video/mp4" w-100>
=======
            <source src="<?php echo base_url()?>assets/video/DUZtech_New_Preloader_Video.mp4" type="video/mp4">
>>>>>>> b105e90a7770fe1eb4853df2dc075f4c56f9a544
            Your browser does not support the video tag.
        </video>
    </div>

        <script>
            // JavaScript to hide the loader after at least 4 seconds
            window.addEventListener('load', function () {
                // Minimum display time for the loader (in milliseconds)
                const minLoaderTime = 2000;

                // Get the loader and content elements
                var loader = document.getElementById('loader');
                var content = document.getElementById('content');

                // Set a timeout to ensure the loader shows for at least 4 seconds
                setTimeout(function () {
                    loader.style.display = 'none'; // Hide the loader
                    content.style.display = 'block'; // Show the content
                }, minLoaderTime);
            });
        </script>

        <!-- ============================================================== -->
        <!-- Start - Header-Top- Section -->
        <!-- ============================================================= -->
        <!-- <div class="header-top-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="dreamit-top-address">
                            <span>Call Us: +91 9137657039 </span>
                            <span>-</span>
                            <span>Mail Us: sales@duztec.in </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 right-side">
                        <form class="d-inline">
                            <input type="text" name="search" placeholder="Search..">
                        </form>

                   <div class="social-icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-behance-square"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <span></span>
                    </div> 
                    <div class="option-form-thumb">
                        <img src="<?php echo base_url()?>assets/images/flag.png" alt="">
                    </div>-->
                    <!-- <div class="option-form">
                        <form action="action">
                            <select class="option">
                                <option class="form-option" value="volvo">EN</option>
                                <option class="form-option" value="saab">SP</option>
                                <option class="form-option" value="fiat">RS</option>
                                <option class="form-option" value="audi">AR</option>
                            </select>
                        </form>
                    </div> -->
                </div>
            </div>
        </div> 
    </div>
    <!-- ============================================================== -->
    <!-- Start - Header-Menu- Area -->
    <!-- ============================================================= -->
    <div id="sticky-header" class="header-menu-section">
        <div class="containe px-3">
            <div class="menu-wrapper">
                
                <div class="row  justify-content-evenly align-items-center">
                    
                    <div class="col-lg-2 col-md-2">
                        <div class="header-logo">
                            <a class="menu-logo" href="<?php echo base_url()?>index"><img src="<?php echo base_url()?>assets/images/data_tech_logo.png" alt="" style="height: auto; width:100% "></a>
                        </div>
                    </div>

                    <!-- <div class="col-lg-2 col-md-2 col-2 text-end"> -->
                    <!-- <form action="<?= base_url('product') ?>" method="GET">
                            <input  type="text" name="query" placeholder="Search products...">
                        </form> -->
                    <!-- </div> -->
                   
                    <div class="col-lg-9 col-md-9">
                   
                            <div class="header-menu d-flex flex-wrap align-items-center justify-content-center">
                    


                            <ul>
                                <li><a href="<?php echo base_url()?>index"> <i class="fas fa-home"></i></a>

                                </li>
                                <li><a href="<?php echo base_url() ?>about">About Us</a>

                                </li>
<!--                                <li class="position-relative">
                                    <a href="<?php echo base_url() ?>product">Products <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="position-relative">
                                            <div class="drop-cat">
                                                <a href="#">Dust Suppression <i class="fa fa-angle-down"></i></a>
                                            </div>
                                            <ul class="sub-prod">
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">Mosquito</a></li>
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">Godust</a></li>
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">Mist Beams</a></li>
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">Double Barrel System</a></li>
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">HPDS</a></li>
                                                <li><a href="<?php echo base_url() ?>product_detail/index/2">SFDS</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Odur Control System</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Waste Water Evaporation</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Road Washing System</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Fog Curtain</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Truck Mounted Mist Beams</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Trolly Mounted Mist Beams</a></li>
                                        <li><a href="<?php echo base_url() ?>product_detail/index/2" >Cooling and Humidification</a></li>
                                    </ul>
                                 </li>-->

                                    <li class="position-relative">
                                        <a href="<?php echo base_url(); ?>product_category">Products <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">

                                            <?php 
                                             $sub_cat_count = 0; 
                                            foreach ($product_with_cat_sub_cat as $product) { ?>

                                                <?php
                                                $search_c_id = $product['c_id'];
                                                $search_sc_id = $product['sc_id'];
                                                $c_id_exists = false;
                                                      
                                                foreach ($product_sub_category as $sub_category) {
                                                    if ($sub_category['c_id'] == $search_c_id) {
                                                        $c_id_exists = true;
                                                        $sub_cat_count++;
                                                        break;  // Stop the loop if found
                                                    }
                                                }

                                                    //echo "Value exists in c_id_exists key.".$c_id_exists.' product name '.$product['name'].'</br>';
                                                   //exit;
                                                if ($c_id_exists) {
                                                    // echo "Value exists in c_id key.";
                                                    ?>
                                                    <li class="position-relative">
                                                        <?php if ($sub_cat_count == 1) { ?>
                                                        <div class="drop-cat">
                                                            <a href="<?php echo base_url() . 'product_sub_category/' . $product['p_id']; ?>"><?php echo $product['cat_name'].' '; ?><i class="fa fa-angle-down"></i></a>
                                                        </div>
                                                    <?php // }else{ ?>
                                                        <ul class="sub-prod">
                                                            <?php //  foreach ($product_sub_category as $sub_category) { ?>
                                                            <?php 
                                                            $search_c_id = $product['c_id'];
                                                            foreach ($product_sub_category as $sub_category2) { 
                                                                if($sub_category2['sc_id'] == $search_c_id && $search_sc_id > 0) {
//                                                                    echo "Value exists in sc_id_exists key.".$search_sc_id.' product name '.$product['name'].'</br>';
                                                                    foreach ($product_with_cat_sub_cat as $product2) {
                                                                        $search_sc_id2 = $product2['sc_id'];
//                                                                        echo "<pre> shankar ".$search_sc_id2.' </br>';
                                                                        if($search_sc_id2 > 0 ) {
                                                                ?>
                                                                <!--<li><a href="<?php // echo base_url() . 'product_detail/' . $sub_category['c_id']; ?>"><?php echo $sub_category['name']; ?></a></li>-->
                                                                <li><a href="<?php echo base_url() . 'product_detail/' . $product2['p_id']; ?>"><?php echo $product2['sub_cat_name']; ?></a></li>
                                                            <?php 
                                                                
                                                                        }
                                                                        }
                                                                }
                                                                } ?>
<!--                                                            <li><a href="product">Mosquito</a></li>
                                                            <li><a href="product">Godust</a></li>
                                                            <li><a href="product">Mist Beams</a></li>
                                                            <li><a href="product">Double Barrel System</a></li>
                                                            <li><a href="product">HPDS</a></li>
                                                            <li><a href="product">SFDS</a></li>-->
                                                        </ul>
                                                    <?php } ?>
                                                    </li>
                                                <?php } else { ?>
                                                    <li><a href="<?php echo base_url() . 'product_detail/' . $product['p_id']; ?>"><?php echo $product['cat_name']; ?></a></li>
                                                <?php } ?>
                                            <?php } ?>
                                                    
                                                    </ul>
                                </li>
                                <li><a href="#">Sectors <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($sectors as $sector) {  ?>
                                        <li><a href="<?php echo base_url() ?>sectors/<?php echo $sector['sd_id']; ?>"><?php echo $sector['name']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>

                                <li><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
                                <li><a >Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($blog_categories as $category) { ?>
                                        <li><a href="<?php echo base_url() ?>/blog/<?php echo $category['bc_id']; ?>"><?php echo $category['name']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <!-- <li><a href="gallery">Gallery</a></li> -->
                                <li><a href="<?php echo base_url() ?>contact_us">Contact</a></li>
                            </ul>
                            <!-- <div class="header-src-btn">
                                <div class="search-box-btn search-box-outer"><i class="fas fa-search"></i></div>
                            </div> -->
                            <form action="<?= base_url('product') ?>" method="GET">
                                  <input  type="text" name="query" placeholder="Search products...">
                            </form>
                            <div class="header-button text-right">
                                <a href="#">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End - Mobile-Menu- Section -->
    <!-- ============================================================= -->
    <!-- Mobile-Menu -->
    <div class="mobile-menu p-0">
        <div class="conainer">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo-container row justify-content-evenly">
                        <div class="header-logo col-2 col-md-1">
                            <a class="mobile-logo" href="<?php echo base_url() ?>index"><img src="<?php echo base_url()?>assets/images/fevicon.png" alt=""></a>
                        </div>
                        <div class=" col-6 overflow-hidden">
                        <form action="<?= base_url('product') ?>" method="GET">
                                  <input  type="text" name="query" placeholder="Search products...">
                            </form>
                        </div> 
                        <div class="menu-toggle col-2">
                            <div class="icon text-end">
                                <i class="fas fa-bars "></i>
                                <i class="fas fa-times "></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="header-menu2">
                        <ul>
                            <li class="expand"><a class="menu_hide" href="<?php echo base_url() . 'index' ?>">Home
                                    <!-- <div class="menu-toggle2">
                                        <div class="icon2">
                                            <span class="plus">+</span>
                                            <span class="minus">-</span>
                                        </div>
                                    </div> -->
                                </a>
                                <!-- <ul class="menu_open sub-menu2">
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                    <li><a href="index-5.html">Home Page Five</a></li>
                                    <li><a href="landing-1.html">Landing Page One</a></li>
                                    <li><a href="landing-2.html">Landing Page Two</a></li>
                                </ul> -->
                            </li>
                            <li class="expand"><a class="menu_hide2" href="about">About Us
                                    <!-- <div class="menu-toggle2">
                                        <div class="icon2">
                                            <span class="plus">+</span>
                                            <span class="minus">-</span>
                                        </div>
                                    </div> -->
                                </a>
                                <!-- <ul class="menu_open2 sub-menu2">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="service.html">It Service</a></li>
                                    <li><a href="single-service.html">Service Details</a></li>
                                    <li><a href="case-study-details.html">Case Study</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul> -->
                            </li>
                            <li class="expand"><a class="menu_hide3" href="#">Products
                                    <div class="menu-toggle2">
                                        <div class="icon2">
                                            <span class="plus">+</span>
                                            <span class="minus">-</span>
                                        </div>
                                    </div>
                                </a>
                                <ul class="menu_open3 sub-menu2">
                                     <?php 
                                        $sub_cat_count = 0; 
                                        foreach ($product_with_cat_sub_cat as $product) { 
                                            $search_c_id = $product['c_id'];
                                            $search_sc_id = $product['sc_id'];
                                            $c_id_exists = false;
                                            foreach ($product_sub_category as $sub_category) {
                                                if ($sub_category['c_id'] == $search_c_id) {
                                                    $c_id_exists = true;
                                                    $sub_cat_count++;
                                                    break;
                                                }
                                            }
                                            if ($c_id_exists) { ?>
                                                <p class="position-relative">
                                                    <?php if ($sub_cat_count == 1) { ?>
                                                    <div class="drop-cat">
                                                        <a href="<?php echo base_url() . 'product_sub_category/' . $product['p_id']; ?>"><?php echo $product['cat_name']; ?><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                    <ul class="">
                                                        <?php foreach ($product_sub_category as $sub_category2) { 
                                                            if($sub_category2['sc_id'] == $search_c_id && $search_sc_id > 0) {
                                                                foreach ($product_with_cat_sub_cat as $product2) {
                                                                    if($product2['sc_id'] > 0) { ?>
                                                                        <li><a href="<?php echo base_url() . 'product_detail/' . $product2['p_id']; ?>"><?php echo $product2['sub_cat_name']; ?></a></li>
                                                                    <?php }
                                                                }
                                                            }
                                                        } ?>
                                                    </ul>
                                                    <?php } ?>
                                                    </p>
                                            <?php } else { ?>
                                                <li><a href="<?php echo base_url() . 'product_detail/' . $product['p_id']; ?>"><?php echo $product['cat_name']; ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                </ul>
                            </li>
                            <li class="expand"><a class="menu_hide4" href="#">Sectors
                                    <div class="menu-toggle2">
                                        <div class="icon2">
                                            <span class="plus">+</span>
                                            <span class="minus">-</span>
                                        </div>
                                    </div>
                                </a>
                                <ul class="menu_open4 sub-menu2">
                                <?php foreach ($sectors as $sector) {  ?>
                                        <li><a href="<?php echo base_url() ?>sectors/<?php echo $sector['sd_id']; ?>"><?php echo $sector['name']; ?></a></li>
                                        <?php } ?>
                                </ul>
                            </li>
                            <li class="expand"><a class="menu_hide5" href="#">Blog
                                    <div class="menu-toggle2">
                                        <div class="icon2">
                                            <span class="plus">+</span>
                                            <span class="minus">-</span>
                                        </div>
                                    </div>
                                </a>
                                <ul class="menu_open5 sub-menu2">
                                <!-- <li><a href="<?php echo base_url() ?>/blog_details/1">Blog Details</a></li> -->

                                <!-- <li><a >Blog <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu"> -->
                                        <?php foreach ($blog_categories as $category) { ?>
                                        <li><a href="<?php echo base_url() ?>/blog/<?php echo $category['bc_id']; ?>"><?php echo $category['name']; ?></a></li>
                                        <?php } ?>
                                    <!-- </ul>
                                </li> -->

                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>contact_us">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



     <!-- <div data-id="74a7bab1" data-element_type="widget" data-widget_type="themedraft_section_title.default" style="flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px;  color: rgb(103, 111, 134); font-family: &quot;Red Rose&quot;; font-size: 17px; font-weight: 400; white-space-collapse: collapse;">
        <div style="transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);">
            <div style="margin: 0px; ">
  <p>
J.Duncan through its group company lok-beta having corporate office in Mumbai-India, Moscow-Russia, Kiev-Ukraine, &amp; Minsk-Belarus, Lok-Beta is able to expend its marketing operations in Asia Pacific, Latin America and Africa Market covering more than 32 countries.
</p></div></div></div> -->
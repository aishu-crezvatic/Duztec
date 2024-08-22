<!-- header start  -->
<?php $this->load->view('layout/header'); 
// echo '<pre>';
        //  print_r($sector_detail);
        // exit;
?>
<!-- header end  -->

<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section-sector d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcumn-content text-left wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    <h2>Sector Detail</h2>
                    <ul>
                        <li><a href="index.html"> <i class="fas fa-home"></i> </a></li>
                        <li class="style2 text-white">Home</li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="style2 sectorStyle2"><?php echo $sector_detail[$selected_sector_index]['name']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<div class="portfolio-details single-style pt-4">
    <div class="container">
        <div class="row justify-content-between h-75">
            <div class="col-lg-7 col-md-12">
                <div class="blog-thumb">
                    <img id="industry-main-image" src="assets/images/default.jpg" alt="" style="width:100%">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 card col-12 p-0">
                <div class="blog-content">
                    <h2 class="py-2 heading">All Sectors</h2>
                </div>
                <div class="single-content m-0">
                    <ul id="industry-links">
                        <!-- Links will be populated dynamically -->
                        <?php foreach($sector_detail as $sector){ ?>
                        <a href="<?php echo base_url()?>sectors/<?php echo $sector['sd_id'] ?>" class="industry-link" style="text-decoration: none;"><li class="py-3 ps-3"><?php echo $sector['name']; ?></li></a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5 align-items-start ">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="text1">
                <?php //foreach($sector_detail as $sector){ ?>
                    <h2 id="industry-subtitle" class="py-4 heading"><?php echo $sector_detail[$selected_sector_index]['name']; ?></h2>
                    <p id="industry-description" class="p-0 m-0"><?php echo $sector_detail[$selected_sector_index]['description']; ?></p>
                    <?php //} ?>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="py-4 heading">Image gallery</h2>
                <img id="industry-gallery-image" src="assets/images/default.jpg" alt="" style="width:100%">
            </div>
        </div>

        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!! Related products !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="service-section pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <!-- <h5>// WHAT WE Do</h5> -->
                            <h1>RELATED PRODUCTS</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
			<div class="service_list owl-carousel">
                            <?php foreach ($product_with_cat_sub_cat as $product) { 
                                $images = explode(',', $product['images']);
                                ?>
				<div class="service-single-box">
					<div class="service-thumb">
						<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $images[0]; ?>" alt="">
					</div>
					<!-- <div class="service-icon">
						<i class="flaticon-business-and-finance"></i>
					</div> -->
					<div class="service-content">
						<h2><?php echo $product['name']; ?></h2>
						<!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>-->
						<!--<p><?php echo $product['conclusion']; ?></p>-->
                                                <a href="<?php echo base_url().'product_detail/'.$product['p_id'] ?>">Learn More</a>
					</div>
				</div>
                            <?php } ?>
<!--				<div class="service-single-box">
					<div class="service-thumb">
						<img src="<?php echo base_url() ?>assets/images/products/ProductImageSection.webp" alt="">
					</div>
					 <div class="service-icon">
						<i class="flaticon-briefcase"></i>
					</div> 
					<div class="service-content">
						<h2>Double Barrel System</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<a href="single-service.html">Learn More</a>
					</div>
				</div>
				<div class="service-single-box">
					<div class="service-thumb">
						<img src="<?php echo base_url() ?>assets/images/products/ProductImageSection.webp" alt="">
					</div>
					 <div class="service-icon">
						<i class="flaticon-mail"></i>
					</div> 
					<div class="service-content">
						<h2>Double Barrel System</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<a href="single-service.html">Learn More</a>
					</div>
				</div>-->

			</div>
		</div>
                
                
<!--                <div class="row">
                    <div class="service_list owl-carousel">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/products/ProductImageSection.webp" alt="">
                            </div>
                             <div class="service-icon">
						<i class="flaticon-business-and-finance"></i>
					</div> 
                            <div class="service-content">
                                <h2>Double Barrel System</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="single-service.html">Learn More</a>
                            </div>
                        </div>
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/products/ProductImageSection.webp" alt="">
                            </div>
                             <div class="service-icon">
						<i class="flaticon-briefcase"></i>
					</div> 
                            <div class="service-content">
                                <h2>Double Barrel System</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="single-service.html">Learn More</a>
                            </div>
                        </div>
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="assets/images/products/ProductImageSection.webp" alt="">
                            </div>
                             <div class="service-icon">
						<i class="flaticon-mail"></i>
					</div> 
                            <div class="service-content">
                                <h2>Double Barrel System</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="single-service.html">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>-->
                
            </div>

            <div class="shape-thumb">
                <div class="service-shape-thumb bounce-animate">
                    <img src="assets/images/shape2.png" alt="">
                </div>
                <div class="service-shape-thumb2 bounce-animate">
                    <img src="assets/images/shape4.png" alt="">
                </div>
                <div class="service-shape-thumb3 rotateme">
                    <img src="assets/images/service-shape.png" alt="">
                </div>
            </div>
        </div>

        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <!-- Our Work -->
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="container row mt-5 justify-content-center gap-5 d-none">
            <h1 class="headin fs-1">Our Work</h1>
            <div class="col-12 col-md-4">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <!-- Slides for Slider 1 will be populated dynamically -->
                    </div>
                    <div class="navigation">
                        <button class="prev" data-slider="slider1">&#10094;</button>
                        <button class="next" data-slider="slider1">&#10095;</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="slider-container" id="slider2">
                    <div class="slider">
                        <!-- Slides for Slider 2 will be populated dynamically -->
                    </div>
                    <div class="navigation">
                        <button class="prev" data-slider="slider2">&#10094;</button>
                        <button class="next" data-slider="slider2">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->

<!-- Include the JavaScript file -->
<!--<script src="<?php //echo base_url() ?>assets/js/sectors.js"></script>-->
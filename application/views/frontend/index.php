<!-- header start  -->
<?php $this->load->view('layout/header');

// echo '<pre>';
// print_r($home_page_data);
// exit;
if (!empty($home_page_data)): ?>
	<?php foreach ($home_page_data as $home_page_data):
	?>
		<!-- header end  -->
		<!-- ============================================================== -->
		<!-- Start - Slider- Section -->
		<!-- ============================================================= -->
		<!-- <div class="slider-section d-flex align-items-center"> -->
		<div class="slider-section d-flex align-items-center position-relative">
			<!-- <video id="background-video" preload="auto" poster="<?php echo base_url(); ?>uploads/heroBanner/<?php echo $home_page_data['hero_banner']; ?>"
				autoplay muted playsinline loop>
							<source src="<?php echo base_url(); ?>uploads/heroBanner/<?php echo $home_page_data['hero_banner']; ?>" type="video/mp4">
			</video> -->
			<div id="background-video" class="swiper-container unique"> <!-- Use swiper-container class -->
				<div class="swiper-wrapper">
					<?php
					$image_array = [
						'contact-us-banner.png',
						'contact-us-banner.png',
						'contact-us-banner.png',
						'contact-us-banner.png',
						'contact-us-banner.png',
					]; // Dummy array of images
					foreach ($image_array as $image): ?>
						<div class="swiper-slide">
							<img class="w-100" src="<?php echo base_url(); ?>uploads/heroBanner/<?php echo $image; ?>" alt="">
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-pagination"></div>
				<!-- <div class="swiper-button-next"></div> -->
				<!-- <div class="swiper-button-prev"></div> -->
			</div>

			<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
			<script>
				const swiper2 = new Swiper('.unique', {
					loop: true,
					pagination: {
						el: '.unique .swiper-pagination', // Scoped to this Swiper instance
						clickable: true,
					},
					navigation: {
						nextEl: '.unique .swiper-button-next', // Corrected selector
						prevEl: '.unique .swiper-button-prev', // Corrected selector
					},
					autoplay: {
						delay: 3000,
						disableOnInteraction: false,
					},
				});
			</script>


			<div class="overlay"></div>

			<div class="HomeTextContaine container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="slider-content text-center">
							<h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">WE PROVIDE THE BEST
								<span>DUST SUPPRESSION SOLUTION</span>
							</h2>
							<h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">IN INDUSTRIAL SERVICE</h2>
							<div class="slider-circle-thumb rotateme">
								<img src="assets/images/shape3.png" alt="">
							</div>
							<div class="slider-button text-center">
								<a class="wow fadeInUpBig showForm2" data-wow-duration="2s" data-wow-delay=".5s"
									href="#">Enquire Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->



		<!-- ============================================================== -->
		<!-- Start - About- Section -->
		<!-- ============================================================= -->
		<div class="about-section pb-0">
			<div class="section-title">
				<h1 class="text-center">ABOUT US</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="about-thumb about-thumb-border">
							<img src="uploads/heroBanner/<?php echo $home_page_data['about_thumbnail']; ?>" alt="">
							<div class="about-video-icon">
								<a class="video-vemo-icon vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play"></i></a>
							</div>


						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="about-single-box d-flex">
							<!-- <div class="about-icon">
							<i class="fas fa-check-circle"></i>
						</div> -->
							<div class="about-content">
								<div class="about-title">
									<h2><?php echo $home_page_data['about_title']; ?></h2>
									<!-- <h2>MAR­KET LEAD­ER IN INDUS­TRI­AL</h2>
							<h2>DUST SUP­PRES­SION SYSTEMS</h2> -->
								</div>
								<div class="about-text">
									<p><?php echo $home_page_data['about_description']; ?></p>
								</div>
								<div class="service-content">
									<a href="<?php echo base_url() . 'about'; ?>">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Start -our product -->
		<!-- ============================================================= -->
		<div class="service-section p-0 p-md-5 p-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-title text-center">
							<!-- <h5>// WHAT WE Do</h5> -->
							<h1>OUR PRODUCTS</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="service_list owl-carousel">
						<?php foreach ($product_with_cat_sub_cat as $product) {
							$images = explode(',', $product['images']);
						?>
							<div class="service-single-box rounded position-relative" style="height:500px">
								<div class="service-thumb ProdImgContainer ">
									<img class="" src="<?php echo base_url() ?>uploads/product/image/<?php echo $images[0]; ?>"
										alt="" style="height:300px">
									<!-- <img class="hoverImg d-none"
										src="https://images.pexels.com/photos/27946281/pexels-photo-27946281/free-photo-of-a-small-boat-is-docked-in-the-water.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
										alt="" style="height:300px"> -->
								</div>
								<div>

								</div>

								<div class="service-content">
									<h2><?php echo $product['name']; ?></h2>
									<!--<p><?php echo $product['conclusion']; ?></p>-->
									<p>Lorem ipsum dolor sit amet.</p>
									<a class="bottom-0 position-absolute"
										href="<?php echo base_url() . 'product-detail/' . $product['p_id'] ?>"
										style="left:35%">Learn More</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
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
		<!-- ============================================================== -->
		<!-- Start - call-Do-Action- Section -->
		<!-- ============================================================= -->
		<!-- <div class="call-do-action">
		<div class="container">
			<div class="row call-bg">
				<div class="col-lg-12">
					<div class="call-video-icon text-center">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->

		<!-- ============================================================== -->
		<!-- Start - Feature- Section -->
		<!-- ============================================================= -->
		<div class="feature-section p-3 pt-5">
			<div class="container">
				<div class="section-title text-center">
					<h1>SECTORS/INDUSTRIES</h1>
				</div>
				<div class="row sectors-industries">
					<?php foreach ($sectors as $sector) { ?>
						<div class="col-lg-4 col-md-6">
							<a href="<?php echo base_url() . 'sectors/' . $sector['sd_id']; ?>">
								<div class="single-feature-box text-center">
									<div class="feature-icon">
										<i class="<?php echo $sector['gif_images']; ?>"></i>
									</div>
									<div class="feature-content">
										<h2><?php echo $sector['name']; ?> </h2>
										<!--<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.-->
										<!--</p>-->
									</div>

								</div>
							</a>
						</div>
					<?php } ?>
					<!--			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="flaticon-square"></i>
					</div>
					<div class="feature-content">
						<h2>Mining Industry</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="flaticon-world"></i>
					</div>
					<div class="feature-content">
						<h2>Construction & Demolition Industry</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="flaticon-metal-industry"></i>
					</div>
					<div class="feature-content">
						<h2>Metal Industry</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="flaticon-ports-terminals-industry"></i>
					</div>
					<div class="feature-content">
						<h2>Ports & Terminals Industry:</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="feature-waste-recycling-industry"></i>
					</div>
					<div class="feature-content">
						<h2>Waste & Recycling Industry:</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>

				</div>
			</div> -->
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Gallery- Section -->
		<!-- ============================================================= -->

		<div class="service-section p-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-title text-center">
							<h1>OUR WORK</h1>
						</div>
					</div>

					<?php $this->load->view('component/gallery') ?>

				</div>
			</div>
		</div>






		<!-- ============================================================== -->
		<!-- Start - Case-Study- Section -->
		<!-- ============================================================= -->
		<div class="case-study-section ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-title text-center">
							<!-- <h5>// WHAT WE Do</h5> -->
							<h1>LATEST BLOGS </h1>
						</div>
					</div>
				</div>

				<div class=" row justify-content-center">
					<div class="case_list owl-carousel">
						<?php foreach ($blogs as $blog) { ?>
							<a href="<?php echo base_url() . 'blog-details/' . $blog['b_id']; ?>">
								<div class="single-case-study">
									<div class="case-thumb">
										<img src="<?php echo base_url(); ?>assets/images/<?php echo $blog['b_image']; ?>" alt="No image found" style="max-height:500px">
										<div class="case-content">
											<h2><?php echo $blog['title']; ?></h2>
											<h6>Read More</h6>
											<!--									<a href="case-study-details.html"><span>+</span></a>-->
										</div>
									</div>
								</div>
							</a>
						<?php } ?>
						 
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Start - Contact-Us- Section -->
		<!-- ============================================================= -->

		<!-- ============================================================== -->
		<!-- Start - Blog- Section -->
		<!-- ============================================================= -->
		<div class="bolg-section pt-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-title text-center">
							<h1>We have more,</h1>
							<h1>Products</h1>

							<div class="slider-button text-center">
								<a class="wow fadeInUpBig showForm2" data-wow-duration="2s" data-wow-delay=".5s"
									href="#">Enquire Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<div class="col-lg-12">
		<p>No data found.</p>
	</div>
<?php endif; ?>


<!-- Footer start  -->
<script>
	$(document).ready(function() {
		$(".service_list").owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			nav: false,
			dots: true
		});
	});
</script>


<?php
$this->load->view('layout/footer'); ?>
<!-- Footer end  -->
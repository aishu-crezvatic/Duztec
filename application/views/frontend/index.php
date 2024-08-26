<!-- header start  -->
<?php $this->load->view('layout/header'); 

// echo '<pre>';
// print_r($home_page_data);
// exit;
if (!empty($home_page_data)) : ?>
				<?php foreach ($home_page_data as $home_page_data) : 
?>
<!-- header end  -->
<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<!-- <div class="slider-section d-flex align-items-center"> -->
<div class="slider-section d-flex align-items-center">
	<video preload="auto" poster="assets/video/<?php echo $home_page_data['hero_banner'];?>" autoplay="true" muted="true" playsinline="false"
		loop="true" classname="banner-video h-100 w-100 md:object-fill object-cover" src="assets/video/hero_video1.MP4">
		<source src="assets/video/<?php echo $home_page_data['about_image'];?>">
	</video>
	<!-- </div> -->
	<!-- particles.js container -->
	<!-- <div id="particles-js"></div> -->

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="slider-content text-center">

					<!-- <h5 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">Optimized It System</h5>  -->
					<h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">WE PROVIDE THE BEST
						<span>DUST SUPPRESSION SOLUTION</span>
					</h2>
					<h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">IN INDUSTRIAL SERVICE</h2>
					<div class="slider-circle-thumb rotateme">
						<img src="assets/images/shape3.png" alt="">
					</div>
					<div class="slider-button text-center">
						<a class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay=".5s" href="#">Enquire Now</a>
					</div>
					<!-- <div class="slider-video-icon">
						<a class="video-vemo-icon vbox-item" data-vbtype="youtube" data-autoplay="true"
							href="https://youtu.be/BS4TUd7FJSg"><i class="fas fa-play"></i></a>
						<span class="top">Watch Video</span>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>



<!-- ============================================================== -->
<!-- Start - About- Section -->
<!-- ============================================================= -->
<div class="about-section">
	<div class="section-title">
		<h1 class="text-center">ABOUT US</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="about-thumb about-thumb-border">
					<img src="assets/images/<?php echo $home_page_data['about_thumbnail'];?>" alt="">
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
							<h2><?php echo $home_page_data['about_title'];?></h2>
							<!-- <h2>MAR­KET LEAD­ER IN INDUS­TRI­AL</h2>
							<h2>DUST SUP­PRES­SION SYSTEMS</h2> -->
						</div>
						<div class="about-text">
							<p><?php echo $home_page_data['about_description'];?></p>
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
<div class="service-section">
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
				<div class="service-single-box">
					<div class="service-thumb">
						<img src="assets/images/products/ProductImageSection.webp" alt="">
					</div>
					<!-- <div class="service-icon">
						<i class="flaticon-business-and-finance"></i>
					</div> -->
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
					<!-- <div class="service-icon">
						<i class="flaticon-briefcase"></i>
					</div> -->
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
					<!-- <div class="service-icon">
						<i class="flaticon-mail"></i>
					</div> -->
					<div class="service-content">
						<h2>Double Barrel System</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<a href="single-service.html">Learn More</a>
					</div>
				</div>

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
<div class="feature-section">
	<div class="container">
		<div class="section-title text-center">
			<h1>SECTORS/INDUSTRIES</h1>
		</div>
		<div class="row sectors-industries">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature-box text-center">
					<div class="feature-icon">
						<i class="flaticon-bar-chart"></i>
					</div>
					<div class="feature-content">
						<h2>Cement Industry</h2>
						<p>Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt.
						</p>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-6">
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
			</div> 
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Gallery- Section -->
<!-- ============================================================= -->

<div class="service-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<h1>OUR GALLERY</h1>
				</div>
			</div>

			<?php $this->load->view('component/gallery') ?> 

		</div>
	</div>
</div>






<!-- ============================================================== -->
<!-- Start - Case-Study- Section -->
<!-- ============================================================= -->
<div class="case-study-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<!-- <h5>// WHAT WE Do</h5> -->
					<h1>LATEST BOLGS </h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="case_list owl-carousel">
				<div class="single-case-study">
					<div class="case-thumb">
						<img src="assets/images/blog/blog-image.png" alt="">
						<div class="case-content">
							<h2>Data Research Analysis</h2>
							<h6>Cloud Computing</h6>
							<a href="case-study-details.html"><span>+</span></a>
						</div>
					</div>
				</div>
				<div class="single-case-study">
					<div class="case-thumb">
						<img src="assets/images/blog/blog-image.png" alt="">
						<div class="case-content">
							<h2>Data Research Analysis</h2>
							<h6>Cloud Computing</h6>
							<a href="case-study-details.html"><span>+</span></a>
						</div>
					</div>
				</div>
				<div class="single-case-study">
					<div class="case-thumb">
						<img src="assets/images/blog/blog-image.png" alt="">
						<div class="case-content">
							<h2>Data Research Analysis</h2>
							<h6>Cloud Computing</h6>
							<a href="case-study-details.html"><span>+</span></a>
						</div>
					</div>
				</div>
				<div class="single-case-study">
					<div class="case-thumb">
						<img src="assets/images/blog/blog-image.png" alt="">
						<div class="case-content">
							<h2>Data Research Analysis</h2>
							<h6>Cloud Computing</h6>
							<a href="case-study-details.html"><span>+</span></a>
						</div>
					</div>
				</div>
				<div class="single-case-study">
					<div class="case-thumb">
						<img src="assets/images/blog/blog-image.png" alt="">
						<div class="case-content">
							<h2>Data Research Analysis</h2>
							<h6>Cloud Computing</h6>
							<a href="case-study-details.html"><span>+</span></a>
						</div>
					</div>
				</div>
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
<div class="bolg-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<h1>We have much more,</h1>
					<h1>let's get started</h1>

					<button class="cta_button" type="button">Collaborate with us > </button>
				</div>
			</div>
		</div>

	</div>
</div>
<?php endforeach; ?>
			<?php else : ?>
				<div class="col-lg-12">
					<p>No data found.</p>
				</div>
			<?php endif; ?>
<!-- ============================================================== -->
<!-- Start - Brand- Section -->
<!-- ============================================================= -->

<!-- Footer start  -->
<?php
 $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
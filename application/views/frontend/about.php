<!-- header start  -->
<?php $this->load->view('layout/header');  ?>
<style>
.breadcumn-section-about {
    background: url("<?php echo base_url().'assets/images/aboutUs-banner/'.$about_us[0]['hero_banner_image']; ?>");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>

<!--// echo "<pre>';-->
<!--// print_r($about_us);-->
<!--// exit;-->
<?php
if (!empty($about_us)) : ?>
				<?php foreach ($about_us as $about_us) : 
?>
<!-- header end  -->
<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section-about about-mobile d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s"
					data-wow-delay=".5s">
					<h2 class=" about-title">About Us</h2>
					<h2 class="fw-normal text-white "><?php echo $about_us['hero_banner_text']; ?></h2>
					<ul class="text-white pt-3">
						<li><a href="index.html"> <i class="fas fa-home fs-3"></i> </a></li>
						<li class="style2 fs-3 text-white">Home</li>
						<li><i class="fas fa-chevron-right fs-3"></i></li>
						<li class="style2 fs-3">Service Page</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - About- Section -->
<!-- ============================================================= -->
<div class="about-section style-two style-three style-four style-five single-style p-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
					<img src="<?php echo base_url() ?>assets/images/<?php echo $about_us['about_image'];?>" alt="about_image">
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="section-title p-0">
					<!-- <h5>// ABOUT COMPANY</h5> -->
					<h1 class="lh-1"><?php echo $about_us['about_title'];?></h1>
					<!-- <h1>& Industries!</h1> -->
					<p><?php echo $about_us['about_desc'];?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - call-Do-Action- Section -->
<!-- ============================================================= -->
<div class="call-do-action-about style-two">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-md-6 col-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>
			<div class="col-lg-7 col-md-6 col-sm-12">
				<h2 class="fw-bold about-title fs-1 py-2">OUR VISION</h2>
				<p class="text-white"><?php echo $about_us['vision'];?></p>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h2 class="fw-bold about-title fs-1 py-2">OUR MISSION</h2>
					<p class="text-white "><?php echo $about_us['mission'];?></p>

				</div>
				<div class="col-lg-2 col-md-6 col-6">
					<!-- <div class="w-50"> -->
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<!-- <div class="service-section style-two pt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<h1>A REMARKABLE HISTORY</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2018</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">READ MORE <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2019</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">Read More <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2020</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">Read More <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2021</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">Read More <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2022</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">Read More <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 ">
				<div class="service-single-box sBox">
					<div class="service-icon py-3">
						<h1>2024</h1>
					</div>
					<div class="">
						<div class="overflow-hidden" style="height:150px">
							<p>Established in 2018 & serving as market leader in Industrial Dust Control Solutions
								Duztec
								Engineering Pvt. Ltd. Is all about making the environment better by suppressing dust
								with
								high-end technologies. We serve first rate aid and give effective solutions for
								controlling
								dust emissions with our latest technologies. With wide range of Products , Needbase and
								Timebase support, Innovative & Experienced Solutions & Unparalleled Expertise, DUZTEC
								helps
								to reduce the spread of dust which allows you to not only create a dust-free , healthy
								and
								safe environment for your employees, as well as for the entire neighbourhood.</p>
						</div>
						<a href="#" class="text-primary text-decoration-none fw-bold">Read More <i
								class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- ============================================================== -->
<!-- Start - Video- Section -->
<!-- ============================================================= -->
<div class="position-relative">
	<img src="assets/images/Team image.png " alt="err" class="w-100">
	<div class="our_Team w-100">
		<h1 class="fw-bold ">OUR TEAM</h1>
		<p class="text-white fw-bold ">The Hardworking People</p>
	</div>

</div>
<!-- ============================================================== -->
<!-- Start - Teatimonial- Section -->
<!-- ============================================================= -->
<div class=" style-two">
	<div class="">
		<!-- <div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center py-5">
					<h1>Contact Us</h1>
				</div>
			</div> 
		</div> -->
		<div class="row py-5">
					<div class="col-lg-12 col-md-12">
						<div class="section-title text-center">
							<h1>We have more,</h1>
							<h1>Products</h1>

							<div class="slider-button text-center">
								<a class="wow fadeInUpBig showForm2" data-wow-duration="2s" data-wow-delay=".5s" href="#">Enquire Now</a>
							</div>
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
	<!-- Footer start  -->
	<?php $this->load->view('layout/footer'); ?>
	<!-- Footer end  -->
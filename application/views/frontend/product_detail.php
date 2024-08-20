<!-- header start  -->
<?php $this->load->view('layout/header'); 
// echo '<pre>';
//          print_r($product_detail_data);
//         exit;
?>

<!-- header end  -->

<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section-prodDetail d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s"
					data-wow-delay=".5s">
					<h2 class="about-title">OUR PRODUCT</h2>
					<P class="text-white fw-semibold fs-1">We are qualified & professional</P>
					<ul class="mt-5">
						<li><a href="index.html"> <i class="fas fa-home fs-4"></i> </a></li>
						<li class="style2 fs-4 text-white">Product</li>
						<li><i class="fas fa-chevron-right fs-4 text-white"></i></li>
						<!--<li class="style2 greenText fs-4">Double Barrel System</li>-->
						<li class="style2 greenText fs-4"><?php echo $product_detail_data[0]['name']; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="all-products-section">
<?php if (!empty($product_detail_data)) : ?>
<?php foreach ($product_detail_data as $product): ?>
	
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<div class="portfolio-details single-style">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-12 ">
				<div class=" position-relative">
					<div class="main-carousel owl-carousel">
						<div class="item ">
							<img src="<?php echo base_url() ?>assets/images/category_image.png" alt="Image 1">
						</div>
						<div class="item">
							<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Image 2">
						</div>

						<!-- Add more items as needed -->

					</div>
				</div>

				<div class="thumbnail-carousel owl-carousel p-5 overflow-hidden" style="height:25vh">
					<div class="item1 ">
						<img src="<?php echo base_url() ?>assets/images/category_image.png" alt="Thumbnail 1">
					</div>
					<div class="item1  ">
						<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Thumbnail 2">
					</div>

					<!-- Add more thumbnails as needed -->
				</div>


			</div>
			<div class="col-lg-5 col-md-12">
				<div class="blog-content">
					<h2 class="fs-1"><?php echo $product['name']; ?></h2>
					<!-- <p class="fw-bold pt-4">Introducing the revolutionary <span class="navyText">Duztec Double
							Barrel-DB</span> model, a cutting-edge solution for
						efficient dust suppression and quenching in slag management. Engineered to tackle the challenges
						of dust emissions during industrial processes, this innovative system incorporates specially
						designed double mist beams, ensuring a sustainable and effective approach. The <span
							class="navyText">Duztec Double Barrel-DB</span> boasts dual functionality, deploying
						Mist cannons or fog cannons at identical angles
						to simultaneously address two crucial aspects of slag management. One barrel efficiently cools
						the heated slag, promoting effective quenching, while the other focuses on suppressing the dust
						generated during the process. This dual-action approach not only enhances the overall efficiency
						of slag management but also contributes to a cleaner and safer working environment.
					</p> -->
					<p class="fw-bold pt-4"><?php echo $product['description']; ?></p>
					<div><span class="navyText fw-semibold">SKU :</span> lorem ipsum</div>
					<div><span class="navyText fw-semibold">Category : </span>lorem ipsum</div>

					<div class="mt-5 ">
						<span class="fs-2 fw-semibold" style="color:black">Buy or rent this machine ? </span>
						<h5 class="fw-bold">Request your pricce here</h5>
						<div class="btn px-2 text-white fw-bold priceReqBtn">PRICE REQUEST</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="tab-container">
	<div class="tabs">
		<div class="tab active" data-tab="description">Description</div>
		<div class="tab" data-tab="additional-info">Additional Information</div>
		<div class="tab" data-tab="videos">Videos</div>
	</div>
	<div class="tab-content">
		<div id="description" class="tab-pane active">
			<p class="fw-bold">The Duztec Double Barrel-DB boasts dual functionality, deploying Mist cannons or fog
				cannons at identical
				angles to simultaneously address two crucial aspects of slag management. One barrel efficiently cools
				the heated slag, promoting effective quenching, while the other focuses on suppressing the dust
				generated during the process. This dual-action approach not only enhances the overall efficiency of slag
				management but also contributes to a cleaner and safer working environment.</p>
		</div>
		<div id="additional-info" class="tab-pane">
			<p>Here is some additional information.</p>
		</div>
		<div id="videos" class="tab-pane">
			<p>Here are some videos.</p>
		</div>
	</div>
</div>
<?php endforeach; ?>
			<?php else : ?>
				<div class="col-lg-12">
					<p>No product found.</p>
				</div>
			<?php endif; ?>
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
						<img src="<?php echo base_url() ?>assets/images/products/ProductImageSection.webp" alt="">
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
						<img src="<?php echo base_url() ?>assets/images/products/ProductImageSection.webp" alt="">
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
						<img src="<?php echo base_url() ?>assets/images/products/ProductImageSection.webp" alt="">
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
			<img src="<?php echo base_url() ?>assets/images/shape2.png" alt="">
		</div>
		<div class="service-shape-thumb2 bounce-animate">
			<img src="<?php echo base_url() ?>assets/images/shape4.png" alt="">
		</div>
		<div class="service-shape-thumb3 rotateme">
			<img src="<?php echo base_url() ?>assets/images/service-shape.png" alt="">
		</div>
	</div>
</div>




<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<style>
	.card {
		display: flex;
		flex-direction: column;
	}

	.card1 {
		height: 500px;
		overflow-y: scroll;
		background-color: white;
	}

	.overflow-auto {
		overflow-y: auto;
		/* Enable vertical scrolling */
	}
</style>
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
	<?php
	//    echo "<pre>";
	//    print_r($product_detail_data);
	//    exit;
	?>
	<?php if (!empty($product_detail_data)): ?>
		<?php foreach ($product_detail_data as $product): ?>

			<!-- ============================================================== -->
			<!-- Start - Service- Section -->
			<!-- ============================================================= -->
			<div class="portfolio-details single-style p-0 p-md-5 p-lg-5">
				<div class="container">
					<div class="row justify-content-center">
						<!--images hard coded start-->
						<!--			<div class="col-lg-4 col-md-12 ">
				<div class=" position-relative">
					<div class="main-carousel owl-carousel">
						<div class="item ">
							<img src="<?php echo base_url() ?>assets/images/category_image.png" alt="Image 1">
						</div>
						<div class="item">
							<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Image 2">
						</div>

						 Add more items as needed 

					</div>
				</div>

				<div class="thumbnail-carousel owl-carousel p-5 overflow-hidden" style="height:25vh">
					<div class="item1 ">
						<img src="<?php echo base_url() ?>assets/images/category_image.png" alt="Thumbnail 1">
					</div>
					<div class="item1  ">
						<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Thumbnail 2">
					</div>

					 Add more thumbnails as needed 
				</div>


			</div>-->
						<!--images hard coded end-->

						<!--images hard coded start-->
						<div class="col-lg-6 col-md-12 ">
							<?php
							$images_string = $product['images'];
							$images = explode(',', $images_string)
								?>
							<div class=" position-relative p-1 ">
								<div class="main-carousel owl-carousel">
									<?php foreach ($images as $image) { ?>
										<div class="item position-relative p-2" style='background-color:#A6C438 '>
											<img class="position-relative"
												src="<?php echo base_url() ?>uploads/product/image/<?php echo $image; ?>"
												alt="Image 1"
												style="z-index:1;border-top-right-radius: 33px; border-bottom-left-radius:33px">
										</div>
									<?php } ?>
								</div>

								<script>
									$(document).ready(function () {
										$('.main-carousel').owlCarousel({
											items: 1, // Number of items to display
											autoplay: true, // Enable auto sliding
											autoplayTimeout: 3000, // Time between slides (in milliseconds)
											loop: false, // Set loop to false
											nav: true, // Add navigation (optional)
											dots: true // Show dots (optional)
										});
									});
								</script>

							</div>

							<div class="thumbnail-carousel owl-carousel p-5 overflow-hidden" style="">
								<?php foreach ($images as $image) { ?>
									<div class="item1 ">
										<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $image; ?>"
											alt="Thumbnail 1" style="">
									</div>
								<?php } ?>
								<!--					<div class="item1  ">
						<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Thumbnail 2">
					</div>-->

								<!-- Add more thumbnails as needed -->
							</div>


						</div>
						<!--images hard coded end-->

						<div class="col-lg-6 col-md-12">
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
								<!--<div><span class="navyText fw-semibold">SKU :</span> lorem ipsum</div>-->
								<!--<div><span class="navyText fw-semibold">Category : </span>lorem ipsum</div>-->

								<div class="mt-5 ">
									<!-- <h5 class="fw-bold">Request your pricce here</h5> -->
									<div class="btn px-2 text-white fw-bold priceReqBtn showForm2">PRICE REQUEST</div>
									<!-- <div class="btn px-2 text-white fw-bold priceReqBtn">DOWNLOAD BROCHURE</div> -->
									<a href="/index" target="blank" class="btn px-2 text-white fw-bold priceReqBtn">DOWNLOAD
										BROCHURE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!----------------------------->
	<?php if ($product['page_type'] == 1 && !empty($product['advantages_title']) && !empty($product['advantages_1']) && !empty($product['advantages1_para'])) { ?>
	<div class="call-do-action-abou style-two" style="padding-top: 30px;">
		<p style="text-align: center;">
		<h2 style="text-align: center;" class="textNavy">
			<?php echo $product['advantages_title']; ?>
		</h2>
		</p>
		<div class="">
			<div class="row justify-content-center gap-5">
				<?php if (!empty($product['advantages_1'])) { ?>
				<div class="col-lg-5 col-md-12 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_1']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages1_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['advantages_2'])) { ?>
				<div class="col-lg-5 col-md-12 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_2']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages2_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['advantages_3'])) { ?>
				<div class="col-lg-5 col-md-12 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_3']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages3_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['advantages_4'])) { ?>
				<div class="col-lg-5 col-md-12 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_4']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages4_para']; ?>
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php if ($product['page_type'] == 2 && !empty($product['advantages_title'])) { ?>
	<div class="call-do-action-abou style-two" style="padding-top: 30px;">
		<p style="text-align: center;">
		<h2 style="text-align: center;" class="textNavy">
			<?php echo $product['advantages_title']; ?>
		</h2>
		</p>
		<div class="">
			<div class="row justify-content-center gap-5">
				<?php if (!empty($product['advantages_1'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_1']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages1_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['advantages_2'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['advantages_2']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['advantages2_para']; ?>
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php if (($product['page_type'] == 3 || $product['page_type'] == 4) && !empty($product['key_features'])) { ?>
	<div class="call-do-action-abou style-two" style="padding-top: 30px;">
		<p style="text-align: center;">
		<h2 style="text-align: center;" class="textNavy">
			<?php echo $product['key_features']; ?>
		</h2>
		</p>
		<div class="">
			<div class="row justify-content-center gap-3">
				<?php if (!empty($product['key_features1'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['key_features1']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['key_features1_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['key_features2'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['key_features2']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['key_features2_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['key_features3'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['key_features3']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['key_features3_para']; ?>
					</p>
				</div>
				<?php } ?>
				<?php if (!empty($product['key_features4'])) { ?>
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">
						<?php echo $product['key_features4']; ?>
					</h2>
					<p class="text-black">
						<?php echo $product['key_features4_para']; ?>
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- Add similar checks for other page types... -->

			<?php if ($product['page_type'] == 5 || !empty($product['technology']) || !empty($product['benefits'])) { ?>
				<div class="call-do-action-abou style-two" style="padding-top: 30px;">
					<div class="">
						<div class="row justify-content-center gap-5 align-items-stretch">
							<?php if (!empty($product['technology'])) { ?>
								<div class="col-lg-5 col-md-5 col-sm-12 d-flex ">
									<div class="card card1 shadow p-3 rounded flex-fill">
										<h2 class="fw-bold about-title fs-1 py-2">Applications</h2>
										<p class="text-black overflow-auto" style="max-height: 300px;">
											<?php echo $product['technology']; ?>
										</p>
									</div>
								</div>
							<?php } ?>
							<?php if (!empty($product['benefits'])) { ?>
								<div class="col-lg-5 col-md-5 col-sm-12 d-flex">
									<div class="card shadow p-3 rounded flex-fill">
										<h2 class="fw-bold about-title fs-1 py-2">Benefits Of System</h2>
										<p class="text-black overflow-auto" style="max-height: 300px;">
											<?php echo $product['benefits']; ?>
										</p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($product['page_type'] == 6 && !empty($product['need_title']) && !empty($product['key_features_title'])) { ?>
				<div class="call-do-action-abou style-two" style="padding-top: 30px;">
					<div class="">
						<div class="row justify-content-center gap-5">
							<?php if (!empty($product['need_title'])) { ?>
								<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
									<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['need_title']; ?></h2>
									<p class="text-black"><?php echo $product['need_para']; ?></p>
								</div>
							<?php } ?>
							<?php if (!empty($product['key_features_title'])) { ?>
								<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
									<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features_title']; ?></h2>
									<p class="text-black"><?php echo $product['key_features_para']; ?></p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>

			<!-- Continue adding checks for other page types similarly... -->

			<!------------------------>

			<div class="tab-container mt-5">
				<div class="tabs">
					<?php if (!empty($sub_category)) { ?>
						<?php foreach ($sub_category as $index => $item) { ?>
							<div class="tab <?php echo $index === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $index; ?>">
								<?php echo $item['name']; ?> <!-- Display product name in tabs -->
							</div>
						<?php } ?>
					<?php } else { ?>
						<!-- Only show the Product Diversity Matrix tab if there are no sub-category products -->
						<?php if (!empty($product['product_diversity_matrix'])) { ?>
							<div class="tab active" data-tab="additional-info">Product Diversity Matrix</div>
						<?php } ?>
					<?php } ?>
				</div>

				<div class="tab-content">
					<?php if (empty($sub_category)) { ?>
						<!-- Only display the Product Diversity Matrix if there are no sub-category products -->
						<?php if (!empty($product['product_diversity_matrix'])) { ?>
							<div id="additional-info" class="tab-pane active">
								<p><?php echo $product['product_diversity_matrix']; ?></p>
							</div>
						<?php } ?>
					<?php } else { ?>
						<?php foreach ($sub_category as $index => $item) { ?>
							<div id="tab-<?php echo $index; ?>" class="tab-pane <?php echo $index === 0 ? 'active' : ''; ?>">
								<h2 class="my-2"><?php echo $item['name']; ?></h2> <!-- Display product name -->
								<div class="row">
									<div class="col-4">
										<img class=" mx-auto" src="<?php echo base_url('uploads/product/image/' . $item['images']); ?>"
											alt="<?php echo $item['name']; ?>" />
									</div>
									<div class="col-8">
										<p class="bg-white shadow rounded-5"><?php echo $item['product_diversity_matrix']; ?></p>
										<!-- Display product diversity matrix -->
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>

		</div>
	<?php endforeach; ?>
<?php else: ?>
	<div class="col-lg-12">
		<p>No product found.</p>
	</div>
<?php endif; ?>
</div>
<!-- ============================================================== -->
<!-- Videos -->
<!-- ============================================================= -->
<div class="service-section p-0 px-md-5 px-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<!-- <h5>// WHAT WE Do</h5> -->
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
		<div class="call-do-action-abou style-two" style="padding-top: 30px;">
			<div class="">
				<div class="row justify-content-center gap-5">

					<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
						<!--<h2 class="fw-bold about-title fs-1 py-2">A</h2>-->
						<!--<p class="text-black">ASDF</p>-->
						<iframe width="400" height="260" src="https://www.youtube.com/embed/x4SmLxxH5gc" frameborder="0"
							allowfullscreen></iframe>

					</div>
					<!--<div class="row justify-content-center mt-5">-->
					<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
						<!--<h2 class="fw-bold about-title fs-1 py-2">B</h2>-->
						<!--<p class="text-black ">ZXCV</p>-->
						<iframe width="400" height="260" src="https://www.youtube.com/embed/HAIP1RNg4zA" frameborder="0"
							allowfullscreen></iframe>

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
					<div class="service-single-box rounded" style="height:500px">
						<div class="service-thumb">
							<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $images[0]; ?>" alt=""
								style="height:300px">
						</div>
						<!-- <div class="service-icon">
						<i class="flaticon-business-and-finance"></i>
					</div> -->
						<div class="service-content">
							<h2><?php echo $product['name']; ?></h2>
							<!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor.</p>-->
							<!--<p><?php echo $product['conclusion']; ?></p>-->
							<a href="<?php echo base_url() . 'product-detail/' . $product['p_id'] ?>">Learn More</a>
						</div>
					</div>
				<?php } ?>

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

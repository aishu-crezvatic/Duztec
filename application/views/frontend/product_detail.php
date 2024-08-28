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
    <?php 
//    echo "<pre>";
//    print_r($product_detail_data);
//    exit;
    ?>
<?php if (!empty($product_detail_data)) : ?>
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
				<div class=" position-relative">
					<div class="main-carousel owl-carousel">
                                            <?php foreach ($images as $image) { ?>                      
						<div class="item ">
							<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $image; ?>" alt="Image 1">
						</div>
                                            <?php  } ?>
<!--						<div class="item">
							<img src="<?php echo base_url() ?>assets/images/DB Product Image03.png" alt="Image 2">
						</div>-->

						<!-- Add more items as needed -->

					</div>
				</div>

				<div class="thumbnail-carousel owl-carousel p-5 overflow-hidden" style="">
                                    <?php foreach ($images as $image) { ?> 
					<div class="item1 ">
						<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $image; ?>" alt="Thumbnail 1" style="height:25vh">
					</div>
                                    <?php  } ?>
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
						<!--<span class="fs-2 fw-semibold" style="color:black">Buy or rent this machine ? </span>-->
						<h5 class="fw-bold">Request your pricce here</h5>
						<div class="btn px-2 text-white fw-bold priceReqBtn">PRICE REQUEST</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!----------------------------->
<?php if($product['page_type'] == 1){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['advantages_title']; ?></h2></p>
	<div class="">
		<div class="row justify-content-center gap-5">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-12 col-sm-12  card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_1']; ?></h2>
				<p class="text-black"><?php echo $product['advantages1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-12 col-sm-12  card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_2']; ?></h2>
					<p class="text-black "><?php echo $product['advantages2_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

                        <!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-12 col-sm-12  card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_3']; ?></h2>
				<p class="text-black"><?php echo $product['advantages3_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-12 col-sm-12  card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_4']; ?></h2>
					<p class="text-black "><?php echo $product['advantages4_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<?php } ?>
<!------------------------>
<!----------------------------->
<?php if($product['page_type'] == 2){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['advantages_title']; ?></h2></p>
	<div class="">
		<div class="row justify-content-center gap-5">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_1']; ?></h2>
				<p class="text-black"><?php echo $product['advantages1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_2']; ?></h2>
					<p class="text-black "><?php echo $product['advantages2_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

                        <!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
<!--			<div class="col-lg-6 col-md-12 col-sm-12">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_3']; ?></h2>
				<p class="text-white"><?php echo $product['advantages3_para']; ?></p>

			</div>-->
			<!--<div class="row justify-content-center mt-5">-->
<!--				<div class="col-lg-6 col-md-12 col-sm-12">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_4']; ?></h2>
					<p class="text-white "><?php echo $product['advantages4_para']; ?></p>

				</div>-->
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<?php } ?>
<!------------------------>
<!----------------------------->
<?php if($product['page_type'] == 3 || $product['page_type'] == 4){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['key_features']; ?></h2></p>
	<div class="">
		<div class="row justify-content-center gap-3">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features1']; ?></h2>
				<p class="text-black"><?php echo $product['key_features1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features2']; ?></h2>
					<p class="text-black "><?php echo $product['key_features2_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

<!--                        			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features3']; ?></h2>
				<p class="text-black"><?php echo $product['key_features3_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features4']; ?></h2>
					<p class="text-black "><?php echo $product['key_features4_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			</div>
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>

<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['why_choose']; ?></h2></p>
	<div class="">
		<div class="row justify-content-center gap-3">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['why_choose1']; ?></h2>
				<p class="text-black"><?php echo $product['why_choose1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['why_choose2']; ?></h2>
					<p class="text-black "><?php echo $product['why_choose2_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

<!--                        			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['why_choose3']; ?></h2>
				<p class="text-black"><?php echo $product['why_choose3_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded" style="display:none;">
					<h2 class="fw-bold about-title fs-1 py-2"><?php //echo $product['why_choose4']; ?></h2>
					<p class="text-black "><?php //echo $product['why_choose4_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			</div>
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<?php } ?>
<!------------------------>
<!----------------------------->
<?php if($product['page_type'] == 5){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <!--<p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['advantages_title']; ?></h2></p>-->
	<div class="">
		<div class="row justify-content-center gap-5">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2">Technology</h2>
				<p class="text-black"><?php echo $product['technology']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2">Benefits Of System</h2>
					<p class="text-black "><?php echo $product['benefits']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

                        <!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
<!--			<div class="col-lg-6 col-md-12 col-sm-12">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_3']; ?></h2>
				<p class="text-white"><?php echo $product['advantages3_para']; ?></p>

			</div>-->
			<!--<div class="row justify-content-center mt-5">-->
<!--				<div class="col-lg-6 col-md-12 col-sm-12">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_4']; ?></h2>
					<p class="text-white "><?php echo $product['advantages4_para']; ?></p>

				</div>-->
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<?php } ?>
<!------------------------>
<!----------------------------->
<?php if($product['page_type'] == 6){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <!--<p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['advantages_title']; ?></h2></p>-->
	<div class="">
		<div class="row justify-content-center gap-5">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['need_title']; ?></h2>
				<p class="text-black"><?php echo $product['need_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features_title']; ?></h2>
					<p class="text-black "><?php echo $product['key_features_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

                        <!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
<!--			<div class="col-lg-6 col-md-12 col-sm-12">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_3']; ?></h2>
				<p class="text-white"><?php echo $product['advantages3_para']; ?></p>

			</div>-->
			<!--<div class="row justify-content-center mt-5">-->
<!--				<div class="col-lg-6 col-md-12 col-sm-12">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_4']; ?></h2>
					<p class="text-white "><?php echo $product['advantages4_para']; ?></p>

				</div>-->
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
    
    <div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['key_features']; ?></h2></p>
	<div class="">
		<div class="row justify-content-center gap-3">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features1']; ?></h2>
				<p class="text-black"><?php echo $product['key_features1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features2']; ?></h2>
					<p class="text-black "><?php echo $product['key_features2_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

<!--                        			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features3']; ?></h2>
				<p class="text-black"><?php echo $product['key_features3_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features4']; ?></h2>
					<p class="text-black "><?php echo $product['key_features4_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
                                <div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features5']; ?></h2>
				<p class="text-black"><?php echo $product['key_features5_para']; ?></p>

			</div>
                          <div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['choose_title']; ?></h2>
				<p class="text-black"><?php echo $product['choose_para']; ?></p>

			</div>
			</div>
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
</div>
<?php } ?>
<!------------------------>
<!----------------------------->
<?php if($product['page_type'] == 7){ ?>
<div class="call-do-action-abou style-two" style="padding-top: 30px;"> 
    <!--<p style="text-align: center;"><h2 style="text-align: center;" class="textNavy"><?php echo $product['key_features']; ?></h2></p>-->
	<div class="">
		<div class="row justify-content-center gap-5">
<!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
			<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features1']; ?></h2>
				<p class="text-black"><?php echo $product['key_features1_para']; ?></p>

			</div>
			<!--<div class="row justify-content-center mt-5">-->
				<div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features2']; ?></h2>
					<p class="text-black "><?php echo $product['key_features2_para']; ?></p>

				</div>
                        
                        <div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features3']; ?></h2>
					<p class="text-black "><?php echo $product['key_features3_para']; ?></p>

				</div>
                        <div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features4']; ?></h2>
					<p class="text-black "><?php echo $product['key_features4_para']; ?></p>

				</div>
                        <div class="col-lg-5 col-md-5 col-sm-12 card shadow p-3 rounded">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['key_features5']; ?></h2>
					<p class="text-black "><?php echo $product['key_features5_para']; ?></p>

				</div>
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->

                        <!--			<div class="col-lg-2 col-md-6">
				<img src="assets/images/About Us Icon/About Us Icon/Vision.gif" alt="" class="w-100">
			</div>-->
<!--			<div class="col-lg-6 col-md-12 col-sm-12">
				<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_3']; ?></h2>
				<p class="text-white"><?php echo $product['advantages3_para']; ?></p>

			</div>-->
			<!--<div class="row justify-content-center mt-5">-->
<!--				<div class="col-lg-6 col-md-12 col-sm-12">
					<h2 class="fw-bold about-title fs-1 py-2"><?php echo $product['advantages_4']; ?></h2>
					<p class="text-white "><?php echo $product['advantages4_para']; ?></p>

				</div>-->
<!--				<div class="col-lg-2 col-md-6">
					 <div class="w-50"> 
					<img src="assets/images/MIssion.gif" alt="" class="w-100">
					 </div> 
				</div>-->
			<!--</div>-->
		</div>
	</div>
	<div class="call-shape">
		<img src="assets/images/call-shape.png" alt="thumb">
	</div>
    
</div>
<?php } ?>
<!------------------------>

<div class="tab-container">
	<div class="tabs">
		<!--<div class="tab active" data-tab="description">Description</div>-->
		<div class="tab active" data-tab="description">Conclusion</div>
                <?php if(!empty($product['product_diversity_matrix'])){ ?>
		<div class="tab" data-tab="additional-info">Product Diversity Matrix</div>
                <?php } ?>
		<div class="tab" data-tab="videos">Videos</div>
                
	</div>
	<div class="tab-content">
		<div id="description" class="tab-pane active">
<!--			<p class="fw-bold">The Duztec Double Barrel-DB boasts dual functionality, deploying Mist cannons or fog
				cannons at identical
				angles to simultaneously address two crucial aspects of slag management. One barrel efficiently cools
				the heated slag, promoting effective quenching, while the other focuses on suppressing the dust
				generated during the process. This dual-action approach not only enhances the overall efficiency of slag
				management but also contributes to a cleaner and safer working environment.</p>-->
                    	<p class="fw-bold"><?php echo $product['conclusion']; ?></p>
		</div>
            <?php if(!empty($product['product_diversity_matrix'])){ ?>
		<div id="additional-info" class="tab-pane">
			<!--<p>Here is some additional information.</p>-->
			<p><?php echo $product['product_diversity_matrix']; ?></p>
		</div>
            <?php } ?>
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
						<img src="<?php echo base_url() ?>uploads/product/image/<?php echo $images[0]; ?>" alt="" style="height:300px">
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
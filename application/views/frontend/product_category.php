<!-- header start  -->
<?php $this->load->view('layout/header');


// echo '<pre>';
//          print_r($category_data);
//         exit;

// 		 
?>
<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s"
					data-wow-delay=".5s">
					<h2>Category</h2>
					<ul>
						<li><a href="index.html"> <i class="fas fa-home"></i> </a></li>
						<li class="style2">Page</li>
						<li><i class="fas fa-chevron-right"></i></li>
						<li class="style2">Category Page</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<div class="service-section style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="section-title text-center">
					<h1>Product Category</h1>
				</div>
			</div>
		</div>
		<div class="row">

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

				//                                                echo "Value exists in c_id_exists key.".$c_id_exists.' product name '.$product['name'].'</br>';
//                                                exit;
				if ($c_id_exists) {
					//                                            echo "Value exists in c_id key.";
					?>
					<!--<li class="position-relative">-->
					<?php if ($sub_cat_count == 1) { ?>
						<div class="col-lg-4 col-md-6">
							<div class="service-single-box" style="height:590px">
								<div class="service-icon">
									<!-- <img src="assets/images/. $category['category_image']);" alt="Icon"> -->
									<img src="<?php echo base_url('uploads/product/image/' . $product['cat_image']); ?>" alt="Icon"
										style="height:300px">
								</div>
								<div class="service-content">
									<h2><?php echo $product['cat_name']; ?></h2>
									<p><?php echo $product['cat_description']; ?></p>
									<a href="<?php echo base_url() . 'product-sub-category/' . $product['c_id']; ?>">Read More <i
											class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</div>

						<!--                                                        <div class="drop-cat">
															<a href="<?php echo base_url() . 'product-sub-category/' . $product['p_id']; ?>"><?php echo $product['cat_name'] . ' '; ?><i class="fa fa-angle-down"></i></a>
														</div>-->
					<?php }
					//                                                    else{ ?>

					<?php // } ?>
					<!--</li>-->
				<?php } else { ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-single-box" style="height:590px">
							<div class="service-icon">
								<!-- <img src="assets/images/. $category['category_image']);" alt="Icon"> -->
								<img src="<?php echo base_url('uploads/product/image/' . $product['cat_image']); ?>" alt="Icon"
									style="height:300px">
							</div>
							<div class="service-content">
								<h2><?php echo $product['cat_name']; ?></h2>
								<p><?php echo $product['cat_description']; ?></p>
								<a href="<?php echo base_url() . 'product-detail/' . $product['p_id']; ?>">Read More <i
										class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>

					<!--<li><a href="<?php echo base_url() . 'product-detail/' . $product['p_id']; ?>"><?php echo $product['cat_name']; ?></a></li>-->
				<?php } ?>
			<?php } ?>


		</div>
	</div>
</div>


<!-- ============================================================== -->
<!-- Start - Footer- Section -->
<!-- ============================================================= -->


<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->




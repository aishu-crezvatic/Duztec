<!-- header start  -->
<?php $this->load->view('layout/header'); 
// echo "<pre>";
//    print_r($data);
//    exit;
?>
<!-- header end  -->

<!-- ============================================================== -->
	<!-- Start - Slider- Section -->
	<!-- ============================================================= -->
	<div class="breadcumn-section d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
						<h2>All Product</h2>
						<ul>
							<li><a href="index.html"> <i class="fas fa-home"></i> </a></li>
							<li class="style2">Page</li>
							<li><i class="fas fa-chevron-right"></i></li>
							<li class="style2">All Product Page</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Service- Section -->
	<!-- ============================================================= -->
	<div class="portfolio-section single-style">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 xol-md-12">
					<div class="section-title text-center"> 
						<h1>Category Name</h1>
					</div>
				</div>
			</div>
			<div class="row">
                            <?php foreach ($blogs as $blog) { 
                                // $images = explode(',', $product['images'])
                                ?>
                                
                            
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-items">
						<div class="portfolio-thumb">
                                                    <!-- <img src="<?php echo base_url().'uploads/product/image/'.$blog['b_image']; ?>" alt=""> -->
							<div class="thumb-content">
								<span>Category: <?php echo $blog['title']; ?></span>
								<!-- <h2>Product Name: <?php echo $blog['name']; ?></h2> -->
                                                                <a href="<?php echo base_url(); ?>blog_details/<?php echo $blog['b_id']; ?>">View Product <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
                     
<!-- Footer start  -->
 <?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
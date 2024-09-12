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
<div class="breadcumn-section-blog d-flex align-items-center">
<!--<<<<<<< HEAD-->
 
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<div class="portfolio-section single-style">
<!--<<<<<<< HEAD--> 
<!--=======-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 xol-md-12"> 
				<div class="section-title text-center"> 
					<h1>Blog Category Name</h1>
				</div> 
			</div>
		</div>
		<div class="row">
			<?php foreach ($blogs as $blog) {
				?> 
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-items">
						<div class="portfolio-thumb">
							<!-- <img src="<?php echo base_url() . 'uploads/blog/' . $blog['b_image']; ?>" alt="not found"> -->
							<div class="thumb-content">
								<h3><?php echo $blog['title']; ?></h3>
								<!-- <h2>Product Name: <?php echo $blog['name']; ?></h2> -->
								<a href="<?php echo base_url(); ?>blog_details/<?php echo $blog['b_id']; ?>">View Product <i
										class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
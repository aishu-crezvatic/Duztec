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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<!-- <div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
						<h2>All Blogs</h2>
						<ul>
							<li><a href="index.html"> <i class="fas fa-home"></i> </a></li>
							<li class="style2">Page</li>
							<li><i class="fas fa-chevron-right"></i></li>
							<li class="style2">All Blogs</li>
						</ul>
					</div> -->
			</div>
		</div>
	</div>
<<<<<<< HEAD
	<!-- ============================================================== -->
	<!-- Start - Service- Section -->
	<!-- ============================================================= -->
	<div class="portfolio-section single-style">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 xol-md-12">
					<div class="section-title text-center"> 
						
                                        <h1>
        <?php 
        foreach ($blog_categories as $category) { 
            if ($category['bc_id'] == $this->uri->segment(2)) { 
                // Assuming the ID from the URL is in the third segment
                echo $category['name']; 
                break; // Stop the loop once the matching category is found
            }
        } 
        ?>
    </h1>
                                        
					</div>
=======
</div>
<!-- ============================================================== -->
<!-- Start - Service- Section -->
<!-- ============================================================= -->
<div class="portfolio-section single-style">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 xol-md-12">
				<div class="section-title text-center">
					<h1>Blog Category Name</h1>
>>>>>>> 1a2b803147bff879ef3e4101cdc54345312222ad
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
<<<<<<< HEAD
                                                    <img src="<?php echo base_url().'uploads/product/image/'.$blog['b_image']; ?>" alt="No image">
=======
							<!-- <img src="<?php echo base_url() . 'uploads/product/image/' . $blog['b_image']; ?>" alt="error"> -->
>>>>>>> 1a2b803147bff879ef3e4101cdc54345312222ad
							<div class="thumb-content">
								<h3>Category: <?php echo $blog['title']; ?></h3>
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
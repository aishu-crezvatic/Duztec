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
				<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
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
			<?php if (!empty($category_data)) : ?>
				<?php foreach ($category_data as $category) : ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-single-box">
							<div class="service-icon">
								<!-- <img src="assets/images/. $category['category_image']);" alt="Icon"> -->
								<img src="<?php echo base_url('assets/images/' . $category['category_image']); ?>" alt="Icon">
							</div>
							<div class="service-content">
								<h2><?php echo $category['name']; ?></h2>
								<p><?php echo $category['description']; ?></p>
								<a href="product_detail/<?php echo $category['c_id']; ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="col-lg-12">
					<p>No categories found.</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>


<!-- ============================================================== -->
<!-- Start - Footer- Section -->
<!-- ============================================================= -->


<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
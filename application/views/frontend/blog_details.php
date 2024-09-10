<!-- header start  -->
<?php $this->load->view('layout/header');
//  echo '<pre>';
//           print_r($blog_categories);
//         exit;
?>
<!-- header end  -->
<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section-blog d-flex align-items-center">
	<div class="container">
		<div class="row">

		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- Start - Blog- Section -->
<!-- ============================================================= -->
<div class="blogs-section p-0 p-md-5 p-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="single-blog-items style-2">
					<div class="blog-thumb">
						<img src="../assets/images/Blog_Image_02.webp" alt="No Image">
					</div>
					<div class="single-blog-content">
						<div class="blog-meta-top2">
							<span class="color"><i class="fas fa-calendar-alt"></i></span>
							<span>July 27, 2022</span>
							<span><?php echo htmlspecialchars($blog_detail[0]['created_date']) ?></span>
						</div>
						<div class="blog-title">

							<h2><?php echo htmlspecialchars($blog_detail[0]['title']); ?></h2>
						</div>
						<div class="blog-text2">
							<p><?php echo ($blog_detail[0]['description']) ?></p>
						</div>
						<div class="blog-single-thumb">
							<img src="../assets/images/Blog_Image_02.webp" alt="blog-thumb">
							<img src="../assets/images/Blog_Image_01.webp" alt="blog-thumb">
						</div>
						<div class="blog-social-icon text-center">
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100063857210642" target="blank"><i
											class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.youtube.com/@DuztecEngineeringPvt.Ltd." target="blank"><i
											class="fab fa-youtube"></i></a></li>
								<li><a href="https://in.linkedin.com/company/duztec-engineering" target="blank"><i
											class="fab fa-linkedin-in"></i></a></li>
								<li><a href="https://www.instagram.com/duztec_engineering/" target="blank"><i
											class="fab fa-instagram  "></i></a></li>
							</ul>
						</div>


						<div class="row">
							<div class="col-lg-12 col-md-12">
								<form id="contact_form3" action="mail.php" method="POST">
									<div class="row">
										<div class="blog-drop-form style3">
											<h2>Get in Touch</h2>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="contact-form_2">
												<form action="post">
													<input class="contact-style_2" type="text" name="name"
														placeholder="Frist Name*" required>
													<i class="fas fa-user"></i>
												</form>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="contact-form_2">
												<form action="post">
													<input class="contact-style_2" type="text" name="name"
														placeholder="Enter Email*" required>
													<i class="fas fa-envelope"></i>
												</form>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="contact-form-msg-2 style3">
												<form action="post">
													<textarea name="text" class="contact-style-msg2" name="message"
														id="text" placeholder="Enter Message" cols="30"
														rows="10"></textarea>
													<i class="fas fa-comment"></i>
												</form>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">

										</div>
										<div class="col-lg-12">
											<div class="contact-button style3 text-right">
												<input class="blog-button" type="submit" value="Send message"></i>
											</div>
										</div>
									</div>
								</form>
								<p class="form-message"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<form id="contact_form3" action="mail.php" method="POST">
							<div class="row">
								<div class="blog-drop-form">
									<h2>Drop Messege For Book</h2>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="contact-form_2">
										<form action="post">
											<input class="contact-style_2" type="text" name="name"
												placeholder="Frist Name*" required>
											<i class="fas fa-user"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="contact-form_2">
										<form action="post">
											<input class="contact-style_2" type="text" name="name"
												placeholder="Enter Email*" required>
											<i class="fas fa-envelope"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="contact-form-msg-2">
										<form action="post">
											<textarea name="text" class="contact-style-msg2" name="message" id="text"
												placeholder="Enter Message" cols="30" rows="10"></textarea>
											<i class="fas fa-comment"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="contact-button text-right">
										<input class="blog-button" type="submit" value="Send Message"></i>
									</div>
								</div>
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
				<div class="blog-latest">
					<h2>Leatest Blogs</h2>
					<!-- <div class="blog-latest-items d-flex"> -->
					<ul class="">
						<?php foreach ($blog_categories as $category) { ?>
							<li><a
									href="<?php echo base_url() ?>blog/<?php echo $category['bc_id']; ?>"><?php echo $category['name']; ?></a>
							</li>
						<?php } ?>
					</ul>
					<!-- </div> -->
					<!-- <div class="top-catagories">
						<h2>Top Catgories</h2>
						<span>Apartment (14)</span>
						<span>Picture Stodio (14)</span>
						<span>Office (14)</span>
						<span>Luxary Vilas (14)</span>
						<span>Duplex House (14)</span>
					</div> -->
					<div class="follow-us">
						<h2>Follow us</h2>
						<div class="about-me-soical">
						<a href="https://www.facebook.com/profile.php?id=100063857210642" target="blank"><i
											class="fab fa-facebook-f"></i></a>
								<a href="https://www.youtube.com/@DuztecEngineeringPvt.Ltd." target="blank"><i
											class="fab fa-youtube"></i></a>
								<a href="https://in.linkedin.com/company/duztec-engineering" target="blank"><i
											class="fab fa-linkedin-in"></i></a>
							<a href="https://www.instagram.com/duztec_engineering/" target="blank"><i
											class="fab fa-instagram  "></i></a>
						</div>
					</div>
					<div class="tags">
						<h2>Tags</h2>
						<span>Business</span>
						<span>Offices</span>
						<span>Organic</span>
						<br>
						<span>pastas</span>
						<span>Business</span>
						<span>Topics</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Brand- Section -->
	<!-- ============================================================= -->
	<div class="brand-section">
		<div class="container">
			<div class="row brand-bg">
				<div class="brand_list owl-carousel">
					<div class="brand-thumb">
						<img src="assets/images/item_01.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_02.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_03.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_04.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_01.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_02.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_03.png" alt="">
					</div>
					<div class="brand-thumb">
						<img src="assets/images/item_04.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer start  -->
	<?php $this->load->view('layout/footer'); ?>
	<!-- Footer end  -->
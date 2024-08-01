<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->
<!-- ============================================================== -->
	<!-- Start - Slider- Section -->
	<!-- ============================================================= -->
	<div class="breadcumn-section d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">
						<h2>Contact Page</h2>
						<ul>
							<li><a href="index.html"> <i class="fas fa-home"></i> </a></li>
							<li class="style2">Page</li>
							<li><i class="fas fa-chevron-right"></i></li>
							<li class="style2">Service Page</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Contact-Us- Section -->
	<!-- ============================================================= -->
	<div class="contact-us single-style">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="section-title text-left">
						<h1>Feel free to contact
							<br> us for any query.</h1>
					</div>
					<div class="contact-box d-flex">
						<div class="contact-icon">
							<i class="flaticon-address"></i>
						</div>
						<div class="contact-content">
							<h2>Office Address:</h2>
							<p>254 Lillian Blvd, Holbrook,Tower,NYC,US</p>
						</div>
					</div>
					<div class="contact-box d-flex">
						<div class="contact-icon">
							<i class="flaticon-phone-call-1"></i>
						</div>
						<div class="contact-content">
							<h2>Phone Number:</h2>
							<p>Head Office:(210) 123 123 123</p>
						</div>
					</div>					
					<div class="contact-box d-flex">
						<div class="contact-icon">
							<i class="flaticon-phone-call"></i>
						</div>
						<div class="contact-content">
							<h2>Mail Address:</h2>
							<p>Example@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="contact-form">
											<form action="post">
												<input class="contact-style" type="text" name="name" placeholder="Frist Name*" required>
												<i class="fas fa-user"></i>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="contact-form">
											<form action="post">
												<input class="contact-style" type="text" name="name" placeholder="Last Name*" required>
												<i class="fas fa-user"></i>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="contact-form">
											<form action="post">
												<input class="contact-style" type="text" name="mail" placeholder="Mail Address*" required>
												<i class="fas fa-comment-alt"></i>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="contact-form">
											<form action="post">
												<input class="contact-style" type="text" name="phone" placeholder="Phone Number*" required>
												<i class="fas fa-phone-volume"></i>
											</form>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<select class="select-option">
											<option class="form-option-contact" value="shab">Select Subject</option>
											<option class="form-option-contact" value="English">English</option>
											<option class="form-option-contact" value="Arabic">Arabic</option>
										</select>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="contact-form-msg">
											<form action="post">
												<textarea name="text" class="contact-style-msg" name="message" id="text" placeholder=" Enter Message" cols="30" rows="10"></textarea>
												<i class="fas fa-comment"></i>
											</form>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="contact-button text-right">
											<input class="button" type="submit" value="Submit request"><i class="fas fa-arrow-right"></i>
										</div>
									</div>
								</div>
							</form>
							<div id="status"></div>
						</div>
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
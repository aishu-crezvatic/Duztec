<!-- header start  -->
<?php $this->load->view('layout/header'); ?>

<!-- header end  -->
<?php $heroBanner_img = !empty($contact) ? $contact[0]['heroBanner_img'] : 'default-image.png'; ?>

<style>
	.breadcumn-section-contac {
		position: relative;
		/* background: url(assets/images/contact-us-banner.png); */
		padding-top: 400px;
		padding-bottom: 300px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
</style>


<!-- ============================================================== -->
<!-- Start - Slider- Section -->
<!-- ============================================================= -->
<div class="breadcumn-section-contac d-flex align-items-center"
	style="background: url('<?php echo htmlspecialchars('assets/images/' . $heroBanner_img); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcumn-content text-left" class="wow slideInLeft" data-wow-duration="2s"
					data-wow-delay=".5s">
					<?php if (!empty($contact)): ?>
						<?php foreach ($contact as $item): ?>
							<h2 class="about-title"><?php echo htmlspecialchars($item['content']); ?></h2>
						<?php endforeach; ?>
					<?php else: ?>
						<h2 class="about-title">No content available</h2>
					<?php endif; ?>
					<ul>
						<li><a href="index.html"> <i class="fas fa-home fs-4"></i> </a></li>
						<li class="style2 fs-4 fw-semibold text-white">Home |</li>
						<li class="style2 fs-4 fw-semibold greenText">Product</li>
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
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="section-title text-left">
					<h1 class="greenText m-0">Get in touch</h1>
					<h1>Feel free to contact
						<br> us for any query.
					</h1>
				</div>
				<div class="contact-box d-flex">
					<div class="contact-icon">
						<i class="flaticon-address"></i>
					</div>
					<div class="contact-content">
						<h2>Office Address:</h2>
						<?php if (!empty($contact)): ?>
							<?php foreach ($contact as $item): ?>
								<p><?php echo htmlspecialchars($item['office_address']); ?></p>
								<!-- <p>Plot No A 109, Wagle Industrial Estate, Road no 18, Thane (W) - 400 604, India</p> -->
							<?php endforeach; ?>
						<?php else: ?>
							<h2 class="about-title">No address available</h2>
						<?php endif; ?>
					</div>
				</div>
				<div class="contact-box d-flex">
					<div class="contact-icon">
						<i class="flaticon-phone-call-1"></i>
					</div>
					<div class="contact-content">
						<h2>Phone Number:</h2>
						<?php if (!empty($contact)): ?>
							<?php foreach ($contact as $item): ?>
								<!-- <p>+91 9137657039</p> -->
								<p><?php echo htmlspecialchars($item['phone_no']) ?></p>
							<?php endforeach; ?>
						<?php else: ?>
							<p>no number available</p>
						<?php endif; ?>
					</div>
				</div>
				<div class="contact-box d-flex">
					<div class="contact-icon">
						<i class="flaticon-phone-call"></i>
					</div>
					<div class="contact-content">
						<h2>Mail Address:</h2>
						<?php if (!empty($contact)): ?>
							<?php foreach ($contact as $item): ?>
								<!-- <p>sales@duztec.in</p> -->
								<p><?php echo htmlspecialchars($item['email_id']) ?></p>
							<?php endforeach; ?>
						<?php else: ?>
							<p>no mail available</p>
						<?php endif; ?>
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
											<input class="contact-style" type="text" name="name"
												placeholder="Frist Name*" required>
											<i class="fas fa-user"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="contact-form">
										<form action="post">
											<input class="contact-style" type="text" name="name"
												placeholder="Last Name*" required>
											<i class="fas fa-user"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="contact-form">
										<form action="post">
											<input class="contact-style" type="text" name="mail"
												placeholder="Mail Address*" required>
											<i class="fas fa-comment-alt"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="contact-form">
										<form action="post">
											<input class="contact-style" type="text" name="phone"
												placeholder="Phone Number*" required>
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
											<textarea name="text" class="contact-style-msg" name="message" id="text"
												placeholder=" Enter Message" cols="30" rows="10"></textarea>
											<i class="fas fa-comment"></i>
										</form>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="contact-button text-right ">
										<input class="button py-2 priceReqBtn px-4" type="submit" value="Submit"><i
											class="fas fa-arrow-right"></i>
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
<!-- Start - Map- Section -->
<!-- ============================================================= -->

<div class="row position-relative">
	<?php if (!empty($contact) && isset($contact[0]['map_url'])): ?>
		<iframe src="<?php echo htmlspecialchars($contact[0]['map_url']); ?>" width="100%" height="600" style="border:0;"
			allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
		</iframe>
	<?php else: ?>
		<p>No map available</p>
	<?php endif; ?>
	<div class="addressBg col-lg-4 col-md-6 col-12">
		<div class="position-relative">
			<img src="assets/images/Path 2525.svg" alt=""> <!-- bg  image -->
			<div class="content-om-map d-flex align-items-center flex-column">
				<img src="assets/images/data_tech_logo.png" alt="" class="w-50">
				<!-- <p class="navyText px-5 fw-bold pt-lg-4 pt-md-4 pt-0 lh-5">Plot No A 109, Wagle Industrial Estate, Road
					no 18, Thane (W) - 400 604, India</p> -->
				<?php if (!empty($contact)): ?>
					<?php foreach ($contact as $item): ?>
						<p class="navyText px-5 fw-bold pt-lg-4 pt-md-4 pt-0 lh-5">
							<?php echo htmlspecialchars($item['office_address']); ?>
						</p>
						<!-- <p>Plot No A 109, Wagle Industrial Estate, Road no 18, Thane (W) - 400 604, India</p> -->
					<?php endforeach; ?>
				<?php else: ?>
					<h2 class="about-title">No address available</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>





<!-- Footer start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- Footer end  -->
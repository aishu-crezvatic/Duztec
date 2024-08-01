
	<!-- ============================================================== -->
	<!-- Start - Footer- Section -->
	<!-- ============================================================= -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-title">
						<h2>About Us.</h2>
					</div>
					<div class="footer-text">
						<p>We are experienced professionals who understand that It services is changing, and are true partners who care about your future business success.We are experienced professionals who understand that It services is changing,</p>
					</div>
					<div class="footer-address">
						<div class="footer-social-icon">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-title">
						<h2>Useful Links</h2>
					</div>
					<div class="footer-menu">
						<ul>
							<li><a href="">About</a></li>
							<li><a href="">News</a></li>
							<li><a href="">Partners</a></li>
							<li><a href="">Room Details</a></li>
							<li><a href="">Gallery</a></li>
							<li><a href="">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-title">
						<h2>Help?</h2>
					</div>
					<div class="footer-menu">
						<ul>
							<li><a href="">FAQ</a></li>
							<li><a href="">Term & conditions</a></li>
							<li><a href="">Reporting</a></li>
							<li><a href="">Documentation</a></li>
							<li><a href="">Suport Policy</a></li>
							<li><a href="">Privacy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-logo">
						<img src="assets/images/fav-icon/transparent-logo.png" alt="">
					</div>
					<div class="footer-right-text">
						<p>We are experienced professionals who understand that It services is</p>
					</div>
					<div class="footer-right-side">
						<span><i class="fas fa-map-marker-alt"></i> 254 Lillian Blvd,Holbrook</span>
					</div>
					<div class="footer-btn">
						<form id="contact_form2" action="mail2.php" method="POST">
							<input type="email" placeholder="Enter email address" class="footer-email" required>
							<button type="submit" class="btn-control">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-copyright-section -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="copy-right-text">
						<p>© Dream-It 2022 All rights reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer-menu-right">
					<ul>
						<li><a href="#">Terms of Use</a></li>
						<li><a class="br-none" href="#">Privacy Policy</a></li>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start Search Popup Area -->
	<!--==================================================-->
	<div class="search-popup">
		<button class="close-search style-two"><i class="fas fa-times"></i></button>
		<button class="close-search"><i class="fas fa-arrow-up"></i></button>
		<form method="post" action="#">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</form>
	</div>
	<!--==================================================-->
	<!-- End Search Popup Area -->
	<!--==================================================-->

	<!-- jquery js -->	
	<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->	
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- particles Js -->
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/stats.js"></script>
		<script src="assets/js/jquery.appear.js"></script>
	<!-- Ajax Mail -->
	<script src="assets/js/ajax-mail.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Swiper JS -->
	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Testimonial js -->
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- animated js -->
	<script src="assets/js/animated-text.js"></script>
	<!-- Wow Js -->
	<script src="assets/js/wow.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- jquery js -->
	<script src="assets/js/jquery.meanmenu.js"></script>
	<script src="assets/js/jquery.nav.js"></script>
	<script src="assets/js/jquery.scrollUp.js"></script>
	<!-- sectors js -->
	<script src="assets/js/sectors.js"></script>
	<!-- theme js -->	
	<script src="assets/js/theme.js"></script>
    <script>
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const slider = document.querySelector('.slider');

        document.querySelector('.prev').addEventListener('click', () => {
            index = (index > 0) ? index - 1 : slides.length - 1;
            updateSlider();
        });

        document.querySelector('.next').addEventListener('click', () => {
            index = (index < slides.length - 1) ? index + 1 : 0;
            updateSlider();
        });

        function updateSlider() {
            slider.style.transform = `translateX(${-index * 100}%)`;
        }
    </script>



</body>
</html>
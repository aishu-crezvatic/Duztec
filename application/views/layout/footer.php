<!-- ============================================================== -->
<!-- Floating icons of social media  Section -->
<!-- ============================================================= -->

<div
	class="floating-social-icons d-flex flex-column gap-1 align-items-center bg-white p-2 justify-content-center mx-auto">
	<a href="#"><i class="fab fa-facebook-f fs-3 navyText "></i></a>
	<!-- <a href="#"><i class="fab fa-behance-square fs-3"></i></a> -->
	<a href="#"><i class="fab fa-youtube fs-3 navyText "></i></a>
	<a href="#"><i class="fab fa-linkedin-in fs-3 navyText "></i></a>
	<a href="#"><i class="fab fa-instagram fs-3 navyText "></i></a>

	<!-- <a href="#"><i class="fab fa-pinterest fs-3"></i></a> -->
	<span></span>
</div>


<!-- ============================================================== -->
<!-- Start - Brand- Section -->
<!-- ============================================================= -->
<div class="brand-section">
	<div class="container">
		<div class="row brand-bg">
			<div class="brand_list owl-carousel">
                            <?php foreach ($clientele as $client) { ?>
                            <?php //echo "shankar ".$client['image']; ?>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>uploads/clientele/<?php echo $client['image']; ?>" alt="">
				</div>
                            <?php } ?>
<!--				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/Jindal_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/JSWSteel_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/Lechler_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/Dalmia_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/Jindal_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/JSWSteel_Logo.png" alt="">
				</div>
				<div class="brand-thumb">
					<img src="<?php echo base_url(); ?>assets/images/footer-client-logo/Lechler_Logo.png" alt="">
				</div>-->
			</div>
		</div>
	</div>
</div>

<!-- ============================================================== -->
<!-- Start - Footer- Section -->
<!-- ============================================================= -->
<div class="footer-section pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-title">
					<h2>About Us.</h2>
				</div>
				<div class="footer-text">
					<p>We are experienced professionals who understand that It services is changing, and are true
						partners who care about your future business success.We are experienced professionals who
						understand that It services is changing,</p>
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
					<img style="width: 100%;" src="<?php echo base_url(); ?>assets/images/duztecLogo.png" alt="">
					<!-- <img src="assets/images/fav-icon/transparent-logo.png" alt=""> -->
				</div>
				<div class="footer-right-text">
					<p>We are experienced professionals who understand that It services is</p>
				</div>
				<div class="footer-right-side">
					<span><i class="fas fa fa-map-marker"></i> 254 Lillian Blvd,Holbrook</span>
				</div>
				<div class="footer-right-side">
					<span><i class="fas fa fa-phone"></i> 254 Lillian Blvd,Holbrook</span>
				</div>
				<div class="footer-right-side">
					<span><i class="fas fa fa-envelope"></i> 254 Lillian Blvd,Holbrook</span>
				</div>
				<!-- <div class="footer-btn">
					<form id="contact_form2" action="mail2.php" method="POST">
						<input type="email" placeholder="Enter email address" class="footer-email" required>
						<button type="submit" class="btn-control">Subscribe</button>
					</form>
				</div> -->
			</div>
		</div>
	</div>
	<div class="footerImg">
		<img src="assets/images/Product With City02-01.png" alt="">
	</div>
</div>
<!-- footer-copyright-section -->
<div class="footer-bottom p-0 ">
	<div class="container ">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="copy-right-text">
					<p class="p-0">© Crezvatic 2024 All rights reserved.</p>
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
<!-- ============================================================== -->
<!-- Start - Popup Form -->
<!-- ============================================================= -->

<style>
	/* Popup Form Styles */
	.popup-form {
		display: none;
		/* Hidden by default */
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: center;
		z-index: 1000;
	}

	@media (max-width:600px) {
		.popup-form .container {
			width: 100% !important;
		}

	}
</style>
</head>

<?php if (isset($error_message)) { ?>
	<div style="color: red;"><?php echo $error_message; ?></div>
<?php } ?>

<div class="popup-form " id="popupForm">
	<div class="container popup-content bg-white p-4 rounded shadow w-50">

		<div class="d-flex justify-content-between">
			<h2>Request A Quote</h2>
			<button class="close-popup text-danger border-0 rounded shadow" id="closePopup">X</button>
		</div>
		<form id="quoteForm" class="row " action="<?php echo site_url('emailcontroller/send_email'); ?>" method="post">
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="name" class="navyText fw-bold">Name:</label>
				<input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" class="form-control" required>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="email" class="navyText fw-bold">Email:</label>
				<input type="email" id="email" name="email" value="<?php echo set_value('email')?>" class="form-control" required>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="product" class="navyText fw-bold">Product:</label>
				<select id="product" name="product" class="form-control " required>
					<option value="" disabled selected>Select from below</option>
					<option value="Dust Suppression">Dust Suppression</option>
					<option value="Wastewater Evaporation">Wastewater Evaporation</option>
					<option value="Odour Control System">Odour Control System</option>
					<option value="Road Washing System">Road Washing System</option>
					<option value="Fog Curtains">Fog Curtains</option>
					<option value="Vehicle Mounted">Vehicle Mounted</option>
					<option value="Cooling and Humidification">Cooling and Humidification</option>
					<option value="Slag Management">Slag Management</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="phone" class="navyText fw-bold">Phone:</label>
				<input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 9876543210">
			</div>
			<div class="form-group col-12">
				<label for="comment" class="navyText fw-bold">Comment:</label>
				<textarea id="comment" name="comment" rows="4" class="form-control"></textarea>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label class="navyText fw-bold">Captcha:</label>
				<div class="captcha ">
					<span id="captchaQuestion">Loading...</span>
					<input type="text" id="captcha" name="captcha" class="form-control" required>
				</div>
			</div>
			<div class="form-group col-12 mt-2">
				<button class="btn btn-success w-100" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const popupForm = document.getElementById('popupForm');
    const closePopup = document.getElementById('closePopup');
    const captchaQuestion = document.getElementById('captchaQuestion');
    let captchaAnswer;

    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
        const num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
        captchaAnswer = num1 + num2;
        captchaQuestion.textContent = `${num1} + ${num2} =`;
    }

    function showPopup() {
        popupForm.style.display = 'flex';
        generateCaptcha(); // Generate captcha when popup is shown
    }

    // Show popup only if it hasn't been shown in this session
    if (!localStorage.getItem('popupShown')) {
        showPopup();
        localStorage.setItem('popupShown', 'true'); // Mark popup as shown
    }

    // Close popup when the close button is clicked
    closePopup.addEventListener('click', () => {
        popupForm.style.display = 'none';
    });

    // Clear popupShown flag on page unload (e.g., reload or close)
    window.addEventListener('beforeunload', function () {
        localStorage.removeItem('popupShown');
    });
});

$(document).ready(function() {
    $('#quoteForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        const captchaInput = $('#captcha').val();
        if (parseInt(captchaInput) !== captchaAnswer) { // Check if captcha is correct
            alert('Captcha is incorrect.');
            return;
        }

        // Debug: Print form data to console
        const formData = $(this).serializeArray();
        console.log('Form Data:', formData);

        $.ajax({
            url: $(this).attr('action'), // URL to send the request
            type: 'POST', // HTTP method
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                // Handle success (e.g., show a success message)
                console.log('Response from server:', response);
                alert('Form submitted successfully!');
                $('#popupForm').hide(); // Hide popup after submission
            },
            error: function(xhr, status, error) {
                // Handle errors (e.g., show an error message)
                console.error('An error occurred:', error);
                alert('An error occurred: ' + error);
            }
        });
    });
});

</script>



<!-- ============================================================== -->

<!-- ============================================================== -->

<!-- gallery js -->
<!-- Load jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<!-- Load jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
	integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
	integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Add other scripts as necessary -->
<script src="<?php echo base_url(); ?>assets/js/gallery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sectors.js"></script>
<script src="<?php echo base_url(); ?>assets/js/prod_detail.js"></script>


<!-- bootstrap js -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- particles Js -->
<script src="<?php echo base_url(); ?>assets/js/particles.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stats.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
<!-- Ajax Mail -->
<script src="<?php echo base_url(); ?>assets/js/ajax-mail.js"></script>
<!-- carousel js -->
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<!-- Swiper JS -->
<!-- waypoints js -->
<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<!-- Testimonial js -->
<!-- imagesloaded js -->
<script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope js -->
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<!-- animated js -->
<script src="<?php echo base_url(); ?>assets/js/animated-text.js"></script>
<!-- Wow Js -->
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<!-- venobox js -->
<script src="<?php echo base_url(); ?>venobox/venobox.js"></script>
<!-- venobox min js -->
<script src="<?php echo base_url(); ?>venobox/venobox.min.js"></script>
<!-- jquery js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.js"></script>
<!-- theme js -->
<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
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



<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

<script>
	particlesJS("particles-js", {
		"particles": {
			"number": {
				"value": 80,
				"density": {
					"enable": true,
					"value_area": 800
				}
			},
			"color": {
				"value": "#ffffff"
			},
			"shape": {
				"type": "image",
				"stroke": {
					"width": 0,
					"color": "#000000"
				},
				"polygon": {
					"nb_sides": 5
				},
				"image": {
					"src": "./assets/images/fevicon.png",
					"width": 10,
					"height": 15
				}
			},
			"opacity": {
				"value": 0.5,
				"random": false,
				"anim": {
					"enable": false,
					"speed": 1,
					"opacity_min": 0.1,
					"sync": false
				}
			},
			"size": {
				// "value": 32,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 40,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 150,
				"color": "#ffffff",
				"opacity": 0.4,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 6,
				"direction": "none",
				"random": false,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 1200
				}
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "repulse"
				},
				"onclick": {
					"enable": true,
					"mode": "push"
				},
				"resize": true
			},
			"modes": {
				"grab": {
					"distance": 300,
					"line_linked": {
						"opacity": 1
					}
				},
				"bubble": {
					"distance": 400,
					// "size": 20,
					"size": 50,
					"duration": 2,
					"opacity": 8,
					"speed": 3
				},
				"repulse": {
					"distance": 200,
					"duration": 0.4
				},
				"push": {
					"particles_nb": 4
				},
				"remove": {
					"particles_nb": 2
				}
			}
		},
		"retina_detect": true
	});
	var count_particles, stats, update;
	stats = new Stats;
	stats.setMode(0);
	stats.domElement.style.position = 'absolute';
	stats.domElement.style.left = '0px';
	stats.domElement.style.top = '0px';
	document.body.appendChild(stats.domElement);
	count_particles = document.querySelector('.js-count-particles');
	update = function () {
		stats.begin();
		stats.end();
		if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
			count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
		}
		requestAnimationFrame(update);
	};
	requestAnimationFrame(update);
</script>

</body>

</html>
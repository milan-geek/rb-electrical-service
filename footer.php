<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB_Electrical_Service
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-top-box">
		<div class="sec-wp">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 wow fadeInLeft">
						<div class="footer-logo-info-box">
							<a href="<?php echo home_url(); ?>" class="footer-site-logo" title="RB Electrical Service">
								<img src="<?php echo home_url(); ?>/wp-content/uploads/2023/07/footer-logo.png" alt="RB Electrical Service">
							</a>
							<div class="footer-logo-description-text">
								<p>RB Electrical Service is a top-rated electrical contractor in the Menifee, CA area
									specializing in commercial, industrial, and residential service needs for electrical
									installation, repair, and inspection. </p>
							</div>
						</div>
						<div class="footer-social-box">
							<ul class="social-info">
								<li><a href="https://www.facebook.com/RBElectricalService/" class="social-icon" title="Follow Now" target="_blank"><i
											class="fa-brands fa-square-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/rb.electrical.service/" class="social-icon" title="Follow Now" target="_blank"><i
											class="fa-brands fa-instagram"></i></a></li>
							</ul>
							<ul class="contact-info">
								<li>
									<a href="https://goo.gl/maps/A4xss61vLGEfSVVD6" title="27393 Finale Ct., Menifee, CA 92584" target="_blank">
										<span class="contact-icon"><i class="fa-solid fa-location-dot"></i></span>
										<span class="contact-icon-text-info">27393 Finale Ct., Menifee, CA 92584</span>
									</a>
								</li>
								<li>
									<a href="mailto:info@rbelectricalservice.com" title="info@rbelectricalservice.com">
										<span class="contact-icon"><i class="fa-solid fa-envelope"></i></span>
										<span class="contact-icon-text-info">info@rbelectricalservice.com</span>
									</a>
								</li>
								<li>
									<a href="tel:(951) 201-0116" title="(951) 201-0116">
										<span class="contact-icon"><i class="fa-solid fa-phone"></i></span>
										<span class="contact-icon-text-info">(951) 201-0116</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 wow fadeInRight">
						<div class="footer-page-link-box white-text">
							<h6 class="h6-title">Services</h6>
							<div class="footer-page-link">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'ServicesMenu',
											'menu_id'        => 'ServicesMenu',
										)
									);
									?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 wow fadeInRight">
						<div class="footer-page-link-box white-text">
							<h6 class="h6-title">Navigation</h6>
							<div class="footer-page-link">
								<?php
										wp_nav_menu(
											array(
												'theme_location' => 'NavigationMenu',
												'menu_id'        => 'NavigationMenu',
											)
										);
										?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-box">
		<div class="sec-wp">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer-bottom-left-contant">
							<ul class="footer-bottom-link">
								<li>© 2022 RB Electrical Service </li>
								<li><a href="#" title="Privacy Policy ">Privacy Policy </a></li>
								<li><a href="#" title="Terms of Use">Terms of Use</a></li>
								<li><a href="#" title="Cookies Policy">Cookies Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-bottom-right-contant">
							<div class="footer-bottom-other-link">
								<p><a href="#" title="Web Design">Web Design</a> & <a href="#"
										title="Digital Marketing">Digital Marketing</a> with <span><i
											class="fa-solid fa-heart"></i></span>
									by <a href="#" title="Dotcom Design" class="footer-bottom-site-name">Dotcom
										Design</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scrolltop" id="scrollToTop">
		<i class="fa-solid fa-angles-up"></i>
	</div>
	<div class="top-fixed-btn">
		<a href="tel:(951) 201-0116" class="sec-btn md-btn" title="(951) 201-0116">call <span class="for-des">(951) 201-0116</span> <span class="for-mob">Now</span></a>
		<a href="javascript:void(0)" class="sec-btn contact-btn" title="Contact Us" data-bs-toggle="modal" data-bs-target="#contact_us_Modal">Contact Us</a>
	</div>

		<!-- Modal Start -->
		<div class="modal common-popup" id="contact_us_Modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="popup-title">
						<h2 class="h2-title">Schedule an <span>Estimate</span></h2>
						<button type="button" class="close close-popup" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
					</div>
					<div class="common-popup-overflow">
						<div class="common-popup-text" data-simplebar>
							<div class="contact-form">
								<?php echo do_shortcode( '[contact-form-7 id="111" title="Contact form 1"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal End -->
</footer>

</div>
<?php wp_footer(); ?>

</body>

</html>
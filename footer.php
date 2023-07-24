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
				<div class="row align-items-baseline">
					<div class="col-lg-7">
						<div class="footer-logo-info-box">
							<a href="#" class="footer-site-logo" title="RB Electrical Service">
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
								<li><a href="#" class="social-icon" title="Follow Now"><i
											class="fa-brands fa-square-facebook"></i></a></li>
								<li><a href="#" class="social-icon" title="Follow Now"><i
											class="fa-brands fa-instagram"></i></a></li>
							</ul>
							
							<ul class="contact-info">
								<li>
									<a href="#" title="27393 Finale Ct., Menifee, CA 92584">
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
					<div class="col-lg-4">
						<div class="footer-page-link-box white-text">
							<h5 class="h5-title">Services</h5>
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
					<div class="col-lg-1">
						<div class="footer-page-link-box white-text">
							<h5 class="h5-title">Navigation</h5>
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
		<a href="tel:(951) 201-0116" class="sec-btn" title="(951) 201-0116">call (951) 201-0116</a>
		<a href="<?php echo home_url(); ?>/contact-us/" class="sec-btn contact-us-btn" title="Contact Us">Contact Us</a>
	</div>
</footer>

</div>
<?php wp_footer(); ?>

</body>

</html>
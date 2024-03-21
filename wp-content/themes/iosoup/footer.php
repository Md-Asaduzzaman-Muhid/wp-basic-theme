	<footer class="footer anima-container">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 anima anima-left">
						<div class="footer-logo mb-3">
							<a href="<?php echo get_site_url() ?>"><img class="footer-logo img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></a>
						</div>
						<ul class="social-links m-0 p-0 text-center">
							<li class="wow zoomIn">
								<a href="<?php echo get_option('facebook') ?>" target="_blank">
								<?php include(get_template_directory().'/img/icons/facebook-f.svg') ?></a>
							</li>
							<li class="wow zoomIn">
								<a href="<?php echo get_option('facebook') ?>" target="_blank">
								<?php include(get_template_directory().'/img/icons/instagram.svg') ?></a>
							</li>
							<li class="wow zoomIn">
								<a href="<?php echo get_option('facebook') ?>" target="_blank">
								<?php include(get_template_directory().'/img/icons/x-twitter.svg') ?></a>
							</li>
							<li class="wow zoomIn">
								<a href="<?php echo get_option('facebook') ?>" target="_blank">
								<?php include(get_template_directory().'/img/icons/tiktok.svg') ?></a>
							</li>
							<li class="wow zoomIn">
								<a href="<?php echo get_option('facebook') ?>" target="_blank">
								<?php include(get_template_directory().'/img/icons/youtube.svg') ?></a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-left">
						<h3 class="footer-title"><?php echo get_bloginfo('name') ?> </h3>
						
						<ul class="contact-links m-0 p-0">
							<li class="wow zoomIn">
								<?php include(get_template_directory().'/img/icons/phone-solid.svg') ?>
								<a href="tel:<?php echo trim(get_option('phone'));?>"><?php echo get_option('phone'); ?></a>
							</li>
							<li class="wow zoomIn">
								<?php include(get_template_directory().'/img/icons/envelope-regular.svg') ?>
								<a href="mailto:<?php echo get_option('e-mail') ?>"><?php echo get_option('e-mail'); ?></a>
							</li>
							<li class="wow zoomIn">
								<?php include(get_template_directory().'/img/icons/location-dot-solid.svg') ?>
								<?php echo get_option('address_line1'); ?><?php echo get_option('address_line2'); ?>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-right">
						<div class="menu-footer">
							<?php 
							$locations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_object( $locations['about'] ); ?>
							<h3 class="footer-title"><?php echo $menu->name ?: 'Footer Menu' ?></h3>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'top-menu',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'mainNavigation',
										'menu_class'      => 'navbar-nav ms-auto'
									)
								); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-right">
						<h3 class="footer-title">Office Hours</h3>
						<h5>Poland Office</h5>
						<p>Mon - Fri : 9 AM - 5:00 PM </p>
						<h5>Dhaka Office</h5>
						<p>Sun - Thus : 10 AM - 6:00 PM </p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyright text-center">
					<p class="mb-0"><span>Copyright &copy; <?php echo get_bloginfo('name') ?>.</span> All Rights Reserved</p>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="totop">
		<?php include(get_template_directory().'/img/icons/chevron-up-solid.svg') ?>
	</div>
	<?php wp_footer();?>
</body>
</html>

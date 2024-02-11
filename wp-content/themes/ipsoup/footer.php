	<footer class="footer anima-container">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 anima anima-left">
						<div class="footer-logo">
							<a href="<?php echo get_site_url() ?>"><img class="footer-logo img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></a>
						</div>
						<ul class="social-links m-0 p-0 text-end">
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
							$menu1 = wp_get_nav_menu_object( $locations['menu-2'] ); ?>
							<h3 class="footer-title"><?php echo $menu1->name ?: 'Footer Menu' ?></h3>
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'mainNavigation',
									'menu_class'      => 'navbar-nav ms-auto'
								)
							); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-right">
						<div class="menu-footer">
						<?php 
							$locations = get_nav_menu_locations();
							$menu1 = wp_get_nav_menu_object( $locations['menu-3'] ); ?>
							<h3 class="footer-title"><?php echo $menu1->name ?: 'Footer Menu' ?></h3>
						
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'about',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarToggleExternalContent',
									'menu_class'      => 'navbar-nav'
								)
							); ?>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyright text-center">
					<p class="mb-0"><span>Copyright &copy; <?php echo get_bloginfo('name') ?>.</span> Wszystkie prawa zastrzeżone. <a class="footer_click" href="https://www.iplus.com.pl/" target="_blank">Wykonanie Internet Plus s.c.</a></p>
				</div>
			</div>
		</div>
		
	</footer>
	<div class="totop">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/up-white.png" alt="upIcon">
	</div>
	<?php wp_footer();?>
</body>
</html>

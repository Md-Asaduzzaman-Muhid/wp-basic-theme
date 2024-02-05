	<footer class="footer anima-container">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 anima anima-left">
						<div class="footer-logo">
						<a href="<?php echo get_site_url() ?>"><img class="footer-logo img-fluid" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-left">
						<h3 class="footer-title">Kontakt</h3>
						<p><?php echo get_bloginfo('name') ?> s.c.</p>
						<ul class="list-unstyled contact-info-footer-list">
							<li class="address"><?php echo get_option('address_line1'); ?><?php echo get_option('address_line2'); ?></li>
							<li class="phone"><a class="phone" href="tel:<?php echo trim(get_option('phone')); ?>"><?php echo get_option('phone') ?></a></li>
							<li class="email"><a class="email" href="mailto:<?php echo get_option('mail'); ?>"><?php echo get_option('mail'); ?></a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-right">
						<div class="menu-footer">
							<h3 class="footer-title">Oferta</h3>
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarToggleExternalContent',
									'menu_class'      => 'navbar-nav'
								)
							); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 anima anima-right">
						<div class="menu-footer">
							<h3 class="footer-title">Ekotechnika OZE</h3>
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu-2',
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

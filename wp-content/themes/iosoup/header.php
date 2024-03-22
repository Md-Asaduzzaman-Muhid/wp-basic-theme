<!DOCTYPE html>
<html>
<head>
	<?php $GA = array(); include('resources/php/header_basic.php') ?>
	<?php wp_head();?>
	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
					<span class="sr-only">Loading...</span>
			</div>
	</div>
	<!-- Spinner End -->
<header class="header">	
	<!-- Topbar Start -->
	<div class="container-fluid bg-light p-0">
			<div class="row gx-0 d-none d-lg-flex">
					<div class="col-lg-7 px-5 text-start">
							<div class="h-100 d-inline-flex align-items-center py-3 me-4">
									<small class="fa fa-map-marker-alt text-primary me-2"></small>
									<small><?php echo get_option('address_line1'); ?></small>
							</div>
							<div class="h-100 d-inline-flex align-items-center py-3">
									<small class="far fa-clock text-primary me-2"></small>
									<small><?php echo get_option('opening_hour'); ?></small>
							</div>
					</div>
					<div class="col-lg-5 px-5 text-end">
							<div class="h-100 d-inline-flex align-items-center py-3 me-4">
									<small class="fa fa-envelope text-primary me-2"></small>
									<small><a href="mailto:<?php echo get_option('e-mail') ?>"><?php echo get_option('e-mail'); ?></a></small>
							</div>
							<div class="h-100 d-inline-flex align-items-center">
									<a class="btn btn-sm-square bg-white text-primary me-1" href="<?php echo get_option('facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a class="btn btn-sm-square bg-white text-primary me-1" href="<?php echo get_option('twitter-x') ?>" target="_blank"><i class="fab fa-twitter"></i></a>
									<a class="btn btn-sm-square bg-white text-primary me-0" href="<?php echo get_option('instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
					</div>
			</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
			<a href="<?php echo home_url(); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo iosoup" title="logo iosoup">
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
					<?php wp_nav_menu(
												array(
													'theme_location'  => 'top-menu',
													'container_class' => 'collapse navbar-collapse',
													'container_id'    => 'mainNavigation',
													'menu_class'      => 'navbar-nav ms-auto'
												)
											); ?>
					<a href="<?php echo home_url(); ?>/get-a-quote" class="btn btn-1 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
	</nav>
	<!-- Navbar End -->
</header>

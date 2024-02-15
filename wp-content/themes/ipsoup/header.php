<!DOCTYPE html>
<html>
<head>
	<?php $GA = array(); include('resources/php/header_basic.php') ?>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="header-top bg-dark py-3">
		<div class="container">
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
	</div>
	
	<div id="topMenu" class="header-menu">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<div class="logo wow bounceInDown">
					<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'top-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'mainNavigation',
						'menu_class'      => 'navbar-nav ms-auto'
					)
				); ?>
			</div>
		</nav>
	</div>
</header>



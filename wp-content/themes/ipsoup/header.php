<!DOCTYPE html>
<html>
<head>
	<?php $GA = array(); include('resources/php/header_basic.php') ?>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header class="header">
	<div class="header-top bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-3">
					<div class="promo h-100 d-flex justify-content-start align-items-center">
						<p><?php echo get_option('haslo_firmy1')?? "Email Us" ?><br>
						<?php echo get_option('haslo_firmy2')?? "call us" ?></p>
					</div>
				</div>
				<div class="col-md-3">
				<ul class="text-right social-link m-0 p-0 h-100">
						<li class="wow zoomIn list-inline-item">
							<a href="mailto:<?php echo get_option('mail') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icons/mail.png" alt="mail"></a>
						</li>
						<li class="wow zoomIn list-inline-item">
							<a href="<?php echo get_option('facebook') ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" alt="facebook">
							</a>
						</li>
						<li><i class="fa fa-chevron-up" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="header-menu">
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				<div class="logo wow bounceInDown">
					<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'top-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'mainNavigation',
						'menu_class'      => 'navbar-nav ml-auto'
					)
				); ?>
			</div>
		</nav>
	</div>
</header>

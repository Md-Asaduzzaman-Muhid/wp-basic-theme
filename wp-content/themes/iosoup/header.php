<!DOCTYPE html>
<html>
<head>
	<?php $GA = array(); include('resources/php/header_basic.php') ?>
	<?php wp_head();?>
	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
					<span class="sr-only">Loading...</span>
			</div>
	</div>
	<!-- Spinner End -->
	<!-- Topbar Start -->
	<div class="container-fluid bg-light p-0">
			<div class="row gx-0 d-none d-lg-flex">
					<div class="col-lg-7 px-5 text-start">
							<div class="h-100 d-inline-flex align-items-center py-3 me-4">
									<small class="fa fa-map-marker-alt text-primary me-2"></small>
									<small>123 Street, New York, USA</small>
							</div>
							<div class="h-100 d-inline-flex align-items-center py-3">
									<small class="far fa-clock text-primary me-2"></small>
									<small>Mon - Fri : 09.00 AM - 09.00 PM</small>
							</div>
					</div>
					<div class="col-lg-5 px-5 text-end">
							<div class="h-100 d-inline-flex align-items-center py-3 me-4">
									<small class="fa fa-phone-alt text-primary me-2"></small>
									<small>+012 345 6789</small>
							</div>
							<div class="h-100 d-inline-flex align-items-center">
									<a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
									<a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
									<a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
									<a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
							</div>
					</div>
			</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
			<a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
					<h2 class="m-0 text-primary">WooDY</h2>
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto p-4 p-lg-0">
							<a href="index.html" class="nav-item nav-link active">Home</a>
							<a href="about.html" class="nav-item nav-link">About</a>
							<a href="service.html" class="nav-item nav-link">Service</a>
							<a href="project.html" class="nav-item nav-link">Project</a>
							<div class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
									<div class="dropdown-menu fade-up m-0">
											<a href="feature.html" class="dropdown-item">Feature</a>
											<a href="quote.html" class="dropdown-item">Free Quote</a>
											<a href="team.html" class="dropdown-item">Our Team</a>
											<a href="testimonial.html" class="dropdown-item">Testimonial</a>
											<a href="404.html" class="dropdown-item">404 Page</a>
									</div>
							</div>
							<a href="contact.html" class="nav-item nav-link">Contact</a>
					</div>
					<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
	</nav>
	<!-- Navbar End -->

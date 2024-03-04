<?php 

/*
Template Name: Home
*/

get_header(); ?>

<?php
	if(is_front_page()){
		get_template_part( 'template-parts/content', 'banner' );
	} else {
		get_template_part( 'template-parts/content-inner', 'banner' );
	}
?>
<section class="feature-section py-3 py-md-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="feature-single d-flex">
					<div class="icon-wrapper d-flex align-items-center justify-content-center">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/png/case.png" alt="feature">
					</div>
					<div class="content">
						<h3>Expertise and Experience</h3>
						<p class="mb-0">10+ professional developer & designer expertise in various field.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-single d-flex">
					<div class="icon-wrapper d-flex align-items-center justify-content-center">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/png/puzzle.png" alt="feature">
					</div>
					<div class="content">
						<h3>Customized Solutions</h3>
						<p class="mb-0">We know you are unique so we offer customized solutions.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature-single d-flex">
					<div class="icon-wrapper d-flex align-items-center justify-content-center">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/png/review.png" alt="feature">
					</div>
					<div class="content">
						<h3>100% Dedicated Support</h3>
						<p class="mb-0">We will be with you 24/7 from diffenet geolocation.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-section py-3 py-md-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/grouth.png" alt="about">
			</div>
			<div class="col-md-6">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							What services does iOSoup offer?
						</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						iOSoup offers a wide range of services including web development, mobile app development (for both iOS and Android platforms), custom software solutions, UI/UX design, quality assurance, and ongoing maintenance and support for all projects.
						</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Can iOSoup create custom web applications?
						</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						Yes, iOSoup specializes in creating custom web applications tailored to the specific needs and requirements of our clients. We utilize the latest technologies and frameworks to ensure high-quality and scalable solutions.
						</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						How does iOSoup ensure the security of client data and projects?
						</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						iOSoup takes security and confidentiality seriously. We implement industry-standard security measures and protocols to safeguard client data and projects. Additionally, we are open to signing non-disclosure agreements (NDAs) to protect sensitive information.
						</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						Can clients provide input and feedback during the project?
						</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						Absolutely! We encourage client involvement and feedback throughout the project lifecycle. Our team values collaboration and will work closely with you to ensure your vision is realized in the final product.
						</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						How can I request a consultation with iOSoup?
						</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						You can request a consultation with iOSoup by contacting us through our website's contact form, sending us an email at [email address], or giving us a call at [phone number]. Our team will be happy to discuss your project requirements and provide personalized assistance.
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="counter" class="counter-section py-3 py-md-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="counter-single">
					<p><?php echo 'Number of Project'?></p>
					<h3 class="counter" data-target="<?php echo '125' ?>"><?php echo'125' ?></h3>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="counter-single">
					<p><?php echo 'Number Of Customer' ?></p>
					<h3 class="counter" data-target="<?php echo '45' ?>"><?php echo '45'?></h3>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="counter-single">
					<p><?php echo 'Ratings' ?></p>
					<h3 class="counter" data-target="<?php echo '5' ?>"><?php echo '5'?></h3>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Works -->
<section id="portfolio" class="home-section bg-gray">
    <div class="container">
    <h2 class="section-title text-center">Some of Our Works</h2>
      <div class="row">
        	<div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="https://shachroy.com/" target="_blank">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/1.jpg" alt="portfolio" />
					<h4 class="mb-0 work-title"> <span>E-Commerce Website</span></h4>
					</a>
				</div>
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://www.sylhetibiyashadi.com/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/2.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>Laravel Web Application</span></h4>
					</a>
			  	</div>
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://sps.com.bd/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/3.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>Custom WordPress Theme</span></h4>
					</a>
			  	</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://iosoup.com/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/4.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>Custom HTML Theme</span></h4>
					</a>
				</div>
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://activexitltd.com/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/5.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>Custom WordPress Website</span></h4>
					</a>
				</div>
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://garmentexbd.com/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/6.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>E-Commerce Website</span></h4>
					</a>
				</div>
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="https://inpure.com.bd/" target="_blank" >
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/7.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>E-Commerce Website</span></h4>
					</a>
				</div>	
			</div>
            <div class="col-lg-3 col-md-6 mb-2 mb-md-4">
				<div class="portfolio-single position-relative">
					<a href="http://expomela.com/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/works/8.jpg" alt="portfolio" />
						<h4 class="mb-0 work-title"> <span>WordPress Event Management</span></h4>
					</a>
				</div>
			</div>
      	</div>
    </div>
</section>

<section class="customer-review-section">
	<div class="container">
		<!-- Swiper -->
		<div class="swiper-container position-relative">
			<div class="swiper-wrapper">
				<div class="swiper-slide text-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/png/person.png" alt="reviewer">
					<div class="text-wrapper">
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Modi nostrum doloribus dignissimos esse molestias distinctio aut enim non,
							accusamus minus laborum sequi, voluptas reiciendis iure ipsum quaerat nam 
							vitae perspiciatis.</p>
						<div class="rating d-flex">
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
						</div>
					</div>
				</div>
				<div class="swiper-slide text-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/png/person-female.png" alt="reviewer">
					<div class="text-wrapper">
						<h3>John Doe</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Modi nostrum doloribus dignissimos esse molestias distinctio aut enim non,
							accusamus minus laborum sequi, voluptas reiciendis iure ipsum quaerat nam 
							vitae perspiciatis.</p>
						<div class="rating d-flex">
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
							<?php include(get_template_directory().'/img/icons/star-solid.svg') ?>
						</div>
					</div>
				</div>
				<div class="swiper-slide">Slide 3</div>
				<div class="swiper-slide">Slide 4</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
			
	</div>
</section>


<?php get_footer(); ?>
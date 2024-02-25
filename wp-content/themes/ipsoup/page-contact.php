<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="title-section position-relative">
        <?php if(get_field('inner_banner')):?>
        <div class="inner-banner">
            <img class="img-fluid" src="<?php echo get_field('inner_banner'); ?>" alt="banner">
        </div>
        <?php else: ?>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/inner-banner.jpg" alt="banner">
        <?php endif ?>
        <h1 class="page-title"><?php echo get_the_title(); ?></h1>
</section>
<?php endwhile; endif; ?>
<section class="contact-section py-5">
    <div class="container">
        <div class="row">

                <div class="col-md-4">
                    <div class="contact-information">
                        <div class="item">
                            <?php include(get_template_directory() . '/img/icons/location-dot-solid.svg') ?>
                            <p><?php echo get_option('address_line1'); ?> <br><?php echo get_option('address_line2'); ?></p>
                        </div>
                        <div class="item">
                            <?php include(get_template_directory() . '/img/icons/phone-solid.svg') ?>
                            <p><a href="tel:<?php echo str_replace(array('(',')',' ','-','.'), "", get_option('phone')); ?>"><?php echo get_option('phone'); ?> </a></p>
                        </div>
                        <div class="item">
                            <?php include(get_template_directory() . '/img/icons/envelope-regular.svg') ?>
                            <p><a href="mailto:<?php echo get_option('e-mail'); ?>"><?php echo get_option('e-mail'); ?></a></p>
                        </div>
                        <div class="item">
                            <h4>Follow Us</h4>
                            <ul class="social-link justify-content-center p-0">
                                <?php if(get_option('facebook')): ?>
                                <li class="list-inline-item">
                                    <a target="_blank" href="<?php echo get_option('facebook') ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" alt="facebook">
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php if(get_option('instagram')): ?>
                                <li class="list-inline-item"> 
                                    <a target="_blank" href="<?php echo get_option('instagram') ?>">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/instagram.png" alt="instagram">
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php if(get_option('youtube')): ?>
                                <li class="list-inline-item"> 
                                    <a target="_blank" href="<?php echo get_option('youtube') ?>">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/check.png" alt="youtube">
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php if(get_option('twitter')): ?>
                                <li class="list-inline-item"> 
                                    <a target="_blank" href="<?php echo get_option('twitter') ?>">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/check.png" alt="twitter">
                                    </a>
                                </li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main-form">
                        <?php echo do_shortcode('[contact-form-7 id="981ade5" title="Contact form 1"]'); ?>
                    </div>
                </div>
                
        </div>
    </div>
</section>

<?php if(!empty( get_the_content() ) ): ?>
<section class="page-section py-5">
	<div class="container">
		<?php echo get_the_content(); ?>
	</div>
</section>
<?php endif;?>

<section class="map-section">
	<div id="leafletmap">
		<div id="map" style="width: 100%; height: 450px; margin-bottom: 0;"></div>
	</div>
</section>

<?php get_footer(); ?>

<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Page Header Start -->
<section class="page-title-section">
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?php single_post_title(); ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url(); ?>" title="home page url">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page" title="current page url"><?php single_post_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section> 
<!-- Page Header End -->
<?php endwhile; endif; ?>

<?php if(!empty( get_the_content() ) ): ?>
<section class="page-section py-5">
	<div class="container">
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
	</div>
</section>
<?php endif;?>

<section class="contact-section py-5">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="contact-information">
                        <div class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p><?php echo get_option('address_line1'); ?> <br><?php echo get_option('address_line2'); ?></p>
                        </div>
                        <div class="item">
                            <i class="fas fa-phone-alt"></i>
                            <p><a href="tel:<?php echo str_replace(array('(',')',' ','-','.'), "", get_option('phone')); ?>"><?php echo get_option('phone'); ?> </a></p>
                        </div>
                        <div class="item">
                        <i class="fas fa-envelope"></i>
                            <p><a href="mailto:<?php echo get_option('e-mail'); ?>"><?php echo get_option('e-mail'); ?></a></p>
                        </div>
                        <div class="item">
                            <h4>Follow Us</h4>
                            <ul class="social-link justify-content-center p-0">
                                <?php if(get_option('facebook')): ?>
                                <li class="list-inline-item">
                                    <a target="_blank" href="<?php echo get_option('facebook') ?>">
                                    <i class="fab fa-facebook-square"></i>
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php if(get_option('instagram')): ?>
                                <li class="list-inline-item"> 
                                    <a target="_blank" href="<?php echo get_option('instagram') ?>">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <?php endif ?>
                              
                                <?php if(get_option('twitter')): ?>
                                <li class="list-inline-item"> 
                                    <a target="_blank" href="<?php echo get_option('twitter') ?>">
                                    <i class="fab fa-xing"></i>
                                    </a>
                                </li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main-form">
                        <?php echo do_shortcode('[contact-form-7 id="981ade5" title="Contact form"]'); ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
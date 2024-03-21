<?php 
/*
Template Name: Portfolio
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

<section class="portfolio-page-section py-3 py-md-5">
    <div class="container">
        <?php
            $args = array( 
            'post_type' => 'portfolios', 
            'showposts' => 12,
            'orderby' => 'menu_order',
            'orderby' => 'date',  
            'order' => 'DESC' );
            $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="portfolio-single p-3 p-md-4">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="col-8">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a class="btn-1" target="_blank" href="<?php echo esc_attr( get_field('link_of_the_project') ); ?>">Visit  now</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?> 
    </div>
</section>

<?php get_footer(); ?>
<?php 
/*
Template Name: O nas
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

<section class="page-section py-5">
	<div class="container">
		<?php echo get_the_content(); ?>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
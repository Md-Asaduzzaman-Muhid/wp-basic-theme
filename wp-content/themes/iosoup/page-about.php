<?php 
/*
Template Name: About
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

<section class="page-section py-5">
	<div class="container">
		<?php echo get_the_content(); ?>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
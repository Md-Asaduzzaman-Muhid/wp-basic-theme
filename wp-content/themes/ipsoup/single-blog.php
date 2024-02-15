<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="title-section-bg position-relative">
    <div class="container">
        <div class="pagination-page">
        <a href="<?php echo site_url(); ?>" class="home-icon1" ><i class="fas fa-home"></i></a>
                <span class="divider">/</span>
                <a class="item" href="<?php echo get_site_url(); ?>/blog" >Blog</a>
            <?php if ( $post):?>
                <span class="divider">/</span>
                <span class="item-now">
                    <?php echo get_the_title( $post); ?>

                </span>
            <?php endif; ?>
        </div>
    </div>
</section><?php endwhile; endif; ?>



<?php if(!empty( get_the_content() ) ): ?>
<section class="main-content-section py-5">
	<div class="container">
		<?php echo apply_filters( 'the_content', get_the_content() ); ?>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
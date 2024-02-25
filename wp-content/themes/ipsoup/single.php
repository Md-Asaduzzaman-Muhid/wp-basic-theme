<?php get_header(); ?>
<?php the_post(); ?>

<div class="container mb-5">
	<h1><?php echo get_the_title() ?></h1>
	<?php if(has_post_thumbnail()): ?>
		<div class="post_thumnail_container">
			<a href="<?php echo get_the_post_thumbnail_url() ?>" title="" data-rl_title="" class="rl-gallery-link" data-rl_caption="" data-rel="lightbox-gallery-2">
				<?php the_post_thumbnail() ?>
			</a>
		</div>
	<?php endif; ?>
	<?php the_content();?>
</div>

<?php get_footer(); ?>
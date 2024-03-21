<?php get_header(); ?>
<?php the_post(); ?>

<div class="col-12">
	<?php if(has_post_thumbnail()): ?>
		<div class="post_thumnail_container"><?php the_post_thumbnail() ?></div>
	<?php endif; ?>
	<?php the_content();?>
</div>

<?php get_footer(); ?>
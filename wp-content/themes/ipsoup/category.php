<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1><?php echo single_cat_title() ?></h1>
		</div>
	</div>
	<div class="articles">
		<?php while(have_posts()): the_post(); ?>
				<div class="row pb-3">
					<div class="col-12 col-md-4">
						<div class="maxfullwidth">
							<a class="" href="<?php the_permalink(); ?>">
								<h2 class="d-block d-md-none"><?php echo the_title() ?></h2>
								<?php echo get_the_post_thumbnail(null, 'thumbnail'); ?>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-8 text-justify">
						<a class="" href="<?php the_permalink(); ?>">
							<h2 class="d-none d-md-block"><?php echo the_title() ?></h2>
							<?php echo cut_text_by_words(get_the_content(), 360) ?>
							<span class="more">czytaj więcej</span>
						</a>
					</div>
				</div>
		
		<?php endwhile ?>
		<div class="paginacja"><?php echo paginate_links(array('prev_text' => '<', 'next_text' => '>')) ?></div>
	</div>
</div>

<?php get_footer(); ?>
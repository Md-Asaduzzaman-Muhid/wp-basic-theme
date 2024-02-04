<?php 

/*
Template Name: fotowoltaika
*/
get_header(); ?>
<section class="title-section position-relative">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if(get_field('inner_banner')):?>
        <div class="inner-banner">
            <img class="img-fluid" src="<?php echo get_field('inner_banner'); ?>" alt="banner">
        </div>
        <?php else: ?>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/inner-banner.jpg" alt="banner">
        <?php endif ?>
        <h1 class="page-title"><?php echo get_the_title(); ?></h1>
    <?php endwhile; endif; ?>
</section>

<section class="page-section py-5">
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; endif; ?>
	</div>
</section>
<section class="offering-section py-md-5 py-3">
	<div class="container">
		<div class="top-description wow fadeInUp">
			<h2 class="text-center title">najwyższy poziom usług </h2>
			<p class="text-center sub-title">- wybierz firmę z bogatym doświadczeniem</p>
			<p class="text-center content">​Swoje usługi świadczymy dla każdego, kto potrzebuje opawy technicznej koncertu, pokazu lub innego rodzaju eventu. Służymy wsparciem wszędzie, gdzie niezbędne są ekrany LED, nagłośnienie czy oświetlenie. Świadczymy kompleksowe usługi dopasowane do różnorodnych potrzeb.</p>
		</div>
		<div class="offering-item-wrapper">
			<?php
				$args = array( 
				'post_type' => 'offerta', 
				'posts_per_page' => 6, 
				'orderby' => 'menu_order', 
				'order' => 'ASC' );
				$loop = new WP_Query( $args );
				$i = 1;
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="offering-single">
				<?php if($i%2==0){?>
				<div class="row">
					<div class="col-md-6 order-md-first order-last wow fadeInLeft">
						<div class="wrapper w-100 h-100 d-flex justify-content-center align-items-center">
							<div class="content">
								<h4 id="<?php echo strtolower(the_title()); ?>"><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<div class="col-md-6 order-md-last order-first wow fadeInRight">
						<div class="thum">
							<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="offer">
						</div>
					</div>
				</div>
				<?php } else { ?>
					<div class="row">
						<div class="col-md-6 wow fadeInLeft">
							<div class="thum">
								<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="offer">
							</div>
						</div>
						<div class="col-md-6 wow fadeInRight">
							<div class="wrapper w-100 h-100 d-flex justify-content-center align-items-center">
								<div class="content">
									<h4 id="<?php echo strtolower(the_title()); ?>"><?php the_title(); ?></h4>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
			<?php $i++; endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
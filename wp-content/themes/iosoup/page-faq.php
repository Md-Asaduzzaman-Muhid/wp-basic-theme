<?php 

/*
Template Name: FAQ
*/
get_header(); ?>
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
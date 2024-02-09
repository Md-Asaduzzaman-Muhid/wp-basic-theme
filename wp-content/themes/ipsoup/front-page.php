<?php 

/*
Template Name: Home
*/

get_header(); ?>
<!-- 	
<section class="slider-section big">
	<div class="container-fluid">
		<?php// echo do_shortcode('[masterslider id="1"]'); ?>
	</div>
</section>
<section class="slider-section mobile">
	<div class="container-fluid">
		<?php //echo do_shortcode('[masterslider id="2"]'); ?>
	</div>
</section> -->

<section class="termo-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 text-center text-md-left anima anima-left">
				<h2><?php if(!empty(get_field('termo_ttitle'))){ echo get_field('termo_ttitle');} else echo "proszę dodać tytuł na pierwszej stronie"; ?></h2>
				<h3><?php if(!empty(get_field('termo_sub_title'))){ echo get_field('termo_sub_title');} else echo "proszę dodać tytuł na pierwszej stronie"; ?></h3>
				<a class="btn-1 d-block" href="<?php echo get_field('termo_url'); ?>">zobacz  więcej</a>
				<h4>Jak przebiega proces?</h4>
			</div>
			<div class="col-md-6 col-lg-9 anima anima-right">
				<img class="img-fluid" src="<?php if(get_field('termo_image')){echo get_field('termo_image');} else echo get_template_directory_uri().'/img/thermal-house.jpg'?>" alt="thermo" >
			</div>
		</div>
		<div class="termo-process">
			<div class="row">
				<div class="col-lg-3 col-md-6 anima anima-left">
					<?php $termo_process_1 =  get_field('termo_process_1'); ?>
					<div class="process-single">
						<div class="icon">
							<img src="<?php echo $termo_process_1['icon'] ?>" alt="termo1">
						</div>
						<h5><?php echo $termo_process_1['title'] ?></h5>
						<p><?php echo $termo_process_1['description'] ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 anima anima-left">
					<?php $termo_process_2 =  get_field('termo_process_2'); ?>
					<div class="process-single">
						<div class="icon">
							<img src="<?php echo $termo_process_2['icon'] ?>" alt="termo2">
						</div>
						<h5><?php echo $termo_process_2['title'] ?></h5>
						<p><?php echo $termo_process_2['description'] ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 anima anima-right">
					<?php $termo_process_3 =  get_field('termo_process_3'); ?>
					<div class="process-single">
						<div class="icon">
							<img src="<?php echo $termo_process_3['icon'] ?>" alt="termo3">
						</div>
						<h5><?php echo $termo_process_3['title'] ?></h5>
						<p><?php echo $termo_process_3['description'] ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 anima anima-right">
					<?php $termo_process_4 =  get_field('termo_process_4'); ?>
					<div class="process-single">
						<div class="icon">
							<img src="<?php echo $termo_process_4['icon'] ?>" alt="termo4">
						</div>
						<h5><?php echo $termo_process_4['title'] ?></h5>
						<p><?php echo $termo_process_4['description'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="consulting-section">
	<div class="container">
		<div class="consult-info">
			<div class="row">
				<div class="col-md-4 mb-md-0 mb-3 anima anima-top ">
					<?php $doradztwo_1 = get_field('doradztwo_home_1');?>
					<div class="single">
						<div class="icon">
							<img src="<?php echo $doradztwo_1['icon']; ?>" alt="consulting1">
						</div>
						<p class="m-0"><?php echo $doradztwo_1['description']; ?></p>
					</div>
				</div>
				<div class="col-md-4 mb-md-0 mb-3 anima anima-top ">
					<?php $doradztwo_2 = get_field('doradztwo_home_2');?>
					<div class="single">
						<div class="icon">
							<img src="<?php echo $doradztwo_2['icon']; ?>" alt="consulting1">
						</div>
						<p class="m-0"><?php echo $doradztwo_2['description']; ?></p>
					</div>
				</div>
				<div class="col-md-4 anima anima-top">
					<?php $doradztwo_3 = get_field('doradztwo_home_3');?>
					<div class="single">
						<div class="icon">
							<img src="<?php echo $doradztwo_3['icon']; ?>" alt="consulting1">
						</div>
						<p class="m-0"><?php echo $doradztwo_3['description']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="consult-more">
			<div class="row">
				<div class="col-lg-4 col-md-6 anima anima-left">
					<h2><?php echo get_field('doradztwo_title'); ?></h2>
					<?php $link = get_field('doradztwo_url'); ?>
					<a class="btn-2" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
				</div>
				<div class="col-lg-8 col-md-6 anima anima-right">
					<div class="featured-image">
						<img class="img-fluid" src=" <?php echo get_field('doradztwo_feature_image') ?>" alt="featured image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="counter" class="counter-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 anima anima-left">
				<div class="counter-single">
				<?php $zadowolonych = get_field('zadowolonych');?>
					<div class="icon">
						<img class="img-fluid" src="<?php echo $zadowolonych['icon']; ?>" alt="zadowolonych">
					</div>
					<p><?php echo $zadowolonych['title']; ?></p>
					<h3 class="counter" data-target="<?php echo $zadowolonych['quantity'] ?: '100' ?>"><?php echo $zadowolonych['quantity']; ?></h3>
				</div>
			</div>
			<div class="col-md-4  anima anima-top">
				<div class="counter-single">
				<?php $wykonanych = get_field('wykonanych');?>
					<div class="icon">
						<img class="img-fluid" src="<?php echo $wykonanych['icon']; ?>" alt="zadowolonych">
					</div>
					<p><?php echo $wykonanych['title']; ?></p>
					<h3 class="counter" data-target="<?php echo $wykonanych['quantity'] ?: '200' ?>"><?php echo $wykonanych['quantity']; ?></h3>
				</div>
			</div>
			<div class="col-md-4  anima anima-right">
				<div class="info text-center">
					<p><?php echo get_field('zapraszamy'); ?></p>
					<?php $link_2 = get_field('counter_url');?>
					<a class="btn-3" href="<?php echo $link_2; ?>">sprawdź</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="fotowoltaika-section">
	<div class="container">
		<?php
            $args = array( 
            'post_type' => 'fotowoltaika', 
            'showposts' => 4,
            'orderby' => 'menu_order',
            'orderby' => 'date',  
            'order' => 'DESC' );
            $loop = new WP_Query( $args );
            $i = 1;
        ?>
		<div class="row">
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="col-lg-3 col-md-6 mb-md-0 mb-3">
				<div class="fotowoltaika-item">
					<?php if ( get_the_post_thumbnail() ) : ?>									    
					<a href="<?php echo get_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid main" alt="thumbnail">
						<div class="overlay">
							<div class="overlay-content">
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/icons/power.png" alt="power">
								<p><?php echo get_field('fotowoltaika_kwp') ?? 'pojemność' ?></p>
								<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/icons/size.png" alt="size">
								<p><?php echo get_field('fotowoltaika_pancli') ?? 'moc' ?></p>
							</div>
						</div>
					</a>
					<?php endif; ?>
				</div>
			</div>
			<?php $i++; endwhile; ?> 
		</div>
	</div>
</section>

<?php get_footer(); ?>
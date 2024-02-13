<?php 

/*
Template Name: Home
*/

get_header(); ?>

<?php
	if(is_front_page()){
		get_template_part( 'template-parts/content', 'banner' );
	} else {
		get_template_part( 'template-parts/content-inner', 'banner' );
	}
?>

<section id="counter" class="counter-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="counter-single">
					<p><?php echo 'Title'?></p>
					<h3 class="counter" data-target="<?php echo '100' ?>"><?php echo'100' ?></h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="counter-single">
					<p><?php echo 'Title' ?></p>
					<h3 class="counter" data-target="<?php echo '200' ?>"><?php echo '1002'?></h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="counter-single">
					<p><?php echo 'Title' ?></p>
					<h3 class="counter" data-target="<?php echo '200' ?>"><?php echo '190'?></h3>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
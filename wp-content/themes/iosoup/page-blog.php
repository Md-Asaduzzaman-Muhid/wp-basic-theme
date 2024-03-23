<?php 
/*
Template Name: Blogs
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
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
	</div>
</section>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<!-- Blog Section Start -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<?php
                $args = array( 
                'post_type' => 'blog', 
                'showposts' => -1,
                'orderby' => 'menu_order',
                'orderby' => 'date',  
                'order' => 'DESC' );
            ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="col-md-4 wow fadeInUp">
				<div class="card__base">  
					<div class="card">
						<div class="card__header">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid main" alt="thumbnail blog" title="thumbnail blog">
						</div>
						<div class="card__body">
						<?php 
							$category = get_the_terms( $loop->ID, 'blog_categories' ); 
						?>
							<?php foreach($category as $cat): ?>
                                <a class="category" href="<?php $cat->slug ?>" title="category url"><span class="tag tag-purple"><?php echo $cat->name; ?></span></a>
                            <?php endforeach; ?>
							<h4><?php echo get_the_title(); ?></h4>
							<p><?php echo get_the_excerpt(); ?></p>
						</div>
						<div class="card__footer">
							<div class="user">
								<div class="user__info">
								<small> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></small>
								</div>
							</div>
						</div>
					</div>
					<div class="blob blob-purple"></div>
					<div class="fakeblob"></div>
					<a href="<?php echo get_permalink(); ?>" class="whole-link"></a>
				</div>
			</div>
			<?php endwhile; ?> 

  		</div>
	</div>
</section>
<!-- Blog Section End -->
<?php get_footer(); ?>
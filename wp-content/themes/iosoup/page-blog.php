<?php 
/*
Template Name: Blog
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="title-section-bg position-relative">
    <div class="container">
        <div class="pagination-page">
            <a href="<?php echo site_url(); ?>" class="home-icon1" ><i class="fas fa-home"></i></a>
            <span class="divider">/</span>
            <span class="item-now"><?php echo get_the_title(); ?></span>
        </div>
    </div>
</section><?php endwhile; endif; ?>

<!-- Blog List Start -->
<section class="blogs-section py-5">
    <div class="container">
        <div class="row">
            <?php
                $args = array( 
                'post_type' => 'blog', 
                'showposts' => 12,
                'orderby' => 'menu_order',
                'orderby' => 'date',  
                'order' => 'DESC' );
                $loop = new WP_Query( $args );
                $i = 1;
            ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single">
                    <div class="thumbnail">
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid main" alt="thumbnail">
                        </a>
                        <div class="categories">
                            <?php $category= get_the_category(); foreach($category as $cat): ?>
                                <a class="category" href="<?php echo esc_url(get_category_link( $cat->cat_ID));?>"><?php echo $cat->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="description">
                        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                        <h3><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?></a></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a class="btn-1" href="<?php echo get_permalink(); ?>">Czytaj więcej <span><i class="fa fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile; ?> 
        </div>
    </div>
</section>





<?php get_footer(); ?>
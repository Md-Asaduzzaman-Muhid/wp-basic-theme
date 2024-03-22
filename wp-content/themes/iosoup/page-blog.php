<?php 
/*
Template Name: Blog
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

<!-- Blog Section Start -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
				<div class="card__base">  
					<div class="card">
						<div class="card__header">
							<img src="<?php echo  get_template_directory_uri() ?>/img/blog/website.webp" alt="blog about website" class="card__image" title="blog about website">
						</div>
						<div class="card__body">
							<span class="tag tag-purple">Website</span>
							<h4>Hitch up your wagon, and partner your claim on the digital frontier. </h4>
							<p>Imagine your business as a lone cowboy riding through the vast expanse of the Wild West. Without a website, it's like wandering aimlessly through the desert without a map or a compass. But with a website, you're the sheriff in town, hanging up your digital wanted poster for all to see. Your website is your trusty steed, galloping ahead to spread the word about your business far and wide. It's the campfire where tales of your products and services are shared, captivating travelers and locals alike. From the dusty trails of Texas to the bustling streets of New York City, your website is the lasso that reels in customers from every corner of the frontier.</p>
						</div>
						<div class="card__footer">
							<div class="user">
								<div class="user__info">
								<small>20+ post Last month</small>
								</div>
							</div>
						</div>
					</div>
					<div class="blob blob-purple"></div>
					<div class="fakeblob"></div>
					<a href="<?php echo home_url(); ?>/blogs" class="whole-link"></a>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
				<div class="card__base">  
					<div class="card">
						<div class="card__header">
							<img src="<?php echo  get_template_directory_uri() ?>/img/blog/design.webp" alt="design website blog" class="card__image" title="blog design website">
						</div>
						<div class="card__body">
							<span class="tag tag-purple">Design</span>
							<h4>Think of your business as a stage and design that sets the scene for success.</h4>
							<p>Imagine your business as a canvas waiting to be painted with the vibrant strokes of creativity. Without inspired design, it's like a dull gray sky in need of a rainbow. But with creative design, you're the master artist, weaving a tapestry of colors and shapes that captivate and inspire. Creative design isn't just about making things look pretty; it's about crafting an experience that resonates with your audience.</p>
						</div>
						<div class="card__footer">
							<div class="user">
								<img src="https://i.pravatar.cc/40?img=11" alt="user__image" class="user__image">
								<div class="user__info">
								<h5>@All Author</h5>
								<small>5+ post last month</small>
								</div>
							</div>
						</div>
					</div>
					<div class="blob blob-purple"></div>
					<div class="fakeblob"></div>
					<a href="<?php echo home_url(); ?>/blogs" class="whole-link"></a>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
				<div class="card__base">  
					<div class="card">
						<div class="card__header">
							<img src="<?php echo  get_template_directory_uri() ?>/img/blog/seo.webp" alt="seo blog" class="card__image" title="seo blog">
						</div>
						<div class="card__body">
							<span class="tag tag-purple">SEO</span>
							<h4>Importance of Search Engine Optimization(SEO) where attention is currency.</h4>
							<p>SEO, like a compass in the digital wilderness, guides your content to the eyes that seek it most. It's the mapmaker of the internet, ensuring your voice isn't lost in the cacophony of the web. With SEO, your words become beacons, drawing in voyagers amidst the vast sea of information.SEO is the whisperer of algorithms, coaxing them to favor your message, elevating it above the noise. In a world where attention is currency, SEO is the key that unlocks the door to visibility, relevance, and impact.</p>
						</div>
						<div class="card__footer">
							<div class="user">
								<img src="https://i.pravatar.cc/40?img=11" alt="user__image" class="user__image">
								<div class="user__info">
								<h5>@All Author</h5>
								<small>10+ post last month</small>
								</div>
							</div>
						</div>
					</div>
					<div class="blob blob-purple"></div>
					<div class="fakeblob"></div>
					<a href="<?php echo home_url(); ?>/blogs" class="whole-link"></a>
				</div>
			</div>


  		</div>
	</div>
</section>
<!-- Blog Section End -->



<?php get_footer(); ?>
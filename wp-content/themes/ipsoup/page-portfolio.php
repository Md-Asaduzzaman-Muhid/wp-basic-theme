<?php 
/*
Template Name: Portfolio
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="title-section-bg position-relative">
    <div class="container">
        <div class="pagination-page">
            <a href="<?php echo site_url(); ?>" class="home-icon1" ></a>
            <span class="divider">/</span>
            <span class="item-now"><?php echo get_the_title(); ?></span>
        </div>
    </div>
</section><?php endwhile; endif; ?>
asdasd


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iosofroe_wp888' );

/** Database username */
define( 'DB_USER', 'iosofroe_wp888' );

/** Database password */
define( 'DB_PASSWORD', 'aFp]20]Eq-1@S9-1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

<?php get_footer(); ?>
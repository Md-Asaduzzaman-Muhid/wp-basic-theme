<?php get_header(); ?>
<?php the_post(); ?>

<div class="col-12 text-center">
	<h1>Oops!</h1>
	<h3>404 -page not found</h3>
	<p>The page you are looking for might have been removed<br>had its name changed or is temporarily unavailable</p>
	<a class="btn-1" href="<?php echo home_url(); ?>/">go to homepage</a>
</div>

<?php get_footer(); ?>
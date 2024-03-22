<article id="page-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
    <?php echo apply_filters( 'the_content', get_the_content() ); ?>
</article>
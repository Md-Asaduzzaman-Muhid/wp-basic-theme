<?php
global $post;
$inner_banner = get_template_directory_uri().'./img/banner.jpg';

if ( !is_404() && !is_search() ) {
    $banner_img = get_field("inner_banner", $post->ID);

    if(!empty($banner_img)) {
        $inner_banner = $banner_img;
    }
}
?>

<section class="page-hero" style="background-image: url(<?php echo $inner_banner; ?>);">
</section>
<?php
    // Enqueue JS and CSS 
    require_once('resources/php/enqueue.php');

    //Custom Post Type
    require get_template_directory() . '/resources/php/custom-post-types.php';

    //Meta Fields
    require get_template_directory() . '/resources/php/meta-field.php';

    // breadcrumbs.php 
    require get_template_directory() . '/resources/php/breadcrumbs.php';

    //ustom template tags for this theme.
    require get_template_directory() . '/resources/php/pagination.php';
    
    //Load functions to secure your WP ipll.
    require get_template_directory() . '/resources/php/security.php';

    add_theme_support( 'title-tag' );

    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

    add_theme_support( 'post-thumbnails' );


    register_nav_menus( array(
        'top-menu'    => __( 'Top Menu', '' ),
        'footer-menu' => __( 'Footer Menu', '' ),
        'menu-2' => __( 'Menu 2', '' ),
    ));


    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active';
        }
        return $classes;
    };

    function add_link_atts($atts) {
        $atts['class'] = "nav-link";
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_link_atts');


    //print r function
    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    /* Add the logo code here */
    function custom_login_logo() {
        echo '<style type="text/css">
        h1 a {
            background-image: url('. get_template_directory_uri() .'/img/logo.png) !important;
            background-position: center center !important;
            background-size: contain !important;
            margin: 0 15px 25px !important;
            width: auto !important;
        }

        #login{
            background:#fff;
        }
        body{
            background:#e3e3e3;
        }
        </style>';
    }

    add_action('login_head', 'custom_login_logo');

    add_action('admin_head', 'thum_column_style');

    function thum_column_style() {
    echo '<style>
        .column-featured_thumb {
            width: 80px;
        }
        .column-featured_thumb img {
            max-width: 60px;
            height: auto;
        } 
    </style>';
    }

    function loginpage_custom_link() {
        return site_url();
    }

    add_filter('login_headerurl','loginpage_custom_link');

    function change_title_on_logo() {
        return get_bloginfo( 'name' );
    }

    add_filter('login_headertext', 'change_title_on_logo');
    /* end logo code */


    //jpeg_quality
    add_filter( 'jpeg_quality', 'ip_jpeg_quality' );
    function ip_jpeg_quality() {
    return 100;
    }

    //title trim
    function ip_title_trim($title, $character){
        $postfix = '';
        if( strlen($title) > $character) {
            $postfix = '...';
        }
        return substr($title,0,$character) . $postfix;
    }

    // //excerpt
    // function ip_excerpt($limit = 80) {
    //     $excerpt = get_the_content();
    //     $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    //     $excerpt = strip_shortcodes($excerpt);
    //     $excerpt = strip_tags($excerpt);
    //     $excerpt = substr($excerpt, 0, $limit);
    //     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    //     $excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
    //     $excerpt = $excerpt.'...';
    //     return '<p>'.$excerpt.'</p>';    
    // }

    // function custom_ip_excerpt($limit = 80, $cont) {
    //     $excerpt = $cont;
    //     $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    //     $excerpt = strip_shortcodes($excerpt);
    //     $excerpt = strip_tags($excerpt);
    //     $excerpt = substr($excerpt, 0, $limit);
    //     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    //     $excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
    //     $excerpt = $excerpt.'...';
    //     return '<p>'.$excerpt.'</p>';    
    // }


    // function ip_excerpt($limit = 20) {
    //     $excerpt = explode(' ', get_the_excerpt(), $limit);
    //     if (count($excerpt) >= $limit) {
    //       array_pop($excerpt);
    //       $excerpt = implode(" ",$excerpt).'...';
    //     } else {
    //       $excerpt = implode(" ",$excerpt);
    //     }    
    //     $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    //     return '<p>'.$excerpt.'</p>';
    // }


    // Disable Gutenberg
    add_filter('use_block_editor_for_post', '__return_false');

?>

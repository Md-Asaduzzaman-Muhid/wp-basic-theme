<?php
/* DW-2.0 */
add_theme_support( 'post-thumbnails');
add_post_type_support( 'page', 'excerpt' );
define( 'DISALLOW_FILE_EDIT', true );

function load_styles_and_scripts() {
  wp_enqueue_script('jquery', get_template_directory_uri() . '/resources/js/jquery-3.7.1.min', false, '3.7.1', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/resources/js/bootstrap.min.js', array( 'jquery' ), '',  true);
  wp_enqueue_script('owl-js', get_template_directory_uri() . '/resources/js/owl.carousel.min.js');
  // wp_enqueue_script('leaflet-js', get_template_directory_uri()."/resources/js/leaflet.js", false, false, true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/resources/js/wow.js', false, false, true);
  wp_enqueue_script('easing-js', get_template_directory_uri() . '/resources/js/easing.min.js', false, false, true);
  wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/resources/js/waypoints.min.js', false, false, true);
  wp_enqueue_script('counterup-js', get_template_directory_uri() . '/resources/js/counterup.min.js', false, false, true);
  wp_enqueue_script('isotope-js', get_template_directory_uri() . '/resources/js/isotope.pkgd.min.js', false, false, true);
  wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/resources/js/lightbox.min.js', false, false, true);

  wp_enqueue_script('global', get_template_directory_uri() . '/resources/js/global.js');


 
  wp_enqueue_style('bootstrap-css', get_template_directory_uri()."/resources/css/bootstrap.min.css");
  // wp_enqueue_style('leaflet-style', get_template_directory_uri()."/resources/css/leaflet.css");
  wp_enqueue_style('owl-style', get_template_directory_uri()."/resources/css/owl.carousel.min.css");
  wp_enqueue_style('animate-style', get_template_directory_uri()."/resources/css/animate.min.css");
  wp_enqueue_style('lightbox-style', get_template_directory_uri()."/resources/css/lightbox.min.css");
  wp_enqueue_script('theme', get_template_directory_uri() . '/js/theme.js', false, false, true);
  wp_enqueue_style('style', get_template_directory_uri()."/style.css");
}



add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
add_filter('use_default_gallery_style', '__return_false');

function cut_text_by_words($text, $count = 60, $findby = ' ', $after = '...'){
	if ($text=="" || strlen($text) <= $count)
		return;
	$excerpt = $text;
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, $count);
	$lastspace = strrpos($the_str, $findby);
	$ret = substr($the_str, 0, $lastspace);
	if ($findby==' ' && $ret[count($ret)-1]!='.')
		$ret .= $after;
	return $ret;
}

function my_enqueue( $hook ) {
    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/js/jquery-ui.min.js' );
}
add_action('admin_head', 'my_enqueue');

/* Tworzenie sidebara */
register_sidebar ( array(
  'name'          => 'sidebar',
  'id'            => 'sidebar',
  'description'   => '',
  'before_widget' => '<div class="panel">',
  'after_widget'  => '</div>',
  'before_title'  => '',
  'after_title'   => ''
));

// add_filter('rest_authentication_errors', 'wpzen_disable_rest_api', 99);
// function wpzen_disable_rest_api() {
// 	return new WP_Error('wpzen_rest_api_disabled', 'REST API disables', array('status' => 403));
// }

//dodatkowe ustawienia strony
$my_options[] = array('phone', 'Telefon');
$my_options[] = array('phone2', 'Telefon 2');
$my_options[] = array('fax', 'Fax');
$my_options[] = array('e-mail', 'E-mail');
$my_options[] = array('address', 'Adres');
$my_options[] = array('address_line1', 'Adres - linia 1');
$my_options[] = array('address_line2', 'Adres - linia 2');
$my_options[] = array('opening_hour', 'Opening Hour');
$my_options[] = array('facebook', 'Facebook');
$my_options[] = array('twitter-x', 'Twitter-X');
$my_options[] = array('instagram', 'Instagram');
$my_options[] = array('youtube', 'Youtube');
$my_options[] = array('tiktok', 'Tiktok');


add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
	add_options_page('Dodatkowe ustawienia mojej strony', 'Moje ustawienia', 'manage_options', 'my_settings_page', 'my_settings_page');
	add_action( 'admin_init', 'register_my_settings' );
}
function register_my_settings() {
	global $my_options;
	foreach($my_options as $option) {
		register_setting( 'my_settings', $option[0] );
	}
}
function my_settings_page() {
	global $my_options; ?>
<div class="wrap">
<h1>Dodatkowe ustawienia mojej strony</h1>
<form method="post" action="options.php">
	<?php settings_fields( 'my_settings' ); ?>
	<?php do_settings_sections( 'my_settings' ); ?>
	<table class="form-table">
	<?php foreach($my_options as $option): ?>
		<tr valign="top">
			<th scope="row"><?php echo $option[1] ?></th>
			<td><input type="text" size=90 name="<?php echo $option[0] ?>" value="<?php echo esc_attr( get_option( $option[0] ) ); ?>" /></td>
			<td><i><?php echo $option[0] ?></i></td>
		</tr>
	<?php endforeach ?>
	</table>
	<?php submit_button(); ?>
</form>
</div>
<i>Aby dodać nowe pole dopisz w pliku <b>functions.php</b> nową deklarację: <b>$my_options[] = array('slug', 'nazwa');</b></i>
<?php }



//logo przy logowaniu
function my_login_logo() {
    ?>
    <style type="text/css">
        body, html {
            background: #fff !important;
        }
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.<?php echo (file_exists(get_template_directory() . '/img/logo.png') ? 'png' : 'jpg') ?>)!important;
            padding-bottom: 10px!important;
            width: 320px!important;
            height: 120px!important;
            background-size: initial!important;
        }
        .login form {
            -webkit-box-shadow:  0 3px 15px rgba(0,0,0,.5);
            box-shadow: 0 3px 15px rgba(0,0,0,.5);

        }
        .iplus_logo {
            text-align: center;
            padding-top: 10px;

        }
        .iplus_logo a{ color: #C0120F; text-decoration: none;}
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'my_login_logo');
function my_addition_to_login_footer() {
    echo '<div class="iplus_logo"><a href="https://www.iosoup.com/" target="_blank"><div>ioSoup Digital Agency</div><img src="https://iosoup.com/wp-content/themes/ipsoup/img/logo.png" >'
    . '</a></div>';
}
add_action('login_footer', 'my_addition_to_login_footer');
?>

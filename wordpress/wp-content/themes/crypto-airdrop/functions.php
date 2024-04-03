<?php
/**
 * Theme Functions
 *
 * @package Crypto AirDrop.
 */

//Crypto AirDrop Theme URL
define("CRYPTOAIRDROP_THEME_URL", get_template_directory_uri());
define("CRYPTOAIRDROP_THEME_DIR", get_template_directory());

// Theme version.
$cryptoairdrop_theme = wp_get_theme();
define('CRYPTOAIRDROP_THEME_VERSION', $cryptoairdrop_theme->get('Version'));
define('CRYPTOAIRDROP_THEME_NAME', $cryptoairdrop_theme->get('Name'));

//Customizer comments display
require_once 'custom-comments.php';

//Crypto AirDrop Theme Option Panel CSS and JS Backend
add_action('wp_enqueue_scripts', 'cryptoairdrop_backend_resources');

// On theme activation add defaults theme settings and data
add_action('after_setup_theme', 'Cryptoairdrop_Default_Theme_Options_Setup', 'theme_prefix_setup');

/**
 * Crypto Default Theme Options
 * 
 * @return hooks.
 */
function Cryptoairdrop_Default_Theme_Options_setup()
{

    // Add Theme support Title Tag
    add_theme_support('title-tag');

    // Logo
    add_theme_support(
        'custom-logo', array(
        'default-image' => get_stylesheet_directory_uri() . '/img/logo.jpg',
        'width'            => 250,
        'height'        => 250,
        'flex-width'    => true,
        'flex-height'    => true,
        )
    );

    // Set the content_width with 900
    if (! isset($content_width) ) { 
        $content_width = 900; 
    }

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background', apply_filters(
            'cryptoairdrop_custom_background_args', 
            array(
            'default-color' => 'ffffff',
            'default-image' => '',
            ) 
        )
    );

    add_editor_style('css/editor-style.css');

    //Featured Image
    add_theme_support('post-thumbnails'); 

    //RSS Feed
    add_theme_support('automatic-feed-links');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // woo-commerce theme support
    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-zoom');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');

}

/**
 * Custom theme background by customizer
 * 
 * @return hook.
 */
function Cryptoairdrop_Custom_Background_function()
{
    $page_bg_image_url = get_theme_mod('predefined_back_image', 'bg-1.png');
    if ($page_bg_image_url != '') {
        echo '<style>body.boxed{ background-image:url("'.CRYPTOAIRDROP_THEME_URL.'/assets/img/bg-patterns/'.$page_bg_image_url.'");}</style>';
    }
}
add_action('wp_head', 'Cryptoairdrop_Custom_Background_function', 10, 0);

/**
 * Crypto AirDrop - Load Theme Option Panel CSS and JS Start
 * 
 * @return hook.
 **/
function Cryptoairdrop_Backend_resources()
{

    //CSS
    wp_enqueue_style('bootstrap-min-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/animate.css');

    wp_enqueue_style('crypto-airdrop-all-min-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/all.min.css');
    wp_enqueue_style('font-awesome-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/font-awesome/css/font-awesome.min.css');

    wp_enqueue_style('owl-carousel-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('crypto-airdrop-token-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/token.css');
    wp_enqueue_style('crypto-airdrop-menu-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/menu.css');
    wp_enqueue_style('crypto-airdrop-footer-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/footer.css');

    wp_enqueue_style('crypto-airdrop-skin-default-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/skin-default.css');
    wp_enqueue_style('crypto-airdrop-logo-css', CRYPTOAIRDROP_THEME_URL . '/assets/css/logo.css');
    wp_enqueue_style('crypto-airdrop-style', get_stylesheet_uri());

    //Google Fonts Library
    wp_enqueue_style('OpenSans-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,500,600,600i,700,700i,800', false); 
    wp_enqueue_style('Montserrat-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,700,800,900', false); 


    //Comment reply enable
    wp_enqueue_script('comment-reply');

    //JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('crypto-airdrop-menu-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/menu.js', array('jquery'), '', true);
    wp_enqueue_script('crypto-airdrop-mobile-menu-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/mobile-menu.js', array('jquery'), '', true);
    wp_enqueue_script('crypto-airdrop-bootstrap-min-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('resize-observer-polyfill', CRYPTOAIRDROP_THEME_URL . '/assets/js/ResizeObserver.min.js', array('jquery'), '', true);
    wp_enqueue_script('particles-min-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/particles.min.js');

    wp_enqueue_script('owl-carousel-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('crypto-airdrop-main-js', CRYPTOAIRDROP_THEME_URL . '/assets/js/main.js');


}
//Crypto AirDrop - Load Theme Option Panel CSS and JS End

/**
 * Enqueue customizer scripts and styles.
 */
function Cryptoairdrop_Customizer_script()
{
    wp_enqueue_style('crypto-airdrop-customize-css', get_template_directory_uri().'/inc/customizer/assets/css/customize.css', CRYPTOAIRDROP_THEME_VERSION, 'screen');
    wp_enqueue_script('crypto-airdrop-customizer-script', get_template_directory_uri() .'/inc/customizer/assets/js/customizer-section.js', array("jquery"), '', true);    
}
add_action('customize_controls_enqueue_scripts', 'Cryptoairdrop_Customizer_script');

/**
 * Enqueue admin scripts and styles. Only For Free version
 */
function Cryptoairdrop_Admin_Enqueue_scripts()
{
    wp_enqueue_style('crypto-airdrop-admin-style', get_template_directory_uri() . '/inc/admin/css/admin.css');
    wp_enqueue_script('crypto-airdrop-admin-script', get_template_directory_uri() . '/inc/admin/js/cryptoairdrop-admin-script.js', array( 'jquery' ), '', true);
    wp_localize_script(
        'crypto-airdrop-admin-script', 'cryptoairdrop_ajax_object',
        array( 'ajax_url' => admin_url('admin-ajax.php') )
    );
    // For Selector Scroller
    wp_enqueue_style('crypto-airdrop-selector-scroll-style', get_template_directory_uri() . '/inc/customizer/assets/css/customize.css');
    wp_enqueue_script('crypto-airdrop-customizer-sections', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-section.js', array( 'jquery' ), '', true);
}
add_action('admin_enqueue_scripts', 'Cryptoairdrop_Admin_Enqueue_scripts');


/**
 * Register Custom Menu
 * 
 * @return hook.
 */
function Cryptoairdrop_menu()
{
    register_nav_menu('primary-menu', __('Primary Menu', 'crypto-airdrop'));
}
add_action('init', 'Cryptoairdrop_menu');

/**
 * Customizer additions.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-customizer.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-customizer-options.php';


/**
 * Typography setting.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/cryptoairdrop-typography.php';

/**
 * Colors setting.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/custom-theme-colors.php';

/**
 * Excerpt setting.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/excerpt.php';


/**
 * Blog Pagination (usefull for All Page Templates)
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/pagination/blog-pagination.php';


/**
 * Crypto AirDrop Widgets 
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/widgets/sidebars.php';
//Crypto AirDrop Widgets 

/**
 * Register Custom Navigation Walker
 * 
 * @return hook.
 */
function Cryptoairdrop_Register_navwalker()
{
    include CRYPTOAIRDROP_THEME_DIR . '/inc/menu/cryptoairdrop-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'Cryptoairdrop_Register_navwalker');

/**
 * Implement the Theme Custom Header feature.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/custom-header.php';


/**
 * Skip Link
 * 
 * @return hook.
 */
function Cryptoairdrop_Skip_To_content()
{
    echo '<a class="skip-link screen-reader-text" href="#site-content">'. esc_html__('Skip to content', 'crypto-airdrop') .'</a>';
}
add_action('wp_body_open', 'Cryptoairdrop_Skip_To_content', 5);

/**
 * Extra theme functions.
 */
require CRYPTOAIRDROP_THEME_DIR . '/inc/cryptoairdrop-theme-function.php';

/**
 * Admin page.
 */
 
//$cryptoairdrop_theme = wp_get_theme();
//if ( 'Crypto AirDrop' == $cryptoairdrop_theme->name) {
	if ( is_admin() ) {
		require CRYPTOAIRDROP_THEME_DIR . '/inc/admin/getting-started.php';
	}
//}


/**
 * Recommended Plugins
 */
function Cryptoairdrop_plugin_recommend() {
	$plugins = array(
		array(
			'name'     => 'Filter Gallery',
			'slug'     => 'filter-gallery',
			'required' => false,
		),
		array(
			'name'     => 'Slider Factory',
			'slug'     => 'slider-factory',
			'required' => false,
		),
		array(
			'name'     => 'Flickr Album Gallery',
			'slug'     => 'flickr-album-gallery',
			'required' => false,
		),
        array(
			'name'     => 'Coming Soon',
			'slug'     => 'coming-soon-maintenance-mode',
			'required' => false,
		),
	);
	tgmpa( $plugins );
}
add_action( 'tgmpa_register', 'Cryptoairdrop_plugin_recommend' );

// TGM Plugin File
require CRYPTOAIRDROP_THEME_DIR . '/class-tgm-plugin-activation.php';
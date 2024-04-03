<?php
/**
 * Dog Pet House functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dog_pet_house
 */

$dog_pet_house_theme_data = wp_get_theme();
if( ! defined( 'DOG_PET_HOUSE_THEME_VERSION' ) ) define ( 'DOG_PET_HOUSE_THEME_VERSION', $dog_pet_house_theme_data->get( 'Version' ) );
if( ! defined( 'DOG_PET_HOUSE_THEME_NAME' ) ) define( 'DOG_PET_HOUSE_THEME_NAME', $dog_pet_house_theme_data->get( 'Name' ) );
if( ! defined( 'DOG_PET_HOUSE_THEME_TEXTDOMAIN' ) ) define( 'DOG_PET_HOUSE_THEME_TEXTDOMAIN', $dog_pet_house_theme_data->get( 'TextDomain' ) );

if ( ! defined( 'DOG_PET_HOUSE_VERSION' ) ) {
	define( 'DOG_PET_HOUSE_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dog_pet_house_setup' ) ) :
	
	function dog_pet_house_setup() {
		
		load_theme_textdomain( 'dog-pet-house', get_template_directory() . '/languages' );

		add_theme_support( 'woocommerce' );

		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'dog-pet-house' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'woocommerce',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'dog_pet_house_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'dog_pet_house_setup' );

function dog_pet_house_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dog_pet_house_content_width', 640 );
}
add_action( 'after_setup_theme', 'dog_pet_house_content_width', 0 );

function dog_pet_house_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dog-pet-house' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dog-pet-house' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);

	// Regsiter 4 footer widgets.
	// Regsiter 4 footer widgets.
	$dog_pet_house_footer_widget_column = get_theme_mod('dog_pet_house_footer_widget_column','4');
	for ($i=1; $i<=$dog_pet_house_footer_widget_column; $i++) {
		register_sidebar( array(
			'name' => __( 'Footer  ', 'dog-pet-house' )  . $i,
			'id' => 'dog-pet-house-footer-widget-' . $i,
			'description' => __( 'The Footer Widget Area', 'dog-pet-house' )  . $i,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<div class="widget-header"><h4 class="widget-title">',
			'after_title' => '</h4></div>',
		) );
	}
}
add_action( 'widgets_init', 'dog_pet_house_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dog_pet_house_scripts() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Slick style.
	wp_enqueue_style( 'dog-pet-house-slick-style', get_template_directory_uri() . '/resource/css/slick' . $min . '.css', array(), '1.8.1' );

	// Fontawesome style.
	wp_enqueue_style( 'dog-pet-house-fontawesome-style', get_template_directory_uri() . '/resource/css/fontawesome' . $min . '.css', array(), '5.15.4' );

	// Main style.
	wp_enqueue_style( 'dog-pet-house-style', get_template_directory_uri() . '/style.css', array(), DOG_PET_HOUSE_VERSION );

	// Navigation script.
	wp_enqueue_script( 'dog-pet-house-navigation-script', get_template_directory_uri() . '/resource/js/navigation' . $min . '.js', array(), DOG_PET_HOUSE_VERSION, true );

	// Slick script.
	wp_enqueue_script( 'dog-pet-house-slick-script', get_template_directory_uri() . '/resource/js/slick' . $min . '.js', array( 'jquery' ), '1.8.1', true );

	// Custom script.
	wp_enqueue_script( 'dog-pet-house-custom-script', get_template_directory_uri() . '/resource/js/custom.js', array( 'jquery' ), DOG_PET_HOUSE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Include the file.
	require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

	// Load the webfont.
	wp_enqueue_style(
		'lilita-one',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lilita+One&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'kodchasan',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap' ),
		array(),
		'1.0'
	);

}
add_action( 'wp_enqueue_scripts', 'dog_pet_house_scripts' );

/**
 * Include wptt webfont loader.
 */
require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/theme-library/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/theme-library/function-files/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/theme-library/function-files/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-library/customizer.php';

/**
 * Breadcrumb
 */
require get_template_directory() . '/theme-library/function-files/class-breadcrumb-trail.php';

/**
 * Getting Started
*/
require get_template_directory() . '/theme-library/getting-started/getting-started.php';





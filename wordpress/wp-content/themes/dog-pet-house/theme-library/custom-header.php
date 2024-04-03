<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package dog_pet_house
 */

function dog_pet_house_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'dog_pet_house_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'dog_pet_house_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'dog_pet_house_custom_header_setup' );

if ( ! function_exists( 'dog_pet_house_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'dog_pet_house_header_style' );
function dog_pet_house_header_style() {
	if ( get_header_image() ) :
	$dog_pet_house_custom_css = "
        .home header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'dog-pet-house-style', $dog_pet_house_custom_css );
	endif;
}
endif;
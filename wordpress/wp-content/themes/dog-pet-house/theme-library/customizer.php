<?php

/**
 * Dog Pet House Theme Customizer
 *
 * @package dog_pet_house
 */

// Sanitize callback.
require get_template_directory() . '/theme-library/customizer/sanitize-callback.php';

// Active Callback.
require get_template_directory() . '/theme-library/customizer/active-callback.php';

// Custom Controls.
require get_template_directory() . '/theme-library/customizer/custom-controls/custom-controls.php';

// Icon Controls.
require get_template_directory() . '/theme-library/customizer/custom-controls/icon-control.php';

function dog_pet_house_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'dog_pet_house_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'dog_pet_house_customize_partial_blogdescription',
			)
		);
	}

	// Upsell Section.
	$wp_customize->add_section(
		new Dog_Pet_House_Upsell_Section(
			$wp_customize,
			'upsell_section',
			array(
				'title'            => __( 'Dog Pet House Pro', 'dog-pet-house' ),
				'button_text'      => __( 'Buy Pro', 'dog-pet-house' ),
				'url'              => 'https://asterthemes.com/products/pet-house-wordpress-theme/',
				'background_color' => '#6839cc',
				'text_color'       => '#fff',
				'priority'         => 0,
			)
		)
	);

	// Theme Options.
	require get_template_directory() . '/theme-library/customizer/theme-options.php';

	// Front Page Options.
	require get_template_directory() . '/theme-library/customizer/front-page-options.php';

	// Colors.
	require get_template_directory() . '/theme-library/customizer/colors.php';

}
add_action( 'customize_register', 'dog_pet_house_customize_register' );

function dog_pet_house_customize_partial_blogname() {
	bloginfo( 'name' );
}

function dog_pet_house_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function dog_pet_house_customize_preview_js() {
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'dog-pet-house-customizer', get_template_directory_uri() . '/resource/js/customizer' . $min . '.js', array( 'customize-preview' ), DOG_PET_HOUSE_VERSION, true );
}
add_action( 'customize_preview_init', 'dog_pet_house_customize_preview_js' );

function dog_pet_house_custom_control_scripts() {
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'dog-pet-house-custom-controls-css', get_template_directory_uri() . '/resource/css/custom-controls' . $min . '.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'dog-pet-house-custom-controls-js', get_template_directory_uri() . '/resource/js/custom-controls' . $min . '.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'dog_pet_house_custom_control_scripts' );

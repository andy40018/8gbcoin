<?php

/**
 * Footer Options
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_footer_options',
	array(
		'panel' => 'dog_pet_house_theme_options',
		'title' => esc_html__( 'Footer Options', 'dog-pet-house' ),
	)
);
	// column // 
$wp_customize->add_setting(
	'dog_pet_house_footer_widget_column',
	array(
        'default'			=> '4',
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
		
	)
);	

$wp_customize->add_control(
	'dog_pet_house_footer_widget_column',
	array(
	    'label'   		=> __('Select Widget Column','dog-pet-house'),
	    'section' 		=> 'dog_pet_house_footer_options',
		'type'			=> 'select',
		'choices'        => 
		array(
			'' => __( 'None', 'dog-pet-house' ),
			'1' => __( '1 Column', 'dog-pet-house' ),
			'2' => __( '2 Column', 'dog-pet-house' ),
			'3' => __( '3 Column', 'dog-pet-house' ),
			'4' => __( '4 Column', 'dog-pet-house' )
		) 
	) 
);

$wp_customize->add_setting(
	'dog_pet_house_footer_copyright_text',
	array(
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'dog_pet_house_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'dog-pet-house' ),
		'section'  => 'dog_pet_house_footer_options',
		'settings' => 'dog_pet_house_footer_copyright_text',
		'type'     => 'textarea',
	)
);
//  Image // 
$wp_customize->add_setting('footer_background_color_setting', array(
    'default' => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color_setting', array(
    'label' => __('Footer Background Color', 'dog-pet-house'),
    'section' => 'dog_pet_house_footer_options',
)));

// Footer Background Image Setting
$wp_customize->add_setting('footer_background_image_setting', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_background_image_setting', array(
    'label' => __('Footer Background Image', 'dog-pet-house'),
    'section' => 'dog_pet_house_footer_options',
)));
// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'dog_pet_house_scroll_top',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'dog-pet-house' ),
			'section' => 'dog_pet_house_footer_options',
		)
	)
);
// icon // 
$wp_customize->add_setting(
	'dog_pet_house_scroll_btn_icon',
	array(
        'default' => 'fas fa-chevron-up',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Aster_Change_Icon_Control($wp_customize, 
	'dog_pet_house_scroll_btn_icon',
	array(
	    'label'   		=> __('Scroll Top Icon','dog-pet-house'),
	    'section' 		=> 'dog_pet_house_footer_options',
		'iconset' => 'fa',
	))  
);
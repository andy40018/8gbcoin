<?php

/**
 * Header Options
 *
 * @package dog_pet_house
 */

// General Options
$wp_customize->add_section(
	'dog_pet_house_general_options',
	array(
		'panel' => 'dog_pet_house_theme_options',
		'title' => esc_html__( 'General Options', 'dog-pet-house' ),
	)
);

// General Options - Enable Preloader.
$wp_customize->add_setting(
	'dog_pet_house_enable_preloader',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'dog-pet-house' ),
			'section' => 'dog_pet_house_general_options',
		)
	)
);

// Site Title - Enable Setting.
$wp_customize->add_setting(
	'dog_pet_house_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Disable Site Title', 'dog-pet-house' ),
			'section'  => 'title_tagline',
			'settings' => 'dog_pet_house_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'dog_pet_house_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'dog-pet-house' ),
			'section'  => 'title_tagline',
			'settings' => 'dog_pet_house_enable_tagline_setting',
		)
	)
);

$wp_customize->add_section(
	'dog_pet_house_header_options',
	array(
		'panel' => 'dog_pet_house_theme_options',
		'title' => esc_html__( 'Header Options', 'dog-pet-house' ),
	)
);

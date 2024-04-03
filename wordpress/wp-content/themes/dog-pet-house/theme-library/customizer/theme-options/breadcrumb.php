<?php

/**
 * Breadcrumb
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'dog-pet-house' ),
		'panel' => 'dog_pet_house_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'dog_pet_house_enable_breadcrumb',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'dog-pet-house' ),
			'section' => 'dog_pet_house_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'dog_pet_house_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'dog_pet_house_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'dog-pet-house' ),
		'active_callback' => 'dog_pet_house_is_breadcrumb_enabled',
		'section'         => 'dog_pet_house_breadcrumb',
	)
);

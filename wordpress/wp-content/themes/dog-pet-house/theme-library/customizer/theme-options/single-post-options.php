<?php

/**
 * Single Post Options
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_single_post_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'dog-pet-house' ),
		'panel' => 'dog_pet_house_theme_options',
	)
);


// Post Options - Hide Date.
$wp_customize->add_setting(
	'dog_pet_house_single_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_single_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'dog-pet-house' ),
			'section' => 'dog_pet_house_single_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'dog_pet_house_single_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_single_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'dog-pet-house' ),
			'section' => 'dog_pet_house_single_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'dog_pet_house_single_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_single_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'dog-pet-house' ),
			'section' => 'dog_pet_house_single_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'dog-pet-house' ),
			'section' => 'dog_pet_house_single_post_options',
		)
	)
);

<?php

/**
 * Post Options
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'dog-pet-house' ),
		'panel' => 'dog_pet_house_theme_options',
	)
);

// Post Options - Hide Feature Image.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_feature_image',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Hide Featured Image', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Hide Post Heading.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_post_heading',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Hide Post Heading', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Hide Post Content.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_post_content',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Hide Post Content', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
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
			'section' => 'dog_pet_house_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'dog_pet_house_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'dog-pet-house' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'dog_pet_house_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'dog-pet-house' ),
		'section'  => 'dog_pet_house_post_options',
		'settings' => 'dog_pet_house_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'dog_pet_house_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'dog-pet-house' ),
			'section' => 'dog_pet_house_post_options',
		)
	)
);

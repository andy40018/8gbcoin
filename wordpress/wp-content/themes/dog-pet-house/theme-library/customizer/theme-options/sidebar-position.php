<?php

/**
 * Sidebar Position
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'dog-pet-house' ),
		'panel' => 'dog_pet_house_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'dog_pet_house_sidebar_position',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'dog_pet_house_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'dog-pet-house' ),
		'section' => 'dog_pet_house_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'dog-pet-house' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'dog-pet-house' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'dog-pet-house' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'dog_pet_house_post_sidebar_position',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'dog_pet_house_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'dog-pet-house' ),
		'section' => 'dog_pet_house_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'dog-pet-house' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'dog-pet-house' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'dog-pet-house' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'dog_pet_house_page_sidebar_position',
	array(
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'dog_pet_house_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'dog-pet-house' ),
		'section' => 'dog_pet_house_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'dog-pet-house' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'dog-pet-house' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'dog-pet-house' ),
		),
	)
);

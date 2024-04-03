<?php

/**
 * Pagination
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_pagination',
	array(
		'panel' => 'dog_pet_house_theme_options',
		'title' => esc_html__( 'Pagination', 'dog-pet-house' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'dog_pet_house_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'dog-pet-house' ),
			'section'  => 'dog_pet_house_pagination',
			'settings' => 'dog_pet_house_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'dog_pet_house_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
	)
);

$wp_customize->add_control(
	'dog_pet_house_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'dog-pet-house' ),
		'section'         => 'dog_pet_house_pagination',
		'settings'        => 'dog_pet_house_pagination_type',
		'active_callback' => 'dog_pet_house_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'dog-pet-house' ),
			'numeric' => __( 'Numeric', 'dog-pet-house' ),
		),
	)
);

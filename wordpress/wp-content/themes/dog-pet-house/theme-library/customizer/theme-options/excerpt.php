<?php

/**
 * Excerpt
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_excerpt_options',
	array(
		'panel' => 'dog_pet_house_theme_options',
		'title' => esc_html__( 'Excerpt', 'dog-pet-house' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'dog_pet_house_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'dog_pet_house_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'dog-pet-house' ),
		'section'     => 'dog_pet_house_excerpt_options',
		'settings'    => 'dog_pet_house_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);
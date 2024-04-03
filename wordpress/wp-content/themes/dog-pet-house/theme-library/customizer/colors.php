<?php

/**
 * Color Option
 *
 * @package dog_pet_house
 */

// Primary Color.
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#6839cc',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => __( 'Primary Color', 'dog-pet-house' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);

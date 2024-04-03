<?php

/**
 * Banner Section
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_banner_section',
	array(
		'panel'    => 'dog_pet_house_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'dog-pet-house' ),
		'priority' => 10,
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'dog_pet_house_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'dog-pet-house' ),
			'section'  => 'dog_pet_house_banner_section',
			'settings' => 'dog_pet_house_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'dog_pet_house_enable_banner_section',
		array(
			'selector' => '#dog_pet_house_banner_section .section-link',
			'settings' => 'dog_pet_house_enable_banner_section',
		)
	);
}

// Banner Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'dog_pet_house_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'dog_pet_house_sanitize_select',
	)
);

$wp_customize->add_control(
	'dog_pet_house_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'dog-pet-house' ),
		'section'         => 'dog_pet_house_banner_section',
		'settings'        => 'dog_pet_house_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'dog_pet_house_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'dog-pet-house' ),
			'post' => esc_html__( 'Post', 'dog-pet-house' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {

	// Banner Section - Select Banner Post.
	$wp_customize->add_setting(
		'dog_pet_house_banner_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'dog_pet_house_banner_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'dog-pet-house' ), $i ),
			'section'         => 'dog_pet_house_banner_section',
			'settings'        => 'dog_pet_house_banner_slider_content_post_' . $i,
			'active_callback' => 'dog_pet_house_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => dog_pet_house_get_post_choices(),
		)
	);

	// Banner Section - Select Banner Page.
	$wp_customize->add_setting(
		'dog_pet_house_banner_slider_content_page_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'dog_pet_house_banner_slider_content_page_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Page %d', 'dog-pet-house' ), $i ),
			'section'         => 'dog_pet_house_banner_section',
			'settings'        => 'dog_pet_house_banner_slider_content_page_' . $i,
			'active_callback' => 'dog_pet_house_is_banner_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => dog_pet_house_get_page_choices(),
		)
	);

	// Banner Section - Button Label.
	$wp_customize->add_setting(
		'dog_pet_house_banner_button_label_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'dog_pet_house_banner_button_label_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Label %d', 'dog-pet-house' ), $i ),
			'section'         => 'dog_pet_house_banner_section',
			'settings'        => 'dog_pet_house_banner_button_label_' . $i,
			'type'            => 'text',
			'active_callback' => 'dog_pet_house_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Link.
	$wp_customize->add_setting(
		'dog_pet_house_banner_button_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'dog_pet_house_banner_button_link_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Button Link %d', 'dog-pet-house' ), $i ),
			'section'         => 'dog_pet_house_banner_section',
			'settings'        => 'dog_pet_house_banner_button_link_' . $i,
			'type'            => 'url',
			'active_callback' => 'dog_pet_house_is_banner_slider_section_enabled',
		)
	);
}

<?php
	$wp_customize->add_setting(
		'cryptoairdrop_excerpt_length',
		array(
			'capability'        => 'edit_theme_options',
			'default'           => 30,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'cryptoairdrop_excerpt_length',
		array(
			'type'        => 'number',
			'section'     => 'cryptoairdrop_excerpt_general', // Add a default or your own section.
			'label'       => __( 'Excerpt Length', 'crypto-airdrop' ),
			'description' => __( 'excerpt number of words', 'crypto-airdrop' ),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 300,
				'step'  => 5,
				'style' => 'width: 60px;',
			),
		)
	);

	$wp_customize->add_setting(
		'cryptoairdrop_excerpt_more_text',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => esc_html__( 'Continue reading', 'crypto-airdrop' ),
		)
	);

	$wp_customize->add_control(
		'cryptoairdrop_excerpt_more_text',
		array(
			'label'   => esc_html__( 'Button Text', 'crypto-airdrop' ),
			'section' => 'cryptoairdrop_excerpt_general',
			'type'    => 'text',
		)
	);



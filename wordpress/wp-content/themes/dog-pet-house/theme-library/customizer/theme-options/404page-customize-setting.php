<?php

/**
 * 404 page
 *
 * @package dog_pet_house
 */


/*=========================================
404 Page
=========================================*/
$wp_customize->add_section(
	'404_pg_options', array(
		'title' => esc_html__( '404 Page', 'dog-pet-house' ),
		'panel' => 'dog_pet_house_theme_options',
	)
);

/*=========================================
404 Page
=========================================*/
$wp_customize->add_setting(
	'dog_pet_house_pg_404_head_options'
		,array(
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
'dog_pet_house_pg_404_head_options',
	array(
		'type' => 'hidden',
		'label' => __('404 Page','dog-pet-house'),
		'section' => '404_pg_options',
	)
);

//  Title // 
$wp_customize->add_setting(
	'dog_pet_house_pg_404_ttl',
	array(
        'default'			=> __('404 Page Not Found','dog-pet-house'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'dog_pet_house_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'dog_pet_house_pg_404_ttl',
	array(
	    'label'   => __('Title','dog-pet-house'),
	    'section' => '404_pg_options',
		'type'           => 'text',
	)  
);

//  Description // 
$wp_customize->add_setting(
	'dog_pet_house_pg_404_text',
	array(
        'default'			=> __('Apologies, but the page you are seeking cannot be found.','dog-pet-house'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'dog_pet_house_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'dog_pet_house_pg_404_text',
	array(
	    'label'   => __('Description','dog-pet-house'),
	    'section' => '404_pg_options',
		'type'           => 'text',
	)  
);

//  Button Label // 
$wp_customize->add_setting(
	'dog_pet_house_pg_404_btn_lbl',
	array(
        'default'			=> __('Go Back Home','dog-pet-house'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'dog_pet_house_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'dog_pet_house_pg_404_btn_lbl',
	array(
	    'label'   => __('Button Label','dog-pet-house'),
	    'section' => '404_pg_options',
		'type'           => 'text',
	)  
);


//  Link // 
$wp_customize->add_setting(
	'dog_pet_house_pg_404_btn_link',
	array(
        'default'			=> esc_url( home_url( '/' )),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'dog_pet_house_sanitize_url',
	)
);	

$wp_customize->add_control( 
	'dog_pet_house_pg_404_btn_link',
	array(
	    'label'   => __('Link','dog-pet-house'),
	    'section' => '404_pg_options',
		'type'           => 'text',
	)  
);

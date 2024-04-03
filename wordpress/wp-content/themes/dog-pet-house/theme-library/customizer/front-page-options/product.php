<?php

/**
 * Service Section
 *
 * @package dog_pet_house
 */

$wp_customize->add_section(
	'dog_pet_house_products_section',
	array(
		'panel'    => 'dog_pet_house_front_page_options',
		'title'    => esc_html__( 'Product Section', 'dog-pet-house' ),
		'priority' => 10,
	)
);

// Service Section - Enable Section.
$wp_customize->add_setting(
	'dog_pet_house_enable_service_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'dog_pet_house_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Dog_Pet_House_Toggle_Switch_Custom_Control(
		$wp_customize,
		'dog_pet_house_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable Product Section', 'dog-pet-house' ),
			'section'  => 'dog_pet_house_products_section',
			'settings' => 'dog_pet_house_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'dog_pet_house_enable_service_section',
		array(
			'selector' => '#dog_pet_house_service_section .section-link',
			'settings' => 'dog_pet_house_enable_service_section',
		)
	);
}

// Service Section - Button Label.
$wp_customize->add_setting(
	'dog_pet_house_trending_product_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'dog_pet_house_trending_product_heading',
	array(
		'label'           => esc_html__( 'Heading', 'dog-pet-house' ),
		'section'         => 'dog_pet_house_products_section',
		'settings'        => 'dog_pet_house_trending_product_heading',
		'type'            => 'text',
		'active_callback' => 'dog_pet_house_is_product_section_enabled',
	)
);

if(class_exists('woocommerce')){

$dog_pet_house_args = array(
	'type'                     => 'product',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'term_group',
	'order'                    => 'ASC',
	'hide_empty'               => false,
	'hierarchical'             => 1,
	'number'                   => '',
	'taxonomy'                 => 'product_cat',
	'pad_counts'               => false
);
$dog_pet_house_categories = get_categories($dog_pet_house_args);
$cat_posts = array();
$m = 0;
$cat_posts[]='Select';
foreach($dog_pet_house_categories as $category){
	if($m==0){
		$default = $category->slug;
		$m++;
	}
	$cat_posts[$category->slug] = $category->name;
}

$wp_customize->add_setting('dog_pet_house_trending_product_category',array(
	'default'	=> 'select',
	'sanitize_callback' => 'dog_pet_house_sanitize_select',
));
$wp_customize->add_control('dog_pet_house_trending_product_category',array(
	'type'    => 'select',
	'choices' => $cat_posts,
	'label' => __('Select category to display products ','dog-pet-house'),
	'section' => 'dog_pet_house_products_section',
	'active_callback' => 'dog_pet_house_is_product_section_enabled',
));
}

<?php

/**
 * Front Page Options
 *
 * @package Dog Pet House
 */

$wp_customize->add_panel(
	'dog_pet_house_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'dog-pet-house' ),
		'priority' => 20,
	)
);

// Banner Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/banner.php';

// Tranding Product Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/product.php';
<?php

/**
 * Active Callbacks
 *
 * @package dog_pet_house
 */

// Theme Options.
function dog_pet_house_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'dog_pet_house_enable_pagination' )->value() );
}
function dog_pet_house_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'dog_pet_house_enable_breadcrumb' )->value() );
}

// Header Options.
function dog_pet_house_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'dog_pet_house_enable_topbar' )->value() );
}

// Banner Slider Section.
function dog_pet_house_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'dog_pet_house_enable_banner_section' )->value() );
}
function dog_pet_house_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'dog_pet_house_banner_slider_content_type' )->value();
	return ( dog_pet_house_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function dog_pet_house_is_banner_slider_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'dog_pet_house_banner_slider_content_type' )->value();
	return ( dog_pet_house_is_banner_slider_section_enabled( $control ) && ( 'page' === $content_type ) );
}

// Places section.
function dog_pet_house_is_product_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'dog_pet_house_enable_service_section' )->value() );
}
function dog_pet_house_is_product_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'dog_pet_house_product_content_type' )->value();
	return ( dog_pet_house_is_product_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function dog_pet_house_is_product_section_and_content_type_page_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'dog_pet_house_product_content_type' )->value();
	return ( dog_pet_house_is_product_section_enabled( $control ) && ( 'page' === $content_type ) );
}
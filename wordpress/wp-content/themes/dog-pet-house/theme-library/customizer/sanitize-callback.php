<?php

function dog_pet_house_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function dog_pet_house_sanitize_switch( $input ) {
	if ( true === $input ) {
		return true;
	} else {
		return false;
	}
}

function dog_pet_house_sanitize_google_fonts( $input, $setting ) {
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize URL input.
 *
 * @param string $input URL input to sanitize.
 * @return string Sanitized URL.
 */
function dog_pet_house_sanitize_url( $input ) {
    return esc_url_raw( $input );
}
<?php

/**
 * Render homepage sections.
 */
function dog_pet_house_homepage_sections() {
	$homepage_sections = array_keys( dog_pet_house_get_homepage_sections() );

	foreach ( $homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}
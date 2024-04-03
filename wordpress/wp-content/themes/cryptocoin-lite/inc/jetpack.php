<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Cryptocoin Lite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function cryptocoin_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'cryptocoin_lite_jetpack_setup' );

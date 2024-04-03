<?php
if ( ! function_exists( 'cryptoairdrop_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 *
	 * @uses filter excerpt_length
	 *
	 * @since cryptoairdrop Pro 1.0
	 */
	function cryptoairdrop_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Customizer Options.
		$length = get_theme_mod( 'cryptoairdrop_excerpt_length', 30 );

		return absint( $length );
	}
	endif; // cryptoairdrop_excerpt_length.
	add_filter( 'excerpt_length', 'cryptoairdrop_excerpt_length', 999 );

if ( ! function_exists( 'cryptoairdrop_excerpt_more' ) ) :
	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a option from customizer
	 *
	 * @return string option from customizer prepended with an ellipsis.
	 */
	function cryptoairdrop_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		$more_tag_text = get_theme_mod( 'cryptoairdrop_excerpt_more_text', esc_html__( 'Continue Reading', 'crypto-airdrop' ) );

		$link = sprintf(
			'<p><a href="%1$s" class="btn btn-skin btn-radius">%2$s</a></p>',
			esc_url( get_permalink() ),
			/* translators: %s: Name of current post */
			wp_kses_data( $more_tag_text ) . '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
		);

		return $link;
	}
	endif;
	add_filter( 'excerpt_more', 'cryptoairdrop_excerpt_more' );

if ( ! function_exists( 'cryptoairdrop_custom_excerpt' ) ) :
	/**
	 * Adds Continue reading link to more tag excerpts.
	 *
	 * function tied to the get_the_excerpt filter hook.
	 *
	 * @since crypto-airdrop Pro 1.0
	 */
	function cryptoairdrop_custom_excerpt( $output ) {
		if ( has_excerpt() && ! is_attachment() ) {
			$more_tag_text = get_theme_mod( 'cryptoairdrop_excerpt_more_text', esc_html__( 'Continue Reading', 'crypto-airdrop' ) );

			$link = sprintf(
				'<p><a href="%1$s" class="btn btn-skin btn-radius">%2$s</a></p>',
				esc_url( get_permalink() ),
				/* translators: %s: Name of current post */
				wp_kses_data( $more_tag_text ) . '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
			);

			$link = ' &hellip; ' . $link;

			$output .= $link;
		}

		return $output;
	}
	endif; // cryptoairdrop_custom_excerpt.
	add_filter( 'get_the_excerpt', 'cryptoairdrop_custom_excerpt' );

if ( ! function_exists( 'cryptoairdrop_more_link' ) ) :
	/**
	 * Replacing Continue reading link to the_content more.
	 *
	 * function tied to the the_content_more_link filter hook.
	 *
	 * @since cryptoairdrop Pro 1.0
	 */
	function cryptoairdrop_more_link( $more_link, $more_link_text ) {
		$more_tag_text = get_theme_mod( 'cryptoairdrop_excerpt_more_text', esc_html__( 'Continue Reading', 'crypto-airdrop' ) );

		return ' &hellip; ' . str_replace( $more_link_text, wp_kses_data( $more_tag_text ), $more_link );
	}
	endif; // cryptoairdrop_more_link.
	add_filter( 'the_content_more_link', 'cryptoairdrop_more_link', 10, 2 );

<?php
/**
 * Override default customizer options.
 *
 * @package Crypto-AirDrop
 */

// Settings.
$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

if ( isset( $wp_customize->selective_refresh ) ) {

	/**
	 * Header Area
	 */

	// Site Title
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-branding-text .site-title',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdropo_customize_partial_blogname' ),
		)
	);

	// Site Tagline
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-branding-text .site-description',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdropo_customize_partial_blogdescription' ),
		)
	);

	/**
	 * Slider Area
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_slider_title',
		array(
			'selector'        => '.main-slider .caption-content .title',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_slider_title_render_callback' ),
		)
	);

	// Subtitle
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_slider_subtitle',
		array(
			'selector'        => '.main-slider .caption-content p',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_slider_subtitle_render_callback' ),
		)
	);

	// Buttons
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_slider_custom_text',
		array(
			'selector'        => '.main-slider .caption-content .flex-column',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_slider_ios_url_render_callback' ),
		)
	);

	// Media
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_main_slider_media_type',
		array(
			'selector'        => '.main-slider .slider-video',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_slider_video_link_render_callback' ),
		)
	);

	/**
	 * About
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_about_title',
		array(
			'selector'        => '.about .about-section .title',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_about_title_render_callback' ),
		)
	);

	// Subtitle
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_about_subtitle',
		array(
			'selector'        => '.about .about-section .subtitle',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_about_subtitle_render_callback' ),
		)
	);

	// Description
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_about_desc',
		array(
			'selector'        => '.about .about-section .description',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_about_desc_render_callback' ),
		)
	);

	// Buttons
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_about_button_text',
		array(
			'selector'        => '.about .about-section .about-btn',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_about_button_text_render_callback' ),
		)
	);

	// Image
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_about_image',
		array(
			'selector'        => '.about .about-image',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_about_image_render_callback' ),
		)
	);

	/**
	 * Feature
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_feature_title',
		array(
			'selector'        => '.features .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_feature_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_top_info_content',
		array(
			'selector'        => '.features .feature-content .feature-data',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_top_info_content_render_callback' ),
		)
	);

	// Image
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_feature_image',
		array(
			'selector'        => '.features .feature-content .f-image',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_feature_image_render_callback' ),
		)
	);

	/**
	 * Roadmap
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_roadmap_title',
		array(
			'selector'        => '.roadmap .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_roadmap_title_render_callback' ),
		)
	);

	// Content.
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_roadmap_content',
		array(
			'selector'        => '.roadmap .road-map-timeline',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_roadmap_content_render_callback' ),
		)
	);

	/**
	 * Documentation
	 */

		// Section Title.
		$wp_customize->selective_refresh->add_partial(
			'cryptoairdrop_docs_title',
			array(
				'selector'        => '.documents .section-title',
				'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_docs_title_render_callback' ),
			)
		);

		// Content.
		$wp_customize->selective_refresh->add_partial(
			'cryptoairdrop_docs_content',
			array(
				'selector'        => '.documents .docs_content',
				'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_docs_content_render_callback' ),
			)
		);


	/**
	 * FAQ
	 */

	// Title.
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_faq_title',
		array(
			'selector'        => '.faq .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_faq_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_faqs_content',
		array(
			'selector'        => '.faq .faq-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_faqs_content_render_callback' ),
		)
	);

	// Image
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_faq_image',
		array(
			'selector'        => '.faq .faq-content .faq-image',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_faq_image_render_callback' ),
		)
	);

	/**
	 * Team
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_team_area_title',
		array(
			'selector'        => '.team .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_team_area_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_team_content',
		array(
			'selector'        => '.team .team-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_team_content_render_callback' ),
		)
	);

	/**
	 * Blog
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_blog_area_title',
		array(
			'selector'        => '.home-blog .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_blog_area_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_theme_blog_category',
		array(
			'selector'        => '.home-blog .blog-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_theme_blog_category_render_callback' ),
		)
	);

	// Button
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_blog_btn_text',
		array(
			'selector'        => '.home-blog .btn-blog',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_blog_btn_text_render_callback' ),
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_excerpt_length',
		array(
			'selector'        => '.post .post-body p',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_excerpt_length_render_callback' ),
		)
	);

	/**
	 * Contact
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_contact_area_title',
		array(
			'selector'        => '.contact .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_contact_area_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_contact_content',
		array(
			'selector'        => '.contact .contact-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_contact_content_render_callback' ),
		)
	);

	/**
	 * Woocommerce
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_woocommerce_area_title',
		array(
			'selector'        => '.shop .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_woocommerce_area_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_woocommerce_content',
		array(
			'selector'        => '.shop .woocommerce-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_woocommerce_content_render_callback' ),
		)
	);

	/**
	 * Social
	 */

	// Title
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_social_area_title',
		array(
			'selector'        => '.social-media .section-header',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_social_area_title_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_social_content',
		array(
			'selector'        => '.social-media .social-media-content',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_social_content_render_callback' ),
		)
	);

	// Content
	$wp_customize->selective_refresh->add_partial(
		'cryptoairdrop_footer_copyright_text',
		array(
			'selector'        => '.footer-copyrights .site-info',
			'render_callback' => array( 'cryptoairdrop_Customizer_Partials', 'cryptoairdrop_footer_copyright_text_render_callback' ),
		)
	);

}

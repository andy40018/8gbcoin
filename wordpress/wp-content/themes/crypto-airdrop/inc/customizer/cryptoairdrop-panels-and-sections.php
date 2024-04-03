<?php
/**
 * Register customizer panels and sections.
 *
 * @package Crypto AirDrop
 */

/* Theme Settings. */

$wp_customize->add_panel(
    new cryptoairdrop_Customize_Panel(
        $wp_customize, 'cryptoairdrop_theme_settings', array(
        'priority'   => 28,
        'title'      => esc_html__('Theme Options', 'crypto-airdrop'),
        'capabitity' => 'edit_theme_options',
        ) 
    ) 
);
    

// Loading Icon
    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_loading_icon_settings', array(
            'title'          => esc_html__('Loading Icon', 'crypto-airdrop'),
            'panel'            => 'cryptoairdrop_theme_settings',
            'priority'      => 8,
            ) 
        ) 
    );
    
    // Top Bar Section
    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_topbar_settings', array(
            'title'          => esc_html__('Top Bar', 'crypto-airdrop'),
            'panel'            => 'cryptoairdrop_theme_settings',
            'priority'      => 10,
            ) 
        ) 
    );
    
    
    // Menu Section
    
    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_theme_menu_bar', array(
            'title'    => esc_html__('Menu Settings', 'crypto-airdrop'),
            'panel'    => 'cryptoairdrop_theme_settings',
            'priority' => 20,
            ) 
        ) 
    );


    // Blog Section

    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_blog_general', array(
            'title'    => esc_html__('Blog Settings', 'crypto-airdrop'),
            'panel'    => 'cryptoairdrop_theme_settings',
            'priority' => 30,
            ) 
        ) 
    );

	// Excerpt Section

    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_excerpt_general', array(
            'title'    => esc_html__('Excerpt Settings', 'crypto-airdrop'),
            'panel'    => 'cryptoairdrop_theme_settings',
            'priority' => 38,
            ) 
        ) 
    );


    // Page Header Section
    
    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_theme_page_header', array(
            'title'    => esc_html__('Page Header', 'crypto-airdrop'),
            'panel'    => 'cryptoairdrop_theme_settings',
            'priority' => 40,
            ) 
        ) 
    );


    // Page Title Section
    
    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_theme_page_title', array(
            'title'       => esc_html__('Page/Breadcrumb Title', 'crypto-airdrop'),
            'panel'       => 'cryptoairdrop_theme_settings',
            'priority'    => 45,
            ) 
        ) 
    );

    // Footer

    $wp_customize->add_section(
        new cryptoairdrop_Customize_Section(
            $wp_customize, 'cryptoairdrop_theme_footer', array(
            'title'    => esc_html__('Footer Settings', 'crypto-airdrop'),
            'panel'    => 'cryptoairdrop_theme_settings',
            'priority' => 50,
            ) 
        ) 
    );
    
        $wp_customize->add_section(
            new cryptoairdrop_Customize_Section(
                $wp_customize, 'cryptoairdrop_footer_widgets', array(
                'title'    => esc_html__('Footer Widgets', 'crypto-airdrop'),
                'panel'    => 'cryptoairdrop_theme_settings',
                'section'  => 'cryptoairdrop_theme_footer',
                'priority' => 10,
                ) 
            ) 
        );
        
        $wp_customize->add_section(
            new cryptoairdrop_Customize_Section(
                $wp_customize, 'cryptoairdrop_footer_copyright', array(
                'title'    => esc_html__('Footer Copyright', 'crypto-airdrop'),
                'panel'    => 'cryptoairdrop_theme_settings',
                'section'  => 'cryptoairdrop_theme_footer',
                'priority' => 20,
                ) 
            ) 
        );
		
	/**
	 * Panel: Typography
	 */
	$wp_customize->add_panel( new cryptoairdrop_Customize_Panel( $wp_customize, 'cryptoairdrop_theme_typography', array(
		'priority'   => 32,
		'title'      => esc_html__( 'Theme Typography', 'crypto-airdrop' ),
		'capabitity' => 'edit_theme_options',
	) ) );

		// Section: Typography > Enable typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_enable_disable_typography', array(
			'title'    => esc_html__( 'Enable Typography', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 5,
		) ) );
		
		// Section: Typography > Header typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_header_typography', array(
			'title'    => esc_html__( 'Header Typography', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 20,
		) ) );
		
		// Section: Slider > Homepage Section Slider.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_slider_typography', array(
			'title'    => esc_html__( 'Slider Typography', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 25,
		) ) );
		
		// Section: Typography > Homepage Section typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_homepage_typography', array(
			'title'    => esc_html__( 'Homepage Typography', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 30,
		) ) );
		
		// Section: Headings > Headings typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_headings_typography', array(
			'title'    => esc_html__( 'Headings Typography', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 30,
		) ) );
		
		// Section: Typography > Page typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_blog_archive_typography', array(
			'title'    => esc_html__( 'Blog / Archive / Single Post', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 45,
		) ) );
		
		// Section: Typography > Sidebar typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_sidebar_widget_typography', array(
			'title'    => esc_html__( 'Sidebar Widget', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 55,
		) ) );
		
		// Section: Typography > Footer typography.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_footer_widget_typography', array(
			'title'    => esc_html__( 'Footer Widget', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_typography',
			'priority' => 65,
		) ) );

	/**
	 * Panel: Colors & Background
	 */
	$wp_customize->add_panel( new cryptoairdrop_Customize_Panel( $wp_customize, 'cryptoairdrop_theme_colors', array(
		'priority'   => 32,
		'title'      => esc_html__( 'Theme Colors', 'crypto-airdrop' ),
		'capabitity' => 'edit_theme_options',
	) ) );

		// Section: Colors > Menu Color.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_primary_menu_colors', array(
			'title'    => esc_html__( 'Primary Menu', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_colors',
			'priority' => 10,
		) ) );
		
		// Section: Colors > Content.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_content_theme_colors', array(
			'title'    => esc_html__( 'Content', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_colors',
			'priority' => 10,
		) ) );

		// Section: Colors > Sidebar.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_sidebar_theme_colors', array(
			'title'    => esc_html__( 'Sidebar', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_colors',
			'priority' => 10,
		) ) );

		// Section: Colors > Footer.
		$wp_customize->add_section( new cryptoairdrop_Customize_Section( $wp_customize, 'cryptoairdrop_footer_theme_colors', array(
			'title'    => esc_html__( 'Footer', 'crypto-airdrop' ),
			'panel'    => 'cryptoairdrop_theme_colors',
			'priority' => 10,
		) ) );
    
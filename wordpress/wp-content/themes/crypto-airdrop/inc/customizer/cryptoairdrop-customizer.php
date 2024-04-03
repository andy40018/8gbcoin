<?php
/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */

 // Exit if accessed directly.
defined('ABSPATH') || exit;

if (! class_exists('cryptoairdrop_Customizer') ) :

    class cryptoairdrop_Customizer
    {
        
        // Constructor customizer
        public function __construct()
        {

            add_action('customize_register', array( $this, 'cryptoairdrop_customizer_panel_control' ));
            add_action('customize_register', array( $this, 'cryptoairdrop_customizer_register' ));
            add_action('customize_register', array( $this, 'cryptoairdrop_customizer_selective_refresh' ));
            add_action('customize_preview_init', array( $this, 'cryptoairdrop_customizer_preview_js' ));
            add_action('after_setup_theme', array( $this, 'cryptoairdrop_customizer_settings' ));
        }
        
        // Register custom controls
        public function cryptoairdrop_customizer_panel_control( $wp_customize )
        {

            // Load customizer options extending classes.
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/custom-customizer/cryptoairdrop-customizer-panel.php';
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/custom-customizer/cryptoairdrop-customizer-section.php';

            // Register extended classes.
            $wp_customize->register_panel_type('cryptoairdrop_Customize_Panel');
            $wp_customize->register_section_type('cryptoairdrop_Customize_Section');

            // Load base class for controls.
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-base-control.php';
            // Load custom control classes.
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-color-control.php';

            //portfolio (For Taxonomy Dropdown control)
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-dropdown-control.php';
            
            //menu (theme options)
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-heading-control.php';
            
            //Blog (theme options)
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-radio-image-control.php';
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-radio-buttonset-control.php';
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-sortable-control.php';
            
            //typography (theme settings)
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-toggle-control.php';
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-upgrade-control.php';

            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-slider-control.php';
            // Register JS-rendered control types.
            //    $wp_customize->register_control_type( 'cryptoairdrop_Customize_Color_Control' );
            
            //menu theme options
            $wp_customize->register_control_type('cryptoairdrop_Customize_Heading_Control'); 
        
            $wp_customize->register_control_type('cryptoairdrop_Customize_Radio_Image_Control');
            $wp_customize->register_control_type('cryptoairdrop_Customize_Radio_Buttonset_Control');
            $wp_customize->register_control_type('cryptoairdrop_Customize_Sortable_Control');
            $wp_customize->register_control_type('cryptoairdrop_Customize_Slider_Control');
            
            //typography settings
            $wp_customize->register_control_type('cryptoairdrop_Customize_Toggle_Control'); 
            $wp_customize->register_control_type('cryptoairdrop_Customize_Upgrade_Control');

        }

        // Customizer selective refresh.
        public function cryptoairdrop_customizer_selective_refresh()
        {

            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-customizer-sanitize.php';
            include_once CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-customizer-partials.php';

        }
        
        // Add postMessage support for site title and description for the Theme Customizer.
        public function cryptoairdrop_customizer_register( $wp_customize )
        {

            // Customizer selective
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-customizer-selective.php';

            // Register panels and sections.
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/cryptoairdrop-panels-and-sections.php';
        }
        
        // Site Title and Description instant change JS
        public function cryptoairdrop_customizer_preview_js()
        {
            wp_enqueue_script('cryptoairdrop_customizer_header', get_template_directory_uri() . '/inc/customizer/assets/js/site-title-customizer.js', array( 'customize-preview' ), '20151215', true);
        }
        
        public function cryptoairdrop_customizer_settings()
        {
    
            // Base class.
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/cryptoairdrop-customize-base-customizer-settings.php';
            
            // Loading Icon. (Theme Options Settings)
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-loading-icon-customizer-settings.php';
            
            // Menu (Theme Options Settings)
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-menu-bar-customizer-settings.php';
            
            // Page Header (Theme Options Settings)
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-page-header-customizer-settings.php';
            
            // Blog (Theme Options Settings)
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-blog-general-customizer-settings.php';
        
            // Footer (Theme Options Settings)
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-footer-copyright-customizer-settings.php';
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-footer-widget-customizer-settings.php';

            // Typography Settings
            include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-typography-customizer-settings.php';

			// Colors Settings
			require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-settings/theme-settings/cryptoairdrop-theme-colors-customizer-settings.php';

        }
    }
endif;

new cryptoairdrop_Customizer();

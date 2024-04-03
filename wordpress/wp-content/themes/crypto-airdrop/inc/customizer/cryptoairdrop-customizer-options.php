<?php
/**
 * Extend default customizer section.
 *
 * @package CryptoAirDrop
 *
 * @see    WP_Customize_Section
 * @access public
 */

require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/webfont.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-typography-control.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-plugin-control.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/controls/code/cryptoairdrop-customize-category-control.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/customizer-repeater/functions.php';
require CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/upgrade-to-pro.php';

function cryptoairdrop_customizer_theme_settings( $wp_customize )
{
    
    $active_callback   = isset($array['active_callback']) ? $array['active_callback'] : null;
    $selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
    
    // Site Title
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    
    // Site Title Color setting for on change color+display
    //$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    /* ALL Theme Optons Settings */
		// Menu Settings
		include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/theme-options/cryptoairdrop-menu-customizer.php';
		// Footer Settings
		include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/theme-options/cryptoairdrop-footer-customizer.php';
		// Excerpt Settings
		include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/theme-options/cryptoairdrop-excerpt-customizer.php';
    /* ALL Theme Optons Settings */
    
    /* Typography Settings */
    include CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/theme-options/cryptoairdrop-typography-customizer.php';

	/* Colors Settings */
	require( CRYPTOAIRDROP_THEME_DIR . '/inc/customizer/theme-options/cryptoairdrop-colors-customizer.php');	    

}
add_action('customize_register', 'cryptoairdrop_customizer_theme_settings');


/**
 Plugin 
 */
add_action('customize_register', 'cryptoairdrop_recommended_plugin_section');
function cryptoairdrop_recommended_plugin_section( $manager )
{
    // Register custom section types.
    $manager->register_section_type('cryptoairdrop_Customize_Recommended_Plugin_Section');
    // Register sections.
    $manager->add_section(
        new cryptoairdrop_Customize_Recommended_Plugin_Section(
            $manager,
            'cryptoairdrop_upgrade_to_pro_option',
            array(
                'title'       => esc_html__('Ready for more?', 'crypto-airdrop'),
                'priority'    => 500,
                'plugin_text' => esc_html__('Get cryptoairdrop Pro', 'crypto-airdrop'),
                'plugin_url'  => 'https://wpfrank.com/wordpress-themes/cryptoairdrop-premium/',
            )
        )
    );
}


/*
 *  Customizer Notifications
 */

require get_template_directory() . '/inc/customizer/customizer-notice/cryptoairdrop-customizer-notify.php';

$cryptoairdrop_config_customizer = array(
    'recommended_plugins'                  => array(
        'wpfrank-companion' => array(
            'recommended' => true,
            'description' => sprintf(
                /* translators: %s: plugin name */
                esc_html__('If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'crypto-airdrop'),
                '<strong>WpFrank Companion</strong>'
            ),
        ),
    ),
    'recommended_actions'                  => array(),
    'recommended_actions_title'            => esc_html__('Recommended Actions', 'crypto-airdrop'),
    'recommended_plugins_title'            => esc_html__('Recommended Plugin', 'crypto-airdrop'),
    'install_button_label'                 => esc_html__('Install and Activate', 'crypto-airdrop'),
    'activate_button_label'                => esc_html__('Activate', 'crypto-airdrop'),
    'cryptoairdrop_deactivate_button_label' => esc_html__('Deactivate', 'crypto-airdrop'),
);
cryptoairdrop_Customizer_Notify::init(apply_filters('cryptoairdrop_customizer_notify_array', $cryptoairdrop_config_customizer));

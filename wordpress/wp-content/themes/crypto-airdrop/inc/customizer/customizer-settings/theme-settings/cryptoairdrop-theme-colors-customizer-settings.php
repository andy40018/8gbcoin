<?php
/**
 * Theme Colors.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'cryptoairdrop_Customize_Theme_Colors_Option' ) ) :

	/**
	 * Menu option.
	 */
	class cryptoairdrop_Customize_Theme_Colors_Option extends cryptoairdrop_Customize_Base_Option {

		public function elements() {

			return array(
				// 1. Primary Menu Colors.
					//Menu Colors Enable Disable
					'cryptoairdrop_colors_menu_disable'         => array(
						'setting'	=> array(
							'default'			=> false,
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control'	=> array(
							'type'		=> 'toggle',
							'priority'	=> 1,
							'label'		=> esc_html__( 'Enable Menu Colors', 'cryptoairdrop' ),
							'section'	=> 'cryptoairdrop_primary_menu_colors',
						),
					),
					
					'cryptoairdrop_colors_menu_heading'     => array(
						'setting'	=> array(),
						'control'	=> array(
							'type'		=> 'heading',
							'priority'	=> 2,
							'label'		=> esc_html__( 'Menu Colors', 'crypto-airdrop' ),
							'section'	=> 'cryptoairdrop_primary_menu_colors',
						),
					),
					'cryptoairdrop_colors_submenu_heading'     => array(
						'setting'	=> array(),
						'control'	=> array(
							'type'		=> 'heading',
							'priority'	=> 35,
							'label'		=> esc_html__( 'SubMenu Colors', 'crypto-airdrop' ),
							'section'	=> 'cryptoairdrop_primary_menu_colors',
						),
					),

				// 2. Cotent Colors.
					//Cotent Colors Enable Disable
					'cryptoairdrop_colors_content_disable'         => array(
						'setting'	=> array(
							'default'			=> false,
							'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control'	=> array(
							'type'		=> 'toggle',
							'priority'	=> 1,
							'label'		=> esc_html__( 'Enable Content Colors', 'cryptoairdrop' ),
							'section'	=> 'cryptoairdrop_content_theme_colors',
						),
					),

					'cryptoairdrop_colors_content_heading'     => array(
						'setting'	=> array(),
						'control'	=> array(
							'type'		=> 'heading',
							'priority'	=> 1,
							'label'		=> esc_html__( 'Headings Colors', 'crypto-airdrop' ),
							'section'	=> 'cryptoairdrop_content_theme_colors',
						),
					),
					// a. Paragraph Colors.
					'cryptoairdrop_colors_content_p_heading'     => array(
						'setting'	=> array(),
						'control'	=> array(
							'type'		=> 'heading',
							'priority'	=> 65,
							'label'		=> esc_html__( 'Paragraph Colors', 'crypto-airdrop' ),
							'section'	=> 'cryptoairdrop_content_theme_colors',
						),
					),

				// 3. Sidebar Widgets Color.
				'cryptoairdrop_colors_sidebar_disabled'            => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Sidebar Color Settings', 'crypto-airdrop' ),
						'section'  => 'cryptoairdrop_sidebar_theme_colors',
					),
				),
				'cryptoairdrop_colors_sidebar_heading'     => array(
					'setting'	=> array(),
					'control'	=> array(
						'type'		=> 'heading',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Sidebar Widgets Colors', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_sidebar_theme_colors',
					),
				),

				// 4. Sidebar Widgets Color.
				'cryptoairdrop_colors_footer_disabled'            => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Footer Color Settings', 'crypto-airdrop' ),
						'section'  => 'cryptoairdrop_footer_theme_colors',
					),
				),
				'cryptoairdrop_colors_footer_heading'     => array(
					'setting'	=> array(),
					'control'	=> array(
						'type'		=> 'heading',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Footer Widgets Colors', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_footer_theme_colors',
					),
				),

			);
		}
	}
	new cryptoairdrop_Customize_Theme_Colors_Option();
endif;
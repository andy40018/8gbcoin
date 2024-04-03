<?php
/**
 * Typography.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if (! class_exists('Cryptoairdrop_Customize_Theme_Typography_Option') ) :

    /**
     * Theme Typography option.
     */
    class Cryptoairdrop_Customize_Theme_Typography_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

           return array(
				
				//Hedaer Typo Heading
				'cryptoairdrop_typography_header_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Header/Menu Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_header_typography',
					),
				),
				//Header Typo Enable Disable
			    'cryptoairdrop_typography_header_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Header Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_header_typography',
					),
				),
				
				
				//Slider Typo Heading
				'cryptoairdrop_typography_slider_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Slider Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_slider_typography',
					),
				),
				//Slider Typo Enable Disable
			    'cryptoairdrop_typography_slider_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Slider Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_slider_typography',
					),
				),
				
				
				//Slider Typo Heading
				'cryptoairdrop_typography_homepage_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Homepage Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_homepage_typography',
					),
				),
				//Homepage Typo Enable Disable
			    'cryptoairdrop_typography_homepage_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Homepage Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_homepage_typography',
					),
				),
				
				
				//Slider Typo Heading
				'cryptoairdrop_typography_headings_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Headings Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_headings_typography',
					),
				),
				//Heading Typo Enable Disable
			    'cryptoairdrop_typography_heading_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Headings Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_headings_typography',
					),
				),


				//Blog Archive Typo Heading
				'cryptoairdrop_typography_blog_archive_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Blog/Archive/Single Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_blog_archive_typography',
					),
				),
				//Blog Typo Enable Disable
			    'cryptoairdrop_typography_blog_archive_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Blog/Archive Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_blog_archive_typography',
					),
				),

				//Sidebar Typo Heading
				'cryptoairdrop_typography_sidebar_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Sidebar Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_sidebar_widget_typography',
					),
				),
				//Sidebar Typo Enable Disable
			    'cryptoairdrop_typography_sidebar_widget_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Sidebar Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_sidebar_widget_typography',
					),
				),
				
				
				//Footer Typo Heading
				'cryptoairdrop_typography_footer_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'   	=> 'heading',
						'priority'	=> 1,
						'label'  	=> esc_html__( 'Enable Footer Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_footer_widget_typography',
					),
				),
				//Footer Typo Enable Disable
			    'cryptoairdrop_typography_sidebar_footer_disable'         => array(
					'setting'	=> array(
						'default'			=> false,
						'sanitize_callback'	=> array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control'	=> array(
						'type'		=> 'toggle',
						'priority'	=> 2,
						'label'		=> esc_html__( 'Enable Footer Typography', 'crypto-airdrop' ),
						'section'	=> 'cryptoairdrop_footer_widget_typography',
					),
				),
            ); 
            
        }

    }

    new Cryptoairdrop_Customize_Theme_Typography_Option();

endif;

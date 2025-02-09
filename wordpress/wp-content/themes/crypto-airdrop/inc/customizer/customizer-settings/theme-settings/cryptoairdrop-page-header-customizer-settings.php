<?php
/**
 * Page Header Settings.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
* Page Header Settings.
*/

if (! class_exists('Cryptoairdrop_Customize_Page_Header_Option') ) :

    class Cryptoairdrop_Customize_Page_Header_Option extends cryptoairdrop_Customize_Base_Option
    {
        

        public function elements()
        {
            

            return array(
            
             'cryptoairdrop_page_header_heading'     => array(
            'setting' => array(),
            'control' => array(
            'type'    => 'heading',
            'priority'        => 1,
            'label'   => esc_html__('Page Header', 'crypto-airdrop'),
            'section' => 'header_image',
             ),
            ),
            
            'cryptoairdrop_page_header_disabled'            => array(
            'setting' => array(
            'default'           => true,
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
            ),
             'control' => array(
             'type'     => 'toggle',
             'priority' => 5,
             'label'    => esc_html__('Page Header Enable/Disable', 'crypto-airdrop'),
             'section'  => 'header_image',
            ),
            ),
                
                                
            'cryptoairdrop_page_header_background_color' => array(
            'setting' => array(
            'default'           => 'rgba(0,116,218)',
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_alpha_color' ),
            ),
             'control' => array(
             'type'            => 'color',
             'priority'        => 7,
             'label'           => esc_html__('Page Header/Breadcrumb Color', 'crypto-airdrop'),
             'section'         => 'header_image',
             'choices'         => array(
             'alpha' => true,
                        ),
            ),
            ),
              

            );

        }

    }

    new Cryptoairdrop_Customize_Page_Header_Option();

endif;

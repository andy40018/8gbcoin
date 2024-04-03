<?php
/**
 * Footer Copyright.
 *
 * @package Crypto AirDrop
 */

defined('ABSPATH') || exit;

if (! class_exists('Cryptoairdrop_Customize_Footer_Copyright_Option') ) :

    /**
     * Footer Copyright.
     */
    class Cryptoairdrop_Customize_Footer_Copyright_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

            return array(

            'cryptoairdrop_footer_copyright_enabled'                  => array(
            'setting' => array(
            'default'           => true,
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
            ),
            'control' => array(
            'type'     => 'toggle',
            'priority' => 5,
            'label'    => esc_html__('Footer Copyright Enable/Disable', 'crypto-airdrop'),
            'section'  => 'cryptoairdrop_footer_copyright',
            ),
            ),
                
                
            );

        }

    }

    new Cryptoairdrop_Customize_Footer_Copyright_Option();

endif;

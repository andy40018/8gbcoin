<?php
/**
 * Footer Copyright.
 *
 * @package Crypto AirDrop
 */

defined('ABSPATH') || exit;

if (! class_exists('Cryptoairdrop_Customize_Loading_Icon_Option') ) :

    /**
     * Footer Copyright.
     */
    class Cryptoairdrop_Customize_Loading_Icon_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

            return array(

            'cryptoairdrop_loading_icon_enabled'        => array(
            'setting' => array(
            'default'           => true,
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
            ),
            'control' => array(
            'type'     => 'toggle',
            'priority' => 1,
            'label'    => esc_html__('Loading Icon Enable/Disable', 'crypto-airdrop'),
            'section'  => 'cryptoairdrop_loading_icon_settings',
            ),
            ),    
        
                
            );

        }

    }

    new Cryptoairdrop_Customize_Loading_Icon_Option();

endif;

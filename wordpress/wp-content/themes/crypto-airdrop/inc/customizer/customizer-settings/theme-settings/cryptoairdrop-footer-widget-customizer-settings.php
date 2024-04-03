<?php
/**
 * Footer widgets.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! class_exists('Cryptoairdrop_Customize_Footer_Widget_Option') ) :

    /**
     * Option: Footer widget.
     */
    class Cryptoairdrop_Customize_Footer_Widget_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

            return array(

            'cryptoairdrop_footer_widgets_enabled'                  => array(
            'setting' => array(
            'default'           => true,
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_checkbox' ),
            ),
            'control' => array(
            'type'     => 'toggle',
            'priority' => 10,
            'label'    => esc_html__('Footer Widget Area Enable/Disable', 'crypto-airdrop'),
            'section'  => 'cryptoairdrop_footer_widgets',
            ),
            ),
                
            'cryptoairdrop_footer_container_size'     => array(
            'setting' => array(
            'default'           => 'container',
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
            ),
            'control' => array(
            'type'            => 'radio',
            'priority'        => 25,
            'is_default_type' => true,
            'label'           => esc_html__('Footer Width', 'crypto-airdrop'),
            'section'         => 'cryptoairdrop_footer_widgets',
            'choices'         => array(
            'container'  => esc_html__('Container', 'crypto-airdrop'),
            'container-full' => esc_html__('Container Full', 'crypto-airdrop'),
            ),
            ),
            ),    
                
                

            );

        }

    }

    new Cryptoairdrop_Customize_Footer_Widget_Option();

endif;

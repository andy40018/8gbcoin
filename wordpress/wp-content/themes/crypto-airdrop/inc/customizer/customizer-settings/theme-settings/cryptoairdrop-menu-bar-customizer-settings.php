<?php
/**
 * MenuBar.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! class_exists('Cryptoairdrop_Customize_Menu_Bar_Option') ) :

    /**
     * Menu option.
     */
    class Cryptoairdrop_Customize_Menu_Bar_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

            return array(
            
             'cryptoairdrop_main_menu_heading'     => array(
            'setting' => array(),
            'control' => array(
            'type'    => 'heading',
            'priority'        => 1,
            'label'   => esc_html__('Menu Settings', 'crypto-airdrop'),
            'section' => 'cryptoairdrop_theme_menu_bar',
             ),
            ),
                
                
            'cryptoairdrop_menu_style'     => array('setting' => array(
            'default'           => 'sticky',
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
            ),
             'control' => array(
             'type'            => 'radio',
             'priority'        => 5,
             'is_default_type' => true,
             'label'           => esc_html__('Menu Style', 'crypto-airdrop'),
             'section'         => 'cryptoairdrop_theme_menu_bar',
             'choices'         => array(
             'sticky'  => esc_html__('Sticky', 'crypto-airdrop'),
             'static' => esc_html__('Static', 'crypto-airdrop'),
                        ),
            ),
            ),                    

                
            // Logo Size
            'cryptoairdrop_logo_size' => array('setting' => array(
            'default'           => '15',
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
            ),
            'control' => array(
                        'type'            => 'select',
                        'priority'        => 8,
                        'is_default_type' => true,
                        'label'           => esc_html__('Logo Size', 'crypto-airdrop'),
                        'section'         => 'title_tagline',
                        'choices'         => array(
                            '5' => esc_html__('2x', 'crypto-airdrop'),
                            '10' => esc_html__('3x', 'crypto-airdrop'),
                            '15' => esc_html__('4x', 'crypto-airdrop'),
                            '20' => esc_html__('5x', 'crypto-airdrop'),
            ),
            ),
            ),
            );

        }

    }

    new Cryptoairdrop_Customize_Menu_Bar_Option();

endif;
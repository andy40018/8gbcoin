<?php
/**
 * General Blog.
 *
 * @package Crypto AirDrop
 */

defined('ABSPATH') || exit;

if (! class_exists('cryptoairdrop_Customize_Blog_General_Option') ) :

    /**
     * General Blog..
     */
    class cryptoairdrop_Customize_Blog_General_Option extends cryptoairdrop_Customize_Base_Option
    {

        public function elements()
        {

            return array(
                
            'cryptoairdrop_archive_blog_heading'     => array(
            'setting'    => array(),
            'control'    => array(
            'type'     => 'heading',
            'priority' => 15,
            'label'    => esc_html__('Blog Pages Layout', 'crypto-airdrop'),
            'section'  => 'cryptoairdrop_blog_general',
            ),
            ),
            'cryptoairdrop_archive_blog_pages_layout'                    => array(
            'setting'    => array(
            'default'           => 'cryptoairdrop_right_sidebar',
            'sanitize_callback' => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
            ),
            'control' => array(
            'type'        => 'radio_image',
            'priority'    => 20,
            'label'        => esc_html__('Layout', 'crypto-airdrop'),
            'section'    => 'cryptoairdrop_blog_general',
            'choices'    => array(
            'cryptoairdrop_no_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/fullwidth.png',
            'cryptoairdrop_left_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/left-sidebar.png',
            'cryptoairdrop_right_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/right-sidebar.png',
                        ),
            ),
            ),

            'cryptoairdrop_single_blog_heading'     => array(
            'setting'    => array(),
            'control'    => array(
            'type'    => 'heading',
                           'priority'    => 30,
            'label'        => esc_html__('Single Blog Pages Layout', 'crypto-airdrop'),
            'section'    => 'cryptoairdrop_blog_general',
            ),
            ),

            'cryptoairdrop_single_blog_pages_layout'                    => array(
            'setting'        => array(
            'default'            => 'cryptoairdrop_right_sidebar',
            'sanitize_callback'    => array( 'cryptoairdrop_Customizer_Sanitize', 'sanitize_radio' ),
            ),
            'control' => array(
                        'type'        => 'radio_image',
                        'priority'    => 35,
                        'label'        => esc_html__('Layout', 'crypto-airdrop'),
                        'section'    => 'cryptoairdrop_blog_general',
                        'choices'    => array(
                            'cryptoairdrop_no_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/fullwidth.png',
                            'cryptoairdrop_left_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/left-sidebar.png',
                            'cryptoairdrop_right_sidebar'    => CRYPTOAIRDROP_THEME_URL . '/assets/img/icons/right-sidebar.png',
            ),
            ),
            ),
            );
        }
    }

    new cryptoairdrop_Customize_Blog_General_Option();
endif;

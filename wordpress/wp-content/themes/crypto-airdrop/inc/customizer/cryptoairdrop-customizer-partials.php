<?php
/**
 * Customizer partials.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! class_exists('cryptoairdrop_Customizer_Partials') ) {

    /**
     * Customizer Partials.
     */
    class cryptoairdrop_Customizer_Partials
    {

        /**
         * Instance.
         *
         * @access private
         * @var    object
         */
        private static $instance;

        /**
         * Initiator.
         */
        public static function get_instance()
        {
            if (! isset(self::$instance) ) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        // site title
        public static function cryptoairdropo_customize_partial_blogname()
        {
            return get_bloginfo('name');
        }

        // Site tagline
        public static function cryptoairdropo_customize_partial_blogdescription()
        {
            return get_bloginfo('description');
        }

        /**
         * Slider
         */
        //Title
        public static function cryptoairdrop_slider_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_slider_title');
        }

            //Subtitle
        public static function cryptoairdrop_slider_subtitle_render_callback()
        {
            return get_theme_mod('cryptoairdrop_slider_subtitle');
        }

            //Button
        public static function cryptoairdrop_slider_ios_url_render_callback()
        {
            return get_theme_mod('cryptoairdrop_slider_ios_url');
        }

            //Video
        public static function cryptoairdrop_slider_video_link_render_callback()
        {
            return get_theme_mod('cryptoairdrop_slider_video_link');
        }

        /**
         * About
         */
            //Title
        public static function cryptoairdrop_about_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_about_title');
        }

            //Subtitle
        public static function cryptoairdrop_about_subtitle_render_callback()
        {
            return get_theme_mod('cryptoairdrop_about_subtitle');
        }

            //Description
        public static function cryptoairdrop_about_desc_render_callback()
        {
            return get_theme_mod('cryptoairdrop_about_desc');
        }

            //Button
        public static function cryptoairdrop_about_button_text_render_callback()
        {
            return get_theme_mod('cryptoairdrop_about_button_text');
        }
            
            //Image
        public static function cryptoairdrop_about_image_render_callback()
        {
            return get_theme_mod('cryptoairdrop_about_image');
        }

        /**
         * Feature
         */
            //Title
        public static function cryptoairdrop_feature_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_feature_title');
        }

            //Content
        public static function cryptoairdrop_top_info_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_top_info_content');
        }

            //Image
        public static function cryptoairdrop_feature_image_render_callback()
        {
            return get_theme_mod('cryptoairdrop_feature_image');
        }

        /**
         * Roadmap
         */
            //Title
        public static function cryptoairdrop_roadmap_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_roadmap_title');
        }

            //Content
        public static function cryptoairdrop_roadmap_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_roadmap_content');
        }

        /**
         * FAQ
         */
            //Title
        public static function cryptoairdrop_faq_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_faq_title');
        }

            //Content
        public static function cryptoairdrop_faqs_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_faqs_content');
        }

            //Image
        public static function cryptoairdrop_faq_image_render_callback()
        {
            return get_theme_mod('cryptoairdrop_faq_image');
        }

        /**
         * Team
         */
            //Title
        public static function cryptoairdrop_team_area_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_team_area_title');
        }

            //Content
        public static function cryptoairdrop_team_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_team_content');
        }

        /**
         * Blog
         */
            //Title
        public static function cryptoairdrop_blog_area_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_blog_area_title');
        }

            //Content
        public static function cryptoairdrop_theme_blog_category_render_callback()
        {
            return get_theme_mod('cryptoairdrop_theme_blog_category');
        }

            //Image
        public static function cryptoairdrop_blog_btn_text_render_callback()
        {
            return get_theme_mod('cryptoairdrop_blog_btn_text');
        }

		public static function cryptoairdrop_excerpt_length_render_callback()
        {
            return get_theme_mod('cryptoairdrop_excerpt_length');
        }


        /**
         * Contact
         */
            //Title
        public static function cryptoairdrop_contact_area_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_contact_area_title');
        }

            //Content
        public static function cryptoairdrop_contact_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_contact_content');
        }
		
        /**
         * Woocommerce
         */
            //Title
        public static function cryptoairdrop_woocommerce_area_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_woocommerce_area_title');
        }

            //Content
        public static function cryptoairdrop_woocommerce_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_woocommerce_content');
        }

        /**
         * Social
         */
            //Title
        public static function cryptoairdrop_social_area_title_render_callback()
        {
            return get_theme_mod('cryptoairdrop_social_area_title');
        }

            //Content
        public static function cryptoairdrop_social_content_render_callback()
        {
            return get_theme_mod('cryptoairdrop_social_content');
        }

			//Content
        public static function cryptoairdrop_footer_copyright_text_render_callback()
        {
            return get_theme_mod('cryptoairdrop_footer_copyright_text');
        }

    }
}

cryptoairdrop_Customizer_Partials::get_instance();

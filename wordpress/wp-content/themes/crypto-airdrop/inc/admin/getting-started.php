<?php
/**
 * Getting Started Page. 
 *
 * @package crypto-airdrop
 */

require get_template_directory() . '/inc/admin/class-getting-start-plugin-helper.php';


// Adding Getting Started Page in admin menu

if(! function_exists('cryptoairdrop_getting_started_menu') ) :
    function cryptoairdrop_getting_started_menu()
    {    
        $cryptoairdrop_plugin_count = null;
        if (!is_plugin_active('wpfrank-companion/wpfrank-companion.php') ) :    
            $cryptoairdrop_plugin_count =    '<span class="awaiting-mod action-count">1</span>';
        endif;
        /* translators: %1$s %2$s: about */        
        $title = sprintf(esc_html__('About %1$s %2$s', 'crypto-airdrop'), esc_html(CRYPTOAIRDROP_THEME_NAME), $cryptoairdrop_plugin_count);
        /* translators: %1$s: welcome page */    
        add_theme_page(sprintf(esc_html__('Welcome to %1$s', 'crypto-airdrop'), esc_html(CRYPTOAIRDROP_THEME_NAME), esc_html(CRYPTOAIRDROP_THEME_VERSION)), $title, 'edit_theme_options', 'cryptoairdrop-getting-started', 'cryptoairdrop_getting_started_page');
    }
endif;
add_action('admin_menu', 'cryptoairdrop_getting_started_menu');

// Load Getting Started styles in the admin
if(! function_exists('cryptoairdrop_getting_started_admin_scripts') ) :
    function cryptoairdrop_getting_started_admin_scripts( $hook )
    {
        // Load styles only on our page
        if('appearance_page_cryptoairdrop-getting-started' != $hook ) { return;
        }

        wp_enqueue_style('cryptoairdrop-getting-started', get_template_directory_uri() . '/inc/admin/css/getting-started.css', false, CRYPTOAIRDROP_THEME_VERSION);
        wp_enqueue_script('plugin-install');
        wp_enqueue_script('updates');
        wp_enqueue_script('cryptoairdrop-getting-started', get_template_directory_uri() . '/inc/admin/js/getting-started.js', array( 'jquery' ), CRYPTOAIRDROP_THEME_VERSION, true);
        wp_enqueue_script('cryptoairdrop-recommended-plugin-install', get_template_directory_uri() . '/inc/admin/js/recommended-plugin-install.js', array( 'jquery' ), CRYPTOAIRDROP_THEME_VERSION, true);    
        wp_localize_script('cryptoairdrop-recommended-plugin-install', 'cryptoairdrop_start_page', array( 'activating' => __('Activating ', 'crypto-airdrop') ));
    }
endif;
add_action('admin_enqueue_scripts', 'cryptoairdrop_getting_started_admin_scripts');


// Plugin API
if(! function_exists('cryptoairdrop_call_plugin_api') ) :
    function cryptoairdrop_call_plugin_api( $slug )
    {
        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
        $call_api = get_transient('cryptoairdrop_about_plugin_info_' . $slug);

        if (false === $call_api ) {
            $call_api = plugins_api(
                'plugin_information', array(
                'slug'   => $slug,
                'fields' => array(
                'downloaded'        => false,
                'rating'            => false,
                'description'       => false,
                'short_description' => true,
                'donate_link'       => false,
                'tags'              => false,
                'sections'          => true,
                'homepage'          => true,
                'added'             => false,
                'last_updated'      => false,
                'compatibility'     => false,
                'tested'            => false,
                'requires'          => false,
                'downloadlink'      => false,
                'icons'             => true,
                ),
                )
            );
            set_transient('cryptoairdrop_about_plugin_info_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS);
        }

        return $call_api;
    }
endif;

// Callback function for admin page.
if(! function_exists('cryptoairdrop_getting_started_page') ) :
    function cryptoairdrop_getting_started_page()
    {
        ?>
    <div class="wrap getting-started">
        <h2 class="notices"></h2>
        <div class="intro-wrap">
            <div class="intro">
                <h3>
        <?php 
        /* translators: %1$s %2$s: welcome message */    
        printf(esc_html__('Welcome to %1$s - Version %2$s', 'crypto-airdrop'), esc_html(CRYPTOAIRDROP_THEME_NAME), esc_html(CRYPTOAIRDROP_THEME_VERSION)); ?></h3>
                <p><?php esc_html_e('cryptoairdrop is a creative and professional multipurpose WordPress theme. Which is Best for Business, Finance, Consultant, Marketing, Digital Agency, Industries, Online Shops and many other various website types.', 'crypto-airdrop'); ?></p>
            </div>
            <div class="intro right">
                <a target="_blank" href="https://wpfrank.com/">
                    <img src="<?php echo esc_url(CRYPTOAIRDROP_THEME_DIR.'/inc/admin/images/logo.png'); ?>">
                </a>
            </div>
        </div>
        <div class="panels">
            <ul class="inline-list">
                <li class="current">
                    <a id="getting-started-panel" href="#">
          <?php esc_html_e('Getting Started', 'crypto-airdrop'); ?>
                    </a>
                </li>
                <li class="recommended-plugins-active">
                    <a id="plugins" href="#">
          <?php esc_html_e('Recommended Actions', 'crypto-airdrop'); 
            if (!is_plugin_active('wpfrank-companion/wpfrank-companion.php') ) :  ?>
                            <span class="plugin-not-active">1</span>
            <?php endif; ?>
                    </a>
                </li>
                <li>
                    <a id="useful-plugin-panel" href="#">
          <?php esc_html_e('Useful Plugins', 'crypto-airdrop'); ?>
                    </a>
                </li>
            </ul>
            <div id="panel" class="panel">
        <?php include get_template_directory() . '/inc/admin/tabs/getting-started-panel.php'; ?>
        <?php include get_template_directory() . '/inc/admin/tabs/recommended-plugins-panel.php'; ?>
        <?php include get_template_directory() . '/inc/admin/tabs/useful-plugin-panel.php'; ?>
            </div>
        </div>
    </div>
        <?php
    }
endif;
<?php
/**
 * Extra Theme Function
 *
 * @package Crypto AirDrop
 */

 /**
  * Custom Logo
  * 
  * @return logo
  */
function Cryptoairdrop_Header_logo()
{ 
    ?>
    <div class="logo_class">
    <?php
    if (has_custom_logo() ) {
        the_custom_logo();
    }
    if (display_header_text() ) : ?>
                <div class="row site-branding-text"><!--Logo-->
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" ><?php esc_attr(bloginfo('name')); ?></a>
                        </h1>
        <?php
        //Site tagline - description
        $cryptoairdrop_description = get_bloginfo('description', 'display');
        if ($cryptoairdrop_description || is_customize_preview() ) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" >
                                <p class="site-description"><?php echo esc_html($cryptoairdrop_description); ?></p>
                            </a>
            <?php 
        endif; ?>
                    </div>
                    <div class="col-md-3 text-right"></div>
                </div>
    <?php endif; ?>
    </div>
    <?php
}


/**
 * Theme Page Header Title
 * 
 * @return page_header
 */
function Cryptoairdrop_Theme_Page_Header_title()
{
    if (is_archive() ) {
        echo '<div class="page-header-title text-center"><h1 class="text-white">';
        if (is_day() ) :
            /* translators: %1$s %2$s: date */    
            printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Archives', 'crypto-airdrop'), get_the_date());  
           elseif (is_month() ) :
               /* translators: %1$s %2$s: month */    
               printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Archives', 'crypto-airdrop'), get_the_date('F Y'));
           elseif (is_year() ) :
               /* translators: %1$s %2$s: year */    
               printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Archives', 'crypto-airdrop'), get_the_date('Y'));
     elseif(is_author() ) :
         /* translators: %1$s %2$s: author */    
         printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('All posts by', 'crypto-airdrop'), get_the_author());
           elseif(is_category() ) :
               /* translators: %1$s %2$s: category */    
               printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Category', 'crypto-airdrop'), single_cat_title('', false));
     elseif(is_tag() ) :
         /* translators: %1$s %2$s: tag */    
         printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Tag', 'crypto-airdrop'), single_tag_title('', false));
     elseif(class_exists('WooCommerce') && is_shop() ) :
         /* translators: %1$s %2$s: WooCommerce */    
         printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Shop', 'crypto-airdrop'), single_tag_title('', false));
           elseif(is_archive() ) : 
               the_archive_title('<h1 class="text-white">', '</h1>'); 
           endif;
           echo '</h1></div>';
    } elseif (is_404() ) {
        echo '<div class="page-header-title text-center"><h1 class="text-white">';
        /* translators: %1$s: 404 */    
        printf(esc_html__('%1$s', 'crypto-airdrop'), esc_html__('Error 404', 'crypto-airdrop'));
        echo '</h1></div>';
    } elseif (is_search() ) {
        echo '<div class="page-header-title text-center"><h1 class="text-white">';
        /* translators: %1$s %2$s: search */
        printf(esc_html__('%1$s %2$s', 'crypto-airdrop'), esc_html__('Search results for', 'crypto-airdrop'), get_search_query());
        echo '</h1></div>';
    } else {
        echo '<h1 class="text-white">'.esc_html(get_the_title()).'</h1>';
    }
}

/**
 * Theme Breadcrumbs Url
 * 
 * @return page_url
 */
function Cryptoairdrop_Page_url()
{
    $page_url = 'http';
    if (key_exists("HTTPS", $_SERVER) && ( $_SERVER["HTTPS"] == "on" ) ) {
        $page_url .= "s";
    }
    $page_url .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $page_url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $page_url .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $page_url;
}

if(!function_exists('cryptoairdrop_page_header_breadcrumbs') ) :
    /**
     * Theme Breadcrumbs
     * 
     * @return breadcrumb
     */
    function Cryptoairdrop_Page_Header_breadcrumbs()
    {     
        global $post;
        $homeLink = home_url();
        
        echo '<ul id="content" class="page-breadcrumb text-center">';            
        if (is_home() || is_front_page()) :
            echo '<li><a href="'.esc_url($homeLink).'">'.esc_html__('Home', 'crypto-airdrop').'</a></li>';
             echo '<li class="active">'; echo single_post_title(); echo '</li>';
         else:
             echo '<li><a href="'.esc_url($homeLink).'">'.esc_html__('Home', 'crypto-airdrop').'</a></li>';
             if (is_category() ) {
                 echo '<li class="active"><a href="'. esc_url(cryptoairdrop_page_url()) .'">' . esc_html__('Archive by category', 'crypto-airdrop').' "' . single_cat_title('', false) . '"</a></li>';
             } elseif (is_day() ) {
                 echo '<li class="active"><a href="'. esc_url(get_year_link(esc_attr(get_the_time('Y')))) . '">'. esc_html(get_the_time('Y')) .'</a>';
                 echo '<li class="active"><a href="'. esc_url(get_month_link(esc_attr(get_the_time('Y')), esc_attr(get_the_time('m')))) .'">'. esc_html(get_the_time('F')) .'</a>';
                 echo '<li class="active"><a href="'. esc_url(cryptoairdrop_page_url()) .'">'. esc_html(get_the_time('d')) .'</a></li>';
             } elseif (is_month() ) {
                 echo '<li class="active"><a href="' . esc_url(get_year_link(esc_attr(get_the_time('Y')))) . '">' . esc_html(get_the_time('Y')) . '</a>';
                 echo '<li class="active"><a href="'. esc_url(cryptoairdrop_page_url()) .'">'. esc_html(get_the_time('F')) .'</a></li>';
             } elseif (is_year() ) {
                 echo '<li class="active"><a href="'. esc_url(cryptoairdrop_page_url()) .'">'. esc_html(get_the_time('Y')) .'</a></li>';
             } elseif (is_single() && !is_attachment() && is_page('single-product') ) {
                 if (get_post_type() != 'post' ) {
                             $cat = get_the_category(); 
                             $cat = $cat[0];
                             echo '<li>';
                              echo esc_html(get_category_parents($cat, true, ''));
                             echo '</li>';
                             echo '<li class="active"><a href="' . esc_url(cryptoairdrop_page_url()) . '">'. esc_html( get_the_title() ) .'</a></li>';
                 } 
             } elseif (is_page() && $post->post_parent ) {
                 $parent_id  = $post->post_parent;
                 $breadcrumbs = array();
                 while ($parent_id) {
                     $page = get_page($parent_id);
                     $breadcrumbs[] = '<li class="active"><a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a>';
                     $parent_id  = $page->post_parent;
                 }
                 $breadcrumbs = array_reverse($breadcrumbs);
                 foreach ($breadcrumbs as $crumb) { 
                     echo $crumb;
                 }
                 echo '<li class="active"><a href="' . esc_url(cryptoairdrop_page_url()) . '">'. esc_html(get_the_title()) .'</a></li>';
             } elseif (is_search() ) {
                 echo '<li class="active"><a href="' . esc_url(cryptoairdrop_page_url()) . '">'. get_search_query() .'</a></li>';
             } elseif (is_404() ) {
                 echo '<li class="active"><a href="' . esc_url(cryptoairdrop_page_url()) . '">'.esc_html__('Error 404', 'crypto-airdrop').'</a></li>';
             } else { 
                 echo '<li class="active"><a href="' . esc_url(cryptoairdrop_page_url()) . '">'. esc_html(get_the_title()) .'</a></li>';
             }
         endif;
         echo '</ul>';
    }
endif;

/** 
 * Get sticky main menu class name
 * 
 * @return sticky_menu
 */
function Cryptoairdrop_Sticky_Main_Menu_class()
{
    $sticky_main_menu = get_theme_mod('cryptoairdrop_menu_style', 'sticky');

    if ($sticky_main_menu == 'sticky' ) {
        return 'site-menu-content--sticky';
    } else {
        return '';
    }
}

/** 
 * Check if admin bar is enabled
 * 
 * @return admin_bar
 */
function Cryptoairdrop_Is_Admin_Bar_enabled()
{

    if (is_admin_bar_showing() ) {
        return 'admin-bar-enabled';
    }

    return '';
}

/** 
 * Check if box layout enabled
 * 
 * @return box_layout
 */
function Cryptoairdrop_Is_Box_Layout_enabled()
{
    $cryptoairdrop_layout_style = get_theme_mod('cryptoairdrop_layout_style', 'wide');
    if ($cryptoairdrop_layout_style != "boxed") { 
        return 'menu-full';
    } else { 
        return 'menu-1210';
    }

    return '';
}

/** 
 * Check the device
 * 
 * @return mobile_device
 */
function cryptoairdropisMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/**
 * Select sanitization callback
 * 
 * @return var
 */
function cryptoairdrop_sanitize_select( $value )
{    
    if (is_array($value) ) {
        foreach ( $value as $key => $subvalue ) {
            $value[ $key ] = sanitize_text_field($subvalue);
        }
        return $value;
    }
    return sanitize_text_field($value);    
}

/**
 * Filter the except length to 20 words.
 *
 * @param  int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
/* function wpdocs_custom_excerpt_length( $length )
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
 */
/**
 * Custom CSS
 */

if(! function_exists('cryptoairdrop_custom_customizer_options') ) :
    function cryptoairdrop_custom_customizer_options()
    {
        
        $output_css = '';
        
        // Page Header Image
        if (has_header_image() ) :
            $output_css .=".page-title-module {
				background: #17212c url(" .esc_url(get_header_image()). ");
				background-attachment: scroll;
				background-position: top center;
				background-repeat: no-repeat;
				background-size: cover;
			}\n";
        endif;
        
        // Page Header color CSS
        $cryptoairdrop_page_header_background_color = get_theme_mod('cryptoairdrop_page_header_background_color', 'rgba(0,116,218)');
        $output_css .="
			.page-title-module:before {
				background-color: " . esc_attr($cryptoairdrop_page_header_background_color) . ";
			}\n
			";

        //if Page Header Disable (menu-top-margin)
        $cryptoairdrop_menu_overlap = get_theme_mod('cryptoairdrop_menu_overlap', true);
        $cryptoairdrop_page_header_disabled = get_theme_mod('cryptoairdrop_page_header_disabled', true);
        
        if ($cryptoairdrop_menu_overlap == true && $cryptoairdrop_page_header_disabled != true) :
            $output_css .=".menu-overlap {
			    padding-top: 12% !important;
			}\n";
        endif;
		
		// Nav Menu Logo Size
		$cryptoairdrop_logo_size = get_theme_mod('cryptoairdrop_logo_size', '15');
		$output_css .="
			.logo_class img {
				width: " .  esc_attr($cryptoairdrop_logo_size) . "%;
			}\n
			";
        
        wp_add_inline_style('crypto-airdrop-style', $output_css);
    }
endif;
add_action('wp_enqueue_scripts', 'cryptoairdrop_custom_customizer_options');

/**
 * Admin notice
 */
class cryptoairdrop_screen
{
    public function __construct(){
        /* notice  Lines*/
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
		add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action('load-themes.php', array( $this, 'cryptoairdrop_activation_admin_notice' ));
    }
    public function cryptoairdrop_activation_admin_notice(){
        global $pagenow;
        if (is_admin() && ( 'themes.php' == $pagenow ) ) {
            add_action('admin_notices', array( $this, 'cryptoairdrop_admin_notice' ), 99);
        }
    }
    /**
     * Display an admin notice linking to the welcome screen
     *
     * @sfunctionse 1.8.2.4
     */
    public function cryptoairdrop_admin_notice() {
        if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) ){ ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <?php
                    echo '<div><a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss"> Dismiss this notice </a></div>';
                ?>
                <div class="cryptoairdrop-getting-started-notice clearfix">
                    <div class="cryptoairdrop-theme-screenshot">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e('Theme Screenshot', 'crypto-airdrop'); ?>" />
                    </div><!-- /.cryptoairdrop-theme-screenshot -->
                    <div class="cryptoairdrop-theme-notice-content">
                        <h2 class="cryptoairdrop-notice-h2">
                            <?php
                            printf(
                            /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                                esc_html__('Welcome! Thank you for choosing %1$s!', 'crypto-airdrop'),
                                '<strong>' . wp_get_theme()->get('Name') . '</strong>'
                            );
                            ?>
                        </h2>

                        <p class="plugin-install-notice"><?php echo sprintf(__('To take full advantage of all the features of this theme, please install and activate the <strong>WpFrank Companion</strong> plugin, then enjoy this theme.', 'crypto-airdrop')); ?></p>
                        <a class="cryptoairdrop-btn-get-started button button-primary button-hero cryptoairdrop-button-padding" href="#" data-name="" data-slug="">
                        <?php
                            printf(
                            /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                                esc_html__('Get started with %1$s', 'crypto-airdrop'),
                                '<strong>' . wp_get_theme()->get('Name') . '</strong>'
                            );
                        ?>

                        </a><span class="cryptoairdrop-push-down">
                        <?php
                        /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                        printf(
                            'or %1$sCustomize theme%2$s</a></span>',
                            '<a target="_blank" href="' . esc_url(admin_url('customize.php')) . '">',
                            '</a>'
                        );
                        ?>
                    </div><!-- /.cryptoairdrop-theme-notice-content -->
                </div>
            </div>
            <?php
        }
    }

    /**
	 * Register dismissal of the getting started notification.
	 * Acts on the dismiss link.
	 * If clicked, the admin notice disappears and will no longer be visible to this user.
	 */
	public function getting_started_notice_dismissed() {

		if ( isset( $_GET['gs-notice-dismissed'] ) ) {
			add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
		}
	}

	/**
	 * Deletes the getting started notice's dismiss status upon theme switch.
	 */
	public function flush_dismiss_status() {
		delete_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
	}

}
$GLOBALS['cryptoairdrop_screen'] = new cryptoairdrop_screen();

/**
* Plugin installer
*/

add_action('wp_ajax_install_act_plugin', 'cryptoairdrop_admin_install_plugin');

function cryptoairdrop_admin_install_plugin()
{
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if (! file_exists(WP_PLUGIN_DIR . '/wpfrank-companion') ) {
        $api = plugins_api(
            'plugin_information',
            array(
            'slug'   => sanitize_key(wp_unslash('wpfrank-companion')),
            'fields' => array(
            'sections' => false,
            ),
            )
        );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader($skin);
        $result   = $upgrader->install($api->download_link);
    }

    // Activate plugin.
    if (current_user_can('activate_plugin') ) {
        $result = activate_plugin('wpfrank-companion/wpfrank-companion.php');
    }

    if ( ! file_exists( WP_PLUGIN_DIR . '/coming-soon-maintenance-mode' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'coming-soon-maintenance-mode' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}

	// Activate plugin.
	if ( current_user_can( 'activate_plugin' ) ) {
		$result = activate_plugin( 'coming-soon-maintenance-mode/coming-soon-maintenance-mode.php' );
	}
}
?>

<?php	

/**
 * Theme Widgets
 * 
 * @return hook.
 */
function Cryptoairdrop_Theme_widgets()
{
    
    // Blog / Page Sidebar Widget
    register_sidebar(
        array(
        'name'             => __('Sidebar Widget', 'crypto-airdrop'),
        'id'             => 'sidebar-widget',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'     => '</aside>',
        'before_title'     => '<h4 class="widget-title">',
        'after_title'     => '</h4>'
        )
    );
    
    register_sidebar(
        array(
        'id' => 'footer_widget_area_left',    
        'name' => __('Footer Widget First Column', 'crypto-airdrop'),
        'description' => __('Footer Widget First Column', 'crypto-airdrop'),
        'before_widget' => '<aside class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class=""><h4 class="widget-title">',
        'after_title' => '</h4><span></span></div>',
        ) 
    );
    
    register_sidebar(
        array(
        'id' => 'footer_widget_area_center',    
        'name' => __('Footer Widget Second Column', 'crypto-airdrop'),
        'description' => __('Footer Widget Second Column', 'crypto-airdrop'),
        'before_widget' => '<aside class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class=""><h4 class="widget-title">',
        'after_title' => '</h4><span></span></div>',
        ) 
    );
    
    register_sidebar(
        array(
        'id' => 'footer_widget_area_right',    
        'name' => __('Footer Widget Third Column', 'crypto-airdrop'),
        'description' => __('Footer Widget Third Column', 'crypto-airdrop'),
        'before_widget' => '<aside class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class=""><h4 class="widget-title">',
        'after_title' => '</h4><span></span></div>',
        ) 
    );
    
    register_sidebar(
        array(
        'id'            => 'woocommerce',
        'name'            => __('WooCommerce sidebar widget area', 'crypto-airdrop'),        
        'description'    => __('WooCommerce sidebar widget area.', 'crypto-airdrop'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'    => '</aside>',
        'before_title'    => '<h4 class="widget-title">',
        'after_title'    => '</h4>',
        )
    );
}
add_action('widgets_init', 'Cryptoairdrop_Theme_widgets');
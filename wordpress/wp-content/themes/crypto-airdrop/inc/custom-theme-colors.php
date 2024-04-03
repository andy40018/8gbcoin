<?php
if( ! function_exists( 'cryptoairdrop_custom_theme_colors_options' ) ):
function cryptoairdrop_custom_theme_colors_options() {

    $custom_color_css = '';

	/**
	 * 1. Primary Menu Color Settings
	*/
	// a. Menu Color.
	if(get_theme_mod('cryptoairdrop_colors_menu_disable', false) == true):
		if(get_theme_mod('cryptoairdrop_colors_menu_text') != null):
			$custom_color_css .=".main-navigation .menu li a,
			.main-navigation ul.menu li.menu-item-has-children>a+.menu-arrow-button i	{
			color: " .esc_attr( get_theme_mod('cryptoairdrop_colors_menu_text', '#000') )."; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_menu_hover') != null):
			$custom_color_css .=".main-navigation .menu>li>a:hover {
			color: " .esc_attr( get_theme_mod('cryptoairdrop_colors_menu_hover', '#9cd0ff') )." !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_menu_active') != null):
			$custom_color_css .= ".main-navigation .menu li.active a, .main-navigation .menu .current-menu-item>a,
			.main-navigation .menu .current-menu-ancestor>a, .main-navigation .menu .current-menu-parent>a {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_menu_active', '#000') ) . " !important; }\n";
		endif;

		// b. SubMenu Color.
		if(get_theme_mod('cryptoairdrop_colors_submenu_text') != null):
			$custom_color_css .=".main-navigation .menu>li .sub-menu>li.current-menu-item>a, .main-navigation .sub-menu li a,
			.main-navigation ul.sub-menu li.menu-item-has-children>a+.menu-arrow-button i {
			color: " .esc_attr( get_theme_mod('cryptoairdrop_colors_submenu_text', '#000') )."; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_submenu_hover') != null):
			$custom_color_css .=".main-navigation .menu .sub-menu li a:hover, .main-navigation .menu>li .sub-menu>li.current-menu-item>a {
			color: " .esc_attr( get_theme_mod('cryptoairdrop_colors_submenu_hover', '#fff') )." !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_submenu_bg') != null):
			$custom_color_css .= ".main-navigation .menu>li .sub-menu {
			background-color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_submenu_bg', '#fff') ) . "; }\n";
		endif;	
	endif;
	
	/**
	 * 2. Content Colors Settings
	*/
	if (get_theme_mod('cryptoairdrop_colors_content_disable', false) == true):
		// a. Content Color headings + Paragraph
		if(get_theme_mod('cryptoairdrop_colors_content_h1') != null):
			$custom_color_css .= "body h1 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h1', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_content_h2') != null):
			$custom_color_css .= "body h2 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h2', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_content_h3') != null):
			$custom_color_css .= "body h3, .section .info-box h3{
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h3', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_content_h4') != null):
			$custom_color_css .= "body h4, .inner-header .inner-title > a, .team .member .member-info h4 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h4', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_content_h5') != null):
			$custom_color_css .= "body h5, .content h5 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h5', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_content_h6') != null):
			$custom_color_css .= "body h6 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_h6', '#000') ) . "; }\n";
		endif;
		// b. Paragraph
		if(get_theme_mod('cryptoairdrop_colors_content_p') != null):
			$custom_color_css .= ".section p, .section .feature-content p {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_content_p', '#000') ) . "; }\n";
		endif;
	endif;
	
	/**
	 * 3. Sidebar Widgets Colors Settings
	*/
	if (get_theme_mod('cryptoairdrop_colors_sidebar_disabled', false) == true):
		if(get_theme_mod('cryptoairdrop_colors_sidebar_title') != null):
			$custom_color_css .= "body .sidebar h2 {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_sidebar_title', '#000') ) . "; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_sidebar_text') != null):
			$custom_color_css .= "body .sidebar p {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_sidebar_text', '#000') ) . " !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_sidebar_link') != null):
			$custom_color_css .= "body .sidebar a {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_sidebar_link', '#000') ) . " !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_sidebar_hover') != null):
			$custom_color_css .= "body .sidebar a:hover, body .sidebar .widget a:hover, body .sidebar .widget a:focus {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_sidebar_hover', '#0074da') ) . " !important; }\n";
		endif;
	endif;
	
	/**
	 * 4. Footer Widgets Colors Settings
	*/
	if (get_theme_mod('cryptoairdrop_colors_footer_disabled', false) == true):
		if(get_theme_mod('cryptoairdrop_colors_footer_title') != null):
			$custom_color_css .= "body .footer h3 span{
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_footer_title', '#000') ) . " !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_footer_text') != null):
			$custom_color_css .= "body .footer p {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_footer_text', '#000') ) . " !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_footer_link') != null):
			$custom_color_css .= "body .footer a {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_footer_link', '#000') ) . " !important; }\n";
		endif;
		if(get_theme_mod('cryptoairdrop_colors_footer_hover') != null):
			$custom_color_css .= "body .footer a:hover, body .footer .widget a:hover, body .footer .widget a:focus {
			color: " . esc_attr( get_theme_mod('cryptoairdrop_colors_footer_hover', '#0074da') ) . " !important; }\n";
		endif;
	endif;

	wp_add_inline_style( 'crypto-airdrop-style', $custom_color_css );
}
endif;
add_action( 'wp_enqueue_scripts', 'cryptoairdrop_custom_theme_colors_options' );
?>
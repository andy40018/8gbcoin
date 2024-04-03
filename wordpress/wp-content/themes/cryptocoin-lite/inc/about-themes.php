<?php
/**
 * Cryptocoin Lite About Theme
 *
 * @package Cryptocoin Lite
 */

//about theme info
add_action( 'admin_menu', 'cryptocoin_lite_abouttheme' );
function cryptocoin_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'cryptocoin-lite'), __('About Theme Info', 'cryptocoin-lite'), 'edit_theme_options', 'cryptocoin_lite_guide', 'cryptocoin_lite_mostrar_guide');   
} 

//Info of the theme
function cryptocoin_lite_mostrar_guide() { 	
?>

<h1><?php esc_html_e('About Theme Info', 'cryptocoin-lite'); ?></h1>
<hr />  

<p><?php esc_html_e(' The CryptoCoin Lite theme is a multipurpose and professional WordPress theme promptly designed for people wanting to set up a crypto website, whether for offering crypto advisory services, promoting any type of cryptocurrency, or offering blockchain consulting services. A business offering cryptocurrency-related services can make use of this cryptocurrency WordPress theme as it is amazing and comes with splendid features. This free Bitcoin mining WordPress theme can be used with all types of cryptocurrency website like crypto, bitcoin, ico, crypto currency exchange, crypto markets, crypto token, cryptocurrency investments, blockchain, digital currency websites, NFT and ICO Mining. This multipurpose Theme  can also be used for corporate, business, agency, e-commerce, education, travel, charity, yoga, portfolio, blogging, photography, cafe, restaurant, foods, beauty salon, wedding, medical, dentist, interior design, furniture, home decor, digital marketing, industries, law firms, and consulting websites. This theme is super-fast and loads quickly, and also it is 100% responsive. This responsiveness enhances the functionality of this theme. Besides, this theme is HD and retina-ready. This means you can run this theme smoothly on any smart device. This theme is SEO-friendly and is completely SEO-optimized in every aspect.', 'cryptocoin-lite'); ?></p>

<h2><?php esc_html_e('Theme Features', 'cryptocoin-lite'); ?></h2>
<hr />  
 
<h3><?php esc_html_e('Theme Customizer', 'cryptocoin-lite'); ?></h3>
<p><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'cryptocoin-lite'); ?></p>


<h3><?php esc_html_e('Responsive Ready', 'cryptocoin-lite'); ?></h3>
<p><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'cryptocoin-lite'); ?></p>


<h3><?php esc_html_e('Cross Browser Compatible', 'cryptocoin-lite'); ?></h3>
<p><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'cryptocoin-lite'); ?></p>


<h3><?php esc_html_e('E-commerce', 'cryptocoin-lite'); ?></h3>
<p><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'cryptocoin-lite'); ?></p>

<hr />  	
<p><a href="http://www.gracethemesdemo.com/documentation/cryptocoin/#homepage-lite" target="_blank"><?php esc_html_e('Documentation', 'cryptocoin-lite'); ?></a></p>

<?php } ?>
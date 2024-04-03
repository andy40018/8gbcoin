<?php
/**
 *  The Template for displaying 404 Error Page
 *
 * @package Crypto AirDrop
 */

get_header();
  
	$activate_theme_data = wp_get_theme(); // getting current theme data.
	$activate_theme = $activate_theme_data->name;

	if( 'Crypto AirDrop' == $activate_theme || 'Crypto Token' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-light';
	}
	if( 'Crypto Compare' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-dark';
	}
?>
<!--Page Title-->
<?php get_template_part('breadcrumb'); ?>
<!--/End of Page Title-->
<!--404 Error Section---->
<section id="site-content" class="section about <?php echo esc_html($cryptoairdrop_theme_schema); ?> menu-overlap">
    <div class="container">
        <div class="row">
        
            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                        <h1><?php esc_html_e('4', 'crypto-airdrop'); ?><span><?php esc_html_e('0', 'crypto-airdrop'); ?></span><?php esc_html_e('4', 'crypto-airdrop'); ?>
                    </div>
                    <h2><?php esc_html_e('Oops! - Page not found', 'crypto-airdrop'); ?></h2>
                    <p class="mb-4"><?php esc_html_e('The page you are looking for might have been removed had its name changed or is temporarily unavailable.', 'crypto-airdrop'); ?></p>
                    <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-success btn-radius"><?php esc_html_e('Go To Homepage', 'crypto-airdrop'); ?></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/End of 404 Error Section Section---->
<div class="clearfix"></div>
<?php get_footer(); ?>

<?php
/**
 * Woocommerce
 *
 * @package Crypto_AirDrop
 */
 
get_header();

	$activate_theme_data = wp_get_theme(); // getting current theme data.
	$activate_theme = $activate_theme_data->name;

	if( 'Crypto AirDrop' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-light';
	}
	if( 'Crypto Compare' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-dark';
	}
?>
    <!--breadcrumb Woocommerce.php-->
    <?php get_template_part('breadcrumb'); ?>
    <!--/breadcrumb-->
    
<!-- /Page Title Section -->
<div class="clearfix"></div>
<!-- Blog Section with Sidebar -->
<section id="site-content" class="section <?php echo esc_html($cryptoairdrop_theme_schema); ?> menu-overlap">
    <div class="container">
        <div class="row">    
            <!--Woocommerce-Blog Section-->
            <div class="col-md-<?php echo ( !is_active_sidebar('woocommerce') ? '12' :'8' ); ?> col-xs-12">
                <div class="blog-page">
                    <div class="post-woocommerce">
                        <?php woocommerce_content(); ?>
                    </div>    
                </div>    
            </div>    
            <!--/Woocommerce-Blog Section-->
            <?php get_sidebar('woocommerce'); ?>
        </div>
    </div>
</section>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>

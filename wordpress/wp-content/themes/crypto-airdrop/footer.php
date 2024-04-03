<?php
/**
 *    Footer 
 *
 * @package Crypto_AirDrop
 */
    //Footer Settings
    $cryptoairdrop_footer_widgets = get_theme_mod('cryptoairdrop_footer_widgets_enabled', 'true');
    $cryptoairdrop_footer_copyright = get_theme_mod('cryptoairdrop_footer_copyright_enabled', 'true');
    $cryptoairdrop_homepage_template_design = get_theme_mod('cryptoairdrop_homepage_template_design', 'cryptoairdrop_homepage_template_1');
    $cryptoairdrop_footer_copyright_text = get_theme_mod('cryptoairdrop_footer_copyright_text', __('Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> cryptoairdrop theme by WP Frank', 'crypto-airdrop'));
?>

    <?php 
    if ($cryptoairdrop_footer_widgets == 'true') { 
        // Fetch cryptoairdrop Theme Footer Widget
        get_template_part('sidebar', 'footer');
    } 
    ?>

    <?php if ($cryptoairdrop_footer_copyright == 'true') { ?>
    <!-- Footer Copyrights -->
    <footer class="footer-copyrights">
        <div class="container">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="site-info">
						<?php echo wp_kses_post($cryptoairdrop_footer_copyright_text); ?>    
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer Copyrights -->
    <?php } ?>

    <!-- Scroll To Top -->
    <a href="#" class="page-scroll-up" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
    <!-- /Scroll To Top -->

    <?php wp_footer(); ?> 
</body>
</html>

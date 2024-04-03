<?php
/**
 *    Breadcrumb Template
 *
 * @package Crypto_AirDrop.
 */

 $cryptoairdrop_page_header_disabled = get_theme_mod('cryptoairdrop_page_header_disabled', 'true');
    
if ($cryptoairdrop_page_header_disabled == true) { 
    ?>
    <!--Page Title-->
    <section class="page-title-module" style="background: url(<?php header_image(); ?>);">
        <div class="container">
            <div class="row">
                <!--<div id="particles-js" class="breadcrumb-particle"></div>-->
                <div class="col-md-12 col-sm-12 col-xs-12 content-center">
                    <div class="title text-center">
                        <?php 
                        if (is_home() || is_front_page()) {
                            echo '<h1 class="text-white">'; echo single_post_title(); echo '</h1>';
                        } else {
                            Cryptoairdrop_Theme_Page_Header_title();
                        }
                        
                        Cryptoairdrop_Page_Header_breadcrumbs();
                        ?>
                    </div>   
                    
                </div>
            </div>
        </div>    
    </section>
    <!--/End of Page Title-->
    <?php
}
?>

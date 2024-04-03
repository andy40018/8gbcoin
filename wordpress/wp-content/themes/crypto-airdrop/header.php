<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php
    /* Menu */
    $cryptoairdrop_loading_icon_enabled = get_theme_mod('cryptoairdrop_loading_icon_enabled', 1);
    ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
	<?php if($cryptoairdrop_loading_icon_enabled == true) { ?>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<?php } ?>
    <!--Navbar-->
    <header id="masthead" class="site-header">
        <div class="site-menu-content <?php echo esc_attr(Cryptoairdrop_Sticky_Main_Menu_class()); ?> <?php echo esc_attr(Cryptoairdrop_Is_Admin_Bar_enabled()); ?>">    
            <div class="navigation-wrap overlap-enable <?php echo esc_attr(Cryptoairdrop_Is_Box_Layout_enabled()); ?> start-header start-style text-center ">
                <?php echo esc_html(Cryptoairdrop_Header_logo()); ?>
                
                    <!-- Nav Menu -->

                        <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
                            
                            <button type="button" id="hamburger-menu" class="open-nav-btn" aria-label="<?php esc_attr_e('open navigation', 'crypto-airdrop'); ?>" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
                            <div id="slide-nav" class="slide-content navbar-collapse">
                                <button type="button" id="close" class="close-btn" aria-label="<?php esc_attr_e('close navigation', 'crypto-airdrop'); ?>"><i class="fas fa-times"></i></button>
                                    <span class="screen-reader-text"><?php esc_html_e('Primary Menu', 'crypto-airdrop'); ?></span>
                                    <span class="main-navigation__icon">
                                        <span class="main-navigation__icon__middle"></span>
                                    </span>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'primary-menu',
                                        'depth'           => 3,
                                        'menu_id'         => 'primary-menu',
                                        'container_class' => 'primary-menu-container',
                                        'fallback_cb'     => 'CryptoAirDrop_Bootstrap_Navwalker::fallback',
                                        'walker'          => new CryptoAirDrop_Bootstrap_Navwalker(),
                                    )
                                );
                                ?>
                            </div>
                        </nav>

                    <!-- Nav Menu -->
                
            </div>
        </div>
    </header>
    <!--/End Navbar-->

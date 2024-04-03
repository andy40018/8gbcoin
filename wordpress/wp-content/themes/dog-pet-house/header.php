<?php

/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dog_pet_house
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dog-pet-house' ); ?></a>
	 <?php
	if ( get_theme_mod( 'dog_pet_house_enable_preloader', false ) === true ) { ?>
		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/resource/loader.gif' ); ?>">
				</div>
			</div>
		</div>
	<?php } ?>
<header id="masthead" class="site-header">
	<div class="header-main-wrapper">
		<div class="bottom-header-outer-wrapper">
			<div class="bottom-header-part">
				<div class="asterthemes-wrapper">
					<div class="bottom-header-part-wrapper">
						<div class="bottom-header-middle-part">
							<div class="site-branding">
								<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
								<?php } ?>
								<div class="site-identity">
										<?php
										if ( get_theme_mod( 'dog_pet_house_enable_site_title_setting', true ) ) {
											if ( is_front_page() && is_home() ) :
												?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php
											else :
												?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
												<?php
											endif;
									    }

									    if ( get_theme_mod( 'dog_pet_house_enable_tagline_setting', false ) ) :
											$dog_pet_house_description = get_bloginfo( 'description', 'display' );

											if ( $dog_pet_house_description || is_customize_preview() ) :
												?>
											<p class="site-description">
												<?php
												echo esc_html( $dog_pet_house_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?>
											</p>
												<?php
											endif;
												?>
										<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="bottom-header-left-part">
							<div class="navigation-part">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
										<span></span>
										<span></span>
										<span></span>
									</button>
									<div class="main-navigation-links">
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
												)
											);
										?>
									</div>
								</nav>
							</div>
						</div>
						<div class="bottom-header-right-part">
						    <?php if(class_exists('woocommerce')){ ?>
				                <div class="user-account">
				                    <?php if ( is_user_logged_in() ) { ?>
				                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','dog-pet-house'); ?>"><i class="fas fa-sign-out-alt"></i></a>
				                    <?php } 
				                    else { ?>
				                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','dog-pet-house'); ?>"><i class="fas fa-user"></i></a>
				                    <?php } ?>
				                </div>
				            <?php }?>
							<?php if ( class_exists( 'woocommerce' ) ) {?>
								<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','dog-pet-house' ); ?>"><i class="fas fa-cart-plus mr-2"></i></a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
if ( ! is_front_page() || is_home() ) {

	if ( is_front_page() ) {

		require get_template_directory() . '/sections/sections.php';
		dog_pet_house_homepage_sections();

	}

	?>

	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>

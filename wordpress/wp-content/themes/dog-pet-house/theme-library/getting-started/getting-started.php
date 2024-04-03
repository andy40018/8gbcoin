<?php
/**
 * Getting Started Page.
 *
 * @package dog_pet_house
 */


if( ! function_exists( 'dog_pet_house_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function dog_pet_house_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'dog-pet-house' ),
		__( 'Getting Started', 'dog-pet-house' ),
		'manage_options',
		'dog-pet-house-getting-started',
		'dog_pet_house_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'dog_pet_house_getting_started_menu' );

if( ! function_exists( 'dog_pet_house_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function dog_pet_house_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_dog-pet-house-getting-started' != $hook ) return;

    wp_enqueue_style( 'dog-pet-house-getting-started', get_template_directory_uri() . '/resource/css/getting-started.css', false, DOG_PET_HOUSE_THEME_VERSION );

    wp_enqueue_script( 'dog-pet-house-getting-started', get_template_directory_uri() . '/resource/js/getting-started.js', array( 'jquery' ), DOG_PET_HOUSE_THEME_VERSION, true );
}
endif;
add_action( 'admin_enqueue_scripts', 'dog_pet_house_getting_started_admin_scripts' );

if( ! function_exists( 'dog_pet_house_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function dog_pet_house_getting_started_page(){ 
	$dog_pet_house_theme = wp_get_theme();?>
	<div class="wrap getting-started">
		<div class="intro-wrap">
			<div class="intro cointaner">
				<div class="intro-content">
					<h3><?php echo esc_html( 'Welcome to', 'dog-pet-house' );?> <span class="theme-name"><?php echo esc_html( DOG_PET_HOUSE_THEME_NAME ); ?></span></h3>
					<p class="about-text">
						<?php
						// Remove last sentence of description.
						$dog_pet_house_description = explode( '. ', $dog_pet_house_theme->get( 'Description' ) );

						array_pop( $dog_pet_house_description );

						$dog_pet_house_description = implode( '. ', $dog_pet_house_description );

						echo esc_html( $dog_pet_house_description . '.' );
					?></p>
					<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
			        <a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/dog-pet-house/reviews/#new-post' ); ?>" title="<?php esc_attr_e( 'Visit the Review', 'dog-pet-house' ); ?>" target="_blank">
			            <?php esc_html_e( 'REVIEW', 'dog-pet-house' ); ?>
			        </a>
			        <a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/dog-pet-house/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'dog-pet-house' ); ?>" target="_blank">
			            <?php esc_html_e( 'CONTACT SUPPORT', 'dog-pet-house' ); ?>
			        </a>
				</div>
				<div class="intro-img">
					<img src="<?php echo esc_url(get_template_directory_uri()) .'/screenshot.png'; ?>" />
				</div>
				
			</div>
		</div>

		<div class="cointaner panels">
			<ul class="inline-list">
				<li class="current">
                    <a id="help" href="javascript:void(0);">
                        <?php esc_html_e( 'Getting Started', 'dog-pet-house' ); ?>
                    </a>
                </li>
				<li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <?php esc_html_e( 'Free Vs Pro', 'dog-pet-house' ); ?>
                    </a>
                </li>
			</ul>
			<div id="panel" class="panel">
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/help-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/free-vs-pro-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/link-panel.php'; ?>
			</div>
		</div>
	</div>
	<?php
}
endif;
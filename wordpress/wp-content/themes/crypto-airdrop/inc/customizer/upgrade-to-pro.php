<?php
/**
 * Upgrade to pro options
 */
function Cryptoairdrop_upgrade_pro_options( $wp_customize ) {

	$wp_customize->add_section(
		'upgrade_premium',
		array(
			'title'    => __( 'About Theme', 'crypto-airdrop' ),
			'priority' => 1,
		)
	);

	class Cryptoairdrop_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( 'https://wpfrank.com/wordpress-themes/crypto-airdrop-premium/' ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Go To Pro', 'crypto-airdrop' ); ?> </a></li>

					<li><a class="documentation" href="<?php echo esc_url( 'https://www.youtube.com/playlist?list=PLOeoids2h7nKEX31CniGQbjHXZauj_ftQ' ); ?>" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Theme Documentation', 'crypto-airdrop' ); ?> </a></li>

					<li><a class="free-pro" href="<?php echo esc_url( 'https://wpfrank.com/wordpress-themes/crypto-airdrop-premium/#theme-demo-section/' ); ?>" target="_blank"><i class="dashicons dashicons-admin-tools"></i><?php esc_html_e( 'Free Vs Pro', 'crypto-airdrop' ); ?> </a></li>

					<li><a class="support" href="<?php echo esc_url( 'https://wpfrank.com/contact/' ); ?>" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php esc_html_e( 'Support Forum', 'crypto-airdrop' ); ?> </a></li>

					<li><a class="rate-us" href="<?php echo esc_url( 'https://wordpress.org/support/theme/crypto-airdrop/reviews/?filter=5' ); ?>" target="_blank"><i class="dashicons dashicons-star-filled"></i><?php esc_html_e( 'Show Some Love', 'crypto-airdrop' ); ?> </a></li>
				</ul>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Cryptoairdrop_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'upgrade_premium',
			)
		)
	);
}
add_action( 'customize_register', 'Cryptoairdrop_upgrade_pro_options' );

<?php
/** 
 * Customize Heading control class.
 *
 * @package Crypto AirDrop
 * 
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class cryptoairdrop_Customize_Upgrade_Control
 */
class cryptoairdrop_Customize_Upgrade_Control extends cryptoairdrop_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'cryptoairdrop-upgrade';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		$upgrade_to_pro_link = 'https://wpfrank.com/wordpress-themes/crypto-airdrop-premium/';
		?>

		<div class="cryptoairdrop-upgrade-pro-message" style="display:none;";>
			<# if ( data.label ) { #><h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > Crypto Airdrop Pro </a> to add more', 'crypto-airdrop'); ?> {{{ data.label }}} <?php esc_html_e( 'and get the other premium features.', 'crypto-airdrop') ?></h4><# } #>
		</div>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}
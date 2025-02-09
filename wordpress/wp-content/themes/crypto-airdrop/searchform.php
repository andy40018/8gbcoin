<?php
/**
 * Search Form
 *
 * @package Crypto_AirDrop
 */
?>
<form method="get" id="searchform" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="search-field" type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'crypto-airdrop'); ?>">
    </label>
    <label>
        <input type="submit" class="search-submit" value="<?php esc_attr_e('Search', 'crypto-airdrop'); ?>">
    </label>
</form>

<?php
/**
 * Recommended Plugins Panel
 *
 * @package crypto-airdrop
 */
?>
<div id="recommended-plugins-panel" class="panel-left">
    <?php 
    $cryptoairdrop_free_plugins = array(
    'wpfrank-companion' => array(
            'name'      => 'WpFrank Companion',
    'slug'         => 'wpfrank-companion',
    'filename'     => 'wpfrank-companion.php',
    ),
    );
    if (!empty($cryptoairdrop_free_plugins) ) { ?>
        <div class="recomended-plugin-wrap">
        <?php
        foreach ( $cryptoairdrop_free_plugins as $cryptoairdrop_plugin ) {
            $cryptoairdrop_info         = cryptoairdrop_call_plugin_api($cryptoairdrop_plugin['slug']); ?>
            <div class="recom-plugin-wrap mb-0">
                <div class="plugin-title-install clearfix">
                    <span class="title" title="">
            <?php esc_html_e('Recommended Plugin', 'crypto-airdrop'); ?>
                    </span>
                    <p><?php esc_html_e('WpFrank Companion Plugin is highly recommended for cryptoairdrop Theme, After installing it, you will be able to show all the Front-Page features and Business sections for your Website.', 'crypto-airdrop'); ?></p>
            <?php 
            echo '<div class="button-wrap">';
            echo cryptoairdrop_Getting_Started_Page_Plugin_Helper::instance()->get_button_html($cryptoairdrop_plugin['slug']);
            echo '</div>';
            ?>
                </div>
            </div>
            </br>
            <?php
        } ?>
        </div>
        <?php
    } ?>
</div>
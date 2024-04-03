<?php
/**
 *    Comments Page Template
 *
 * @package Crypto_AirDrop
 */

if (post_password_required() ) {
    return;
}
?>
<!-- Comments Area -->
<div id="comments" class="comments-area">
    <?php  

    $cryptoairdrop_fields=array(
    'author' => '<div class="form-group"></span></label><input class="form-control" name="author" id="author" value="" type="text" placeholder="'. esc_attr__("Name*", 'crypto-airdrop').'" /></div>',
    'email' => '<div class="form-group"></span></label><input class="form-control" name="email" id="email" value="" type="email" placeholder="'. esc_attr__("Email*", 'crypto-airdrop').'" ></div>',
    'website' => '<div class="form-group"></span></label><input class="form-control" name="website" id="website" value="" type="text" placeholder="'. esc_attr__("Website", 'crypto-airdrop').'" ></div>',
    );
    
    /**
     * Comment Fields
     * 
     * @return hook.
     */
    function Cryptoairdrop_Comment_fields($cryptoairdrop_fields)
    { 
        return $cryptoairdrop_fields;
    }
    add_filter('comment_form_default_fields', 'Cryptoairdrop_Comment_fields');
    $defaults = array(
                'fields'=> apply_filters('cryptoairdrop_comment_form_default_fields', $cryptoairdrop_fields),
                'comment_field'=> '<div class="form-group"><textarea id="comments" rows="5" class="form-control" name="comment" placeholder="Add a Comment" type="text" ></textarea></div>',
                'logged_in_as' => '<p class="logged-in-as">' . esc_html__("Logged in as", 'crypto-airdrop').' '.'<a href="'. esc_url(admin_url('profile.php')).'">'. esc_html($user_identity).'</a>'. '. '. '<a href="'. wp_logout_url(get_permalink()).'" title="'. esc_attr__("Log out of this account", 'crypto-airdrop').'">'.esc_html__("Logout", 'crypto-airdrop').'</a>' . '</p>',
                'id_submit'=> 'submit',
                'label_submit'=>esc_html__('Post Comment', 'crypto-airdrop'),
                'comment_notes_after'=> '',
                'title_reply'=> '<div class="theme-comment-title"><h5>'.esc_html__('Please Post Your Comments & Reviews', 'crypto-airdrop').'</h5></div>',
                'id_form'=> 'action'
    );
    comment_form($defaults);
    ?>
</div>
<!-- Comments Area -->

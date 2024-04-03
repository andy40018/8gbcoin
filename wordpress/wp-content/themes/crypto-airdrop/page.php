<?php
/**
 *    Page Template
 *
 * @package Crypto_AirDrop
 */

get_header(); 

    /* Defaults */
    $cryptoairdrop_blog_date = get_theme_mod('cryptoairdrop_blog_date', 'true');
    $cryptoairdrop_comment_zero_comment_text = get_theme_mod('cryptoairdrop_comment_zero_comment_text', 'No Comments');
    $cryptoairdrop_comment_one_comment_text = get_theme_mod('cryptoairdrop_comment_one_comment_text', '1 Comment');
    $cryptoairdrop_comment_multiple_comment_text = get_theme_mod('cryptoairdrop_comment_multiple_comment_text', '% Comments So far');

	$activate_theme_data = wp_get_theme(); // getting current theme data.
	$activate_theme = $activate_theme_data->name;

	if( 'Crypto Compare' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-dark';
	} else {
        $cryptoairdrop_theme_schema 	= 'theme-light';
    }
?>
<!-- Breadcrumbs -->
<?php get_template_part('breadcrumb'); ?>
<!-- Breadcrumbs -->

    <!-- Blog & Sidebar Section -->
    <section id="site-content" class="section <?php echo esc_html($cryptoairdrop_theme_schema); ?> menu-overlap">
        <div class="container">
            <div class="row">
                <?php
                // Page Layout Settings
                $cryptoairdrop_page_layout = get_theme_mod('cryptoairdrop_archive_blog_pages_layout', 'cryptoairdrop_right_sidebar');
                // Initialize Variable
                $cryptoairdrop_column_class = "col-md-12 col-sm-12 col-xs-12";
                
                // Check Sidebar Column Condition
                if ($cryptoairdrop_page_layout == "cryptoairdrop_right_sidebar" || $cryptoairdrop_page_layout == "cryptoairdrop_left_sidebar" && is_active_sidebar('sidebar-widget')  ) {
                    $cryptoairdrop_column_class = "col-md-8 col-sm-6 col-xs-12";
                }
                ?>            
                <!-- Left Sidebar -->
                <?php if ($cryptoairdrop_page_layout == "cryptoairdrop_left_sidebar") { ?>
                    <?php if (is_active_sidebar('sidebar-widget') ) { ?>
                        <!--Sidebar-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="sidebar space-left">
                        <?php dynamic_sidebar('sidebar-widget') ?>
                            </div>
                        </div>
                        <!--/Sidebar-->
                        <?php 
                    } 
                } ?>
                <!-- Left Sidebar -->    
            
                <!--Blog Posts-->
                <div class="<?php echo esc_attr($cryptoairdrop_column_class); ?>">
                    <div class="blog-page">            
                        <?php
                        if(have_posts()) :
                            while (have_posts()) : the_post();
                                the_content();
                                    
                                if ($post->comment_status == 'open' ) {
                                        
                                    ?>
                                    <!--Comment Section-->
                                    <article class="comment-section">
                                        <div class="comment-title"><h3><?php comments_number($cryptoairdrop_comment_zero_comment_text, $cryptoairdrop_comment_one_comment_text, $cryptoairdrop_comment_multiple_comment_text); ?></h3></div>
                                
                                             <?php 
                                                           //get comments
                                                           comments_template();
                                        
                                                if (have_comments() ) { //We have comments ?>
                                                
                                            <ul class="comment-list">
                                                    <?php
                                                    $args = array (
                                                    'max_depth'                => '4',
                                                    'style'                    => 'div',
                                                    'callback'                => 'cryptoairdrop_custom_comments',
                                                    'avatar_size'            => 50,
                                                    );
                                                    wp_list_comments($args);

                                                    ?>
                                            </ul>
                                                    <?php
                                                    paginate_comments_links(
                                                        array(
                                                        'prev_text' => __('&laquo', 'crypto-airdrop'),
                                                        'next_text' => __('&raquo', 'crypto-airdrop')
                                                        ) 
                                                    );
                                            
                                                    if (!comments_open() && get_comments_number() ) { ?>
                                                <p class="no-comments"><?php esc_html_e('Comments are closed', 'crypto-airdrop'); ?></p>
                                                    <?php } //comments open end
                                                } //have comments end
                                        
                                                ?>
                                    </article>
                                <!--/End of Comment Section-->
                                    <?php
                                }
                            endwhile;
                        endif;
                        // Reset Post Data
                        wp_reset_postdata();                            
                        ?>
                    </div>
                </div>    
                <!--Blog Posts-->

                <!-- Right Sidebar -->
                <?php if ($cryptoairdrop_page_layout == "cryptoairdrop_right_sidebar") { ?>
                    <?php if (is_active_sidebar('sidebar-widget') ) { ?>
                        <!--Sidebar-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="sidebar space-left">
                        <?php dynamic_sidebar('sidebar-widget') ?>
                            </div>
                        </div>
                        <!--/Sidebar-->
                        <?php 
                    } 
                } ?>
                <!-- Right Sidebar -->
                
            </div>
        </div>
    </section>
    <!-- End of Blog & Sidebar Section -->
    
<?php get_footer(); ?>

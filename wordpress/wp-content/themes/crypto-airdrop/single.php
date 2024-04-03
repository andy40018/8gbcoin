<?php
/**
 *    Single Template
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

	if( 'Crypto AirDrop' == $activate_theme || 'Crypto Token' == $activate_theme || 'Meme Token' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-light';
	}
	if( 'Crypto Compare' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-dark';
	}	
?>
<?php get_template_part('breadcrumb'); ?>
    <!-- Blog & Sidebar Section single.php-->
    <section id="site-content" class="section <?php echo esc_html($cryptoairdrop_theme_schema); ?> menu-overlap">
        <div class="container">
            <div class="row">
            
                <?php
                // Page Layout Settings
                $cryptoairdrop_page_layout = get_theme_mod('cryptoairdrop_single_blog_pages_layout', 'cryptoairdrop_right_sidebar');
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
                <div class="<?php echo esc_attr($cryptoairdrop_column_class);?>">
                    <div class="blog blog-single">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part('template-parts/content-single', get_post_type());
                            ?>
                                <!--Blog Author-->
                                <article class="blog-author">
                                    <div class="media row">
                                        <div class="media-avatar col-md-2">
                                            <figure class="avatar">
                                                <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" class="img-circle">
                                            </figure>
                                        </div>
                                        <div class="media-body col-md-10">
                                            <h5 class="name"><?php the_author(); ?></h5>
                                            <h6 class="designation"><?php esc_html_e('Founder & CEO', 'crypto-airdrop') ?></h6>
                                            <p><?php echo esc_html_e( the_author_meta( 'description' ) ); ?></p>
                                        </div>
                                    </div>    
                                </article>
                                <!--/ Blog Author-->

                            <?php
                            // Next & Previous Post
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                                    
                            if ((!empty($prev_post)) || (!empty($next_post)) ) {
                                ?>
                                    <!--Next Prev Posts-->
                                    <article class="post-navigation">
                                        <div class="row">
                                <?php
                                                    
                                //Previous Post
                                if(!empty($prev_post)) :
                                        $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                                        $prev_thumbnail = get_the_post_thumbnail_url($prev_post->ID);
                                    ?>  
                                                        <div class="col-6">
                                                            <div class="prev">
                                                                <a class="prev-post-label" href="<?php echo esc_url( get_permalink( get_previous_post() ) ); ?>">
                                              <?php if (!empty($prev_thumbnail)) { ?>
                                                                        <figure>
                                                                            <img width="160" height="160" src="<?php echo esc_url($prev_thumbnail); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
                                                                        </figure>    
                                              <?php } ?>
                                                                    <div class="prev-post-title">
                                                                        <span><i class="fas fa-angle-double-left"></i> <?php esc_html_e('Previous post', 'crypto-airdrop') ?></span>
                                                                        <h2><?php echo esc_html($prev_title); ?></h2>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                <?php
                                endif;
                                                    
                                //Next Post
                                if(!empty($next_post)) :
                                                    
                                            $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                                            $next_thumbnail = get_the_post_thumbnail_url($next_post->ID);
                                    ?>
                                                        <div class="col-6 text-right">
                                                            <div class="next">
                                                                <a class="next-post-label" href="<?php echo esc_url( get_permalink( get_next_post() ) ); ?>">
                                                                    <div class="next-post-title">
                                                                        <span><?php esc_html_e('Next post', 'crypto-airdrop') ?> <i class="fas fa-angle-double-right"></i></span>
                                                                        <h2><?php echo esc_html($next_title); ?></h2>
                                                                    </div>
                                    <?php if (!empty($next_thumbnail)) { ?>
                                                                        <figure>
                                                                            <img width="160" height="160" src="<?php echo esc_url($next_thumbnail); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
                                                                        </figure>
                                    <?php } ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                <?php endif; ?>
                                        </div>
                                    </article>
                                    <!--/ Next Prev Posts-->
                            <?php } ?>

                            <?php if ($post->comment_status == 'open' ) { ?>
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
                        // Reset Post Data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>    
                <!--/Blog Posts-->

                <!-- Right Sidebar -->
                <?php if ($cryptoairdrop_page_layout == "cryptoairdrop_right_sidebar") { ?>
                    <?php if (is_active_sidebar('sidebar-widget') ) { ?>
                        <!--Sidebar-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="sidebar space-right">
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

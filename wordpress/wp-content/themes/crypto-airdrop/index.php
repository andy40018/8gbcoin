<?php
/**
 *    Index Template
 *
 * @package Crypto_AirDrop
 */

get_header(); 

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
                <div class="<?php echo esc_attr($cryptoairdrop_column_class);?>">
                    <div class="blog">
                        <?php 
                        if (have_posts() ) :
                            while ( have_posts() ) : the_post();
                                get_template_part('template-parts/content', get_post_type());
                            endwhile;
                            ?>

                                <!--Pagination-->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="pagination">
                            <?php
                            // Custom query loop pagination
                            the_posts_pagination(
                                array(
                                'screen_reader_text' => ' ', 
                                'prev_text'          => '<i class="fa fa-angle-left"></i>',
                                'next_text'          => '<i class="fa fa-angle-right"></i>'
                                ) 
                            );
                            ?>
                                    </div>
                                </div>
                                <!-- Pagination -->
                            <?php 
                        endif;
                        // Reset Post Data
                        wp_reset_postdata(); ?>
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

<?php
/**
 *    Archive Page Template
 *
 * @package Crypto AirDrop
 */

get_header();

	$activate_theme_data = wp_get_theme(); // getting current theme data.
	$activate_theme = $activate_theme_data->name;

	if( 'Crypto AirDrop' == $activate_theme || 'Crypto Token' == $activate_theme || 'Meme Token' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-light';
	}
	if( 'Crypto Compare' == $activate_theme ) {
		$cryptoairdrop_theme_schema 	= 'theme-dark';
	}    
?>
    <!--Page Title-->
    <?php get_template_part('breadcrumb'); ?>
    <!--/End of Page Title-->

    <!-- Blog & Sidebar Section archive.php-->
    <section id="site-content" class="section <?php echo esc_html($cryptoairdrop_theme_schema); ?> menu-overlap">
        <div class="container">
            <div class="row">
                <?php
                // Page Layout Settings
                $cryptoairdrop_page_layout = get_theme_mod('cryptoairdrop_archive_blog_pages_layout', 'cryptoairdrop_right_sidebar');
                // Initialize Variable
                $cryptoairdrop_column_class = 'col-md-12 col-sm-12 col-xs-12';
                
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
                            // Start the Loop.
                            while ( have_posts() ) : the_post();
                                // Include the post format template for the content.
                                get_template_part('template-parts/content');
                            endwhile;
                        
                        endif;
                        ?>
                        <!--Pagination-->
                        <div class="pagination">
                            <?php
                                // Custom query loop pagination    
                                the_posts_pagination(
                                    array(
                                    'screen_reader_text' => ' ', 
                                    'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
                                    'next_text'          => '<i class="fa fa-angle-double-right"></i>'
                                    ) 
                                );
                                ?>
                        </div> 
                    </div>
                </div>    
                <!--/Blog Posts-->
                
                <!-- Right Sidebar -->
                <?php if ($cryptoairdrop_page_layout == "cryptoairdrop_right_sidebar") { ?>
                    <?php if (is_active_sidebar('sidebar-widget') ) { ?>
                        <!-- Sidebar-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="sidebar space-left">
                        <?php dynamic_sidebar('sidebar-widget') ?>
                            </div>
                        </div>
                        <!-- Sidebar-->
                        <?php 
                    } 
                } ?>
                <!-- Right Sidebar -->
                
            </div>
        </div>
    </section>
    <!-- End of Blog & Sidebar Section -->

    
    <div class="clearfix"></div>
    
<?php get_footer(); ?>

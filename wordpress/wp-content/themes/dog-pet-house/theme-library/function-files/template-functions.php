<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dog_pet_house
 */

function dog_pet_house_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$classes[] = dog_pet_house_sidebar_layout();

	return $classes;
}
add_filter( 'body_class', 'dog_pet_house_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dog_pet_house_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dog_pet_house_pingback_header' );


/**
 * Get all posts for customizer Post content type.
 */
function dog_pet_house_get_post_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'dog-pet-house' ) );
	$args    = array( 'numberposts' => -1 );
	$posts   = get_posts( $args );

	foreach ( $posts as $post ) {
		$id             = $post->ID;
		$title          = $post->post_title;
		$choices[ $id ] = $title;
	}

	return $choices;
}

/**
 * Get all pages for customizer Page content type.
 */
function dog_pet_house_get_page_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'dog-pet-house' ) );
	$pages   = get_pages();

	foreach ( $pages as $page ) {
		$choices[ $page->ID ] = $page->post_title;
	}

	return $choices;
}

/**
 * Get all categories for customizer Category content type.
 */
function dog_pet_house_get_post_cat_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'dog-pet-house' ) );
	$cats    = get_categories();

	foreach ( $cats as $cat ) {
		$choices[ $cat->term_id ] = $cat->name;
	}

	return $choices;
}

/**
 * Get all donation forms for customizer form content type.
 */
function dog_pet_house_get_post_donation_form_choices() {
	$choices = array( '' => esc_html__( '--Select--', 'dog-pet-house' ) );
	$posts   = get_posts(
		array(
			'post_type'   => 'give_forms',
			'numberposts' => -1,
		)
	);
	foreach ( $posts as $post ) {
		$choices[ $post->ID ] = $post->post_title;
	}
	return $choices;
}

if ( ! function_exists( 'dog_pet_house_excerpt_length' ) ) :
	/**
	 * Excerpt length.
	 */
	function dog_pet_house_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		return get_theme_mod( 'dog_pet_house_excerpt_length', 20 );
	}
endif;
add_filter( 'excerpt_length', 'dog_pet_house_excerpt_length', 999 );

if ( ! function_exists( 'dog_pet_house_excerpt_more' ) ) :
	/**
	 * Excerpt more.
	 */
	function dog_pet_house_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'dog_pet_house_excerpt_more' );

if ( ! function_exists( 'dog_pet_house_sidebar_layout' ) ) {
	/**
	 * Get sidebar layout.
	 */
	function dog_pet_house_sidebar_layout() {
		$sidebar_position      = get_theme_mod( 'dog_pet_house_sidebar_position', 'right-sidebar' );
		$sidebar_position_post = get_theme_mod( 'dog_pet_house_post_sidebar_position', 'right-sidebar' );
		$sidebar_position_page = get_theme_mod( 'dog_pet_house_page_sidebar_position', 'right-sidebar' );

		if ( is_single() ) {
			$sidebar_position = $sidebar_position_post;
		} elseif ( is_page() ) {
			$sidebar_position = $sidebar_position_page;
		}

		return $sidebar_position;
	}
}

if ( ! function_exists( 'dog_pet_house_is_sidebar_enabled' ) ) {
	/**
	 * Check if sidebar is enabled.
	 */
	function dog_pet_house_is_sidebar_enabled() {
		$sidebar_position      = get_theme_mod( 'dog_pet_house_sidebar_position', 'right-sidebar' );
		$sidebar_position_post = get_theme_mod( 'dog_pet_house_post_sidebar_position', 'right-sidebar' );
		$sidebar_position_page = get_theme_mod( 'dog_pet_house_page_sidebar_position', 'right-sidebar' );

		$sidebar_enabled = true;
		if ( is_home() || is_archive() || is_search() ) {
			if ( 'no-sidebar' === $sidebar_position ) {
				$sidebar_enabled = false;
			}
		} elseif ( is_single() ) {
			if ( 'no-sidebar' === $sidebar_position || 'no-sidebar' === $sidebar_position_post ) {
				$sidebar_enabled = false;
			}
		} elseif ( is_page() ) {
			if ( 'no-sidebar' === $sidebar_position || 'no-sidebar' === $sidebar_position_page ) {
				$sidebar_enabled = false;
			}
		}
		return $sidebar_enabled;
	}
}

if ( ! function_exists( 'dog_pet_house_get_homepage_sections ' ) ) {
	/**
	 * Returns homepage sections.
	 */
	function dog_pet_house_get_homepage_sections() {
		$sections = array(
			'banner'  => esc_html__( 'Banner Section', 'dog-pet-house' ),
			'product' => esc_html__( 'dog-pet-house Section', 'dog-pet-house' ),
		);
		return $sections;
	}
}

/**
 * Renders customizer section link
 */
function dog_pet_house_section_link( $section_id ) {
	$section_name      = str_replace( 'dog_pet_house_', ' ', $section_id );
	$section_name      = str_replace( '_', ' ', $section_name );
	$starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $starting_notation . $section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}

/**
 * Adds customizer section link css
 */
function dog_pet_house_section_link_css() {
	if ( is_customize_preview() ) {
		?>
		<style type="text/css">
			.section-link {
				visibility: hidden;
				background-color: black;
				position: relative;
				top: 80px;
				z-index: 99;
				left: 40px;
				color: #fff;
				text-align: center;
				font-size: 20px;
				border-radius: 10px;
				padding: 20px 10px;
				text-transform: capitalize;
			}

			.section-link-title {
				padding: 0 10px;
			}

			.banner-section {
				position: relative;
			}

			.banner-section .section-link {
				position: absolute;
				top: 100px;
			}
		</style>
		<?php
	}
}
add_action( 'wp_head', 'dog_pet_house_section_link_css' );

/**
 * Breadcrumb.
 */
function dog_pet_house_breadcrumb( $args = array() ) {
	if ( ! get_theme_mod( 'dog_pet_house_enable_breadcrumb', true ) ) {
		return;
	}

	$args = array(
		'show_on_front' => false,
		'show_title'    => true,
		'show_browse'   => false,
	);
	breadcrumb_trail( $args );
}
add_action( 'dog_pet_house_breadcrumb', 'dog_pet_house_breadcrumb', 10 );

/**
 * Add separator for breadcrumb trail.
 */
function dog_pet_house_breadcrumb_trail_print_styles() {
	$breadcrumb_separator = get_theme_mod( 'dog_pet_house_breadcrumb_separator', '/' );

	$style = '
		.trail-items li::after {
			content: "' . $breadcrumb_separator . '";
		}'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	$style = apply_filters( 'dog_pet_house_breadcrumb_trail_inline_style', trim( str_replace( array( "\r", "\n", "\t", '  ' ), '', $style ) ) );

	if ( $style ) {
		echo "\n" . '<style type="text/css" id="breadcrumb-trail-css">' . $style . '</style>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'dog_pet_house_breadcrumb_trail_print_styles' );

/**
 * Pagination for archive.
 */
function dog_pet_house_render_posts_pagination() {
	$is_pagination_enabled = get_theme_mod( 'dog_pet_house_enable_pagination', true );
	if ( $is_pagination_enabled ) {
		$pagination_type = get_theme_mod( 'dog_pet_house_pagination_type', 'default' );
		if ( 'default' === $pagination_type ) :
			the_posts_navigation();
		else :
			the_posts_pagination();
		endif;
	}
}
add_action( 'dog_pet_house_posts_pagination', 'dog_pet_house_render_posts_pagination', 10 );

/**
 * Pagination for single post.
 */
function dog_pet_house_render_post_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span>&#10229;</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-title">%title</span> <span>&#10230;</span>',
		)
	);
}
add_action( 'dog_pet_house_post_navigation', 'dog_pet_house_render_post_navigation' );

/**
 * Adds footer copyright text.
 */
function dog_pet_house_output_footer_copyright_content() {
    $dog_pet_house_theme_data = wp_get_theme();
    $dog_pet_house_copyright_text = get_theme_mod('dog_pet_house_footer_copyright_text');

    if (!empty($dog_pet_house_copyright_text)) {
        $dog_pet_house_text = esc_html($dog_pet_house_copyright_text);
    } else {
        $dog_pet_house_default_text = '<a href="'. esc_url(__('https://asterthemes.com/products/free-pet-wordpress-theme/','dog-pet-house')) . '" target="_blank"> ' . esc_html($dog_pet_house_theme_data->get('Name')) . '</a>' . '&nbsp;' . esc_html__('by', 'dog-pet-house') . '&nbsp;<a target="_blank" href="' . esc_url($dog_pet_house_theme_data->get('AuthorURI')) . '">' . esc_html(ucwords($dog_pet_house_theme_data->get('Author'))) . '</a>';
        $dog_pet_house_default_text .= sprintf(esc_html__(' | Powered by %s', 'dog-pet-house'), '<a href="' . esc_url(__('https://wordpress.org/', 'dog-pet-house')) . '" target="_blank">WordPress</a>. ');

        $dog_pet_house_text = $dog_pet_house_default_text;
    }
    ?>
    <span><?php echo wp_kses_post($dog_pet_house_text); ?></span>
    <?php
}
add_action('dog_pet_house_footer_copyright', 'dog_pet_house_output_footer_copyright_content');

/**
 * GET START FUNCTION
 */

function dog_pet_house_getpage_css($hook) {
	wp_enqueue_script( 'dog-pet-house-admin-script', get_template_directory_uri() . '/resource/js/dog-pet-house-admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script( 'dog-pet-house-admin-script', 'dog_pet_house_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style( 'dog-pet-house-notice-style', get_template_directory_uri() . '/resource/css/notice.css' );
}

add_action( 'admin_enqueue_scripts', 'dog_pet_house_getpage_css' );


add_action('wp_ajax_dog_pet_house_dismissable_notice', 'dog_pet_house_dismissable_notice');
function dog_pet_house_switch_theme() {
    delete_user_meta(get_current_user_id(), 'dog_pet_house_dismissable_notice');
}
add_action('after_switch_theme', 'dog_pet_house_switch_theme');
function dog_pet_house_dismissable_notice() {
    update_user_meta(get_current_user_id(), 'dog_pet_house_dismissable_notice', true);
    die();
}

function dog_pet_house_deprecated_hook_admin_notice() {

    $dog_pet_house_dismissed = get_user_meta(get_current_user_id(), 'dog_pet_house_dismissable_notice', true);
    if ( !$dog_pet_house_dismissed) { ?>
        <div class="getstrat updated notice notice-success is-dismissible notice-get-started-class">
	    	
	    	<div class="at-admin-content" ><h2><?php esc_html_e('Welcome to Dog Pet House', 'dog-pet-house'); ?></h2>
                <p><?php _e('Explore the features of our Pro Theme and take your Pet journey to the next level.', 'dog-pet-house'); ?></p>
                <p ><?php _e('Get Started With Theme By Clicking On Getting Started.', 'dog-pet-house'); ?><p>
                <div style="display: flex; justify-content: center;">

	        	<a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=dog-pet-house-getting-started' )); ?>"><?php esc_html_e( 'Get started', 'dog-pet-house' ) ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://demo.asterthemes.com/dog-pet-house/"><?php esc_html_e('View Demo', 'dog-pet-house') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://asterthemes.com/products/pet-house-wordpress-theme"><?php esc_html_e('Buy Now', 'dog-pet-house') ?></a>
                </div>
            </div>
            <div class="at-admin-image">
	    		<img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
	    	</div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'dog_pet_house_deprecated_hook_admin_notice' );

if ( ! function_exists( 'dog_pet_house_footer_widget' ) ) :
function dog_pet_house_footer_widget() {
	$dog_pet_house_footer_widget_column	= get_theme_mod('dog_pet_house_footer_widget_column','4'); 
		if ($dog_pet_house_footer_widget_column == '4') {
			$dog_pet_house_column = '3';
		} elseif ($dog_pet_house_footer_widget_column == '3') {
			$dog_pet_house_column = '4';
		} elseif ($dog_pet_house_footer_widget_column == '2') {
			$dog_pet_house_column = '6';
		} else{
			$dog_pet_house_column = '12';
		}
	if($dog_pet_house_footer_widget_column !==''): 
	?>
	<div class="dt_footer-widgets">
		
    <div class="footer-widgets-column">
    	<?php
		$dog_pet_house_footer_widget_column = get_theme_mod('dog_pet_house_footer_widget_column','4');
	for ($i=1; $i<=$dog_pet_house_footer_widget_column; $i++) { ?>
        <?php if ( is_active_sidebar( 'dog-pet-house-footer-widget-' .$i ) ) : ?>
            <div class="footer-one-column" >
                <?php dynamic_sidebar( 'dog-pet-house-footer-widget-'.$i); ?>
            </div>
        <?php endif; ?>
        <?php  } ?>
    </div>

</div>
	<?php 
	endif; } 
endif;
add_action( 'dog_pet_house_footer_widget', 'dog_pet_house_footer_widget' );
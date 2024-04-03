<?php    
/**
 *cryptocoin-lite Theme Customizer
 *
 * @package Cryptocoin Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cryptocoin_lite_customize_register( $wp_customize ) {	
	
	function cryptocoin_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function cryptocoin_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	} 
	
	function cryptocoin_lite_sanitize_phone_number( $phone ) {
		// sanitize phone
		return preg_replace( '/[^\d+]/', '', $phone );
	} 
	
	
	function cryptocoin_lite_sanitize_excerptrange( $number, $setting ) {	
		// Ensure input is an absolute integer.
		$number = absint( $number );	
		// Get the input attributes associated with the setting.
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;	
		// Get minimum number in the range.
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );	
		// Get maximum number in the range.
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );	
		// Get step.
		$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );	
		// If the number is within the valid range, return it; otherwise, return the default
		return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
	}

	function cryptocoin_lite_sanitize_number_absint( $number, $setting ) {
		// Ensure $number is an absolute integer (whole number, zero or greater).
		$number = absint( $number );		
		// If the input is an absolute integer, return it; otherwise, return the default
		return ( $number ? $number : $setting->default );
	}
	
	// Ensure is an absolute integer
	function cryptocoin_lite_sanitize_choices( $input, $setting ) {
		global $wp_customize; 
		$control = $wp_customize->get_control( $setting->id ); 
		if ( array_key_exists( $input, $control->choices ) ) {
			return $input;
		} else {
			return $setting->default;
		}
	}
	
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo h1 a',
		'render_callback' => 'cryptocoin_lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.logo p',
		'render_callback' => 'cryptocoin_lite_customize_partial_blogdescription',
	) );
		
	 	
	//Panel for section & control
	$wp_customize->add_panel( 'cryptocoin_lite_optionspanel_fortheme', array(
		'priority' => 4,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'CryptoCoin Lite Theme Settings', 'cryptocoin-lite' ),		
	) );

	$wp_customize->add_section('cryptocoin_lite_sitelayout',array(
		'title' => __('Layout Style','cryptocoin-lite'),			
		'priority' => 1,
		'panel' => 	'cryptocoin_lite_optionspanel_fortheme',          
	));		
	
	$wp_customize->add_setting('cryptocoin_lite_layoutoption',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_layoutoption', array(
    	'section'   => 'cryptocoin_lite_sitelayout',    	 
		'label' => __('Check to Show Box Layout','cryptocoin-lite'),
		'description' => __('check for box layout','cryptocoin-lite'),
    	'type'      => 'checkbox'
     )); //Box Layout Options 
	
	$wp_customize->add_setting('cryptocoin_lite_colorscheme',array(
		'default' => '#402cc3',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cryptocoin_lite_colorscheme',array(
			'label' => __('Color Scheme','cryptocoin-lite'),			
			'section' => 'colors',
			'settings' => 'cryptocoin_lite_colorscheme'
		))
	);
	
	$wp_customize->add_setting('cryptocoin_lite_secondcolor',array(
		'default' => '#01d37c',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cryptocoin_lite_secondcolor',array(
			'label' => __('Second Color','cryptocoin-lite'),			
			'section' => 'colors',
			'settings' => 'cryptocoin_lite_secondcolor'
		))
	);
	
	$wp_customize->add_setting('cryptocoin_lite_menufontcolor',array(
		'default' => '#333333',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cryptocoin_lite_menufontcolor',array(
			'label' => __('Navigation font Color','cryptocoin-lite'),			
			'section' => 'colors',
			'settings' => 'cryptocoin_lite_menufontcolor'
		))
	);
	
	
	$wp_customize->add_setting('cryptocoin_lite_menufontactivecolor',array(
		'default' => '#402cc3',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cryptocoin_lite_menufontactivecolor',array(
			'label' => __('Navigation Hover/Active Color','cryptocoin-lite'),			
			'section' => 'colors',
			'settings' => 'cryptocoin_lite_menufontactivecolor'
		))
	);
	
	
	 //Header Contact details
	$wp_customize->add_section('cryptocoin_lite_contactdetails',array(
		'title' => __('Header Contact Details','cryptocoin-lite'),				
		'priority' => null,
		'panel' => 	'cryptocoin_lite_optionspanel_fortheme',
	));	
	
	$wp_customize->add_setting('cryptocoin_lite_phoneno',array(
		'default' => null,
		'sanitize_callback' => 'cryptocoin_lite_sanitize_phone_number'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_phoneno',array(	
		'type' => 'text',
		'label' => __('Enter phone number here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails',
		'setting' => 'cryptocoin_lite_phoneno'
	));
	
	$wp_customize->add_setting('cryptocoin_lite_emailid',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('cryptocoin_lite_emailid',array(
		'type' => 'email',
		'label' => __('enter email id here.','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails'
	));	
	
	
	$wp_customize->add_setting('cryptocoin_lite_facebooklink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_facebooklink',array(
		'label' => __('Add facebook link here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails',
		'setting' => 'cryptocoin_lite_facebooklink'
	));	
	
	$wp_customize->add_setting('cryptocoin_lite_twitterlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('cryptocoin_lite_twitterlink',array(
		'label' => __('Add twitter link here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails',
		'setting' => 'cryptocoin_lite_twitterlink'
	));

	
	$wp_customize->add_setting('cryptocoin_lite_linkedinlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('cryptocoin_lite_linkedinlink',array(
		'label' => __('Add linkedin link here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails',
		'setting' => 'cryptocoin_lite_linkedinlink'
	));
	
	$wp_customize->add_setting('cryptocoin_lite_instagramlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('cryptocoin_lite_instagramlink',array(
		'label' => __('Add instagram link here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_contactdetails',
		'setting' => 'cryptocoin_lite_instagramlink'
	));		
	
	$wp_customize->add_setting('cryptocoin_lite_show_contactdinfo',array(
		'default' => false,
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'cryptocoin_lite_show_contactdinfo', array(
	   'settings' => 'cryptocoin_lite_show_contactdinfo',
	   'section'   => 'cryptocoin_lite_contactdetails',
	   'label'     => __('Check To show Header contact Section','cryptocoin-lite'),
	   'type'      => 'checkbox'
	 ));//Show Contact Details
	 
	 	
	//HomePage Slide Section		
	$wp_customize->add_section( 'cryptocoin_lite_slder_sections', array(
		'title' => __('Home Page Slider Sections', 'cryptocoin-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 698 pixel.','cryptocoin-lite'), 
		'panel' => 	'cryptocoin_lite_optionspanel_fortheme',           			
    ));
	
	$wp_customize->add_setting('cryptocoin_lite_slider1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('cryptocoin_lite_slider1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 1:','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_slder_sections'
	));	
	
	$wp_customize->add_setting('cryptocoin_lite_slider2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('cryptocoin_lite_slider2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 2:','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_slder_sections'
	));	
	
	$wp_customize->add_setting('cryptocoin_lite_slider3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('cryptocoin_lite_slider3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide 3:','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_slder_sections'
	));	//frontpage Slider Section	
	
	//Slider Excerpt Length
	$wp_customize->add_setting( 'cryptocoin_lite_excerpt_length_slider', array(
		'default'              => 10,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'cryptocoin_lite_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'cryptocoin_lite_excerpt_length_slider', array(
		'label'       => __( 'Slider Excerpt length','cryptocoin-lite' ),
		'section'     => 'cryptocoin_lite_slder_sections',
		'type'        => 'range',
		'settings'    => 'cryptocoin_lite_excerpt_length_slider','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );	
	
	$wp_customize->add_setting('cryptocoin_lite_slider_moretext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_slider_moretext',array(	
		'type' => 'text',
		'label' => __('enter button name here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_slder_sections',
		'setting' => 'cryptocoin_lite_slider_moretext'
	)); // slider read more button text
	
		
	$wp_customize->add_setting('cryptocoin_lite_show_slider_sections',array(
		'default' => false,
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'cryptocoin_lite_show_slider_sections', array(
	    'settings' => 'cryptocoin_lite_show_slider_sections',
	    'section'   => 'cryptocoin_lite_slder_sections',
	    'label'     => __('Check To Show This Section','cryptocoin-lite'),
	   'type'      => 'checkbox'
	 ));//Show Home Page Slider Sections	
	 
	 
	 //Four Column Sections
	$wp_customize->add_section('cryptocoin_lite_fourcol_sections', array(
		'title' => __('Four Column Sections','cryptocoin-lite'),
		'description' => __('Select pages from the dropdown for four column sections','cryptocoin-lite'),
		'priority' => null,
		'panel' => 	'cryptocoin_lite_optionspanel_fortheme',          
	));
	
	$wp_customize->add_setting('cryptocoin_lite_sectiontitle',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_sectiontitle',array(	
		'type' => 'text',
		'label' => __('Enter section title here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_fourcol_sections',
		'setting' => 'cryptocoin_lite_sectiontitle'
	)); // Section Title text
	
	$wp_customize->add_setting('cryptocoin_lite_sectionshortinfo',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_sectionshortinfo',array(	
		'type' => 'text',
		'label' => __('Enter section short description here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_fourcol_sections',
		'setting' => 'cryptocoin_lite_sectionshortinfo'
	)); // Section short text
		
	$wp_customize->add_setting('cryptocoin_lite_fourpagecol1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'cryptocoin_lite_fourpagecol1',array(
		'type' => 'dropdown-pages',			
		'section' => 'cryptocoin_lite_fourcol_sections',
	));		
	
	$wp_customize->add_setting('cryptocoin_lite_fourpagecol2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'cryptocoin_lite_fourpagecol2',array(
		'type' => 'dropdown-pages',			
		'section' => 'cryptocoin_lite_fourcol_sections',
	));
	
	$wp_customize->add_setting('cryptocoin_lite_fourpagecol3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'cryptocoin_lite_fourpagecol3',array(
		'type' => 'dropdown-pages',			
		'section' => 'cryptocoin_lite_fourcol_sections',
	));
	
	$wp_customize->add_setting('cryptocoin_lite_fourpagecol4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'cryptocoin_lite_fourpagecol4',array(
		'type' => 'dropdown-pages',			
		'section' => 'cryptocoin_lite_fourcol_sections',
	));
	
	$wp_customize->add_setting( 'cryptocoin_lite_excerpt_length_fourpagecol', array(
		'default'              => 10,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'cryptocoin_lite_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'cryptocoin_lite_excerpt_length_fourpagecol', array(
		'label'       => __( 'Circle box excerpt length','cryptocoin-lite' ),
		'section'     => 'cryptocoin_lite_fourcol_sections',
		'type'        => 'range',
		'settings'    => 'cryptocoin_lite_excerpt_length_fourpagecol','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );	
	
	
	$wp_customize->add_setting('cryptocoin_lite_show_fourcol_sections',array(
		'default' => false,
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));		
	
	$wp_customize->add_control( 'cryptocoin_lite_show_fourcol_sections', array(
	   'settings' => 'cryptocoin_lite_show_fourcol_sections',
	   'section'   => 'cryptocoin_lite_fourcol_sections',
	   'label'     => __('Check To Show This Section','cryptocoin-lite'),
	   'type'      => 'checkbox'
	 ));//Show Four Circle Column sections
	 
	  //Welcome Sections
	$wp_customize->add_section('cryptocoin_lite_welcomesection', array(
		'title' => __('Welcome Sections','cryptocoin-lite'),
		'description' => __('Select pages from the dropdown for four column sections','cryptocoin-lite'),
		'priority' => null,
		'panel' => 	'cryptocoin_lite_optionspanel_fortheme',          
	));
	
	$wp_customize->add_setting('cryptocoin_lite_welcomesection_subtitle',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_welcomesection_subtitle',array(	
		'type' => 'text',
		'label' => __('Enter section sub title here','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_welcomesection',
		'setting' => 'cryptocoin_lite_welcomesection_subtitle'
	)); // Section Sub Title text
	
	
		
	$wp_customize->add_setting('cryptocoin_lite_welcomepage',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cryptocoin_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'cryptocoin_lite_welcomepage',array(
		'type' => 'dropdown-pages',			
		'section' => 'cryptocoin_lite_welcomesection',
	));		
	
	
	
	$wp_customize->add_setting( 'cryptocoin_lite_excerpt_length_welcomepage', array(
		'default'              => 80,
		'type'                 => 'theme_mod',		
		'sanitize_callback'    => 'cryptocoin_lite_sanitize_excerptrange',		
	) );
	$wp_customize->add_control( 'cryptocoin_lite_excerpt_length_welcomepage', array(
		'label'       => __( 'Circle box excerpt length','cryptocoin-lite' ),
		'section'     => 'cryptocoin_lite_welcomesection',
		'type'        => 'range',
		'settings'    => 'cryptocoin_lite_excerpt_length_welcomepage','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	
	$wp_customize->add_setting('cryptocoin_lite_welcome_readmoretext',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('cryptocoin_lite_welcome_readmoretext',array(	
		'type' => 'text',
		'label' => __('Enter read more button text','cryptocoin-lite'),
		'section' => 'cryptocoin_lite_welcomesection',
		'setting' => 'cryptocoin_lite_welcome_readmoretext'
	)); // slider read more button text	
	
	
	$wp_customize->add_setting('cryptocoin_lite_show_welcomesection',array(
		'default' => false,
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));		
	
	$wp_customize->add_control( 'cryptocoin_lite_show_welcomesection', array(
	   'settings' => 'cryptocoin_lite_show_welcomesection',
	   'section'   => 'cryptocoin_lite_welcomesection',
	   'label'     => __('Check To Show This Section','cryptocoin-lite'),
	   'type'      => 'checkbox'
	 ));//Show Welcome sections
	 
	 //Blog Posts Settings
	$wp_customize->add_panel( 'cryptocoin_lite_blogsettings_panel', array(
		'priority' => 3,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Blog Posts Settings', 'cryptocoin-lite' ),		
	) );
	
	$wp_customize->add_section('cryptocoin_lite_blogmeta_options',array(
		'title' => __('Blog Meta Options','cryptocoin-lite'),			
		'priority' => null,
		'panel' => 	'cryptocoin_lite_blogsettings_panel', 	         
	));		
	
	$wp_customize->add_setting('cryptocoin_lite_hide_blogdate',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_hide_blogdate', array(
    	'label' => __('Check to hide post date','cryptocoin-lite'),	
		'section'   => 'cryptocoin_lite_blogmeta_options', 
		'setting' => 'cryptocoin_lite_hide_blogdate',		
    	'type'      => 'checkbox'
     )); //Blog Post Date
	 
	 
	 $wp_customize->add_setting('cryptocoin_lite_hide_postcats',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_hide_postcats', array(
		'label' => __('Check to hide post category','cryptocoin-lite'),	
    	'section'   => 'cryptocoin_lite_blogmeta_options',		
		'setting' => 'cryptocoin_lite_hide_postcats',		
    	'type'      => 'checkbox'
     )); //blog Posts category	 
	 
	 
	 $wp_customize->add_section('cryptocoin_lite_postfeatured_image',array(
		'title' => __('Posts Featured image','cryptocoin-lite'),			
		'priority' => null,
		'panel' => 	'cryptocoin_lite_blogsettings_panel', 	         
	));		
	
	$wp_customize->add_setting('cryptocoin_lite_hide_postfeatured_image',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_hide_postfeatured_image', array(
		'label' => __('Check to hide post featured image','cryptocoin-lite'),
    	'section'   => 'cryptocoin_lite_postfeatured_image',		
		'setting' => 'cryptocoin_lite_hide_postfeatured_image',	
    	'type'      => 'checkbox'
     )); //Posts featured image
	
	$wp_customize->add_section('cryptocoin_lite_blogpost_content_settings',array(
		'title' => __('Posts Excerpt Options','cryptocoin-lite'),			
		'priority' => null,
		'panel' => 	'cryptocoin_lite_blogsettings_panel', 	         
	 ));	 
	 
	$wp_customize->add_setting( 'cryptocoin_lite_blogexcerptrange', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cryptocoin_lite_sanitize_excerptrange',		
	) );
	
	$wp_customize->add_control( 'cryptocoin_lite_blogexcerptrange', array(
		'label'       => __( 'Excerpt length','cryptocoin-lite' ),
		'section'     => 'cryptocoin_lite_blogpost_content_settings',
		'type'        => 'range',
		'settings'    => 'cryptocoin_lite_blogexcerptrange','input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting('cryptocoin_lite_blogfullcontent',array(
        'default' => 'Excerpt',     
        'sanitize_callback' => 'cryptocoin_lite_sanitize_choices'
	));
	
	$wp_customize->add_control('cryptocoin_lite_blogfullcontent',array(
        'type' => 'select',
        'label' => __('Posts Content','cryptocoin-lite'),
        'section' => 'cryptocoin_lite_blogpost_content_settings',
        'choices' => array(
        	'Content' => __('Content','cryptocoin-lite'),
            'Excerpt' => __('Excerpt','cryptocoin-lite'),
            'No Content' => __('No Excerpt','cryptocoin-lite')
        ),
	) ); 
	
	
	$wp_customize->add_section('cryptocoin_lite_postsinglemeta',array(
		'title' => __('Posts Single Settings','cryptocoin-lite'),			
		'priority' => null,
		'panel' => 	'cryptocoin_lite_blogsettings_panel', 	         
	));	
	
	$wp_customize->add_setting('cryptocoin_lite_hide_postdate_fromsingle',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_hide_postdate_fromsingle', array(
    	'label' => __('Check to hide post date from single','cryptocoin-lite'),	
		'section'   => 'cryptocoin_lite_postsinglemeta', 
		'setting' => 'cryptocoin_lite_hide_postdate_fromsingle',		
    	'type'      => 'checkbox'
     )); //Hide Posts date from single
	 
	 
	 $wp_customize->add_setting('cryptocoin_lite_hide_postcats_fromsingle',array(
		'sanitize_callback' => 'cryptocoin_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'cryptocoin_lite_hide_postcats_fromsingle', array(
		'label' => __('Check to hide post category from single','cryptocoin-lite'),	
    	'section'   => 'cryptocoin_lite_postsinglemeta',		
		'setting' => 'cryptocoin_lite_hide_postcats_fromsingle',		
    	'type'      => 'checkbox'
     )); //Hide blogposts category single
		 
}
add_action( 'customize_register', 'cryptocoin_lite_customize_register' );

function cryptocoin_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a,
        #sidebar ul li a:hover,
		#sidebar ol li a:hover,							
        .BlogPosts-List h3 a:hover,
		.site-footer ul li a:hover, 
		.site-footer ul li.current_page_item a,				
        .postmeta a:hover,
        .button:hover,
		.FourBX:hover h5 a,
		.welcome_contentBX h5,
		h2.services_title span,			
		.blog-postmeta a:hover,
		.blog-postmeta a:focus,
		blockquote::before	
            { color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_colorscheme','#402cc3')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,
        .nivo-controlNav a.active,
		.sd-search input, .sd-top-bar-nav .sd-search input,			
		a.blogreadmore,
		.Sb-Col3,
		a.ReadMoreBtn,
		.copyrigh-wrapper:before,										
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,		
		.morebutton,
		.hdrtop-bar,
		.nivo-directionNav a:hover,	
		.nivo-caption .slidermorebtn:hover		
            { background-color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_colorscheme','#402cc3')); ?>;}
			

		
		.tagcloud a:hover,
		.logo::after,
		blockquote
            { border-color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_colorscheme','#402cc3')); ?>;}
			
		#SiteWrapper a:focus,
		input[type="date"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="button"]:focus,
		input[type="month"]:focus,
		button:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="range"]:focus,		
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="week"]:focus,
		input[type="submit"]:focus,
		input[type="datetime-local"]:focus,		
		input[type="url"]:focus,
		input[type="time"]:focus,
		input[type="reset"]:focus,
		input[type="color"]:focus,
		textarea:focus
            { outline:1px solid <?php echo esc_html( get_theme_mod('cryptocoin_lite_colorscheme','#402cc3')); ?>;}	
			
		.hdr-topstrip,
		.Sb-Col3:hover,
		.header-request-quote,
		.FourBX:hover .topboxbg,
		.header-request-quote:after,
		.Sb-Col3.BX2:hover,
		.nivo-caption .slidermorebtn:hover 			
            { background-color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_secondcolor','#01d37c')); ?>;}
			
		.site-footer h2::before,
		.site-footer h3::before,
		.site-footer h4::before,
		.site-footer h5::before
            { border-color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_secondcolor','#01d37c')); ?>;}			
			
		
		.hdr-nav a,
		.hdr-nav ul li.current_page_parent ul.sub-menu li a,
		.hdr-nav ul li.current_page_parent ul.sub-menu li.current_page_item ul.sub-menu li a,
		.hdr-nav ul li.current-menu-ancestor ul.sub-menu li.current-menu-item ul.sub-menu li a  			
            { color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_menufontcolor','#333333')); ?>;}	
			
		
		.hdr-nav ul.nav-menu .current_page_item > a,
		.hdr-nav ul.nav-menu .current-menu-item > a,
		.hdr-nav ul.nav-menu .current_page_ancestor > a,
		.hdr-nav ul.nav-menu .current-menu-ancestor > a, 
		.hdr-nav .nav-menu a:hover,
		.hdr-nav .nav-menu a:focus,
		.hdr-nav .nav-menu ul a:hover,
		.hdr-nav .nav-menu ul a:focus,
		.hdr-nav ul li a:hover, 
		.hdr-nav ul li.current-menu-item a,			
		.hdr-nav ul li.current_page_parent ul.sub-menu li.current-menu-item a,
		.hdr-nav ul li.current_page_parent ul.sub-menu li a:hover,
		.hdr-nav ul li.current-menu-item ul.sub-menu li a:hover,
		.hdr-nav ul li.current-menu-ancestor ul.sub-menu li.current-menu-item ul.sub-menu li a:hover 		 			
            { color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_menufontactivecolor','#402cc3')); ?>;}
			
		.hdrtopcart .cart-count
            { background-color:<?php echo esc_html( get_theme_mod('cryptocoin_lite_menufontactivecolor','#402cc3')); ?>;}		
			
		#SiteWrapper .hdr-nav a:focus		 			
            { outline:1px solid <?php echo esc_html( get_theme_mod('cryptocoin_lite_menufontactivecolor','#402cc3')); ?>;}	
	
    </style> 
<?php  
}
         
add_action('wp_head','cryptocoin_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cryptocoin_lite_customize_preview_js() {
	wp_enqueue_script( 'cryptocoin_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '19062019', true );
}
add_action( 'customize_preview_init', 'cryptocoin_lite_customize_preview_js' );
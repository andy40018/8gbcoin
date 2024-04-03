<?php
	$font_size = array();
	for($i=9; $i<=100; $i++){			
		$font_size[$i] = $i;
	}

	$line_height = array();
	for($i=1; $i<=100; $i++){           
		$line_height[$i] = $i;
	}

	//(A) Base Typo Settings
		//1. Base Font family
		
	//(A) Base Typo Settings
	
	//(B) Header typography Settings Start
		// 1. Site Title Typography Settings Start----
			class cryptoairdrop_Sitetitle_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_header_site_title';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Site Title Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Site Title Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_header_site_title',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Sitetitle_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_header_site_title', array(	
				'section'		=> 'cryptoairdrop_header_typography',
				'setting'		=> 'cryptoairdrop_typography_header_site_title',
				'priority'		=> 5,
			)));
			// b. Site Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_title_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_header_site_title_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_header_typography',
				'settings'	=> 'cryptoairdrop_typography_header_site_title_ff',
				'priority'	=> 10,
				
			) ) );
			// c. Site Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_title_fs',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_site_title_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 15,
			));
			// d. Site Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_title_lh',array(
				'default'			=> 39,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_site_title_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 20,
			));
		// 1. Site Title Typography Settings End----
		
		
		// 2. Site Tagline Typography Settings Start----
			class cryptoairdrop_Sitetagline_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_header_site_tagline';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Site Tagline Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Site Tagline Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_header_site_tagline',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Sitetagline_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_header_site_tagline', array(	
				'section'		=> 'cryptoairdrop_header_typography',
				'setting'		=> 'cryptoairdrop_typography_header_site_tagline',
				'priority'		=> 30,
			)));
			// b. Site Tagline Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_tagline_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_header_site_tagline_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_header_typography',
				'settings'	=> 'cryptoairdrop_typography_header_site_tagline_ff',
				'priority'	=> 40,
				
			) ) );
			// c. Site Tagline font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_tagline_fs',array(
				'default'			=> 20,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_site_tagline_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 50,
			));
			// d. Site Tagline line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_site_tagline_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_site_tagline_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 60,
			));
		// 2. Site Title Typography Settings End----
		
		
		// 3. Site Menu Typography Settings Start----
			class cryptoairdrop_Menus_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_header_menus';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Site Menus Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Menus Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_header_menus',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Menus_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_header_menus', array(	
				'section'		=> 'cryptoairdrop_header_typography',
				'setting'		=> 'cryptoairdrop_typography_header_menus',
				'priority'		=> 70,
			)));
			// b. Menus Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_menus_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_header_menus_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_header_typography',
				'settings'	=> 'cryptoairdrop_typography_header_menus_ff',
				'priority'	=> 80,	
			) ) );
			// c. Menus font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_menus_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_menus_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 90,
			));
			// d. Menus line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_menus_lh',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_menus_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 100,
			));
		// 3. Menus Typography Settings End----
		
		
		// 4. Sub Menu Typography Settings Start----
			class cryptoairdrop_SubMenus_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_header_submenus';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Site Sub Menus Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Sub-Menus Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_header_submenus',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_SubMenus_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_header_submenus', array(	
				'section'		=> 'cryptoairdrop_header_typography',
				'setting'		=> 'cryptoairdrop_typography_header_submenus',
				'priority'		=> 120,
			)));
			// b. Sub-Menus Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_submenus_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_header_submenus_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_header_typography',
				'settings'	=> 'cryptoairdrop_typography_header_submenus_ff',
				'priority'	=> 130,
			) ) );
			// c. Sub-Menus font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_submenus_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_submenus_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 140,
			));
			// d. Sub-Menus line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_header_submenus_lh',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_header_submenus_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_header_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 150,
			));
		// 4. Sub-Menus Typography Settings End----
	//(B) Header typo Settings End
	
	
	//(C) Slider Typography Settings Start
		// 1. Slider Title Typography Settings Start----
			class cryptoairdrop_Slider_Title_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_homepage_slider_title';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Slider Title Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Slider Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_homepage_slider_title',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Slider_Title_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_homepage_slider_title', array(	
				'section'		=> 'cryptoairdrop_slider_typography',
				'setting'		=> 'cryptoairdrop_typography_homepage_slider_title',
				'priority'		=> 10,
			)));
			// b. Slider Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_title_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_homepage_slider_title_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_slider_typography',
				'settings'	=> 'cryptoairdrop_typography_homepage_slider_title_ff',
				'priority'	=> 20,
			) ) );
			// c. Slider Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_title_fs',array(
				'default'			=> 46,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_slider_title_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_slider_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 30,
			));
			// d. Slider Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_title_lh',array(
				'default'			=> 60,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_slider_title_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_slider_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 40,
			));
			
		// 1. Slider Title Typography Settings End----
		
		// 2. Slider SubTitle Typography Settings Start----
			class cryptoairdrop_Slider_SubTitle_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_homepage_slider_subtitle';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Slider SubTitle Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Slider Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_homepage_slider_subtitle',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Slider_SubTitle_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_homepage_slider_subtitle', array(	
				'section'		=> 'cryptoairdrop_slider_typography',
				'setting'		=> 'cryptoairdrop_typography_homepage_slider_subtitle',
				'priority'		=> 50,
			)));
			// b. Slider Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_subtitle_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_homepage_slider_subtitle_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_slider_typography',
				'settings'	=> 'cryptoairdrop_typography_homepage_slider_subtitle_ff',
				'priority'	=> 60,
			) ) );
			// c. Slider Sub Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_subtitle_fs',array(
				'default'			=> 18,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_slider_subtitle_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_slider_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 80,
			));
			// d. Slider Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_slider_subtitle_lh',array(
				'default'			=> 26,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_slider_subtitle_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_slider_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 100,
			));

		// 2. Slider Subtitle Typography Settings End----
	//(C). Slider Typography Settings End----
		
	//(D). Homepage Typography Settings End----
		// 1. Sections Title Typography Settings Start----
			class cryptoairdrop_HomepageTitle_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_homepage_sections_title';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Sections Title','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Section Title Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_homepage_sections_title',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_HomepageTitle_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_homepage_sections_title', array(	
				'section'		=> 'cryptoairdrop_homepage_typography',
				'setting'		=> 'cryptoairdrop_typography_homepage_sections_title',
				'priority'		=> 50,
			)));
			// b. Section Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_title_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_homepage_sections_title_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_homepage_typography',
				'settings'	=> 'cryptoairdrop_typography_homepage_sections_title_ff',
				'priority'	=> 60,
			) ) );
			// c. Section Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_title_fs',array(
				'default'			=> 42,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_sections_title_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 70,
			));
			// d. Section Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_title_lh',array(
				'default'			=> 58,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_sections_title_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 80,
			));
		// 1. Sections Title Typography Settings End----
		
		// 2. Sections Sub-Title Typography Settings Start----
			class cryptoairdrop_HomepageSubTitle_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_homepage_sections_subtitle';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Sections Sub Title','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Section SubTitle Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_homepage_sections_subtitle',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_HomepageSubTitle_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_homepage_sections_subtitle', array(	
				'section'		=> 'cryptoairdrop_homepage_typography',
				'setting'		=> 'cryptoairdrop_typography_homepage_sections_subtitle',
				'priority'		=> 100,
			)));
			// b. Section SubTitle Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_subtitle_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_homepage_sections_subtitle_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_homepage_typography',
				'settings'	=> 'cryptoairdrop_typography_homepage_sections_subtitle_ff',
				'priority'	=> 120,
			) ) );
			// c. Section SubTitle font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_subtitle_fs',array(
				'default'			=> 16,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_sections_subtitle_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 130,
			));
			// d. Section SubTitle line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_homepage_sections_subtitle_lh',array(
				'default'			=> 26,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_homepage_sections_subtitle_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 140,
			));
		
		// 3. Sections Paragraph Typography Settings Start----
			class cryptoairdrop_Paragraph_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_paragraph';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Paragraph Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. p Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_paragraph',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Paragraph_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_paragraph', array(	
				'section'		=> 'cryptoairdrop_homepage_typography',
				'setting'		=> 'cryptoairdrop_typography_paragraph',
				'priority'		=> 200,
			)));
			// b. p Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_paragraph_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_paragraph_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_homepage_typography',
				'settings'	=> 'cryptoairdrop_typography_paragraph_ff',
				'priority'	=> 220,
			) ) );
			// c. p font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_paragraph_fs',array(
				'default'			=> 14,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_paragraph_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 230,
			));
			// d. p line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_paragraph_lh',array(
				'default'			=> 21,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_paragraph_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 240,
			));
		// 3. Paragraph Typography Settings End----

		// 4. Sections Button Typography Settings Start----
			class cryptoairdrop_Button_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_button';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Button Text Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. button Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_button',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Button_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_button', array(	
				'section'		=> 'cryptoairdrop_homepage_typography',
				'setting'		=> 'cryptoairdrop_typography_button',
				'priority'		=> 300,
			)));
			// b. button Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_button_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_button_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_homepage_typography',
				'settings'	=> 'cryptoairdrop_typography_button_ff',
				'priority'	=> 320,
			) ) );
			// c. button font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_button_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_button_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 330,
			));
			// d. button line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_button_lh',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_button_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_homepage_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 340,
			));
		// 4. Button Typography Settings End----

	//(D)Homepage Sections typo Settings End
	
	//(E)Homepage Sections typo Settings Start
	
		//1. H1 Heading typo Settings
		class cryptoairdrop_Headings_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h1';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H1 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h1 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h1',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h1', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h1',
				'priority'		=> 10,
			)));
			// b. h1 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h1_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h1_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h1_ff',
				'priority'	=> 20,
			) ) );
			// c. h1 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h1_fs',array(
				'default'			=> 36,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h1_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 30,
			));
			// d. h1 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h1_lh',array(
				'default'			=> 54,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h1_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 40,
			));
		
		//2. H2 Heading typo Settings
		class cryptoairdrop_Headings2_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h2';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H2 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h2 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h2',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings2_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h2', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h2',
				'priority'		=> 60,
			)));
			// b. h2 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h2_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h2_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h2_ff',
				'priority'	=> 70,
			) ) );
			// c. h2 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h2_fs',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h2_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 80,
			));
			// d. h2 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h2_lh',array(
				'default'			=> 45,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h2_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 90,
			));
		
		//3. H3 Heading typo Settings
		class cryptoairdrop_Headings3_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h3';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H3 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h3 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h3',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings3_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h3', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h3',
				'priority'		=> 160,
			)));
			// b. h3 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h3_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h3_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h3_ff',
				'priority'	=> 170,
			) ) );
			// c. h3 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h3_fs',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h3_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 180,
			));
			// d. h3 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h3_lh',array(
				'default'			=> 36,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h3_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 190,
			));
	
		//4. H4 Heading typo Settings
		class cryptoairdrop_Headings4_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h4';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H4 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h4 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h4',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings4_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h4', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h4',
				'priority'		=> 260,
			)));
			// b. h4 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h4_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h4_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h4_ff',
				'priority'	=> 270,
			) ) );
			// c. h4 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h4_fs',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h4_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 280,
			));
			// d. h4 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h4_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h4_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 290,
			));
	
		//5. H5 Heading typo Settings
		class cryptoairdrop_Headings5_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h5';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H5 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h5 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h5',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings5_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h5', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h5',
				'priority'		=> 360,
			)));
			// b. h5 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h5_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h5_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h5_ff',
				'priority'	=> 370,
			) ) );
			// c. h5 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h5_fs',array(
				'default'			=> 20,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h5_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 380,
			));
			// d. h5 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h5_lh',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h5_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 390,
			));
	
		//5. H6 Heading typo Settings
		class cryptoairdrop_Headings6_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_headings_h6';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				 <h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('H6 Typography','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. h6 Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_headings_h6',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Headings6_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_headings_h6', array(	
				'section'		=> 'cryptoairdrop_headings_typography',
				'setting'		=> 'cryptoairdrop_typography_headings_h6',
				'priority'		=> 460,
			)));
			// b. h6 Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_h6_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_h6_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_headings_typography',
				'settings'	=> 'cryptoairdrop_typography_h6_ff',
				'priority'	=> 470,
			) ) );
			// c. h6 font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_h6_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h6_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 480,
			));
			// d. h6 line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_h6_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_h6_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_headings_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 490,
			));
	
	//(E)Homepage Sections typo Settings End

	
	//(F)Blog Archive Sections typo Settings Start
		//1. Blog Archive typo Settings
		class cryptoairdrop_BlogArchive_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_blog_archive';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				<h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Font Family','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. blog archive Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_blog_archive',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_BlogArchive_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_blog_archive', array(	
				'section'		=> 'cryptoairdrop_blog_archive_typography',
				'setting'		=> 'cryptoairdrop_typography_blog_archive',
				'priority'		=> 10,
			)));
			// b. blog archive Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_blog_archive_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_blog_archive_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_blog_archive_typography',
				'settings'	=> 'cryptoairdrop_typography_blog_archive_ff',
				'priority'	=> 20,
			) ) );
			// c. blog archive font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_blog_archive_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_blog_archive_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_blog_archive_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 30,
			));
			// d. blog archive line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_blog_archive_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_blog_archive_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_blog_archive_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 40,
			));

	//(F)Blog Archive Sections typo Settings End
	
	
	//(G)Sidebar widget Sections typo Settings Start
		//1. Sidebar Widget Title typo Settings
		class cryptoairdrop_Sidebar_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_sidebar_title';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				<h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Sidebar Widget Title','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Widget Title Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_sidebar_title',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Sidebar_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_sidebar_title', array(	
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'setting'		=> 'cryptoairdrop_typography_sidebar_title',
				'priority'		=> 10,
			)));
			// b. Widget Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_title_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_sidebar_title_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_sidebar_widget_typography',
				'settings'	=> 'cryptoairdrop_typography_sidebar_title_ff',
				'priority'	=> 20,
			) ) );
			// c. Widget Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_title_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_sidebar_title_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 30,
			));
			// d. Widget Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_title_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_sidebar_title_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 40,
			));
			
		//2. Sidebar Widget Content typo Settings
		class cryptoairdrop_Sidebar_Content_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_sidebar_content';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				<h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Sidebar Widget Content','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Widget Content Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_sidebar_content',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Sidebar_Content_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_sidebar_content', array(	
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'setting'		=> 'cryptoairdrop_typography_sidebar_content',
				'priority'		=> 110,
			)));
			// b. Widget Content Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_content_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_sidebar_content_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_sidebar_widget_typography',
				'settings'	=> 'cryptoairdrop_typography_sidebar_content_ff',
				'priority'	=> 120,
			) ) );
			// c. Widget Content font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_content_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_sidebar_content_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 130,
			));
			// d. Widget Content line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_sidebar_content_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_sidebar_content_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_sidebar_widget_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 140,
			));

	//(G)Sidebar Widget typo Settings End
	
	//(H)footer widget Sections typo Settings Start
		//1. footer Widget Title typo Settings
		class cryptoairdrop_Footer_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_footer_title';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				<h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Footer Widget Title','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Widget Title Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_footer_title',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Footer_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_footer_title', array(	
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'setting'		=> 'cryptoairdrop_typography_footer_title',
				'priority'		=> 10,
			)));
			// b. Widget Title Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_title_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_footer_title_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_footer_widget_typography',
				'settings'	=> 'cryptoairdrop_typography_footer_title_ff',
				'priority'	=> 20,
			) ) );
			// c. Widget Title font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_title_fs',array(
				'default'			=> 15,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_footer_title_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 30,
			));
			// d. Widget Title line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_title_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_footer_title_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 40,
			));
			
		//2. footer Widget Content typo Settings
		class cryptoairdrop_Footer_Content_Typography_Customize_Control extends WP_Customize_Control {
				public $type = 'cryptoairdrop_typography_footer_content';
				/**
				* Render the control's content.
				*/
				public function render_content() {
				?>
				<h3 class="customize-control-cryptoairdrop-heading"><?php esc_html_e('Footer Widget Content','crypto-airdrop'); ?></h3>
				<?php
				}
			}
			// a. Widget Content Heading-Text
			$wp_customize->add_setting('cryptoairdrop_typography_footer_content',array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
			));
			$wp_customize->add_control( new cryptoairdrop_Footer_Content_Typography_Customize_Control( $wp_customize, 'cryptoairdrop_typography_footer_content', array(	
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'setting'		=> 'cryptoairdrop_typography_footer_content',
				'priority'		=> 110,
			)));
			// b. Widget Content Font-Family
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_content_ff',array(
				'sanitize_callback'	=> 'cryptoairdrop_sanitize_select',
				'capability'		=> 'edit_theme_options',
				'default'			=> 'Open Sans',
			) );
			$wp_customize->add_control( new cryptoairdrop_Customizer_Typography_Control( $wp_customize, 'cryptoairdrop_typography_footer_content_ff', array(
				'label'		=> esc_html__( 'Font Family', 'crypto-airdrop' ),
				'section'	=> 'cryptoairdrop_footer_widget_typography',
				'settings'	=> 'cryptoairdrop_typography_footer_content_ff',
				'priority'	=> 120,
			) ) );
			// c. Widget Content font-size
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_content_fs',array(
				'default'			=> 24,
				'sanitize_callback'	=> 'absint',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_footer_content_fs',array(
				'label'			=> esc_html__( 'Font Size (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'type'			=> 'select',
				'choices'		=> $font_size,
				'priority'		=> 130,
			));
			// d. Widget Content line-height
			$wp_customize->add_setting( 'cryptoairdrop_typography_footer_content_lh',array(
				'default'			=> 30,
				'sanitize_callback'	=> 'absint',
				'capability'		=> 'edit_theme_options',
			));
			$wp_customize->add_control( 'cryptoairdrop_typography_footer_content_lh',array(
				'label'			=> esc_html__( 'Line height (px)', 'crypto-airdrop' ),
				'section'		=> 'cryptoairdrop_footer_widget_typography',
				'type'			=> 'select',
				'choices'		=> $line_height,
				'priority'		=> 140,
			));

	//(H)Footer Widget typo Settings End
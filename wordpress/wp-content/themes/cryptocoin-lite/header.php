<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Cryptocoin Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#Tab-NaviagtionBX">
<?php esc_html_e('Skip to content', 'cryptocoin-lite' ); ?>
</a>
<?php
$cryptocoin_lite_show_contactdinfo 	   			= esc_attr( get_theme_mod('cryptocoin_lite_show_contactdinfo', false) ); 
$cryptocoin_lite_show_slider_sections 	  		= esc_attr( get_theme_mod('cryptocoin_lite_show_slider_sections', false) );
$cryptocoin_lite_show_fourcol_sections      		= esc_attr( get_theme_mod('cryptocoin_lite_show_fourcol_sections', false) );
$cryptocoin_lite_show_welcomesection      			= esc_attr( get_theme_mod('cryptocoin_lite_show_welcomesection', false) );
?>
<div id="SiteWrapper" <?php if( get_theme_mod( 'cryptocoin_lite_layoutoption' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($cryptocoin_lite_show_slider_sections)) {
	 	$innerpage_cls = '';
	}
	else {
		$innerpage_cls = 'innerpage_header';
	}
}
else {
$innerpage_cls = 'innerpage_header';
}
?>

<div id="masthead" class="site-header <?php echo esc_attr($innerpage_cls); ?> ">      
       <div class="container">
        <?php if( $cryptocoin_lite_show_contactdinfo != ''){ ?> 
          <div class="hdrtop-bar"> 
            <div class="top-align-right">  
            
            <?php $cryptocoin_lite_phoneno = get_theme_mod('cryptocoin_lite_phoneno');
                if( !empty($cryptocoin_lite_phoneno) ){ ?>              
                <div class="hdr-info">
                    <i class="fas fa-phone fa-rotate-90"></i>
                    <?php echo esc_html($cryptocoin_lite_phoneno); ?>
                </div>       
            <?php } ?>
            
             <?php $email = get_theme_mod('cryptocoin_lite_emailid');
                if( !empty($email) ){ ?>                
                <div class="hdr-info">
                    <i class="far fa-envelope"></i>
                    <a href="<?php echo esc_url('mailto:'.sanitize_email($email)); ?>"><?php echo sanitize_email($email); ?></a>
                </div>            
            <?php } ?>           
         
             <div class="hdr-info">
                <div class="hdr-tp-social">                                                
					   <?php $cryptocoin_lite_facebooklink = get_theme_mod('cryptocoin_lite_facebooklink');
                        if( !empty($cryptocoin_lite_facebooklink) ){ ?>
                        <a class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($cryptocoin_lite_facebooklink); ?>"></a>
                       <?php } ?>
                    
                       <?php $cryptocoin_lite_twitterlink = get_theme_mod('cryptocoin_lite_twitterlink');
                        if( !empty($cryptocoin_lite_twitterlink) ){ ?>
                        <a class="fab fa-twitter" target="_blank" href="<?php echo esc_url($cryptocoin_lite_twitterlink); ?>"></a>
                       <?php } ?>
                
                      <?php $cryptocoin_lite_linkedinlink = get_theme_mod('cryptocoin_lite_linkedinlink');
                        if( !empty($cryptocoin_lite_linkedinlink) ){ ?>
                        <a class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($cryptocoin_lite_linkedinlink); ?>"></a>
                      <?php } ?> 
                      
                      <?php $cryptocoin_lite_instagramlink = get_theme_mod('cryptocoin_lite_instagramlink');
                        if( !empty($cryptocoin_lite_instagramlink) ){ ?>
                        <a class="fab fa-instagram" target="_blank" href="<?php echo esc_url($cryptocoin_lite_instagramlink); ?>"></a>
                      <?php } ?> 
                  </div><!--end .hdr-tp-social-->
                </div><!--end .hdr-info-->   
             
        		 <div class="clear"></div> 
        </div>    
      </div><!-- .hdrtop-bar -->      
   <?php } ?>   

      <div class="LgoNav-Strip">  
        <div class="logo">
           <?php cryptocoin_lite_the_custom_logo(); ?>
            <div class="site_branding">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
         </div><!-- logo --> 
         
          <div class="RightNavMenu"> 
             <div id="navigationpanel"> 
                 <nav id="main-navigation" class="hdr-nav" role="navigation" aria-label="Primary Menu">
                    <button type="button" class="menu-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php
                    	wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                    ) );
                    ?>
                </nav><!-- #main-navigation -->  
            </div><!-- #navigationpanel -->   
          </div><!-- .RightNavMenu --> 
         <div class="clear"></div>
       </div><!-- .LgoNav-Strip -->  
    </div><!-- .container -->  
 
 <div class="clear"></div> 
</div><!--.site-header --> 
 
<?php 
if ( is_front_page() && !is_home() ) {
if($cryptocoin_lite_show_slider_sections != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('cryptocoin_lite_slider'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('cryptocoin_lite_slider'.$i,true));
	  }
	}
?> 
<div class="HomepageSlider">              
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">         
     <h2><?php the_title(); ?></h2>
     <p><?php $excerpt = get_the_excerpt(); echo esc_html( cryptocoin_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('cryptocoin_lite_excerpt_length_slider','10')))); ?></p>
		<?php
        $cryptocoin_lite_slider_moretext = get_theme_mod('cryptocoin_lite_slider_moretext');
        if( !empty($cryptocoin_lite_slider_moretext) ){ ?>
            <a class="slidermorebtn" href="<?php the_permalink(); ?>"><?php echo esc_html($cryptocoin_lite_slider_moretext); ?></a>
        <?php } ?>  
                        
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
</div><!-- .HomepageSlider -->    
<?php } } ?> 

<?php if ( is_front_page() && ! is_home() ) { ?>   
   <?php if( $cryptocoin_lite_show_fourcol_sections != ''){ ?> 
   <section id="Section-1">
     <div class="container"> 
        <?php
        $cryptocoin_lite_sectiontitle = get_theme_mod('cryptocoin_lite_sectiontitle');
        if( !empty($cryptocoin_lite_sectiontitle) ){ ?>
            <h2><?php echo esc_html($cryptocoin_lite_sectiontitle); ?></h2>
        <?php } ?>
        
        <?php
        $cryptocoin_lite_sectionshortinfo = get_theme_mod('cryptocoin_lite_sectionshortinfo');
        if( !empty($cryptocoin_lite_sectionshortinfo) ){ ?>
            <p class="shortinfo"><?php echo esc_html($cryptocoin_lite_sectionshortinfo); ?></p>
        <?php } ?> 
        <div class="box-equal-height"> 
          <?php 
                for($n=1; $n<=4; $n++) {    
                if( get_theme_mod('cryptocoin_lite_fourpagecol'.$n,false)) {      
                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('cryptocoin_lite_fourpagecol'.$n,true)) );		
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
                     <div class="FourBX <?php if($n % 4 == 0) { echo "last_column"; } ?>">  
                    	 <div class="topboxbg "> 
							  <?php if(has_post_thumbnail() ) { ?>
                                <div class="SmallThumb">
                                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>                                
                                </div>        
                               <?php } ?>
                               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                               <p><?php $excerpt = get_the_excerpt(); echo esc_html( cryptocoin_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('cryptocoin_lite_excerpt_length_fourpagecol','10')))); ?></p>
                        </div>
                      </div>
                    <?php endwhile;
                    wp_reset_postdata();                                  
                } } ?>                                 
               <div class="clear"></div>  
          </div>
      </div><!-- .container -->
    </section><!-- #Section-1-->
  <?php } ?> 
  
   <?php if( $cryptocoin_lite_show_welcomesection != ''){ ?> 
   <section id="Section-2">
     <div class="container"> 
       
          <?php 
                if( get_theme_mod('cryptocoin_lite_welcomepage',false)) {      
                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('cryptocoin_lite_welcomepage',true)) );		
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
							  <?php if(has_post_thumbnail() ) { ?>
                               <div class="welcome_ImgBX">
                                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>                                
                                </div>        
                               <?php } ?>
                               <div class="welcome_contentBX">
								<?php
                                $cryptocoin_lite_welcomesection_subtitle = get_theme_mod('cryptocoin_lite_welcomesection_subtitle');
                                if( !empty($cryptocoin_lite_welcomesection_subtitle) ){ ?>
                                	<h5><?php echo esc_html($cryptocoin_lite_welcomesection_subtitle); ?></h5>
                                <?php } ?>
                               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                               <p><?php $excerpt = get_the_excerpt(); echo esc_html( cryptocoin_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('cryptocoin_lite_excerpt_length_welcomepage','80')))); ?></p>
								<?php
                                $cryptocoin_lite_welcome_readmoretext = get_theme_mod('cryptocoin_lite_welcome_readmoretext');
                                if( !empty($cryptocoin_lite_welcome_readmoretext) ){ ?>
                                <a class="ReadMoreBtn" href="<?php the_permalink(); ?>"><?php echo esc_html($cryptocoin_lite_welcome_readmoretext); ?></a>
                                <?php } ?>
                         	 </div>
                    <?php endwhile;
                    wp_reset_postdata();                                  
                } ?>                                 
               <div class="clear"></div>  
      </div><!-- .container -->
    </section><!-- #Section-1-->
  <?php } ?> 
<?php } ?>
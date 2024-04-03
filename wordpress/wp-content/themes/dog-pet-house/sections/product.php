<?php

if ( ! get_theme_mod( 'dog_pet_house_enable_service_section', false ) ) {
	return;
}

$dog_pet_house_args = '';

dog_pet_house_render_service_section( $dog_pet_house_args );

/**
 * Render Service Section.
 */
function dog_pet_house_render_service_section( $dog_pet_house_args ) { ?>
		<section id="dog_pet_house_trending_section" class="asterthemes-frontpage-section trending-section trending-style-1">
		<?php
		if ( is_customize_preview() ) :
			dog_pet_house_section_link( 'dog_pet_house_service_section' );
		endif;

		$dog_pet_house_trending_product_heading = get_theme_mod( 'dog_pet_house_trending_product_heading', '' );
		?>
		<div class="asterthemes-wrapper">
			<?php if ( ! empty( $dog_pet_house_trending_product_heading ) ) { ?>
				<div class="header-contact-inner">
					<h3><?php echo esc_html( $dog_pet_house_trending_product_heading ); ?></h3>
				</div>
			<?php } ?>
			<?php $dog_pet_house_catData = get_theme_mod('dog_pet_house_trending_product_category','');
      if ( class_exists( 'WooCommerce' ) ) {
        $dog_pet_house_args = array(
          'post_type' => 'product',
          'posts_per_page' => 100,
          'product_cat' => $dog_pet_house_catData,
          'order' => 'ASC'
        );?>
        <div class="product-box"> 
	        <?php $loop = new WP_Query( $dog_pet_house_args );
	        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          <div class="tab-product">
            	<figure>
              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
              </figure>
        			<div class="product-content-box">
        				<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
        				<div class="product-rating">
        					<span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
        						<?php echo $product->get_price_html(); ?></span>
        					<span class="rating-box">
        						<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>	
        					</span>
        				</div>
        			</div>
        			<div class="box-content intro-button">
              			<?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
          			</div>
	          </div>
	        <?php endwhile; wp_reset_postdata(); ?>
	      </div>
      <?php } ?>
		</div>
	</section>
	<?php
}

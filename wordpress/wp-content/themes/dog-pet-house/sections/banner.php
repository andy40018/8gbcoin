<?php
if ( ! get_theme_mod( 'dog_pet_house_enable_banner_section', false ) ) {
	return;
}

$dog_pet_house_slider_content_ids  = array();
$dog_pet_house_slider_content_type = get_theme_mod( 'dog_pet_house_banner_slider_content_type', 'post' );

for ( $i = 1; $i <= 3; $i++ ) {
	$dog_pet_house_slider_content_ids[] = get_theme_mod( 'dog_pet_house_banner_slider_content_' . $dog_pet_house_slider_content_type . '_' . $i );
}
$dog_pet_house_banner_slider_args = array(
	'post_type'           => $dog_pet_house_slider_content_type,
	'post__in'            => array_filter( $dog_pet_house_slider_content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);
$dog_pet_house_banner_slider_args = apply_filters( 'dog_pet_house_banner_section_args', $dog_pet_house_banner_slider_args );

dog_pet_house_render_banner_section( $dog_pet_house_banner_slider_args );

/**
 * Render Banner Section.
 */
function dog_pet_house_render_banner_section( $dog_pet_house_banner_slider_args ) {     ?>

	<section id="dog_pet_house_banner_section" class="banner-section banner-style-1">
		<?php
		if ( is_customize_preview() ) :
			dog_pet_house_section_link( 'dog_pet_house_banner_section' );
		endif;
		?>
		<div class="banner-section-wrapper">
			<?php
			$query = new WP_Query( $dog_pet_house_banner_slider_args );
			if ( $query->have_posts() ) :
				?>
				<div class="asterthemes-banner-wrapper banner-slider dog-pet-house-carousel-navigation" data-slick='{"autoplay": false }'>
					<?php
					$i = 1;
					while ( $query->have_posts() ) :
						$query->the_post();
						$dog_pet_house_button_label = get_theme_mod( 'dog_pet_house_banner_button_label_' . $i, '' );
						$dog_pet_house_button_link  = get_theme_mod( 'dog_pet_house_banner_button_link_' . $i, '' );
						$dog_pet_house_button_link  = ! empty( $dog_pet_house_button_link ) ? $dog_pet_house_button_link : get_the_permalink();
						?>
						<div class="banner-single-outer">
							<div class="banner-single">
								<div class="banner-img">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
								<div class="banner-caption">
									<div class="asterthemes-wrapper">
										<div class="banner-catption-wrapper">
											<h1 class="banner-caption-title">
												<?php the_title(); ?>
											</h1>
											<div class="mag-post-excerpt">
												<?php the_excerpt(); ?>
											</div>
											<?php if ( ! empty( $dog_pet_house_button_label ) ) { ?>
												<div class="banner-slider-btn">
													<a href="<?php echo esc_url( $dog_pet_house_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $dog_pet_house_button_label ); ?></a>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$i++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
			endif;
			?>
		</div>
	</section>

	<?php
}

<?php
/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dog_pet_house
 */

// Get the footer background color/image settings from customizer
$footer_background_color = get_theme_mod('footer_background_color_setting', ''); // Default to white if not set
$footer_background_image = get_theme_mod('footer_background_image_setting');

if (!is_front_page() || is_home()) {
    ?>
    </div>
    </div>
</div>
<?php } ?>

<footer id="colophon" class="site-footer" style="background-color: <?php echo esc_attr($footer_background_color); ?>; <?php echo ($footer_background_image) ? 'background-image: url(' . esc_url($footer_background_image) . ');' : ''; ?>">
    <div class="site-footer-top">
        <div class="asterthemes-wrapper">
            <div class="footer-widgets-wrapper">

                <?php
                // Footer Widget
                do_action('dog_pet_house_footer_widget');
                ?>

            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="asterthemes-wrapper">
            <div class="site-footer-bottom-wrapper">
                <div class="site-info">
                    <?php
                    do_action('dog_pet_house_footer_copyright');
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
$dog_pet_house_is_scroll_top_active = get_theme_mod('dog_pet_house_scroll_top', true);
if ($dog_pet_house_is_scroll_top_active) :
    ?>
    <a href="#" id="scroll-to-top" class="dog-pet-house-scroll-to-top"><i class="<?php echo esc_attr(get_theme_mod('dog_pet_house_scroll_btn_icon', 'fas fa-chevron-up')); ?>"></i></a>
<?php
endif;
?>
</div>

<?php wp_footer(); ?>

</body>

</html>

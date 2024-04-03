<?php
/**
 * Help Panel.
 *
 * @package dog_pet_house
 */
?>

<div id="help-panel" class="panel-left visible">
    <div id="#help-panel" class="steps">  
        <h4><?php esc_html_e( 'Quick Setup for Home Page', 'dog-pet-house' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to the dashboard. navigate to pages, add a new one, and label it "home" or whatever else you like.The page has now been created.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '2) Go back to the dashboard and then select Settings.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '3) Then Go to readings in the setting.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '4) There are 2 options your latest post or static page.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '5) Select static page and select from the dropdown you wish to use as your home page, save changes.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '6) You can set the home page in this manner.', 'dog-pet-house' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup Slider Section', 'dog-pet-house' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to dashboard > Go to appereance > then Go to customizer.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '2) In Customizer > Go to Front Page Options > Go to Banner Section.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '3) For Setup Banner Section you have to create post in dashbord first.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '4) In Banner Section > Enable the Toggle button > and fill the following details.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '5) In this way you can set Banner Section.', 'dog-pet-house' ); ?></p>
        <hr>
        <h4><?php esc_html_e( 'Setup Product Section', 'dog-pet-house' ); ?></h4>
        <hr class="quick-set">
        <p><?php esc_html_e( '1) Go to dashboard > Go to plugin > add Woocommerce plugin.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '2) After installing plugin make products in it and give them particular category.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '3) In Customizer > Go to Front Page Options > Go to Product Section.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '4) In Product Section > Enable the Toggle button > and select the category whick you want display.', 'dog-pet-house' ); ?></p>
        <p><?php esc_html_e( '5) In this way you can set Product Section.', 'dog-pet-house' ); ?></p>
    </div>
    <hr>
    <div class="custom-setting">
        <h4><?php esc_html_e( 'Quick Customizer Settings', 'dog-pet-house' ); ?></h4>
        <span><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a></span>
    </div>
    <hr>
   <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-site-alt3"></span>
            </div>
            <h5><?php esc_html_e( 'Site Logo', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-color-picker"></span>
            </div>
            <h5><?php esc_html_e( 'Color', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=primary_color' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-screenoptions"></span>
            </div>
            <h5><?php esc_html_e( 'Theme Options', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=dog_pet_house_theme_options' ) ); ?>"target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
    </div>
    <div class="setting-box">
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-format-image"></span>
            </div>
            <h5><?php esc_html_e( 'Header Image ', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=header_image' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-align-full-width"></span>
            </div>
            <h5><?php esc_html_e( 'Footer Options ', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=dog_pet_house_footer_copyright_text' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
        <div class="custom-links">
            <div class="icon-box">
                <span class="dashicons dashicons-admin-page"></span>
            </div>
            <h5><?php esc_html_e( 'Front Page Options', 'dog-pet-house' ); ?></h5>
            <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=dog_pet_house_front_page_options' ) ); ?>" target="_blank" class=""><?php esc_html_e( 'Customize', 'dog-pet-house' ); ?></a>
            
        </div>
    </div>
</div>



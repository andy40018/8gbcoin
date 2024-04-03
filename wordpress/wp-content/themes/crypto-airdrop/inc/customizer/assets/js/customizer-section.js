( function( api ) {

/* 	// Extends our custom "example-1" section.
	api.sectionConstructor['cryptoairdrop-plugin-section'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} ); */

} )( wp.customize );

function cryptoairdrop_frontpage_sections_scroll( section_id ){
    var scroll_section_id = "slider";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( section_id ) {
        case 'accordion-section-cryptoairdrop_theme_top_header_area':
        scroll_section_id = "site-header";
        break;

        case 'accordion-section-cryptoairdrop_theme_slider':
        scroll_section_id = "slider";
        break;

        case 'accordion-section-cryptoairdrop_theme_about':
        scroll_section_id = "about";
        break;

        case 'accordion-section-cryptoairdrop_theme_features':
        scroll_section_id = "features";
        break;

        case 'accordion-section-cryptoairdrop_theme_faq':
        scroll_section_id = "faq";
        break;

        case 'accordion-section-cryptoairdrop_theme_team':
        scroll_section_id = "team";
        break;

        case 'accordion-section-cryptoairdrop_theme_blog':
        scroll_section_id = "news";
        break;

        case 'accordion-section-cryptoairdrop_theme_contact':
        scroll_section_id = "contact";
        break;

 		case 'accordion-section-cryptoairdrop_theme_social':
        scroll_section_id = "social";
        break;

    }

    if( $contents.find('#'+scroll_section_id).length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + scroll_section_id ).offset().top
        }, 1000);
    }
}

jQuery('body').on('click', '#sub-accordion-panel-cryptoairdrop_frontpage_settings .control-subsection .accordion-section-title', function(event) {
        var section_id = jQuery(this).parent('.control-subsection').attr('id');
        cryptoairdrop_frontpage_sections_scroll( section_id );
});
( function( api ) {
	// Extends our custom "cryptocoin-lite" section.
	api.sectionConstructor['cryptocoin-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );
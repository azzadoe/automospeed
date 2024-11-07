( function( api ) {

	// Extends our custom "automobile-car-services" section.
	api.sectionConstructor['automobile-car-services'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
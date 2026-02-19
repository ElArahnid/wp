( function( api ) {

	// Extends our custom "fitness-exercise-hub" section.
	api.sectionConstructor['fitness-exercise-hub'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
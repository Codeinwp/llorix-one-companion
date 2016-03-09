/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	
	/**************************************
	*********** SERVICES SECTION **********
	***************************************/
	
	/* llorix_one_lite_our_services_show */
	wp.customize( 'llorix_one_lite_our_services_show', function( value ) {
		value.bind( function( to ) {
			if ( '1' != to ) {
				$( 'section.services' ).removeClass('llorix_one_lite_only_customizer');
			} else {
				$( 'section.services' ).addClass('llorix_one_lite_only_customizer');
			}
		} );
	} );
	
	/* llorix_one_lite_our_services_title */
	wp.customize("llorix_one_lite_our_services_title", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#services h2' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#services h2' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#services h2' ).text( to );
	    } );
    });
	
	/* llorix_one_lite_our_services_subtitle */
	wp.customize("llorix_one_lite_our_services_subtitle", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#services div.sub-heading' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#services div.sub-heading' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#services div.sub-heading' ).text( to );
	    } );
    });
	
	/**************************************
	************* TEAM SECTION ************
	***************************************/
	
	/* llorix_one_lite_our_team_show */
	wp.customize( 'llorix_one_lite_our_team_show', function( value ) {
		value.bind( function( to ) {
			if ( '1' != to ) {
				$( 'section.team' ).removeClass('llorix_one_lite_only_customizer');
			} else {
				$( 'section.team' ).addClass('llorix_one_lite_only_customizer');
			}
		} );
	} );
	
	/* llorix_one_lite_our_team_title */
	wp.customize("llorix_one_lite_our_team_title", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#team h2' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#team h2' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#team h2' ).text( to );
	    } );
    });
	
	/* llorix_one_lite_our_team_subtitle */
	wp.customize("llorix_one_lite_our_team_subtitle", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#team div.sub-heading' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#team div.sub-heading' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#team div.sub-heading' ).text( to );
	    } );
    });
	
	/**************************************
	********* TESTIMONIALS SECTION *********
	***************************************/
	
	/* llorix_one_lite_happy_customers_show */
	wp.customize( 'llorix_one_lite_happy_customers_show', function( value ) {
		value.bind( function( to ) {
			if ( '1' != to ) {
				$( 'section.testimonials' ).removeClass('llorix_one_lite_only_customizer');
			} else {
				$( 'section.testimonials' ).addClass('llorix_one_lite_only_customizer');
			}
		} );
	} );
	
	/* llorix_one_lite_happy_customers_title */
	wp.customize("llorix_one_lite_happy_customers_title", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#customers h2' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#customers h2' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#customers h2' ).text( to );
	    } );
    });
	
	/* llorix_one_lite_happy_customers_subtitle */
	wp.customize("llorix_one_lite_happy_customers_subtitle", function(value) {
        value.bind(function( to ) {
			if( to != '' ) {
				$( 'section#customers div.sub-heading' ).removeClass( 'llorix_one_lite_only_customizer' );
			} else {
				$( 'section#customers div.sub-heading' ).addClass( 'llorix_one_lite_only_customizer' );
			}
			$( 'section#customers div.sub-heading' ).text( to );
	    } );
    });
	
} )( jQuery );
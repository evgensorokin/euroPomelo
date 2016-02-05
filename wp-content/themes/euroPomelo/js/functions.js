/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

( function( $ ) {

	$( document ).ready( function() {

		$('header .button-menu').on('click', function(){
            $('header ul').slideToggle();
		});

	} );
} )( jQuery );

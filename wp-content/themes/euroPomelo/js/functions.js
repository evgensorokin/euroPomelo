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

        if($('.recipe-single-middle').length > 0){
            $('html, body').animate({
                scrollTop: $('.recipe-single-middle').offset().top - 30
            }, 1000);
        }

    } );
} )( jQuery );

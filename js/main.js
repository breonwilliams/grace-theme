/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */

// Sticky Nav

jQuery(function($) {
    $('.respMenu').affix({
        offset: {
            top: $('.respMenu').offset().top
        }
    });
});
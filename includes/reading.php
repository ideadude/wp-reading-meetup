<?php
/**
 * Change the default excerpt length.
 * From: https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 */
function wprm_custom_excerpt_length( $length ) {
    return 200;
}
add_filter( 'excerpt_length', 'wprm_custom_excerpt_length', 10 );
<?php
/**
 * Enqueue our stylesheet.
 */
function wprm_enqueue_memberlite_css() {
    wp_enqueue_style( 'wp-reading-meetup', plugins_url( 'css/frontend.css', WP_READING_MEETUP_FILE ) );
}
add_action( 'wp_enqueue_scripts', 'wprm_enqueue_memberlite_css' );
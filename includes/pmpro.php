<?php 
/**
 * Redirect away from the member-home page.
 */
function wprm_redirect_to_member_home() {
    if( ! function_exists( 'pmpro_hasMembershipLevel' ) ) {
        return;
    }
    
    if ( ! is_page( 'member-home' ) ) {
        return;
    }
    
    if ( pmpro_hasMembershipLevel() ) {
        wp_redirect('/the-bacon-ipsum-post/');
    } else {
        wp_redirect('/the-lorem-ipsum-post/');
    }
}
add_action( 'template_redirect', 'wprm_redirect_to_member_home' );
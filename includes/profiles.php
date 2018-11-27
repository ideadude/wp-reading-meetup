<?php 
/**
 * Unset some contact methods that we won't use.
 */
function wprm_edit_contactmethods( $contactmethods ) {
	$contactmethods['twitter'] = __( 'Twitter Username', 'wp-reading-meetup' );
	
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'wprm_edit_contactmethods', 10, 1 );
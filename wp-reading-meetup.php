<?php
/**
 * Plugin Name: WP Reading Meetup Plugin Demo
 * Plugin URI:  https://php-72/wp-reading-meetup/
 * Description: Custom functionality for my site.
 * Version:     1.0.0
 * Author:      Jason Coleman
 * Author URI:  https://therealjasoncoleman.com
 * Text Domain: wp-reading-meetup
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
define(' WP_READING_MEETUP_VERSION', '1.0.0' );
define( 'WP_READING_MEETUP_FILE', __FILE__ );
define( 'WP_READING_MEETUP_DIR', dirname( WP_READING_MEETUP_FILE ) );

require_once( WP_READING_MEETUP_DIR . '/includes/memberlite.php' );
require_once( WP_READING_MEETUP_DIR . '/includes/profiles.php' );
require_once( WP_READING_MEETUP_DIR . '/includes/reading.php' );
require_once( WP_READING_MEETUP_DIR . '/includes/pmpro.php' );


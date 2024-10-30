<?php
/*
Plugin Name: BuddyPress Update Email Reminder Lightbox
Plugin URI: http://wordpress.org/plugins/buddypress-update-email-reminder-lightbox/
Description: Adds BuddyPress Lightbox Tools - lightbox alerts for different user situations
Tags: reminder,notification,buddypress,profile,profile,field,update
Version: 2.0
Author: arippberger, themightymo
Author URI: http://alecrippberger.com
License: GPL2
*/
 
/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
function my_plugin_init() {
    require( dirname( __FILE__ ) . '/buddypress-update-email-reminder-lightbox.php' );
}
add_action( 'bp_include', 'my_plugin_init' );

/* If you have code that does not need BuddyPress to run, then add it here. */
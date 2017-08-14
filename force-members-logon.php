<?php
/**
 * @package 	force-members-logon
 */
/*
Plugin Name: Force Members Logon
Description: Add-on plugin for the <a href="https://en-gb.wordpress.org/plugins/members/">'Members'</a> plugin written by Justin Tadlock. This add-on displays the standard WordPress logon page if user who has not already logged on attempts to access a protected page or post.
Author: Dean Walker
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function force_login_if_page_protected() {

	// if already logged in then nothing to force
	if (is_user_logged_in()) {
		return;
	}

	// check members plugin loaded
	if(!function_exists( 'members_can_user_view_post' )) { 
		return;
	}

	global $post;

	// if request is for a single post or page then and that post or page is 
	// protected then require the user to login
	if (is_single() || is_page()) {
		if (!members_can_user_view_post($post->ID)) {
			auth_redirect();
		}
	}

} 

add_action( 'template_redirect', 'force_login_if_page_protected' );

?>

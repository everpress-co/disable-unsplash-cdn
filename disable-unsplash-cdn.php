<?php
/*
Plugin Name: Disable Unsplash CDN
Description: Disables images getting served from the Unsplash CDN on the frontend.
Version: 1.1
Author: EverPress
Author URI: https://about.me/xaver
License: GPLv2 or later
*/


add_filter( 'get_post_metadata', 'everpress_disable_unsplash_cdn', 10, 4 );
function everpress_disable_unsplash_cdn( $def, $object_id, $meta_key, $single ) {

	if ( $meta_key === 'original_url' ) {
		return false;
	}

	return $def;
}

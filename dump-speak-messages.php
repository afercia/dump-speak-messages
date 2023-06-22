<?php
/*
Plugin Name: Dump Speak Messages
Plugin URI:
Description: Dumps the wp.a11y.speak() messages to the browser console.
Version: 1.0
Author: Andrea Fercia
Author URI: https://profiles.wordpress.org/afercia
*/

 function dump_speak_messages_enqueue_assets() {
	wp_enqueue_script(
		'dump-speak-messages-script',
		plugins_url( 'js/index.js', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'js/index.js' ),
		true
	);
}

add_action( 'enqueue_block_editor_assets', 'dump_speak_messages_enqueue_assets', PHP_INT_MAX );
add_action( 'init', 'dump_speak_messages_enqueue_assets', PHP_INT_MAX );

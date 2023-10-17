<?php
/**
 * Plugin Name: WP ReactJS
 * Description: This is demo setup for ReactJs WordPress plugin
 * Requires at least: 5.8
 * Requires PHP: 7.0
 * Version:   0.1.0
 * Author: Hardip
 * Author URI:  
 * Text Domain: wp-react-js
 * Domain Path: /languages
 *
 * @package WP ReactJS
 */

/**
 * Shortcut constant to the url of this file.
 */
define( 'WP_REACT_JS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Shortcut constant to the path of this file.
 */
define( 'WP_REACT_JS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
/**
 * Version of the plugin.
 */
define( 'WP_REACT_JS_VERSION', '1.0.0' );

/**
 * Main file of plugin
 */
define( 'WP_REACT_JS_MAIN_FILE', __FILE__ );


add_action( 'admin_menu', 'wp_react_js_init_menu' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
function wp_react_js_init_menu() {
	add_menu_page( __( 'WP ReactJs', 'wp-react-js' ), __( 'WP ReactJs', 'wp-react-js' ), 'manage_options', 'wp-react-js', 'wp_react_js_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function wp_react_js_admin_page() {
	require_once WP_REACT_JS_PLUGIN_DIR . 'templates/app.php';
}

add_action( 'admin_enqueue_scripts', 'wp_react_js_admin_enqueue_scripts' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function wp_react_js_admin_enqueue_scripts() {
	wp_enqueue_style( 'wp-react-js-style', WP_REACT_JS_PLUGIN_URL . 'build/index.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'wp-react-js-script', WP_REACT_JS_PLUGIN_URL . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}

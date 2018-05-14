<?php
/*
 * Plugin Name: zillow-wordpress-plugin
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: zillow-wordpress-plugin
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-zillow-wordpress-plugin.php' );
require_once( 'includes/class-zillow-wordpress-plugin-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-zillow-wordpress-plugin-admin-api.php' );
require_once( 'includes/lib/class-zillow-wordpress-plugin-post-type.php' );
require_once( 'includes/lib/class-zillow-wordpress-plugin-taxonomy.php' );

/**
 * Returns the main instance of zillow-wordpress-plugin to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object zillow-wordpress-plugin
 */
function zillow-wordpress-plugin () {
	$instance = zillow-wordpress-plugin::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = zillow-wordpress-plugin_Settings::instance( $instance );
	}

	return $instance;
}

zillow-wordpress-plugin();

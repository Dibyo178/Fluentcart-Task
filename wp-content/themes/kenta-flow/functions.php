<?php
/**
 * Theme functions
 *
 * @package Kenta Flow
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_FLOW_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_FLOW_VERSION', '1.0.2' );
}

if ( ! defined( 'KENTA_FLOW_PATH' ) ) {
	define( 'KENTA_FLOW_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_FLOW_URL' ) ) {
	define( 'KENTA_FLOW_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'KENTA_FLOW_ASSETS_URL' ) ) {
	define( 'KENTA_FLOW_ASSETS_URL', KENTA_FLOW_URL . 'assets/' );
}

// Helper functions
require_once KENTA_FLOW_PATH . 'helpers.php';
// Customizer settings hook
require_once KENTA_FLOW_PATH . 'customizer.php';
// Starter content
require_once KENTA_FLOW_PATH . 'starter-content.php';
// Register patterns
require_once KENTA_FLOW_PATH . 'patterns.php';

//
// One click demo import
//
if ( ! function_exists( 'kenta_flow_demo_slug' ) ) {
	function kenta_flow_demo_slug() {
		return 'kenta-flow';
	}
}
add_filter( 'kenta_welcome_demo_slug', 'kenta_flow_demo_slug' );

if ( ! function_exists( 'kenta_flow_demo_name' ) ) {
	function kenta_flow_demo_name() {
		return __( 'Kenta Flow', 'kenta-flow' );
	}
}
add_filter( 'kenta_welcome_demo_name', 'kenta_flow_demo_name' );

if ( ! function_exists( 'kenta_flow_demo_screenshot' ) ) {
	function kenta_flow_demo_screenshot() {
		return KENTA_FLOW_URL . 'screenshot.png';
	}
}
add_filter( 'kenta_welcome_demo_screenshot', 'kenta_flow_demo_screenshot' );

//
// Dynamic css cache
//
if ( ! function_exists( 'kenta_flow_cache_key' ) ) {
	function kenta_flow_cache_key() {
		return 'kenta_flow_dynamic_css';
	}
}
add_filter( 'kenta_filter_dynamic_css_cache_key', 'kenta_flow_cache_key' );

if ( ! function_exists( 'kenta_flow_cache_version' ) ) {
	function kenta_flow_cache_version() {
		return KENTA_FLOW_VERSION;
	}
}
add_filter( 'kenta_filter_cached_dynamic_css_version', 'kenta_flow_cache_version' );

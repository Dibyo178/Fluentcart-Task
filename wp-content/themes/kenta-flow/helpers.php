<?php
/**
 * Template helpers
 *
 * @package Kenta Flow
 */

if ( ! function_exists( 'kenta_flow_asset_url' ) ) {
	/**
	 * Get template assets file url
	 *
	 * @param $asset
	 *
	 * @return string
	 */
	function kenta_flow_asset_url( $asset ) {
		return KENTA_FLOW_ASSETS_URL . $asset;
	}
}

if ( ! function_exists( 'kenta_flow_the_asset_url' ) ) {
	/**
	 * Echo template assets file url
	 *
	 * @param $asset
	 */
	function kenta_flow_the_asset_url( $asset ) {
		echo esc_url( kenta_flow_asset_url( $asset ) );
	}
}

if ( ! function_exists( 'kenta_flow_pattern_markup' ) ) {
	/**
	 * Get pattern markup
	 *
	 * @param $name
	 * @param array $args
	 *
	 * @return false|string
	 */
	function kenta_flow_pattern_markup( $name, $args = array() ) {
		extract( $args );

		ob_start();
		include KENTA_FLOW_PATH . 'template-parts/patterns/' . sanitize_title( $name ) . '.php';

		return ob_get_clean();
	}
}

if ( ! function_exists( 'kenta_flow_starter_template' ) ) {
	/**
	 * Get pattern markup
	 *
	 * @param $name
	 *
	 * @return false|string
	 */
	function kenta_flow_starter_template( $name ) {
		ob_start();
		include KENTA_FLOW_PATH . 'template-parts/starter-templates/' . sanitize_title( $name ) . '.php';

		return ob_get_clean();
	}
}

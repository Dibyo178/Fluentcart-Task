<?php
/**
 * Theme patterns
 *
 * @package Kenta Flow
 */

if ( ! function_exists( 'kenta_flow_block_patterns_init' ) ) {
	/**
	 * Init block patterns
	 */
	function kenta_flow_block_patterns_init() {
        // register custom pattern category
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category( 'kenta-flow', array(
				'label' => __( 'Kenta Flow', 'kenta-flow' )
			) );
		}

		// register custom patterns
		if ( function_exists( 'register_block_pattern' ) ) {
			register_block_pattern(
				'kenta-flow/hero',
				array(
					'title'      => __( 'Big Hero', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'hero' ),
					'categories' => array( 'kenta-flow', 'featured', 'header', 'banner' )
				)
			);

			register_block_pattern(
				'kenta-flow/media-text',
				array(
					'title'      => __( 'Media Text Section', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'media-text' ),
					'categories' => array( 'kenta-flow', 'featured', 'columns', 'text', 'banner' )
				)
			);

			register_block_pattern(
				'kenta-flow/cta-01',
				array(
					'title'      => __( 'Call to Action 01', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'cta-01' ),
					'categories' => array( 'kenta-flow', 'banner', 'featured', 'banner', 'call-to-action' )
				)
			);

			register_block_pattern(
				'kenta-flow/cta-02',
				array(
					'title'      => __( 'Call to Action 02', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'cta-02' ),
					'categories' => array( 'kenta-flow', 'banner', 'featured', 'banner', 'call-to-action' )
				)
			);

			register_block_pattern(
				'kenta-flow/features-01',
				array(
					'title'      => __( 'Feature Cards 01', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'features-01' ),
					'categories' => array( 'kenta-flow', 'featured', 'columns' )
				)
			);

			register_block_pattern(
				'kenta-flow/features-02',
				array(
					'title'      => __( 'Feature Cards 02', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'features-02' ),
					'categories' => array( 'kenta-flow', 'featured', 'columns' )
				)
			);

			register_block_pattern(
				'kenta-flow/latest-news',
				array(
					'title'      => __( 'Latest News', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'latest-news' ),
					'categories' => array( 'kenta-flow', 'featured', 'posts' )
				)
			);

			register_block_pattern(
				'kenta-flow/testimonials',
				array(
					'title'      => __( 'Testimonials', 'kenta-flow' ),
					'content'    => kenta_flow_pattern_markup( 'testimonials' ),
					'categories' => array( 'kenta-flow', 'featured', 'columns' )
				)
			);
		}
	}
}
add_action( 'init', 'kenta_flow_block_patterns_init' );

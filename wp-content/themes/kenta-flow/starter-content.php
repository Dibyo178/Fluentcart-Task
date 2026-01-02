<?php
/**
 * Starter content
 *
 * @package Kenta Flow
 */

if ( ! function_exists('kenta_flow_starter_content') ) {
    function kenta_flow_starter_content( $starter ) {
        $starter['widgets'] = array(
			'primary-sidebar'           => array(
				'search',
				'text_about',
				'text_business_info',
			),
			'kenta_footer_el_widgets_1' => array(
				'text_about',
			),
			'kenta_footer_el_widgets_2' => array(
				'text_business_info',
			),
			'kenta_footer_el_widgets_3' => array(
				'recent-posts',
				'categories',
			),
			'kenta_footer_el_widgets_4' => array(
				'search',
				'recent-comments',
			),
		);

		
		$starter['posts'] = array(
			'front'   => array(
				'post_type'    => 'page',
				'post_title'   => esc_html__( 'Home', 'kenta-flow' ),
				'thumbnail'    => '{{image-cup}}',
				'post_content' => kenta_flow_starter_template( 'home' ),
				'template'     => 'templates/boxed-trans-header-page-narrow.php',
			),
			'about'   => array(
				'post_type'    => 'page',
				'post_title'   => esc_html__( 'About', 'kenta-flow' ),
				'thumbnail'    => '{{image-cup}}',
				'post_content' => kenta_flow_starter_template( 'about' ),
				// 'template'     => 'page-templates/boxed-trans-header-page-builder.php',
			),
			'contact' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html__( 'Contact', 'kenta-flow' ),
				'thumbnail'    => '{{image-cup}}',
				'post_content' => kenta_flow_starter_template( 'contact' ),
				// 'template'     => 'page-templates/boxed-trans-header-page-builder.php',
			),
			'blog',
		);

		$starter['options'] = array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		);

        return $starter;
    }
}
add_filter('kenta_filter_starter_content', 'kenta_flow_starter_content');

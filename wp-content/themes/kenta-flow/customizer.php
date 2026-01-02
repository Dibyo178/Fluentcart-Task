<?php
/**
 * Customizer settings default value
 *
 * @package Kenta Flow
 */

if ( ! function_exists( 'kenta_flow_return_yes' ) ) {
	function kenta_flow_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_flow_return_no' ) ) {
	function kenta_flow_return_no() {
		return 'no';
	}
}

// Disable customizer cache
add_filter( 'kenta_enable_customizer_cache_default_value', 'kenta_flow_return_no' );
// Disable site wrap by default
add_filter( 'kenta_enable_site_wrap_default_value', 'kenta_flow_return_no' );
// Disable sidebar
add_filter( 'kenta_post_sidebar_section_default_value', 'kenta_flow_return_no' );
add_filter( 'kenta_archive_sidebar_section_default_value', 'kenta_flow_return_no' );
// Disable scroll reveal effect
add_filter( 'kenta_global_scroll_reveal_default_value', 'kenta_flow_return_no' );
// Disable preloader
add_filter( 'kenta_global_preloader_default_value', 'kenta_flow_return_no' );

//
// Default color preset
//
if ( ! function_exists( 'kenta_flow_default_color_presets' ) ) {
	function kenta_flow_default_color_presets() {
		return 'kenta-flow';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_flow_default_color_presets' );

if ( ! function_exists( 'kenta_flow_color_presets' ) ) {
	function kenta_flow_color_presets( $presets ) {
		$presets['kenta-flow'] = array(
			'kenta-primary-color'  => '#0d9488',
			'kenta-primary-active' => '#10b981',
			'kenta-accent-color'   => '#181f28',
			'kenta-accent-active'  => '#334155',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_flow_color_presets' );

//
//  Card style
//
if ( ! function_exists( 'kenta_flow_card_preset' ) ) {
	function kenta_flow_card_preset() {
		return 'inner-shadow-bordered';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_flow_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_flow_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_flow_card_preset' );
//add_filter( 'kenta_post_content_style_preset_default_value', 'kenta_flow_card_preset' );

//
// Global typography
//
if ( ! function_exists( 'kenta_flow_global_typography' ) ) {
	function kenta_flow_global_typography() {
		return [
			'family'   => 'inter',
			'fontSize' => '16px',
			'variant'  => '400',
		];
	}
}
add_filter( 'kenta_site_global_typography_default_value', 'kenta_flow_global_typography' );


//
// Header & Footer boder
//
if ( ! function_exists( 'kenta_flow_builder_row_border' ) ) {
	function kenta_flow_builder_row_border() {
		return [
			'style'   => 'solid',
			'width'   => 1,
			'color'   => 'var(--kenta-base-300)',
		];
	}
}
add_filter( 'kenta_footer_bottom_row_border_top_default_value', 'kenta_flow_builder_row_border' );
add_filter( 'kenta_footer_middle_row_border_top_default_value', 'kenta_flow_builder_row_border' );
add_filter( 'kenta_header_primary_navbar_row_border_bottom_default_value', 'kenta_flow_builder_row_border' );

//
// Header
//

// Sticky header
add_filter( 'kenta_sticky_header_default_value', 'kenta_flow_return_yes' );

if ( ! function_exists( 'kenta_flow_sticky_header_shadow' ) ) {
	function kenta_flow_sticky_header_shadow() {
		return [
			'enable'     => 'yes',
			'horizontal' => '0px',
			'vertical'   => '10px',
			'blur'       => '10px',
			'spread'     => '0px',
			'color'      => 'rgba(44,62,80,0.05)',
		];
	}
}
add_filter( 'kenta_sticky_header_shadow_default_value', 'kenta_flow_sticky_header_shadow' );

// logo element
if ( ! function_exists( 'kenta_flow_header_logo_title_typography' ) ) {
	function kenta_flow_header_logo_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '28px',
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'kenta_header_el_logo_site_title_typography_default_value', 'kenta_flow_header_logo_title_typography' );

// icon size
if ( ! function_exists( 'kenta_flow_icon_size' ) ) {
	function kenta_flow_icon_size() {
		return '18px';
	}
}
add_filter( 'kenta_header_el_socials_icons_size_default_value', 'kenta_flow_icon_size' );
add_filter( 'kenta_header_el_search_icon_button_size_default_value', 'kenta_flow_icon_size' );
add_filter( 'kenta_header_el_trigger_icon_button_size_default_value', 'kenta_flow_icon_size' );
add_filter( 'kenta_header_el_theme_switch_icon_button_size_default_value', 'kenta_flow_icon_size' );
add_filter( 'kenta_header_el_cart_icon_button_size_default_value', 'kenta_flow_icon_size' );

// menu element
if ( ! function_exists( 'kenta_flow_menu_typography' ) ) {
	function kenta_flow_menu_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => [ 'desktop' => '1rem', 'tablet' => '1rem', 'mobile' => '1rem' ],
			'variant'       => '500',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'kenta_header_el_menu_1_top_level_typography_default_value', 'kenta_flow_menu_typography' );
add_filter( 'kenta_header_el_menu_2_top_level_typography_default_value', 'kenta_flow_menu_typography' );

//
// Footer
//
if ( ! function_exists( 'kenta_flow_footer_middle_row_elements' ) ) {
	function kenta_flow_footer_middle_row_elements() {
		return [
			[
				'elements' => [ 'widgets-1', 'footer-socials' ],
				'settings' => [
					'width' => [ 'desktop' => '25%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [ 'widgets-2' ],
				'settings' => [
					'width' => [ 'desktop' => '25%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [ 'widgets-3' ],
				'settings' => [
					'width' => [ 'desktop' => '25%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [ 'widgets-4' ],
				'settings' => [
					'width' => [ 'desktop' => '25%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			]
		];
	}
}
add_filter( 'kenta_footer_middle_row_default_value', 'kenta_flow_footer_middle_row_elements' );

//
// Single posts & pages layout
//
if ( ! function_exists( 'kenta_flow_article_featured_image_position' ) ) {
	/**
	 * Change default article featured image position design
	 *
	 * @return string
	 */
	function kenta_flow_article_featured_image_position() {
		return 'behind';
	}
}
add_filter( 'kenta_post_featured_image_position_default_value', 'kenta_flow_article_featured_image_position' );
// add_filter( 'kenta_page_featured_image_position_default_value', 'kenta_flow_article_featured_image_position' );

if ( ! function_exists( 'kenta_flow_container_layout' ) ) {
    /**
     * Default pages/single-post content container width
     * 
     * @return string
     */
    function kenta_flow_container_layout() {
        return 'narrow';
    }
}
add_filter( 'kenta_pages_container_layout_default_value', 'kenta_flow_container_layout' );

if ( ! function_exists( 'kenta_flow_featured_image_background_overlay' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_flow_featured_image_background_overlay() {
		return array(
            'type'     => 'gradient',
            'gradient' => 'linear-gradient(180deg,rgba(35,37,38,0.33) 0%,rgba(32,37,42,0.83) 100%)',
            'color'    => '#000000',
		);
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_default_value', 'kenta_flow_featured_image_background_overlay' );
add_filter( 'kenta_page_featured_image_background_overlay_default_value', 'kenta_flow_featured_image_background_overlay' );

if ( ! function_exists( 'kenta_flow_featured_image_background_overlay_opacity' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_flow_featured_image_background_overlay_opacity() {
		return 0.88;
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_opacity_default_value', 'kenta_flow_featured_image_background_overlay_opacity' );
add_filter( 'kenta_page_featured_image_background_overlay_opacity_default_value', 'kenta_flow_featured_image_background_overlay_opacity' );

if ( ! function_exists( 'kenta_flow_featured_image_elements_override' ) ) {
	function kenta_flow_featured_image_elements_override() {
		return array(
			'override' => '#fff'
		);
	}
}
add_filter( 'kenta_post_featured_image_elements_override_default_value', 'kenta_flow_featured_image_elements_override' );
add_filter( 'kenta_page_featured_image_elements_override_default_value', 'kenta_flow_featured_image_elements_override' );

if ( ! function_exists( 'kenta_flow_page_header_spacing' ) ) {
	/**
	 * Page header spacing
	 * 
	 * @return array
	 */
	function kenta_flow_page_header_spacing() {
		return [
			'top'    => '0px',
			'right'  => '0px',
			'bottom' => '0px',
			'left'   => '0px',
			'linked' => true,
		];
	}
}
add_filter( 'kenta_page_header_spacing_default_value', 'kenta_flow_page_header_spacing' );

//
// Widgets area
//

// List icon
add_action( 'kenta_global_sidebar_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_footer_el_widgets_1_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_footer_el_widgets_2_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_footer_el_widgets_3_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_footer_el_widgets_4_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_header_el_widgets_1_list-icon_default_value', 'kenta_flow_return_no' );
add_action( 'kenta_header_el_widgets_2_list-icon_default_value', 'kenta_flow_return_no' );

//
// Transparent Header settings
//

if ( ! function_exists( 'kenta_flow_trans_header_border_bottom' ) ) {
	function kenta_flow_trans_header_border_bottom() {
		return array(
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--kenta-base-300)',
		);
	}
}
add_filter( 'kenta_trans_header_border_bottom_default_value', 'kenta_flow_trans_header_border_bottom' );

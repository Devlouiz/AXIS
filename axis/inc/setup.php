<?php
/**
 * Theme setup: supports, assets and pattern categories.
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme supports and editor styles.
 */
function axis_setup() {
	load_theme_textdomain( 'axis', get_template_directory() . '/languages' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_editor_style( 'assets/css/axis.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'axis_setup' );

/**
 * Enqueue the front-end stylesheet.
 */
function axis_enqueue_assets() {
	wp_enqueue_style(
		'axis',
		get_theme_file_uri( 'assets/css/axis.css' ),
		array(),
		AXIS_VERSION
	);
	wp_enqueue_script(
		'axis',
		get_theme_file_uri( 'assets/js/axis.js' ),
		array(),
		AXIS_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
	wp_localize_script(
		'axis',
		'axisTheme',
		array(
			'previous' => __( 'Previous', 'axis' ),
			'next'     => __( 'Next', 'axis' ),
			'carousel' => __( 'Carousel', 'axis' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'axis_enqueue_assets' );

/**
 * Register pattern categories used by the theme's patterns.
 */
function axis_register_pattern_categories() {
	$categories = array(
		'axis-home'      => __( 'AXIS: Homepage', 'axis' ),
		'axis-property'  => __( 'AXIS: Property', 'axis' ),
		'axis-market'    => __( 'AXIS: Market', 'axis' ),
		'axis-corporate' => __( 'AXIS: Corporate', 'axis' ),
		'axis-pages'     => __( 'AXIS: Full pages', 'axis' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'axis_register_pattern_categories' );

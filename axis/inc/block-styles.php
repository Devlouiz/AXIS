<?php
/**
 * Block style variations. Their CSS lives in assets/css/axis.css.
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block styles.
 */
function axis_register_block_styles() {
	$styles = array(
		'core/group'     => array(
			'axis-card'     => __( 'Card', 'axis' ),
			'axis-carousel' => __( 'Carousel', 'axis' ),
			'axis-cta'      => __( 'Call to action band', 'axis' ),
			'axis-grid'     => __( 'Axis Grid', 'axis' ),
			'axis-rule'     => __( 'Top rule', 'axis' ),
		),
		'core/cover'     => array(
			'axis-hero' => __( 'Hero', 'axis' ),
			'axis-tile' => __( 'Photo tile', 'axis' ),
		),
		'core/paragraph' => array(
			'eyebrow'         => __( 'Eyebrow', 'axis' ),
			'count-up'        => __( 'Count up', 'axis' ),
			'technical-label' => __( 'Technical label', 'axis' ),
			'figure'          => __( 'Figure', 'axis' ),
			'axis-pill'       => __( 'Pill', 'axis' ),
		),
		'core/quote'     => array(
			'axis-testimonial' => __( 'Testimonial card', 'axis' ),
		),
		'core/separator' => array(
			'axis-ticks' => __( 'Ticks', 'axis' ),
		),
		'core/table'     => array(
			'axis-data' => __( 'Data', 'axis' ),
		),
		'core/button'    => array(
			'secondary' => __( 'Secondary', 'axis' ),
			'text'      => __( 'Text with arrow', 'axis' ),
			'on-photo'  => __( 'On photo', 'axis' ),
			'chip'      => __( 'Chip', 'axis' ),
		),
		'core/list'      => array(
			'axis-rows' => __( 'Ruled rows', 'axis' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'axis_register_block_styles' );

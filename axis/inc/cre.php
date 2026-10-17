<?php
/**
 * Integration with the AXIS CRE plugin.
 *
 * Patterns in inc/patterns-cre use the plugin's blocks, so they are registered
 * only when the plugin is active. Without it, the theme stays a complete
 * corporate site built from core blocks.
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;

/**
 * Whether the AXIS CRE plugin is active.
 *
 * @return bool
 */
function axis_has_cre() {
	return defined( 'AXIS_CRE_VERSION' );
}

/**
 * Register the plugin-dependent patterns.
 */
function axis_register_cre_patterns() {
	if ( ! axis_has_cre() ) {
		return;
	}

	require_once get_template_directory() . '/inc/cre-patterns.php';

	foreach ( axis_cre_pattern_registry() as $slug => $pattern ) {
		$file = get_template_directory() . '/inc/patterns-cre/' . $pattern['file'];
		if ( ! is_readable( $file ) ) {
			continue;
		}

		ob_start();
		include $file;
		$content = ob_get_clean();

		register_block_pattern(
			$slug,
			array(
				'title'       => $pattern['title'],
				'description' => $pattern['description'],
				'categories'  => $pattern['categories'],
				'keywords'    => $pattern['keywords'],
				'inserter'    => $pattern['inserter'],
				'content'     => $content,
			)
		);
	}
}
add_action( 'init', 'axis_register_cre_patterns', 20 );

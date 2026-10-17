<?php
/**
 * Title: No results
 * Slug: axis/hidden-no-results
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"heading-3"} -->
<h2 class="wp-block-heading has-heading-3-font-size"><?php echo esc_html__( 'Nothing matched that search', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted"} -->
<p class="has-contrast-muted-color has-text-color"><?php echo esc_html__( 'Try an address, a market name or an asset ID such as 0047. Check the spelling, or search for fewer words.', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

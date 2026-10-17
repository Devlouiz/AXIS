<?php
/**
 * Title: Market map
 * Slug: axis/market-map
 * Categories: axis-market
 * Description: Submarkets on the map with the same submarkets as a list.
 * Keywords: map, submarkets
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Submarkets', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:axis/market-map {"mode":"market"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

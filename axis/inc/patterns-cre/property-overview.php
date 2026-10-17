<?php
/**
 * Title: Property overview
 * Slug: axis/property-overview
 * Categories: axis-property
 * Description: Description beside the heading, then the four key metrics.
 * Keywords: overview, metrics
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"32%"} -->
<div class="wp-block-column" style="flex-basis:32%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Overview', 'axis' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:axis/property-metrics /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

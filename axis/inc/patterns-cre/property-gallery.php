<?php
/**
 * Title: Property gallery
 * Slug: axis/property-gallery
 * Categories: axis-property
 * Description: Photos and plans with real previous and next buttons.
 * Keywords: gallery, photos, plans
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Photos and plans', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:axis/property-gallery /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

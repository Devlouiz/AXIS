<?php
/**
 * Title: Property hero
 * Slug: axis/property-hero
 * Categories: axis-property
 * Description: Technical bar, identity, actions and the lead photograph.
 * Keywords: property, listing, hero
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:template-part {"slug":"technical-bar","theme":"axis"} /-->

<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:paragraph {"className":"axis-status","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"status"}}}}} -->
<p class="axis-status">Investment sale</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"fontSize":"display-lg"} /-->

<!-- wp:paragraph {"className":"axis-class","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"asset_class_line"}}}}} -->
<p class="axis-class">Office, Class A. New York, NY</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#documents"><?php echo esc_html__( 'Request the offering memorandum', 'axis' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary"} -->
<div class="wp-block-button is-style-secondary"><a class="wp-block-button__link wp-element-button" href="#broker"><?php echo esc_html__( 'Contact the broker', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"axis-annotated"} -->
<div class="wp-block-group axis-annotated"><!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:paragraph {"className":"axis-annotation","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"coordinates"}}}}} -->
<p class="axis-annotation">40.7543 N, 73.9787 W</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

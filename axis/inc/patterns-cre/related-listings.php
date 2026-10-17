<?php
/**
 * Title: Similar listings
 * Slug: axis/related-listings
 * Categories: axis-property
 * Description: Listings like this one: same market and type, priced within 30 percent, best match first, in a carousel.
 * Keywords: related, similar, nearby, query
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:axis/related-listings {"layout":"carousel","perPage":6,"priceRange":30,"columns":3} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

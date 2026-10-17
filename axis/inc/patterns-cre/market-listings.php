<?php
/**
 * Title: Listings in this market
 * Slug: axis/market-listings
 * Categories: axis-market
 * Description: The market's listings as cards, newest first, in a carousel.
 * Keywords: listings, market, carousel
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"backgroundColor":"panel","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:axis/related-listings {"layout":"carousel","perPage":8,"priceRange":0,"orderBy":"newest","columns":3} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

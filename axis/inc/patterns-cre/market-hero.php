<?php
/**
 * Title: Market hero
 * Slug: axis/market-hero
 * Categories: axis-market
 * Description: The market's featured photograph behind its name and coverage line.
 * Keywords: market, hero
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:cover {"useFeaturedImage":true,"minHeight":520,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)","align":"full","className":"is-style-axis-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-style-axis-hero" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"market_id"}}}}} -->
<p class="is-style-eyebrow">Market 01</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"label-md","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"coordinates"}}}}} -->
<p class="has-label-md-font-size">40.7549 N, 73.9840 W</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"textColor":"on-inverse","fontSize":"display-xl"} /-->

<!-- wp:paragraph {"fontSize":"body-lg","metadata":{"bindings":{"content":{"source":"axis/field","args":{"key":"market_summary"}}}}} -->
<p class="has-body-lg-font-size">United States. 18 available assets, 214 transactions since 2020, 9 experts.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

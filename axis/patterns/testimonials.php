<?php
/**
 * Title: Testimonials
 * Slug: axis/testimonials
 * Categories: axis-home, axis-corporate, testimonials
 * Description: Client quotes in a carousel. Placeholders: replace them with quotes from clients who agreed to be quoted.
 * Keywords: quotes, clients, reviews
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"backgroundColor":"panel","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"axis-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-section-head"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Clients', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What clients say', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"body-md"} -->
<p class="has-contrast-muted-color has-text-color has-body-md-font-size"><?php echo esc_html__( 'Placeholder quotes: replace them with testimonials from clients who agreed to be quoted.', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-carousel axis-per-2","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"24rem"}} -->
<div class="wp-block-group is-style-axis-carousel axis-per-2"><!-- wp:quote {"className":"is-style-axis-testimonial"} -->
<blockquote class="wp-block-quote is-style-axis-testimonial"><!-- wp:paragraph -->
<p><?php echo esc_html__( '[Client quote about a sale: what the advisor did and what it changed for the client.]', 'axis' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( '[Client name], [Role, company]', 'axis' ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"is-style-axis-testimonial"} -->
<blockquote class="wp-block-quote is-style-axis-testimonial"><!-- wp:paragraph -->
<p><?php echo esc_html__( '[Client quote about a lease: how the team found the space and negotiated the terms.]', 'axis' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( '[Client name], [Role, company]', 'axis' ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"is-style-axis-testimonial"} -->
<blockquote class="wp-block-quote is-style-axis-testimonial"><!-- wp:paragraph -->
<p><?php echo esc_html__( '[Client quote about a valuation or a portfolio review.]', 'axis' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( '[Client name], [Role, company]', 'axis' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

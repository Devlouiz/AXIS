<?php
/**
 * Title: Page not found
 * Slug: axis/hidden-404
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Error 404', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"display-lg"} -->
<h1 class="wp-block-heading has-display-lg-font-size"><?php echo esc_html__( 'We can’t find that page.', 'axis' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"body-lg"} -->
<p class="has-contrast-muted-color has-text-color has-body-lg-font-size"><?php echo esc_html__( 'It may have moved when a listing closed or a report was updated. Search for an address, market or asset ID, or start from a market.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search the site', 'axis' ); ?>","placeholder":"<?php echo esc_html__( 'Address, market or asset ID', 'axis' ); ?>","buttonText":"<?php echo esc_html__( 'Search', 'axis' ); ?>"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Or start from', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'The homepage', 'axis' ); ?></a></p>
<!-- /wp:paragraph -->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'All properties', 'axis' ); ?></a></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<?php if ( axis_has_cre() ) : ?>
<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><a href="<?php echo esc_url( home_url( '/markets/' ) ); ?>"><?php echo esc_html__( 'Markets', 'axis' ); ?></a></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact', 'axis' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

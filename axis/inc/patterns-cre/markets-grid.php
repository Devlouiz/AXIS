<?php
/**
 * Title: Markets
 * Slug: axis/markets-grid
 * Categories: axis-home, axis-market
 * Description: Six market cards with a headline figure each. Edit the figures to match your latest research.
 * Keywords: markets, cities, coverage
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"axis-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-section-head"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Markets', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Six markets, one research team', 'axis' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-secondary"} -->
<div class="wp-block-button is-style-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/markets/' ) ); ?>"><?php echo esc_html__( 'Compare markets', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"22rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-office-a.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/new-york/' ) ); ?>"><?php echo esc_html__( 'New York', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Office vacancy 14.2%, rent $78.40 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-office-b.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/chicago/' ) ); ?>"><?php echo esc_html__( 'Chicago', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Office vacancy 21.4%, rent $41.20 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-industrial-a.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/dallas/' ) ); ?>"><?php echo esc_html__( 'Dallas', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Industrial vacancy 7.8%, rent $6.70 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-industrial-b.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/atlanta/' ) ); ?>"><?php echo esc_html__( 'Atlanta', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Industrial vacancy 8.4%, rent $6.20 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-office-c.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/toronto/' ) ); ?>"><?php echo esc_html__( 'Toronto', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Office vacancy 18.6%, rent $52.30 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card axis-media-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-axis-card axis-media-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"7/6","scale":"cover","sizeSlug":"full","className":"axis-thumb"} -->
<figure class="wp-block-image size-full axis-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-mixed.jpg' ) ); ?>" alt="" style="aspect-ratio:7/6;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="<?php echo esc_url( home_url( '/markets/denver/' ) ); ?>"><?php echo esc_html__( 'Denver', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Office vacancy 26.0%, rent $31.60 / sf', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

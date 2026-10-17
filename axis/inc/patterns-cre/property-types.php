<?php
/**
 * Title: Browse by property type
 * Slug: axis/property-types
 * Categories: axis-home, axis-property
 * Description: Five photo tiles, one per property type, linking to its listings.
 * Keywords: types, categories, office, industrial
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
<p class="is-style-eyebrow"><?php echo esc_html__( 'Browse by type', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'What are you looking for?', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"body-md"} -->
<p class="has-contrast-muted-color has-text-color has-body-md-font-size"><?php echo esc_html__( 'Every listing carries the same figures, so you can compare an office with a warehouse on the numbers.', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"9rem","columnCount":5}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-office-a.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)","className":"is-style-axis-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover is-style-axis-tile"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-office-a.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
<h3 class="wp-block-heading has-heading-3-font-size"><a href="<?php echo esc_url( home_url( '/property-type/office/' ) ); ?>"><?php echo esc_html__( 'Office', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Towers, suites and campuses', 'axis' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-industrial-a.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)","className":"is-style-axis-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover is-style-axis-tile"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-industrial-a.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
<h3 class="wp-block-heading has-heading-3-font-size"><a href="<?php echo esc_url( home_url( '/property-type/industrial/' ) ); ?>"><?php echo esc_html__( 'Industrial', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Logistics and light industrial', 'axis' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-multifamily.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)","className":"is-style-axis-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover is-style-axis-tile"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-multifamily.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
<h3 class="wp-block-heading has-heading-3-font-size"><a href="<?php echo esc_url( home_url( '/property-type/multifamily/' ) ); ?>"><?php echo esc_html__( 'Multifamily', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Apartments and portfolios', 'axis' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-retail.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)","className":"is-style-axis-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover is-style-axis-tile"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-retail.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
<h3 class="wp-block-heading has-heading-3-font-size"><a href="<?php echo esc_url( home_url( '/property-type/retail/' ) ); ?>"><?php echo esc_html__( 'Retail', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Flagship and neighbourhood', 'axis' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-mixed.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)","className":"is-style-axis-tile","layout":{"type":"default"}} -->
<div class="wp-block-cover is-style-axis-tile"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-mixed.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.05) 30%,rgba(9,16,28,0.8) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"heading-3"} -->
<h3 class="wp-block-heading has-heading-3-font-size"><a href="<?php echo esc_url( home_url( '/property-type/mixed-use/' ) ); ?>"><?php echo esc_html__( 'Mixed use', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Office over retail', 'axis' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

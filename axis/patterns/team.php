<?php
/**
 * Title: Team
 * Slug: axis/team
 * Categories: axis-corporate, team
 * Description: Four people with their role, market and track record. Static; the AXIS CRE plugin replaces it with live expert cards.
 * Keywords: experts, people, team
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
<p class="is-style-eyebrow"><?php echo esc_html__( 'Team', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'The people behind the numbers', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"body-md"} -->
<p class="has-contrast-muted-color has-text-color has-body-md-font-size"><?php echo esc_html__( 'Every expert lists their markets, property types and track record.', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-secondary"} -->
<div class="wp-block-button is-style-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html__( 'Meet the team', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-axis-card"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","sizeSlug":"full","className":"axis-portrait"} -->
<figure class="wp-block-image size-full axis-portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of David Morgan', 'axis' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="#"><?php echo esc_html__( 'David Morgan', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Executive director, capital markets. New York', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"axis-record","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-record"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '142', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Transactions', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '$3.8B', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Volume', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-axis-card"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","sizeSlug":"full","className":"axis-portrait"} -->
<figure class="wp-block-image size-full axis-portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Amara Okafor', 'axis' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="#"><?php echo esc_html__( 'Amara Okafor', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Director, tenant representation. Chicago', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"axis-record","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-record"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '96', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Transactions', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '$1.1B', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Volume', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-axis-card"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","sizeSlug":"full","className":"axis-portrait"} -->
<figure class="wp-block-image size-full axis-portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Lucía Fernández', 'axis' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="#"><?php echo esc_html__( 'Lucía Fernández', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Managing director, valuation. Dallas', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"axis-record","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-record"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '130', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Transactions', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '$5.2B', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Volume', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-axis-card"><!-- wp:image {"aspectRatio":"1/1","scale":"cover","sizeSlug":"full","className":"axis-portrait"} -->
<figure class="wp-block-image size-full axis-portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Ben Hartley', 'axis' ); ?>" style="aspect-ratio:1/1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"fontSize":"heading-4"} -->
<h3 class="wp-block-heading has-heading-4-font-size"><a href="#"><?php echo esc_html__( 'Ben Hartley', 'axis' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-md"} -->
<p class="has-contrast-muted-color has-text-color has-label-md-font-size"><?php echo esc_html__( 'Senior vice president, industrial leasing. Atlanta', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"axis-record","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"bottom"}} -->
<div class="wp-block-group axis-record"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '88', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Transactions', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"data-sm","className":"is-style-figure"} -->
<p class="is-style-figure has-data-sm-font-size"><?php echo esc_html__( '$1.4B', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"label-sm"} -->
<p class="has-contrast-muted-color has-text-color has-label-sm-font-size"><?php echo esc_html__( 'Volume', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

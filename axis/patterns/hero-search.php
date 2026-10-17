<?php
/**
 * Title: Photo hero with search
 * Slug: axis/hero-search
 * Categories: axis-home, banner
 * Description: Full-width photo, headline, listing search, popular searches and four figures that count up.
 * Keywords: hero, search, property-led, photo
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)","align":"full","className":"is-style-axis-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-style-axis-hero"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Commercial real estate advisory', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"on-inverse","fontSize":"display-xl"} -->
<h1 class="wp-block-heading has-on-inverse-color has-text-color has-display-xl-font-size"><?php echo esc_html__( 'Find commercial space that fits the numbers.', 'axis' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"body-lg"} -->
<p class="has-body-lg-font-size"><?php echo esc_html__( 'Offices, logistics, apartments and retail across six North American markets, with the vacancy, rent and cap rate behind every listing.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"axis-search-panel"} -->
<div class="wp-block-group axis-search-panel"><?php if ( axis_has_cre() ) : ?>
<!-- wp:axis/property-search {"layout":"hero"} /-->
<?php else : ?>
<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'axis' ); ?>","showLabel":false,"placeholder":"<?php echo esc_html__( 'City, market, street or asset ID', 'axis' ); ?>","buttonText":"<?php echo esc_html__( 'Search', 'axis' ); ?>"} /-->
<?php endif; ?></div>
<!-- /wp:group -->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:group {"className":"axis-chips","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group axis-chips"><!-- wp:paragraph {"fontSize":"label-md"} -->
<p class="has-label-md-font-size"><?php echo esc_html__( 'Popular:', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/property-type/office/' ) ); ?>"><?php echo esc_html__( 'Offices', 'axis' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/property-type/industrial/' ) ); ?>"><?php echo esc_html__( 'Logistics', 'axis' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/property-type/multifamily/' ) ); ?>"><?php echo esc_html__( 'Apartments', 'axis' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/property-type/retail/' ) ); ?>"><?php echo esc_html__( 'Retail', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<?php endif; ?>

<!-- wp:group {"className":"axis-hero-stats","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group axis-hero-stats"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-count-up"} -->
<p class="is-style-count-up"><?php echo esc_html__( '$553M', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Transacted since 2025', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-count-up"} -->
<p class="is-style-count-up"><?php echo esc_html__( '6', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Markets covered', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-count-up"} -->
<p class="is-style-count-up"><?php echo esc_html__( '17', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Years advising owners', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-count-up"} -->
<p class="is-style-count-up"><?php echo esc_html__( '24', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Advisors on the ground', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

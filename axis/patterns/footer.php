<?php
/**
 * Title: Footer
 * Slug: axis/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"backgroundColor":"inverse","textColor":"on-inverse","align":"full","className":"axis-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull axis-footer has-on-inverse-color has-inverse-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"fontSize":"body-sm"} -->
<p class="has-body-sm-font-size"><?php echo esc_html__( 'Commercial real estate advisory. Replace this line with your firm in one sentence.', 'axis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"label-lg","className":"axis-footer-head"} -->
<p class="axis-footer-head has-label-lg-font-size"><?php echo esc_html__( 'Discover', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"axis-footer-links"} -->
<ul class="wp-block-list axis-footer-links"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'Properties', 'axis' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/markets/' ) ); ?>"><?php echo esc_html__( 'Markets', 'axis' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/transactions/' ) ); ?>"><?php echo esc_html__( 'Transactions', 'axis' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<?php endif; ?>

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"label-lg","className":"axis-footer-head"} -->
<p class="axis-footer-head has-label-lg-font-size"><?php echo esc_html__( 'Advise', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"axis-footer-links"} -->
<ul class="wp-block-list axis-footer-links"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html__( 'Capital markets', 'axis' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html__( 'Leasing', 'axis' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html__( 'Valuation', 'axis' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"label-lg","className":"axis-footer-head"} -->
<p class="axis-footer-head has-label-lg-font-size"><?php echo esc_html__( 'Company', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"axis-footer-links"} -->
<ul class="wp-block-list axis-footer-links"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html__( 'About', 'axis' ); ?></a></li>
<!-- /wp:list-item -->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/experts/' ) ); ?>"><?php echo esc_html__( 'Experts', 'axis' ); ?></a></li>
<!-- /wp:list-item -->
<?php else : ?>
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><?php echo esc_html__( 'Team', 'axis' ); ?></a></li>
<!-- /wp:list-item -->
<?php endif; ?>

<?php if ( axis_has_cre() ) : ?>
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/research/' ) ); ?>"><?php echo esc_html__( 'Research', 'axis' ); ?></a></li>
<!-- /wp:list-item -->
<?php else : ?>
<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>"><?php echo esc_html__( 'Insights', 'axis' ); ?></a></li>
<!-- /wp:list-item -->
<?php endif; ?>

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Contact', 'axis' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"26%"} -->
<div class="wp-block-column" style="flex-basis:26%"><!-- wp:paragraph {"fontSize":"label-lg","className":"axis-footer-head"} -->
<p class="axis-footer-head has-label-lg-font-size"><?php echo esc_html__( 'Market updates', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"body-sm"} -->
<p class="has-body-sm-font-size"><?php echo esc_html__( 'The quarterly figures for your markets, from the research team.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Get market updates', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"axis-footer-base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group axis-footer-base"><!-- wp:paragraph {"fontSize":"label-sm"} -->
<p class="has-label-sm-font-size"><?php echo esc_html__( 'Commercial real estate, with context.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"label-sm"} -->
<p class="has-label-sm-font-size"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html__( 'Privacy', 'axis' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"label-sm"} -->
<p class="has-label-sm-font-size"><a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>"><?php echo esc_html__( 'Accessibility statement', 'axis' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"label-sm"} -->
<p class="has-label-sm-font-size"><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html__( 'Terms', 'axis' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php
/**
 * Title: Call to action
 * Slug: axis/enquiry
 * Categories: axis-home, call-to-action
 * Description: Teal band with two actions beside a photograph.
 * Keywords: contact, cta, enquiry, valuation
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-axis-cta"} -->
<div class="wp-block-group is-style-axis-cta"><!-- wp:columns {"verticalAlignment":"center","className":"axis-cta-cols","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|0","top":"var:preset|spacing|0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center axis-cta-cols"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textColor":"on-accent"} -->
<h2 class="wp-block-heading has-on-accent-color has-text-color"><?php echo esc_html__( 'Selling or leasing a building?', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"body-md"} -->
<p class="has-body-md-font-size"><?php echo esc_html__( 'Tell us the asset and the market. An advisor who covers it replies within one working day with a view on price.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-secondary"} -->
<div class="wp-block-button is-style-secondary"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Request a valuation', 'axis' ); ?></a></div>
<!-- /wp:button -->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:button {"className":"is-style-on-photo"} -->
<div class="wp-block-button is-style-on-photo"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/experts/' ) ); ?>"><?php echo esc_html__( 'Talk to an expert', 'axis' ); ?></a></div>
<!-- /wp:button -->
<?php else : ?>
<!-- wp:button {"className":"is-style-on-photo"} -->
<div class="wp-block-button is-style-on-photo"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Talk to an advisor', 'axis' ); ?></a></div>
<!-- /wp:button -->
<?php endif; ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:image {"sizeSlug":"full","className":"axis-cta-img"} -->
<figure class="wp-block-image size-full axis-cta-img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/asset-mixed.jpg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

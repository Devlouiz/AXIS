<?php
/**
 * Title: Header with search
 * Slug: axis/header-property
 * Categories: header
 * Description: Adds address, market and asset ID search to the header.
 * Block Types: core/template-part/header
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","className":"axis-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull axis-header" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'axis' ); ?>","showLabel":false,"placeholder":"<?php echo esc_html__( 'Search listings', 'axis' ); ?>","width":240,"widthUnit":"px","buttonText":"<?php echo esc_html__( 'Search', 'axis' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:axis/listing-tools /-->
<?php endif; ?>

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'List a property', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

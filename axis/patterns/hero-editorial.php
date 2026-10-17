<?php
/**
 * Title: Photo hero
 * Slug: axis/hero-editorial
 * Categories: axis-home, banner
 * Description: Full-width photo with the positioning line and two actions.
 * Keywords: hero, intro, corporate, photo
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>","minHeight":640,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)","align":"full","className":"is-style-axis-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-style-axis-hero" style="min-height:640px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(9,16,28,0.55) 0%,rgba(9,16,28,0.35) 45%,rgba(9,16,28,0.82) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Commercial real estate advisory', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"on-inverse","fontSize":"display-xl"} -->
<h1 class="wp-block-heading has-on-inverse-color has-text-color has-display-xl-font-size"><?php echo esc_html__( 'Commercial real estate, with context.', 'axis' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"body-lg"} -->
<p class="has-body-lg-font-size"><?php echo esc_html__( 'Axis Partners advises owners, investors and occupiers across six North American markets, from the first search to the closing table.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><?php if ( axis_has_cre() ) : ?>
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php echo esc_html__( 'Explore properties', 'axis' ); ?></a></div>
<!-- /wp:button -->
<?php else : ?>
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Talk to an advisor', 'axis' ); ?></a></div>
<!-- /wp:button -->
<?php endif; ?>

<!-- wp:button {"className":"is-style-on-photo"} -->
<div class="wp-block-button is-style-on-photo"><a class="wp-block-button__link wp-element-button" href="#services"><?php echo esc_html__( 'How we advise', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

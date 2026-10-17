<?php
/**
 * Title: Contact
 * Slug: axis/contact
 * Categories: axis-corporate, contact
 * Description: Ways to reach the team beside the offices. Add any form plugin block in the left column.
 * Keywords: contact, offices, enquiry
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Contact', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'Tell us the asset and the market', 'axis' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"56%"} -->
<div class="wp-block-column" style="flex-basis:56%"><!-- wp:paragraph {"fontSize":"body-lg"} -->
<p class="has-body-lg-font-size"><?php echo esc_html__( 'Tell us what you need and in which market. An advisor who covers it replies within one working day.', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-axis-rows"} -->
<ul class="wp-block-list is-style-axis-rows"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Email: enquiries@axispartners.example', 'axis' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Phone: +1 212 555 0100', 'axis' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Hours: Monday to Friday, 8am to 6pm Eastern', 'axis' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:enquiries@axispartners.example"><?php echo esc_html__( 'Email the team', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"44%"} -->
<div class="wp-block-column" style="flex-basis:44%"><!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-style-axis-card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'New York', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"heading-3"} -->
<h2 class="wp-block-heading has-heading-3-font-size"><?php echo esc_html__( '330 Madison Avenue', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '9th floor', 'axis' ); ?><br><?php echo esc_html__( 'New York, NY 10017', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"data-sm"} -->
<p class="has-data-sm-font-size"><?php echo esc_html__( '+1 212 555 0147', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=330+Madison+Avenue+New+York"><?php echo esc_html__( 'Get directions', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-axis-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-group is-style-axis-card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Chicago', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"heading-3"} -->
<h2 class="wp-block-heading has-heading-3-font-size"><?php echo esc_html__( '211 West Kinzie Street', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Suite 1200', 'axis' ); ?><br><?php echo esc_html__( 'Chicago, IL 60654', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"data-sm"} -->
<p class="has-data-sm-font-size"><?php echo esc_html__( '+1 312 555 0190', 'axis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=211+West+Kinzie+Street+Chicago"><?php echo esc_html__( 'Get directions', 'axis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

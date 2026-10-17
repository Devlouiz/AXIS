<?php
/**
 * Title: Search heading
 * Slug: axis/hidden-search-head
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'Search', 'axis' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search the site', 'axis' ); ?>","placeholder":"<?php echo esc_html__( 'Address, market or asset ID', 'axis' ); ?>","buttonText":"<?php echo esc_html__( 'Search', 'axis' ); ?>"} /--></div>
<!-- /wp:group -->

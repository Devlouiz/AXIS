<?php
/**
 * Title: Expert transactions
 * Slug: axis/expert-transactions
 * Inserter: no
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Transactions', 'axis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:axis/transaction-data {"mode":"list","perPage":3,"scope":"expert"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

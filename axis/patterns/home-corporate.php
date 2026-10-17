<?php
/**
 * Title: Home, corporate
 * Slug: axis/home-corporate
 * Categories: axis-pages
 * Description: Sells expertise first. Adds listings, market data, transactions and research when the AXIS CRE plugin is active.
 * Keywords: home, front page, corporate
 * Template Types: front-page, home
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:pattern {"slug":"axis/hero-editorial"} /-->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:pattern {"slug":"axis/featured-assets"} /-->
<?php endif; ?>

<!-- wp:pattern {"slug":"axis/services-split"} /-->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:pattern {"slug":"axis/market-intelligence"} /-->

<!-- wp:pattern {"slug":"axis/recent-transactions"} /-->
<?php endif; ?>

<?php if ( axis_has_cre() ) : ?>
<!-- wp:pattern {"slug":"axis/experts"} /-->
<?php else : ?>
<!-- wp:pattern {"slug":"axis/team"} /-->
<?php endif; ?>

<!-- wp:pattern {"slug":"axis/testimonials"} /-->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:pattern {"slug":"axis/research"} /-->
<?php else : ?>
<!-- wp:pattern {"slug":"axis/insights"} /-->
<?php endif; ?>

<!-- wp:pattern {"slug":"axis/enquiry"} /-->

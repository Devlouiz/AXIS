<?php
/**
 * Title: Home, property-led
 * Slug: axis/home-property
 * Categories: axis-pages
 * Description: Photo hero with search, featured listings, property types, markets, services, experts, testimonials, research and a call to action.
 * Keywords: home, front page, search, listings
 * Template Types: front-page, home
 * Viewport Width: 1440
 *
 * @package Axis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:pattern {"slug":"axis/hero-search"} /-->

<?php if ( axis_has_cre() ) : ?>
<!-- wp:pattern {"slug":"axis/featured-assets"} /-->

<!-- wp:pattern {"slug":"axis/property-types"} /-->

<!-- wp:pattern {"slug":"axis/markets-grid"} /-->
<?php endif; ?>

<!-- wp:pattern {"slug":"axis/services-split"} /-->

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

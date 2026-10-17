# AXIS
Wordpress FSE theme for commercial real estate companies

=== AXIS ===
Contributors: louisokechukwu
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 0.2.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A commercial real estate block theme built around property intelligence, not property cards.

== Description ==

AXIS is a full site editing theme for commercial real estate brokerages, investment firms, advisors, developers and asset managers.

On its own, AXIS is a complete corporate site: an editorial homepage, services, team, transaction stories, insights from standard posts, contact, search and a 404 page. Install the AXIS CRE plugin and the theme adds properties, markets, transactions, experts and research, with a synced map and search, from the same templates.

Design notes:

* Photo-first listing cards with status on the photo, soft elevation and 14px corners.
* One typeface, Archivo, bundled. Its width axis does the work: wider and heavy for headlines, normal width for the interface, tabular figures for prices and data.
* One teal accent, amber for Featured, blue for For lease. Status is always written, never colour alone.
* Carousels, scroll reveals and count-up figures are enhancements: without JavaScript they are plain grids and text, and nothing moves when the visitor prefers reduced motion.
* A 3px focus ring with a 2px gap on every interactive element.

== Setting up the homepage ==

The front page uses the "Home, property-led" pattern: photo hero with search, featured listings, property types, markets, services, experts, testimonials and research. To lead with your firm instead of listings:

1. Go to Appearance > Editor > Templates > Pages: Front Page.
2. Select the content and replace it with the "Home, corporate" pattern from the AXIS: Full pages category.

Pages built from patterns (Services, Team, Contact) look best with the "Page, full width" template.
3. In Appearance > Editor > Patterns > Header, swap the header for "Header, property-led" to add address and market search.

To show your latest posts on a separate page, create a page called Insights and set it as the posts page in Settings > Reading.

== Style variations ==

* Default: concrete, steel and verdigris.
* Dark: the same roles on night tones, checked for contrast.

== Block styles ==

Group: Axis Grid, Top rule. Paragraph: Technical label, Figure. Separator: Ticks. Table: Data. Button: Secondary, Text. List: Ruled rows.

== With the AXIS CRE plugin ==

When the plugin is active, AXIS registers seventeen more patterns that use its blocks, and its templates for properties, markets, transactions, experts and research come into use. CONTRACT.md in the theme folder lists the blocks, attributes and fields the theme expects.

== Changelog ==

= 0.2.2 =
* Accessibility: text on the teal call-to-action band and its outline button keeps its contrast in the light and dark styles; footer buttons keep their own text colour.
* Translated text inside image alt attributes is escaped for attributes.
* Removed an unsupported tag from the theme header.
* Coding standards: merged duplicate CSS rules; scripts follow the WordPress JavaScript standard.

= 0.2.1 =
* Header: saved and compare counters from AXIS CRE 0.2, and a header that stays on one line.
* Property, market, expert and transaction templates use the Related listings block.
* Carousels leave room for the card hover lift and shadow.

= 0.2.0 =
* New look: photo-first listing cards, soft elevation, rounded corners and a teal accent.
* New photo hero with listing search, popular searches and count-up figures.
* New patterns: Browse by property type, Markets, How we advise, Testimonials, Call to action.
* Carousels for featured assets, experts and testimonials; they stay a grid without JavaScript.
* Sections fade up as they scroll into view; nothing moves when the visitor prefers reduced motion.
* Building illustrations ship with the theme for sample content and patterns.

= 0.1.0 =
* First release.

== Copyright ==

AXIS WordPress theme, (C) 2026 Louis Okechukwu.
AXIS is distributed under the terms of the GNU GPL.

Archivo, Copyright 2020 The Archivo Project Authors (https://github.com/Omnibus-Type/Archivo).
License: SIL Open Font License, Version 1.1. See assets/fonts/OFL.txt.

Images in assets/images are original building illustrations made for this theme, released under the GPL.

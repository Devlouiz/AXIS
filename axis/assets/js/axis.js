/**
 * AXIS theme behaviour: carousels, reveal on scroll, count-up figures, header state.
 * Everything here is an enhancement: without it, carousels are grids and nothing is hidden.
 */
( function () {
	'use strict';

	const doc = document.documentElement;
	const i18n = window.axisTheme || {
		previous: 'Previous',
		next: 'Next',
		carousel: 'Carousel',
	};
	const reduce =
		window.matchMedia &&
		window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function icon( d ) {
		return (
			'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="' +
			d +
			'"/></svg>'
		);
	}

	/* ---------- Carousels ---------- */

	function carousel( root ) {
		const track =
			root.querySelector(
				'.axis-cre-grid, .wp-block-post-template, .axis-cre-explorer__list'
			) || root;
		if (
			track.classList.contains( 'axis-car-track' ) ||
			track.children.length < 2
		) {
			return;
		}
		track.classList.add( 'axis-car-track' );
		if ( ! track.hasAttribute( 'tabindex' ) ) {
			track.setAttribute( 'tabindex', '0' );
		}
		if ( ! track.hasAttribute( 'aria-label' ) ) {
			let heading = root.closest( 'section, .wp-block-group.alignfull' );
			heading = heading && heading.querySelector( 'h2' );
			track.setAttribute(
				'aria-label',
				heading ? heading.textContent.trim() : i18n.carousel
			);
		}
		const nav = document.createElement( 'div' );
		nav.className = 'axis-car-nav';
		nav.innerHTML =
			'<button type="button" class="axis-car-prev" aria-label="' +
			i18n.previous +
			'">' +
			icon( 'm15 18-6-6 6-6' ) +
			'</button>' +
			'<button type="button" class="axis-car-next" aria-label="' +
			i18n.next +
			'">' +
			icon( 'm9 18 6-6-6-6' ) +
			'</button>';
		( track === root ? root.parentNode : root ).insertBefore(
			nav,
			track === root ? root.nextSibling : null
		);
		const prev = nav.querySelector( '.axis-car-prev' );
		const next = nav.querySelector( '.axis-car-next' );

		function step() {
			const first = track.children[ 0 ];
			const gap =
				parseFloat( window.getComputedStyle( track ).columnGap ) || 24;
			const per = Math.max(
				1,
				Math.floor(
					( track.clientWidth + gap ) /
						( first.getBoundingClientRect().width + gap )
				)
			);
			return per * ( first.getBoundingClientRect().width + gap );
		}
		function update() {
			const max = track.scrollWidth - track.clientWidth - 2;
			prev.disabled = track.scrollLeft <= 2;
			next.disabled = track.scrollLeft >= max;
			nav.hidden = max <= 0;
		}
		prev.addEventListener( 'click', function () {
			track.scrollBy( {
				left: -step(),
				behavior: reduce ? 'auto' : 'smooth',
			} );
		} );
		next.addEventListener( 'click', function () {
			track.scrollBy( {
				left: step(),
				behavior: reduce ? 'auto' : 'smooth',
			} );
		} );
		track.addEventListener(
			'scroll',
			function () {
				window.requestAnimationFrame( update );
			},
			{ passive: true }
		);
		window.addEventListener( 'resize', update );
		update();
	}

	/* ---------- Count up ---------- */

	function countUp( el ) {
		const text = el.textContent;
		const m = text.match( /^(\D*?)([\d.,]+)(.*)$/ );
		if ( ! m ) {
			return;
		}
		const target = parseFloat( m[ 2 ].replace( /,/g, '' ) );
		const decimals = ( m[ 2 ].split( '.' )[ 1 ] || '' ).length;
		const comma = m[ 2 ].indexOf( ',' ) > -1;
		if ( ! isFinite( target ) ) {
			return;
		}
		el.setAttribute( 'aria-label', text );
		let start = null;
		function frame( now ) {
			if ( start === null ) {
				start = now;
			}
			const p = Math.min( 1, ( now - start ) / 1600 );
			const v = target * ( 1 - Math.pow( 1 - p, 3 ) );
			let s = v.toFixed( decimals );
			if ( comma ) {
				s = Number( s ).toLocaleString( 'en-US', {
					minimumFractionDigits: decimals,
					maximumFractionDigits: decimals,
				} );
			}
			el.textContent = m[ 1 ] + s + m[ 3 ];
			if ( p < 1 ) {
				window.requestAnimationFrame( frame );
			} else {
				el.textContent = text;
			}
		}
		window.requestAnimationFrame( frame );
	}

	/* ---------- Reveal ---------- */

	function revealTargets() {
		const out = [];
		document
			.querySelectorAll(
				'main .wp-block-group.alignfull > .alignwide, main .wp-block-group.alignfull > .wp-block-group.alignwide'
			)
			.forEach( function ( wide ) {
				Array.prototype.forEach.call(
					wide.children,
					function ( child, i ) {
						if (
							child.closest(
								'.wp-block-cover.is-style-axis-hero'
							)
						) {
							return;
						}
						child.style.setProperty(
							'--axis-delay',
							Math.min( i, 4 ) * 0.06 + 's'
						);
						out.push( child );
					}
				);
			} );
		return out;
	}

	function init() {
		document
			.querySelectorAll( '.is-style-axis-carousel' )
			.forEach( carousel );

		const header = document.querySelector(
			'header.wp-block-template-part'
		);
		if ( header ) {
			const onScroll = function () {
				doc.classList.toggle( 'is-scrolled', window.scrollY > 8 );
			};
			window.addEventListener( 'scroll', onScroll, { passive: true } );
			onScroll();
		}

		if ( reduce || ! ( 'IntersectionObserver' in window ) ) {
			return;
		}
		doc.classList.add( 'axis-motion' );
		const targets = revealTargets();
		const counters = document.querySelectorAll( '.is-style-count-up' );
		const io = new window.IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( e ) {
					if ( ! e.isIntersecting ) {
						return;
					}
					io.unobserve( e.target );
					if ( e.target.classList.contains( 'is-style-count-up' ) ) {
						countUp( e.target );
					} else {
						e.target.classList.add( 'is-in' );
					}
				} );
			},
			{ rootMargin: '0px 0px -8% 0px', threshold: 0.08 }
		);
		targets.forEach( function ( t ) {
			t.classList.add( 'axis-reveal' );
			io.observe( t );
		} );
		counters.forEach( function ( c ) {
			io.observe( c );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();

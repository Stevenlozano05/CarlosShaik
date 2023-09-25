/**
 * File:	smoothscroll.js
 * Theme: 	Flat Blocks
 * 
 * Javascript for smooth scrolling internal links.
 *
 * @package flat-blocks
 * @since	1.0
 * 
 * This excellent code comes from https://css-tricks.com/snippets/jquery/smooth-scrolling/
 * with only the addition of $(document).ready(function() and some conditions for 
 * backward compatibility with Bootstrap.
 */
 
( function( $ ) {
	
	$(document).ready(function() {

		// This is necessary for our smooth scroll to top of the page
		//$('.wp-site-blocks').attr('id', 'page')
		
		// Select all links with hashes (#)
		$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.not('[data-toggle="tab"]') /* ignore bootstrap tabs */
			.not('[data-toggle="collapse"]')  /* ignore bootstrap collapsible content */
			.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				&& 
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				//console.log('target id=' + target.id); //TEST

				// Does a scroll target exist?
				if (target.length) {

					// Figure out top offset from top margin and/or admin bar
					var topOffset = 0;
					const siteTopMargin = parseInt( $('.wp-site-blocks > header:has(.is-style-fixed-header)').outerHeight() );
					if (siteTopMargin) topOffset += siteTopMargin;
					const adminbarHeight = parseInt( $( '#wpadminbar' ).outerHeight() );
					if (adminbarHeight) topOffset += adminbarHeight;

					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
				  		scrollTop: ( target.offset().top - topOffset )
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						/*var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};*/
					});
				} // target
			} // On-page links
		}); // $(a)
	}); // $(document)
	
} )( jQuery );
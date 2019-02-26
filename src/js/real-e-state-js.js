( function() {
"use strict";
	window.onload = function () {

		if ( document.querySelector( '.simple_list' ) ) {
			var featured_span = document.getElementsByClassName( 'simple_list' )[0].getElementsByTagName( 'span' );
			var featured_img = '';
			for (var i = 0; i < featured_span.length; i++) {
				featured_img = featured_span[i].getElementsByTagName( 'img' )[0];
				featured_span[i].style.width = '100%';
				featured_span[i].style.height = '100%';
				featured_img.style.width = '100%';
			}
		// endif
		} 

		if ( document.getElementsByTagName('body')[0].classList.contains( 'home' ) ) {
			listing_li_wraps();
			listing_img_fix();
		}
	// end function
	};

	window.onresize = function() {
		if ( document.getElementsByTagName('body')[0].classList.contains( 'home' ) ) {
			listing_img_fix();
		}
	};

	function listing_li_wraps() {
		var li_select = document.querySelectorAll( 'div.current-listings > .simple_list > li' );
		var li_get, li_innerwraps;
		for (var i = 0; i < li_select.length; i++) {
			li_get = li_select[i].innerHTML;
			li_innerwraps = '<div class="listing-wrap"><div class="listing-modules">' + li_get + '</div></div>';
			li_select[i].innerHTML = li_innerwraps;
		}
	}

	function listing_img_fix() {
			var listing_img;
			listing_img = document.querySelectorAll( '.left_section .loaded' );
			if ( window.innerWidth <= 991 ) {
				for (var i = 0; i < listing_img.length; i++) {
					listing_img[i].removeAttribute( 'height' );
					listing_img[i].style.width = '100%' ;
					listing_img[i].style.height = 'auto' ;
				}
			} else {
				for (var i = 0; i < listing_img.length; i++) {
					listing_img[i].setAttribute( 'height', '175' );
					listing_img[i].style.width = '100%' ;
					listing_img[i].style.height = '175px' ;
				}
			}
	}
	
})();
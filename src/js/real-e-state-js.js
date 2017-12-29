( function() {
'use strict';
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

		}
	};
	
})();
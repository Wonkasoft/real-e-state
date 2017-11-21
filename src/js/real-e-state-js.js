( function() {
'use strict';
	var foot_height = document.getElementById('e-state-footer').clientHeight;

	window.addEventListener( 'resize', get_footer_height );

	function get_footer_height() {

		foot_height = document.getElementById('e-state-footer').clientHeight;
		document.getElementById('main').style.paddingBottom = foot_height + 'px';

	}

	window.onload = function () {

		get_footer_height();

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
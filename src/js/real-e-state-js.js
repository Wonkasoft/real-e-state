( function() {
'use strict';
	var foot_height = document.getElementById('e-state-footer').clientHeight;
	window.onload = get_footer_height();

	window.addEventListener( 'resize', get_footer_height );

	function get_footer_height() {
		foot_height = document.getElementById('e-state-footer').clientHeight;
		document.getElementById('main').style.paddingBottom = foot_height + 'px';
	}

	window.onload = function () {
		var featured_span = document.getElementsByClassName( 'simple_list' )[0].getElementsByTagName( 'span' )[0];
		var featured_img = featured_span.getElementsByTagName( 'img' )[0];
		featured_span.style.width = '100%';
		featured_span.style.height = '100%';
		featured_img.style.width = '100%';
	};
	
})();
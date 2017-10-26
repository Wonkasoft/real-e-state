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
		var powered = document.createElement('span');
		var poweredBy = document.createTextNode('powered by Wonkasoft');
		powered.appendChild(poweredBy);
		var appBtn = document.getElementsByClassName('calendly-badge-content')[0];
		appBtn.appendChild(powered);
	};
	
})();
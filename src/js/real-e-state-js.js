var foot_height = document.getElementById('e-state-footer').clientHeight;
window.onload = get_footer_height();

window.addEventListener( 'resize', get_footer_height );

function get_footer_height() {
	foot_height = document.getElementById('e-state-footer').clientHeight;
	document.getElementById('main').style.paddingBottom = foot_height + 'px';
}
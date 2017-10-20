var foot_height = document.getElementById('e-state-footer').clientHeight;
console.log(foot_height);
window.onload = get_footer_height( foot_height );

window.addEventListener( 'resize', get_footer_height( foot_height ) );

function get_footer_height( height ) {
	document.getElementById('main').style.paddingBottom = height + 'px';
}
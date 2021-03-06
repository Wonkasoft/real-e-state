<?php
/**
 * 
 * 
 */

if ( ! function_exists( 'real_e_state_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function real_e_state_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Real e-state, use a find and replace
	 * to change 'real-e-state' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'real-e-state', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in five locations.
	// This is the Top Left Menu and used in the template-parts/navigation/navigation-top.php file
	register_nav_menus( array(
		'top-left' => esc_html__( 'Top Left Menu', 'real-e-state' ),
	) );

	// This is the Top Right Menu and used in the template-parts/navigation/navigation-top.php file
	register_nav_menus( array(
		'top-right' => esc_html__( 'Top Right Menu', 'real-e-state' ),
	) );

	// This is the Top Complete Menu and used in the template-parts/navigation/navigation-top.php file
	register_nav_menus( array(
		'top-mobile' => esc_html__( 'Top Mobile Menu', 'real-e-state' ),
	) );

	// This menu is on the footer for the explore menu and used in the footer.php file
	register_nav_menus( array(
		'footer-1' => esc_html__( 'Buyers', 'real-e-state' ),
	) );

	// This menu is on the footer for the about menu and used in the footer.php file
	register_nav_menus( array(
		'footer-2' => esc_html__( 'Sellers', 'real-e-state' ),
	) );

	// This menu is on the footer for the contact menu and used in the footer.php file
	register_nav_menus( array(
		'footer-3' => esc_html__( 'Resources', 'real-e-state' ),
	) );

	// This menu is on the footer for the connect menu and used in the footer.php file
	register_nav_menus( array(
		'sidebar-1' => esc_html__( 'Sidebar', 'real-e-state' ),
	) );

	register_sidebar( array(
    	'name' 			=> __('Search Area Widget', 'real-e-state' ),
		'id'			=> 'search-sidebar-1',
    	'before_widget' => '<div class = "search-area">',
    	'after_widget' 	=> '</div>',
    	'before_title' 	=> '<h3>',
    	'after_title' 	=> '</h3>',
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );


/**
* Customizer additions.
*/
require get_parent_theme_file_path( '/inc/customizer.php' );

}

endif;
add_action( 'after_setup_theme', 'real_e_state_setup' );

/**
 * This is for adding Wonka MCE Helper element quick format. 
 * Add mce button for editor help.
 */
function wonka_mce_button($buttons) {
	array_unshift( $buttons, 'styleselect');
	return $buttons;
}
add_filter( 'mce_buttons', 'wonka_mce_button');

/**
 * Adding custom elements for editor.
 */
function wonka_mce_helper( $init_array ) {
	$wonka_elements = array(
		array(
			'title' => 'clear',
			'block' => 'div',
			'classes' => 'clear-fix',
			'wrapper' => false,
		),
		array(
			'title' => 'section',
			'block' => 'div',
			'classes' => 'section-wrap',
			'wrapper' => true,
		),
	);
	$init_array['style_formats'] = json_encode( $wonka_elements );
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'wonka_mce_helper' );

/**
 * Adding editor stylesheet
 */
function wonka_theme_editor_styles() {
	add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wonka_theme_editor_styles' );

/**
 * Enqueue scripts and styles.
 */
function real_e_state_scripts() {

	// Check to see if bootstrap style is already enqueue before setting the enqueue
	$style = 'bootstrap';
	if ( ! wp_style_is( $style, 'enqueued' ) && ! wp_style_is( $style, 'done' ) ) {
    //queue up your bootstrap
		wp_enqueue_style( $style, get_template_directory_uri() . '/assets/css/bootstrap.min.css', '3.3.7', 'all' );
	}

	wp_enqueue_style( 'real-e-state-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	// Check to see if bootstrap js is already enqueue before setting the enqueue
	$bootstrapjs = 'bootstrap-js';
	if ( ! wp_script_is( $bootstrapjs, 'enqueued')  &&  ! wp_script_is($bootstrapjs, 'done') ) {
	 	// enqueue bootstrap js
		wp_enqueue_script( $bootstrapjs, get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	} 
	wp_enqueue_script( 'real-e-state-js', get_template_directory_uri() . '/assets/js/real-e-state.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'real_e_state_scripts' );
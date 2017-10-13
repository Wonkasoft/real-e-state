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
	// This is the Primary Main Title Menu and used in the template-parts/navigation/navigation-top.php file
	register_nav_menus( array(
		'top-left' => esc_html__( 'Top Left Menu', 'real-e-state' ),
	) );

	// This is the Sub Menu and used in the header.php file
	register_nav_menus( array(
		'top-right' => esc_html__( 'Top Right Menu', 'real-e-state' ),
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

	// Check to see if bootstrap js is already enqueue before setting the enqueue
	$bootstrapjs = 'bootstrap-js';
	if ( ! wp_script_is( $bootstrapjs, 'enqueued')  &&  ! wp_script_is($bootstrapjs, 'done') ) {
	 	// enqueue bootstrap js
		wp_enqueue_script( $bootstrapjs, get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	} 
}

add_action( 'wp_enqueue_scripts', 'real_e_state_scripts' );
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-e-state
 * @version  1.0.0 [<description>]
 * @since  1.0.0 [<description>]
 * 
 */
$headertoimage = get_theme_mod( 'featured_header_image' );
get_header(); ?>
<main id="main" class="container-fluid">
	<section id="above-fold" class="row">
		<?php echo wp_get_attachment_url( $headertoimage ); ?>
		<img src"<?php echo wp_get_attachment_url( $headertoimage ); ?>" alt="test" />
	</section><!-- .row -->
</main><!-- #main -->
<?php
get_footer();
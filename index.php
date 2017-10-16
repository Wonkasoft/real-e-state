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

$header_image = (!get_theme_mod( 'featured_header_image' ) ) ? get_template_directory_uri() . '/assets/images/house-image.jpg': get_theme_mod( 'featured_header_image' );
get_header(); ?>
<main id="main" class="container-fluid">
	<section id="above-fold" class="row">
		<div id="header-image-wrap">
			<img src="<?php echo $header_image; ?>" class="header-img" alt="Header Image" />
		</div> <!-- /header-image-wrap -->
		<div id="header-message-wrap">
			<?php echo get_theme_mod( 'header_message' ); ?>
		</div>

		<div id="header-cta">
			<?php 
			$header_cta_text = get_theme_mod( 'header_cta_text' );
			$header_cta_link = the_permalink( get_theme_mod( 'header_cta_link' ) );
			var_dump(the_permalink( get_theme_mod( 'header_cta_link' ) ));
			?>
			<a href="<?php echo $header_cta_link ?>" class="btn btn-lg"><?php echo $header_cta_text; ?></a>
		</div>
	</section> <!-- .row -->

	<section id="first-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'first_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="search-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'search_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="client-brand-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'client_brand_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="financing-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'financing_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="information-section-1" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'information_section_1_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

		<section id="information-section-2" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'information_section_2_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->


	<section id="testimonial-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'testimonial_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->
</main> <!-- #main -->

<?php
get_footer();
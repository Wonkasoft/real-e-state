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

$header_image = ( !get_theme_mod( 'featured_header_image' ) ) ? get_template_directory_uri() . '/assets/images/house-image.jpg': get_theme_mod( 'featured_header_image' );
get_header(); ?>
<main id="main" class="container-fluid">
	<section id="above-fold" class="row">
		<div id="header-image-wrap">
			<img src="<?php echo $header_image; ?>" class="header-img" alt="Header Image" />
			<div class="col-xs-4 header-message text-center"><h2><?php echo get_theme_mod( 'header_message' ); ?></h2>
				<?php
				$header_cta_link = get_permalink( get_theme_mod( 'header_cta_link' ) );
				$header_cta_text = get_theme_mod( 'header_cta_text' );
				?>
				<a href="<?php echo $header_cta_link; ?>" class="btn btn-lg btn-wonka"><?php echo $header_cta_text; ?></a>
			</div><!-- /col-xs-12 -->
		</div> <!-- /header-image-wrap -->
	</section> <!-- .row -->
	
	<section id="first-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'first_section_title' ); ?></h2>
			<div class="col-xs-6 col-xs-offset-3 first-section-message">
				<p>
					<?php echo get_theme_mod( 'first_section_message' ); ?>		
				</p>
				<ul id="social-icons">
					<li><?php if ( get_theme_mod( 'first_section_twitter' ) ) { 
						?>
						<a href="<?php echo get_theme_mod( 'first_section_twitter' ); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>  
						<?php } ?></li>
					<li><?php if ( get_theme_mod( 'first_section_facebook' ) ) { 
						?>
						<a href="<?php echo get_theme_mod( 'first_section_facebook' ); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>  
						<?php } ?></li>
					<li><?php if ( get_theme_mod( 'first_section_instagram' ) ) { 
						?>
						<a href="<?php echo get_theme_mod( 'first_section_instagram' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>  
						<?php } ?></li>
					<li><?php if ( get_theme_mod( 'first_section_yelp' ) ) { 
						?>
						<a href="<?php echo get_theme_mod( 'first_section_yelp' ); ?>"><i class="fa fa-yelp" aria-hidden="true"></i></a>  
						<?php } ?></li>
				</ul>
			</div><!-- /first-section-message -->
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="search-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'search_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<?php
			 if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Search Area Widget' ) ) : 
			
			 endif;
			?>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="testimonial-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'testimonial_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<?php echo get_theme_mod( 'testimonial_section_message' ); ?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 col-md-4 text-center">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_1' ); ?>" class="img-responsive center-block">
			<?php echo get_theme_mod( 'testimonial_section_client_message_1' ); ?>
		</div> <!-- /col-xs-12 col-md-4 text-center -->
		<div class="col-xs-12 col-md-4 text-center">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_2' ); ?>" class="img-responsive center-block">
			<?php echo get_theme_mod( 'testimonial_section_client_message_2' ); ?>
		</div> <!-- /col-xs-12 col-md-4 text-center -->
		<div class="col-xs-12 col-md-4 text-center">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_3' ); ?>" class="img-responsive center-block">
			<?php echo get_theme_mod( 'testimonial_section_client_message_3' ); ?>
		</div> <!-- /col-xs-12 col-md-4 text-center -->
	</section> <!-- .row -->

	<section id="financing-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'financing_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<?php
			echo get_theme_mod( 'financing_section_message' );
			?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<a href="<?php echo get_theme_mod( 'financing_section_cta_link' ); ?>" class="btn btn-lg btn-wonka">
				<?php echo get_theme_mod( 'financing_section_cta_text' ); ?></a>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="information-section-1" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'information_section_title_1' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<?php echo get_theme_mod( 'information_section_message_1' ); ?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<a href="<?php echo get_theme_mod( 'information_section_cta_link_1' ); ?>" class="btn btn-lg btn-wonka"><?php echo get_theme_mod( 'information_section_cta_text_1' ); ?></a>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="information-section-2" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'information_section_title_2' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<?php echo get_theme_mod( 'information_section_message_2' ); ?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<a href="<?php echo get_theme_mod( 'information_section_cta_link_1' ); ?>" class="btn btn-lg btn-wonka"><?php echo get_theme_mod( 'information_section_cta_text_2' ); ?></a>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	

	<section id="about-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'about_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<p><?php echo get_theme_mod( 'about_section_paragraph_1' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_2' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_3' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_4' ); ?></p>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- /about-section -->

</main> <!-- #main -->

<?php
get_footer();
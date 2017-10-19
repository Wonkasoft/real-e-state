<?php
/**
 * This is the templete for the layout of front page
 * @package real-e-state
 * @version  1.0.0 
 * @since  1.0.0 
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
			<div class="col-xs-6 col-xs-offset-3 section-message">
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
	<?php if (get_theme_mod( 'testimonial_section_title' )) {
	?>
	<section id="testimonial-section" class="row carousel slide" data-ride="carousel">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'testimonial_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center section-message">
			<?php echo get_theme_mod( 'testimonial_section_message' ); ?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="carousel-inner" role="listbox">
		<?php if (get_theme_mod( 'testimonial_section_client_message_1' )) { ?>
		<div class="col-xs-12 text-center testimonial-module item active">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_1' ); ?>" class="img-responsive center-block">
			<i class="fa fa-quote-left"></i>
			<p><?php echo get_theme_mod( 'testimonial_section_client_message_1' ); ?></p>
		</div> <!-- /col-xs-12 text-center testimonial-module -->
		<?php } ?>
		<?php if (get_theme_mod( 'testimonial_section_client_message_2' )) { ?>
		<div class="col-xs-12 text-center testimonial-module item">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_2' ); ?>" class="img-responsive center-block">
			<i class="fa fa-quote-left"></i>
			<p><?php echo get_theme_mod( 'testimonial_section_client_message_2' ); ?></p>
		</div> <!-- /col-xs-12 text-center testimonial-module -->
		<?php } ?>
		<?php if (get_theme_mod( 'testimonial_section_client_message_3' )) { ?>
		<div class="col-xs-12 text-center testimonial-module item">
			<img src="<?php echo get_theme_mod( 'testimonial_section_image_3' ); ?>" class="img-responsive center-block">
			<i class="fa fa-quote-left"></i>
			<p><?php echo get_theme_mod( 'testimonial_section_client_message_3' ); ?></p>
		</div> <!-- /col-xs-12 text-center testimonial-module -->
		<?php } ?>
		</div> <!-- /carousel-inner -->
		<!-- Left and right controls -->
		    <a class="left carousel-control" href="#testimonial-section" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#testimonial-section" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
	</section> <!-- .row -->
	<?php } ?>
	<section id="financing-section" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'financing_section_title' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center section-message">
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
		<div class="col-xs-12 text-center section-message">
			<?php echo get_theme_mod( 'information_section_message_1' ); ?>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center">
			<a href="<?php echo get_theme_mod( 'information_section_cta_link_1' ); ?>" class="btn btn-lg btn-wonka" target="_blank"><?php echo get_theme_mod( 'information_section_cta_text_1' ); ?></a>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- .row -->

	<section id="information-section-2" class="row">
		<div class="col-xs-12 text-center">
			<h2><?php echo get_theme_mod( 'information_section_title_2' ); ?></h2>
		</div> <!-- /col-xs-12 text-center -->
		<div class="col-xs-12 text-center section-message">
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
		<div class="col-xs-12 text-center section-message">
			<p><?php echo get_theme_mod( 'about_section_paragraph_1' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_2' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_3' ); ?></p>
			<p><?php echo get_theme_mod( 'about_section_paragraph_4' ); ?></p>
		</div> <!-- /col-xs-12 text-center -->
	</section> <!-- /about-section -->
	</main><!-- /container-fluid -->
<?php
get_footer();
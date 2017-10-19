<?php
/**
 * This is the templete for the layout of all subpages
 * @package real-e-state
 * @version  1.0.0 
 * @since  1.0.0 
 */

get_header(); ?>
<main id="main" class="container-fluid">
	<?php
	if ( locate_template('template-parts/navigation/content-page.php') != '' ) {
		get_template_part( 'template-parts/navigation/content', 'page' );
	} else { 
		// If not home page parse this
		?>
		<section id="under-header" class="row">
		
	</section> <!-- .row -->
		<section id="content-section">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</section> <!-- /content-section -->

		<?php } ?>
</main><!-- /container-fluid -->
<?php
get_footer();
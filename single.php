<?php
/**
 * The template for displaying all single posts
 * 
 * @package real-e-state
 * @version  1.0.0 
 * @since  1.0.0 
 */

get_header(); ?>
<main id="main">
		<section id="under-header" class="hidden-xs">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">

				</div> <!-- /col-xs-12 -->
			</div> <!-- /row -->
			</div> <!-- /container-fluid -->
	</section> <!-- #under-header -->
		<section id="content-section">
			<div class="container">
			<div class="row">
				<div class="col-xs-12">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div> <!-- /col-xs-12 -->
			</div> <!-- /row -->
			</div> <!-- /container-fluid -->
		</section> <!-- /#content-section -->
</main><!-- /#main -->
<?php
get_footer();
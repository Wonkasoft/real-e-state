<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-e-state
 * @since 1.0.0
 * @version 1.0.0
 */

?>

<section id="content-section" class="container">
	<div class="row">
		<div class="col-xs-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'real-e-state' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</div> <!-- /col-xs-12 -->
	</div> <!-- /row -->
</section> <!-- /#content-section -->
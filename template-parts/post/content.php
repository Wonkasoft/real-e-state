<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-e-state
 * @since 1.0.0
 * @version 1.0.0
 */

$post_img = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url(): wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_single() ) : ?>
		<div class="col-xs-12 col-md-4">
			<a href="<?php esc_url( the_permalink() ); ?>" target="_self">
				<img src="<?php echo $post_img; ?>" class="post-img" />
			</a>
		</div>
		<div class="col-xs-12 col-md-8">
			<header class="entry-header">
				<a class="blog-title-link" href="<?php esc_url( the_permalink() ); ?>"  target="_self">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</a>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_excerpt( $post->ID ); ?>
				<a href="<?php esc_url( the_permalink() ); ?>" class="btn btn-lg btn-wonka">
				READ MORE</a>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'real-e-state' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		</div> <!-- /col-xs-12 col-md-8 -->
	<?php else : ?>
		<div class="single-post-img-wrap">
			<img src="<?php echo $post_img; ?>" class="single-post-img" />
		</div>
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
	<?php endif; ?>
</article><!-- #post-## -->
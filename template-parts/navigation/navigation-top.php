<?php
/**
 *  This file is for setting up the top navigation on the page.
 */
?>
<div class="col-xs-12">
	<div class="col-xs-5">
	</div><!-- col-xs-5 -->
	<div class="col-xs-2">
		<?php 
	          if (!has_custom_logo()) {
	            ?><a class="logo-link" href="<?php echo esc_url(home_url('/')); ?>">
	            <img class="img-responsive center-block default-logo" src="<?php echo get_template_directory_uri() . '/assets/images/real-e-state-logo.png'; ?>" /></a>
	            <?php 
	          } else { 
	              $custom_logo_id = get_theme_mod( 'custom_logo' );
	            ?>
	              <a class="logo-link text-center" href="<?php echo esc_url(home_url('/')); ?>">
	            <img class="img-responsive center-block custom-logo" src="<?php echo wp_get_attachment_url( $custom_logo_id ); ?>" /></a>
	            <?php
	          }
       		?>
	</div><!-- col-xs-2 -->
	<div class="col-xs-5">
	</div><!-- col-xs-5 -->
</div><!-- col-xs-12 -->
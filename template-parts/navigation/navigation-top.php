<?php
/**
 *  This file is for setting up the top navigation on the page.
 *  @package  real_e_state
 *  @version  1.0.0 [<description>]
 *  @since  1.0.0 [<description>]
 */
?>
<div class="col-xs-12">
	<div class="col-xs-5 text-center">
		<div id="top-left-menu">
		<?php
			wp_nav_menu( array ( 
				'theme_location' 	=> 'top-left',
				'menu_id' 				=> 'top-left-nav',
				'container' 			=> 'div',
				'container_class' => 'menu-top-left-container',
				'echo'						=> true,
			) );
		?>
		</div> <!-- /top-left-menu -->
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
	</div><!-- /col-xs-2 -->
	<div class="col-xs-5 text-center">
		<div id="top-right-menu">
		<?php
			wp_nav_menu( array ( 
				'theme_location' 	=> 'top-right',
				'menu_id' 				=> 'top-right-nav',
				'container' 			=> 'div',
				'container_class' => 'menu-top-right-container',
				'echo'						=> true,
			) );
		?>
		</div> <!-- /top-left-menu -->
	</div><!-- /col-xs-5 -->
</div><!-- /col-xs-12 -->
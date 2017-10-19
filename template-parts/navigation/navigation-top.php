<?php
/**
 *  This file is the Template for setting up the top navigation on the page.
 *  @package  real-e-state
 *  @version  1.0.0 
 *  @since  1.0.0 
 */
?>
<div class="col-xs-12">
	<div class="col-xs-5 text-right">
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
	<div class="col-xs-2 text-center">
		<?php 
		$custom_Logo = ( !has_custom_logo() ) ? get_template_directory_uri() . '/assets/images/real-e-state-logo.png': wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
		$logo_class = ( !has_custom_logo() ) ? 'default-logo': 'custom-logo';
            	?>
            	<a class="logo-link text-center" href="<?php echo esc_url(home_url('/')); ?>">
	            <img class="img-responsive center-block <?php echo $logo_class; ?>" src="<?php echo $custom_Logo; ?>" /></a>         
	</div><!-- /col-xs-2 -->
	<div class="col-xs-5">
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
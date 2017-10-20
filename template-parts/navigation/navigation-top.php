<?php
/**
 *  This file is the Template for setting up the top navigation on the page.
 *  @package  real-e-state
 *  @version  1.0.0 
 *  @since  1.0.0 
 */
?>
<div class="col-xs-12 hidden-xs">
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

<div class="col-xs-12 hidden-sm hidden-md hidden-lg full-width">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php 
		$custom_Logo = ( !has_custom_logo() ) ? get_template_directory_uri() . '/assets/images/real-e-state-logo.png': wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
		$logo_class = ( !has_custom_logo() ) ? 'default-logo': 'custom-logo';
            	?>
            	<a class="navbar-brand logo-link text-center" href="<?php echo esc_url(home_url('/')); ?>">
	            <img class="img-responsive center-block <?php echo $logo_class; ?>" src="<?php echo $custom_Logo; ?>" /></a>
    </div>
    <?php
			wp_nav_menu( array ( 
				'theme_location' 	=> 'top-mobile',
				'menu_id' 				=> 'top-mobile-nav',
				'menu_class' 				=> 'nav navbar-nav',
				'container' 			=> 'div',
				'container_class' => 'collapse navbar-collapse menu-top-mobile',
				'container_id' => 'navbar-collapse-1',
				'echo'						=> true,
			) );
		?>

	</div><!-- /col-xs-12 -->
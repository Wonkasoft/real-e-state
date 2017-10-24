<?php

?>
	<footer id="e-state-footer">
		<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h4 class="footer-headers">Buyers</h4>
					<div id="footer-1-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-1',
							'menu_id' 				=> 'footer-1',
							'menu_class' => 'footer-menus',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-1-container',
							'echo'						=> true
						) );
					
						if ( get_theme_mod( 'footer_logo' ) ) {
							?>
							<p>
								<img src="<?php echo get_theme_mod( 'footer_logo' ); ?>" class="img-responsive footer-logo" />
							</p>
					<?php 
					} ?>
					</div> <!-- /footer-1-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h4 class="footer-headers">Sellers</h4>
					<div id="footer-2-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-2',
							'menu_id' 				=> 'footer-2',
							'menu_class' => 'footer-menus',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-2-container',
							'echo'						=> true
						) );

						if ( get_theme_mod( 'footer_social_facebook' ) ) {
							?>
							<div class="col-xs-3 text-center">
								<a href="<?php echo get_theme_mod( 'footer_social_facebook' ); ?>" target="_blank" /><i class="fa fa-facebook-square"></i></a>
							</div>
					<?php 
					}

						if ( get_theme_mod( 'footer_social_twitter' ) ) {
							?>
							<div class="col-xs-3 text-center">
								<a href="<?php echo get_theme_mod( 'footer_social_twitter' ); ?>" target="_blank" /><i class="fa fa-twitter-square"></i></a>
							</div>
					<?php 
					}

						if ( get_theme_mod( 'footer_social_instagram' ) ) {
							?>
							<div class="col-xs-3 text-center">
								<a href="<?php echo get_theme_mod( 'footer_social_instagram' ); ?>" target="_blank" /><i class="fa fa-instagram"></i></a>
							</div>
					<?php 
					}

						if ( get_theme_mod( 'footer_social_yelp' ) ) {
							?>
							<div class="col-xs-3 text-center">
								<a href="<?php echo get_theme_mod( 'footer_social_yelp' ); ?>" target="_blank" /><i class="fa fa-yelp"></i></a>
							</div>
					<?php 
					}
					?>
					</div> <!-- /footer-2-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h4 class="footer-headers">Resources</h4>
					<div id="footer-3-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-3',
							'menu_id' 				=> 'footer-3',
							'menu_class' => 'footer-menus',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-3-container',
							'echo'						=> true,
						) );
					?>
					</div> <!-- /footer-3-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h4 class="footer-headers">Join Our Mailing List</h4>
					<div id="footer-4">
						<form>
						<div class="form-group col-xs-6">
						  <label for="first-name">First Name:</label>
						  <input type="text" class="form-control" id="first-name">
						</div>
						<div class="form-group col-xs-6">
						  <label for="last-name">Last Name:</label>
						  <input type="text" class="form-control" id="last-name">
						</div>
						  <div class="form-group col-xs-12">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email">
						  <button type="submit" class="btn btn-default">Join Mailing List</button>
						  </div>
						</form>
					</div> <!-- /footer-4-menu -->
				</div><!-- /col-xs-12 -->
			</div><!-- /col-xs-12 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 powered">
				<span>Powered by <a href="https://wonkasoft.com" target="_blank">Wonkasoft <img class="img-responsive wonkasoft-logo" src="<?php echo get_template_directory_uri() . '/assets/images/wonkacircle@34.png'; ?>" alt="Wonkasoft Logo" /></a></span>
				<span>© <?php echo date('Y');?> All Rights Reserved - <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></span>
			</div><!-- .col-xs-3 -->
			<div class="col-xs-12 col-sm-6 text-center">
				<span></span>
			</div><!-- .col-xs-9 -->
		</div><!-- .row -->
	</div> <!-- .container -->
	</footer>
</div><!-- End page-wrap -->
<?php wp_footer(); ?>
</body>
</html>
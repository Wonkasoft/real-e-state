<?php

?>
	<footer id="e-state-footer" class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12 col-md-3">
					<h4 class="footer-headers">Buyers</h4>
					<div id="footer-1-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-1',
							'menu_id' 				=> 'footer-1',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-1-container',
							'echo'						=> true,
						) );
					?>
					</div> <!-- /footer-1-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-md-3">
					<h4 class="footer-headers">Sellers</h4>
					<div id="footer-2-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-2',
							'menu_id' 				=> 'footer-2',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-2-container',
							'echo'						=> true,
						) );
					?>
					</div> <!-- /footer-2-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-md-3">
					<h4 class="footer-headers">Resources</h4>
					<div id="footer-3-wrap">
					<?php
						wp_nav_menu( array ( 
							'theme_location' 	=> 'footer-3',
							'menu_id' 				=> 'footer-3',
							'container' 			=> 'div',
							'container_class' => 'menu-footer-3-container',
							'echo'						=> true,
						) );
					?>
					</div> <!-- /footer-3-menu -->
				</div><!-- /col-xs-12 -->
				<div class="col-xs-12 col-md-3">
					<h4 class="footer-headers">Join Our Mailing List</h4>
					<div id="footer-4">
					
					</div> <!-- /footer-4-menu -->
				</div><!-- /col-xs-12 -->
			</div><!-- /col-xs-12 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-xs-3">
				<span class="powered">Powered by</span> <a href="https://wonkasoft.com" target="_blank">Wonkasoft</a> <br />
				<span>© <?php echo date('Y');?> All Rights Reserved - Privacy Policy</span>
			</div><!-- .col-xs-3 -->
			<div class="col-xs-9 text-center">
				<span></span>
			</div><!-- .col-xs-9 -->
		</div><!-- .row -->
	</footer>
</div><!-- End page-wrap -->
<?php wp_footer(); ?>
</body>
</html>
<footer id="page-footer">
	<div class="container text-center text-md-left">
		<div class="row">
			<div class="col-lg-4 col-md-4 mt-md-0 mb-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.png" class="regular-image-80" id="footer-logo">
			</div>

			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<div class="row">

					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
						<h5 class="footer-header">Orange County</h5>
						<p class="footer-text">4590 MacArthur Blvd.<br>Suite 650<br>Newport Beach, CA 92660<br>Main (213) 888-8888</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
						<h5 class="footer-header">Los Angeles</h5>
						<p class="footer-text">on South Figueroa<br>Los Angeles, CA 90017<br>Main (213) 334-7000<br>Toll Free (800) 888-8888</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
						<h5 class="footer-header">Inland Empire</h5>
						<p class="footer-text">on Main Street<br>Los Angeles, CA 90017<br>Main (213) 334-7000<br>Toll Free (800) 888-8888</p>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-6">
						<h5 class="footer-header">Other Locations:</h5>
						<p class="footer-text">Sacramento<br>San Francisco<br>Seattle<br>Las Vegas (Coming Soon)</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="footer-black-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<p id="copyright-text">&copy; 2019 Steve Mehr | All Rights Reserved.</p>

				<p class="text-center mb-0" style="font-size: 12px; color: #8d9199;">Lawyer Advertising.</p>
				<?php 
					wp_nav_menu(
						array( 
						    'theme_location' => 'footer-menu', 
						    'container' => false,
						    'depth' => 1,
							'menu_class' => 'footer-row'
						) 
					);
				?>

			</div>
		</div>
	</div>
</div>

<div class="sticky-footer d-md-none">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="text-black text-center mb-2"><small><strong>100% Free Consultation. We Come to You.</strong></small></p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-6">
				<a href="" class="btn btn-sm btn-primary full-width-button" style="font-size: 16px;"><span class="mr-2"><i class="fa fa-phone"></i></span> Call</a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-6">
				<a href="" class="btn btn-sm btn-primary full-width-button" style="font-size: 16px;"><span class="mr-2"><i class="fa fa-mobile"></i></span> Chat</a>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
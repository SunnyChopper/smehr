<section version="desktop-version" class="d-none d-md-block">
	<div class="top-bar fixed-top d-none d-md-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<p class="mb-0" id="top_bar_text"><span class="mr-1"><i class="fa fa-phone"></i></span> New Client Hotline: <a href="tel:8002191919" style="margin-left: 4px; color: #a9b6c1;">1-800-219-1919</a></p>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-dark fixed-top navbar-default navbar-expand-lg" id="main_navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name','display')); ?>">
				<img id="main_navbar_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
			</a>
			<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<?php
						wp_nav_menu(
							array( 
							    'theme_location' => 'main-menu', 
							    'container' => false,
							    'depth' => 2,
							    'menu_class' => 'nav navbar-nav',
							    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
							    'walker' => new wp_bootstrap_navwalker()
							) 
						);
					?>
				</ul>
			</div>
		</div>	
	</nav>
</section>

<section version="mobile-version" class="d-md-none">
	<nav class="navbar navbar-dark fixed-top navbar-default navbar-expand-lg" id="main_navbar">
		<div class="container">
			<a class="navbar-brand" href="#"><img id="main_navbar_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
			<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-controls="mobile-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mobile-navbar">
				<?php
					wp_nav_menu(
						array( 
						    'theme_location' => 'main-menu', 
						    'container' => false,
						    'depth' => 3,
						    'menu_class' => 'navbar-nav ml-auto'
						) 
					);
				?>
			</div>
		</div>	
	</nav>
</section>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:200,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<meta name="description" content="This is a test.">
 	<meta name="author" content="">

 	<title><?php bloginfo('name') ?></title>

 	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 	<?php wp_head(); ?>
</head>
<body>
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
								    'depth' => 3,
								    'menu_class' => 'nav'
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
</body>
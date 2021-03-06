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
			<a class="navbar-brand" href="#"><img id="main_navbar_logo" src="{{ URL::asset('img/New-Logo.png') }}"></a>
			<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if(Request::is('/')) { echo 'active'; } ?>" href="{{ url('/') }}" style="padding-left: 0px; padding-right: 0px;">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" style="padding-left: 0px; padding-right: 0px;">What We Do</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if(Request::is('who-we-are')) { echo 'active'; } ?>" href="/who-we-are" style="padding-left: 0px; padding-right: 0px;">Who We Are</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if(Request::is('news')) { echo 'active'; } ?>" href="{{ url('/news') }}" style="padding-left: 0px; padding-right: 0px;">News & Results</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if(Request::is('contact')) { echo 'active'; } ?>" href="/contact" style="padding-left: 0px; padding-right: 0px;">Contact & FAQ</a>
					</li>
				</ul>
			</div>
		</div>	
	</nav>
</section>

<section version="mobile-version" class="d-md-none">
	<nav class="navbar navbar-dark fixed-top navbar-default navbar-expand-lg" id="main_navbar">
		<div class="container">
			<a class="navbar-brand" href="#"><img id="main_navbar_logo" src="{{ URL::asset('img/logo-min.png') }}"></a>
			<button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-controls="mobile-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mobile-navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">What We Do</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Who We Are</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/news">News & Results</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>	
	</nav>
</section>
@extends('layouts.app')

@section('content')
	@include('layouts.banner')

	<div style="background-color: #eef0f1; padding: 24px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<a href="">
								<img src="{{ URL::asset('img/main-news-image.png') }}" class="regular-image">
								<div class="main-blog-post-box">
									<h4>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-4 col-md-4 col-sm-4 col-12">
							<div class="blog-box">
								<a href="">
									<div class="blog-box-image">
										<img src="{{ URL::asset('img/blog-image-1.png') }}" class="regular-image">
									</div>
									<div class="blog-box-info">
										<h5>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h5>
									</div>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-12">
							<div class="blog-box">
								<a href="">
									<div class="blog-box-image">
										<img src="{{ URL::asset('img/blog-image-1.png') }}" class="regular-image">
									</div>
									<div class="blog-box-info">
										<h5>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h5>
									</div>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-12">
							<div class="blog-box">
								<a href="">
									<div class="blog-box-image">
										<img src="{{ URL::asset('img/blog-image-1.png') }}" class="regular-image">
									</div>
									<div class="blog-box-info">
										<h5>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h5>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<div style="padding: 24px; background-color: white; border-radius: 8px;">
						<p style="text-transform: uppercase; text-align: center;">Noteworthy Settlements</p>
						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
								<h2 class="sidebar-number">$12.8</h2>
								<h4 class="sidebar-million">MILLION</h4>
								<h6 class="sidebar-type">Car Accident:</h6>
								<p class="sidebar-claim">Brain Injury</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.bottom-cta')
@endsection
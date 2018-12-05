@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div style="border-bottom: 4px solid #EAEAEA;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="active-front-page-tab" id="transportation_accidents_tab">
						<h6 class="text-center">Transportation Accidents</h6>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="front-page-tab" id="personal_injury_claims_tab">
						<h6 class="text-center">Personal Injury Claims</h6>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="front-page-tab" id="whistleblower_claims_tab">
						<h6 class="text-center">Whistleblower Claims</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row" style="padding: 48px;">
			<div class="col-lg-7 col-md-6 col-sm-12 col-12">
				<h4><b>Auto Accident Attorneys</b></h4>
				<p>We understand how seriously a car accident can impact many aspects of your life and can result in whiplash, head and back pain, and other major injuries. The experienced auto accident lawyers at Steve Mehr Injury Attorneys, P.C. know what it takes to recover what you deserve from the insurance companies. We understand how seriously a car accident can impact many aspects of your life and can result in whiplash, head and back pain, and  other major injuries. The experienced auto accident lawyers at Steve Mehr Injury Attorneys, P.C. know what it takes to recover what you deserve from the insurance companies.</p>
			</div>

			<div class="col-lg-5 col-md-6 col-sm-12 col-12">
				<div class="videoWrapper">
				    <!-- Copy & Pasted from YouTube -->
				    <iframe width="560" height="349" src="http://www.youtube.com/embed/mZapfmWPxl4?modestbranding=1&hd=1" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="theme-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h3 class="text-center" id="front-page-quote">The most powerful legal team in the country.</h3>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-2 offset-lg-5 col-md-2 offset-md-5 col-sm-6 offset-sm-3 col-6 offset-3">
					<img src="{{ URL::asset('img/forbes-white.png') }}" class="regular-image-60">
				</div>
			</div>
		</div>
	</div>

	<div style="padding: 32px; background-color: #eef0f1;">
		<div class="container">
			<div clas="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="text-center" id="proof_title"><b>Over $1 Billion Dollars in Verdicts & Settlements.</b></h2>
					<p class="text-center proof_text">Don't buy into lawyer advertising hype - let the results speak for themselves.</p>
					<p class="text-center proof_text">Steve and his team have resolved hundreds of cases for six, seven and eight figures.</p>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-1.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$12.8</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Car Accident:<br>Brain Injury</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-2.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Truck Accident:<br>Death Claim</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-3.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.4</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-4.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$7.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-5.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.4</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-3 col-6">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-2.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type"><small>PERSONAL INJURY RECOVERY</small></p>
							<p class="text-center" id="claim">Truck Accident:<br>Death Claim</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="image-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-12">
					<img src="{{ URL::asset('img/badge.png') }}" id="badge_image" class="regular-image">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-12">
					<h1 class="text-center" id="awarded_title">Awarded "Best Attorneys of America"</h1>
					<p class="text-center" id="awarded_subtitle" style="">We Get Hired Because We Win • Over 40 Years Experience • 100% Free Phone Consultations</p>
				</div>
			</div>

			<div class="row mt-4 d-none d-md-block">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mallet-icon.png') }}" class="regular-image">
				</div>
			</div>

			<div class="row mt-4 d-block d-md-none">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mobile-icon-top.png') }}" class="regular-image">
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mobile-icon-bottom.png') }}" style="margin-top: 32px;" class="regular-image">
				</div>
			</div>
		</div>
	</div>

	<div style="border-top: 8px solid black; background-color: #eef0f1; padding: 24px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h3><b>Featured Attorneys</b></h3>
				</div>
			</div>
		</div>
	</div>
@endsection
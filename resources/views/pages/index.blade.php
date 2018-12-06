@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<section version="desktop-version" class="d-none d-md-block">
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
					<p>We understand how seriously a car accident can impact many aspects of your life and can result in whiplash, head and back pain, and other major injuries. The experienced auto accident lawyers at Steve Mehr Injury Attorneys, P.C. know what it takes to recover what you deserve from the insurance companies.</p>
				</div>

				<div class="col-lg-5 col-md-6 col-sm-12 col-12">
					<div class="videoWrapper">
					    <!-- Copy & Pasted from YouTube -->
					    <iframe width="560" height="349" src="http://www.youtube.com/embed/mZapfmWPxl4?modestbranding=1&hd=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section version="mobile-version" class="d-md-none">
		<div style="background-color: #eef0f1; padding: 16px;">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h4 class="text-center"><b>How can we help you?</b></h4>
					<p class="text-center" style="font-size: 13px;">Select a practice area below.</p>
				</div>

				<div class="scrolling-wrapper">
					<div class="col-lg-5 col-md-5 col-sm-5 col-7 scroll-card">
						<div class="practice-box">
							<div class="practice-box-image">
								<img src="https://cdn.motor1.com/images/mgl/ZRKxZ/s3/2019-chevrolet-corvette-zr1-for-sale.jpg" class="regular-image">
							</div>
							<div class="practice-box-info">
								<h6>Auto Accidents</h6>
								<p>Auto Accidents</p>
								<p>Motorcycle Accidents</p>
								<p>Truck Accidents</p>
								<p>Wrongful Death</p>
								<p>Brain & Spine Injuries</p>
							</div>
						</div>
					</div>

					<div class="col-lg-5 col-md-5 col-sm-5 col-7 scroll-card">
						<div class="practice-box">
							<div class="practice-box-image">
								<img src="https://cdn.motor1.com/images/mgl/ZRKxZ/s3/2019-chevrolet-corvette-zr1-for-sale.jpg" class="regular-image">
							</div>
							<div class="practice-box-info">
								<h6>Auto Accidents</h6>
								<p>Auto Accidents</p>
								<p>Motorcycle Accidents</p>
								<p>Truck Accidents</p>
								<p>Wrongful Death</p>
								<p>Brain & Spine Injuries</p>
							</div>
						</div>
					</div>

					<div class="col-lg-5 col-md-5 col-sm-5 col-7 scroll-card">
						<div class="practice-box">
							<div class="practice-box-image">
								<img src="https://cdn.motor1.com/images/mgl/ZRKxZ/s3/2019-chevrolet-corvette-zr1-for-sale.jpg" class="regular-image">
							</div>
							<div class="practice-box-info">
								<h6>Auto Accidents</h6>
								<p>Auto Accidents</p>
								<p>Motorcycle Accidents</p>
								<p>Truck Accidents</p>
								<p>Wrongful Death</p>
								<p>Brain & Spine Injuries</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section version="desktop-version" class="d-none d-md-black">
		<div class="theme-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h3 class="text-center" id="front-page-quote">The most powerful legal team in the country.</h3>
					</div>
				</div>

				<div class="row mt-4">
					<div class="col-lg-2 offset-lg-5 col-md-2 offset-md-5 col-sm-6 offset-sm-3 col-6 offset-3">
						<img src="{{ URL::asset('img/forbes-white-min.png') }}" class="regular-image-60">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section version="mobile-version" class="d-md-none">
		<div style="background: url('{{ URL::asset('img/mobile-testimonial-min.png') }}'); background-size: cover; padding-top: 64px; padding-bottom: 64px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h3 class="text-center" style="color: white; font-family: 'Roboto', sans-serif; font-weight: 300;">The most powerful legal team in the country.</h3>
					</div>
				</div>

				<div class="row" style="margin-top: 32px;">
					<div class="col-6 offset-3">
						<img src="{{ URL::asset('img/forbes-white-min.png') }}" class="regular-image-60">
					</div>
				</div>
			</div>
		</div>
	</section>

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
							<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
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
							<img src="{{ URL::asset('img/proof-image-2-min.png') }}" class="regular-image">
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
							<img src="{{ URL::asset('img/proof-image-3-min.png') }}" class="regular-image">
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
							<img src="{{ URL::asset('img/proof-image-4-min.png') }}" class="regular-image">
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
							<img src="{{ URL::asset('img/proof-image-5-min.png') }}" class="regular-image">
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
							<img src="{{ URL::asset('img/proof-image-2-min.png') }}" class="regular-image">
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
				<div class="col-lg-2 col-md-2 col-sm-2 col-4">
					<img src="{{ URL::asset('img/badge-min.png') }}" id="badge_image" class="regular-image">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-8">
					<h1 class="text-center" id="awarded_title">Awarded "Best Attorneys of America"</h1>
					<p class="text-center d-none d-md-block" id="awarded_subtitle" style="">We Get Hired Because We Win • Over 40 Years Experience • 100% Free Phone Consultations</p>
				</div>
			</div>

			<div class="row d-none d-md-block" style="margin-top: 48px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mallet-icon-min.png') }}" class="regular-image">
				</div>
			</div>

			<div class="row mt-4 d-block d-md-none">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mobile-icon-top-min.png') }}" class="regular-image">
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mobile-icon-bottom-min.png') }}" style="margin-top: 32px; margin-bottom: 24px;" class="regular-image">
				</div>
			</div>
		</div>
	</div>

	<div style="border-top: 8px solid black; background-color: #eef0f1; padding: 24px;">
		<section version="desktop-version" class="d-none d-md-block">
			<div class="container">
				<div class="row" style="margin-bottom: 24px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h3><b>Featured Attorneys</b></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="attorney-box">
							<div class="attorney-box-image">
								<img src="{{ URL::asset('img/attorney-1-min.png') }}" class="regular-image">
							</div>

							<div class="attorney-box-info">
								<h4>Attorney Name</h4>
								<p class="role">Managing Attorney</p>
								<p>Former Federal Prosecutor</p>
								<p>Former chief of the Orange County<br>Division of the Office of the United States Attorney, Central District of California</p>
								<p>Awards from two Attorneys Generals of the United States and the Director of the FBI</p> 
							</div>

							<div class="attorney-box-footer">
								<a href="" class="attorney-link">View Full Bio</a> 
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="attorney-box">
							<div class="attorney-box-image">
								<img src="{{ URL::asset('img/attorney-2-min.png') }}" class="regular-image">
							</div>

							<div class="attorney-box-info">
								<h4>Attorney Name</h4>
								<p class="role">Partner</p>
								<p>Former Federal Prosecutor</p>
								<p>Former chief of the Orange County<br>Division of the Office of the United States Attorney, Central District of California</p>
								<p>Awards from two Attorneys Generals of the United States and the Director of the FBI</p>
							</div>

							<div class="attorney-box-footer">
								<a href="" class="attorney-link">View Full Bio</a> 
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="attorney-box">
							<div class="attorney-box-image">
								<img src="{{ URL::asset('img/attorney-3-min.png') }}" class="regular-image">
							</div>

							<div class="attorney-box-info">
								<h4>Honorable Judge</h4>
								<p class="role">Retired Judge</p>
								<p>Recent $50.3 million jury verdict</p>
								<p>Awarded in The Best Lawyers in America</p>
								<p>Martindale Hubbell peer review rating of AV Preeminent, 5.0 out of 5.0, 15+ years</p>
								<p>Board of Directors, Orange County Bar Foundation</p>
							</div>

							<div class="attorney-box-footer">
								<a href="" class="attorney-link">View Full Bio</a> 
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="attorney-box">
							<div class="attorney-box-image">
								<img src="{{ URL::asset('img/attorney-4-min.png') }}" class="regular-image">
							</div>

							<div class="attorney-box-info">
								<h4>Senator Name</h4>
								<p class="role">Former CA Senator</p>
								<p>Former Assistant U.S. Attorney, U.S. Department of Justice; Civil Fraud Section, Deputy Chief</p>
								<p>Decades of experience working with major federal agencies, including Medicare and Medicaid, Dept. of Defense., NASA, National Reconnaissance Office</p>
								<p>Recovered Over $1 Billion Dollars</p>
							</div>

							<div class="attorney-box-footer">
								<a href="" class="attorney-link">View Full Bio</a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section version="mobile-version" class="d-md-none">
			<div class="container">
				<div class="row" style="margin-bottom: 24px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h4 class="text-center"><b>Featured Attorneys</b></h4>
					</div>
				</div>

				<div class="row">
					<div class="scrolling-wrapper">
						<div class="col-lg-5 col-md-5 col-sm-5 col-11 scroll-card">
							<div class="attorney-box">
								<div class="attorney-box-image">
									<img src="{{ URL::asset('img/attorney-1-min.png') }}" class="regular-image">
								</div>

								<div class="attorney-box-info">
									<h4>Attorney Name</h4>
									<p class="role">Managing Attorney</p>
									<p>Former Federal Prosecutor</p>
									<p>Former chief of the Orange County<br>Division of the Office of the United States Attorney, Central District of California</p>
									<p>Awards from two Attorneys Generals of the United States and the Director of the FBI</p> 
								</div>

								<div class="attorney-box-footer">
									<a href="" class="attorney-link">View Full Bio</a> 
								</div>
							</div>
						</div>

						<div class="col-lg-5 col-md-5 col-sm-5 col-11 scroll-card">
							<div class="attorney-box">
								<div class="attorney-box-image">
									<img src="{{ URL::asset('img/attorney-2-min.png') }}" class="regular-image">
								</div>

								<div class="attorney-box-info">
									<h4>Attorney Name</h4>
									<p class="role">Partner</p>
									<p>Former Federal Prosecutor</p>
									<p>Former chief of the Orange County<br>Division of the Office of the United States Attorney, Central District of California</p>
									<p>Awards from two Attorneys Generals of the United States and the Director of the FBI</p>
								</div>

								<div class="attorney-box-footer">
									<a href="" class="attorney-link">View Full Bio</a> 
								</div>
							</div>
						</div>

						<div class="col-lg-5 col-md-5 col-sm-5 col-11 scroll-card">
							<div class="attorney-box">
								<div class="attorney-box-image">
									<img src="{{ URL::asset('img/attorney-3-min.png') }}" class="regular-image">
								</div>

								<div class="attorney-box-info">
									<h4>Honorable Judge</h4>
									<p class="role">Retired Judge</p>
									<p>Recent $50.3 million jury verdict</p>
									<p>Awarded in The Best Lawyers in America</p>
									<p>Martindale Hubbell peer review rating of AV Preeminent, 5.0 out of 5.0, 15+ years</p>
									<p>Board of Directors, Orange County Bar Foundation</p>
								</div>

								<div class="attorney-box-footer">
									<a href="" class="attorney-link">View Full Bio</a> 
								</div>
							</div>
						</div>

						<div class="col-lg-5 col-md-5 col-sm-5 col-11 scroll-card">
							<div class="attorney-box">
								<div class="attorney-box-image">
									<img src="{{ URL::asset('img/attorney-4-min.png') }}" class="regular-image">
								</div>

								<div class="attorney-box-info">
									<h4>Senator Name</h4>
									<p class="role">Former CA Senator</p>
									<p>Former Assistant U.S. Attorney, U.S. Department of Justice; Civil Fraud Section, Deputy Chief</p>
									<p>Decades of experience working with major federal agencies, including Medicare and Medicaid, Dept. of Defense., NASA, National Reconnaissance Office</p>
									<p>Recovered Over $1 Billion Dollars</p>
								</div>

								<div class="attorney-box-footer">
									<a href="" class="attorney-link">View Full Bio</a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div style="padding: 24px; background-image: -moz-linear-gradient( 39deg, rgb(0,31,88) 0%, rgb(73,123,224) 100%); background-image: -webkit-linear-gradient( 39deg, rgb(0,31,88) 0%, rgb(73,123,224) 100%); background-image: -ms-linear-gradient( 39deg, rgb(0,31,88) 0%, rgb(73,123,224) 100%);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-12 col-12">
					<h2 id="bottom-cta-title">24/7 Access to Your Lawyer</h2>
					<h4 id="bottom-cta-subtitle">You can email, text, or call us 24/7</h4>
					<p id="bottom-cta-description" class="d-md-none">Our firm prides itself on being available to our clients when they need us, regardless if it’s after hours or the weekend.</p>
					<div class="row d-none d-md-block">
						<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
							<div style="background-color: black; padding: 16px; border-radius: 8px; margin-top: 32px;">
								<h4 id="bottom-cta-video-title">Hundreds of Satisfied Clients</h4>
								<div class="videoWrapper">
								    <!-- Copy & Pasted from YouTube -->
								    <iframe width="560" height="349" src="http://www.youtube.com/embed/mZapfmWPxl4?modestbranding=1&hd=1" frameborder="0" allowfullscreen></iframe>
								</div>
								<img src="{{ URL::asset('img/stars-min.png') }}" class="regular-image-40" style="margin-top: 16px;">
								<p id="bottom-cta-testimonial"><i>"Steve Mehr and his team changed my life for the better"</i></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-5 col-sm-12 col-12">
					<div class="front-page-form" id="bottom-cta-form">
						<h3 class="text-center">Get Help Now</h3>
						<h5 class="text-center">Free Consultation</h5>
						<hr />
						<form>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group" id="front_page_form_first_name_field">
									<input type="text" class="form-control" placeholder="First Name" name="first_name" required>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12 form-group" id="front_page_form_last_name_field">
									<input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group" id="front_page_form_email_field">
									<input type="email" class="form-control" placeholder="Email" name="email" required>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group" id="front_page_form_phone_field">
									<input type="tel" class="form-control" placeholder="Phone" name="email" required>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group" id="front_page_form_message_field">
									<textarea class="form-control" placeholder="Tell us what happened" name="message"></textarea>
								</div>

								<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
									<input type="submit" value="Start Now" id="bottom_cta_submit_button">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
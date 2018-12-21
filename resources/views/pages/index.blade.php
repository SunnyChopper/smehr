@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<section version="desktop-version" class="d-none d-md-block">
		<div class="container">
			<div style="padding: 48px;">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			 			<h4><b>Top Accident Attorneys</b></h4>
						<p class="regular-p">We understand how seriously a car accident can impact many aspects of your life. Car accidents happen far too often and can result in whiplash, head and back pain, and other major injuries. Recovering from a serious accident is already difficult — what happens if the insurance companies refuse to pay? Your physical injuries, medical bills, lost wages, and other expenses begin to stack up. The experienced car accident lawyers at Steve Mehr Injury Attorneys, P.C. know what it takes to recover what you deserve from the insurance companies.</p>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="videoWrapper">
						    <!-- Copy & Pasted from YouTube -->
						    <iframe width="560" height="349" src="http://www.youtube.com/embed/mZapfmWPxl4?modestbranding=1&hd=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 16px;">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<h4><b>Experienced Car Accident Lawyers</b></h4>
						<p class="regular-p">People often think that they can’t afford a good accident lawyer; but we believe everyone should have access to exceptional legal service. We provide free consultations for everyone who calls our offices. There are no upfront fees or hidden costs; you only pay attorney fees if we recover money for you. Car accidents can result in a wide range of bodily trauma including head, back, and neck injuries. If you or a loved one has been seriously injured in an accident, call the car accident lawyers at Steve Mehr Injury Attorneys, P.C. for a free, confidential accident consultation.
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<p id="featured-headline-small"><b><small style="font-weight: 600;">Featured Headline</small></b></p>
						<div class="row">
							<div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-sm-12 offset-sm-0 col-12">
								<img src="{{ URL::asset('img/Mag-Cover.png') }}" class="regular-image">
							</div>
							<div class="col-lg-8 col-md-12 col-sm-12 col-12">
								<h3 id="featured-headline">Jacoby & Meyers names Steven Mehr as its youngest managing partner in its 45 year history</h3>
								<p id="featured-link" style="font-size: 14px;"><a href=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> VIEW FEATURE</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section version="desktop-version" class="d-none d-md-block">
		<div class="help-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h4 class="text-center text-uppercase" id="help-headline">How We Can Help You</h4>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="help-box">
							<p class="help-box-logo text-center"><i class="fa fa-car" aria-hidden="true"></i></p>
							<h4 style="font-weight: 700;">Auto Accidents</h4>
							<hr style="border-top: 1px solid rgba(0,0,0,.25);" />
							<p class="help-box-text">Auto Accidents</p>
							<p class="help-box-text">Motorcycle Accidents</p>
							<p class="help-box-text">Truck Accidents</p>
							<p class="help-box-text">Wrongful Death Claims</p>
							<p class="help-box-text">Brain & Spinal Cord Injuries</p>
							<p class="help-box-link"><a href=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Find Out More</a></p>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="help-box">
							<p class="help-box-logo text-center"><i class="fa fa-medkit" aria-hidden="true"></i></p>
							<h4 style="font-weight: 700;">Personal Injury</h4>
							<hr style="border-top: 1px solid rgba(0,0,0,.25);" />
							<p class="help-box-text">Business Litigation</p>
							<p class="help-box-text">Business Consulting</p>
							<p class="help-box-text">Celebrity & High Profile Cases</p>
							<p class="help-box-text">Asset Protection</p>
							<p class="help-box-text">Class Action Litigation</p>
							<p class="help-box-link"><a href=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Find Out More</a></p>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="help-box">
							<p class="help-box-logo text-center"><i class="fa fa-balance-scale" aria-hidden="true"></i></p>
							<h4 style="font-weight: 700;">Other Practices</h4>
							<hr style="border-top: 1px solid rgba(0,0,0,.25);" />
							<p class="help-box-text">Whistleblower & Fraud Claims</p>
							<p class="help-box-text">Bad Faith Insurance</p>
							<p class="help-box-text">Nursing Home Abuse</p>
							<p class="help-box-text">Professional Malpractice</p>
							<p class="help-box-text">IP & Trade Disputes</p>
							<p class="help-box-link"><a href=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Find Out More</a></p>
						</div>
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

	<div id="results-row">
		<div class="container">
			<div clas="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="text-center" id="proof_title"><b>Over $1 Billion Dollars in Verdicts & Settlements.</b></h2>
					<p class="text-center proof_text">Don't buy into lawyer advertising hype - let the results speak for themselves.</p>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-1-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$12.8</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Car Accident:<br>Brain Injury</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-2-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Truck Accident:<br>Death Claim</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-3-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.4</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-4-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$7.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-5-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.4</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Car Accident:<br>Policy Verdict</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
					<div class="proof-box">
						<div class="proof-image-box">
							<img src="{{ URL::asset('img/proof-image-2-min.png') }}" class="regular-image">
						</div>
						<div class="proof-box-text">
							<h2 class="text-center">$10.5</h2>
							<h4 class="text-center">MILLION</h4>
							<p class="text-center" id="type">PERSONAL INJURY</p>
							<p class="text-center" id="claim">Truck Accident:<br>Death Claim</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.client-stories')

	<div class="image-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-4">
					<img src="{{ URL::asset('img/badge-min.png') }}" id="badge_image" class="regular-image">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-8">
					<h1 class="text-center" id="awarded_title">Awarded "Best Attorneys of America"</h1>
					<p class="text-center d-none d-md-block" id="awarded_subtitle" style="">We Get Hired Because We Win • 100% Free Phone Consultations</p>
				</div>
			</div>

			<div class="row d-none d-md-block" style="margin-top: 48px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mallet-icon-min.png') }}" class="regular-image">
				</div>
			</div>

			<div class="row mt-4 d-block d-md-none">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<img src="{{ URL::asset('img/mobile-awards.png') }}" class="regular-image">
				</div>
			</div>
		</div>
	</div>

	<div style="background-color: #eef0f1; padding: 24px;">
		<section version="desktop-version" class="d-none d-md-block">
			<div class="container">
				<div class="row" style="margin-bottom: 24px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<h3 style="font-family: 'Roboto', sans-serif;"><b>Featured Attorneys</b></h3>
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
				<div class="row" style="margin-bottom: 8px;">
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

	
	@include('layouts.bottom-cta')
@endsection
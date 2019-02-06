
<style type="text/css">
	/* ------------------------- *\
		Banner
	\* ------------------------- */

	#banner-padded-area {
		padding: 36px;
    	margin-bottom: 48px;
	}

	.what-we-do-banner {
		background: url('http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/banner-header-min.png'); 
		background-size: cover;
	}

	#main-banner-top-headline {
		font-family: 'Montserrat', sans-serif;
		font-size: 15px;
	}

	#main-banner-title {
		font-size: 40px;
	}

	.banner-support-text {
		font-family: 'Roboto', sans-serif;
		font-weight: 100;
		letter-spacing: 0.05em;
		font-size: 20px;
	}

	#front-page-main-cta {
		font-size: 20px;
		font-weight: 500;
		margin-top: 24px;
	}

	.online-now {
		text-align: center;
		margin-bottom: 0px;
		margin-top: 18px;
		font-size: 'Rubik', sans-serif;
		font-weight: 400;
		color: #1cecb4;
		text-transform: uppercase;
		letter-spacing: 0.05em;
		font-size: 14px;
	}

	.video-box-overlay {
		background: url('http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/What-We-Do-Video-Image.png');
		width: 100%;
		padding-top: 56.25%;
		background-size: cover;
		border-radius: 8px;
		position: absolute;
	}

	.video-box-overlay:hover {
		cursor: pointer;
	}

	.video-box-overlay > img {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transition: 0.2s all;
		-webkit-transition: 0.2s all;
	}

	.video-box-overlay > img:hover {
		width: 11.5%;
	}

	.video-box-overlay > h4 {
		color: white;
		position: absolute;
		top: 0.5em;
		padding: 4px 24px;
		text-align: center;
	}

	.video-box-overlay > p {
		color: white;
		position: absolute;
		bottom: 0em;
		right: 1.5em;
		background-color: rgba(0, 0, 0, 0.5);
		width: fit-content;
		padding: 0em 1em;
		text-align: right;
		font-size: 13px;
		font-family: 'Roboto', sans-serif;
	}

	@media only screen and (min-width: 1200px) {
		.what-we-do-banner {
			padding-top: 96px;
		}
	}

	@media only screen and (min-width: 992px) and (max-width: 1200px) {
		.what-we-do-banner {
			padding-top: 96px;
		}

		.video-box-overlay > h4 {
			font-size: 20px;
		}

		#main-banner-title {
			font-size: 32px;
			margin-bottom: 24px;
		}

		.banner-support-text {
			text-align: left;
			font-size: 16px;
		}
	}

	@media only screen and (min-width: 768px) and (max-width: 992px) {
		.what-we-do-banner {
			padding-top: 96px;
		}

		#main-banner-title {
			font-size: 24px;
		}

		.banner-support-text {
			text-align: left;
			font-size: 13px;
		}

		#front-page-main-cta {
			font-size: 14px;
			font-weight: 500;
			margin-top: 8px;
		}

		.online-now {
			margin-top: 8px;
			font-size: 11px;
		}

		.video-box-overlay > h4 {
			font-size: 16px;
		}
	}

	@media only screen and (min-width: 575px) and (max-width: 768px) {
		#banner-padded-area {
			padding: 16px;
		}

		#main-banner-top-headline {
			margin-top: 0px;
			font-size: 12px;
		}

		#front-page-main-cta {
			font-size: 18px;
			font-weight: 500;
		}

		.video-box-overlay {
			position: relative;
		}

		.video-box-overlay > h4 {
			font-size: 14px;
		}
	}

	@media only screen and (max-width: 575px) {
		#main-banner-top-headline {
			margin-top: 72px;
			font-size: 12px;
		}

		#main-banner-title {
			font-size: 24px;
			
		}

		.banner-support-text {
			text-align: center;
			font-size: 16px;
		}

		#front-page-main-cta {
			font-size: 14px;
			font-weight: 500;
		}

		.video-box-overlay {
			position: relative;
		}

		.video-box-overlay > h4 {
			font-size: 18px;
		}

		#main-banner-title {
			margin-top: 24px;
		}
	}

	/* ------------------------- *\
		Info Section
	\* ------------------------- */

	.card-box {
		border-radius: 4px;
		width: 100%;
		background-color: white;
		padding: 24px;
	}

	.card-box > h2 {
		font-size: 26px;
		font-family: 'Roboto', sans-serif;
		font-weight: bolder;
	}

	.card-box > p {
		font-family: 'Roboto', sans-serif;
		font-size: 14px;
		line-height: 1.75em;
		margin-bottom: 15px;
	}

	.card-box > ul > li {
		font-family: 'Roboto', sans-serif;
		font-size: 14px;
		line-height: 1.72em;
	}

	#bottom-cta-form {
		border-radius: 4px;
		width: 100%;
		background-color: white;
		padding: 24px;
		-webkit-box-shadow: 0px 1px 32px -4px rgba(0,0,0,0.25); 
		box-shadow: 0px 1px 32px -4px rgba(0,0,0,0.25);
	}

	@media only screen and (min-width: 992px) and (max-width: 1200px) {
		.card-box > h2 {
			font-size: 22px;
		}

		.card-box > p  {
			font-size: 13px;
			line-height: 1.75em;
			margin-bottom: 18.5px;
		}

		.card-box > ul > li {
			font-size: 13px;
			line-height: 1.72em;
		}

		#bottom-cta-form {
			margin-top: 0px;
		}
	}

	@media only screen and (min-width: 767px) and (max-width: 992px) {
		.card-box > h2 {
			font-size: 16px;
		}

		.card-box > p  {
			font-size: 12px;
			line-height: 1.5em;
			margin-bottom: 18.5px;
		}

		.card-box > ul > li {
			font-size: 12px;
			line-height: 1.72em;
		}

		#bottom-cta-form {
			margin-top: 1.5em;
		}

		#bottom-cta-form > h3 {
			font-size: 24px;
			margin-bottom: 8px;
		}

		#bottom-cta-form > h5 {
			font-size: 14px;
			margin-top: 0px;
			font-weight: lighter;
		}
	}

	/* ------------------------- *\
		Quotes Section
	\* ------------------------- */

	.theme-row {
		background: url('http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/theme-row-background.png');
		background-size: cover;
		background-position: center;
	}

	#front-page-quote {
		font-family: 'Roboto', sans-serif;
		font-size: 36px;
		font-weight: lighter;
		letter-spacing: 0.03em
	}


	/* ------------------------- *\
		Awards Section
	\* ------------------------- */

	#awarded_subtitle {
		font-family: 'Montserrat', sans-serif;
		font-size: 14px;
		font-weight: lighter;
		margin-top: 0.5em;
	}
</style>

<div class="what-we-do-banner">
	<div class="container" id="banner-padded-area">
		<div class="row">
			<!-- Form for tablets up -->
			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<p class="text-center mb-8" id="main-banner-top-headline">Award Winning Injury Attorneys</p>
				<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/What-We-Do-Logos.png" class="regular-image-90 centered mb-8">
				<div class="video-box-overlay">
					<h4>Click to learn about how we help Car Accident Victims</h4>
					<img src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c4f9.png" class="regular-image-10">
					<p>1:05</p>
				</div>
			</div>

			<div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 col-12">
				
				<h1 class="text-center" id="main-banner-title"><b>Over $1 Billion won for our Car Accident clients</b></h1>
				<section version="desktop-version" class="d-none d-md-block">
					<div class="row mb-0" id="first-support-text">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span class="mr-2"><i class="fa fa-check" style="color: #00c5ab;"></i></span> Free Confidential Consultation</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span class="mr-2"><i class="fa fa-check" style="color: #00c5ab;"></i></span> No Fees or Costs Unless We Win Your Case</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span class="mr-2"><i class="fa fa-check" style="color: #00c5ab;"></i></span> Awarded "Best Attorneys of America"</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span class="mr-2"><i class="fa fa-check" style="color: #00c5ab;"></i></span> Hire Experience - Former Judges & Prosecutors</p>
						</div>
					</div>
				</section>

				<section version="mobile-version" class="d-md-none">
					<div class="row mb-0" id="first-support-text">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span style="float: left; margin-left: 16px;"><i class="fa fa-check" style="color: #00c5ab;"></i></span> Retired Judges of Counsel</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span style="float: left; margin-left: 16px;"><i class="fa fa-check" style="color: #00c5ab;"></i></span> Retired Senators of Counsel</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span style="float: left; margin-left: 16px;"><i class="fa fa-check" style="color: #00c5ab;"></i></span> No fees unless we win</p>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<p class="banner-support-text"><span style="float: left; margin-left: 16px;"><i class="fa fa-check" style="color: #00c5ab;"></i></span> 98.7% Win Rate</p>
						</div>
					</div>
				</section>

				<!-- Button for tablets up -->
				<div class="d-none d-md-block">
					<a href="" id="front-page-main-cta" class="d-md-block centered">Start Free Chat Consultation <i class="fas fa-arrow-circle-right"></i></a>
				</div>

				<!-- Button for phones -->
				<div class="d-md-none">
					<a href="" id="front-page-main-cta" class="d-md-block"><span class="mr-2"><i class="fa fa-phone"></i></span> Call for your 100% free consultation</a>
				</div>

			</div>
		</div>
	</div>

	<div id="banner-bottom-padding">
		<div id="banner-blue-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<p class="text-center" id="banner-blue-bar-header">Our attorneys and cases have been featured in</p>
					</div>
				</div>

				<section version="desktop-version" class="d-none d-md-block">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/Banner-Sources-Desktop.png" class="regular-image-80">
						</div>
					</div>
				</section>

				<section version="mobile-version" class="d-md-none">
					<div class="row">
						<div class='col-12'>
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/mobile-bar.png" class="regular-image">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

<div class="container mt-32 mb-32">
	<div class="row">
		<div class="col-lg-8 col-md-7 col-sm-12 col-12">
			<div class="card-box">
				<h2>Personal Injury Lawyers</h2>
				<p>If you or a loved one has been injured as a result of someone’s negligence, you need a personal injury attorney to protect you and your family and defend your rights. Our experienced team of lawyers have represented injured victims throughout California, Nevada, and Washington. Our primary focus is to help recover the compensation that you deserve. We will review your specific case thoroughly and provide you with customized options for seeking the best possible outcome.</p>
				<p>When personal injuries are serious, they can have catastrophic consequences to you and your family. In addition to the physical pain and suffering, there are often mental and psychological consequences that can result from the injury. Further, the economic impact of missed work and treatment of the injury can be devastating. Medical bills, loss of household income and the resulting debt, can send a family into financial turmoil. Seeking compensation for these losses can help you begin to recover and rebuild your life.</p>
				<h2>What is a Personal Injury claim? </h2>
				<p>A Personal Injury is when someone’s negligence or intentional act causes an injury. </p>
                <h5>Types of Personal Injury Cases </h5>
				<ul>
					<li>Automobile accidents</li>
					<li>Truck accidents</li>
					<li>Motorcycle accidents</li>
					<li>Work-related injuries</li>
					<li>Medical malpractice</li>
					<li>Dangerous drugs and products</li>
					<li>Slip and fall accidents</li>
					<li>Dog bites</li>
					<li>Nursing home negligence</li>
					<li>Wrongful death</li>
					<li>and other forms of injury</li>
				</ul>
				<h2>Why hire a Personal Injury Attorney?</h2>
				<p>Insurance companies hire lawyers to protect their interests and pay out the lowest amount. Without an experienced Personal Injury Attorney, you will not be prioritized to receive the best medical care and attention. Why not hire a lawyer yourself? With the Law Offices of Steve Mehr standing by you every step of the way, your case will be strengthened with evidence, witness statements and other important facts. Do not hesitate to contact the Law Offices of Steve Mehr today.</p>
				<p>Our broad range of experience has allowed us to provide dependable legal advice in a variety of different cases and practice areas. Regardless of how you were injured, our personal injury attorneys are equally dedicated to fighting for the compensation you deserve so that you can begin to recover from your injuries and rebuild your life.</p>
				<h2>How Our Personal Injury Lawyers Can Help You</h2>
				<p>The legal system can be complicated and overwhelming for many people. Our legal professionals can guide you through the process and help you:</p>
				<ul>
				    <li>Recover medical expenses, lost wages, property damage costs</li>
				    <li>Get compensation for pain and suffering</li>
				    <li>Evaluate your case thoroughly</li>
				    <li>Communicate with insurance companies</li>
				    <li>Investigate your case and gather necessary documents</li>
				    <li>Offer expert legal advice and more</li>
				</ul>
				<p>If you or a member of your family has suffered a personal injury, please contact our personal injury attorneys to discuss your case and find out more about your rights and options. We will patiently listen to you describe your unfortunate incident and offer sound legal advice about the best course of action to take in order to get the compensation you deserve. Call us now to find out how we can help you through this difficult time.</p>
				<p class="mb-0">Contact our accident lawyers today for a free consultation to find out how we can help you.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-5 col-sm-12 col-12 mt-32-mobile">
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
							<input type="submit" value="Submit Form" id="bottom_cta_submit_button">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

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
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/car-accident-1.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$12.8</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Car Accident:<br><span>Brain Injury</span></p>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
				<div class="proof-box">
					<div class="proof-image-box">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/truck-accident.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$10.5</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Truck Accident:<br><span>Death Claim</span></p>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
				<div class="proof-box">
					<div class="proof-image-box">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/car-accident-2.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$10.4</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Car Accident:<br><span>Jury Verdict</span></p>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
				<div class="proof-box">
					<div class="proof-image-box">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/car-accident-3.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$7.5</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Car Accident:<br><span>Brain Injury</span></p>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
				<div class="proof-box">
					<div class="proof-image-box">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/pedestrian-accident.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$6.1</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Pedestrain Accident:<br><span>Brain Injury</span></p>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-sm-4 col-6 low-mobile-padding">
				<div class="proof-box">
					<div class="proof-image-box">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/car-accident-4.jpg" class="regular-image">
					</div>
					<div class="proof-box-text">
						<h2 class="text-center">$3.2</h2>
						<h4 class="text-center">MILLION</h4>
						<p class="text-center" id="type">PERSONAL INJURY</p>
						<p class="text-center" id="claim">Car Accident:<br><span>Back Injury</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="clients-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<h4 style="margin-bottom: 24px; font-weight: 700; font-family: 'Roboto', sans-serif;" id="client-headline">Client Success Stories</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-padding-left-mobile low-padding-right-mobile">
				<div class="video-box">
					<div class="video-image">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/client-1.png" class="regular-image">
						<div class="video-bar">
							<div class="row">
								<div class="col-lg-6 col-md-8 col-sm-6 col-8">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/play-video.png" class="regular-image" style="margin-left: 0.5em;">
								</div>
							</div>
						</div>
					</div>
					<div class="video-info">
						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/stars.png" class="regular-image" style="margin-top: 0px; margin-bottom: 8px;">
							</div>
						</div>

						<p class="text-center name"><b>Roberta R. Roberts</b></p>
						<p class="text-center title"><small>SCHOOLTEACHER</small></p>
						<h5 class="text-center quote">"Steve Mehr changed my life for the better."</h5>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-padding-left-mobile low-padding-right-mobile">
				<div class="video-box">
					<div class="video-image">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/client-1.png" class="regular-image">
						<div class="video-bar">
							<div class="row">
								<div class="col-lg-6 col-md-8 col-sm-6 col-8">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/play-video.png" class="regular-image" style="margin-left: 0.5em;">
								</div>
							</div>
						</div>
					</div>
					<div class="video-info">
						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/stars.png" class="regular-image" style="margin-top: 0px; margin-bottom: 8px;">
							</div>
						</div>

						<p class="text-center name"><b>Roberta R. Roberts</b></p>
						<p class="text-center title"><small>SCHOOLTEACHER</small></p>
						<h5 class="text-center quote">"Steve Mehr changed my life for the better."</h5>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-padding-left-mobile low-padding-right-mobile">
				<div class="video-box">
					<div class="video-image">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/client-1.png" class="regular-image">
						<div class="video-bar">
							<div class="row">
								<div class="col-lg-6 col-md-8 col-sm-6 col-8">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/play-video.png" class="regular-image" style="margin-left: 0.5em;">
								</div>
							</div>
						</div>
					</div>
					<div class="video-info">
						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/stars.png" class="regular-image" style="margin-top: 0px; margin-bottom: 8px;">
							</div>
						</div>

						<p class="text-center name"><b>Roberta R. Roberts</b></p>
						<p class="text-center title"><small>SCHOOLTEACHER</small></p>
						<h5 class="text-center quote">"Steve Mehr changed my life for the better."</h5>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-padding-left-mobile low-padding-right-mobile">
				<div class="video-box">
					<div class="video-image">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/client-1.png" class="regular-image">
						<div class="video-bar">
							<div class="row">
								<div class="col-lg-6 col-md-8 col-sm-6 col-8">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/play-video.png" class="regular-image" style="margin-left: 0.5em;">
								</div>
							</div>
						</div>
					</div>
					<div class="video-info">
						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1">
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/stars.png" class="regular-image" style="margin-top: 0px; margin-bottom: 8px;">
							</div>
						</div>

						<p class="text-center name"><b>Roberta R. Roberts</b></p>
						<p class="text-center title"><small>SCHOOLTEACHER</small></p>
						<h5 class="text-center quote">"Steve Mehr changed my life for the better."</h5>
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
				<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/badge-min.png" id="badge_image" class="regular-image">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-8" style="margin: auto;">
				<h1 class="text-center" id="awarded_title">Awarded "Best Attorneys of America"</h1>
				<p class="text-center d-none d-md-block" id="awarded_subtitle" style="">We Get Hired Because We Win • 100% Free Phone Consultations</p>
			</div>
		</div>

		<div class="row" style="margin-top: 24px;">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-1.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">98.7% Win Rate</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">Not your average law firm. Clients hire us because we're committed, relentless, and we win.</p>
					</div>
				</div>

				<div class="row mt-16 mt-8-mobile">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-2.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">100% Free Consultation</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">Get a free no-obligation consultation to find out how we can help you if you have a case.</p>
					</div>
				</div>

				<div class="row mt-16 mt-8-mobile">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-3.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">Award Winning Attorneys</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">Our team consists of some of the nation's top attorneys, retired judges and former prosecutors.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-8-mobile">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-4.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">No Fees Unless We Win</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">We work on a contingency basis, which means we don't charge a penny unless we win your case.</p>
					</div>
				</div>

				<div class="row mt-16 mt-8-mobile">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-5.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">Immediate Response 24/7</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">Our staff is always available for you when you need to get in touch with us.</p>
					</div>
				</div>

				<div class="row mt-16 mt-8-mobile">
					<div class="col-lg-2 col-md-3 col-sm-2 col-2">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/awarded-icon-6.png" class="regular-image-80 regular-image-100-mobile">
					</div>
					<div class="col-lg-10 col-md-9 col-sm-10 col-10">
						<h3 class="roboto bold-font white awarded-title">Over $1 Billion+ Recovered</h3>
						<p class="roboto light-font white light-letter-spacing awarded-description">Not your average law firm. Clients hire us because we're committed, relentless, and we win.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #eef0f1; padding: 24px;">
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
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-1-min.png" class="regular-image">
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
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-2-min.png" class="regular-image">
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
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-3-min.png" class="regular-image">
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
							<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-4-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-2-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-3-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/attorney-4-min.png" class="regular-image">
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
<div style="background: url('http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/Bottom-CTA-Background.png'); background-size: cover; padding: 32px; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-12 col-12">
				<h1 id="bottom-cta-number">1-800-219-1919</h1>
				<h2 id="bottom-cta-title">24/7 Access to Your Lawyer</h2>
				<h4 id="bottom-cta-subtitle">You can email, text, or call us 24/7</h4>
				<p id="bottom-cta-description" class="d-md-none">Our firm prides itself on being available to our clients when they need us, regardless if it’s after hours or the weekend.</p>
				<div class="row d-none d-md-block mt-4">
					<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-12">
						<div class="videoWrapper">
						    <!-- Copy & Pasted from YouTube -->
						    <iframe width="560" height="349" src="http://www.youtube.com/embed/mZapfmWPxl4?modestbranding=1&hd=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-10 offset-sm-1 col-12" style="display: flex; margin: auto;">
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
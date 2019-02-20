
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
				<h2>Experienced Car Accident Lawyers</h2>
				<p>If you or a loved one have been injured in a car accident, our attorneys will be by your side to ease the stress following the incident.  With experience handling car accidents in many states, we understand that insurance companies will try to give you the lowest compensation possible.  Our team of attorneys knows how to handle insurance companies and will strengthen your case with evidence, witness statements and other important facts. We are here to help solidify your claim and obtain the maximum amount of compensation in your unique case.</p>
				<h2>Affordable Injury Attorneys</h2>
				<p>Many people worry that they cannot afford an experienced lawyer, but our compassionate attorneys believe that everyone has the right to justice. We provide free legal advice with no hidden costs. There are no upfront fees, and you won’t pay anything unless we recover money for you. Call the Law Offices of Steve Mehr today to get the compensation you deserve.</p>
				<h2>Don’t Fight Insurance Companies Alone </h2>
				<p>Insurance companies always aim to pay victims the minimum amount by hiring lawyers to protect their interests. So it makes sense to hire a lawyer to fight back for you and your family. Never settle for less than you deserve. We’ll stand by your side and demand fair results.</p>
				<h2>Why Choose the Law Offices of Steve Mehr ? </h2>
				<p>The Law Offices of Steve Mehr’s proven record of success is attributed to our extensive experience. Our experience in handling a wide variety of cases, from straightforward to complex, has enabled us to understand the critical details in every case. We know how to maneuver around the tactics that insurance companies use and understand the fair value of each unique claim. Our lawyers come equipped with decades of experience and will not settle for less than what our clients deserve.</p>
				<h2>Do I Have A Case?</h2>
				<p>Car accident victims can file claims when one or more negligent parties are involved. This typically occurs when:</p>
				<ul>
					<li>The at-fault party owed the victim a duty of care. In car accident cases, this means the at-fault party was required to follow drivers safety laws.</li>
					<li>The at-fault party breached their duty of care. In car accidents, this means the at-fault party failed to follow safety laws and use reasonable care in operating a vehicle. This includes running a stop sign and driving under the influence.</li>
					<li>The parties who failed to operate a vehicle with reasonable care caused harm to the victim(s). Victims of car accidents are entitled to compensation when they are able to prove that their injuries are a direct result of the car accident and nothing else.</li>
				</ul>
				<p>It is imperative that you turn to an experienced lawyer in order to provide the proper details nad documentation for building a strong case. </p>
				<h2>Common Causes of Car Accidents</h2>
				<p>The two primary causes of automobile accidents are negligent drivers and vehicle malfunctions. These negligent drivers are often:</p>
				<strong>Distracted</strong>
				<ul>
				    <li>Texting while driving</li>
				    <li>Talking on the phone or with other passengers</li>
				    <li>Simply not paying attention</li>
				</ul>
				<strong>Aggressive</strong>
				<ul>
				    <li>Driving with road-rage</li>
				    <li>Tailgating</li>
				    <li>Weaving through traffic</li>
				</ul>
			    <strong>Reckless</strong>
				<ul>
				    <li>Speeding</li>
				    <li>Under the influence of drugs and/or alcohol</li>
				    <li>Breaking traffic safety laws</li>
				</ul>
				<p>Car accidents are also caused by vehicle malfunctions. Reasons for vehicle malfunctions include:</p>
				<ul>
					<li>Defective tires and tire blowouts</li>
					<li>Battery trouble</li>
					<li>Vehicle recall</li>
					<li>Steering malfunctions</li>
					<li>Brake malfunctions</li>
					<li>Other vehicle equipment failures</li>
				</ul>
				<h2>Types of Compensation from a Car Accident Lawsuit</h2>
				<p>The amount of compensation that a victim is entitled to depends on the circumstances. Regardless of the circumstances, many cases involve awards for both economic and non-economic damages.</p>
				<p><strong>Economic damages:</strong> Includes reimbursement for direct expenses for you or your loved-one including current and future medical bills, current and future lost wages, lost future earning capacity and funeral expenses.</p>
				<p><strong>Noneconomic damages:</strong> Includes awards for pain and suffering, emotional distress, loss of companionship and loss of quality of life.</p>
				<p>We do not want you to miss out on the opportunity for a full recovery. At the Law Offices of Steve Mehr, we offer a balance between offering compassion and the maximum compensation you are entitled to. </p>
				<p>Do not accept an offer from an insurance company until you have spoken with a knowledgeable and experienced attorney. Also, do not wait to get treatment or contact a lawyer. If the specific statute of limitations expires before you file your claim, you will miss out on the opportunity to collect damages. </p>

                <p>If you think you have a car accident case, but you are not sure where to start; contact the law offices of Steve Mehr for a 100% free consultation and case evaluation. We can handle the details of your case and deal with the insurance company on your behalf so you can focus on recovery.</p>

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
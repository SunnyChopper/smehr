<style type="text/css">
	/* -------------------------- *\
		Banner Area
	\* -------------------------- */

	.banner-area {
		width: 100%;
		padding-top: 128px;
		background: url('http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/banner-header.png');
		background-size: cover;
	}

	#title {
		font-size: 48px;
	}

	#subtitle {
		font-size: 30px;
	}

	#main-cta-button {
		font-family: 'Rubik';
		font-size: 22px;
		font-weight: normal;
		color: white;
		background-color: #f05a4b;
		border-radius: 50px;
		padding: 8px 36px;
		margin-top: 32px;
		transition: 0.2s all;
		-webkit-transition: 0.2s all;
	}

	#main-cta-button:hover {
		text-decoration: none;
		background-color: #c0483c;
	}

	#chat_status {
		font-family: 'Rubik';
		font-size: 14px;
		color: #1cecb4;
		letter-spacing: 1px;
		margin-top: 16px;
	}

	@media only screen and (min-width: 575px) and (max-width: 768px) {
		#subtitle {
			font-size: 24px;
		}
	}

	@media only screen and (min-width: 480px) and (max-width: 575px) {
		#subtitle {
			font-size: 18px;
			line-height: 1.2em;
		}

		#main-cta-button {
			font-family: 'Rubik';
			font-size: 16px;
			font-weight: normal;
			color: white;
			background-color: #f05a4b;
			border-radius: 50px;
			padding: 8px 36px;
			margin-top: 32px;
			transition: 0.2s all;
			-webkit-transition: 0.2s all;
		}

		#chat_status {
			font-family: 'Rubik';
			font-size: 12px;
			color: #1cecb4;
			letter-spacing: 1px;
			margin-top: 16px;
		}

		.banner-area {
			padding-top: 108px;
		}
	}

	@media only screen and (max-width: 480px) {
		#subtitle {
			font-size: 18px;
			line-height: 1.2em;
		}

		#main-cta-button {
			font-family: 'Rubik';
			font-size: 16px;
			font-weight: normal;
			color: white;
			background-color: #f05a4b;
			border-radius: 50px;
			padding: 8px 36px;
			margin-top: 32px;
			transition: 0.2s all;
			-webkit-transition: 0.2s all;
		}

		#chat_status {
			font-family: 'Rubik';
			font-size: 12px;
			color: #1cecb4;
			letter-spacing: 1px;
			margin-top: 16px;
		}

		.banner-area {
			padding-top: 108px;
		}
	}

	/* -------------------------- *\
		Features Area
	\* -------------------------- */

	.feature-bar {
		background-color: rgba(0, 17, 71, 0.66);
		padding: 32px;
		margin-top: 32px;
	}

	#feature-title {
		font-size: 22px;
	}

	.feature-card {
		background: white;
		border-radius: 10px;
		padding: 24px 24px;
		text-align: center;
	}

	.feature-card > #text-icon {
		width: 15%;
	}

	.feature-card > #call-icon {
		width: 25.5%;
	}

	.feature-card > #chat-icon {
		width: 29%;
	}

	.feature-card > #email-icon {
		width: 35%;
		margin-bottom: 28px;
		margin-top: 8px;
	}

	.feature-card > h3 {
		font-family: 'Roboto';
		font-weight: lighter;
		font-size: 24px;
	}

	.feature-card > h2 {
		font-size: 24px;
	}

	.feature-card > .feature-info {
		font-family: 'Roboto';
		font-size: 13px;
	}

	.feature-card > .available {
		color: #0bd2b4;
		font-size: 11px;
		margin-top: 26px;
		letter-spacing: 0.05em;
	}

	.feature-card > #chat-window {
		font-size: 16px;
		margin-bottom: -10px;
	}

	.feature-card > #chat-window > a {
		color: black;
		text-decoration: none;
	}

	.feature-card > #email {
		font-size: 16px;
		margin-bottom: 35px;
	}

	.blue-button {
		background-color: #3469de;
		border-radius: 50px;
		padding: 4px 18px;
		line-height: 0.9em;
	}

	.blue-button > a {
		color: white !important;
		font-size: 14px;
	}

	@media only screen and (min-width: 992px) and (max-width: 1200px) {
		#feature-title {
			font-size: 20px;
		}

		.feature-card {
			background: white;
			border-radius: 10px;
			padding: 24px 27px;
			text-align: center;
		}

		.feature-card > h2 {
			font-size: 18px;
		}

		.feature-card > .feature-info {
			font-family: 'Roboto';
			font-size: 13px;
		}

		.feature-card > #email {
			font-size: 14px;
			margin-bottom: 32px;
		}

		.feature-card > #chat-window {
			font-size: 16px;
			margin-bottom: -16px;
		}

		.feature-card > #email-icon {
			width: 35%;
			margin-bottom: 24px;
			margin-top: 8px;
		}
	}

	@media only screen and (min-width: 768px) and (max-width: 991px) {
		.feature-card {
			background: white;
			border-radius: 10px;
			padding: 24px 24px;
			text-align: center;
			margin-top: 16px;
			margin-bottom: 16px;
		}

		.feature-card > #email {
			font-size: 16px;
			margin-bottom: -10px;
		}

		.feature-card > #email-icon {
			width: 35%;
			margin-bottom: 36px;
			margin-top: 8px;
		}
	}

	@media only screen and (min-width: 575px) and (max-width: 768px) {
		.feature-card {
			background: white;
			border-radius: 10px;
			padding: 24px 20px;
			text-align: center;
			margin-top: 16px;
			margin-bottom: 16px;
		}

		.feature-card > #email {
			font-size: 16px;
			margin-bottom: -10px;
		}

		.feature-card > h2 {
			font-size: 18px;
		}
	}

	@media only screen and (min-width: 480px) and (max-width: 575px) {
		.feature-card {
			background: white;
			border-radius: 10px;
			padding: 24px 36px;
			text-align: center;
			margin-top: 16px;
			margin-bottom: 16px;
		}

		.feature-card > #email {
			font-size: 16px;
			margin-bottom: -10px;
		}

		.feature-card > h2 {
			font-size: 24px;
		}
	}

	@media only screen and (max-width: 480px) {
		.feature-card {
			background: white;
			border-radius: 10px;
			padding: 24px 36px;
			text-align: center;
			margin-top: 16px;
			margin-bottom: 16px;
		}

		.feature-card > #email {
			font-size: 16px;
			margin-bottom: -10px;
		}

		.feature-card > h2 {
			font-size: 24px;
		}
	}

	/* -------------------------- *\
		FAQ Area
	\* -------------------------- */

	.accordion .card:first-of-type {
	    border-bottom: 1px solid rgba(0,0,0,.125);
	    border-bottom-left-radius: 4px;
	    border-bottom-right-radius: 4px;
	}

	#faq-title {
		font-size: 24px;
		margin-bottom: 32px;
		margin-top: 16px;
	}

	.card-header {
		background-color: #3456b9;
	}

	.question {
		font-size: 18px;
		color: white;
		margin-bottom: 0px;
		display: flex;
	}

	.question > button {
		color: white;
	}

	.answer {
		font-size: 18px;
		font-weight: 300;
		margin-bottom: 0px;
		display: flex;
		line-height: 1.75em;
	}

	.answer > a {
		font-weight: bold;
		color: #f05a4b;
		display: contents;
	}

	.answer > a:hover {
		color: red;
	}

	.question:before {
		content: 'Q. ';
		display: inline-block;
		margin-right: 16px;
		font-weight: 900;
	}

	.answer:before {
		content: 'A. ';
		display: inline-block;
		font-weight: 900;
		margin-right: 16px;
	}
</style>

<div class="banner-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-white text-center roboto heavy-font light-letter-spacing" id="title">Contact Us</h1>
				<p class="text-white text-center roboto light-font" id="subtitle">We are happy to answer any questions you have.</p>
				<a href="" class="centered light-letter-spacing" id="main-cta-button">Start Free Chat Consultation <i class="fas fa-arrow-circle-right"></i></a>
				<!-- <p class="mb-0 text-center centered" id="chat_status"><i class="fas fa-circle"></i> ONLINE NOW</p> -->
			</div>
		</div>
	</div>
	
	<div class="feature-bar">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="text-center text-white roboto mb-0 light-font" id="feature-title">How can we help you?  Here are a few different ways to start your free consultation with us, 24/7.</p>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/text-icon.png" id="text-icon" class="centered regular-image-20 mb-16">
						<h3>Text</h3>
						<p class="feature-info">Send us a text message and we will let you know how to proceed with the next steps.</p>
						<h2>949 - 123 - 4567</h2>
						<!-- <p class="available mb-0"><i class="fas fa-circle"></i> AVAILABLE NOW</p> -->
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/call-icon.png" id="call-icon" class="centered mb-16">
						<h3>Call</h3>
						<p class="feature-info">Our operators are standing by to speak with you and discuss how we may be able to help.</p>
						<h2>800 - 123 - 4567</h2>
						<!-- <p class="available mb-0"><i class="fas fa-circle"></i> AVAILABLE NOW</p> -->
					</div>
				</div>


				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/chat-icon.png" id="chat-icon" class="centered mb-16">
						<h3>Chat</h3>
						<p class="feature-info">Launch our live chat support messenger and a representative will be with you shortly.</p>
						<h5 id="chat-window" class="blue-button"><a href="">Click to launch <br> chat window <i class="fas fa-arrow-circle-right"></i></a></h5>
						<!-- <p class="available mb-0"><i class="fas fa-circle"></i> ONLINE NOW</p> -->
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/email-icon.png" id="email-icon" class="centered mb-16">
						<h3>Email</h3>
						<p class="feature-info">Please feel free to write us with any questions and concerns, we will get back to you within 24 hours.</p>
						<h5 id="email">info@stevemehrpc.com</h5>
						<!-- <p class="available mb-0"><i class="fas fa-circle"></i> ONLINE NOW</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="container p-32">
	<div class="row">
		<div class="col-12">
			<h3 class="text-center roboto heavy-font" id="faq-title">Top Frequently Asked Questions</h3>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<p class="question roboto">How much does it cost to hire us?</p>
			    	</div>

			    	<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">It costs nothing -- we get paid only if we recover money for you, which is called a contingency basis. There are never any upfront or hidden fees and we are completely transparent about what you can expect from your case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-none d-md-block">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<p class="question roboto">What do I do after an accident?</p>
			    	</div>

			    	<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">Download our PDF post-accident guide <a href="" class="red">here</a> for important information on what to do and what not to in order to maximize your chances for a smooth and successful case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-block d-md-none mt-32-mobile">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingTwo-mobile" data-toggle="collapse" data-target="#collapseTwo-mobile" aria-expanded="false" aria-controls="collapseTwo-mobile">
						<p class="question roboto">What do I do after an accident?</p>
			    	</div>

			    	<div id="collapseTwo-mobile" class="collapse" aria-labelledby="headingTwo-mobile">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">Download our PDF post-accident guide <a href="" class="red">here</a> for important information on what to do and what not to in order to maximize your chances for a smooth and successful case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-32 mb-32">
		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-none d-md-block">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						<p class="question roboto">What happens when my case is accepted?</p>
			    	</div>

			    	<div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">You will be assigned a lawyer who will work on your case and handle all the procedures  for you.  Your lawyer will be in touch to  gather information from you that can help us win your case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-block d-md-none">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingThree-mobile" data-toggle="collapse" data-target="#collapseThree-mobile" aria-expanded="true" aria-controls="collapseThree-mobile">
						<p class="question roboto">What happens when my case is accepted?</p>
			    	</div>

			    	<div id="collapseThree-mobile" class="collapse" aria-labelledby="headingThree-mobile">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">You will be assigned a lawyer who will work on your case and handle all the procedures  for you.  Your lawyer will be in touch to  gather information from you that can help us win your case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-none d-md-block">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						<p class="question roboto">What kind of compensation can I expect?</p>
			    	</div>

			    	<div id="collapseFour" class="collapse show" aria-labelledby="headingFour">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">It depends on the type of accident, but in general we factor in physical injuries, your ability to work, wages lost, and any damage to your property.  We take all these things into consideration when constructing your case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-block d-md-none mt-32-mobile">
			<div class="accordion">
				<div class="card">
					<div class="card-header" id="headingFour-mobile" data-toggle="collapse" data-target="#collapseFour-mobile" aria-expanded="true" aria-controls="collapseFour-mobile">
						<p class="question roboto">What kind of compensation can I expect?</p>
			    	</div>

			    	<div id="collapseFour-mobile" class="collapse" aria-labelledby="headingFour-mobile">
		      			<div class="card-body">
		        			<p class="answer roboto light-font">It depends on the type of accident, but in general we factor in physical injuries, your ability to work, wages lost, and any damage to your property.  We take all these things into consideration when constructing your case.</p>
		   				</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
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
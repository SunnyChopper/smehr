@extends('layouts.app')

@section('content')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}">
	<div class="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-white text-center roboto heavy-font light-letter-spacing" id="title">Contact Us</h1>
					<p class="text-white text-center roboto light-font" id="subtitle">We are happy to answer any questions you have.</p>
					<a href="" class="centered light-letter-spacing" id="main-cta-button">Start Free Chat Consultation <i class="fas fa-arrow-circle-right"></i></a>
					<p class="mb-0 text-center centered" id="chat_status"><i class="far fa-circle"></i> ONLINE NOW</p>
				</div>
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
						<i class="fas fa-mobile-alt"></i>
						<h3>Text</h3>
						<p class="feature-info">Send us a text message and we will let you know how to proceed with the next steps.</p>
						<h2>949 - 123 - 4567</h2>
						<p class="available mb-0"><i class="far fa-circle"></i> AVAILABLE NOW</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<i class="fas fa-headset"></i>
						<h3>Call</h3>
						<p class="feature-info">Our operators are standing by to speak with you and discuss how we may be able to help.</p>
						<h2>800 - 123 - 4567</h2>
						<p class="available mb-0"><i class="far fa-circle"></i> AVAILABLE NOW</p>
					</div>
				</div>


				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<i class="far fa-comments"></i>
						<h3>Chat</h3>
						<p class="feature-info">Launch our live chat support messenger and a representative will be with you shortly.</p>
						<h5 id="chat-window"><a href="">Click to launch <br> chat window <i class="fas fa-arrow-circle-right"></i></a></h5>
						<p class="available mb-0"><i class="far fa-circle"></i> AVAILABLE NOW</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="feature-card">
						<i class="far fa-envelope"></i>
						<h3>Email</h3>
						<p class="feature-info">Please feel free to write us with any questions and concerns, we will get back to you within 24 hours.</p>
						<h5 id="email">info@stevemehrpc.com</h5>
						<p class="available mb-0"><i class="far fa-circle"></i> AVAILABLE NOW</p>
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
			<div class="col-lg-4 offset-lg-1 col-md-6 col-sm-12 col-12">
				<div class="faq-box">
					<p class="question">How much does it cost to hire us?</p>
					<p class="answer">It costs nothing -- we get paid only if we recover money on your behalf. There are never any upfront or hidden fees.</p>
				</div>
			</div>

			<div class="col-lg-4 offset-lg-2 col-md-6 col-sm-12 col-12">
				<div class="faq-box">
					<p class="question">What do I do after an accident?</p>
					<p class="answer">Download our PDF post-accident guide <a href="" class="red">here</a> for important information on what to do and what not to.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 offset-lg-1 col-md-6 col-sm-12 col-12">
				<div class="faq-box">
					<p class="question">What happens when my case is accepted?</p>
					<p class="answer">You will be assigned a lawyer who will work on your case and handle all the procedures for you.  Your lawyer will be in touch to gather information from you that can help us win your case.</p>
				</div>
			</div>

			<div class="col-lg-4 offset-lg-2 col-md-6 col-sm-12 col-12">
				<div class="faq-box">
					<p class="question">What kind of compensation can I expect?</p>
					<p class="answer">It depends on the type of accident, but in general we factor in things like how your injuries affect your bodily well-being, your ability to work, wages lost, and any damage to your property.</p>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.bottom-cta')
@endsection
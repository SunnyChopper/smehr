<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<h2 id="banner-text">News & Results</h2>
			</div>
		</div>
	</div>
</div>



<div style="background-color: #eef0f1; padding: 24px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<?php
					$args = array(
				        'posts_per_page' => 4,
				        'meta_key' => 'meta-checkbox',
				        'meta_value' => 'yes'
				    );
					$featured = new WP_Query($args);
					$iterator_index = 0;
					if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
				?>
				<?php if ($iterator_index == 0): ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<a href="<?php the_permalink(); ?>">
							<div class="main-story-box">
								<div class="main-story-image">
									<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $thumb_url = $thumb_url_array[0]; ?>
									<img src="<?php echo $thumb_url; ?>" class="regular-image">
								</div>
								<div class="main-story-info">
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php endif; ?>

				<?php if (count($featured) > 0): ?>
					<?php if ($iterator_index == 1): ?>
					<div class="row mt-4">
					<?php endif; ?>
						<?php if ($iterator_index > 0): ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-12">
							<div class="blog-box">
								<a href="<?php the_permalink(); ?>">
									<div class="blog-box-image">
										<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $thumb_url = $thumb_url_array[0]; ?>
										<img src="<?php echo $thumb_url; ?>" class="regular-image">
									</div>
									<div class="blog-box-info">
										<h5><?php the_title(); ?></h5>
									</div>
								</a>
							</div>
						</div>
						<?php endif; ?>
				<?php endif; ?>

				<?php if($iterator_index == (count($featured) - 1)): ?>
					</div>
				<?php endif; ?>

				<?php
					$iterator_index += 1;
					endwhile; else:
					endif;
				?>

				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<div style="padding: 24px; background-color: white; border-radius: 8px;">
						<p style="text-transform: uppercase; text-align: center;">Noteworthy Settlements</p>
						<div class="row mb-4">
							<div class="col-lg-6 col-md-8 col-sm-6 col-6">
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
								<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/proof-image-1-min.png" class="regular-image">
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
</div>

<div id="clients-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<h4 style="margin-bottom: 24px; font-weight: 700; font-family: 'Roboto', sans-serif;" id="client-headline">Client Success Stories</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-mobile-padding">
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

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-mobile-padding">
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

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-mobile-padding">
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

			<div class="col-lg-3 col-md-3 col-sm-6 col-6 low-mobile-padding">
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
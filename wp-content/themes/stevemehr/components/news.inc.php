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
				<?php if($iterator_index == 0): ?>
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

				<div class="row mt-4">
					<?php else: ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="blog-box">
							<a href="">
								<div class="blog-box-image">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/blog-image-1.png" class="regular-image">
								</div>
								<div class="blog-box-info">
									<h5>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h5>
								</div>
							</a>
						</div>
					</div>
					<?php endif; ?>

					<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="blog-box">
							<a href="">
								<div class="blog-box-image">
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/blog-image-1.png" class="regular-image">
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
									<img src="http://ec2-18-234-73-162.compute-1.amazonaws.com/wp-content/themes/stevemehr/images/blog-image-1.png" class="regular-image">
								</div>
								<div class="blog-box-info">
									<h5>Attorney Steven Mehr creates nation’s first law firm with former Judges and Senators on staff counsel</h5>
								</div>
							</a>
						</div>
					</div> -->
				</div>
			</div>

			<?php
				$iterator_index += 1;
				endwhile; else:
				endif;
			?>

						
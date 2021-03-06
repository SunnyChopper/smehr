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
				        'category_name' => 'featured',
				        'posts_per_page' => 4
				    );
					$featured = new WP_Query($args);
					$iterator_index = 0;
					if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
				?>

				<!-- Get main post -->
				<?php if ($iterator_index == 0): ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<a href="<?php the_permalink(); ?>">
							<div class="main-story-box">
								<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $thumb_url = $thumb_url_array[0]; ?>
								<div class="main-story-image set-bg" data-setbg="<?php echo $thumb_url; ?>">
									
								</div>
								<div class="main-story-info">
									<div class="main-story-content">
										<p class="rubik medium-letter-spacing mb-2"><small><b>FORBES</b> MAGAZINE</small></p>
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php endif; ?>

				<!-- If more than one post, then create secondary row -->
				<?php if ($featured->post_count > 1): ?>
					<!-- If first post, then create the row -->
					<?php if ($iterator_index == 1): ?>
					<div class="row mt-4">
					<?php endif; ?>

					<!-- Create secondary posts -->
					<?php if ($iterator_index > 0): ?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="blog-box">
							<a href="<?php the_permalink(); ?>">
								<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $thumb_url = $thumb_url_array[0]; ?>
								<div class="blog-box-image set-bg" data-setbg="<?php echo $thumb_url; ?>">
								</div>
								<div class="blog-box-info">
									<h5><?php the_title(); ?></h5>
								</div>
							</a>
						</div>
					</div>
					<?php endif; ?>
				<?php endif; ?>

				<!-- Close out row when it's the last secondary post -->
				<?php if ($featured->post_count > 1): ?>
					<?php if($iterator_index == ($featured->post_count - 1)): ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php
					$iterator_index += 1;
					endwhile; else:
					endif;
				?>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-12">
				<div style="padding: 24px; background-color: white; border-radius: 8px;">
					<p style="text-transform: uppercase; text-align: center;">Noteworthy Settlements</p>
					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_1'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_1'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_1'); ?></h6>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_2'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_2'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_2'); ?></h6>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_3'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_3'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_3'); ?></h6>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_4'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_4'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_4'); ?></h6>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_5'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_5'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_5'); ?></h6>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col-lg-6 col-md-8 col-sm-6 col-6">
							<img src="<?php echo get_option('result_image_6'); ?>" class="regular-image">
						</div>

						<div class="col-lg-6 col-md-4 col-sm-6 col-6 tablet-down-no-padding">
							<h2 class="sidebar-number">$<?php echo get_option('result_amount_6'); ?></h2>
							<h4 class="sidebar-million">MILLION</h4>
							<h6 class="sidebar-type"><?php echo get_option('result_type_6'); ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.set-bg').each(function() {
	    var bg = $(this).data('setbg');
	    $(this).css('background-image', 'url(' + bg + ')');
	  });
</script>
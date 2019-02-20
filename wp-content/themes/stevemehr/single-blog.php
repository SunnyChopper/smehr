<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>

<div class="container" id="post-container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3 class="mb-16"><?php the_title(); ?></h3>

				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large', array('class' => 'regular-image')); ?>
				<?php endif; ?>

				<?php the_content(); ?>

				<hr />
				[jpshare]
				<?php echo do_shortcode( '[labnol_related]' ); ?>
				<p><?php the_tags(); ?></p>


			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="gray-box">
				<?php if ( is_active_sidebar( 'post-side-bar' ) ) : ?>
				    <?php dynamic_sidebar( 'post-side-bar' ); ?>
				<?php else: ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	#post-container {
		margin-top: 128px;
	}
</style>

<?php get_footer(); ?>
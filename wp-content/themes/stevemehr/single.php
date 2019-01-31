<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>

<div class="container" id="post-container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>

				<h3><?php the_title(); ?></h3>
				<hr />
				<?php the_content(); ?>
				<hr />
				<?php echo get_the_date(); ?>

			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<style type="text/css">
	#post-container {
		margin-top: 128px;
	}
</style>

<?php get_footer(); ?>
<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>

<div class="container">
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>

			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<?php echo get_the_date(); ?>

		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>



<?php get_footer(); ?>
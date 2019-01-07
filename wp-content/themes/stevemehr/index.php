<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
<?php 
	
	if (is_front_page()) {
		require_once('components/main-banner.inc.php'); 
	}

?>
<?php 
	if (have_posts()):
	  while (have_posts()) : the_post();
	    the_content();
	  endwhile;
	endif; 
?>
<?php get_footer(); ?>
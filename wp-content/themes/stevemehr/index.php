<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
<?php 
	global $wp;
	echo $wp->request;
	if (is_front_page()) {
		require_once('components/main-banner.inc.php'); 
		the_content();
		require_once('components/bottom-cta.inc.php'); 
	} elseif (is_home()) {
		require_once('components/news.inc.php');
	} else {
		if (have_posts()):
		  while (have_posts()) : the_post();
		    the_content();
		  endwhile;
		endif; 
	}

?>
<?php get_footer(); ?>
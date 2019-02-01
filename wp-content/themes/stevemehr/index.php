<?php get_header(); ?>
<?php require_once('components/navbar.inc.php'); ?>
<?php 
	global $wp;
	$slug = $wp->request;
	if (is_front_page()) {
		require('components/main-banner.inc.php'); 
		the_content();
		require('components/firm-info.inc.php');
		require('components/how-we-help.inc.php');
		require('components/results.inc.php');
		require('components/client-stories.inc.php');
		require('components/features.inc.php');
		require('components/steve-bio.inc.php');
		require('components/bottom-cta.inc.php'); 
	} elseif (is_home()) {
		require('components/news.inc.php');
		require('components/client-stories.inc.php');
		require('components/bottom-cta.inc.php'); 
	} else {
		if (have_posts()):
		  while (have_posts()) : the_post();
		    the_content();
		  endwhile;
		endif; 
	}

?>
<?php get_footer(); ?>
<?php get_header(); ?>
<?php  ?>
<?php 
	global $wp;
	$slug = $wp->request;
	

	if (is_front_page()) {;
		include('components/main-banner.inc.php'); 
		the_content();
		include('components/firm-info.inc.php');
		include('components/features.inc.php');
		include('components/results.inc.php');
		include('components/client-stories.inc.php');
		include('components/how-we-help.inc.php');
		include('components/steve-bio.inc.php');
		include('components/bottom-cta.inc.php'); 
	} elseif (is_home()) {
		include('components/news.inc.php');
		include('components/client-stories.inc.php');
		include('components/bottom-cta.inc.php'); 
	} elseif ($slug == "accident-news") {
		the_content();
	} elseif ($slug == "contact-faq") {
		include('components/contact.inc.php');
		the_content();
		include('components/bottom-cta.inc.php'); 
	} else {
		if (have_posts()):
		  while (have_posts()) : the_post();
		    the_content();
		  endwhile;
		endif; 
	}

?>
<?php get_footer(); ?>
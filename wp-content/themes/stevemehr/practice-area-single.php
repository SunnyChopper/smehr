<?php
/*
 * Template Name: Practice Area Page
 * description: >-
  Page template for practice area
 */

get_header();
?>

<div class="container">
	<div class="col-12">
		<?php the_content(); ?>
	</div>
</div>

include('components/results.inc.php');
include('components/client-stories.inc.php');
include('components/features.inc.php');
include('components/attorneys.inc.php');
include('components/bottom-cta.inc.php');
get_footer();

?>


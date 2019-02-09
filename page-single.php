<?php
/*
	Template Name: Single Site Page
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main vv-single">

		<section class="page-content">
			<?php 
				// while(have_posts()) : the_post(); 
					the_content();
				// endwhile; 
			?>
		</section>

		<?php
		
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

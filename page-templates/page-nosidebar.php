<?php
/**
 * Template Name: No Sidebar Page
 * @package _s
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area col span_4_of_4">
		
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php get_footer(); ?>

<?php
/**
 * Template Name: Contact Page
 * @package _s
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area col span_3_of_4">
		
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'contact' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

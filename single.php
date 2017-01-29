<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area col span_3_of_4">
		
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php _s_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

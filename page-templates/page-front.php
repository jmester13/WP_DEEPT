<?php
/**
* Template Name: Front Page 
 *
 * @package _s
 */

get_header(); ?>
<?php get_template_part( 'content', 'slideshow' ); ?>
<div class="container">
	<div id="primary" class="content-area.home.page ">
		
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col span_1_of_6"></div>
				<div class="col span_4_of_6"><?php get_template_part( 'content', 'front' ); ?></div>
				<div class="col span_1_of_6"></div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->	

</div><!-- container -->

<?php get_sidebar('frontpage'); ?>
<?php get_footer(); ?>


<?php
/**
* Template Name: YouTube neck
 *
 * @package _s
 */

get_header(); ?>
<?php $options = get_option( 'theme_settings' ); ?>
<div class="topper youtube">
	<div class="container">
			<div id="primary" class="content-area members col span_4_of_4">
		
		<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col span_6_of_6"><?php get_template_part( 'content', 'youtube' ); ?></div>
				
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div>


<?php get_sidebar('youtube-neck.'); ?>
<?php get_footer(); ?>


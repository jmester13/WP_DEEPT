<?php
/**
* Template Name: Testimonials
 *
 * @package _s
 */


get_header(); ?>
<div class="topper testimonials">
	<div class="container">
		<div id="primary" class="content-area testimonials col span_4_of_4">
		
			<main id="main" class="site-main" role="main">

				<?php get_template_part( 'content', 'testimonial' ); ?>
				

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<div class="container" role="">
<div class="col span_4_of_4">
		 <?php

    query_posts( array( 
		'post_type' => 'testimonial', 
		'order' => 'RAND', 
        'posts_per_page' => '-1',
        )
          );
          	if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    
		
		    <div class="testimonial col span_1_of_3">
		    	<a href='<?php the_permalink(); ?>'> 
		        
		        
		            
		            <span class="title">
		              <h2> <?php the_title(); ?> </h2>
		            </span>

		             <div class="content">
		              <?php the_excerpt(); ?>
		            </div>

		    
		        </a>
		  	</div>
		
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
</div>
</div><!-- CONTAINER -->
<?php get_footer(); ?>

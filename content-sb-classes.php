<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>
<div class="container" role="">
<div class="col span_4_of_4">
		 <?php

    query_posts( array( 
		'post_type' => 'post', 
		'order' => 'desc', 
		'category_name' => 'class-south-burlington'
        'posts_per_page' => '6',
        )
          );
          	if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    
		
		    <div class="testimonial col span_1_of_3">
		    	<a href='<?php the_permalink(''); ?>'> 
		        
		     
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

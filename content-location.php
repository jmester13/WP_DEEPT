<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>

<!-- #post-## --> 

<div id="classes" class="col span_4_of_4">

    <span class="dept-title col span_2_of_2"> <h3> South Burlington Classes </h3> </span> 
     <?php

    query_posts( array( 
    'post_type' => 'post', 
    'order' => 'desc', 
    'category_name' => 'class-south-burlington',
        'posts_per_page' => '3',
        )
          );
            if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
      
        <div class="classes col span_1_of_3">
          <a href='<?php the_permalink(); ?>'> 
            
              <span class="class-img">
               <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('custpost');
                }
                else {
                  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/post-icon.jpg" />';
                } ?>
              </span>
                <span class="title">
                  <h2> <?php the_title(); ?> </h2>
                </span>

               <!--   <div class="content">
                  <?php the_excerpt(); ?>
                </div>
 -->
        
            </a>
        </div>
    
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>


 <div id="members" class="member-dept">
  <span class="dept-title col span_2_of_2"> <h3> Office Staff </h3> </span>
  <ul>
      <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'desc ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                //  array(
                //   'key' => 'department',
                //   'value' => '1',
                //   'compare' => '=',
                //   'type' => 'numeric',
                // ),
                //    array(
                //   'key' => 'title',
                //   'value' => '1',
                //   'compare' => '=',
                //   'type' => 'numeric',
                // ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_4"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail(); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

            //  echo '<div class="member-info">';
            //     the_excerpt();
            // echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>



</ul>
</div>


</div>


<!-- END SOUTH BURLINGTON -->
	</div>

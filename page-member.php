<?php
/**
* Template Name: Members
 *
 * @package _s
 */
// OFFICE NUMBERS INVERSED IN DEV. 


get_header(); ?>
<?php $options = get_option( 'theme_settings' ); ?>
<div class="topper members">
	<div class="container">
			<div id="primary" class="content-area members col span_4_of_4">
		
		<main id="main" class="site-main" role="main">

				<?php get_template_part( 'content', 'members' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div>
<div class="container">


<div id="members">	
	<h3 class="intro"> Find Staff By Office </h3>
	<ul class="tabs">
		<li class="col span_1_of_3" data-tab="tab-1">
						<span class="name" > <?php echo $options['office_one_name'] ?></span>
						<span class="address"><?php echo $options['office_one_address'] ?></span>
              <span class="address"><?php echo $options['office_one_tsz'] ?></span>
	          <span class="maploc"><a target="_blank" href="http://<?php echo ($options['office_one_maploc'] ? $options['office_one_maploc'] : '#Update-URL-in-ClientSettings'); ?>" > Find Us On Google Maps  </a></span>
            <span class="phone">P:<?php echo $options['office_one_phone'] ?></span>
            <span class="fax">F:<?php echo $options['office_one_fax'] ?></span>
						<span class="hours"><?php echo $options['office_one_hours'] ?></span>
					</li>
					<li class="col span_1_of_3" data-tab="tab-2">
						<span class="name" > <?php echo $options['office_two_name'] ?></span>
						<span class="address"><?php echo $options['office_two_addy'] ?></span>
            <span class="address"><?php echo $options['office_two_tsz'] ?></span>
						<span class="maploc"><a target="_blank" href="http://<?php echo ($options['office_two_maploc'] ? $options['office_two_maploc'] : '#Update-URL-in-ClientSettings'); ?>" > Find Us On Google Maps  </a></span>
            <span class="phone">P:<?php echo $options['office_two_phone'] ?></span>
            <span class="fax">F:<?php echo $options['office_two_fax'] ?></span>
						<span class="hours"><?php echo $options['office_two_hours'] ?></span>
					</li>
					 <li class="tab-link col span_1_of_3" data-tab="tab-3">
						<span class="name" > <?php echo $options['office_three_name'] ?></span>
						<span class="address"><?php echo $options['office_three_addly'] ?></span>
            <span class="address"><?php echo $options['office_three_tsz'] ?></span>
						<span class="maploc"><a target="_blank" href="http://<?php echo ($options['office_three_maploc'] ? $options['office_three_maploc'] : '#Update-URL-in-ClientSettings'); ?>" > Find Us On Google Maps  </a></span>
            <span class="phone">P:<?php echo $options['office_three_phone'] ?></span>
						<span class="fax">F:<?php echo $options['office_three_fax'] ?></span>
            <span class="hours"><?php echo $options['office_three_hours'] ?></span>
					</li> 

	</ul>

	<div id="tab-1" class="tab-content current">
		
	<!-- SOUTH BURLINGTON --> 
<div id="southburlington" class="toggle col span_4_of_4">
  <!-- CLININCAL -->  
  <div class="member-dept">
  <span class="title col span_2_of_2"> <h3> Clinical Staff </h3> </span>
  <ul>
      <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '4',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</ul>
</div>
<!-- RECEPTION -->
<div class="member-dept">
 <span class="title col span_2_of_2"> <h3>Reception Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
<!-- ACCOUNTS --> 
<div class="member-dept">
 <span class="title col span_2_of_2"> <h3> Accounts Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
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
	<div id="tab-2" class="tab-content">
		 <!-- SHELBURNE --> 
<div id="shelburne" class="toggle col span_4_of_4">
 <!-- CLININCAL -->  
  <div class="member-dept">
  <span class="title col span_2_of_2"> <h3> Clinical Staff </h3> </span>
  <ul>
      <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '4',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</ul>
</div>
<!-- RECEPTION -->
<div class="member-dept">

 <span class="title col span_2_of_2"> <h3>Reception Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</li>
</div>
<!-- ACCOUNTS --> 
<div class="member-dept">
 <span class="title col span_2_of_2"> <h3> Accounts Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
</div>
<!-- END SHELBURNE -->
	</div>
	<div id="tab-3" class="tab-content">
<div id="hinesburg" class="toggle col span_4_of_4">
  <!-- CLININCAL -->  
  <div class="member-dept">
  <span class="title col span_2_of_2"> <h3> Clinical Staff </h3> </span>
  <ul>
      <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 <?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '1',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                   array(
                  'key' => 'title',
                  'value' => '4',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
    <?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</ul>
</div>
<!-- RECEPTION -->
<div class="member-dept">
 <span class="title col span_2_of_2"> <h3>Reception Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '2',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
<!-- ACCOUNTS --> 
<div class="member-dept">
 <span class="title col span_2_of_2"> <h3> Accounts Staff </h3> </span>
 <ul>
<?php

          query_posts( array( 
            'post_type' => 'member', 
            'order' => 'ASC ', 
            'posts_per_page' => '20',
            'meta_query' => array(
                array(
                  'key' => 'office',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
                 array(
                  'key' => 'department',
                  'value' => '3',
                  'compare' => '=',
                  'type' => 'numeric',
                ),
              ),
            )
          );
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
<?php 
     
     echo '<li class="col span_1_of_3"><a href="';
            the_permalink();
            echo '">';
        echo '<span class="img">';
          echo the_post_thumbnail('member'); 
            echo '</span>';
            
             $name_id = get_post_field(get_the_ID(), 'name', true);
              $name = get_post($name_id);

                echo '<span class="member-name">'.$name->post_title; 
                echo'</span>';

             echo '<div class="member-info">';
                the_excerpt();
            echo '</div>';
            echo '</a>';
            echo '</li>';
    
?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
</div>
<!-- END HINESBURG -->
	</div> 
</div> <!-- MEMBERS -->

</div>
<?php get_footer(); ?>

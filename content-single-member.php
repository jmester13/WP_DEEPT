<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="col span_2_of_2">
      <span class="member-img col span_2_of_8"><?php the_post_thumbnail('member'); ?>
      </span>
      
      <?php 
        echo '<ul class="col span_6_of_8 title">';

          $name_id = get_post_field(get_the_ID(), 'name', true);
          $name = get_post($name_id);
                  
            echo '<li class="name">' . $name->name . ' </li>';

          $title_id = get_post_custom(get_the_ID(), 'title', true);
          $title = get_post($title_id);
                  
            echo '<li class="title">' .$title->title; ' </li>';
             


          $email_id = get_post_field(get_the_ID(), 'email', true);
          $email = get_post($email_id);
                  
            echo "<li class='email info'><a href='mailto:" .$email->email."'>" .$email->email; 
            echo '</a>';
            echo'</li>';
          echo '</ul>';

          ?>

    </header>

	<div class="entry-content"class="col span_2_of_2">
		<div class="col span_2_of_8"></div>
		<div class="col span_6_of_8"><?php the_content(); ?></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer col span_2_of_2">
		<div class="col span_1_of_2">
      <div class="entry-meta">
        <?php _s_posted_on(); ?>
      </div><!-- .entry-meta -->
      <?php _s_entry_footer(); ?>
    </div>

    <div class="col span_1_of_2">
      <?php echo do_shortcode('[mashshare shares="false" buttons="true" align="right"]'); ?> 
    </div>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

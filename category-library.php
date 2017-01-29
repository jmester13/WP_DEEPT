<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area col span_3_of_4">
		
		<main id="main" class="site-main" role="main">

			<?php /* Library */ ?>

        <div class="library" role="">
          <div class="row lib">
            <div class="col span_2_of_2">

              <h1 class="entry-title"><?php single_cat_title(); ?></h1>
                <div class="col span_2_of_2">
                  <ul class="lib-list">
                    <?php
                    // we add this, to show all posts in our 
                    // Glossary sorted alphabetically
                    // CAT = 10 FOR DEV 
                    // CAT = 7 FOR PRODUCTION
                    $args = array( 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC', 'cat' => '7', );
                    $glossaryposts = get_posts( $args ); 
                    // here comes The Loop!
                    foreach( $glossaryposts as $post ) :  setup_postdata($post);  ?>
                    <li class="lib-item col span_2_of_2">
                      <h1 class="entry-title"><a href="#" class="lib-title"><?php the_title(); ?>:</a></h1> 
                      <span class="definition" style="display:none;"> 
                        <?php the_content(); ?> </span>
                      </li>
                    <?php endforeach; ?>
                  </ul>  
                </div>
                <?php wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>

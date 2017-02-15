<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="full"><span class="left">Written by: <?php the_author_link(); ?></span><span class="right"> <?php _s_posted_on(); ?></span></p>

		
	</header><!-- .entry-header -->
	<!-- <div class="featuredimage">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('');
			}
			else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/post-icon.jpg" />';
			}  ?>
		</div> -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="col span_1_of_2">
		<div class="entry-meta">
			<p>Written by: <?php the_author_link(); ?></p>
			<?php _s_posted_on(); ?>
			<?php _s_entry_footer(); ?>
		
		</div><!-- .entry-meta -->
		
		</div>
			
		<div class="col span_1_of_2">
			<?php echo do_shortcode('[mashshare shares="false" buttons="true" align="right" ]'); ?> 
			
		</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
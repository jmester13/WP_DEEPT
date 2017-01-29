<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>   
		<?php the_content(); ?> 
			<?php endwhile; ?>
<?php endif; ?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
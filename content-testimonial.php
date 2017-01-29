<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div  id="topper-img" class="col span_1_f_4"><?php the_post_thumbnail(); ?></div>
		<div id="topper-content" class="col span_3_of_4">		<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>   
		<?php the_content(); ?> 
			<?php endwhile; ?>
<?php endif; ?></div>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
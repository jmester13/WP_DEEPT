<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="col span_1_of_2">
			<div class="entry-meta">
				<?php _s_posted_on(); ?>
				
			</div><!-- .entry-meta -->
		</div>

		<div class="col span_1_of_2">
			<?php echo do_shortcode('[mashshare shares="false" buttons="true" align="right"]'); ?> 
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>

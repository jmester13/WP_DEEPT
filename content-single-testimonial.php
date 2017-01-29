<?php
/**
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
		<div class="entry-meta">
			<?php _s_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php _s_entry_footer(); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>

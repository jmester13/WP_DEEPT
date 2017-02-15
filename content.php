<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col span_1_of_2' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		
	</header><!-- .entry-header -->

<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail('custpost');
}
else {
	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/post-icon.jpg" />';
} ?>

	<div class="entry-content">
		<?php
		echo '<a href=', get_permalink(),'>';
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		echo '</a>';
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		
			<div class="entry-meta">
				<?php _s_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
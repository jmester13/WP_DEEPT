<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>
<?php $options = get_option( 'theme_settings' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
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
	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="col span_1_of_2">
			<div class="entry-meta">
				<?php _s_posted_on(); ?>
				
			</div><!-- .entry-meta -->
		</div>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


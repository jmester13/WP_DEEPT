<?php
/**
* Template Name: Location : Hinesburg
 *
 * @package _s
 */

get_header('hinesburg'); ?>
<?php $options = get_option( 'theme_settings' ); ?>

<?php get_template_part( 'content', 'slideshow-hinesburg' ); ?>
<div class="container">
	<div id="primary" class="content-area.home.page ">
		
		<main id="main" class="site-main" role="main">
				
				
				<div class="col span_6_of_6"><?php get_template_part( 'content', 'location-hinesburg' ); ?>
					<div class="col span_2_of_2">
				<div class="col span_1_of_2 office-map">
					<h1 class="dept-title"> Office Location </h1>
					<div class="map-wrap full">
				<?php echo do_shortcode( $options['office_three_mapmakerloc']);?>
			</div>
				</div>


				<div class="col span_1_of_2 contact-form">
					<h1 class="dept-title"> Contact Us </h1>
				<?php echo do_shortcode( $options['office_three_contact']);?>
				</div>	
			</div>
				</div>
							

		</main><!-- #main -->
	</div><!-- #primary -->	

</div><!-- container -->

<?php get_footer(); ?>

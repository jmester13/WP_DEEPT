<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>
<?php $options = get_option( 'theme_settings' ); ?>
	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="container">
			
			<div class="site-branding">
				<div class="col span_1_of_7"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				<ul class="socials">
			        <li><a target="_blank" href="http://<?php echo ($options['custom_fb_url'] ? $options['custom_fb_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Check us out on Facebook!" id='fb' class="sociallink"> 
			              <span class="fa-stack fa-lg">
			                  <i class="fa fa-circle fa-stack-2x"></i>
			                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
			              </span> 
			          </a></li>
			          <li><a target="_blank" href="http://<?php echo ($options['custom_tw_url'] ? $options['custom_tw_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Follow us on Twitter!" id='twitter' class="sociallink"> 
			              <span class="fa-stack fa-lg">
			                  <i class="fa fa-circle fa-stack-2x"></i>
			                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
			              </span> 
			            </a></li>
			          <li><a target="_blank" href="http://<?php echo ($options['custom_li_url'] ? $options['custom_li_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Connected with Us on Linkedin" id='linkedin' class="sociallink"> 
			              <span class="fa-stack fa-lg">
			                  <i class="fa fa-circle fa-stack-2x"></i>
			                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
			              </span> 
			            </a></li>
			          
			          <li><a target="_blank" href="http://<?php echo ($options['custom_gp_url'] ? $options['custom_gp_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Find us on Google Plus" id='gplus' class="sociallink"> 
			              <span class="fa-stack fa-lg">
			                  <i class="fa fa-circle fa-stack-2x"></i>
			                  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
			              </span> 
			            </a></li>

			             <li><a target="_blank" href="http://<?php echo ($options['custom_insta_url'] ? $options['custom_insta_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Follow Us On Instagram" id='gplus' class="sociallink"> 
			              <span class="fa-stack fa-lg">
			                  <i class="fa fa-circle fa-stack-2x"></i>
			                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
			              </span> 
			            </a></li>
			      </ul>

				</div>
			
				<div class="col span_1_of_7"></div>

				<div id="office-info" class="col span_5_of_7"><ul>
					
					<li class="col span_1_of_3" data-tab="tab-1">
						<span class="name" > <?php echo $options['office_one_name'] ?></span>
						<span class="address"><?php echo $options['office_one_address'] ?></span>
							<span class="address"><?php echo $options['office_one_tsz'] ?></span>
						<span class="phone">P:<?php echo $options['office_one_phone'] ?></span>
						<span class="phone">F:<?php echo $options['office_one_fax'] ?></span>
						<span class="hours"><?php echo $options['office_one_hours'] ?></span>
					</li>
					<li class="col span_1_of_3" data-tab="tab-2">
						<span class="name" > <?php echo $options['office_two_name'] ?></span>
						<span class="address"><?php echo $options['office_two_addy'] ?></span>
							<span class="address"><?php echo $options['office_two_tsz'] ?></span>
						<span class="phone">P:<?php echo $options['office_two_phone'] ?></span>
						<span class="phone">F:<?php echo $options['office_two_fax'] ?></span>
						<span class="hours"><?php echo $options['office_two_hours'] ?></span>
					</li>
					<li class="tab-link col span_1_of_3" data-tab="tab-3">
						<span class="name" > <?php echo $options['office_three_name'] ?></span>
						<span class="address"><?php echo $options['office_three_addly'] ?></span>
							<span class="address"><?php echo $options['office_three_tsz'] ?></span>
						<span class="phone">P:<?php echo $options['office_three_phone'] ?></span>
						<span class="phone">F:<?php echo $options['office_three_fax'] ?></span>
						<span class="hours"><?php echo $options['office_three_hours'] ?></span>
					</li>

				

					<!--  socials end -->


				</ul>		</div>
			</div><!-- .site-branding -->

			
			</div>
		      

			
			<nav id="site-navigation" class="footer-navigation" role="navigation">
			
				<div class="container">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', '_s' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
			
		</nav><!-- #site-navigation -->
		<div class="site-info">
			<div class="container">
		 			<a href="http://joemester.com" alt="Joe Mester Design and Development"> Designed and Developed by Joe Mester</a>
		 		</div>
			</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

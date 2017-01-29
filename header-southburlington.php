<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<?php $options = get_option( 'theme_settings' ); ?>
<body <?php body_class('m-scene'); ?>>
<div id="page" class="hfeed site section group">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

<div id="utility-bar">
	<div class="container">

		<div class="site-socials col span_1_of_5">
			<ul class="socials">
		        <li><a target="_blank" href="http://<?php echo ($options['custom_fb_url'] ? $options['custom_fb_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Check us out on Facebook!" id='fb' class="sociallink"> 
		              <span class="fa-stack fa-lg">
		                  
		                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		              </span> 
		          </a></li>
		          <li><a target="_blank" href="http://<?php echo ($options['custom_tw_url'] ? $options['custom_tw_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Follow us on Twitter!" id='twitter' class="sociallink"> 
		              <span class="fa-stack fa-lg">
		                  
		                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		              </span> 
		            </a></li>
		          <li><a target="_blank" href="http://<?php echo ($options['custom_li_url'] ? $options['custom_li_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Connected with Us on Linkedin" id='linkedin' class="sociallink"> 
		              <span class="fa-stack fa-lg">
		                  
		                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		              </span> 
		            </a></li>
		          
		          <li><a target="_blank" href="http://<?php echo ($options['custom_gp_url'] ? $options['custom_gp_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Find us on Google Plus" id='gplus' class="sociallink"> 
		              <span class="fa-stack fa-lg">
		                  
		                  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
		              </span> 
		            </a></li>

		             <li><a target="_blank" href="http://<?php echo ($options['custom_insta_url'] ? $options['custom_insta_url'] : '#Update-URL-in-ClientSettings'); ?>" alt="Follow Us On Instagram" id='gplus' class="sociallink"> 
		              <span class="fa-stack fa-lg">
		                  
		                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
		              </span> 
		            </a></li>
		      </ul>

		</div>
		<div class="col span_4_of_5">
			<ul class="office">
			    <li> <span class="ulabel" > <?php echo $options['office_three_name'] ?></span><span><?php echo $options['office_three_phone'] ?></span></li>
			    <li> <span class="ulabel"> <?php echo $options['office_two_name'] ?> </span> <span><?php echo $options['office_two_phone'] ?></span> </li>
			    <li> <span class="ulabel" > <?php echo $options['office_one_name'] ?> </span><span><?php echo $options['office_one_phone'] ?></span></li>
			</ul>	
		</div>
	</div>
</div>

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
		<div class="site-branding col span_1_of_2">
			<div class="col span_2_of_5">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<div class=" col span_3_of_5 office-info">
				<span class="name" > <?php echo $options['office_two_name'] ?></span>
				<span class="address"><?php echo $options['office_two_address'] ?></span>
	            <span class="address"><?php echo $options['office_two_tsz'] ?></span>
	            <span class="phone">P:<?php echo $options['office_two_phone'] ?></span>
	            <span class="fax">F:<?php echo $options['office_two_fax'] ?></span>
				<span class="hours"><?php echo $options['office_two_hours'] ?></span>
			</div>
		</div><!-- .site-branding -->
		<div class="col span_1_of_2">
			<?php dynamic_sidebar( 'Header Search' ); ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( '<i class="fa fa-2x fa-bars"></i>', '_s' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'southburlington' ) ); ?>
				
			</nav><!-- #site-navigation -->
		</div>
	</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

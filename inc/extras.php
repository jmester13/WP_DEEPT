<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package _s
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function _s_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', '_s_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function _s_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', '_s_body_classes' );

if ( ! function_exists( '_wp_render_title_tag' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function _s_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', '_s_wp_title', 10, 2 );
endif;

if ( ! function_exists( '_wp_render_title_tag' ) ) :
	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function _s_render_title() {
		echo '<title>' . wp_title( '|', false, 'right' ) . "</title>\n";
	}
	add_action( 'wp_head', '_s_render_title' );
endif;

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function _s_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', '_s_setup_author' );


add_action( 'wp_enqueue_scripts', 'register_jquery' );
function register_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
}

/** FONT AWESOME **/

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
    wp_enqueue_style('animate-css', './assets/animate.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets'); 

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_register_script('smoothState', get_template_directory_uri() . "/js/jquery.smoothState.js", array('jquery'), null, true);
    wp_enqueue_script('smoothState');
}



// EXCERPT LENGTH

  function custom_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 140 );

function new_excerpt_more( $more ) {
  return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">read more... </a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// FORCE PLAIN TEXT PASTE 
//   function tinymce_paste_as_text( $init ) {
//     $init['paste_as_text'] = true;
//     return $init;
// }
// add_filter('tiny_mce_before_init', 'tinymce_paste_as_text');

 // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
	set_post_thumbnail_size(220, 250, true);

	if ( function_exists( 'add_image_size' ) ) { 
	   add_image_size( 'custpost', 99999, 150,true);
	   add_image_size( 'postthumb', 169, 99999, true);
	   add_image_size( 'postwide', 400, 300, true);
	   add_image_size( 'member', 600, 600, true);
	}


// testimonial CTA
  add_theme_support( 'after_setup_theme', 'setup_data_structures' );{
    if(! class_exists('Super_Custom_Post_Type'))
      return;
        
        $testimonial_images = new Super_Custom_Post_Type( 'testimonial' );
        $testimonial_images->set_icon('star');
        $testimonial_images->add_meta_box( array(
        'id'      => 'Testimonial Information',
        'context' => 'side',
        	'fields'  => array(
            	'from'=> array(),
              'date' => array( 'type' => 'date' ),
              'info' => array( 'type' => 'textarea' ),
              'link' => array(),
              'member'   => array( 'type' => 'select', 'data' => 'member'),            	)
    	) );
  }

	// MEMBERS 
  add_theme_support( 'after_setup_theme', 'setup_data_structures' );{
    if(! class_exists('Super_Custom_Post_Type'))
      return;
        
        $member = new Super_Custom_Post_Type( 'member' );
        $member->set_icon('group');

         $member->add_meta_box( array(
        'id'      => 'Member Info',
        'context' => 'side',
          'fields'  => array(

            'name'=> array(),
            'title'=> array( 'type' => 'select',  'default'=>'', 'options' => array( 1 => 'P.T Co-Owner', 2 => 'PT DPT', 3=>'Lic. P.T. Asst', 4 =>'Aide', 5=>'Receptionist', 6 => 'Billing & Accounts Manager', 7 => 'Clinical Coordinator' ),'multiple' => 'multiple' ),
            'phone'=> array(),
            'email'=> array(),
            
            'department'=> array( 'type' => 'select',  'default'=>'', 'options' => array( 1 => 'Clinical', 2 => 'Reception', 3 => 'Accounts' ),'multiple' => 'multiple' ),
            'office'=> array( 'type' => 'select', 'default'=>'',  'options' => array( 1 => 'So. Burlington', 2 => 'Shelburne', 3=>'Hinesburg'),'multiple' => 'multiple' ),
            )
      ) );

  }
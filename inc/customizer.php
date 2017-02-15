<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );

// staff WIDGET

// Creating the widget 
class have_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'have_widget', 

// Widget name will appear in UI
__('DO You Have', 'have_widget_domain'), 

// Widget description
array( 'description' => __( 'List of things people may have', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

$have_item_widget_title = $instance['have_item_widget_title'] ;

$have_item_one = $instance['have_item_one'] ;
$have_item_two = $instance['have_item_two'] ;
$have_item_three = $instance['have_item_three'] ;
$have_item_four = $instance['have_item_four'] ;
$have_item_five = $instance['have_item_five'] ;
$have_item_six = $instance['have_item_six'] ;
$have_item_seven = $instance['have_item_seven'] ;
$have_item_eight = $instance['have_item_eight'] ;
$have_item_nine = $instance['have_item_nine'] ;
$have_item_ten = $instance['have_item_ten'] ;
$have_item_one = $instance['have_item_link_one'] ;
$have_item_link_two = $instance['have_item_link_two'] ;
$have_item_link_three = $instance['have_item_link_three'] ;
$have_item_link_four = $instance['have_item_link_four'] ;
$have_item_link_five = $instance['have_item_link_five'] ;
$have_item_link_six = $instance['have_item_link_six'] ;
$have_item_link_seven = $instance['have_item_link_seven'] ;
$have_item_link_eight = $instance['have_item_link_eight'] ;
$have_item_link_nine = $instance['have_item_link_nine'] ;
$have_item_link_ten = $instance['have_item_ten'] ;
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo '<span>';

if (! empty($have_item_widget_title)) {
    echo '<a href="/category/whatwedo/"> <h3>' . $have_item_widget_title . '</h3> </a>';
}

echo'</span>';

echo '<ul>';

if (! empty($have_item_one)) {
  echo '<li>' . $have_item_one . '</li>';
}
if (! empty($have_item_link_one)) {
  echo '<li>' . $have_item_link_one . '</li>';
}

if (! empty($have_item_two)) {
  echo '<li>' . $have_item_two . '</li>';
}
if (! empty($have_item_two)) {
  echo '<li>' . $have_item_link_two . '</li>';
}

if (! empty($have_item_three)) {
  echo '<li>' . $have_item_three . '</li>';
}

if (! empty($have_item_link_three)) {
  echo '<li>' . $have_item_link_three . '</li>';
} 

if (! empty($have_item_four)) {
  echo '<li>' . $have_item_four . '</li>';
}
if (! empty($have_item_link_four)) {
  echo '<li>' . $have_item_link_four . '</li>';
}


if (! empty($have_item_five)) {
  echo '<li>' . $have_item_five . '</li>';
}
if (! empty($have_item_link_five)) {
  echo '<li>' . $have_item_link_five . '</li>';
}

if (! empty($have_item_six)) {
  echo '<li>' . $have_item_six . '</li>';
}
if (! empty($have_item_link_six)) {
  echo '<li>' . $have_item_link_six . '</li>';
}


if (! empty($have_item_seven)) {
  echo '<li>' . $have_item_seven . '</li>';
}

if (! empty($have_item_link_seven)) {
  echo '<li>' . $have_item_link_seven . '</li>';
}

if (! empty($have_item_eight)) {
  echo '<li>' . $have_item_eight . '</li>';
}

if (! empty($have_item_link_eight)) {
  echo '<li>' . $have_item_link_eight . '</li>';
}

if (! empty($have_item_nine)) {
  echo '<li>' . $have_item_nine . '</li>';
}
if (! empty($have_item_link_nine)) {
  echo '<li>' . $have_item_link_nine . '</li>';
}

if (! empty($have_item_ten)) {
  echo '<li>' . $have_item_ten . '</li>';
}
if (! empty($have_item_link_ten)) {
  echo '<li>' . $have_item_link_ten . '</li>';
}
                  
echo '</ul>';
echo $args['after_widget'];
}
    
// Widget Backend 
public function form( $instance ) {

  if ( isset( $instance[ 'have_item_one' ] ) ) {
    $have_item_widget_title = $instance[ 'have_item_widget_title' ];
  }
  else {
    $have_item_widget_title = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_one' ] ) ) {
    $have_item_one = $instance[ 'have_item_one' ];
  }
  else {
    $have_item_one = __( 'New have Item', 'wpb_widget_domain' );
  }
if ( isset( $instance[ 'have_item_link_one' ] ) ) {
    $have_item_link_one = $instance[ 'have_item_link_one' ];
  }
  else {
    $have_item_one = __( 'New have Item', 'wpb_widget_domain' );
  }


  if ( isset( $instance[ 'have_item_two' ] ) ) {
    $have_item_two = $instance[ 'have_item_two' ];
  }
  else {
    $have_item_two = __( 'New have Item', 'wpb_widget_domain' );
  }

   if ( isset( $instance[ 'have_item_link_two' ] ) ) {
    $have_item_link_two = $instance[ 'have_item_link_two' ];
  }
  else {
    $have_item_two = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_three' ] ) ) {
    $have_item_three = $instance[ 'have_item_three' ];
  }
  else {
    $have_item_three = __( 'New have Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'have_item_link_three' ] ) ) {
    $have_item_link_three = $instance[ 'have_item_link_three' ];
  }
  else {
    $have_item_three = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_four' ] ) ) {
    $have_item_four = $instance[ 'have_item_four' ];
  }
  else {
    $have_item_four = __( 'New have Item', 'wpb_widget_domain' );
  }

    if ( isset( $instance[ 'have_item_link_four' ] ) ) {
    $have_item_link_four = $instance[ 'have_item_link_four' ];
  }
  else {
    $have_item_four = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_five' ] ) ) {
    $have_item_five = $instance[ 'have_item_five' ];
  }
  else {
    $have_item_five = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_link_five' ] ) ) {
    $have_item_link_five = $instance[ 'have_item_link_five' ];
  }
  else {
    $have_item_five = __( 'New have Item', 'wpb_widget_domain' );
  }



  if ( isset( $instance[ 'have_item_six' ] ) ) {
    $have_item_six = $instance[ 'have_item_six' ];
  }
  else {
    $have_item_six = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_link_six' ] ) ) {
    $have_item_link_six = $instance[ 'have_item_link_six' ];
  }
  else {
    $have_item_six = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_seven' ] ) ) {
    $have_item_seven = $instance[ 'have_item_seven' ];
  }
  else {
    $have_item_seven = __( 'New have Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'have_item_link_seven' ] ) ) {
    $have_item_link_seven = $instance[ 'have_item_link_seven' ];
  }
  else {
    $have_item_seven = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_eight' ] ) ) {
    $have_item_eight = $instance[ 'have_item_eight' ];
  }
  else {
    $have_item_eight = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_link_eight' ] ) ) {
    $have_item_link_eight = $instance[ 'have_item_link_eight' ];
  }
  else {
    $have_item_eight = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_nine' ] ) ) {
    $have_item_nine = $instance[ 'have_item_nine' ];
  }
  else {
    $have_item_nine = __( 'New have Item', 'wpb_widget_domain' );
  }
  if ( isset( $instance[ 'have_item_link_nine' ] ) ) {
    $have_item_link_nine = $instance[ 'have_item_link_nine' ];
  }
  else {
    $have_item_nine = __( 'New have Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'have_item_ten' ] ) ) {
    $have_item_ten = $instance[ 'have_item_ten' ];
  }
  else {
    $have_item_ten = __( 'New have Item', 'wpb_widget_domain' );
  }
  if ( isset( $instance[ 'have_item_link_ten' ] ) ) {
    $have_item_link_ten = $instance[ 'have_item_link_ten' ];
  }
  else {
    $have_item_ten = __( 'New have Item', 'wpb_widget_domain' );
  }


// Widget admin form
?>
<h1> Widget Title </h1>
<p>
  <label for="<?php echo $this->get_field_id( 'have_item_widget_title' ); ?>">
    <?php _e( 'Widget Title:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_widget_title' ); ?>" name="<?php echo $this->get_field_name( 'have_item_widget_title' ); ?>" type="text" value="<?php echo esc_attr( $have_item_widget_title ); ?>" />
</p>


<p>
  <label for="<?php echo $this->get_field_id( 'have_item_one' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_one' ); ?>" name="<?php echo $this->get_field_name( 'have_item_one' ); ?>" type="text" value="<?php echo esc_attr( $have_item_one ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_one' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_one' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_one ); ?>"placeholder="have item link URL" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_two' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_two' ); ?>" name="<?php echo $this->get_field_name( 'have_item_two' ); ?>" type="text" value="<?php echo esc_attr( $have_item_two ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_two' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_two' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_two ); ?>"placeholder="have item link URL" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_three' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_three' ); ?>" name="<?php echo $this->get_field_name( 'have_item_three' ); ?>" type="text" value="<?php echo esc_attr( $have_item_three ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_three' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_three' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_three ); ?>" placeholder="have item link URL"/>
</p>


  <label for="<?php echo $this->get_field_id( 'have_item_four' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_four' ); ?>" name="<?php echo $this->get_field_name( 'have_item_four' ); ?>" type="text" value="<?php echo esc_attr( $have_item_four ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_four' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_four' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_four ); ?>" placeholder="have item link URL"/>
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_five' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_five' ); ?>" name="<?php echo $this->get_field_name( 'have_item_five' ); ?>" type="text" value="<?php echo esc_attr( $have_item_five ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_five' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_five' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_five ); ?>"placeholder="have item link URL" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_six' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_six' ); ?>" name="<?php echo $this->get_field_name( 'have_item_six' ); ?>" type="text" value="<?php echo esc_attr( $have_item_six ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_six' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_six' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_six ); ?>" placeholder="have item link URL"/>
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_seven' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_seven' ); ?>" name="<?php echo $this->get_field_name( 'have_item_seven' ); ?>" type="text" value="<?php echo esc_attr( $have_item_seven ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_seven' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_seven' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_seven ); ?>" placeholder="have item link URL"/>
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_eight' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_eight' ); ?>" name="<?php echo $this->get_field_name( 'have_item_eight' ); ?>" type="text" value="<?php echo esc_attr( $have_item_eight ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_eight' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_eight' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_eight ); ?>" placeholder="have item link URL"/>
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_nine' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_nine' ); ?>" name="<?php echo $this->get_field_name( 'have_item_nine' ); ?>" type="text" value="<?php echo esc_attr( $have_item_nine ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_nine' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_nine' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_nine ); ?>" placeholder="have item link URL"/>
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'have_item_ten' ); ?>">
    <?php _e( 'have Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_ten' ); ?>" name="<?php echo $this->get_field_name( 'have_item_ten' ); ?>" type="text" value="<?php echo esc_attr( $have_item_ten ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'have_item_link_ten' ); ?>" name="<?php echo $this->get_field_name( 'have_item_link_ten' ); ?>" type="text" value="<?php echo esc_attr( $have_item_link_ten ); ?>" placeholder="have item link URL"/>
</p>

<?php 
}
  
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['have_item_widget_title'] = ( ! empty( $new_instance['have_item_widget_title'] ) ) ? strip_tags( $new_instance['have_item_widget_title'] ) : '';
$instance['have_item_one'] = ( ! empty( $new_instance['have_item_one'] ) ) ? strip_tags( $new_instance['have_item_one'] ) : '';
$instance['have_item_two'] = ( ! empty( $new_instance['have_item_two'] ) ) ? strip_tags( $new_instance['have_item_two'] ) : '';
$instance['have_item_three'] = ( ! empty( $new_instance['have_item_three'] ) ) ? strip_tags( $new_instance['have_item_three'] ) : '';
$instance['have_item_four'] = ( ! empty( $new_instance['have_item_four'] ) ) ? strip_tags( $new_instance['have_item_four'] ) : '';
$instance['have_item_five'] = ( ! empty( $new_instance['have_item_five'] ) ) ? strip_tags( $new_instance['have_item_five'] ) : '';
$instance['have_item_six'] = ( ! empty( $new_instance['have_item_six'] ) ) ? strip_tags( $new_instance['have_item_six'] ) : '';
$instance['have_item_seven'] = ( ! empty( $new_instance['have_item_seven'] ) ) ? strip_tags( $new_instance['have_item_seven'] ) : '';
$instance['have_item_eight'] = ( ! empty( $new_instance['have_item_eight'] ) ) ? strip_tags( $new_instance['have_item_eight'] ) : '';
$instance['have_item_nine'] = ( ! empty( $new_instance['have_item_nine'] ) ) ? strip_tags( $new_instance['have_item_nine'] ) : '';
$instance['have_item_ten'] = ( ! empty( $new_instance['have_item_ten'] ) ) ? strip_tags( $new_instance['have_item_ten'] ) : '';
$instance['have_item_link_one'] = ( ! empty( $new_instance['have_item_link_one'] ) ) ? strip_tags( $new_instance['have_item_link_one'] ) : '';
$instance['have_item_link_two'] = ( ! empty( $new_instance['have_item_link_two'] ) ) ? strip_tags( $new_instance['have_item_link_two'] ) : '';
$instance['have_item_link_three'] = ( ! empty( $new_instance['have_item_link_three'] ) ) ? strip_tags( $new_instance['have_item_link_three'] ) : '';
$instance['have_item_link_four'] = ( ! empty( $new_instance['have_item_link_four'] ) ) ? strip_tags( $new_instance['have_item_link_four'] ) : '';
$instance['have_item_link_five'] = ( ! empty( $new_instance['have_item_link_five'] ) ) ? strip_tags( $new_instance['have_item_link_five'] ) : '';
$instance['have_item_link_six'] = ( ! empty( $new_instance['have_item_link_six'] ) ) ? strip_tags( $new_instance['have_item_link_six'] ) : '';
$instance['have_item_link_seven'] = ( ! empty( $new_instance['have_item_link_seven'] ) ) ? strip_tags( $new_instance['have_item_link_seven'] ) : '';
$instance['have_item_link_eight'] = ( ! empty( $new_instance['have_item_link_eight'] ) ) ? strip_tags( $new_instance['have_item_link_eight'] ) : '';
$instance['have_item_link_nine'] = ( ! empty( $new_instance['have_item_link_nine'] ) ) ? strip_tags( $new_instance['have_item_link_nine'] ) : '';
$instance['have_item_link_ten'] = ( ! empty( $new_instance['have_item_link_ten'] ) ) ? strip_tags( $new_instance['have_item_link_ten'] ) : '';

return $instance;
}
} // Class have_widget ends here

// DO YOU staff WIDGET

// Creating the widget 
class staff_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'staff_widget', 

// Widget name will appear in UI
__('Our Staff Has', 'staff_widget_domain'), 

// Widget description
array( 'description' => __( 'What has your staff competed, completed, or participated in', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

$staff_widget_title = $instance['staff_widget_title'] ;

$staff_item_one = $instance['staff_item_one'] ;
$staff_item_two = $instance['staff_item_two'] ;
$staff_item_three = $instance['staff_item_three'] ;
$staff_item_four = $instance['staff_item_four'] ;
$staff_item_five = $instance['staff_item_five'] ;
$staff_item_six = $instance['staff_item_six'] ;
$staff_item_seven = $instance['staff_item_seven'] ;
$staff_item_eight = $instance['staff_item_eight'] ;
$staff_item_nine = $instance['staff_item_nine'] ;
$staff_item_ten = $instance['staff_item_ten'] ;

$staff_item_link_one = $instance['staff_item_link_one'] ;
$staff_item_link_two = $instance['staff_item_link_two'] ;
$staff_item_link_three = $instance['staff_item_link_three'] ;
$staff_item_link_four = $instance['staff_item_link_four'] ;
$staff_item_link_five = $instance['staff_item_link_five'] ;
$staff_item_link_six = $instance['staff_item_link_six'] ;
$staff_item_link_seven = $instance['staff_item_link_seven'] ;
$staff_item_link_eight = $instance['staff_item_link_eight'] ;
$staff_item_link_nine = $instance['staff_item_link_nine'] ;
$staff_item_link_ten = $instance['staff_item_link_ten'] ;

$staff_item_eleven = $instance['staff_item_eleven'] ;
$staff_item_tweleve = $instance['staff_item_tweleve'] ;
$staff_item_thirteen = $instance['staff_item_thirteen'] ;
$staff_item_fourteen = $instance['staff_item_fourteen'] ;
$staff_item_fifteen = $instance['staff_item_fifteen'] ;
$staff_item_sixteen = $instance['staff_item_sixteen'] ;
$staff_item_seventeen = $instance['staff_item_seventeen'] ;
$staff_item_eighteen = $instance['staff_item_eighteen'] ;
$staff_item_nineteen = $instance['staff_item_nineteen'] ;
$staff_item_twenty = $instance['staff_item_twenty'] ;

$staff_item_link_eleven = $instance['staff_item_link_eleven'] ;
$staff_item_link_tweleve = $instance['staff_item_link_tweleve'] ;
$staff_item_link_thirteen = $instance['staff_item_link_thirteen'] ;
$staff_item_link_fourteen = $instance['staff_item_link_fourteen'] ;
$staff_item_link_fifteen = $instance['staff_item_link_fifteen'] ;
$staff_item_link_sixteen = $instance['staff_item_link_sixteen'] ;
$staff_item_link_seventeen = $instance['staff_item_link_seventeen'] ;
$staff_item_link_eighteen = $instance['staff_item_link_eighteen'] ;
$staff_item_link_nineteen = $instance['staff_item_link_nineteen'] ;
$staff_item_link_twenty = $instance['staff_item_link_twenty'] ;

$staff_item_twentyone = $instance['staff_item_twentyone'] ;
$staff_item_twentytwo = $instance['staff_item_twentytwo'] ;
$staff_item_twentythree = $instance['staff_item_twentythree'] ;
$staff_item_twentyfour = $instance['staff_item_twentyfour'] ;
$staff_item_twentyfive = $instance['staff_item_twentyfive'] ;
$staff_item_twentysix = $instance['staff_item_twentysix'] ;
$staff_item_twentyseven = $instance['staff_item_twentyseven'] ;
$staff_item_twentyeight = $instance['staff_item_twentyeight'] ;
$staff_item_twentynine = $instance['staff_item_twentynine'] ;
$staff_item_thirty = $instance['staff_item_thirty'] ;

$staff_item_link_twentyone = $instance['staff_item_link_twentyone'] ;
$staff_item_link_twentytwo = $instance['staff_item_link_twentytwo'] ;
$staff_item_link_twentythree = $instance['staff_item_link_twentythree'] ;
$staff_item_link_twentyfour = $instance['staff_item_link_twentyfour'] ;
$staff_item_link_twentyfive = $instance['staff_item_link_twentyfive'] ;
$staff_item_link_twentysix = $instance['staff_item_link_twentysix'] ;
$staff_item_link_twentyseven = $instance['staff_item_link_twentyseven'] ;
$staff_item_link_twentyeight = $instance['staff_item_link_twentyeight'] ;
$staff_item_link_twentynine = $instance['staff_item_link_twentynine'] ;
$staff_item_link_thirty = $instance['staff_item_link_thirty'] ;

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];


// This is where you run the code and display the output
echo '<span>';

if (! empty($staff_widget_title)) {
    echo '<a href="/about-us/"> <h3>' . $staff_widget_title . '</h3> </a>';
}

echo '</span>';

echo '<ul>';

echo "<h6>Completed</h6>";
if (! empty($staff_item_one)) {
    echo '<li class="completed">' . $staff_item_one . '</li>';
}

if (! empty($staff_item_two)) {
    echo '<li class="completed">' . $staff_item_two . '</li>';
}

if (! empty($staff_item_three)) {
    echo '<li class="completed">' . $staff_item_three . '</li>';
}

if (! empty($staff_item_four)) {
    echo '<li class="completed">' . $staff_item_four . '</li>';
}

if (! empty($staff_item_five)) {
    echo '<li class="completed">' . $staff_item_five . '</li>';
}

if (! empty($staff_item_six)) {
    echo '<li class="completed">' . $staff_item_six . '</li>';
}

if (! empty($staff_item_seven)) {
    echo '<li class="completed">' . $staff_item_seven . '</li>';
}

if (! empty($staff_item_eight)) {
    echo '<li class="completed">' . $staff_item_eight . '</li>';
}
if (! empty($staff_item_nine)) {
    echo '<li class="completed">' . $staff_item_nine . '</li>';
}
if (! empty($staff_item_ten)) {
    echo '<li class="completed">' . $staff_item_ten . '</li>';
}

if (! empty($staff_item_link_one)) {
    echo '<li class="completed">' . $staff_item_link_one . '</li>';
}

if (! empty($staff_item_link_two)) {
    echo '<li class="completed">' . $staff_item_link_two . '</li>';
}

if (! empty($staff_item_link_three)) {
    echo '<li class="completed">' . $staff_item_link_three . '</li>';
}

if (! empty($staff_item_link_four)) {
    echo '<li class="completed">' . $staff_item_link_four . '</li>';
}

if (! empty($staff_item_link_five)) {
    echo '<li class="completed">' . $staff_item_link_five . '</li>';
}

if (! empty($staff_item_link_six)) {
    echo '<li class="completed">' . $staff_item_link_six . '</li>';
}

if (! empty($staff_item_link_seven)) {
    echo '<li class="completed">' . $staff_item_link_seven . '</li>';
}

if (! empty($staff_item_link_eight)) {
    echo '<li class="completed">' . $staff_item_link_eight . '</li>';
}
if (! empty($staff_item_link_nine)) {
    echo '<li class="completed">' . $staff_item_link_nine . '</li>';
}
if (! empty($staff_item_link_ten)) {
    echo '<li class="completed">' . $staff_item_link_ten . '</li>';
}
echo "</ul>";


echo "<ul>";
echo "<h6>Competed In</h6>"; 
if (! empty($staff_item_eleven)) {
    echo '<li class="competed">' . $staff_item_eleven . '</li>';
}
if (! empty($staff_item_tweleve)) {
    echo '<li class="competed">' . $staff_item_tweleve . '</li>';
}
if (! empty($staff_item_thirteen)) {
    echo '<li class="competed">' . $staff_item_thirteen . '</li>';
}
if (! empty($staff_item_fouteen)) {
    echo '<li class="competed">' . $staff_item_fouteen . '</li>';
}
if (! empty($staff_item_fifteen)) {
    echo '<li class="competed">' . $staff_item_fifteen . '</li>';
}
if (! empty($staff_item_sixteen)) {
    echo '<li class="competed">' . $staff_item_sixteen . '</li>';
}  
 
if (! empty($staff_item_seventeen)) {
    echo '<li class="competed">' . $staff_item_seventeen. '</li>';
} 

if (! empty($staff_item_eighteen)) {
    echo '<li class="competed">' . $staff_item_eighteen . '</li>';
}  

if (! empty($staff_item_nineteen)) {
    echo '<li class="competed">' . $staff_item_nineteen . '</li>';
}  

if (! empty($staff_item_twenty)) {
    echo '<li class="competed">' . $staff_item_twenty . '</li>';
}  

if (! empty($staff_item_link_eleven)) {
    echo '<li class="competed">' . $staff_item_link_eleven . '</li>';
}
if (! empty($staff_item_link_tweleve)) {
    echo '<li class="competed">' . $staff_item_link_tweleve . '</li>';
}
if (! empty($staff_item_link_thirteen)) {
    echo '<li class="competed">' . $staff_item_link_thirteen . '</li>';
}
if (! empty($staff_item_link_fouteen)) {
    echo '<li class="competed">' . $staff_item_link_fouteen . '</li>';
}
if (! empty($staff_item_link_fifteen)) {
    echo '<li class="competed">' . $staff_item_link_fifteen . '</li>';
}
if (! empty($staff_item_link_sixteen)) {
    echo '<li class="competed">' . $staff_item_link_sixteen . '</li>';
}  
 
if (! empty($staff_item_link_seventeen)) {
    echo '<li class="competed">' . $staff_item_link_seventeen. '</li>';
} 

if (! empty($staff_item_link_eighteen)) {
    echo '<li class="competed">' . $staff_item_link_eighteen . '</li>';
}  

if (! empty($staff_item_link_nineteen)) {
    echo '<li class="competed">' . $staff_item_link_nineteen . '</li>';
}  

if (! empty($staff_item_link_twenty)) {
    echo '<li class="competed">' . $staff_item_link_twenty . '</li>';
}  
echo "</ul>";

echo "<ul>";
echo "<h6>Participated In</h6>";

if (! empty($staff_item_twentyone)) {
    echo '<li class="participated">' . $staff_item_twentyone . '</li>';
}
if (! empty($staff_item_twentytwo)) {
    echo '<li class="participated">' . $staff_item_twentytwo . '</li>';
}
if (! empty($staff_item_twentythree)) {
    echo '<li class="participated">' . $staff_item_twentythree . '</li>';
}
if (! empty($staff_item_twentyfour)) {
    echo '<li class="participated">' . $staff_item_twentyfour . '</li>';
}
if (! empty($staff_item_twentyfive)) {
    echo '<li class="participated">' . $staff_item_twentyfive . '</li>';
}
if (! empty($staff_item_twentysix)) {
    echo '<li class="participated">' . $staff_item_twentysix . '</li>';
}  
 
if (! empty($staff_item_twentyseven)) {
    echo '<li class="participated">' . $staff_item_twentyseven. '</li>';
} 

if (! empty($staff_item_twentyeight)) {
    echo '<li class="participated">' . $staff_item_twentyeight . '</li>';
}  

if (! empty($staff_item_twentynine)) {
    echo '<li class="participated">' . $staff_item_twentynine . '</li>';
}  

if (! empty($staff_item_thirty)) {
    echo '<li class="participated">' . $staff_item_thirty . '</li>';
}  

if (! empty($staff_item_link_twentyone)) {
    echo '<li class="participated">' . $staff_item_link_twentyone . '</li>';
}
if (! empty($staff_item_link_twentytwo)) {
    echo '<li class="participated">' . $staff_item_link_twentytwo . '</li>';
}
if (! empty($staff_item_link_twentythree)) {
    echo '<li class="participated">' . $staff_item_link_twentythree . '</li>';
}
if (! empty($staff_item_link_twentyfour)) {
    echo '<li class="participated">' . $staff_item_link_twentyfour . '</li>';
}
if (! empty($staff_item_link_twentyfive)) {
    echo '<li class="participated">' . $staff_item_link_twentyfive . '</li>';
}
if (! empty($staff_item_link_twentysix)) {
    echo '<li class="participated">' . $staff_item_link_twentysix . '</li>';
}  
 
if (! empty($staff_item_link_twentyseven)) {
    echo '<li class="participated">' . $staff_item_link_twentyseven. '</li>';
} 

if (! empty($staff_item_link_twentyeight)) {
    echo '<li class="participated">' . $staff_item_link_twentyeight . '</li>';
}  

if (! empty($staff_item_link_twentynine)) {
    echo '<li class="participated">' . $staff_item_link_twentynine . '</li>';
}  

if (! empty($staff_item_link_thirty)) {
    echo '<li class="participated">' . $staff_item_link_thirty . '</li>';
}  

echo '</ul>';
echo $args['after_widget'];
}
    
// Widget Backend 
public function form( $instance ) {
  if ( isset( $instance[ 'staff_widget_title' ] ) ) {
    $staff_widget_title = $instance[ 'staff_widget_title' ];
  }
  else {
    $staff_item_one = __( 'New staff Item', 'wpb_widget_domain' );
  }

  
  if ( isset( $instance[ 'staff_item_one' ] ) ) {
    $staff_item_one = $instance[ 'staff_item_one' ];
  }
  else {
    $staff_item_one = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_two' ] ) ) {
    $staff_item_two = $instance[ 'staff_item_two' ];
  }
  else {
    $staff_item_two = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_three' ] ) ) {
    $staff_item_three = $instance[ 'staff_item_three' ];
  }
  else {
    $staff_item_three = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_four' ] ) ) {
    $staff_item_four = $instance[ 'staff_item_four' ];
  }
  else {
    $staff_item_four = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_five' ] ) ) {
    $staff_item_five = $instance[ 'staff_item_five' ];
  }
  else {
    $staff_item_five = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_six' ] ) ) {
    $staff_item_six = $instance[ 'staff_item_six' ];
  }
  else {
    $staff_item_six = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_seven' ] ) ) {
    $staff_item_seven = $instance[ 'staff_item_seven' ];
  }
  else {
    $staff_item_seven = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_eight' ] ) ) {
    $staff_item_eight = $instance[ 'staff_item_eight' ];
  }
  else {
    $staff_item_eight = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_nine' ] ) ) {
    $staff_item_nine = $instance[ 'staff_item_nine' ];
  }
  else {
    $staff_item_nine = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_ten' ] ) ) {
    $staff_item_ten = $instance[ 'staff_item_ten' ];
  }
  else {
    $staff_item_ten = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_eleven' ] ) ) {
    $staff_item_eleven = $instance[ 'staff_item_eleven' ];
  }
  else {
    $staff_item_eleven = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_tweleve' ] ) ) {
    $staff_item_tweleve = $instance[ 'staff_item_tweleve' ];
  }
  else {
    $staff_item_tweleve = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_thirteen' ] ) ) {
    $staff_item_thirteen = $instance[ 'staff_item_thirteen' ];
  }
  else {
    $staff_item_thirteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_fourteen' ] ) ) {
    $staff_item_fourteen = $instance[ 'staff_item_fourteen' ];
  }
  else {
    $staff_item_fourteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_fifteen' ] ) ) {
    $staff_item_fifteen = $instance[ 'staff_item_fifteen' ];
  }
  else {
    $staff_item_fifteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_sixteen' ] ) ) {
    $staff_item_sixteen = $instance[ 'staff_item_sixteen' ];
  }
  else {
    $staff_item_sixteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_seventeen' ] ) ) {
    $staff_item_seventeen = $instance[ 'staff_item_seventeen' ];
  }
  else {
    $staff_item_seventeen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_eighteen' ] ) ) {
    $staff_item_eighteen = $instance[ 'staff_item_eighteen' ];
  }
  else {
    $staff_item_eighteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_nineteen' ] ) ) {
    $staff_item_nineteen = $instance[ 'staff_item_nineteen' ];
  }
  else {
    $staff_item_nineteen = __( 'New staff Item', 'wpb_widget_domain' );
  }  
  if ( isset( $instance[ 'staff_item_twenty' ] ) ) {
    $staff_item_twenty = $instance[ 'staff_item_twenty' ];
  }
  else {
    $staff_item_twenty = __( 'New staff Item', 'wpb_widget_domain' );
  }

if ( isset( $instance[ 'staff_item_twentyone' ] ) ) {
    $staff_item_twentyone = $instance[ 'staff_item_twentyone' ];
  }
  else {
    $staff_item_twentyone = __( 'New staff Item', 'wpb_widget_domain' );
  }

if ( isset( $instance[ 'staff_item_twentytwo' ] ) ) {
    $staff_item_twentytwo = $instance[ 'staff_item_twentytwo' ];
  }
  else {
    $staff_item_twentytwo = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_twentythree' ] ) ) {
    $staff_item_twentythree = $instance[ 'staff_item_twentythree' ];
  }
  else {
    $staff_item_twentythree = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_twentyfour' ] ) ) {
    $staff_item_twentyfour = $instance[ 'staff_item_twentyfour' ];
  } 
  else {
    $staff_item_twentyfour = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_twentyfive' ] ) ) {
    $staff_item_twentyfive = $instance[ 'staff_item_twentyfive' ];
  }
  else {
    $staff_item_twentyfive = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_twentysix' ] ) ) {
    $staff_item_twentysix = $instance[ 'staff_item_twentysix' ];
  }
  else {
    $staff_item_twentysix = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_twentyseven' ] ) ) {
    $staff_item_twentyseven = $instance[ 'staff_item_twentyseven' ];
  }
  else {
    $staff_item_twentyseven = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_twentyeight' ] ) ) {
    $staff_item_twentyeight = $instance[ 'staff_item_twentyeight' ];
  }
  else {
    $staff_item_twentyeight = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_twentynine' ] ) ) {
    $staff_item_twentynine = $instance[ 'staff_item_twentynine' ];
  }
  else {
    $staff_item_twentynine = __( 'New staff Item', 'wpb_widget_domain' );
}  
  
if ( isset( $instance[ 'staff_item_thirty' ] ) ) {
    $staff_item_thirty = $instance[ 'staff_item_thirty' ];
  }
  else {
    $staff_item_thirty = __( 'New staff Item', 'wpb_widget_domain' );
}

  if ( isset( $instance[ 'staff_item_link_one' ] ) ) {
    $staff_item_link_one = $instance[ 'staff_item_link_one' ];
  }
  else {
    $staff_item_link_one = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_two' ] ) ) {
    $staff_item_link_two = $instance[ 'staff_item_link_two' ];
  }
  else {
    $staff_item_link_two = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_three' ] ) ) {
    $staff_item_link_three = $instance[ 'staff_item_link_three' ];
  }
  else {
    $staff_item_link_three = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_four' ] ) ) {
    $staff_item_link_four = $instance[ 'staff_item_link_four' ];
  }
  else {
    $staff_item_link_four = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_five' ] ) ) {
    $staff_item_link_five = $instance[ 'staff_item_link_five' ];
  }
  else {
    $staff_item_link_five = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_six' ] ) ) {
    $staff_item_link_six = $instance[ 'staff_item_link_six' ];
  }
  else {
    $staff_item_link_six = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_seven' ] ) ) {
    $staff_item_link_seven = $instance[ 'staff_item_link_seven' ];
  }
  else {
    $staff_item_link_seven = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_eight' ] ) ) {
    $staff_item_link_eight = $instance[ 'staff_item_link_eight' ];
  }
  else {
    $staff_item_link_eight = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_nine' ] ) ) {
    $staff_item_link_nine = $instance[ 'staff_item_link_nine' ];
  }
  else {
    $staff_item_link_nine = __( 'New staff Item', 'wpb_widget_domain' );
  }

  if ( isset( $instance[ 'staff_item_link_ten' ] ) ) {
    $staff_item_link_ten = $instance[ 'staff_item_link_ten' ];
  }
  else {
    $staff_item_link_ten = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_eleven' ] ) ) {
    $staff_item_link_eleven = $instance[ 'staff_item_link_eleven' ];
  }
  else {
    $staff_item_link_eleven = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_tweleve' ] ) ) {
    $staff_item_link_tweleve = $instance[ 'staff_item_link_tweleve' ];
  }
  else {
    $staff_item_link_tweleve = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_thirteen' ] ) ) {
    $staff_item_link_thirteen = $instance[ 'staff_item_link_thirteen' ];
  }
  else {
    $staff_item_link_thirteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_fourteen' ] ) ) {
    $staff_item_link_fourteen = $instance[ 'staff_item_link_fourteen' ];
  }
  else {
    $staff_item_link_fourteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_fifteen' ] ) ) {
    $staff_item_link_fifteen = $instance[ 'staff_item_link_fifteen' ];
  }
  else {
    $staff_item_link_fifteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_sixteen' ] ) ) {
    $staff_item_link_sixteen = $instance[ 'staff_item_link_sixteen' ];
  }
  else {
    $staff_item_link_sixteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_seventeen' ] ) ) {
    $staff_item_link_seventeen = $instance[ 'staff_item_link_seventeen' ];
  }
  else {
    $staff_item_link_seventeen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_eighteen' ] ) ) {
    $staff_item_link_eighteen = $instance[ 'staff_item_link_eighteen' ];
  }
  else {
    $staff_item_link_eighteen = __( 'New staff Item', 'wpb_widget_domain' );
  }
    if ( isset( $instance[ 'staff_item_link_nineteen' ] ) ) {
    $staff_item_link_nineteen = $instance[ 'staff_item_link_nineteen' ];
  }
  else {
    $staff_item_link_nineteen = __( 'New staff Item', 'wpb_widget_domain' );
  }  
  if ( isset( $instance[ 'staff_item_link_twenty' ] ) ) {
    $staff_item_link_twenty = $instance[ 'staff_item_link_twenty' ];
  }
  else {
    $staff_item_link_twenty = __( 'New staff Item', 'wpb_widget_domain' );
  }

if ( isset( $instance[ 'staff_item_link_twentyone' ] ) ) {
    $staff_item_link_twentyone = $instance[ 'staff_item_link_twentyone' ];
  }
  else {
    $staff_item_link_twentyone = __( 'New staff Item', 'wpb_widget_domain' );
  }

if ( isset( $instance[ 'staff_item_link_twentytwo' ] ) ) {
    $staff_item_link_twentytwo = $instance[ 'staff_item_link_twentytwo' ];
  }
  else {
    $staff_item_link_twentytwo = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_link_twentythree' ] ) ) {
    $staff_item_link_twentythree = $instance[ 'staff_item_link_twentythree' ];
  }
  else {
    $staff_item_link_twentythree = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_link_twentyfour' ] ) ) {
    $staff_item_link_twentyfour = $instance[ 'staff_item_link_twentyfour' ];
  } 
  else {
    $staff_item_link_twentyfour = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_link_twentyfive' ] ) ) {
    $staff_item_link_twentyfive = $instance[ 'staff_item_link_twentyfive' ];
  }
  else {
    $staff_item_link_twentyfive = __( 'New staff Item', 'wpb_widget_domain' );
}
    
if ( isset( $instance[ 'staff_item_link_twentysix' ] ) ) {
    $staff_item_link_twentysix = $instance[ 'staff_item_link_twentysix' ];
  }
  else {
    $staff_item_link_twentysix = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_link_twentyseven' ] ) ) {
    $staff_item_link_twentyseven = $instance[ 'staff_item_link_twentyseven' ];
  }
  else {
    $staff_item_link_twentyseven = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_link_twentyeight' ] ) ) {
    $staff_item_link_twentyeight = $instance[ 'staff_item_link_twentyeight' ];
  }
  else {
    $staff_item_link_twentyeight = __( 'New staff Item', 'wpb_widget_domain' );
}

if ( isset( $instance[ 'staff_item_link_twentynine' ] ) ) {
    $staff_item_link_twentynine = $instance[ 'staff_item_link_twentynine' ];
  }
  else {
    $staff_item_link_twentynine = __( 'New staff Item', 'wpb_widget_domain' );
}  
  
if ( isset( $instance[ 'staff_item_link_thirty' ] ) ) {
    $staff_item_link_thirty = $instance[ 'staff_item_link_thirty' ];
  }
  else {
    $staff_item_link_thirty = __( 'New staff Item', 'wpb_widget_domain' );
}
// Widget admin form
?>

<h1> Widget Title </h1>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_widget_title' ); ?>">
    <?php _e( 'Widget Title:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_widget_title' ); ?>" name="<?php echo $this->get_field_name( 'staff_widget_title' ); ?>" type="text" value="<?php echo esc_attr( $staff_widget_title ); ?>" />
</p>


<h1> Completed </h1>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_one' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_one' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_one' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_one ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_one' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_one' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_one ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_two' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_two' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_two' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_two ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_two' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_two' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_two ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_three' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_three' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_three' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_three ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_three' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_three' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_three ); ?>" />
</p>


  <label for="<?php echo $this->get_field_id( 'staff_item_four' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_four' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_four' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_four ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_four' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_four' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_four ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_five' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_five' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_five' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_five ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_five' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_five' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_five ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_six' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_six' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_six' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_six ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_six' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_six' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_six ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_seven' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_seven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_seven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_seven ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_seven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_seven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_seven ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_eight' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_eight' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_eight' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_eight ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_eight' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_eight' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_eight ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_nine' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_nine' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_nine' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_nine ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_nine' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_nine' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_nine ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_ten' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_ten' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_ten' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_ten ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_ten' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_ten' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_ten ); ?>" />
</p>
<h1> Competed In </h1>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_eleven' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_eleven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_eleven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_eleven ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_eleven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_eleven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_eleven ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_tweleve' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_tweleve' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_tweleve' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_tweleve ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_tweleve' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_tweleve' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_tweleve ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_thirteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_thirteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_thirteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_thirteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_thirteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_thirteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_thirteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_fourteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_fourteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_fourteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_fourteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_fourteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_fourteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_fourteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_fifteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_fifteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_fifteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_fifteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_fifteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_fifteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_fifteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_sixteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_sixteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_sixteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_sixteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_sixteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_sixteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_sixteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_seventeen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_seventeen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_seventeen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_seventeen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_seventeen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_seventeen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_seventeen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_eightteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_eightteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_eightteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_eightteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_eightteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_eightteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_eightteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_nineteen' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_nineteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_nineteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_nineteen ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_nineteen' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_nineteen' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_nineteen ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twenty' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twenty' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twenty' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twenty ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twenty' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twenty' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twenty ); ?>" />
</p>

<h1> Participated In </h1>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentyone' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentyone' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentyone' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentyone ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentyone' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentyone' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentyone ); ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentytwo' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentytwo' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentytwo' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentytwo ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentytwo' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentytwo' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentytwo ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentythree' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentythree' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentythree' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentythree ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentythree' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentythree' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentythree ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentyfour' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentyfour' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentyfour' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentyfour ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentyfour' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentyfour' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentyfour ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentyfive' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentyfive' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentyfive' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentyfive ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentyfive' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentyfive' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentyfive ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentysix' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentysix' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentysix' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentysix ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentysix' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentysix' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentysix ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentyseven' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentyseven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentyseven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentyseven ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentyseven' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentyseven' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentyseven ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentyeight' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentyeight' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentyeight' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentyeight ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentyeight' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentyeight' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentyeight ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_twentynine' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_twentynine' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_twentynine' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_twentynine ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_twentynine' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_twentynine' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_twentynine ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'staff_item_thirty' ); ?>">
    <?php _e( 'staff Item:' ); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_thirty' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_thirty' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_thirty ); ?>" />
  <input class="widefat" id="<?php echo $this->get_field_id( 'staff_item_link_thirty' ); ?>" name="<?php echo $this->get_field_name( 'staff_item_link_thirty' ); ?>" type="text" value="<?php echo esc_attr( $staff_item_link_thirty ); ?>" />
</p>

<?php 
}
  
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['staff_widget_title'] = ( ! empty( $new_instance['staff_widget_title'] ) ) ? strip_tags( $new_instance['staff_widget_title'] ) : '';
$instance['staff_item_one'] = ( ! empty( $new_instance['staff_item_one'] ) ) ? strip_tags( $new_instance['staff_item_one'] ) : '';
$instance['staff_item_two'] = ( ! empty( $new_instance['staff_item_two'] ) ) ? strip_tags( $new_instance['staff_item_two'] ) : '';
$instance['staff_item_three'] = ( ! empty( $new_instance['staff_item_three'] ) ) ? strip_tags( $new_instance['staff_item_three'] ) : '';
$instance['staff_item_four'] = ( ! empty( $new_instance['staff_item_four'] ) ) ? strip_tags( $new_instance['staff_item_four'] ) : '';
$instance['staff_item_five'] = ( ! empty( $new_instance['staff_item_five'] ) ) ? strip_tags( $new_instance['staff_item_five'] ) : '';
$instance['staff_item_six'] = ( ! empty( $new_instance['staff_item_six'] ) ) ? strip_tags( $new_instance['staff_item_six'] ) : '';
$instance['staff_item_seven'] = ( ! empty( $new_instance['staff_item_seven'] ) ) ? strip_tags( $new_instance['staff_item_seven'] ) : '';
$instance['staff_item_eight'] = ( ! empty( $new_instance['staff_item_eight'] ) ) ? strip_tags( $new_instance['staff_item_eight'] ) : '';
$instance['staff_item_nine'] = ( ! empty( $new_instance['staff_item_nine'] ) ) ? strip_tags( $new_instance['staff_item_nine'] ) : '';
$instance['staff_item_ten'] = ( ! empty( $new_instance['staff_item_ten'] ) ) ? strip_tags( $new_instance['staff_item_ten'] ) : '';

$instance['staff_item_link_one'] = ( ! empty( $new_instance['staff_item_link_one'] ) ) ? strip_tags( $new_instance['staff_item_link_one'] ) : '';
$instance['staff_item_link_two'] = ( ! empty( $new_instance['staff_item_link_two'] ) ) ? strip_tags( $new_instance['staff_item_link_two'] ) : '';
$instance['staff_item_link_three'] = ( ! empty( $new_instance['staff_item_link_three'] ) ) ? strip_tags( $new_instance['staff_item_link_three'] ) : '';
$instance['staff_item_link_four'] = ( ! empty( $new_instance['staff_item_link_four'] ) ) ? strip_tags( $new_instance['staff_item_link_four'] ) : '';
$instance['staff_item_link_five'] = ( ! empty( $new_instance['staff_item_link_five'] ) ) ? strip_tags( $new_instance['staff_item_link_five'] ) : '';
$instance['staff_item_link_six'] = ( ! empty( $new_instance['staff_item_link_six'] ) ) ? strip_tags( $new_instance['staff_item_link_six'] ) : '';
$instance['staff_item_link_seven'] = ( ! empty( $new_instance['staff_item_link_seven'] ) ) ? strip_tags( $new_instance['staff_item_link_seven'] ) : '';
$instance['staff_item_link_eight'] = ( ! empty( $new_instance['staff_item_link_eight'] ) ) ? strip_tags( $new_instance['staff_item_link_eight'] ) : '';
$instance['staff_item_link_nine'] = ( ! empty( $new_instance['staff_item_link_nine'] ) ) ? strip_tags( $new_instance['staff_item_link_nine'] ) : '';
$instance['staff_item_link_ten'] = ( ! empty( $new_instance['staff_item_link_ten'] ) ) ? strip_tags( $new_instance['staff_item_link_ten'] ) : '';

$instance['staff_item_eleven'] = ( ! empty( $new_instance['staff_item_eleven'] ) ) ? strip_tags( $new_instance['staff_item_eleven'] ) : '';
$instance['staff_item_tweleve'] = ( ! empty( $new_instance['staff_item_tweleve'] ) ) ? strip_tags( $new_instance['staff_item_tweleve'] ) : '';
$instance['staff_item_thirteen'] = ( ! empty( $new_instance['staff_item_thirteen'] ) ) ? strip_tags( $new_instance['staff_item_thirteen'] ) : '';
$instance['staff_item_fourteen'] = ( ! empty( $new_instance['staff_item_fourteen'] ) ) ? strip_tags( $new_instance['staff_item_fourteen'] ) : '';
$instance['staff_item_fifteen'] = ( ! empty( $new_instance['staff_item_fifteen'] ) ) ? strip_tags( $new_instance['staff_item_fifteen'] ) : '';
$instance['staff_item_sixteen'] = ( ! empty( $new_instance['staff_item_sixteen'] ) ) ? strip_tags( $new_instance['staff_item_sixteen'] ) : '';
$instance['staff_item_seventeen'] = ( ! empty( $new_instance['staff_item_seventeen'] ) ) ? strip_tags( $new_instance['staff_item_seventeen'] ) : '';
$instance['staff_item_eightteen'] = ( ! empty( $new_instance['staff_item_eightteen'] ) ) ? strip_tags( $new_instance['staff_item_eightteen'] ) : '';
$instance['staff_item_nineteen'] = ( ! empty( $new_instance['staff_item_nineteen'] ) ) ? strip_tags( $new_instance['staff_item_nineteen'] ) : '';
$instance['staff_item_twenty'] = ( ! empty( $new_instance['staff_item_twenty'] ) ) ? strip_tags( $new_instance['staff_item_twenty'] ) : '';

$instance['staff_item_link_eleven'] = ( ! empty( $new_instance['staff_item_link_eleven'] ) ) ? strip_tags( $new_instance['staff_item_link_eleven'] ) : '';
$instance['staff_item_link_tweleve'] = ( ! empty( $new_instance['staff_item_link_tweleve'] ) ) ? strip_tags( $new_instance['staff_item_link_tweleve'] ) : '';
$instance['staff_item_link_thirteen'] = ( ! empty( $new_instance['staff_item_link_thirteen'] ) ) ? strip_tags( $new_instance['staff_item_link_thirteen'] ) : '';
$instance['staff_item_link_fourteen'] = ( ! empty( $new_instance['staff_item_link_fourteen'] ) ) ? strip_tags( $new_instance['staff_item_link_fourteen'] ) : '';
$instance['staff_item_link_fifteen'] = ( ! empty( $new_instance['staff_item_link_fifteen'] ) ) ? strip_tags( $new_instance['staff_item_link_fifteen'] ) : '';
$instance['staff_item_link_sixteen'] = ( ! empty( $new_instance['staff_item_link_sixteen'] ) ) ? strip_tags( $new_instance['staff_item_link_sixteen'] ) : '';
$instance['staff_item_link_seventeen'] = ( ! empty( $new_instance['staff_item_link_seventeen'] ) ) ? strip_tags( $new_instance['staff_item_link_seventeen'] ) : '';
$instance['staff_item_link_eightteen'] = ( ! empty( $new_instance['staff_item_link_eightteen'] ) ) ? strip_tags( $new_instance['staff_item_link_eightteen'] ) : '';
$instance['staff_item_link_nineteen'] = ( ! empty( $new_instance['staff_item_link_nineteen'] ) ) ? strip_tags( $new_instance['staff_item_link_nineteen'] ) : '';
$instance['staff_item_link_twenty'] = ( ! empty( $new_instance['staff_item_link_twenty'] ) ) ? strip_tags( $new_instance['staff_item_link_twenty'] ) : '';


$instance['staff_item_twentyone'] = ( ! empty( $new_instance['staff_item_twentyone'] ) ) ? strip_tags( $new_instance['staff_item_twentyone'] ) : '';
$instance['staff_item_twentytwo'] = ( ! empty( $new_instance['staff_item_twentytwo'] ) ) ? strip_tags( $new_instance['staff_item_twentytwo'] ) : '';
$instance['staff_item_twentythree'] = ( ! empty( $new_instance['staff_item_twentythree'] ) ) ? strip_tags( $new_instance['staff_item_twentythree'] ) : '';
$instance['staff_item_twentyfour'] = ( ! empty( $new_instance['staff_item_twentyfour'] ) ) ? strip_tags( $new_instance['staff_item_twentyfour'] ) : '';
$instance['staff_item_twentyfive'] = ( ! empty( $new_instance['staff_item_twentyfive'] ) ) ? strip_tags( $new_instance['staff_item_twentyfive'] ) : '';
$instance['staff_item_twentysix'] = ( ! empty( $new_instance['staff_item_twentysix'] ) ) ? strip_tags( $new_instance['staff_item_twentysix'] ) : '';
$instance['staff_item_twentyseven'] = ( ! empty( $new_instance['staff_item_twentyseven'] ) ) ? strip_tags( $new_instance['staff_item_twentyseven'] ) : '';
$instance['staff_item_twentyeight'] = ( ! empty( $new_instance['staff_item_twentyeight'] ) ) ? strip_tags( $new_instance['staff_item_twentyeight'] ) : '';
$instance['staff_item_twentynine'] = ( ! empty( $new_instance['staff_item_twentynine'] ) ) ? strip_tags( $new_instance['staff_item_twentynine'] ) : '';
$instance['staff_item_thirty'] = ( ! empty( $new_instance['staff_item_thirty'] ) ) ? strip_tags( $new_instance['staff_item_thirty'] ) : '';

$instance['staff_item_link_twentyone'] = ( ! empty( $new_instance['staff_item_link_twentyone'] ) ) ? strip_tags( $new_instance['staff_item_link_twentyone'] ) : '';
$instance['staff_item_link_twentytwo'] = ( ! empty( $new_instance['staff_item_link_twentytwo'] ) ) ? strip_tags( $new_instance['staff_item_link_twentytwo'] ) : '';
$instance['staff_item_link_twentythree'] = ( ! empty( $new_instance['staff_item_link_twentythree'] ) ) ? strip_tags( $new_instance['staff_item_link_twentythree'] ) : '';
$instance['staff_item_link_twentyfour'] = ( ! empty( $new_instance['staff_item_link_twentyfour'] ) ) ? strip_tags( $new_instance['staff_item_link_twentyfour'] ) : '';
$instance['staff_item_link_twentyfive'] = ( ! empty( $new_instance['staff_item_link_twentyfive'] ) ) ? strip_tags( $new_instance['staff_item_link_twentyfive'] ) : '';
$instance['staff_item_link_twentysix'] = ( ! empty( $new_instance['staff_item_link_twentysix'] ) ) ? strip_tags( $new_instance['staff_item_link_twentysix'] ) : '';
$instance['staff_item_link_twentyseven'] = ( ! empty( $new_instance['staff_item_link_twentyseven'] ) ) ? strip_tags( $new_instance['staff_item_link_twentyseven'] ) : '';
$instance['staff_item_link_twentyeight'] = ( ! empty( $new_instance['staff_item_link_twentyeight'] ) ) ? strip_tags( $new_instance['staff_item_link_twentyeight'] ) : '';
$instance['staff_item_link_twentynine'] = ( ! empty( $new_instance['staff_item_link_twentynine'] ) ) ? strip_tags( $new_instance['staff_item_link_twentynine'] ) : '';
$instance['staff_item_link_thirty'] = ( ! empty( $new_instance['staff_item_link_thirty'] ) ) ? strip_tags( $new_instance['staff_item_link_thirty'] ) : '';


return $instance;
}
} // Class wpb_widget ends here


// Register and load the widget
function wpb_load_widget() {
  register_widget( 'staff_widget' );
  register_widget( 'have_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

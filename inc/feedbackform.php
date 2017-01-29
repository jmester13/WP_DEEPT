// <?php 

// // team registration function for outputting CF7 data into team custom posts

// function form_to_cpt($cfdata) {
// 	$formdata = WPCF7_Submission::get_instance();
// 		if ( $formdata ) {
// 	    $posted_data = $formdata->get_posted_data();
// 	}
// 	$newpost = array(
// 	    'post_type' => 'testimonial',
// 	    'post_title' => sanitize_text_field($formdata['testimonial-name']),
// 	);
	
// 	$newpostid = wp_insert_post($newpost);
// 	if ($newpostid) {

// 	// TEAM INFORMATION

// 		// Updates with number update_post_meta( $newpostid, 'program', (isset($formdata['program'])) );
// 		// NO DB UPDATE update_post_meta( $newpostid, 'program', array_map($formdata['program']) );
// 		// kills form submission update_post_meta( $newpostid, 'program', sanitize_post_field($formdata['program']));	

// 		//update_post_meta( $newpostid, 'program', array_map( 'sanitize_text_field',['program'] ));
// 		update_post_meta( $newpostid, 'email-4', sanitize_email($formdata['email-4']));
// 		 // update_post_meta( $newpostid, 'menu-859', sanitize_menu($formdata['menu-859']));	
		
// 		update_post_meta( $newpostid, 'testimonial-name', sanitize_text_field($formdata['testimonial-name']));	
// 		// update_post_meta( $newpostid, 'date-993', sanitize_tdate($formdata['date-993']));	

// 	}
// }

// add_action('wpcf7_before_send_mail', 'form_to_cpt');?>
<?php

// MAIL CHIMP

function wpcf7_send_to_mailchimp($cfdata) {

//Get Data from Contact Form 7
$formtitle = $cfdata->title;
$formdata = $cfdata->posted_data;
$name = explode(" ", $formdata['your-name']);
$send_this_email = $formdata['your-email'];

// name vars for MailChimp
$mergeVars = array(
'FNAME'=>$name[0],
'LNAME'=>$name[1]
);

// grab an API Key from http://admin.mailchimp.com/account/api/
$api = new MCAPI('4b0629bdf4f4657c0fc8d3305181ad32-us8');

// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
// Click the "settings" link for the list - the Unique Id is at the bottom of that page.
$list_id = "42f7f8354d"; 

// Send the form content to MailChimp List without double opt-in
$retval = $api->listSubscribe($list_id, $send_this_email, $mergeVars, 'html', false);

//

//Get Data from Contact Form 7
$formtitle = $cfdata->title;
$formdata = $cfdata->posted_data;
$name = explode(" ", $formdata['doctor-name']);
$send_this_email = $formdata['doctor-email'];

// name vars for MailChimp
$mergeVars = array(
'FNAME'=>$name[0],
'LNAME'=>$name[1]
);

// grab an API Key from http://admin.mailchimp.com/account/api/
$api = new MCAPI('4b0629bdf4f4657c0fc8d3305181ad32-us8');

// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
// Click the "settings" link for the list - the Unique Id is at the bottom of that page.
$list_id_doctor = "fc5422f9a5"; 

// Send the form content to MailChimp List without double opt-in
$retval = $api->listSubscribe($list_id_doctor, $send_this_email, $mergeVars, 'html', false);

}


// Add Hook to CF7 Mail Sent
add_action('wpcf7_mail_sent', 'wpcf7_send_to_mailchimp', 1);

?>
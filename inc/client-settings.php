<?php
/**
* USM - Custom Admin Page
*
* @author Griffen Fargo
* @var Social: custom_fb_url, custom_tw_url, custom_li_url
* @var Contact: contact_phone, contact_fax, contact_email, office_address
*/

//register settings
function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}

//add settings page to menu
function add_settings_page() {
    add_menu_page( __( 'Client Settings' ), __( 'Client Settings' ), 'manage_options', 'settings', 'theme_settings_page');
}

//add actions
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

//define your variables
$color_scheme = array('default','blue','green',);

//start settings page
function theme_settings_page() {

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

//get variables outside scope
global $color_scheme;
?>

<div>

<div id="icon-options-general"></div>
<h2><?php _e( 'Client Settings' ) //your admin panel title ?></h2>

<?php
//show saved options message
if ( false !== $_REQUEST['updated'] ) : ?>
<div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
<?php endif; ?>

<form method="post" action="options.php">

<?php settings_fields( 'theme_settings' ); ?>
<?php $options = get_option( 'theme_settings' ); ?>

<table>


<!-- Office Settings - Admin Page Output -->
<tr>
    <th scope="row"><?php _e( '' ); ?></th>
    <td><h2> Office One Settings </h2>
        <p>Office One Information is Featured Globally in Header &amp; Footer</p>
    </td>
</tr>
<tr></tr>

<!-- Option 1: Office One Name -->
<tr valign="top">
<th scope="row"><?php _e( 'Name' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_name]" type="text" size="36" name="theme_settings[office_one_name]"  placeholder="Name" value="<?php esc_attr_e( $options['office_one_name'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office One Address -->
<tr valign="top">
<th scope="row"><?php _e( 'Street Address' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_address]" type="text" size="36" name="theme_settings[office_one_address]"  placeholder="Street Address" value="<?php esc_attr_e( $options['office_one_address'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office One Town State Zip-->
<tr valign="top">
<th scope="row"><?php _e( 'Town State Zip' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_tsz]" type="text" size="36" name="theme_settings[office_one_tsz]"  placeholder="Town State Zip" value="<?php esc_attr_e( $options['office_one_tsz'] ); ?>" />
</td>
</tr>
<!-- Option 1: Office One Map Location -->
<tr valign="top">
<th scope="row"><?php _e( 'Map Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_maploc]" type="text" size="36" name="theme_settings[office_one_maploc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_one_maploc'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office One Contact Form -->
<tr valign="top">
<th scope="row"><?php _e( 'Contact Form' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_contact]" type="text" size="36" name="theme_settings[office_one_contact]"  placeholder="Contact Form" value="<?php esc_attr_e( $options['office_one_contact'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office one MapMaker Location -->
<tr valign="top">
<th scope="row"><?php _e( 'MapMaker Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_mapmakerloc]" type="text" size="36" name="theme_settings[office_one_mapmakerloc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_one_mapmakerloc'] ); ?>" />
</td>
</tr>



<!-- Option 1: Office One Email -->
<tr valign="top">
    <th scope="row"><?php _e( 'Email' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_email]" type="text" size="36" name="theme_settings[office_one_email]" placeholder="info@yourdomain.com" value="<?php esc_attr_e( $options['office_one_email'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office One Phone -->
<tr valign="top">
<th scope="row"><?php _e( 'Phone' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_phone]" type="text" size="36" name="theme_settings[office_one_phone]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_one_phone'] ); ?>" />
</td>
</tr>


<!-- Option 1: Office One Fax -->
<tr valign="top">
<th scope="row"><?php _e( 'Fax' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_fax]" type="text" size="36" name="theme_settings[office_one_fax]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_one_fax'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office Hours -->
<tr valign="top">
<th scope="row"><?php _e( 'Office Hours' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_one_hours]" type="text" size="36" name="theme_settings[office_one_hours]"  placeholder="Enter Hours" value="<?php esc_attr_e( $options['office_one_hours'] ); ?>" />
</td>

</tr>

<tr>
    <th scope="row"><?php _e( '' ); ?></th>
    <td><h2> Office Two Settings </h2>
        <p>Office Two Information is Featured Globally in Header &amp; Footer</p>
    </td>
</tr>
<tr></tr>


<!-- Option 2: Office Two Name -->
<tr valign="top">
<th scope="row"><?php _e( 'Name' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_name]" type="text" size="36" name="theme_settings[office_two_name]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_two_name'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office Two Address -->
<tr valign="top">
<th scope="row"><?php _e( 'Address' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_addy]" type="text" size="36" name="theme_settings[office_two_addy]"  placeholder="Address" value="<?php esc_attr_e( $options['office_two_addy'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office two Town State Zip-->
<tr valign="top">
<th scope="row"><?php _e( 'Town State Zip' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_tsz]" type="text" size="36" name="theme_settings[office_two_tsz]"  placeholder="Town State Zip" value="<?php esc_attr_e( $options['office_two_tsz'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office Two Map Location -->
<tr valign="top">
<th scope="row"><?php _e( 'Map Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_maploc]" type="text" size="36" name="theme_settings[office_two_maploc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_two_maploc'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office two Contact Form -->
<tr valign="top">
<th scope="row"><?php _e( 'Contact Form' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_contact]" type="text" size="36" name="theme_settings[office_two_contact]"  placeholder="Contact Form" value="<?php esc_attr_e( $options['office_two_contact'] ); ?>" />
</td>
</tr>


<!-- Option 1: Office Two MapMaker Location -->
<tr valign="top">
<th scope="row"><?php _e( 'MapMaker Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_mapmakerloc]" type="text" size="36" name="theme_settings[office_two_mapmakerloc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_two_mapmakerloc'] ); ?>" />
</td>
</tr>


<!-- Option 2: Office Two Email -->
<tr valign="top">
    <th scope="row"><?php _e( 'Email' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_email]" type="text" size="36" name="theme_settings[office_two_email]" placeholder="info@yourdomain.com" value="<?php esc_attr_e( $options['office_two_email'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office Two Phone -->
<tr valign="top">
<th scope="row"><?php _e( 'Phone' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_phone]" type="text" size="36" name="theme_settings[office_two_phone]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_two_phone'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office Two Fax -->
<tr valign="top">
<th scope="row"><?php _e( 'Fax' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_fax]" type="text" size="36" name="theme_settings[office_two_fax]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_two_fax'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office Two Hours -->
<tr valign="top">
<th scope="row"><?php _e( 'Office Hours' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_two_hours]" type="text" size="36" name="theme_settings[office_two_hours]"  placeholder="Enter Hours" value="<?php esc_attr_e( $options['office_two_hours'] ); ?>" />
</td>

</tr>

<tr></tr>
<tr>
    <th scope="row"><?php _e( '' ); ?></th>
    <td><h2> Office Three Settings </h2>
        <p>Office Three Information is Featured Globally in Header &amp; Footer</p>
    </td>
</tr>
<tr></tr>

    <!-- Option 2: Office three Name -->
<tr valign="top">
<th scope="row"><?php _e( 'Name' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_name]" type="text" size="36" name="theme_settings[office_three_name]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_three_name'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office three Address -->
<tr valign="top">
<th scope="row"><?php _e( 'Address' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_addly]" type="text" size="36" name="theme_settings[office_three_addly]"  placeholder="Address" value="<?php esc_attr_e( $options['office_three_addly'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office three Town State Zip-->
<tr valign="top">
<th scope="row"><?php _e( 'Town State Zip' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_tsz]" type="text" size="36" name="theme_settings[office_three_tsz]"  placeholder="Town State Zip" value="<?php esc_attr_e( $options['office_three_tsz'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office Three Map Location -->
<tr valign="top">
<th scope="row"><?php _e( 'Map Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_maploc]" type="text" size="36" name="theme_settings[office_three_maploc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_three_maploc'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office three Contact Form -->
<tr valign="top">
<th scope="row"><?php _e( 'Contact Form' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_contact]" type="text" size="36" name="theme_settings[office_three_contact]"  placeholder="Contact Form" value="<?php esc_attr_e( $options['office_three_contact'] ); ?>" />
</td>
</tr>

<!-- Option 1: Office Three MapMaker Location -->
<tr valign="top">
<th scope="row"><?php _e( 'MapMaker Location' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_mapmakerloc]" type="text" size="36" name="theme_settings[office_three_mapmakerloc]"  placeholder="Map Location" value="<?php esc_attr_e( $options['office_three_mapmakerloc'] ); ?>" />
</td>
</tr>


<!-- Option 2: Office three Email -->
<tr valign="top">
    <th scope="row"><?php _e( 'Email' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_email]" type="text" size="36" name="theme_settings[office_three_email]" placeholder="info@yourdomain.com" value="<?php esc_attr_e( $options['office_three_email'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office three Phone -->
<tr valign="top">
<th scope="row"><?php _e( 'Phone' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_phone]" type="text" size="36" name="theme_settings[office_three_phone]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_three_phone'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office three Fax -->
<tr valign="top">
<th scope="row"><?php _e( 'Fax' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_fax]" type="text" size="36" name="theme_settings[office_three_fax]"  placeholder="(000)-000-0000" value="<?php esc_attr_e( $options['office_three_fax'] ); ?>" />
</td>
</tr>

<!-- Option 2: Office three Hours -->
<tr valign="top">
<th scope="row"><?php _e( 'Office Hours' ); ?></th>
<td><input class="regular-text" id="theme_settings[office_three_hours]" type="text" size="36" name="theme_settings[office_three_hours]"  placeholder="Enter Hours" value="<?php esc_attr_e( $options['office_three_hours'] ); ?>" />
</td>

</tr>





<tr>
    <th scope="row"><?php _e( '' ); ?></th>
    <td>
        <h2> Social Settings </h2>
        <p>Social Information is Featured Globally in Header &amp; Footer</p>
    </td>
</tr>
<!-- Option 4: Social Networks -->
<tr valign="top">
<th scope="row"><?php _e( 'Facebook' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_fb_url]" type="text" size="36" name="theme_settings[custom_fb_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_fb_url'] ); ?>" />
</td>
</tr>

<tr valign="top">
    <th scope="row"><?php _e( 'Twiiter' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_tw_url]" type="text" size="36" name="theme_settings[custom_tw_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_tw_url'] ); ?>" />
</label></td>
</tr>

<tr valign="top">
    <th scope="row"><?php _e( 'Linkedin' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_li_url]" type="text" size="36" name="theme_settings[custom_li_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_li_url'] ); ?>" />
</td>
</tr>

<tr valign="top">
    <th scope="row"><?php _e( 'Pinterest' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_pt_url]" type="text" size="36" name="theme_settings[custom_pt_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_pt_url'] ); ?>" />
</td>
</tr>

<tr valign="top">
    <th scope="row"><?php _e( 'Google Plus' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_gp_url]" type="text" size="36" name="theme_settings[custom_gp_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_gp_url'] ); ?>" />
</td>
</tr>

<tr valign="top">
    <th scope="row"><?php _e( 'Instagram' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_insta_url]" type="text" size="36" name="theme_settings[custom_insta_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_insta_url'] ); ?>" />
</td>
</tr>


<tr valign="top">
    <th scope="row"><?php _e( 'Youtube' ); ?></th>
<td><input class="regular-text" id="theme_settings[custom_yt_url]" type="text" size="36" name="theme_settings[custom_yt_url]" placeholder="URL of Social Network" value="<?php esc_attr_e( $options['custom_yt_url'] ); ?>" />
</td>
</tr>


</table>

<p><input class="button button-primary" name="submit" id="submit" value="Save Changes" type="submit"></p>
</form>

<div style="margin: 15px auto; border-bottom: 1px dotted #333; border-top: 1px dotted #333;">
    <h2 style="color: #012B5D; margin-top: 15px;">Need Help?</h2>
    <p style="color: #333;">This page allows you to update various elements of your Website with branch specific info.  Update Social Network URLs, Homepage Headings &amp; Call to Actions, and Office Information.</p>
    <h4><i>Feel free to reach out to <a target="_blank" alt="Support" href="mailto:joe@joemester.com">Joe Mester</a> for additional feature requests!</i></h4>
</div>

</div><!-- END wrap -->

<?php
}
//sanitize and validate
function options_validate( $input ) {
    global $select_options, $radio_options;
    if ( ! isset( $input['option1'] ) )
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
    if ( ! isset( $input['radioinput'] ) )
        $input['radioinput'] = null;
    if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
        $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
    return $input;
}
?>
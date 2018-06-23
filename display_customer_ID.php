<?php
/*
Plugin Name: Display Customer ID
Plugin URI: https://github.com/yashitamittal11/unique_customer_id/
Description: Display a unique customer ID whilst user are logged in
Version: 1.0
Author URI: http://www.yashitamittal.com
Text Domain: ym-customer
Domain Path: /languages
License:     GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// load text domain
function myplugin_load_textdomain() {

	load_plugin_textdomain( 'cust_id', false, plugin_dir_path( __FILE__ ) . 'languages/' );

}
add_action( 'plugins_loaded', 'myplugin_load_textdomain' );

/*
 * This function displays the user Id for the logged in user
 */
function display_logged_in_user_ID() {
    global $current_user;
    get_currentuserinfo();
    
    //Display the user ID only if user is logged in 
    if ( is_user_logged_in() ) {
        echo 'User ID: ' . $current_user->ID . "\n";
    }
} 

//Shortcode to display the ID for logged in user
add_shortcode('display_user_Id', 'display_logged_in_user_ID');

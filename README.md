# unique_customer_id
Display a unique customer ID whilst user are logged in

#Use shortcode on any Post/Pages to display the user id of the logged in user
[display_user_Id]

#The function in the plugin can be called anywhere like functions.php to display the user Id of the logged in user
#Eg.

function ym_show_user_Id() {
    display_logged_in_user_ID();
}
add_action('wp_head', 'ym_show_user_Id');

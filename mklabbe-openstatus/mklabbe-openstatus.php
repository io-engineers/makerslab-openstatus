<?php
/**
 * Plugin Name:   Makerslab.be Open Status
 * Plugin URI:    https://github.com/io-engineers/makerslab-openstatus
 * Text Domain:   mklabbe-openstatus
 * Description:   Shows on the Makerslab.be website if the Makerslab De Shack builing is open or closed for public
 * Author:        Bram Andelhofs
 * Version:       0.0.1
 * Licence:       GPLv3+
 * Author URI:    https://www.linkedin.com/in/ioengineers/
 * Last Change:   2021-07-03
 */

//Add Makerslab Settings Page to WP Settings Menu
function mklabbe_openstatus_menu(){
    add_options_page( 
        'Makerslab Open Status Plugin', 
        'Makerslab Open Status', 
        'manage_options', 
        'mklabbe-openstatus', 
        'mklabbe_openstatus_options_page');
}

add_action( 'admin_menu','mklabbe_openstatus_menu' );

function mklabbe_openstatus_options_page() {

    if(!current_user_can( 'manage_options')){
        wp_die( 'You do not have enough permissions to view this page', 'Error: No Permission');
    }
    echo "<h1>Makerslab Open Status Plugin - Settigs</h1>";

}

?>
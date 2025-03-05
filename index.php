<?php 


/*
 * Plugin Name:       Add Option Page
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rajvinder singh
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define("EMS_PLUGIN_PATH", plugin_dir_path(__FILE__));

add_action('admin_menu', 'cp_add_menu_page');

function cp_add_menu_page() {
 
    add_menu_page('Option Page Plugin', 'Theme Option', 'manage_options', 'theme-option-page','option_page_handle_function','dashicons-admin-home', 20);

    add_submenu_page('theme-option-page','Menu Page', 'Menu Page', 'manage_options', 'theme-option-page','option_page_handle_function');  
    
    add_submenu_page('theme-option-page','Sub Menu Page', 'Sub Menu Page', 'manage_options', 'sub-theme-option-page-two','option_sub_menu_page_handle_function');    

}
 
 

//option page 
function option_page_handle_function(){ 
    require_once(EMS_PLUGIN_PATH.'includes/add-employee.php');
}
 
 function option_sub_menu_page_handle_function(){
    require_once(EMS_PLUGIN_PATH.'includes/list-employee.php');

 }
 
//start code php


//trigger on plugin activation

register_activation_hook(__FILE__, 'create_table_data');


function create_table_data(){
    
    global $wpdb; 
    
    $table_prefix = $wpdb->prefix; 
    
//    echo $table_prefix; 
    
    $sql = "CREATE TABLE `{$table_prefix}emp_form_data` (
          `id` int(50) NOT NULL AUTO_INCREMENT,
          `name` varchar(120) DEFAULT NULL,
          `email` varchar(80) DEFAULT NULL,
          `phoneNo` varchar(50) DEFAULT NULL,
          `gender` enum('male','female','other') DEFAULT NULL,
          `designation` varchar(50) DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    
    include_once ABSPATH. "wp-admin/includes/upgrade.php";
    
    dbDelta($sql);
}

?>
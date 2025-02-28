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

add_action('admin_menu', 'cp_add_menu_page');

function cp_add_menu_page() {
 
    add_menu_page('Option Page Plugin', 'Theme Option', 'manage_options', 'theme-option-page','option_page_handle_function','dashicons-admin-home', 20);
}
 
function option_page_handle_function(){
?>
    <section id="option_page_wordpress_plug">
        <div><h1>Theme Option Page</h1></div>
    </section>
    
<?php }



?>
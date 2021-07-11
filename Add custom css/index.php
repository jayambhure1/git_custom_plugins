<?php
/**
 * Plugin Name: Add Custom CSS
 * Plugin URI:
 * Description: This plugin designed by jayambhure1 .
 * * Version: 1.0
 * Author: jayambhure1
 * Author URI:
 */

add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
function my_plugin_assets() {
    wp_register_style( 'my-custom-css', plugins_url( 'custom.css' , __FILE__ ) );
    wp_enqueue_style( 'my-custom-css' );

}


?>
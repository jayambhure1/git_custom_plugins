<?php
/**
 * Plugin Name: Add Custom CSS
 * Plugin URI: 
 * Description: This plugin designed by nadsoft developer .
 * * Version: 1.0
 * Author: Dhananjay Ambhure
 * Author URI: 
 */
 
add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );
function my_plugin_assets() {
    wp_register_style( 'custom-nadsoft', plugins_url( 'custom-new.css' , __FILE__ ) );
    wp_enqueue_style( 'custom-nadsoft' );
  
}





?>
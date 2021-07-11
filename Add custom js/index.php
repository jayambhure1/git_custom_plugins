<?php
/**
 * Plugin Name: Add Custom JS
 * Plugin URI:
 * Description: This plugin designed by jayambhure1.
 * * Version: 1.0
 * Author: jayambhure1
 * Author URI:
 */

function my_enqueue1() {
     wp_enqueue_script('jquery-custom', plugin_dir_url(__FILE__) . 'custom.js','' , '2.1' , true);
}

add_action('wp_enqueue_scripts', 'my_enqueue1');

?>
<?php
/*
Plugin Name: Child Theme Plugin
Description: A place to store your custom code when using a premium child theme you'd rather not edit.
Version: 0.1.0
Author: Stephen James
Author URI: https://divi.space
*/

function ds_add_some_scripts() {
    wp_enqueue_script( 'ds-js-code', get_template_directory_uri() . '/custom-code/custom.js', array( 'jquery' ));
    wp_register_style( 'custom', get_template_directory_uri() . '/custom-code/custom.css' );
    wp_enqueue_style( 'custom' );
}

add_action( 'wp_enqueue_scripts', 'ds_add_some_scripts' );

require( plugin_dir_path( __FILE__ ) . '/custom-code/custom.php');

/* 
Use the files in the 'custom-code' folder to add your own code...

js = custom.js
css = custom.css
php = custom.php
*/

?>

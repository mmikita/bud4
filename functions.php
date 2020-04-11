<?php

function getResources(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), NULL, true );
   
   wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css', false, NULL, 'all' );


}

add_action('wp_enqueue_scripts', 'getResources');

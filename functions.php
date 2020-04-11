<?php

function globalSettings() {
    include( get_template_directory(). '/styles.php' );
}

function getResources(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), NULL, true );
   wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css', false, NULL, 'all' );
}


function bud4Settings($wp_customize){

//ustawienia globalne
    $wp_customize->add_section('globalSettings', array(
'title' => 'Ustawienia globalne'
    ));

$wp_customize->add_setting('content_width', array(
        'default' => '1200'
            ));

            $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
            globalSettings', array(
        'label' => 'szerokość contentu (px)',
        'section' => 'globalSettings',
        'settings' => 'content_width'
            )));







    $wp_customize->add_section('logo_section', array(
'title' => 'ustawienia logo'
    ));

    $wp_customize->add_setting('logo_src');
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, '
    logo_settings', array(
'label' => 'Obrazek',
'section' => 'logo_section',
'settings' => 'logo_src'
    )));  


    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    logo_settings', array(
'label' => 'Obrazek',
'section' => 'logo_section',
'settings' => 'logo_src'
    )));

}
   

add_action('wp_enqueue_scripts', 'getResources');
add_action('customize_register', 'bud4Settings');
add_action('wp_head', 'globalSettings');


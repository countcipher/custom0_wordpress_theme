<?php

//GET ALL STYLES
function ch_get_styles(){
    wp_register_style('ch_custom_style', get_theme_file_uri().'/assets/main.css');

    wp_enqueue_style('ch_custom_style');
}

add_action('wp_enqueue_scripts', 'ch_get_styles');

//THEME SUPPORT
function custom0_theme_support(){
    //Featured Image Support
    add_theme_support('post-thumbnails');

    //Menu Support
    register_nav_menus([
        'primary'   =>  __('Primary Menu')

    ]);

    //Custom Logo Suppport
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'custom0_theme_support');

//ADD IN SIDEBAR TO FOOTER
function create_footer_sidebar(){
    register_sidebar([
        'name'          =>  __('Footer Sidebar'),
        'id'            =>  'footer_sidebar',
        'before_widget' =>  '<div class="footer_sidebar_widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h1>',
        'after_title'   =>  '</h1>'
    ]);
}

add_action('widgets_init', 'create_footer_sidebar');

//ADD TO CUSTOMIZER
function modify_customizer($wp_customize){
    //Create a new section - this one will be called 'Banner'
    //The following is for controlling any dynamic text
    $wp_customize->add_section('banner', [
        'title'             =>  __('Banner Heading', 'custom0'),
        'description'       =>  sprintf(__('Options for Homepage Banner'), 'custom0'),
        'priority'          =>  2
    ]);

    //Heading Setting
    $wp_customize->add_setting('banner_heading', [
        'default'       =>  _x('Banner Heading', 'custom0'),
        'type'          =>  'theme_mod'
    ]);

    //Heading Conntrol
    $wp_customize->add_control('banner_heading', [
        'label'         =>  __('Heading', 'custom0'),
        'section'       =>  'banner',
        'priority'      =>  1
    ]);
    //==================================================
    //Tagline Setting
    $wp_customize->add_setting('banner_tagline', [
        'default'       =>  _x('Tagline Goes Here', 'custom0'),
        'type'          =>  'theme_mod'
    ]);

    //Tagline Conntrol
    $wp_customize->add_control('banner_tagline', [
        'label'         =>  __('Tagline', 'custom0'),
        'section'       =>  'banner',
        'priority'      =>  2
    ]);
    //====================================================
    //The following is for implementing an image
    //Background Image Setting
    $wp_customize->add_setting('banner_image', [
        'default'       =>  '',
        'type'          =>  'theme_mod'
    ]);

    //Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', [
        'label'     =>  __('Background Image', 'custom0'),
        'section'   =>  'banner',
        'settings'  =>  'banner_image'
    ]));
}

add_action('customize_register', 'modify_customizer');
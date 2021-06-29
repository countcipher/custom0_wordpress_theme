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

//CUSTOM POST TYPE
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Tests', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Test', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Test CPT', 'text_domain' ),
		'name_admin_bar'        => __( 'Test CPT', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Test', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-replies',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        //CHANGES EDITOR TO GUTENBERG VERSION
        //'show_in_rest'          =>  true,
        //'supports'              =>  array('editor')
	);
	register_post_type( 'test', $args );

}
add_action( 'init', 'custom_post_type', 0 );
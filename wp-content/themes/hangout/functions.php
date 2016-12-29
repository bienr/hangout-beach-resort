<?php

function hangout_styles() {
    // Bootstrap
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    // Stroke Gap Icons
    wp_enqueue_style('stroke-gap-style', get_template_directory_uri() . '/vendors/Stroke-Gap-Icons-Webfont/style.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.min.css');

    // Owl Carousel
    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.css');
    wp_enqueue_style('jq-ui-style', get_template_directory_uri() . '/vendors/jquery-ui-1.11.4/jquery-ui.min.css');

    // Main Style
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('override', get_template_directory_uri() . '/css/override.css');
}
add_action('wp_enqueue_scripts', 'hangout_styles');

// Load jQuery with version incuded in the theme
function hangout_scripts_jquery() {
    // Deregister the included library
    wp_deregister_script('jquery');

    // Register the library again from relative path
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), null, true);
    wp_enqueue_script('jquery');
}
// Add jquery with increased priority
add_action('wp_enqueue_scripts', 'hangout_scripts_jquery', 5);

// Load js components
function hangout_scripts_components() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jq-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), null, true);

    // Register owl carousel components
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-scroll', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-zebradate', get_template_directory_uri() . '/js/zebra_datepicker.js', array('jquery'), null, true);

    // Register appear
    wp_enqueue_script('jq-appear', get_template_directory_uri() . '/vendors/jquery-appear/jquery.appear.js', array('jquery'), null, true);

    // Register countTo
    wp_enqueue_script('jq-countto', get_template_directory_uri() . '/vendors/jquery-countTo/jquery.countTo.js', array('jquery'), null, true);
    wp_enqueue_script('jq-form', get_template_directory_uri() . '/js/jquery.form.js', array('jquery'), null, true);
    wp_enqueue_script('jq-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), null, true);
    wp_enqueue_script('jq-mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), null, true);
    wp_enqueue_script('jq-ui', get_template_directory_uri() . '/vendors/jquery-ui-1.11.4/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hangout_scripts_components');

// Theme setup
function hangout_setup() {
    // Register navigation menus
    register_nav_menus(array(
        "header" => "Header Menu"
    ));

    // Add featured image support
    add_theme_support("post-thumbnails");

    // Add image sizes
    add_image_size("rooms-thumbnail", 270, 228, true);
    add_image_size("testi-thumbnail", 76, 76, true);
    add_image_size("room-lg-thumbnail", 800, 450, true);

    // Enable gallery post format
    add_theme_support("post-formats", array("gallery"));
}
add_action("after_setup_theme", "hangout_setup");

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// Remove wysiwyg editor for custom post types
function init_remove_editor_support(){
    $post_type = 'contacts';
    remove_post_type_support($post_type, 'editor');
}

// Add excerpt to the pages
function add_excerpts_to_pages() {
    add_post_type_support('page', 'excerpt');
}
add_action( 'init', 'add_excerpts_to_pages' );


// Create contacts post type
function create_post_type_contacts() {

    // UI labels for Contact post type
    $contact_labels = array(
        'name'                  => _x('Contacts', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Contact', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Header-Contacts', 'hangout'),
        'parent_item_colon'     => __('Parent Contact', 'hangout'),
        'all_items'             => __('All Contacts', 'hangout'),
        'view_item'             => __('View Contact', 'hangout'),
        'add_new_item'          => __('Add New Contact', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Contact', 'hangout'),
        'update_item'           => __('Update Contact', 'hangout'),
        'search_items'          => __('Search Contact', 'hangout')
    );

    // Set other options for Contact post type
    $contact_args = array(
        'label'                 => __('contacts', 'hangout'),
        'description'           => __('Contacts in the top bar', 'hangout'),
        'labels'                => $contact_labels,
        'supports'              => array('title', 'editor', 'revisions', 'custom-fields'),
        'taxonomies'            => array('contacts'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true
    );

    // Registering Contact post type
    register_post_type('contacts', $contact_args);
}
add_action('init', 'create_post_type_contacts');

// Create room post type
function create_post_type_rooms() {

    // UI labels for Room post type
    $room_labels = array(
        'name'                  => _x('Rooms', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Room', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Home-Rooms', 'hangout'),
        'parent_item_colon'     => __('Parent Room', 'hangout'),
        'all_items'             => __('All Rooms', 'hangout'),
        'view_item'             => __('View Room', 'hangout'),
        'add_new_item'          => __('Add New Room', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Room', 'hangout'),
        'update_item'           => __('Update Room', 'hangout'),
        'search_items'          => __('Search Room', 'hangout')
    );

    // Set other options for Room post type
    $room_args = array(
        'label'                 => __('rooms', 'hangout'),
        'description'           => __('Hangout rooms and suits', 'hangout'),
        'labels'                => $room_labels,
        'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies'            => array('facilities'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 6,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true
    );

    // Registering Room post type
    register_post_type('rooms', $room_args);
}
add_action('init', 'create_post_type_rooms');

// Let Room types be queryable
//function add_room_post_types_to_query($query) {
//    if (is_home() && $query->is_main_query()) {
//        $query->set('post_type', array('post', 'rooms'));
//    }
//    return $query;
//}

// Create stats post type
function create_post_type_stats() {

    // UI labels for Stats post type
    $stat_labels = array(
        'name'                  => _x('Stats', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Stat', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Home-Stats', 'hangout'),
        'parent_item_colon'     => __('Parent Stat', 'hangout'),
        'all_items'             => __('All Stats', 'hangout'),
        'view_item'             => __('View Stat', 'hangout'),
        'add_new_item'          => __('Add New Stat', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Stat', 'hangout'),
        'update_item'           => __('Update Stat', 'hangout'),
        'search_items'          => __('Search Stat', 'hangout')
    );

    // Set other options for Stat post type
    $stat_args = array(
        'label'                 => __('stats', 'hangout'),
        'description'           => __('Stats section under the rooms in home page', 'hangout'),
        'labels'                => $stat_labels,
        'supports'              => array('title', 'custom-fields'),
        'taxonomies'            => array('stats'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'show_in_admin_bar'     => false,
        'menu_position'         => 7,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false
    );

    // Registering Stat post type
    register_post_type('stats', $stat_args);
}
add_action('init', 'create_post_type_stats');

// Create Activities post type
function create_post_type_activities() {

    // UI labels for Activities post type
    $activity_labels = array(
        'name'                  => _x('Activities', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Activity', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Home-Activities', 'hangout'),
        'parent_item_colon'     => __('Parent Activity', 'hangout'),
        'all_items'             => __('All Activities', 'hangout'),
        'view_item'             => __('View Activity', 'hangout'),
        'add_new_item'          => __('Add New Activity', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Activity', 'hangout'),
        'update_item'           => __('Update Activity', 'hangout'),
        'search_items'          => __('Search Activity', 'hangout')
    );

    // Set other options for Activity post type
    $activity_args = array(
        'label'                 => __('activities', 'hangout'),
        'description'           => __('Activities under the About section in home page', 'hangout'),
        'labels'                => $activity_labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'            => array('activities'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'show_in_admin_bar'     => false,
        'menu_position'         => 8,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true
    );

    // Registering Activity post type
    register_post_type('activities', $activity_args);
}
add_action('init', 'create_post_type_activities');

// Create Testimonials post type
function create_post_type_testimonials() {

    // UI labels for Testimonials post type
    $testi_labels = array(
        'name'                  => _x('Testimonials', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Home-Testimonial', 'hangout'),
        'parent_item_colon'     => __('Parent Testimonial', 'hangout'),
        'all_items'             => __('All Testimonials', 'hangout'),
        'view_item'             => __('View Testimonial', 'hangout'),
        'add_new_item'          => __('Add New Testimonial', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Testimonial', 'hangout'),
        'update_item'           => __('Update Testimonial', 'hangout'),
        'search_items'          => __('Search Testimonial', 'hangout')
    );

    // Set other options for Testimonial post type
    $testi_args = array(
        'label'                 => __('testimonials', 'hangout'),
        'description'           => __('Testimonials under the Testimonials section in home page', 'hangout'),
        'labels'                => $testi_labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies'            => array('testimonials'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'show_in_admin_bar'     => false,
        'menu_position'         => 9,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false
    );

    // Registering Testimonials post type
    register_post_type('testimonials', $testi_args);
}
add_action('init', 'create_post_type_testimonials');

// Create Events post type
function create_post_type_events() {

    // UI labels for Events post type
    $events_labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Home-Events', 'hangout'),
        'parent_item_colon'     => __('Parent Event', 'hangout'),
        'all_items'             => __('All Events', 'hangout'),
        'view_item'             => __('View Event', 'hangout'),
        'add_new_item'          => __('Add New Event', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Event', 'hangout'),
        'update_item'           => __('Update Event', 'hangout'),
        'search_items'          => __('Search Event', 'hangout')
    );

    // Set other options for Event post type
    $events_args = array(
        'label'                 => __('events', 'hangout'),
        'description'           => __('Events under the Events section in home page', 'hangout'),
        'labels'                => $events_labels,
        'supports'              => array('title', 'editor', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('events'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 10,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true
    );

    // Registering Events post type
    register_post_type('events', $events_args);
}
add_action('init', 'create_post_type_events');


// Create Values post type
function create_post_type_values() {

    // UI labels for Values post type
    $values_labels = array(
        'name'                  => _x('Values', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Value', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('About-Values', 'hangout'),
        'parent_item_colon'     => __('Parent Value', 'hangout'),
        'all_items'             => __('All Values', 'hangout'),
        'view_item'             => __('View Value', 'hangout'),
        'add_new_item'          => __('Add New Value', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Value', 'hangout'),
        'update_item'           => __('Update Value', 'hangout'),
        'search_items'          => __('Search Value', 'hangout')
    );

    // Set other options for Event post type
    $values_args = array(
        'label'                 => __('values', 'hangout'),
        'description'           => __('Values under the About page', 'hangout'),
        'labels'                => $values_labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies'            => array('values'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => false,
        'menu_position'         => 11,
        'can_export'            => false,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false
    );

    // Registering Values post type
    register_post_type('values', $values_args);
}
add_action('init', 'create_post_type_values');

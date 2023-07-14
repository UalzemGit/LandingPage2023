<?php
  /**
   * ILI functions and definitions
   *
   * @link https://developer.wordpress.org/themes/basics/theme-functions/
   *
   * @package Ili
   */

  

function load_scripts(){
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true ); 

 
// GOOGLE FONTS:
  wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap' );




  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' ); // load bootstrap css (forever first)

  wp_enqueue_style( 'template', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' ); // load theme css

  wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/inc/jquery.fancybox.min.js', '', '1', true ); 

 
	

  

  
}
add_action('wp_enqueue_scripts', 'load_scripts' );


function ili_dentalis_config(){

  // BOOTSTRAP MENU
  require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php'; 

  register_nav_menus(
  array(
  'ili_main_menu' => 'Menu Principal',
  )
  );
  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'ili_dentalis_config', 0);



function logoAdmin() {
  echo "
  <style>
  body.login #login h1 a {
  background: url('http://localhost/amabank/wp-content/uploads/2022/06/logo-admin-amabank.png') no-repeat scroll center top transparent;
  height: 90px;
  width: 250px;
  }
  </style>
  ";
}

add_action("login_head", "logoAdmin");









//  custom post type para slider
function custom_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Slider', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Slider', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Slider', 'twentytwentyone' ),
        'all_items'           => __( 'All Slider', 'twentytwentyone' ),
        'view_item'           => __( 'View Slider', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Slider', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Slider', 'twentytwentyone' ),
        'update_item'         => __( 'Update Slider', 'twentytwentyone' ),
        'search_items'        => __( 'Search Slider', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'Slider', 'twentytwentyone' ),
        'description'         => __( 'Slider com Slick Slider', 'twentytwentyone' ),
        'labels'              => $labels,
       
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
     
        'taxonomies'          => array( 'slider_category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'slider', $args );
  
}
  

  
add_action( 'init', 'custom_post_type', 0 );
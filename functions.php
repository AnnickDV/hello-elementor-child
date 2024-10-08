<?php
// Your code to enqueue parent theme styles
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//function nav_menu(){
    //add_theme_support('menu');
    //register_nav_menus (array(
        //'header_menu"=>'Header Planty',
        //'footer_menu'=>'Footer Planty',
    //))
//}
// add_action ('after_setup_theme','planty_menu');

//add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
//function add_extra_item_to_nav_menu( $items, $args ) {
    //if (is_user_logged_in() && $args->menu === 'Header Planty') {
        //$items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="'. get_permalink( get_option('http://planty.local/wp-admin/index.php') ) .'">Admin</a></li>';
    //}
   // return $items;
//}
//?>
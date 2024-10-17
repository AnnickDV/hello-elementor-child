<?php
// Your code to enqueue parent theme styles
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="'. get_admin_url().'"><div class="admin">Admin</div></a></li>';
    }
    return $items;
}

?>
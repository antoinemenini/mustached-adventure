<?php
if ( function_exists('register_sidebar') )
    register_sidebar( array(
		'name' => __( 'Main Sidebar', 'MA' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'MA' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

    



if ( ! function_exists( 'MA_setup' ) ):
function MA_setup() {
	add_editor_style();
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
}
endif;
add_action( 'after_setup_theme', 'MA_setup' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

    
?>
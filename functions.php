<?php

	

function missgreeney_script_enqueue() {

	

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/missgreeney.css', array(), '1.0.0', 'all');

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/missgreeney.js', array(), '1.0.0', true);

	

}

add_action( 'wp_enqueue_scripts', 'missgreeney_script_enqueue');

function missgreeney_theme_setup() {

	

	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' ); 

	

	register_nav_menu('primary', 'Primary Header Navigation');

	register_nav_menu('secondary', 'Footer Navigation');

	

}

add_action('init', 'missgreeney_theme_setup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog right sidebar',
		'id'            => 'blog_right_1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
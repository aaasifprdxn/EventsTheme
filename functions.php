<?php
/**
* functions
 */

//linking to html
function eventtheme_enqueue_style() {
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [],filemtime(get_template_directory().'/style.css') );
} 
add_action( 'wp_enqueue_scripts', 'eventtheme_enqueue_style' );
//adding menu
add_theme_support('menus');

register_nav_menus(
		array(
				'top-menu'=> 'Top Menu Location',
				//'bottom-menu'=> 'Bottom Menu Location',
		)
);

//custom post type mobile
function events_post_type() { 
	$args = array(
			'labels' => array(
					'name' => 'Event',
					'singular_name' => 'Event',
					'add_new' => 'Add New Event',
					'add_new_item' => 'Add New Event',
					'edit_item' => 'Edit Event',
					'new_item' => 'New Event',
					'all_items' => 'All Event',
					'view_item' => 'View Event',
					'search_items' => 'Search Event',
					'not_found' =>  'No Event Found',
					'not_found_in_trash' => 'No Event found in Trash', 
					'parent_item_colon' => '',
					'menu_name' => 'Event',
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-button',
			'supports' => array('title'),
			'capability_type' => 'post',
      'taxonomies'  => array( 'category' ),
	);
	register_post_type('event', $args);
}
add_action('init', 'events_post_type');

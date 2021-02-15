<?php
/**
* functions
 */

//custom post type mobile
function events_post_type() { 
	$args = array(
			'labels' => array(
					'name' => 'Event',
					'singular_name' => 'Events',
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
			'supports' => array('custom-fields'),
			'capability_type' => 'post',
	);
	register_post_type('event', $args);
}
add_action('init', 'events_post_type');

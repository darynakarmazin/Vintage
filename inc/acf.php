<?php 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Sidebar',
		'menu_title'	=> 'Blog',
		'parent_slug'	=> 'theme-general-settings',
	));	
}

// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBL8ZFUG_x6n0XO0czZefjsK0_y_yKVA5s';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
<?php


//	Custom Post type Home Slider
	
//	======================================================================================================================== */

	
	add_action( 'init', 'slides' );
function slides() {
	register_post_type( 'slides',
		array(
			'labels' => array(
				'name' => __( 'Home Slides' ),
				'singular_name' => __( 'slide' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
		)
	);
}






//	Custom Post type Features

//	======================================================================================================================== */


	add_action( 'init', 'event' );
function event() {
    register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Event' ),
				'singular_name' => __( 'Event' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
		)
	);
}









//	Custom Post type Developers
	
//	======================================================================================================================== */

	
	add_action( 'init', 'team' );
function team() {
    register_post_type( 'team',
		array(
			'labels' => array(
				'name' => __( 'Teams' ),
				'singular_name' => __( 'teams' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
		)
	);
}





//	Custom Post type Partners
	
//	======================================================================================================================== */


/*
    add_action('init', 'partners_register');

function partners_register() {

    $labels = array(
        'name' => _x('Partners', 'post type general name'),
        'singular_name' => _x('Partner item', 'partner item'),
        'add_new' => _x('Add Partner', 'partner item'),
        'add_new_item' => __('Add New Item'),
        'edit_item' => __('Edit Item'),
        'new_item' => __('New Item'),
        'view_item' => __('View Item'),
        'search_items' => __('Search Items'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','page-attributes','comments','trackbacks'),
        'show_in_nav_menus' => true,
    );

    register_post_type( 'partners' , $args );

    register_taxonomy("partners_categories", array("partners"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Type", "rewrite" => true));


}*/
?>
<?php

namespace CustomPosts;

use WP_Query;


\CustomPosts\register();

function register()
{
	add_action( 'init', '\CustomPosts\custom_post_type', 0 );
	add_action( 'init', '\CustomPosts\custom_taxonomy_type', 0 );
}


function custom_post_type() {
    
	
	// Set UI labels for Custom Post Type Testimonials
	$labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'sarahford' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'sarahford' ),
		'menu_name'           => __( 'Testimonials', 'sarahford' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'sarahford' ),
		'all_items'           => __( 'All Testimonials', 'sarahford' ),
		'view_item'           => __( 'View Testimonial', 'sarahford' ),
		'add_new_item'        => __( 'Add New Testimonial', 'sarahford' ),
		'add_new'             => __( 'Add New', 'sarahford' ),
		'edit_item'           => __( 'Edit Testimonial', 'sarahford' ),
		'update_item'         => __( 'Update Testimonial', 'sarahford' ),
		'search_items'        => __( 'Search Testimonial', 'sarahford' ),
		'not_found'           => __( 'Not Found', 'sarahford' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sarahford' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'testimonial', 'sarahford' ),
		'description'         => __( 'Testimonials listings', 'sarahford' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
//		'taxonomies'          => array( 'collections' ),
		'rewrite' => array('slug' => 'blog','with_front' => false),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies' 		  => array( 'post_tag' ),
	);
	// Registering Custom Post Type Blogs
	register_post_type( 'testimonial', $args );	

	// Set UI labels for Custom Post Type Voiceovers
	$labels = array(
		'name'                => _x( 'Voiceover', 'Post Type General Name', 'sarahford' ),
		'singular_name'       => _x( 'Voiceover', 'Post Type Singular Name', 'sarahford' ),
		'menu_name'           => __( 'Voiceovers', 'sarahford' ),
		'parent_item_colon'   => __( 'Parent Voiceover', 'sarahford' ),
		'all_items'           => __( 'All Voiceovers', 'sarahford' ),
		'view_item'           => __( 'View Voiceover', 'sarahford' ),
		'add_new_item'        => __( 'Add New Voiceover', 'sarahford' ),
		'add_new'             => __( 'Add New', 'sarahford' ),
		'edit_item'           => __( 'Edit Voiceover', 'sarahford' ),
		'update_item'         => __( 'Update Voiceover', 'sarahford' ),
		'search_items'        => __( 'Search Voiceover', 'sarahford' ),
		'not_found'           => __( 'Not Found', 'sarahford' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sarahford' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'voiceover', 'sarahford' ),
		'description'         => __( 'Voiceovers listings', 'sarahford' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
//		'taxonomies'          => array( 'collections' ),
		'rewrite' => array('slug' => 'blog','with_front' => false),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies' 		  => array( 'vo_type' ),
	);
	// Registering Custom Post Type Blogs
	register_post_type( 'voiceover', $args );		
}

function custom_taxonomy_type()
{
    register_taxonomy(
        'voiceover_type',
        'voiceover',
        array(
            'labels'    => array(
                'name'  => 'Voiceover Type',
                'add_new_item'  => 'Add New Voiceover Type',
                'new_item_name' => 'New Voiceover Type'
            ),
            'show_ui'   => TRUE,
            'show_tagcloud' => FALSE,
            'hierarchical'  => TRUE
        )
    );
}
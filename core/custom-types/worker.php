<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'init', 'worker_post_types' );

	function worker_post_types() {
		register_post_type( 'worker',
			array(
				'label'       => null,
				'labels'      => array(
					'name'               => __( 'Worker', 'zankoav' ),
					'singular_name'      => __( 'Worker', 'zankoav' ),
					'add_new'            => __( 'Add Worker', 'zankoav' ),
					'add_new_item'       => __( 'Add Worker', 'zankoav' ),
					'edit_item'          => __( 'Edit Worker', 'zankoav' ),
					'new_item'           => __( 'New Worker', 'zankoav' ),
					'view_item'          => __( 'Show Worker', 'zankoav' ),
					'search_items'       => __( 'Search Worker', 'zankoav' ),
					'not_found'          => __( 'Not found', 'zankoav' ),
					'not_found_in_trash' => __( 'Not found in trash', 'zankoav' ),
					'parent_item_colon'  => '',
					'menu_name'          => __( 'Workers', 'zankoav' ),
				),
				'description' => '',
				'public'      => true,
				'menu_icon'   => 'dashicons-universal-access',
				'supports'    => array( 'title', 'editor', 'thumbnail' ),
				'has_archive' => true,
				'rewrite' => array( 'slug'=>'workers', 'with_front' => false ),
				'query_var'   => true,
			)
		);
	}

	add_action( 'init', 'technology_type_taxonomy' );
	function technology_type_taxonomy() {
		register_taxonomy( 'technology',
			array( 'worker', 'project' ),
			array(
				'label'                 => __( 'Technologies', 'zankoav' ),
				'labels'                => array(
					'name'              => __( 'Technologies', 'zankoav' ),
					'singular_name'     => __( 'Technology', 'zankoav' ),
					'search_items'      => __( 'Search Technology', 'zankoav' ),
					'all_items'         => __( 'All Technologies', 'zankoav' ),
					'view_item '        => __( 'Show Technology', 'zankoav' ),
					'parent_item'       => __( 'Parent Technology', 'zankoav' ),
					'parent_item_colon' => __( 'Parent Technology:', 'zankoav' ),
					'edit_item'         => __( 'Edit Technology', 'zankoav' ),
					'update_item'       => __( 'Update Technology', 'zankoav' ),
					'add_new_item'      => __( 'Add New Technology', 'zankoav' ),
					'menu_name'         => __( 'Technologies', 'zankoav' ),
				),
				'description'           => '',
				'public'                => false,
				'publicly_queryable'    => null,
				'show_in_nav_menus'     => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'show_tagcloud'         => true,
				'show_in_rest'          => null,
				'rest_base'             => null,
				'hierarchical'          => false,
				'update_count_callback' => '',
				'rewrite'               => true,
				'capabilities'          => array(),
				'meta_box_cb'           => null,
				'show_admin_column'     => false,
				'_builtin'              => false,
				'show_in_quick_edit'    => null,
			)
		);
	}
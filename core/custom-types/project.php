<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'init', 'project_post_types' );

	function project_post_types() {
		register_post_type( 'project', array(
				'label'       => null,
				'labels'      => array(
					'name'               => __( 'Project', 'zankoav' ),
					'singular_name'      => __( 'Project', 'zankoav' ),
					'add_new'            => __( 'Add Project', 'zankoav' ),
					'add_new_item'       => __( 'Add Project', 'zankoav' ),
					'edit_item'          => __( 'Edit Project', 'zankoav' ),
					'new_item'           => __( 'Add New Project', 'zankoav' ),
					'view_item'          => __( 'Show Project', 'zankoav' ),
					'search_items'       => __( 'Search Project', 'zankoav' ),
					'not_found'          => __( 'Not found', 'zankoav' ),
					'not_found_in_trash' => __( 'Not found in trash', 'zankoav' ),
					'menu_name'          => __( 'Projects', 'zankoav' ),
				),
				'public'      => true,
				'menu_icon'   => 'dashicons-nametag',
				'supports'    => array( 'title', 'editor', 'thumbnail' ),
				'has_archive' => 'projects',
				'query_var'   => true,
				'rewrite' => array( 'slug'=>'projects', 'with_front' => false )
			)
		);
	}

	add_action( 'init', 'project_type_taxonomy' );
	function project_type_taxonomy() {
		register_taxonomy( 'type',
			array( 'project' ),
			array(
				'label'              => __( 'Types', 'zankoav' ),
				'labels'             => array(
					'name'              => __( 'Types', 'zankoav' ),
					'singular_name'     => __( 'Type', 'zankoav' ),
					'search_items'      => __( 'Search Type', 'zankoav' ),
					'all_items'         => __( 'All Types', 'zankoav' ),
					'view_item '        => __( 'Show Type', 'zankoav' ),
					'parent_item'       => __( 'Parent Type', 'zankoav' ),
					'parent_item_colon' => __( 'Parent Type:', 'zankoav' ),
					'edit_item'         => __( 'Edit Type', 'zankoav' ),
					'update_item'       => __( 'Update Type', 'zankoav' ),
					'add_new_item'      => __( 'Add New Type', 'zankoav' ),
					'menu_name'         => __( 'Types', 'zankoav' ),
				),
				'public'             => true,
				'show_in_nav_menus'  => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'show_tagcloud'      => true,
				'show_in_rest'       => null,
				'rest_base'          => null,
				'hierarchical'       => true,
				'rewrite' => array( 'slug'=>'types', 'with_front' => false ),
				'capabilities'       => array(),
				'meta_box_cb'        => null,
				'show_admin_column'  => false,
				'_builtin'           => false,
				'show_in_quick_edit' => null,
			)
		);
	}
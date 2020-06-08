<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	

	function sm24_theme_init() {
		/**
		 * add title tag auto
		 */
		// add_theme_support( 'title-tag' );

		/**
		 * add thumbnails for all post types
		 */
		// add_theme_support( 'post-thumbnails' );

        add_image_size( 'modal-m', 320, 170, true );
		add_image_size( 'modal-sm', 450, 250, true );

        add_image_size( 'slider-m', 320, 320, true );
		add_image_size( 'slider-sm', 560, 560, true );
        add_image_size( 'slider-lg', 800, 600, true );

		/**
		 * add custom-logo in customizer
		 */
		// add_theme_support( 'custom-logo' );

		// add_theme_support( 'menus' );

		// register_nav_menu( 'main-menu', 'Main Menu' );
		// register_nav_menu( 'left-menu', 'Left Menu' );

		/**
		 * add html5 support
		 */
		// add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    }

    add_action( 'after_setup_theme', 'sm24_theme_init' );
    
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
    }
    
    add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
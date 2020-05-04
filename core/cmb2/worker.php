<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 6:56 PM
	 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'cmb2_admin_init', 'worker_metabox' );

	function worker_metabox() {


		$cmb_options = new_cmb2_box( array(
			'id'           => THEME_NAME . '_worker',
			'title'        => __( 'Settings', THEME_NAME ),
			'object_types' => [ 'worker' ],
		) );

		$cmb_options->add_field( array(
			'name' => __( 'Image', THEME_NAME ),
			'desc' => __( 'Recommended size (600x600)', THEME_NAME ),
			'id'   => 'image',
			'type' => 'file'
		) );

		$cmb_options->add_field( array(
			'name' => __( 'Position', THEME_NAME ),
			'id'   => 'position',
			'type' => 'text',
		) );

		$cmb_options->add_field( array(
			'name' => __( 'Age', THEME_NAME ),
			'id'   => 'age',
            'type'        => 'text_date',
            'date_format' => 'd.m.Y',
		) );

		$cmb_options->add_field( array(
			'name' => __( 'Skill', THEME_NAME ),
			'id'   => 'skill',
			'type' => 'text',
		) );
	}
<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 10/16/18
	 * Time: 4:30 PM
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'template_redirect', function () {

		add_action( 'wp_enqueue_scripts', function () {

			wp_enqueue_style( 'commons', Assets::getCss( 'common' ), false, null );

			if ( is_page_template( 'template-home.php' ) ) {
				wp_enqueue_style( 'home', Assets::getCss( 'home' ), false, null );
			} else if ( is_404() ) {
				wp_enqueue_style( 'p404_css', Assets::getCss( 'p404' ), false, null );
			}

			wp_enqueue_style( 'style', BASE_URL . '/style.css', false, null );

		} );
    } );
    
    add_action('admin_head', 'cmb2_styles_sm24');

    function cmb2_styles_sm24() {
        echo '<style>
                .cmb-type-title{
                    background-color: #fafafa;
                    text-transform: uppercase;
                    text-align: center;
                    padding: 1rem 0 !important;
                }

                .cmb2-metabox-title{
                    font-size: 16px !important;
                }
            </style>';
    }

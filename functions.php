<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 5:00 PM
	 */

	if( ! defined('ABSPATH') ) exit();

	define( 'THEME_NAME', get_template() );
	define( 'BASE_URL', '/wp-content/themes/' . THEME_NAME );
	date_default_timezone_set("Europe/Minsk");

	require_once __DIR__ . '/utils/Assets.php';
	require_once __DIR__ . '/utils/SingletonOptions.php';
	require_once __DIR__ . '/core/init_theme.php';
	require_once __DIR__ . '/core/cmb2/common.php';
	require_once __DIR__ . '/core/ajax.php';


    add_action( 'wp_enqueue_scripts', 'page_scripts');

function page_scripts(){
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');

    $assets = new Assets();

    $runtime = $assets->asset('runtime.js');
    wp_enqueue_script( 'runtime', $runtime);

    $vendors = $assets->asset('vendors.js');
	wp_enqueue_script( 'vendors', $vendors);

    if(is_page_template('template-home.php')){
        $target = $assets->asset('home.js');
        wp_enqueue_script( 'home', $target);
    }else if(is_404()){
        $target = $assets->asset('p404.js');
        wp_enqueue_script( 'p404', $target);
    }

    add_filter( 'script_loader_tag', 'change_my_script', 10, 3 );

	function change_my_script( $tag, $handle, $src ){

		if( 
            'p404' === $handle or
            'home' === $handle or
            'runtime' === $handle or
            'vendors' === $handle
        ){
			return str_replace( ' src', ' defer src', $tag );
		}

		return $tag;
	}
}
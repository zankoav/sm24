<?php 

    if ( ! defined( 'ABSPATH' ) ) {
        exit();
    }
	$options  = SingletonOptions::getOptions();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport"
          content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body>
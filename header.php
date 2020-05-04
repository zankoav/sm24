<?php if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

	$options  = SingletonOptions::getOptions();
	// $mail     = $options['email'];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body>
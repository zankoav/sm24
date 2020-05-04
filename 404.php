<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
    }
    $options  = SingletonOptions::getOptions();
	// $mail     = $options['email'];
	get_header();
?>
    <main class="p404">
        <h1 class="p404__title"><?= __( 'Ошибка 404!', 'sm24' ); ?></h1>
        <h2 class="p404__subtitle"><?= __( 'Страница не найдена', 'sm24' ); ?></h2>
    </main>
<?php get_footer(); ?>

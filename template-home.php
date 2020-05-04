<?php
	/**
	 * Template Name: Home Page
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
    }
    $options  = SingletonOptions::getOptions();
	// $mail     = $options['email'];
	get_header();
    if ( have_posts() ): ?>
		<?php while ( have_posts() ): the_post() ?>
            <header class="header">
                Header
            </header>
            <main class="main">
                Main
            </main>
            <footer class="footer">
                Footer
            </footer>
        <?php endwhile; ?>
	<?php endif; 
    get_footer(); 
?>
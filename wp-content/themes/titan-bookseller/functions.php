<?php
/**
 * Titan Bookseller functions
 */

if ( ! function_exists( 'titan_bookseller_styles' ) ) :
	function titan_bookseller_styles() {
		// Register theme stylesheet.
		wp_register_style('titan-bookseller-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'titan-bookseller-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'titan_bookseller_styles' );

/**
 * About Theme Function
 */
require get_theme_file_path( '/about-theme/about-theme.php' );
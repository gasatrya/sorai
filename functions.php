<?php
/**
 * Sorai functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sorai
 * @since Sorai 1.0
 */

if ( ! function_exists( 'sorai_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Sorai 1.0
	 *
	 * @return void
	 */
	function sorai_enqueue_styles() {
		wp_enqueue_style(
			'sorai-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'sorai_enqueue_styles' );

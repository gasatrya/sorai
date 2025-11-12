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

if ( ! function_exists( 'sorai_setup' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Sorai 1.0
	 *
	 * @return void
	 */
	function sorai_setup() {
		add_editor_style( 'style.css' );
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'sorai_setup' );

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

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'sorai_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Sorai 1.0
	 * @return void
	 */
	function sorai_pattern_categories() {

		register_block_pattern_category(
			'sorai-post',
			array(
				'label' => _x( 'Posts', 'Block pattern category', 'sorai' ),
				'description' => __( 'A collection of posts query patterns.', 'sorai' ),
			)
		);

		register_block_pattern_category(
			'sorai-page',
			array(
				'label' => _x( 'Pages', 'Block pattern category', 'sorai' ),
				'description' => __( 'A collection of full page layouts.', 'sorai' ),
			)
		);
	}
endif;

add_action( 'init', 'sorai_pattern_categories' );

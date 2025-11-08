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
 * Register block styles.
 */

if ( ! function_exists( 'sorai_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Sorai 1.0
	 *
	 * @return void
	 */
	function sorai_block_styles() {

		register_block_style(
			'core/heading',
			array(
				'name' => 'with-border',
				'label' => __( 'With border', 'sorai' ),
				'inline_style' => '
				.is-style-with-border {
					border-top: 0.1rem solid var(--wp--preset--color--base-muted);
					padding-top: var(--wp--preset--spacing--10);
					font-weight: 600;
				}

				.wp-block-heading.is-style-with-border {
					font-size: var(--wp--preset--font-size--normal);
					margin-bottom: var(--wp--preset--spacing--20);
				}
				'
			)
		);

		register_block_style(
			'core/heading',
			array(
				'name' => 'widget',
				'label' => __( 'Widget', 'sorai' ),
				'inline_style' => '
				.is-style-widget {
					font-size: var(--wp--preset--font-size--normal);
				}
				'
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name' => 'hash',
				'label' => __( 'Hash', 'sorai' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-hash {
					display: flex;
					gap: 0.25rem;
				}

				.is-style-hash a::before,
				.is-style-hash span:not([class], [data-rich-text-placeholder])::before {
					content: "#";
				}',
			)
		);
	}
endif;
add_action( 'init', 'sorai_block_styles' );

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

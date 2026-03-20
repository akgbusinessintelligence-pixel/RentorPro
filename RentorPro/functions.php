<?php
/**
 * Rentor Modern Elite functions and definitions
 */

if ( ! function_exists( 'rentor_modern_elite_setup' ) ) :
	function rentor_modern_elite_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'rentor-modern-elite' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'rentor_modern_elite_setup' );

/**
 * Enqueue scripts and styles.
 */
function rentor_modern_elite_scripts() {
	// Google Fonts
	wp_enqueue_style( 'rentor-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
	
	// Tailwind CSS v4 Browser-based (Play CDN)
	wp_enqueue_script( 'tailwind-v4', 'https://unpkg.com/@tailwindcss/browser@4', array(), null, true );

	// Theme stylesheet
	wp_enqueue_style( 'rentor-style', get_stylesheet_uri(), array( 'rentor-fonts' ), wp_get_theme()->get( 'Version' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rentor_modern_elite_scripts' );

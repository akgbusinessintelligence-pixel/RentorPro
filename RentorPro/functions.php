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

		register_nav_menus(
		array(
			'menu1'   => esc_html__( 'Primary Menu', 'rentor-modern-elite' ),
			'footer'  => esc_html__( 'Footer Menu', 'rentor-modern-elite' ),
		)
	);
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

	// Swiper.js for the Hero Slider
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

	// Theme stylesheet
	wp_enqueue_style( 'rentor-style', get_stylesheet_uri(), array( 'rentor-fonts' ), wp_get_theme()->get( 'Version' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rentor_modern_elite_scripts' );

/**
 * Add Slider Management to Customizer
 */
function rentor_modern_elite_customize_register( $wp_customize ) {
	// Add Slider Section
	$wp_customize->add_section( 'rentor_slider_section', array(
		'title'    => __( 'Hero Slider', 'rentor-modern-elite' ),
		'priority' => 30,
	) );

	// Settings for 3 Slides
	for ( $i = 1; $i <= 3; $i++ ) {
		// Image
		$wp_customize->add_setting( "rentor_slide_img_$i", array(
			'default'   => '',
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "rentor_slide_img_$i", array(
			'label'    => __( "Slide $i Image", 'rentor-modern-elite' ),
			'section'  => 'rentor_slider_section',
			'settings' => "rentor_slide_img_$i",
		) ) );

		// Title
		$wp_customize->add_setting( "rentor_slide_title_$i", array(
			'default'   => $i === 1 ? 'Rentals. Homes. Agents. Loans.' : '',
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( "rentor_slide_title_$i", array(
			'label'    => __( "Slide $i Title", 'rentor-modern-elite' ),
			'section'  => 'rentor_slider_section',
			'type'     => 'text',
		) );

		// Subtitle
		$wp_customize->add_setting( "rentor_slide_desc_$i", array(
			'default'   => '',
			'transport' => 'refresh',
		) );
		$wp_customize->add_control( "rentor_slide_desc_$i", array(
			'label'    => __( "Slide $i Subtitle", 'rentor-modern-elite' ),
			'section'  => 'rentor_slider_section',
			'type'     => 'textarea',
		) );
	}
}
add_action( 'customize_register', 'rentor_modern_elite_customize_register' );

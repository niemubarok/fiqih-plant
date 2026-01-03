<?php
/**
 * Fiqih Plant functions and definitions
 */

if ( ! function_exists( 'fiqih_plant_setup' ) ) :
	function fiqih_plant_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Title tag support
		add_theme_support( 'title-tag' );

		// Featured images
		add_theme_support( 'post-thumbnails' );

		// Menus
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fiqih-plant' ),
			)
		);

		// HTML5 support
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

        // Logo support
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        // WooCommerce support
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
	}
endif;
add_action( 'after_setup_theme', 'fiqih_plant_setup' );

/**
 * Enqueue scripts and styles.
 */
function fiqih_plant_scripts() {
    // Enqueue Google Fonts (Poppins & Inter)
    wp_enqueue_style( 'fiqih-plant-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap', array(), null );

	wp_enqueue_style( 'fiqih-plant-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    // Navigation Script for Scroll Effect
	wp_enqueue_script( 'fiqih-plant-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

    // Onscroll Animations
    wp_enqueue_script( 'fiqih-plant-animations', get_template_directory_uri() . '/js/animations.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fiqih_plant_scripts' );

// Auto-create pages on theme activation/init
function fiqih_plant_auto_setup_pages() {
    // 1. About Page
    if ( ! get_page_by_path( 'about' ) ) {
        $about_id = wp_insert_post( array(
            'post_title'    => 'Tentang Kami',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'about'
        ) );
        update_post_meta( $about_id, '_wp_page_template', 'page-about.php' );
    }

    // 2. Contact Page
    if ( ! get_page_by_path( 'contact' ) ) {
        $contact_id = wp_insert_post( array(
            'post_title'    => 'Kontak',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'contact'
        ) );
        update_post_meta( $contact_id, '_wp_page_template', 'page-contact.php' );
    }

    // Flush rules to ensure new pages are accessible immediately
    if ( get_option( 'fiqih_plant_rewrite_rules_flushed' ) !== 'yes' ) {
        flush_rewrite_rules();
        update_option( 'fiqih_plant_rewrite_rules_flushed', 'yes' );
    }
}
add_action( 'init', 'fiqih_plant_auto_setup_pages' );

/**
 * WooCommerce Specific Tweaks
 */
// Remove default WooCommerce wrapper to use our own
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'fiqih_plant_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'fiqih_plant_wrapper_end', 10);

function fiqih_plant_wrapper_start() {
    echo '<main id="primary" class="site-main container" style="margin-top: 2rem; margin-bottom: 2rem;">';
}

function fiqih_plant_wrapper_end() {
    echo '</main>';
}

/**
 * Customizer Settings for Contact Info
 */
function fiqih_plant_customize_register( $wp_customize ) {
    // Section: Contact Info
    $wp_customize->add_section( 'fiqih_plant_contact_section', array(
        'title'    => __( 'Info Kontak (Alamat & Sosmed)', 'fiqih-plant' ),
        'priority' => 30,
    ) );

    // Address
    $wp_customize->add_setting( 'fiqih_plant_address', array(
        'default'   => 'Jl. Raya Puncak No. 123, Bogor, Jawa Barat',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'fiqih_plant_address', array(
        'label'    => __( 'Alamat', 'fiqih-plant' ),
        'section'  => 'fiqih_plant_contact_section',
        'type'     => 'textarea',
    ) );

    // Phone
    $wp_customize->add_setting( 'fiqih_plant_phone', array(
        'default'   => '+62 812 3456 7890',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'fiqih_plant_phone', array(
        'label'    => __( 'Nomor WhatsApp / Telepon', 'fiqih-plant' ),
        'section'  => 'fiqih_plant_contact_section',
        'type'     => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'fiqih_plant_email', array(
        'default'   => 'hello@fiqihplant.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'fiqih_plant_email', array(
        'label'    => __( 'Email', 'fiqih-plant' ),
        'section'  => 'fiqih_plant_contact_section',
        'type'     => 'text',
    ) );

    // Instagram
    $wp_customize->add_setting( 'fiqih_plant_ig', array(
        'default'   => '#',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'fiqih_plant_ig', array(
        'label'    => __( 'Link Instagram', 'fiqih-plant' ),
        'section'  => 'fiqih_plant_contact_section',
        'type'     => 'url',
    ) );
}
add_action( 'customize_register', 'fiqih_plant_customize_register' );
?>

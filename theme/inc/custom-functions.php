<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gathathiini
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/* ── INCLUDES ────────────────────────────────────────────── */
require_once GBHS_DIR . '/inc/walker-nav.php';
require_once GBHS_DIR . '/inc/contact-form.php';
if ( function_exists( 'acf_add_local_field_group' ) ) {
    require_once GBHS_DIR . '/inc/acf-fields.php';
}
// Hook acf-fields after ACF is ready
add_action( 'acf/init', function () {
    $path = GBHS_DIR . '/inc/acf-fields.php';
    if ( file_exists( $path ) ) require_once $path;
} );

/**
 * Creates the "Home" and "Coming Soon" pages if they don't exist.
 *
 * This function checks if the "Home" and "Coming Soon" pages already exist.
 * If they do exist but have a different slug, it updates them to the correct
 * slug ('home' for the Home page, 'coming-soon' for the Coming Soon page).
 * If the pages do not exist, it creates them with the specified slugs and
 * assigns appropriate templates, and sets the "Home" page as the front page.
 *
 * @return void
 */
function gathathiini_create_home_page() {
	// Check if the "Home" page exists using WP_Query
	$home_page_query = new WP_Query(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'title'          => 'Home',
			'posts_per_page' => 1,
		)
	);

	// Ensure the Home page exists with the slug 'home'
	if ( $home_page_query->have_posts() ) {
		// If the slug is different, update it to 'home'
		$home_page = $home_page_query->posts[0];
		if ( $home_page->post_name !== 'home' ) {
			wp_update_post(
				array(
					'ID'        => $home_page->ID,
					'post_name' => 'home',
				)
			);
		}
	} else {
		// Create the Home page if it doesn't exist
		$home_page = wp_insert_post(
			array(
				'post_title'   => 'Home',
				'post_content' => '', // Empty content, it will pull from front-page.php
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_name'    => 'home', // Ensure the slug is 'home'
			)
		);

		// Check if the page was created successfully
		if ( ! is_wp_error( $home_page ) ) {
			// Set this page as the front page
			update_option( 'page_on_front', $home_page );
			update_option( 'show_on_front', 'page' );
		}
	}
}

// Hook the function to run when WordPress initializes (after theme is activated)
add_action( 'after_switch_theme', 'gathathiini_create_home_page' );

/**
 * Create essential pages upon theme activation.
 *
 * This function creates several essential pages (such as Coming Soon, etc.)
 * for the theme. The function checks if each page already exists based on the slug and
 * if it does not, the page is created and associated with the appropriate template.
 */
/**
 * Creates core site pages and ensures correct hierarchy, slugs, and templates.
 *
 * - Creates Home, Coming Soon, Contact, About Me, Services, Projects.
 * - Creates Project child pages.
 * - Sets Home as the static front page.
 */
function gathathiini_create_core_pages() {
	$pages = array(
		// === Parent Pages ===		
		array(
			'title'    => 'Contact',
			'slug'     => 'contact',
			'template' => 'page-templates/page-contact.php',
			'parent'   => 0,
		),
		array(
			'title'    => 'About Us',
			'slug'     => 'about',
			'template' => 'page-templates/page-about-us.php',
			'parent'   => 0,
		),
		array(
			'title'    => 'Academics',
			'slug'     => 'academics',
			'template' => 'page-templates/page-academics.php',
			'parent'   => 0,
		),
		array(
			'title'    => 'Our Pillars',
			'slug'     => 'pillars',
			'template' => 'page-templates/page-pillars.php',
			'parent'   => 0,
		),
		array(
			'title'    => 'Admissions',
			'slug'     => 'admissions',
			'template' => 'page-templates/page-admissions.php',
			'parent'   => 0,
		),
		array(
			'title'    => 'Campus Life',
			'slug'     => 'campus-life',
			'template' => 'page-templates/page-campus-life.php',
			'parent'   => 0,
		),
	);

	$created_pages = array();

	foreach ( $pages as $page ) {
		// Check if page already exists by title
		$existing_page = get_page_by_title( $page['title'] );

		if ( $existing_page ) {
			// Update slug if different
			if ( $existing_page->post_name !== $page['slug'] ) {
				wp_update_post(
					array(
						'ID'        => $existing_page->ID,
						'post_name' => $page['slug'],
					)
				);
			}
			$page_id = $existing_page->ID;
		} else {
			// Determine parent ID (if parent slug given)
			$parent_id = 0;
			if ( ! empty( $page['parent'] ) && $page['parent'] !== 0 ) {
				$parent_page = get_page_by_path( $page['parent'] );
				if ( $parent_page ) {
					$parent_id = $parent_page->ID;
				}
			}

			// Create new page
			$page_id = wp_insert_post(
				array(
					'post_title'   => $page['title'],
					'post_name'    => $page['slug'],
					'post_content' => '',
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_parent'  => $parent_id,
				)
			);
		}

		// Assign template if specified
		if ( ! empty( $page['template'] ) && ! is_wp_error( $page_id ) ) {
			update_post_meta( $page_id, '_wp_page_template', $page['template'] );
		}

		// Track created/updated pages
		$created_pages[ $page['slug'] ] = $page_id;

		// Set Home as front page
		if ( isset( $page['is_front'] ) && $page['is_front'] ) {
			update_option( 'page_on_front', $page_id );
			update_option( 'show_on_front', 'page' );
		}
	}
}
add_action( 'after_switch_theme', 'gathathiini_create_core_pages' );

// Automatically set permalinks to 'postname' and timezone to +0300 on theme activation.
function gathathiini_setup_settings() {
	// Set permalinks to 'postname'
	global $wp_rewrite;
	$wp_rewrite->set_permalink_structure( '/%postname%/' );
	$wp_rewrite->flush_rules(); // Flush the rewrite rules to apply changes

	// Set the timezone to UTC+3
	update_option( 'timezone_string', '' ); // Clear named timezone
	update_option( 'gmt_offset', 3 ); // Set numeric offset to +3
}
add_action( 'after_switch_theme', 'gathathiini_setup_settings' );


/* ── HELPER: get site option (ACF or fallback) ───────────── */
function gbhs_option( string $key, string $fallback = '' ): string {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $key, 'option' );
        if ( $val ) return esc_html( $val );
    }
    return $fallback;
}

function gbhs_field( string $key, string $fallback = '', $post_id = null ): string {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $key, $post_id );
        if ( $val ) return $val; // caller escapes
    }
    return $fallback;
}

/* ── SCHOOL DEFAULTS ─────────────────────────────────────── */
function gbhs_phone():   string { return gbhs_option( 'school_phone',   '0725 407 132' ); }
function gbhs_email():   string { return gbhs_option( 'school_email',   'gathathiinisecondary122@gmail.com' ); }
function gbhs_address(): string { return gbhs_option( 'school_address', "P.O. Box 122-10100, Nyeri\nKirurumi, Tetu Sub-County\nNyeri County, Kenya" ); }
function gbhs_wa():      string { return gbhs_option( 'whatsapp_num',   '254703639230' ); }

/* ── WIDGET AREAS ────────────────────────────────────────── */
add_action( 'widgets_init', function () {
    register_sidebar([
        'name'          => __( 'Blog Sidebar', 'gathathiini' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div class="mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="eyebrow mb-4">',
        'after_title'   => '</h3>',
    ]);
} );

/* ── EXCERPT LENGTH ──────────────────────────────────────── */
add_filter( 'excerpt_length', fn() => 30 );
add_filter( 'excerpt_more',   fn() => '&hellip;' );

/* ── REMOVE EMOJI SCRIPTS (performance) ─────────────────── */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

/* ── BODY CLASSES ────────────────────────────────────────── */
add_filter( 'body_class', function ( $classes ) {
    if ( is_front_page() ) $classes[] = 'gbhs-home';
    return $classes;
} );

/* ── COMMENT FORM DEFAULTS ───────────────────────────────── */
add_filter( 'comment_form_defaults', function ( $defaults ) {
    $defaults['class_form']   = 'space-y-4 mt-6';
    $defaults['class_submit'] = 'btn-gold px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase';
    return $defaults;
} );

add_action( 'wp_head', function () {
    echo '<style>[x-cloak]{display:none!important}</style>';
}, 1 ); // priority 1 = before everything else
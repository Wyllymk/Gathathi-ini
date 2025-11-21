<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gathathiini
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Start the session if not already started
function start_session() {
	if ( ! session_id() ) {
		session_start();
	}
}
add_action( 'wp_loaded', 'start_session', 1 );

/**
 * Handle Contact Form Submission
 */
function handle_contact_form_submission() {
	// Check nonce
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'contact_form_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Security verification failed.' ) );
	}

	// Check honeypot
	if ( ! empty( $_POST['honeypot'] ) ) {
		wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent.' ) ); // Silent success for bots
	}

	// Sanitize fields
	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$phone   = sanitize_text_field( $_POST['phone'] ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	// Validation
	$errors = array();

	if ( empty( $name ) ) {
		$errors[] = 'Name is required.';
	}

	if ( empty( $email ) ) {
		$errors[] = 'Email is required.';
	} elseif ( ! is_email( $email ) ) {
		$errors[] = 'Please enter a valid email address.';
	}

	if ( empty( $message ) ) {
		$errors[] = 'Message is required.';
	}

	if ( ! empty( $errors ) ) {
		wp_send_json_error( array( 'message' => implode( ' ', $errors ) ) );
	}

	// Prepare email
	$to            = get_option( 'admin_email' );
	$email_subject = "Contact Form: $subject - From $name";

	$email_body = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong></p>
    <div>" . nl2br( esc_html( $message ) ) . '</div>
    <hr>
    <p><em>Sent from ' . get_bloginfo( 'name' ) . ' website</em></p>
    ';

	$headers = array(
		'Content-Type: text/html; charset=UTF-8',
		"From: $name <$email>",
		"Reply-To: $name <$email>",
	);

	// Send email
	$sent = wp_mail( $to, $email_subject, $email_body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully.' ) );
	} else {
		error_log( 'Contact form email failed to send for: ' . $email );
		wp_send_json_error( array( 'message' => 'Sorry, there was an error sending your message. Please try again later.' ) );
	}
}

// Register AJAX handlers
add_action( 'wp_ajax_submit_contact_form', 'handle_contact_form_submission' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_submission' );

/**
 * Optional: Contact form settings in admin
 */
function gathathiini_contact_form_admin_menu() {
	add_options_page(
		'Contact Form Settings',
		'Contact Form',
		'manage_options',
		'contact-form-settings',
		'gathathiini_contact_form_admin_page'
	);
}
add_action( 'admin_menu', 'gathathiini_contact_form_admin_menu' );

function gathathiini_contact_form_admin_page() {
	if ( isset( $_POST['save_settings'] ) && check_admin_referer( 'contact_form_settings' ) ) {
		update_option( 'gathathiini_contact_email', sanitize_email( $_POST['contact_email'] ) );
		update_option( 'gathathiini_contact_subject_prefix', sanitize_text_field( $_POST['subject_prefix'] ) );
		echo '<div class="notice notice-success"><p>Settings saved!</p></div>';
	}

	$contact_email  = get_option( 'gathathiini_contact_email', get_option( 'admin_email' ) );
	$subject_prefix = get_option( 'gathathiini_contact_subject_prefix', '[Website Contact]' );
	?>
<div class="wrap">
	<h1>Contact Form Settings</h1>
	<form method="post" action="">
		<?php wp_nonce_field( 'contact_form_settings' ); ?>
		<table class="form-table">
			<tr>
				<th scope="row">Contact Email</th>
				<td>
					<input type="email" name="contact_email" value="<?php echo esc_attr( $contact_email ); ?>"
						class="regular-text" />
					<p class="description">Where contact form submissions will be sent.</p>
				</td>
			</tr>
			<tr>
				<th scope="row">Subject Prefix</th>
				<td>
					<input type="text" name="subject_prefix" value="<?php echo esc_attr( $subject_prefix ); ?>"
						class="regular-text" />
					<p class="description">Prefix added to email subjects.</p>
				</td>
			</tr>
		</table>
		<?php submit_button( 'Save Settings', 'primary', 'save_settings' ); ?>
	</form>
</div>
	<?php
}

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
			'title'    => 'Home',
			'slug'     => 'home',
			'template' => '',
			'parent'   => 0,
			'is_front' => true,
		),
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
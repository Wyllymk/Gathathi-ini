<?php
/**
 * AJAX Contact Form Handler — no plugin required.
 * Sends email via wp_mail() to the school email.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wp_ajax_gathathiini_contact',        'gathathiini_handle_contact' );
add_action( 'wp_ajax_nopriv_gathathiini_contact', 'gathathiini_handle_contact' );

function gathathiini_handle_contact() {
    // Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'gathathiini_contact_nonce' ) ) {
        wp_send_json_error( [ 'message' => 'Security check failed. Please refresh the page and try again.' ] );
    }

    $name    = sanitize_text_field( wp_unslash( $_POST['name']    ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone']   ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email']        ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? 'General Enquiry' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );
    $student = sanitize_text_field( wp_unslash( $_POST['student'] ?? '' ) );
    $score   = sanitize_text_field( wp_unslash( $_POST['score']   ?? '' ) );

    if ( empty( $name ) || empty( $message ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    $to = function_exists( 'get_field' ) && get_field( 'school_email', 'option' )
        ? get_field( 'school_email', 'option' )
        : 'gathathiinisecondary122@gmail.com';

    $email_subject = '[Gathathiini Website] ' . $subject . ' — ' . $name;

    $body  = "New message from the Gathathiini Boys High School website.\n\n";
    $body .= "Name:    {$name}\n";
    if ( $phone )   $body .= "Phone:   {$phone}\n";
    if ( $email )   $body .= "Email:   {$email}\n";
    if ( $student ) $body .= "Student: {$student}\n";
    if ( $score )   $body .= "KCPE Score: {$score}\n";
    $body .= "Subject: {$subject}\n\n";
    $body .= "Message:\n{$message}\n";

    $headers = [ 'Content-Type: text/plain; charset=UTF-8' ];
    if ( is_email( $email ) ) {
        $headers[] = "Reply-To: {$name} <{$email}>";
    }

    $sent = wp_mail( $to, $email_subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Message received. We will respond within two working days. Thank you.' ] );
    } else {
        wp_send_json_error( [ 'message' => 'There was a problem sending your message. Please call us directly on 0703 639 230.' ] );
    }
}
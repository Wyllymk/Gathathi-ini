<?php
/**
 * Custom Walker Nav Menu — outputs clean <a> tags for Tailwind nav
 */
if ( ! defined( 'ABSPATH' ) ) exit;

class Gathathiini_Walker_Nav extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes  = empty( $item->classes ) ? [] : (array) $item->classes;
        $current  = in_array( 'current-menu-item', $classes ) || in_array( 'current-page-ancestor', $classes );
        $active   = $current ? 'text-[var(--gold-soft)]' : 'opacity-70 hover:opacity-100';
        $url      = esc_url( $item->url );
        $title    = esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );

        // Desktop nav link
        $output .= '<a href="' . $url . '" class="link-underline ' . $active . '">' . $title . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {}
    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
}

/**
 * Mobile nav walker — outputs <a> tags styled for the mobile drawer
 */
class Gathathiini_Walker_Nav_Mobile extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $url   = esc_url( $item->url );
        $title = esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
        $output .= '<a href="' . $url . '" @click="menu=false" class="block py-1 text-white/80 hover:text-white transition">' . $title . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {}
    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
}

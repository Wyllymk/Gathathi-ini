<?php

/**
 * Theme setup
 *
 * @package Bootscore 
 * @version 5.3.4
 */


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Setup theme
 */
if (!function_exists('bootscore_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function bootscore_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Bootscore, use a find and replace
     * to change 'bootscore' to the name of your theme in all the template files.
    */
    load_theme_textdomain('bootscore', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
    */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
    */
    add_theme_support('html5', array(
      'comment-form',
      'comment-list',
      'search-form',
      'gallery',
      'caption',
      'script',
      'style',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;
add_action('after_setup_theme', 'bootscore_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootscore_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('bootscore_content_width', 640);
}

add_action('after_setup_theme', 'bootscore_content_width', 0);

/**
 * To automatically create a page called "Home" in WordPress and set it as the homepage in the static page settings.
 */
function create_or_update_home_page() {
  // Check if the page with the slug 'home' already exists
  $home_page = get_page_by_path('home');

  // If the page doesn't exist, create it
  if (empty($home_page)) {
      $home_page_id = wp_insert_post(array(
          'post_title'     => 'Home',
          'post_name'      => 'home',
          'post_type'      => 'page',
          'post_status'    => 'publish',
          'comment_status' => 'closed',
          'ping_status'    => 'closed',
      ));

      // Set the newly created page as the front page
      if ($home_page_id !== 0) {
          update_option('page_on_front', $home_page_id);
          update_option('show_on_front', 'page');
      }
  } else {
      // If the page exists, set it as the front page
      update_option('page_on_front', $home_page->ID);
      update_option('show_on_front', 'page');
  }
}

// Hook the function to the 'after_switch_theme' action
add_action('after_setup_theme', 'create_or_update_home_page');

/**
 * To automatically create a pages in WordPress.
 */

function create_or_update_pages() {
  // Array of page slugs
  $page_slugs = array('about-us', 'admissions', 'contact-us');

  foreach ($page_slugs as $slug) {
      // Check if the page with the slug already exists
      $existing_page = get_page_by_path($slug);

      // If the page doesn't exist, create it
      if (empty($existing_page)) {
          $page_id = wp_insert_post(array(
              'post_title'     => ucwords(str_replace('-', ' ', $slug)), // Convert slug to title case
              'post_name'      => $slug,
              'post_type'      => 'page',
              'post_status'    => 'publish',
              'comment_status' => 'closed',
              'ping_status'    => 'closed',
          ));

          // Output a message indicating whether the page was created
          if ($page_id !== 0) {
              // error_log( 'Page with slug ' . $slug . ' created successfully.');
          } else {
              // error_log( 'Failed to create page with slug ' . $slug . '');
          }
      } else {
          // Output a message indicating that the page already exists
          // error_log( 'Page with slug ' . $slug . ' already exists.');
      }
  }
}

// Hook the function to the 'after_switch_theme' action
add_action('after_setup_theme', 'create_or_update_pages');


/**
 * To automatically create a menu called "Main Menu" in WordPress and set it as the homepage in the static page settings. Note that with this code setup you cannot delete the created menu.
 */
// Hook to the 'after_setup_theme' action
add_action('after_setup_theme', 'auto_create_menu');

function auto_create_menu() {
    // Set the menu name
    $menu_name = 'Main Menu';

    // Check if the menu already exists
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        // Menu doesn't exist, create a new menu
        $menu_id = wp_create_nav_menu($menu_name);

        $menu = get_term_by('name', $menu_name, 'nav_menu');

        // Specify the slugs of pages to add to the menu
        $page_slugs = array('home', 'about-us', 'admissions', 'contact-us');

        foreach ($page_slugs as $slug) {
            // Get the page ID based on the slug
            $page = get_page_by_path($slug);

            if ($page) {
                // Add the page to the menu
                wp_update_nav_menu_item($menu->term_id, 0, array(
                    'menu-item-object-id' => $page->ID,
                    'menu-item-object'    => 'page',
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                ));
            }
        }

        // Set the menu location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['main-menu'] = $menu->term_id;
        set_theme_mod('nav_menu_locations', $locations);
    } else {
        // Menu already exists, add specified pages if they don't already exist in the menu
        $menu_id = $menu_exists->term_id;

        // Specify the slugs of pages to add to the menu
        $page_slugs = array('home', 'about-us', 'admissions', 'contact-us');

        foreach ($page_slugs as $slug) {
            // Get the page ID based on the slug
            $page = get_page_by_path($slug);

            if ($page) {
                // Check if the page is not already in the menu
                $existing_menu_items = wp_get_nav_menu_items($menu_id);
                $page_exists_in_menu = false;

                foreach ($existing_menu_items as $item) {
                    if ($item->object_id == $page->ID) {
                        $page_exists_in_menu = true;
                        break;
                    }
                }

                if (!$page_exists_in_menu) {
                    // Add the page to the menu
                    wp_update_nav_menu_item($menu_id, 0, array(
                        'menu-item-object-id' => $page->ID,
                        'menu-item-object'    => 'page',
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                    ));
                }
            }
        }
    }
}
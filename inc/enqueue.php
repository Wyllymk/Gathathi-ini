<?php

/**
 * Enqueue styles & scripts
 *
 * @package Bootscore 
 * @version 5.3.4
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
function bootscore_scripts() {

  // Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
  $modificated_bootscoreCss   = (file_exists(get_template_directory() . '/css/main.css')) ? date('YmdHi', filemtime(get_template_directory() . '/css/main.css')) : 1;
  $modificated_glightboxCss   = (file_exists(get_template_directory() . '/assets/vendor/glightbox/css/glightbox.min.css')) ? date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/glightbox/css/glightbox.min.css')) : 1;
  $modificated_swiperCss      = (file_exists(get_template_directory() . '/assets/vendor/swiper/swiper-bundle.min.css')) ? date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/swiper/swiper-bundle.min.css')) : 1;
  $modificated_aosCss         = (file_exists(get_template_directory() . '/assets/vendor/aos/aos.css')) ? date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/aos/aos.css')) : 1;
  $modificated_coreCss        = (file_exists(get_template_directory() . '/assets/css/main.css')) ? date('YmdHi', filemtime(get_template_directory() . '/assets/css/main.css')) : 1;
  $modificated_styleCss       = date('YmdHi', filemtime(get_stylesheet_directory() . '/style.css'));
  $modificated_fontawesomeCss = date('YmdHi', filemtime(get_template_directory() . '/fontawesome/css/all.min.css'));
  
  $modificated_bootstrapJs    = date('YmdHi', filemtime(get_template_directory() . '/js/lib/bootstrap.bundle.min.js'));
  $modificated_counterJs      = date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/purecounter/purecounter_vanilla.js'));
  $modificated_glightboxJs    = date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/glightbox/js/glightbox.min.js'));
  $modificated_swiperJs       = date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/swiper/swiper-bundle.min.js'));
  $modificated_aosJs          = date('YmdHi', filemtime(get_template_directory() . '/assets/vendor/aos/aos.js'));
  $modificated_mainJs         = date('YmdHi', filemtime(get_template_directory() . '/assets/js/main.js'));
  $modificated_themeJs        = date('YmdHi', filemtime(get_template_directory() . '/js/theme.js'));


  // bootScore
  require_once 'scss-compiler.php';
  bootscore_compile_scss();
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), $modificated_bootscoreCss);

  // Style CSS
  wp_enqueue_style('bootscore-style', get_stylesheet_uri(), array(), $modificated_styleCss);

  // Fontawesome
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), $modificated_fontawesomeCss);

  // Glightbox CSS
  wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), $modificated_glightboxCss);

  // Swiper CSS
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), $modificated_swiperCss);
    
  // AOS CSS
  // wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), $modificated_aosCss);

  // Core CSS
  wp_enqueue_style('core', get_template_directory_uri() . '/assets/css/main.css', array(), $modificated_coreCss);


  
  // Bootstrap JS
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.bundle.min.js', array(), $modificated_bootstrapJs, true);
  
  // Counter JS
  wp_enqueue_script('counterjs', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), $modificated_counterJs, true);
  
  // Glightbox JS
  wp_enqueue_script('glightboxjs', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), $modificated_glightboxJs, true);

  // Swiper JS
  wp_enqueue_script('swiperjs', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), $modificated_swiperJs, true);

  // AOS JS
  wp_enqueue_script('aosjs', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), $modificated_aosJs, true);

  // Main JS
  wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $modificated_mainJs, true);

  // Theme JS
  wp_enqueue_script('bootscore-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), $modificated_themeJs, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'bootscore_scripts');


/**
 * Preload Font Awesome
 */
add_filter('style_loader_tag', 'bootscore_fa_preload');

function bootscore_fa_preload($tag) {

  $tag = preg_replace("/id='fontawesome-css'/", "id='fontawesome-css' onload=\"if(media!='all')media='all'\"", $tag);

  return $tag;
}
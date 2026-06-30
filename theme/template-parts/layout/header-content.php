<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<!-- ════════════════════════════════════════════════════════
     NAVIGATION
     ════════════════════════════════════════════════════════ -->
<header id="site-header" x-data="{ scrolled: false, menu: false }" @scroll.window="scrolled = window.scrollY > 30"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
    :class="scrolled || menu ? 'bg-[#0B1220]/90 backdrop-blur-xl border-b border-[rgba(245,241,232,.14)]' : 'bg-transparent'">

    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 h-20 flex items-center justify-between">

        <!-- Logo / Wordmark -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group">
            <span class="crest">
                <span>
                    <?php
                        $logo_url = get_template_directory_uri() . '/assets/img/logo.avif';
                        $logo_alt = esc_attr__( 'Gathathi-ini Boys High School Logo', 'gathathiini' );
                        ?>
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo $logo_alt; ?>" class="h-10">
                </span>
            </span>
            <span class="leading-tight">
                <span class="block font-display text-[13px] tracking-[0.18em] uppercase">Gathathiini</span>
                <span class="block text-[10px] tracking-[0.32em] uppercase text-[#D4B574]">Boys High School</span>
            </span>
        </a>

        <!-- Desktop nav -->
        <nav class="hidden lg:flex items-center gap-8 text-[13px] tracking-wide" aria-label="Primary navigation">
            <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'fallback_cb'    => false,
              'items_wrap'     => '%3$s',
              'walker'         => new Gathathiini_Walker_Nav(),
          ]);
      } else {
          // Fallback if no menu assigned
          $nav_pages = [ 'About', 'Academics', 'Pillars', 'Campus Life', 'Admissions', 'Contact' ];
          foreach ( $nav_pages as $pg ) {

              // convert title to slug safely
              $slug = sanitize_title( $pg );

              $page = get_page_by_path( $slug );

              $url = $page ? get_permalink( $page->ID ) : '#';

              $cur = ( $page && is_page( $page->ID ) )
                  ? 'text-[#D4B574]'
                  : 'opacity-70 hover:opacity-100';

              echo '<a href="' . esc_url( $url ) . '" class="link-underline ' . esc_attr( $cur ) . '">'
                  . esc_html( $pg ) .
              '</a>';
          }
      }
      ?>
        </nav>

        <!-- Desktop CTA -->
        <a href="<?php echo esc_url( $admissions_url ); ?>"
            class="hidden lg:block px-5 py-2.5 text-[12px] tracking-[0.18em] uppercase btn-gold font-display">
            Apply Now &rarr;
        </a>

        <!-- Mobile hamburger -->
        <button @click="menu = !menu" aria-label="Toggle menu"
            class="lg:hidden w-10 h-10 grid place-items-center border border-[rgba(245,241,232,.14)]">
            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" aria-hidden="true">
                <path d="M0 1h18M0 11h12" stroke="currentColor" />
            </svg>
        </button>

    </div>

    <!-- Mobile drawer -->
    <div x-cloak x-show="menu" x-transition.opacity
        class="lg:hidden border-t border-[rgba(245,241,232,.14)] bg-[#0B1220]">
        <div class="px-6 py-6 flex flex-col gap-4 text-sm">
            <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'fallback_cb'    => false,
              'items_wrap'     => '%3$s',
              'walker'         => new Gathathiini_Walker_Nav_Mobile(),
          ]);
      } else {
          $nav_pages = [ 'About', 'Academics', 'Pillars', 'Campus Life', 'Admissions', 'Contact' ];
          foreach ( $nav_pages as $pg ) {

              // Convert label → slug
              $slug = sanitize_title( $pg );

              // Get page by path (slug)
              $page = get_page_by_path( $slug, OBJECT, 'page' );

              $url = $page ? get_permalink( $page->ID ) : '#';

              echo '<a href="' . esc_url( $url ) . '" 
                        @click="menu=false" 
                        class="block py-1 text-white/80 hover:text-white transition">'
                  . esc_html( $pg ) .
              '</a>';
          }
      }
      ?>
            <a href="<?php echo esc_url( $admissions_url ); ?>" @click="menu=false"
                class="mt-2 px-5 py-3 btn-gold text-center font-display tracking-[0.18em] uppercase text-[12px]">
                Apply Now
            </a>
        </div>
    </div>

</header>
<!-- end #site-header -->
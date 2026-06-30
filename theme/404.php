<?php
/**
 * 404 Not Found template.
 */
get_header();
?>

<section class="relative min-h-screen flex flex-col items-center justify-center px-6 overflow-hidden">
    <div class="absolute inset-0 grain opacity-20 pointer-events-none"></div>
    <div class="relative z-10 text-center max-w-2xl">
        <div class="font-display text-[180px] lg:text-[240px] leading-none text-white/[.04] select-none mb-0 -mt-20">404
        </div>
        <p class="eyebrow mb-6 -mt-8">Page not found</p>
        <h1 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mb-8">
            This page <span class="font-serif-i italic text-[#D4B574]">doesn&rsquo;t exist</span>.
        </h1>
        <p class="text-white/60 text-lg leading-relaxed mb-12 max-w-lg mx-auto">
            The page you are looking for may have been moved, renamed, or never existed. Let us help you find what you
            need.
        </p>
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="btn-gold px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">&larr; Return Home</a>
            <?php
            $contact = get_page_by_path('contact');
            $url = $contact ? get_permalink($contact->ID) : home_url('/contact/');
            ?>

            <a href="<?php echo esc_url($url); ?>"
                class="btn-ghost px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                Contact Us
            </a>
        </div>
        <!-- Quick links -->
        <div
            class="grid grid-cols-2 sm:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] text-left">
            <?php
      $links = ['About','Academics','Pillars','Campus Life','Admissions','Contact'];
      foreach ($links as $l) {

          $slug = sanitize_title($l);

          $page = get_page_by_path($slug, OBJECT, 'page');

          $url  = $page ? get_permalink($page->ID) : '#';

          echo '<a href="' . esc_url($url) . '" class="p-5 bg-[#111827] hover:bg-[#1F3A2E] transition group">';
          echo '<div class="font-display text-sm group-hover:text-[#D4B574] transition">' . esc_html($l) . '</div>';
          echo '<div class="text-[10px] text-white/30 tracking-[0.18em] uppercase mt-1 group-hover:text-white/50 transition">&rarr;</div>';
          echo '</a>';
      }
      ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
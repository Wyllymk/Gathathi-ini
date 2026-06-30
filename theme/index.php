<?php
/**
 * index.php — Blog / News archive. Also the fallback template for any unmatched request.
 */
get_header();

$is_search = is_search();
$is_404    = is_404();
?>

<!-- ARCHIVE HERO -->
<section class="relative pt-40 pb-20 lg:pt-52 lg:pb-28 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20 pointer-events-none"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <?php if ( is_home() && ! is_front_page() ) : ?>
        <p class="eyebrow mb-6">The School Journal</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[80px] tracking-[-0.03em] leading-[0.98]">
            News &amp; <span class="font-serif-i italic text-[#D4B574]">Updates</span>.
        </h1>
        <p class="mt-6 text-white/60 text-lg max-w-xl leading-relaxed">The latest from Gathathiini Boys High School —
            academic achievements, sporting glory, events, and community stories.</p>

        <?php elseif ( $is_search ) : ?>
        <p class="eyebrow mb-6">Search results</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[80px] tracking-[-0.03em] leading-[0.98]">
            Results for: <span
                class="font-serif-i italic text-[#D4B574]">&ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</span>
        </h1>
        <p class="mt-4 text-white/50"><?php global $wp_query; echo number_format_i18n($wp_query->found_posts); ?>
            result<?php echo $wp_query->found_posts !== 1 ? 's' : ''; ?> found.</p>

        <?php else : ?>
        <p class="eyebrow mb-6">Latest</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[80px] tracking-[-0.03em] leading-[0.98]">
            News &amp; <span class="font-serif-i italic text-[#D4B574]">Stories</span>.
        </h1>
        <?php endif; ?>
    </div>
</section>

<!-- POSTS GRID -->
<section class="py-20 lg:py-28">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-12 gap-12">

            <!-- Posts list -->
            <main class="lg:col-span-8" id="main-content">
                <?php if ( have_posts() ) : ?>

                <!-- Featured / first post -->
                <?php
          the_post();
          ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-16 reveal'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden mb-6 group">
                        <?php the_post_thumbnail('gbhs-landscape', ['class'=>'w-full transition duration-700 group-hover:scale-105 grayscale group-hover:grayscale-0']); ?>
                    </a>
                    <?php endif; ?>
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <?php
              $cats = get_the_category();
              foreach ($cats as $cat) {
                  echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '"
                           class="px-3 py-1 border border-[rgba(184,146,72,.3)] text-[10px] tracking-[0.22em] uppercase text-[#D4B574] hover:bg-[rgba(184,146,72,.1)] transition">'
                       . esc_html($cat->name) . '</a>';
              }
              ?>
                        <span class="eyebrow"><?php echo get_the_date('d F Y'); ?></span>
                    </div>
                    <h2 class="font-display text-3xl lg:text-4xl tracking-[-0.02em] leading-[1.1] mb-4">
                        <a href="<?php the_permalink(); ?>"
                            class="hover:text-[#D4B574] transition"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-white/65 leading-relaxed mb-6"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>"
                        class="inline-flex items-center gap-3 text-[11px] tracking-[0.24em] uppercase text-[#D4B574] link-underline">
                        Read Article <span>&rarr;</span>
                    </a>
                </article>

                <!-- Remaining posts grid -->
                <?php if ( have_posts() ) : ?>
                <div
                    class="grid sm:grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] mb-12">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-[#111827] p-7 lg:p-9 reveal'); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="block overflow-hidden mb-5 group">
                            <?php the_post_thumbnail('gbhs-square', ['class'=>'w-full h-48 object-cover transition duration-700 group-hover:scale-105 grayscale group-hover:grayscale-0']); ?>
                        </a>
                        <?php endif; ?>
                        <div class="eyebrow mb-3"><?php echo get_the_date('d M Y'); ?></div>
                        <h2 class="font-display text-xl tracking-[-0.01em] leading-snug mb-3">
                            <a href="<?php the_permalink(); ?>"
                                class="hover:text-[#D4B574] transition"><?php the_title(); ?></a>
                        </h2>
                        <p class="text-sm text-white/55 leading-relaxed mb-5">
                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <a href="<?php the_permalink(); ?>"
                            class="text-[10px] tracking-[0.24em] uppercase text-[#D4B574] link-underline inline-flex items-center gap-2">
                            Read <span>&rarr;</span>
                        </a>
                    </article>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <!-- Pagination -->
                <?php
          the_posts_pagination([
              'mid_size'           => 2,
              'prev_text'          => '&larr; Newer',
              'next_text'          => 'Older &rarr;',
              'before_page_number' => '',
              'screen_reader_text' => 'Navigation',
              'class'              => 'flex flex-wrap items-center gap-3',
          ]);
          ?>

                <?php else : ?>
                <!-- No posts found -->
                <div class="py-20 text-center border border-[rgba(245,241,232,.14)]">
                    <p class="font-serif-i italic text-4xl text-[#D4B574] mb-6">Nothing here yet.</p>
                    <p class="text-white/55 mb-8">
                        <?php echo $is_search ? 'No results matched your search. Try different keywords.' : 'No posts have been published yet. Check back soon.'; ?>
                    </p>
                    <?php if ( $is_search ) : ?>
                    <?php get_search_form(); ?>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="btn-ghost px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase inline-block mt-6">
                        &larr; Return Home
                    </a>
                </div>
                <?php endif; ?>
            </main>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-6">
                <!-- Search -->
                <div class="border border-[rgba(245,241,232,.14)] p-6">
                    <div class="eyebrow mb-4">Search</div>
                    <?php get_search_form(); ?>
                </div>

                <!-- Categories -->
                <?php
        $categories = get_categories(['hide_empty'=>true]);
        if ( $categories ) :
        ?>
                <div class="border border-[rgba(245,241,232,.14)] p-6 bg-[#111827]">
                    <div class="eyebrow mb-5">Categories</div>
                    <ul class="space-y-2">
                        <?php foreach ( $categories as $cat ) : ?>
                        <li
                            class="flex justify-between items-center border-b border-[rgba(245,241,232,.06)] pb-2 last:border-0 last:pb-0">
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
                                class="text-sm text-white/65 link-underline hover:text-white transition">
                                <?php echo esc_html($cat->name); ?>
                            </a>
                            <span class="num text-xs text-white/30"><?php echo esc_html($cat->count); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- School info -->
                <div class="border border-[rgba(245,241,232,.14)] p-6 bg-[#111827]">
                    <div class="eyebrow mb-4">About the School</div>
                    <p class="text-sm text-white/60 leading-relaxed mb-4">A county boarding school in Kirurumi, Nyeri,
                        forming Kenyan boys into men of character and consequence since 1968.</p>
                    <div class="space-y-2 text-sm">
                        <a href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',gbhs_phone())); ?>"
                            class="flex items-center gap-2 text-white/55 hover:text-white transition">
                            <span class="text-[#D4B574] text-xs">&phone;</span> <?php echo esc_html(gbhs_phone()); ?>
                        </a>
                        <a href="mailto:<?php echo esc_attr(gbhs_email()); ?>"
                            class="flex items-center gap-2 text-white/55 hover:text-white transition link-underline">
                            <span class="text-[#D4B574] text-xs">@</span> <?php echo esc_html(gbhs_email()); ?>
                        </a>
                    </div>
                </div>

                <!-- Admissions CTA -->
                <div class="border border-[rgba(245,241,232,.14)] p-6 bg-[#1F3A2E]">
                    <div class="eyebrow mb-4">Admissions 2026</div>
                    <p class="text-sm text-white/70 leading-relaxed">Form One applications are open. Limited places.
                        Apply early.</p>
                    <?php
                    $page = get_page_by_path('admissions');
                    $url  = $page ? get_permalink($page->ID) : home_url('/admissions/');
                    ?>

                    <a href="<?php echo esc_url($url); ?>"
                        class="btn-gold mt-5 px-5 py-2.5 font-display text-[11px] tracking-[0.2em] uppercase inline-block">
                        Apply Now &rarr;
                    </a>
                </div>

                <?php if ( is_active_sidebar('blog-sidebar') ) : ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>
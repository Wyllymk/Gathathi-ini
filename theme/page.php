<?php
/**
 * Default page template — used for any page without a custom template.
 * Renders the page title + content from the WordPress editor (Gutenberg or Classic).
 */
get_header();
?>

<!-- PAGE HERO -->
<section class="relative pt-40 pb-20 lg:pt-52 lg:pb-28 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20 pointer-events-none"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <?php while ( have_posts() ) : the_post(); ?>
        <p class="eyebrow mb-6">
            <?php echo esc_html( get_post_type_object( get_post_type() )->labels->name ); ?>
        </p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[80px] tracking-[-0.03em] leading-[0.98] max-w-4xl">
            <?php the_title(); ?>
        </h1>
        <?php if ( has_excerpt() ) : ?>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed"><?php the_excerpt(); ?></p>
        <?php endif; ?>
        <?php endwhile; rewind_posts(); ?>
    </div>
</section>

<!-- PAGE CONTENT -->
<section class="py-20 lg:py-28">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-12 gap-12">

            <!-- Main content -->
            <main class="lg:col-span-8 xl:col-span-9" id="main-content">
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'prose prose-invert prose-lg max-w-none' ); ?>>
                    <div class="
            text-white/75 leading-relaxed
            [&_h2]:font-display [&_h2]:text-3xl [&_h2]:text-white [&_h2]:mt-12 [&_h2]:mb-4
            [&_h3]:font-display [&_h3]:text-2xl [&_h3]:text-white [&_h3]:mt-8 [&_h3]:mb-3
            [&_p]:mb-5 [&_p]:text-white/70 [&_p]:leading-relaxed
            [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:space-y-2 [&_ul]:text-white/65
            [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:space-y-2 [&_ol]:text-white/65
            [&_a]:text-[#D4B574] [&_a]:underline
            [&_blockquote]:border-l-2 [&_blockquote]:border-[#B89248] [&_blockquote]:pl-6 [&_blockquote]:italic [&_blockquote]:text-white/60
            [&_img]:w-full [&_img]:my-8
            [&_strong]:text-white [&_strong]:font-semibold
          ">
                        <?php the_content(); ?>
                    </div>
                    <?php
          wp_link_pages([
            'before'    => '<nav class="mt-10 flex gap-4 text-sm"><span class="eyebrow">Pages:</span>',
            'after'     => '</nav>',
            'link_before'=> '<span class="btn-ghost px-4 py-1.5 font-display text-xs tracking-[0.18em]">',
            'link_after' => '</span>',
          ]);
          ?>
                </article>
                <?php endwhile; ?>
            </main>

            <!-- Sidebar (optional) -->
            <aside class="lg:col-span-4 xl:col-span-3">
                <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                <?php else : ?>
                <!-- Default sidebar content when no widgets set -->
                <div class="border border-[rgba(245,241,232,.14)] p-8 mb-6">
                    <div class="eyebrow mb-4">Quick Links</div>
                    <ul class="space-y-3 text-sm text-white/70">
                        <?php
              $nav_pages = ['About','Academics','Pillars','Campus Life','Admissions','Contact'];
              foreach ($nav_pages as $pg) {

                  $slug = sanitize_title($pg);

                  $page = get_page_by_path($slug, OBJECT, 'page');

                  $url = $page ? get_permalink($page->ID) : '#';

                  echo '<li><a href="' . esc_url($url) . '" class="link-underline hover:text-white transition">'
                      . esc_html($pg) .
                  '</a></li>';
              }
              ?>
                    </ul>
                </div>
                <div class="border border-[rgba(245,241,232,.14)] p-8">
                    <div class="eyebrow mb-4">Contact</div>
                    <div class="space-y-3 text-sm text-white/70">
                        <p><?php echo nl2br(esc_html(gbhs_address())); ?></p>
                        <p><a href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',gbhs_phone())); ?>"
                                class="link-underline"><?php echo esc_html(gbhs_phone()); ?></a></p>
                        <p><a href="mailto:<?php echo esc_attr(gbhs_email()); ?>"
                                class="link-underline"><?php echo esc_html(gbhs_email()); ?></a></p>
                    </div>
                    <?php
                    $page = get_page_by_path('admissions');
                    $url  = $page ? get_permalink($page->ID) : home_url('/admissions/');
                    ?>

                    <a href="<?php echo esc_url($url); ?>"
                        class="btn-gold mt-6 px-5 py-2.5 font-display text-[11px] tracking-[0.2em] uppercase inline-block">
                        Apply Now &rarr;
                    </a>
                </div>
                <?php endif; ?>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>
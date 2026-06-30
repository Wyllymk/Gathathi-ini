<?php
/**
 * archive.php — Category, tag, date and author archives.
 */
get_header();
?>

<section class="relative pt-40 pb-20 lg:pt-52 lg:pb-28 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20 pointer-events-none"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <?php the_archive_title( '<p class="eyebrow mb-4">Archive</p><h1 class="font-display text-5xl md:text-7xl lg:text-[80px] tracking-[-0.03em] leading-[0.98]">', '</h1>' ); ?>
        <?php if ( get_the_archive_description() ) : ?>
        <div class="mt-6 text-white/60 text-lg max-w-xl leading-relaxed"><?php the_archive_description(); ?></div>
        <?php endif; ?>
    </div>
</section>

<section class="py-20 lg:py-28">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <?php if ( have_posts() ) : ?>
        <div
            class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] mb-12">
            <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-[#111827] p-7 reveal'); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="block overflow-hidden mb-5 group">
                    <?php the_post_thumbnail('gbhs-square', ['class'=>'w-full h-48 object-cover grayscale group-hover:grayscale-0 transition duration-700 group-hover:scale-105']); ?>
                </a>
                <?php endif; ?>
                <div class="eyebrow mb-3"><?php echo get_the_date('d M Y'); ?></div>
                <h2 class="font-display text-xl tracking-[-0.01em] leading-snug mb-3">
                    <a href="<?php the_permalink(); ?>"
                        class="hover:text-[#D4B574] transition"><?php the_title(); ?></a>
                </h2>
                <p class="text-sm text-white/55 leading-relaxed mb-5"><?php echo wp_trim_words(get_the_excerpt(),18); ?>
                </p>
                <a href="<?php the_permalink(); ?>"
                    class="text-[10px] tracking-[0.24em] uppercase text-[#D4B574] link-underline inline-flex items-center gap-2">Read
                    <span>&rarr;</span></a>
            </article>
            <?php endwhile; ?>
        </div>
        <?php
    the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => '&larr; Newer',
        'next_text' => 'Older &rarr;',
    ]);
    ?>
        <?php else : ?>
        <div class="py-20 text-center">
            <p class="font-serif-i italic text-3xl text-white/40">No posts found in this archive.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
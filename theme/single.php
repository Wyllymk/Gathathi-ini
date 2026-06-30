<?php
/**
 * Single post template — used for blog posts / news articles.
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- POST HERO -->
<section class="relative pt-40 pb-20 lg:pt-52 lg:pb-28 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20 pointer-events-none"></div>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="absolute inset-0 opacity-20">
        <?php the_post_thumbnail('gbhs-hero','class=w-full h-full object-cover'); ?>
        <div class="absolute inset-0 bg-gradient-to-r from-[#0B1220] to-transparent"></div>
    </div>
    <?php endif; ?>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-3 text-[11px] tracking-[0.22em] uppercase text-white/40 mb-8"
            aria-label="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="link-underline hover:text-white/70 transition">Home</a>
            <span>/</span>
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                class="link-underline hover:text-white/70 transition">News</a>
            <span>/</span>
            <span class="text-white/60 truncate max-w-[200px]"><?php the_title(); ?></span>
        </nav>

        <!-- Category + Date -->
        <div class="flex flex-wrap items-center gap-4 mb-8">
            <?php
      $cats = get_the_category();
      if ( $cats ) {
          foreach ( $cats as $cat ) {
              echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '"
                       class="px-3 py-1 border border-[rgba(184,146,72,.4)] text-[10px] tracking-[0.24em] uppercase text-[#D4B574] hover:bg-[rgba(184,146,72,.1)] transition">'
                   . esc_html( $cat->name ) . '</a>';
          }
      }
      ?>
            <span class="eyebrow"><?php echo get_the_date('d F Y'); ?></span>
        </div>

        <h1 class="font-display text-4xl md:text-6xl lg:text-[72px] tracking-[-0.03em] leading-[1.0] max-w-4xl">
            <?php the_title(); ?>
        </h1>

        <?php if ( has_excerpt() ) : ?>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed"><?php the_excerpt(); ?></p>
        <?php endif; ?>

        <!-- Author + Read time -->
        <div class="mt-10 flex items-center gap-6 pt-8 border-t border-[rgba(245,241,232,.14)]">
            <div class="flex items-center gap-3">
                <?php echo get_avatar( get_the_author_meta('ID'), 36, '', get_the_author(), ['class'=>'rounded-none grayscale'] ); ?>
                <div>
                    <div class="text-xs font-display tracking-wide"><?php the_author(); ?></div>
                    <div class="text-[10px] text-white/40 tracking-[0.18em] uppercase mt-0.5">
                        <?php
            $word_count   = str_word_count( strip_tags( get_the_content() ) );
            $reading_time = max( 1, ceil( $word_count / 200 ) );
            echo $reading_time . ' min read';
            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- POST BODY -->
<section class="py-20 lg:py-28">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-12 gap-12">

            <!-- Article -->
            <article class="lg:col-span-8 xl:col-span-7 reveal" id="main-content">
                <?php if ( has_post_thumbnail() ) : ?>
                <figure class="mb-12">
                    <?php the_post_thumbnail( 'gbhs-landscape', ['class'=>'w-full'] ); ?>
                    <?php if ( get_the_post_thumbnail_caption() ) : ?>
                    <figcaption class="mt-3 text-xs text-white/40 tracking-[0.1em]">
                        <?php echo esc_html( get_the_post_thumbnail_caption() ); ?></figcaption>
                    <?php endif; ?>
                </figure>
                <?php endif; ?>

                <div class="
          [&_h2]:font-display [&_h2]:text-3xl [&_h2]:text-white [&_h2]:mt-14 [&_h2]:mb-5 [&_h2]:tracking-[-0.01em]
          [&_h3]:font-display [&_h3]:text-2xl [&_h3]:text-white [&_h3]:mt-10 [&_h3]:mb-4
          [&_h4]:font-display [&_h4]:text-xl [&_h4]:text-white [&_h4]:mt-8 [&_h4]:mb-3
          [&_p]:mb-6 [&_p]:text-white/70 [&_p]:leading-[1.9] [&_p]:text-[16px]
          [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:mb-6 [&_ul]:space-y-2 [&_ul]:text-white/65 [&_ul]:leading-relaxed
          [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:mb-6 [&_ol]:space-y-2 [&_ol]:text-white/65
          [&_a]:text-[#D4B574] [&_a]:underline [&_a:hover]:text-[#B89248]
          [&_blockquote]:border-l-2 [&_blockquote]:border-[#B89248] [&_blockquote]:pl-8 [&_blockquote]:py-2 [&_blockquote]:my-10 [&_blockquote]:font-serif-i [&_blockquote]:italic [&_blockquote]:text-2xl [&_blockquote]:text-white/80 [&_blockquote]:leading-[1.5]
          [&_img]:w-full [&_img]:my-8
          [&_figure]:my-10 [&_figcaption]:text-xs [&_figcaption]:text-white/40 [&_figcaption]:mt-3 [&_figcaption]:tracking-[0.1em]
          [&_strong]:text-white [&_strong]:font-semibold
          [&_em]:text-white/85
          [&_hr]:border-[rgba(245,241,232,.14)] [&_hr]:my-10
          [&_table]:w-full [&_table]:text-sm [&_th]:text-left [&_th]:font-display [&_th]:p-3 [&_th]:border-b [&_th]:border-[rgba(245,241,232,.14)]
          [&_td]:p-3 [&_td]:border-b [&_td]:border-[rgba(245,241,232,.08)] [&_td]:text-white/65
        ">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
        $tags = get_the_tags();
        if ( $tags ) :
        ?>
                <div class="mt-12 pt-8 border-t border-[rgba(245,241,232,.14)] flex flex-wrap items-center gap-3">
                    <span class="eyebrow">Tags:</span>
                    <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                        class="px-3 py-1 border border-[rgba(245,241,232,.14)] text-[10px] tracking-[0.2em] uppercase text-white/50 hover:border-[#B89248] hover:text-[#D4B574] transition">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Share -->
                <div class="mt-8 pt-8 border-t border-[rgba(245,241,232,.14)] flex flex-wrap items-center gap-6">
                    <span class="eyebrow">Share:</span>
                    <?php
          $post_url   = rawurlencode( get_permalink() );
          $post_title = rawurlencode( get_the_title() );
          $shares = [
            ['Twitter / X', 'https://twitter.com/intent/tweet?url='.$post_url.'&text='.$post_title],
            ['Facebook',    'https://www.facebook.com/sharer/sharer.php?u='.$post_url],
            ['WhatsApp',    'https://wa.me/?text='.$post_title.'%20'.$post_url],
            ['LinkedIn',    'https://www.linkedin.com/shareArticle?mini=true&url='.$post_url.'&title='.$post_title],
          ];
          foreach ($shares as $s) {
              echo '<a href="' . $s[1] . '" target="_blank" rel="noopener"
                       class="text-[11px] tracking-[0.2em] uppercase text-white/50 hover:text-[#D4B574] link-underline transition">'
                   . $s[0] . '</a>';
          }
          ?>
                </div>

                <!-- Prev / Next navigation -->
                <nav class="mt-16 grid sm:grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]"
                    aria-label="Post navigation">
                    <?php
          $prev = get_previous_post();
          $next = get_next_post();
          ?>
                    <?php if ( $prev ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>"
                        class="p-6 bg-[#111827] hover:bg-[#1F3A2E] transition group">
                        <div class="eyebrow mb-3 flex items-center gap-2"><span>&larr;</span> Previous</div>
                        <div class="font-display text-base leading-snug group-hover:text-[#D4B574] transition">
                            <?php echo esc_html( get_the_title( $prev->ID ) ); ?></div>
                    </a>
                    <?php else : ?>
                    <div class="p-6 bg-[#0B1220] opacity-30"></div>
                    <?php endif; ?>

                    <?php if ( $next ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>"
                        class="p-6 bg-[#111827] hover:bg-[#1F3A2E] transition group text-right">
                        <div class="eyebrow mb-3 flex items-center justify-end gap-2">Next <span>&rarr;</span></div>
                        <div class="font-display text-base leading-snug group-hover:text-[#D4B574] transition">
                            <?php echo esc_html( get_the_title( $next->ID ) ); ?></div>
                    </a>
                    <?php else : ?>
                    <div class="p-6 bg-[#0B1220] opacity-30"></div>
                    <?php endif; ?>
                </nav>

                <!-- Comments -->
                <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="mt-16 pt-8 border-t border-[rgba(245,241,232,.14)]">
                    <?php comments_template(); ?>
                </div>
                <?php endif; ?>

            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 xl:col-span-5 space-y-6">
                <!-- About the school -->
                <div class="border border-[rgba(245,241,232,.14)] p-8 bg-[#111827]">
                    <div class="eyebrow mb-4">About Gathathiini</div>
                    <p class="text-sm text-white/60 leading-relaxed">A county boarding school in Kirurumi, Nyeri,
                        forming Kenyan boys into men of character, intellect and consequence since 1968.</p>
                    <?php
                    $about = get_page_by_path('about');
                    $url   = $about ? get_permalink($about->ID) : home_url('/about/');
                    ?>

                    <a href="<?php echo esc_url($url); ?>"
                        class="mt-5 inline-block text-[11px] tracking-[0.2em] uppercase text-[#D4B574] link-underline">
                        Our Story &rarr;
                    </a>
                </div>

                <!-- Recent posts -->
                <?php
        $recent = new WP_Query(['post_type'=>'post','posts_per_page'=>4,'post__not_in'=>[get_the_ID()]]);
        if ( $recent->have_posts() ) :
        ?>
                <div class="border border-[rgba(245,241,232,.14)] p-8 bg-[#111827]">
                    <div class="eyebrow mb-6">Recent News</div>
                    <ul class="space-y-px">
                        <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"
                                class="flex gap-4 p-4 bg-[#0B1220] hover:bg-[#1F3A2E] transition group border-b border-[rgba(245,241,232,.06)] last:border-0">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="w-16 h-16 flex-shrink-0 overflow-hidden bg-[#111827]">
                                    <?php the_post_thumbnail('thumbnail','class=w-full h-full object-cover grayscale group-hover:grayscale-0 transition'); ?>
                                </div>
                                <?php endif; ?>
                                <div>
                                    <div
                                        class="font-display text-sm leading-snug text-white/85 group-hover:text-[#D4B574] transition">
                                        <?php the_title(); ?></div>
                                    <div class="text-[10px] text-white/40 tracking-[0.15em] uppercase mt-1">
                                        <?php echo get_the_date('d M Y'); ?></div>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- Admissions CTA -->
                <div class="border border-[rgba(245,241,232,.14)] p-8 bg-[#1F3A2E]">
                    <div class="eyebrow mb-4">Admissions 2026</div>
                    <p class="text-sm text-white/70 leading-relaxed">Applications for our next Form One intake are open.
                        Limited places available.</p>
                    <?php
                    $admissions = get_page_by_path('admissions');
                    $url = $admissions ? get_permalink($admissions->ID) : home_url('/admissions/');
                    ?>

                    <a href="<?php echo esc_url($url); ?>"
                        class="btn-gold mt-6 px-5 py-2.5 font-display text-[11px] tracking-[0.2em] uppercase inline-block">
                        Apply Now &rarr;
                    </a>
                </div>

                <!-- Contact -->
                <div class="border border-[rgba(245,241,232,.14)] p-8">
                    <div class="eyebrow mb-4">Contact Us</div>
                    <div class="space-y-2 text-sm text-white/70">
                        <p><a href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',gbhs_phone())); ?>"
                                class="link-underline"><?php echo esc_html(gbhs_phone()); ?></a></p>
                        <p><a href="mailto:<?php echo esc_attr(gbhs_email()); ?>"
                                class="link-underline"><?php echo esc_html(gbhs_email()); ?></a></p>
                    </div>
                </div>

                <?php if ( is_active_sidebar('blog-sidebar') ) : ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </aside>

        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
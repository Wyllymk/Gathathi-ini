<?php
/**
 * Template: Homepage (static front page)
 * Set via Settings > Reading > "A static page" > Front page
 */
get_header();

// ACF field helpers with fallbacks
$hero_image   = gbhs_field( 'hero_image',      get_template_directory_uri() . '/assets/images/hero.jpg' );
$hero_hl      = gbhs_field( 'hero_headline',   'Raising men of <span class="font-serif-i italic text-[#D4B574]">purpose</span>,<br/>discipline &amp; <span class="font-serif-i italic text-[#D4B574]">excellence</span>.' );
$hero_sub     = gbhs_field( 'hero_subtext',    'For decades, Gathathiini Boys has formed young Kenyans into thinkers, leaders, and men of integrity &mdash; ready for the world and the work it asks of them.' );
$cta_primary  = gbhs_field( 'hero_cta_primary', 'Begin Application' );
$cta_second   = gbhs_field( 'hero_cta_second',  'Discover More' );
$principal_img= gbhs_field( 'principal_image',  '' );

$principal_url = get_template_directory_uri() . '/assets/img/principal.jpg';
                        
$id_heading   = gbhs_field( 'identity_heading', 'We do not simply <span class="font-serif-i italic text-[#D4B574]">teach</span> boys.<br/>We <span class="font-serif-i italic text-[#D4B574]">form</span> the men they will become.' );
$id_body      = gbhs_field( 'identity_body',    'Every morning at Gathathiini begins the same way &mdash; in silence, in formation, in conviction. What follows is not only learning, but transformation. A boy enters our gate uncertain. He leaves grounded in values, sharpened in mind, and ready to lead the Kenya of tomorrow.' );
$principal_q  = gbhs_field( 'principal_quote',  'Boys enter here uncertain. They leave as men of discipline, purpose and consequence.' );
$adm_heading  = gbhs_field( 'admissions_cta',   'Your son\'s <em>transformation</em><br/>starts here.' );
$adm_sub      = gbhs_field( 'admissions_sub',    'Applications for the 2026 cohort are open. Schedule a campus visit, meet our principal, and walk the grounds your son may one day call home.' );

// Page links
function hp_link( string $title ): string {
    $slug = sanitize_title( $title );

    $page = get_page_by_path( $slug, OBJECT, 'page' );

    return $page ? get_permalink( $page->ID ) : '#';
}
$about_url    = hp_link('About');
$pillars_url  = hp_link('Pillars');
$campus_url   = hp_link('Campus Life');
$admissions_url = hp_link('Admissions');
?>

<!-- ════════════════════════════════════════════════════════
     HERO
     ════════════════════════════════════════════════════════ -->
<section id="hero" class="relative min-h-screen w-full overflow-hidden" aria-label="Hero">
    <?php if ( $hero_image ) : ?>
    <img src="<?php echo esc_url( $hero_image ); ?>" alt="Gathathiini Boys High School"
        class="absolute inset-0 w-full h-full object-cover object-center" />
    <?php endif; ?>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0B1220]/85 via-[#0B1220]/55 to-[#0B1220]"></div>
    <div class="absolute inset-0 vignette"></div>
    <div class="absolute inset-0 grain opacity-40 pointer-events-none"></div>

    <div class="relative z-10 max-w-[1440px] mx-auto px-6 lg:px-10 min-h-screen flex flex-col" data-hero-content>

        <!-- Location bar -->
        <div class="pt-36 flex items-center justify-between text-[11px] tracking-[0.32em] uppercase text-[#D4B574]">
            <span>Kirurumi, Nyeri County &middot; Kenya</span>
            <span class="hidden md:block">S 00&deg;22&prime; &middot; E 36&deg;57&prime;</span>
            <span>Form&nbsp;1 &mdash; Form&nbsp;4</span>
        </div>

        <!-- Headline -->
        <div class="mt-auto pt-28 grid lg:grid-cols-12 gap-10 items-end pb-8">
            <div class="lg:col-span-8 reveal">
                <p class="eyebrow mb-8">&mdash; A school of character</p>
                <h1 class="font-display text-[44px] leading-[1.02] sm:text-[68px] lg:text-[104px] tracking-[-0.03em]">
                    <?php echo wp_kses_post( $hero_hl ); ?>
                </h1>
            </div>
            <div class="lg:col-span-4 lg:pb-4 reveal" style="transition-delay:.15s">
                <p class="text-base lg:text-[17px] leading-relaxed text-white/75 max-w-md">
                    <?php echo wp_kses_post( $hero_sub ); ?>
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="<?php echo esc_url( $admissions_url ); ?>"
                        class="btn-gold px-6 py-3.5 font-display text-[12px] tracking-[0.22em] uppercase">
                        <?php echo esc_html( $cta_primary ); ?>
                    </a>
                    <a href="<?php echo esc_url( $about_url ); ?>"
                        class="btn-ghost px-6 py-3.5 font-display text-[12px] tracking-[0.22em] uppercase">
                        <?php echo esc_html( $cta_second ); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats bar -->
        <div
            class="relative z-10 grid grid-cols-2 md:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] glass reveal">
            <?php
      $stats = [
        [ gbhs_field('stat_1_num','57.'), gbhs_field('stat_1_label','Years of heritage') ],
        [ gbhs_field('stat_2_num','340+'),gbhs_field('stat_2_label','Boys in formation') ],
        [ gbhs_field('stat_3_num','94%'), gbhs_field('stat_3_label','KCSE pass rate')    ],
        [ gbhs_field('stat_4_num','38'),  gbhs_field('stat_4_label','Clubs &amp; societies') ],
      ];
      foreach ( $stats as $i => $s ) {
          $delay = $i ? ' style="transition-delay:' . ($i * .1) . 's"' : '';
          echo '<div class="p-6 lg:p-8 bg-[#0B1220]/60 reveal"' . $delay . '>';
          echo '<div class="num text-4xl lg:text-5xl">' . esc_html( $s[0] ) . '</div>';
          echo '<div class="eyebrow mt-3">' . wp_kses_post( $s[1] ) . '</div>';
          echo '</div>';
      }
      ?>
        </div>

        <!-- Scroll indicator -->
        <div class="py-6 flex flex-col items-center gap-2 text-[10px] tracking-[0.32em] uppercase text-white/60">
            <span>Scroll</span>
            <span class="w-px h-10 bg-white/40 relative overflow-hidden">
                <span class="absolute top-0 left-0 w-px h-4 bg-[#B89248] animate-bounce"></span>
            </span>
        </div>
    </div>
</section>

<!-- MARQUEE -->
<section class="border-y border-[rgba(245,241,232,.14)] bg-[#111827] overflow-hidden py-6" aria-hidden="true">
    <div class="marquee whitespace-nowrap font-serif-i italic text-2xl md:text-3xl text-white/40">
        <?php
    $words = ['Brotherhood','Discipline','Integrity','Leadership','Excellence','Heritage','Purpose','Character'];
    $full  = array_merge( $words, $words ); // duplicate for seamless loop
    foreach ( $full as $w ) {
        echo '<span class="px-10">' . esc_html( $w ) . '</span><span class="px-10 text-[#D4B574]">&middot;</span>';
    }
    ?>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     IDENTITY
     ════════════════════════════════════════════════════════ -->
<section id="identity" class="relative py-28 lg:py-40">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-12 gap-12 lg:gap-20">

        <div class="lg:col-span-5 reveal">
            <div class="relative aspect-[4/5] overflow-hidden bg-[#111827]">
                <?php if ( $principal_url ) : ?>
                <img src="<?php echo esc_url( $principal_url ); ?>" alt="Principal — Gathathiini Boys High School"
                    class="w-full h-full object-cover grayscale" />
                <?php else : ?>
                <div class="w-full h-full flex items-center justify-center bg-[#111827]">
                    <span class="font-serif-i italic text-[120px] text-white/05">G</span>
                </div>
                <?php endif; ?>
                <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                    <div class="eyebrow">The Principal</div>
                    <div class="font-display text-sm mt-1">Gathathiini Boys High School</div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7 reveal flex flex-col" style="transition-delay:.15s">
            <p class="eyebrow">01 &mdash; A word from the principal</p>
            <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.02em] leading-[1.05] mt-6">
                <?php echo wp_kses_post( $id_heading ); ?>
            </h2>
            <p class="mt-10 text-white/70 text-lg leading-relaxed max-w-2xl">
                <?php echo wp_kses_post( $id_body ); ?>
            </p>
            <?php if ( $principal_q ) : ?>
            <blockquote class="mt-8 border-l-2 border-[#B89248] pl-6 py-1">
                <p class="font-serif-i italic text-xl text-white/80 leading-relaxed">
                    &ldquo;<?php echo esc_html( $principal_q ); ?>&rdquo;
                </p>
            </blockquote>
            <?php endif; ?>
            <div
                class="mt-12 grid sm:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
                <div class="p-6 bg-[#0B1220]">
                    <div class="eyebrow">Mission</div>
                    <p class="mt-3 text-sm text-white/80 leading-relaxed">To form disciplined, principled, future-ready
                        men through rigorous learning and lived character.</p>
                </div>
                <div class="p-6 bg-[#0B1220]">
                    <div class="eyebrow">Vision</div>
                    <p class="mt-3 text-sm text-white/80 leading-relaxed">An African school whose graduates raise the
                        standard of leadership wherever they stand.</p>
                </div>
                <div class="p-6 bg-[#0B1220]">
                    <div class="eyebrow">Motto</div>
                    <p class="mt-3 font-serif-i italic text-2xl text-[#D4B574]">Vir Integer.</p>
                    <p class="text-xs text-white/50 mt-1">&mdash; the whole man.</p>
                </div>
            </div>
            <div class="mt-8">
                <a href="<?php echo esc_url( $about_url ); ?>"
                    class="btn-ghost px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase inline-block">
                    Read Full Story &rarr;
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     PILLARS PREVIEW
     ════════════════════════════════════════════════════════ -->
<section id="pillars" class="relative py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 reveal">
            <div class="max-w-2xl">
                <p class="eyebrow">02 &mdash; The six pillars</p>
                <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.02em] leading-[1.05] mt-6">
                    A formation system, <span class="font-serif-i italic text-[#D4B574]">not a curriculum</span>.
                </h2>
            </div>
            <div>
                <p class="text-white/60 max-w-md text-[15px] leading-relaxed mb-6">Six pillars hold the Gathathiini man
                    upright. Each is taught, practised, examined and lived &mdash; every day, for four years.</p>
                <a href="<?php echo esc_url( $pillars_url ); ?>"
                    class="btn-ghost px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase inline-block">
                    Explore All Pillars &rarr;
                </a>
            </div>
        </div>

        <?php
    $pillars = [
      ['I',   'Academic Excellence',    'Mastery across CBC sciences, humanities and languages, with measurable rigor and relentless standards.'],
      ['II',  'Sports &amp; Talent',    'Athletics, rugby, swimming &mdash; discipline of the body sharpens the mind and forges resilience.'],
      ['III', 'Creative Arts',          'Music, drama, fine art and debate as vehicles of voice, identity, and articulate manhood.'],
      ['IV',  'Digital Literacy',       'Code, computation and critical thinking for a digital African century. Future-ready from Form One.'],
      ['V',   'Social Responsibility',  'Service learning, mentorship and civic engagement. Privilege demands contribution.'],
      ['VI',  'Holistic Development',   'Spiritual grounding, emotional intelligence, and the character traits that separate good men from great ones.'],
    ];
    echo '<div class="mt-16 grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">';
    foreach ( $pillars as $i => $p ) {
        $delay = $i ? ' style="transition-delay:' . round( ( $i % 3 ) * .1, 1 ) . 's"' : '';
        echo '<article class="group bg-[#0B1220] overflow-hidden reveal"' . $delay . '>';
        echo '<div class="relative h-48 overflow-hidden bg-[#1F3A2E]">';
        echo '<div class="absolute inset-0 bg-gradient-to-t from-[#0B1220] to-transparent"></div>';
        echo '<span class="absolute top-5 left-5 font-serif-i italic text-5xl text-white/20">' . $p[0] . '</span>';
        echo '</div>';
        echo '<div class="p-7 lg:p-9">';
        echo '<h3 class="font-display text-2xl tracking-[-0.01em]">' . $p[1] . '</h3>';
        echo '<p class="mt-3 text-sm text-white/60 leading-relaxed">' . $p[2] . '</p>';
        echo '<div class="mt-6 flex items-center gap-3 text-[11px] tracking-[0.28em] uppercase text-[#D4B574] group-hover:text-[#B89248] transition">';
        echo '<a href="' . esc_url( $pillars_url ) . '">Explore</a><span class="w-8 h-px bg-current"></span>';
        echo '</div></div></article>';
    }
    echo '</div>';
    ?>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     CAMPUS LIFE GALLERY
     ════════════════════════════════════════════════════════ -->
<section id="life" class="relative py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-12 gap-8 items-end reveal">
            <div class="lg:col-span-7">
                <p class="eyebrow">03 &mdash; Campus life</p>
                <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.02em] leading-[1.05] mt-6">
                    A day inside the <span class="font-serif-i italic text-[#D4B574]">brotherhood</span>.
                </h2>
            </div>
            <div class="lg:col-span-5">
                <p class="text-white/60 leading-relaxed max-w-md mb-6">Boarding life is the unwritten curriculum. From
                    dawn parade to evening prep, the rhythm of Gathathiini shapes habit, character, and bond.</p>
                <a href="<?php echo esc_url( $campus_url ); ?>"
                    class="btn-ghost px-6 py-3 font-display text-[12px] tracking-[0.22em] uppercase inline-block">
                    Campus Life &rarr;
                </a>
            </div>
        </div>
        <div class="mt-16 grid grid-cols-12 gap-4 lg:gap-5">
            <?php
            $gallery = [
                ['col-span-12 md:col-span-7','Athletics &amp; Team Sport','/01','Athletics'],
                ['col-span-12 md:col-span-5','05:30 &mdash; before the day begins','/02','Dormitory'],
                ['col-span-6 md:col-span-3', 'Prefects&rsquo; address','/03','Leadership'],
                ['col-span-6 md:col-span-4', 'After parade, before prep','/04','Brotherhood'],
                ['col-span-12 md:col-span-5','Fine art &amp; drama','/05','Creative Studio'],
            ];
            $heights = ['h-[400px] lg:h-[500px]','h-[400px] lg:h-[500px]','h-[280px] lg:h-[360px]','h-[280px] lg:h-[360px]','h-[280px] lg:h-[360px]'];
            $bgs     = ['bg-[#1F3A2E]','bg-[#111827]','bg-[#7A4F2A]','bg-[#1F3A2E]','bg-[#0B1220]'];
            foreach ( $gallery as $i => $g ) {
                echo '<figure class="' . $g[0] . ' relative group overflow-hidden ' . $bgs[$i] . '">';
                echo '<div class="w-full ' . $heights[$i] . '"></div>';
                echo '<figcaption class="absolute bottom-5 left-5 right-5 flex justify-between items-end">';
                echo '<div><div class="eyebrow text-white/80">' . $g[3] . '</div><div class="font-serif-i italic text-xl md:text-2xl">' . $g[1] . '</div></div>';
                echo '<span class="num text-white/60 hidden md:block">' . $g[2] . '</span>';
                echo '</figcaption></figure>';
            }
            ?>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════════════
     ADMISSIONS CTA
     ════════════════════════════════════════════════════════ -->
<section id="admissions-cta" class="relative py-32 lg:py-44 border-t border-[rgba(245,241,232,.14)] overflow-hidden"
    aria-label="Admissions call to action">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0B1220] via-[#0B1220]/90 to-[#0B1220]"></div>
    <div class="relative max-w-[1100px] mx-auto px-6 lg:px-10 text-center reveal">
        <p class="eyebrow">Admissions &middot; Intake 2026</p>
        <h2 class="font-display text-5xl md:text-7xl lg:text-[100px] tracking-[-0.03em] leading-[0.98] mt-8">
            <?php echo wp_kses_post( $adm_heading ); ?>
        </h2>
        <p class="mt-10 text-white/70 text-lg max-w-2xl mx-auto leading-relaxed">
            <?php echo wp_kses_post( $adm_sub ); ?>
        </p>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-4">
            <a href="<?php echo esc_url( $admissions_url ); ?>"
                class="btn-gold px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                Begin Application
            </a>
            <?php
            $contact_page = get_page_by_path('contact');
            $url = $contact_page ? get_permalink($contact_page->ID) : home_url('/contact/');
            ?>

            <a href="<?php echo esc_url($url); ?>"
                class="btn-ghost px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                Book a Campus Visit
            </a>
        </div>
        <div
            class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] text-left">
            <?php
      $steps = ['Enquire','Campus visit','Assessment','Enrolment'];
      foreach ( $steps as $n => $step ) {
          echo '<div class="p-6 bg-[#0B1220]"><div class="eyebrow">Step 0' . ($n+1) . '</div><div class="font-display mt-2">' . esc_html($step) . '</div></div>';
      }
      ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
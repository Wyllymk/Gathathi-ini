<?php
/**
 * Template Name: About
 * Template Post Type: page
 */
get_header();

$story     = gbhs_field('about_story', '<p>Gathathiini Boys High School was founded with a singular belief: that the boys of this community deserved a world-class education without leaving their homeland. Set in the rolling highlands of Kirurumi in Tetu Sub-County, the school quickly became the heartbeat of the region — a place where local boys transformed into county and national leaders.</p><p>As a county boarding school recognised by the Ministry of Education, we have maintained the rigorous academic standards of the 8-4-4 curriculum while embracing the forward-thinking CBC. Our discipline is our inheritance. Our excellence is our ambition.</p>');
$pr_msg    = gbhs_field('principal_full_message','<p>Welcome to Gathathiini Boys High School. Every boy who walks through our gates arrives with potential — raw, unformed, and full of possibility. Our work is to shape that potential with discipline, sharpen it with knowledge, and ground it in values that will serve him for life.</p><p>We are not a school that settles for ordinary. Our students are challenged daily — academically, athletically, creatively and morally. Excellence is not a gift; it is a discipline. And discipline, practised consistently over four years, becomes character.</p>');
$pr_name   = gbhs_field('principal_name',  'The Principal, Gathathiini Boys High School');
$pr_img    = gbhs_field('about_principal_photo', '');
$principal_url = get_template_directory_uri() . '/assets/img/principal.jpg';
$mission   = gbhs_field('mission_text', 'To provide wholesome education by promoting self-discipline and hard work.');
$vision    = gbhs_field('vision_text',  'To become the school of choice in moulding individuals to become responsible members of society.');

// Timeline — ACF repeater or fallback
$timeline_items = [];
if ( function_exists('get_field') ) {
    $tl = get_field('timeline');
    if ( $tl ) $timeline_items = $tl;
}
if ( empty($timeline_items) ) {
    $timeline_items = [
        ['year'=>'1968','title'=>'Foundation',         'desc'=>'Gathathiini Boys High School opens its gates for the first time, serving the boys of Kirurumi and the surrounding Tetu Sub-County communities of Nyeri.'],
        ['year'=>'1980s','title'=>'Growing Roots',     'desc'=>'The school\'s infrastructure expands significantly. Dormitory houses are constructed and the boarding culture that defines Gathathiini begins to take shape.'],
        ['year'=>'1990s','title'=>'Academic Recognition','desc'=>'Gathathiini Boys earns recognition across Nyeri County for consistent KCSE performance. The school\'s reputation for producing disciplined, principled graduates grows county-wide.'],
        ['year'=>'2000s','title'=>'Sports & Co-curricular','desc'=>'Athletics, drama, music and debate clubs are formalised. Gathathiini boys begin representing Nyeri County at national competitions.'],
        ['year'=>'2010s','title'=>'Digital Transformation','desc'=>'Computer laboratories are established. The school begins integrating technology into teaching methodologies across all departments.'],
        ['year'=>'2020s','title'=>'CBC & Future-Readiness','desc'=>'Gathathiini embraces Kenya\'s Competency-Based Curriculum alongside 8-4-4, ensuring every student is prepared for the evolving demands of university, career, and life in modern Africa.'],
    ];
}

$values = [
    ['Integrity',    'We hold ourselves to honesty and moral uprightness in all things — even when no one is watching. The Gathathiini man\'s word is his bond.'],
    ['Discipline',   'Self-mastery is the foundation of all achievement. We teach boys to govern their impulses so they can direct their energy toward what matters.'],
    ['Excellence',   'We do not accept the minimum. In academics, sport, art, and character, we relentlessly pursue the highest standard we are capable of.'],
    ['Brotherhood',  'The bond formed between boys who struggle and grow together is among the most enduring things we offer. A community of mutual respect and support.'],
    ['Responsibility','Each Gathathiini boy is taught that his gifts come with obligations — to his family, his community, his country, and to future generations.'],
    ['Resilience',   'Life will test every man. We prepare our boys to face difficulty with courage, to fail with dignity, and to rise with greater wisdom each time.'],
];
?>

<!-- PAGE HERO -->
<section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <p class="eyebrow mb-6">About the school</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[90px] tracking-[-0.03em] leading-[0.98] max-w-4xl">
            We form <span class="font-serif-i italic text-[#D4B574]">men</span>,<br />not just students.
        </h1>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed">
            Gathathiini Boys High School has stood in the highlands of Nyeri County as a place of deliberate, purposeful
            formation — where every boy who enters is shaped into something greater than he arrived.
        </p>
        <div class="mt-10 flex gap-px">
            <div class="bg-[rgba(245,241,232,.14)] w-px h-12"></div>
            <div class="pl-6 text-sm text-white/50">Kirurumi &middot; Tetu Sub-County &middot; Nyeri County &middot;
                Kenya</div>
        </div>
    </div>
</section>

<!-- SCHOOL STORY -->
<section class="py-28 lg:py-40">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-12 gap-12 lg:gap-20">
        <div class="lg:col-span-5 reveal">
            <div class="relative aspect-[4/5] overflow-hidden bg-[#111827]">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="font-serif-i italic text-[200px] text-white/03 leading-none">G</span>
                </div>
                <div class="absolute bottom-6 left-6">
                    <div class="eyebrow">Est. 1968</div>
                    <div class="font-display text-lg mt-1">Kirurumi, Nyeri</div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-7 reveal flex flex-col justify-center" style="transition-delay:.15s">
            <p class="eyebrow">01 &mdash; Our story</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Rooted in <span class="font-serif-i italic text-[#D4B574]">community</span>, rising in excellence.
            </h2>
            <div class="mt-10 space-y-5 text-white/70 leading-relaxed text-[15px] max-w-2xl">
                <?php echo wp_kses_post( $story ); ?>
            </div>
        </div>
    </div>
</section>

<!-- PRINCIPAL'S MESSAGE -->
<section class="py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <p class="eyebrow reveal">02 &mdash; Principal's message</p>
        <div class="mt-12 grid lg:grid-cols-12 gap-12 lg:gap-20">
            <div class="lg:col-span-4 reveal">
                <div class="relative aspect-[3/4] overflow-hidden bg-[#0B1220]">
                    <?php if ($principal_url) : ?>
                    <img src="<?php echo esc_url($principal_url); ?>" alt="School Principal"
                        class="w-full h-full object-cover grayscale" />
                    <?php else : ?>
                    <div class="w-full h-full flex items-center justify-center"><span
                            class="font-serif-i italic text-[120px] text-white/05">G</span></div>
                    <?php endif; ?>
                    <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                        <div class="eyebrow">The Principal</div>
                        <div class="font-display text-base mt-1">Gathathiini Boys HS</div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 reveal flex flex-col justify-center" style="transition-delay:.15s">
                <div class="font-serif-i italic text-4xl lg:text-5xl text-[#D4B574] leading-[1.1] max-w-2xl">
                    &ldquo;Gathathiini is not where boys come to be managed. It is where they come to be made.&rdquo;
                </div>
                <div class="mt-10 space-y-5 text-white/70 leading-relaxed max-w-2xl text-[15px]">
                    <?php echo wp_kses_post($pr_msg); ?>
                </div>
                <?php if ($pr_name) : ?>
                <div class="mt-8 flex items-center gap-4">
                    <div class="w-12 h-px bg-[#B89248]"></div>
                    <div class="font-display text-sm tracking-wide"><?php echo esc_html($pr_name); ?></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- MISSION VISION MOTTO -->
<section class="py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-2xl mb-16">
            <p class="eyebrow">03 &mdash; Our foundation</p>
            <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.02em] leading-[1.05] mt-6">
                The principles that <span class="font-serif-i italic text-[#D4B574]">guide</span> everything.
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <div class="p-8 lg:p-12 bg-[#0B1220] reveal">
                <div class="eyebrow mb-6">Mission</div>
                <p class="font-serif-i italic text-2xl text-[#F5F1E8] leading-[1.4]">
                    &ldquo;<?php echo wp_kses_post($mission); ?>&rdquo;</p>
                <p class="mt-6 text-sm text-white/60 leading-relaxed">Every policy, every teacher, every routine at
                    Gathathiini is built to fulfil this promise to every boy we serve.</p>
            </div>
            <div class="p-8 lg:p-12 bg-[#1F3A2E] reveal" style="transition-delay:.1s">
                <div class="eyebrow mb-6">Vision</div>
                <p class="font-serif-i italic text-2xl text-[#F5F1E8] leading-[1.4]">
                    &ldquo;<?php echo wp_kses_post($vision); ?>&rdquo;</p>
                <p class="mt-6 text-sm text-white/60 leading-relaxed">We are not simply educating students. We are
                    building the citizens, leaders, and thinkers that Kenya and Africa need.</p>
            </div>
            <div class="p-8 lg:p-12 bg-[#111827] reveal" style="transition-delay:.2s">
                <div class="eyebrow mb-6">Motto</div>
                <p class="font-serif-i italic text-4xl text-[#D4B574]">Vir Integer.</p>
                <p class="text-sm text-white/50 mt-2">&mdash; the whole man.</p>
                <p class="mt-6 text-sm text-white/60 leading-relaxed">Not merely a graduate, but a complete, integrated
                    man of character, intellect and purpose.</p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-xl mb-16">
            <p class="eyebrow">04 &mdash; Core values</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                The six values we <span class="font-serif-i italic text-[#D4B574]">live and teach</span>.
            </h2>
        </div>
        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <?php foreach ($values as $i => $v) :
        $delay = $i ? ' style="transition-delay:' . round(($i%3)*.1,1) . 's"' : '';
      ?>
            <div class="p-8 bg-[#0B1220] reveal" <?php echo $delay; ?>>
                <div class="num text-5xl text-white/[.07] font-display mb-4">0<?php echo $i+1; ?></div>
                <h3 class="font-display text-xl mb-3"><?php echo esc_html($v[0]); ?></h3>
                <p class="text-sm text-white/60 leading-relaxed"><?php echo esc_html($v[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TIMELINE -->
<section class="py-28 lg:py-40 border-t border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-10">
        <div class="reveal mb-20">
            <p class="eyebrow">05 &mdash; Our history</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                A timeline of <span class="font-serif-i italic text-[#D4B574]">growth</span>.
            </h2>
        </div>
        <div class="relative">
            <div class="absolute left-[80px] top-0 bottom-0 w-px bg-[rgba(245,241,232,.14)] hidden md:block"></div>
            <?php foreach ($timeline_items as $item) :
        $year  = is_array($item) ? ($item['year']  ?? '') : ($item->year  ?? '');
        $title = is_array($item) ? ($item['title'] ?? '') : ($item->title ?? '');
        $desc  = is_array($item) ? ($item['desc']  ?? '') : ($item->desc  ?? '');
      ?>
            <div
                class="grid md:grid-cols-[120px_1fr] gap-6 md:gap-12 py-10 border-t border-[rgba(245,241,232,.14)] reveal">
                <div class="num text-[#D4B574] text-xl md:text-2xl relative">
                    <?php echo esc_html($year); ?>
                    <span
                        class="hidden md:block absolute -right-[7px] top-2 w-3 h-3 rounded-full bg-[#B89248] ring-4 ring-[#0B1220]"></span>
                </div>
                <div>
                    <h3 class="font-display text-2xl"><?php echo esc_html($title); ?></h3>
                    <p class="mt-3 text-white/60 max-w-xl leading-relaxed"><?php echo esc_html($desc); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- STATS + CTA -->
<section class="py-28 lg:py-32 border-t border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal mb-16">
            <p class="eyebrow">06 &mdash; At a glance</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Gathathiini <span class="font-serif-i italic text-[#D4B574]">in numbers</span>.
            </h2>
        </div>
        <?php
    $stats = [['340+','Students enrolled'],['20+','Teaching staff'],['80%','KCSE pass rate'],['47.','Years of heritage'],['4','Dormitory houses'],['18','Clubs &amp; societies'],['2','Curricula offered'],['C+','KCSE mean grade']];
    echo '<div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] mb-4">';
    foreach (array_slice($stats,0,4) as $i=>$s) {
        $d = $i ? ' style="transition-delay:'.($i*.1).'s"' : '';
        echo '<div class="p-8 bg-[#0B1220] reveal"'.$d.'><div class="num text-5xl">'.$s[0].'</div><div class="eyebrow mt-4">'.$s[1].'</div></div>';
    }
    echo '</div>';
    echo '<div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">';
    foreach (array_slice($stats,4) as $i=>$s) {
        $d = $i ? ' style="transition-delay:'.($i*.1).'s"' : '';
        echo '<div class="p-8 bg-[#0B1220] reveal"'.$d.'><div class="num text-5xl">'.$s[0].'</div><div class="eyebrow mt-4">'.$s[1].'</div></div>';
    }
    echo '</div>';
    ?>
    </div>
</section>

<!-- CTA -->
<section class="py-32 border-t border-[rgba(245,241,232,.14)] text-center">
    <div class="max-w-[800px] mx-auto px-6 reveal">
        <p class="eyebrow">Ready to join us?</p>
        <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mt-8">
            Begin your son's <span class="font-serif-i italic text-[#D4B574]">journey</span>.
        </h2>
        <?php
        $admissions = get_page_by_path('admissions');
        $contact    = get_page_by_path('contact');

        $admissions_url = $admissions ? get_permalink($admissions->ID) : home_url('/admissions/');
        $contact_url    = $contact ? get_permalink($contact->ID) : home_url('/contact/');
        ?>

        <div class="mt-12 flex flex-wrap justify-center gap-4">

            <a href="<?php echo esc_url($admissions_url); ?>"
                class="btn-gold px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                View Admissions
            </a>

            <a href="<?php echo esc_url($contact_url); ?>"
                class="btn-ghost px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                Contact Us
            </a>

        </div>
    </div>
</section>

<?php get_footer(); ?>
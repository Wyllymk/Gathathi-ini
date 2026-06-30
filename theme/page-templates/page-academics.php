<?php
/**
 * Template Name: Academics
 * Template Post Type: page
 */
get_header();

$subjects = [
  ['Mathematics',     'STEM Core',      96, 'Pure mathematics, applied mathematics and statistics. The backbone of STEM pathways and critical thinking across all disciplines.'],
  ['Sciences',        'STEM Core',      92, 'Biology, Chemistry and Physics taught with practical lab sessions. Students engage real science through inquiry and experimentation.'],
  ['English Language','Humanities',     94, 'Communication, composition, comprehension and literary analysis. The language of global opportunity, taught to fluency.'],
  ['Kiswahili',       'Humanities',     91, 'Kenya\'s national language and the lingua franca of East Africa. Taught with pride, depth and the respect it deserves as a heritage language.'],
  ['Computer Studies','Digital',        97, 'Digital literacy, programming fundamentals, spreadsheets and ICT applications. Every student leaves digitally competent and future-ready.'],
  ['Business Studies','Applied',        89, 'Commerce, accounting, economics and entrepreneurship. Building financial literacy and entrepreneurial thinking from Form One.'],
  ['History &amp; Government','Humanities',88,'African history, Kenya\'s political development and global affairs. Boys who understand where they come from lead better.'],
  ['Geography',       'Applied',        85, 'Physical, human and economic geography with field work. Understanding the land, climate and resources of the continent they will inherit.'],
  ['CRE',             'Character',      90, 'Ethics, moral philosophy and spiritual formation. CRE underpins the character development at the core of the Gathathiini experience.'],
];

$approach = [
  ['Structured Mentorship',  'Every student is assigned a form teacher and subject mentor who tracks their academic progress, personal growth, and wellbeing through the year.'],
  ['Regular Assessment',     'Weekly tests, monthly assessments and end-of-term examinations ensure students are never surprised by their KCSE performance. Standards are maintained throughout.'],
  ['Peer Study Culture',     'Evening preps, peer tutoring and collaborative study groups ensure that academic seriousness is a shared culture, not just a teacher\'s expectation.'],
  ['Library &amp; Resources','A well-stocked library, science laboratories and digital resource centre give students the tools to go beyond the textbook and pursue genuine intellectual depth.'],
];

$clubs = [
  ['Science Congress &amp; Symposium', 'County &amp; national competition'],
  ['Mathematics Olympiad',             'Problem-solving competitions'],
  ['Debate &amp; Public Speaking',     'Kenya National Debate Championship'],
  ['Robotics &amp; Coding Club',       'Digital innovation programme'],
  ['Junior Achievement',               'Entrepreneurship &amp; business skills'],
  ['Geography Field Study',            'Annual field research projects'],
];
?>

<!-- HERO -->
<section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <p class="eyebrow mb-6">Academics</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[90px] tracking-[-0.03em] leading-[0.98] max-w-4xl">
            Intellectual <span class="font-serif-i italic text-[#D4B574]">rigor</span>,<br />taught with conviction.
        </h1>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed">
            We offer both the 8-4-4 curriculum and the Competency-Based Curriculum (CBC), built on a culture of academic
            seriousness, mentorship, and the belief that every student is capable of genuine excellence.
        </p>
    </div>
</section>

<!-- CURRICULUM -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal">
            <p class="eyebrow">01 &mdash; Curriculum</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Two curricula,<br /><span class="font-serif-i italic text-[#D4B574]">one standard</span>.
            </h2>
            <p class="mt-8 text-white/70 leading-relaxed max-w-xl">Our academic programme is built on Kenya's
                established educational frameworks. The 8-4-4 curriculum provides rigorous examination preparation,
                while the CBC pathway develops competencies, critical thinking and applied knowledge for the modern
                world.</p>
            <p class="mt-5 text-white/70 leading-relaxed max-w-xl">Both pathways are taught by qualified, experienced
                subject specialists who are genuinely invested in each student's growth. Small class sizes ensure every
                boy is seen, known, and challenged at the right level.</p>
        </div>
        <div class="grid grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] reveal">
            <div class="p-8 bg-[#111827]">
                <div class="eyebrow mb-4">8-4-4</div>
                <h3 class="font-display text-xl mb-3">KCSE Track</h3>
                <p class="text-sm text-white/60 leading-relaxed">Time-tested, nationally recognised and
                    examination-rigorous. Our KCSE results consistently place us among the top performing county schools
                    in Nyeri.</p>
            </div>
            <div class="p-8 bg-[#1F3A2E]">
                <div class="eyebrow mb-4">CBC</div>
                <h3 class="font-display text-xl mb-3">Competency Track</h3>
                <p class="text-sm text-white/60 leading-relaxed">Kenya's new curriculum emphasises skills, values and
                    applied learning. We are fully equipped with trained staff and modern resources for the CBC
                    transition.</p>
            </div>
            <div class="p-8 bg-[#111827] col-span-2">
                <p class="font-serif-i italic text-xl text-[#D4B574] leading-relaxed">&ldquo;The classroom is small, the
                    standard is high, the expectation is excellence — in every subject, every term.&rdquo;</p>
            </div>
        </div>
    </div>
</section>

<!-- SUBJECTS + BARS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16 items-start">
        <div class="reveal">
            <p class="eyebrow">02 &mdash; Subject areas</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Nine departments.<br /><span class="font-serif-i italic text-[#D4B574]">Limitless</span> pathways.
            </h2>
            <dl class="mt-12 grid grid-cols-2 gap-6">
                <div class="border-t border-[rgba(245,241,232,.14)] pt-4">
                    <dt class="eyebrow">KCSE mean grade</dt>
                    <dd class="num text-5xl mt-2">C<span class="text-[#B89248]">+</span></dd>
                </div>
                <div class="border-t border-[rgba(245,241,232,.14)] pt-4">
                    <dt class="eyebrow">Overall pass rate</dt>
                    <dd class="num text-5xl mt-2">80<span class="text-[#B89248]">%</span></dd>
                </div>
                <div class="border-t border-[rgba(245,241,232,.14)] pt-4">
                    <dt class="eyebrow">A / A&minus; grades</dt>
                    <dd class="num text-5xl mt-2">18<span class="text-[#B89248]">%</span></dd>
                </div>
                <div class="border-t border-[rgba(245,241,232,.14)] pt-4">
                    <dt class="eyebrow">University placement</dt>
                    <dd class="num text-5xl mt-2">28<span class="text-[#B89248]">%</span></dd>
                </div>
            </dl>
            <div class="mt-12 space-y-6 text-sm text-white/60 leading-relaxed">
                <?php foreach (array_slice($subjects,0,3) as $s) : ?>
                <div class="border-t border-[rgba(245,241,232,.08)] pt-4">
                    <div class="flex justify-between items-baseline mb-2">
                        <span class="font-display text-base text-white/90"><?php echo $s[0]; ?></span>
                        <span class="text-[#D4B574] text-xs"><?php echo $s[2]; ?>%</span>
                    </div>
                    <p class="text-xs"><?php echo esc_html($s[3]); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Bar chart -->
        <div class="reveal" data-bars-section style="transition-delay:.15s">
            <h3 class="font-display text-xl mb-8 tracking-[-0.01em]">Subject excellence rates &mdash; KCSE</h3>
            <div class="space-y-6">
                <?php foreach ($subjects as $s) : ?>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-sm font-display"><?php echo $s[0]; ?></span>
                        <span class="num text-sm text-[#D4B574]"><?php echo $s[2]; ?>%</span>
                    </div>
                    <div class="h-px bg-[rgba(245,241,232,.08)]">
                        <div class="bar-fill h-px bg-[#B89248]" data-bar-width="<?php echo $s[2]; ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- TEACHING APPROACH -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-2xl mb-16">
            <p class="eyebrow">03 &mdash; How we teach</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                More than lessons.<br /><span class="font-serif-i italic text-[#D4B574]">A way of thinking</span>.
            </h2>
        </div>
        <div
            class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <?php foreach ($approach as $i => $a) :
        $delay = $i ? ' style="transition-delay:'.($i*.1).'s"' : '';
      ?>
            <div class="p-8 bg-[#0B1220] reveal" <?php echo $delay; ?>>
                <div class="w-8 h-8 border border-[rgba(184,146,72,.4)] flex items-center justify-center mb-6">
                    <span class="num text-[#D4B574] text-xs">0<?php echo $i+1; ?></span>
                </div>
                <h3 class="font-display text-lg mb-3"><?php echo $a[0]; ?></h3>
                <p class="text-sm text-white/55 leading-relaxed"><?php echo esc_html($a[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ACADEMIC CLUBS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16">
        <div class="reveal">
            <p class="eyebrow">04 &mdash; Academic co-curricular</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Learning beyond<br /><span class="font-serif-i italic text-[#D4B574]">the classroom</span>.
            </h2>
            <p class="mt-8 text-white/70 leading-relaxed">Academic excellence is extended through clubs and competitions
                that challenge students to apply knowledge in real-world contexts, representing Gathathiini at county
                and national level.</p>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <div class="space-y-px border border-[rgba(245,241,232,.14)]">
                <?php foreach ($clubs as $i => $c) : ?>
                <div
                    class="flex items-center gap-6 p-5 bg-[#0B1220] border-b border-[rgba(245,241,232,.08)] last:border-0">
                    <span class="num text-[#D4B574] text-xl w-8 flex-shrink-0">0<?php echo $i+1; ?></span>
                    <div>
                        <div class="font-display text-base"><?php echo $c[0]; ?></div>
                        <div class="text-xs text-white/50 mt-0.5"><?php echo $c[1]; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-32 border-t border-[rgba(245,241,232,.14)] text-center">
    <div class="max-w-[800px] mx-auto px-6 reveal">
        <p class="eyebrow">A place where excellence is the standard</p>
        <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mt-8">
            Ready to <span class="font-serif-i italic text-[#D4B574]">learn here</span>?
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
<?php
/**
 * Template Name: Campus Life
 * Template Post Type: page
 */
get_header();

$schedule = [
  ['05:30','Wake &amp; Parade Prep',  'The bell rings. Dormitory captains ensure every bed is made and every student is dressed. Discipline begins before breakfast.'],
  ['06:00','Morning Run',             'The school runs together. Cross-country or the athletics track. The body is trained before the mind.'],
  ['07:00','Breakfast',               'Three meals a day, served in the school dining hall. Nutritious, balanced and sufficient.'],
  ['07:45','Morning Assembly',        'National anthem, prayer, school notices and a motivational address. The whole community aligned before the day\'s work begins.'],
  ['08:00','Academic Sessions',       'Eight periods of focused instruction. The standard is exacting. Teachers challenge students to understand, not merely remember.'],
  ['13:00','Lunch &amp; Rest',        'A nutritious midday meal followed by a brief rest for recovery before the afternoon\'s activities.'],
  ['16:00','Games &amp; Clubs',       'Football, athletics, drama rehearsal, music practice, debate prep, computer club. The afternoon belongs to the body, voice and creative spirit.'],
  ['19:30','Evening Preps',           'Three hours of supervised, silent study. This is where academic excellence is forged — in the sustained discipline of sitting with difficult material until it yields.'],
  ['22:00','Lights Out',              'Rest, reflection, and the quiet that allows recovery. Brotherhood is built in these hours — in conversations between dormitory mates who carry each other\'s ambitions.'],
];

$clubs_list = [
  'Academic'    => ['Science &amp; Mathematics Club','Debate &amp; Public Speaking Society','Journalism &amp; Creative Writing','French Language Club','Geography &amp; Environmental Club'],
  'Technology'  => ['Robotics &amp; Coding Club','Computer Science Society','Digital Media Club','Innovation &amp; Entrepreneurship','Junior Achievement'],
  'Arts &amp; Culture' => ['Drama &amp; Theatre Society','School Choir','Fine Art &amp; Design Club','Cultural Dance Troupe','Photography Club'],
  'Faith &amp; Character' => ['Christian Union','Scripture Union','Peer Counselling Club','Anti-Drug Society','Community Service Club'],
  'Leadership'  => ['Student Council (Prefectorate)','Red Cross Society','Wildlife Club / Scouts','Environmental &amp; Tree Planting Club','Mentorship Programme'],
  'Sports'      => ['Football First XI &amp; Junior','Athletics &amp; Cross-Country','Chess &amp; Board Games Club'],
];

$traditions = [
  ['Term 1',       'Opening Assembly &amp; House Elections',  'The year begins with the swearing-in of the prefectorate and setting the school\'s collective ambitions for the year ahead.'],
  ['March',        'Inter-House Athletics Championships',     'Four houses compete across all athletic disciplines. The inter-house trophy is among the most fiercely contested traditions.'],
  ['May',          'Kenya Music &amp; Drama Festival',        'Our drama and music students perform at county level, representing Gathathiini with extraordinary talent and preparation.'],
  ['August',       'Academic Prize Giving',                   'End-of-term recognition of academic, athletic and character achievement. Excellence is celebrated loudly and publicly.'],
  ['November',     'Form Four Farewell',                      'The most emotional event of the school calendar. The school gathers to honour the departing Form Four class and send them into the world as Gathathiini men.'],
];
?>

<!-- HERO -->
<section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <p class="eyebrow mb-6">Campus Life</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[90px] tracking-[-0.03em] leading-[0.98] max-w-4xl">
            Brotherhood<br />as <span class="font-serif-i italic text-[#D4B574]">curriculum</span>.
        </h1>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed">
            Boarding school life is the unwritten curriculum. From dawn parade to lights out, every hour at Gathathiini
            is purposeful — shaping habits, forging bonds, and building the character that no examination can measure.
        </p>
    </div>
</section>

<!-- DAILY SCHEDULE -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-2xl mb-20">
            <p class="eyebrow">01 &mdash; The daily rhythm</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Twenty-four hours<br /><span class="font-serif-i italic text-[#D4B574]">of formation</span>.
            </h2>
            <p class="mt-6 text-white/60 leading-relaxed">Every hour at Gathathiini is structured and purposeful.
                Routine creates the conditions for discipline. Discipline becomes character. Character becomes destiny.
            </p>
        </div>
        <ol class="relative list-none">
            <li class="absolute left-[80px] top-0 bottom-0 w-px bg-[rgba(245,241,232,.14)] hidden md:block pointer-events-none"
                aria-hidden="true"></li>
            <?php foreach ($schedule as $item) : ?>
            <li
                class="grid md:grid-cols-[120px_1fr] gap-6 md:gap-12 py-10 border-t border-[rgba(245,241,232,.14)] last:border-b reveal">
                <div class="num text-[#D4B574] text-xl md:text-2xl tracking-wider relative">
                    <?php echo esc_html($item[0]); ?>
                    <span
                        class="hidden md:block absolute -right-[7px] top-2 w-3 h-3 rounded-full bg-[#B89248] ring-4 ring-[#0B1220]"
                        aria-hidden="true"></span>
                </div>
                <div class="flex flex-col md:flex-row md:items-baseline gap-3 md:gap-12">
                    <h3 class="font-display text-2xl md:text-3xl tracking-[-0.01em] md:w-56"><?php echo $item[1]; ?>
                    </h3>
                    <p class="text-white/60 leading-relaxed max-w-lg"><?php echo esc_html($item[2]); ?></p>
                </div>
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- SPORTS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16 items-start">
        <div class="reveal">
            <p class="eyebrow">02 &mdash; Sports &amp; athletics</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Champions are made<br /><span class="font-serif-i italic text-[#D4B574]">on the practice field</span>.
            </h2>
            <p class="mt-8 text-white/70 leading-relaxed">Gathathiini fields competitive teams across multiple
                disciplines. Our athletes compete at zonal, county and national level — with discipline, grace and the
                spirit of fair play that defines a Gathathiini man.</p>
            <div class="mt-10 grid grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
                <div class="p-5 bg-[#0B1220]">
                    <div class="eyebrow mb-2">Team Sports</div>
                    <ul class="text-sm text-white/55 space-y-1">
                        <li>Football (First XI &amp; Junior)</li>
                        <li>Rugby</li>
                        <li>Volleyball</li>
                        <li>Handball</li>
                    </ul>
                </div>
                <div class="p-5 bg-[#0B1220]">
                    <div class="eyebrow mb-2">Individual Sports</div>
                    <ul class="text-sm text-white/55 space-y-1">
                        <li>Athletics &amp; Track</li>
                        <li>Cross-Country</li>
                        <li>Badminton</li>
                        <li>Table Tennis</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <div class="grid grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] mb-6">
                <div class="p-5 bg-[#0B1220]">
                    <div class="num text-3xl">12<span class="text-[#B89248]">+</span></div>
                    <div class="eyebrow mt-2">Sports offered</div>
                </div>
                <div class="p-5 bg-[#0B1220]">
                    <div class="num text-3xl">4</div>
                    <div class="eyebrow mt-2">Houses</div>
                </div>
                <div class="p-5 bg-[#0B1220]">
                    <div class="num text-3xl">2</div>
                    <div class="eyebrow mt-2">Active terms</div>
                </div>
            </div>
            <div class="p-8 bg-[#1F3A2E]">
                <div class="eyebrow mb-4">Competition</div>
                <p class="text-sm text-white/70 leading-relaxed">Students represent Gathathiini at zonal, Nyeri County,
                    and Kenya Secondary Schools Sports Association national championships throughout the academic year.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- BOARDING LIFE -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16 items-center">
        <div class="reveal order-2 lg:order-1">
            <div
                class="grid grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)] h-64 lg:h-96">
                <div class="bg-[#1F3A2E] flex items-end p-6"><span
                        class="font-serif-i italic text-4xl opacity-40">Home</span></div>
                <div class="bg-[#0B1220] flex items-end p-6"><span
                        class="font-serif-i italic text-4xl opacity-40">away</span></div>
                <div class="bg-[#111827] col-span-2 flex items-end p-6"><span
                        class="font-serif-i italic text-4xl opacity-40">from home.</span></div>
            </div>
        </div>
        <div class="reveal order-1 lg:order-2" style="transition-delay:.15s">
            <p class="eyebrow">03 &mdash; Boarding life</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Home away<br /><span class="font-serif-i italic text-[#D4B574]">from home</span>.
            </h2>
            <p class="mt-8 text-white/70 leading-relaxed max-w-xl">Gathathiini Boys is a full boarding school. Students
                live in dormitory houses supervised by house masters. The boarding environment is where the deepest
                formation happens — not in classrooms, but in the daily rhythms of shared life.</p>
            <div class="mt-10 space-y-px border border-[rgba(245,241,232,.14)]">
                <?php
        $boarding = [
          ['Supervised dormitories with house masters',     'Each dormitory house is led by a qualified teacher who is in residence and available to students at all times.'],
          ['Three nutritious meals daily',                  'Breakfast, lunch and dinner served in the school dining hall. Student nutrition is taken seriously as a pillar of academic performance.'],
          ['Medical facility on campus',                    'A school nurse and basic medical facility ensure students receive prompt attention for any health needs.'],
          ['Secure, structured environment',               'The campus is enclosed and monitored. Parents can trust that their sons are safe, supervised and purposefully engaged.'],
        ];
        foreach($boarding as $b) :
        ?>
                <div class="p-5 bg-[#111827] border-b border-[rgba(245,241,232,.08)] last:border-0">
                    <div class="font-display text-base"><?php echo $b[0]; ?></div>
                    <p class="text-xs text-white/50 mt-1 leading-relaxed"><?php echo esc_html($b[1]); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CLUBS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-2xl mb-16">
            <p class="eyebrow">04 &mdash; Clubs &amp; societies</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                38 clubs.<br /><span class="font-serif-i italic text-[#D4B574]">Endless discovery</span>.
            </h2>
        </div>
        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <?php foreach ($clubs_list as $category => $items) : ?>
            <div class="p-7 bg-[#0B1220] reveal">
                <div class="eyebrow mb-3"><?php echo $category; ?></div>
                <ul class="text-sm text-white/60 space-y-2">
                    <?php foreach ($items as $item) : ?>
                    <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TRADITIONS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16">
        <div class="reveal">
            <p class="eyebrow">05 &mdash; Traditions &amp; events</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                Gathathiini has a<br /><span class="font-serif-i italic text-[#D4B574]">culture</span>, not just rules.
            </h2>
            <p class="mt-8 text-white/70 leading-relaxed max-w-xl">The traditions of a boarding school are the invisible
                threads that stitch generations together. Every Gathathiini alumnus shares certain memories — the parade
                ground at dawn, the cup competition, the drama festival, the closing ceremony. These are not events.
                They are the making of a man's identity.</p>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <div class="space-y-px border border-[rgba(245,241,232,.14)]">
                <?php foreach ($traditions as $t) : ?>
                <div class="p-6 bg-[#111827] border-b border-[rgba(245,241,232,.08)] last:border-0">
                    <div class="flex items-start gap-4">
                        <span class="num text-[#D4B574] text-xl w-20 flex-shrink-0"><?php echo $t[0]; ?></span>
                        <div>
                            <div class="font-display text-base mb-1"><?php echo $t[1]; ?></div>
                            <p class="text-xs text-white/55 leading-relaxed"><?php echo esc_html($t[2]); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-32 border-t border-[rgba(245,241,232,.14)] text-center bg-[#111827]">
    <div class="max-w-[800px] mx-auto px-6 reveal">
        <p class="eyebrow">Experience it yourself</p>
        <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mt-8">
            Visit the <span class="font-serif-i italic text-[#D4B574]">campus</span>.
        </h2>
        <p class="mt-8 text-white/60 text-lg max-w-xl mx-auto leading-relaxed">Words and pictures tell only part of the
            story. Come and walk the grounds, meet the students and staff, and feel what Gathathiini is really about.
        </p>
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
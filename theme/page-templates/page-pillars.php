<?php
/**
 * Template Name: Pillars
 * Template Post Type: page
 */
get_header();

$pillars = [
  ['I',   'Academic Excellence',   'Intellect',    '#1F3A2E',
   'Mastery is not optional.',
   'Academic excellence is the first pillar because it is the foundation upon which all others rest. At Gathathiini, we do not teach students to pass examinations — we teach them to think. To interrogate. To reason their way through complexity and arrive at clarity.',
   'Our KCSE results are among the strongest of any county boarding school in Nyeri. But the numbers are a by-product. The real goal is students who leave with the mental tools to thrive at university and in the economy of ideas.',
   [['C+','KCSE Mean'],['80%','Pass Rate'],['18%','A / A−']],
   ['Both 8-4-4 and CBC curricula taught to the highest standard','Qualified subject specialists in every department','Science labs, computer labs, and a well-stocked library','Structured evening preps, regular assessments and mentorship']],

  ['II',  'Sports &amp; Athletic Talent','Resilience','#111827',
   'The body trains the mind.',
   'Sport at Gathathiini is not extracurricular. It is curriculum. The discipline of athletics — the early morning run, the gruelling training session, the match-day pressure — forms the same qualities we need in our scholars: resilience, teamwork, and the will to keep going when it is hard.',
   'Our teams compete at zonal, county and national levels. We have produced athletes who have gone on to represent Kenya. We measure success not only in trophies, but in the character forged on the pitch and the track.',
   [['12+','Sports offered'],['4','Houses'],['2','Terms active']],
   ['Football, rugby, volleyball, basketball, handball','Athletics, cross-country, swimming, badminton','County and national level competition each year','Trained sports teachers and competitive inter-house fixtures']],

  ['III', 'Creative Arts',          'Creativity',   '#1F3A2E',
   'A man must have a voice.',
   'The leaders of tomorrow must be as articulate as they are intelligent. At Gathathiini, we develop every boy\'s ability to express himself — through drama, music, visual art, and the precision of debate. Creative arts are not a soft option; they are a rigorous discipline of self-expression.',
   'Our drama and music students compete at the Kenya Music and Drama Festival at county level. Our debaters argue before judges and audiences. Every student, regardless of specialism, learns to communicate with clarity, power and grace.',
   [],
   ['Drama &amp; Theatre — annual school play and Kenya Drama Festival','School choir and music programme — Kenya Music Festival','Debate &amp; Public Speaking society — county and national level','Visual arts, creative writing, and design studio']],

  ['IV',  'Digital Literacy',       'Future-Ready', '#111827',
   'Digital fluency is not a luxury.',
   'We will not send our graduates into a digital economy as strangers. Computer literacy, coding, data interpretation, and digital communication are woven into the fabric of learning at Gathathiini. We do not prepare boys for jobs that exist — we prepare men who will build what does not yet exist.',
   'Our Computer Studies department has a 97% KCSE pass rate. The Robotics and Coding Club has produced county-level competitors. Students learn HTML, Python basics, spreadsheet modelling, and digital design from Form One.',
   [['4','Computer labs'],['120','Workstations'],['97%','CS Pass Rate']],
   ['Coding and programming from Form One','Robotics &amp; Innovation Club, county competitors','Digital literacy integrated across all subjects','Computer Studies — one of our strongest KCSE departments']],

  ['V',   'Social Responsibility',  'Service',      '#1F3A2E',
   'Privilege demands contribution.',
   'Every Gathathiini boy is taught early and clearly: the education you are receiving comes with an obligation. To your family, who sacrificed to send you. To your community, which believed in you. To your country, which needs men like you to lead it well.',
   'Social responsibility at Gathathiini is lived through community service programmes, environmental stewardship projects, mentorship of younger students, and civic education. We produce men who understand that leadership is a posture of service.',
   [],
   ['Regular community outreach in Kirurumi and surrounding areas','Environmental stewardship — tree planting and campus care','Peer mentorship programme — seniors leading juniors','Civic education: citizenship, governance, rights and duties']],

  ['VI',  'Holistic Development',   'Character',    '#111827',
   'The whole man is the goal.',
   'Vir Integer — the whole man. These are not decorative words on a crest. They are the standard to which we hold every student and every member of staff. Holistic development means we care as much about who a boy is becoming as what he is learning.',
   'Spiritual grounding, emotional intelligence, mental resilience, physical health, and social grace — these are the qualities that distinguish a graduate from a merely educated person. Gathathiini boys learn to be human beings of depth and warmth as well as competence.',
   [],
   ['Daily morning devotion, CRE instruction and Christian Union','Counselling support and open-door staff relationships','Three balanced meals daily and on-campus medical facility','Manners, personal responsibility, and time management taught daily']],
];
?>

<!-- PAGE HERO -->
<section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10">
        <p class="eyebrow mb-6">The six pillars</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[90px] tracking-[-0.03em] leading-[0.98] max-w-4xl">
            Six pillars.<br /><span class="font-serif-i italic text-[#D4B574]">One man.</span>
        </h1>
        <p class="mt-8 text-white/65 text-lg max-w-2xl leading-relaxed">
            At Gathathiini, we believe that a truly educated man is formed across six dimensions. Each pillar is not a
            program or an add-on — it is a promise we make to every boy in our care, every single day.
        </p>
        <div class="mt-12 flex flex-wrap gap-3">
            <?php foreach ($pillars as $i => $p) : ?>
            <a href="#pillar-<?php echo $i+1; ?>"
                class="px-4 py-2 border border-[rgba(245,241,232,.14)] text-[11px] tracking-[0.2em] uppercase text-white/60 hover:border-[#B89248] hover:text-[#D4B574] transition">
                <?php echo $p[0]; ?> &mdash; <?php echo strip_tags($p[1]); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- INTRO QUOTE -->
<section class="py-20 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="max-w-4xl mx-auto text-center reveal">
            <p class="font-serif-i italic text-2xl lg:text-3xl text-white/80 leading-relaxed">
                &ldquo;A pillar is not merely structural. It holds something up. Each of our six pillars holds up a
                different dimension of the man we are building &mdash; and no pillar can be removed without the whole
                collapsing.&rdquo;
            </p>
            <div class="mt-8 flex items-center justify-center gap-4">
                <div class="w-12 h-px bg-[#B89248]"></div>
                <span class="eyebrow">The Gathathiini Formation System</span>
                <div class="w-12 h-px bg-[#B89248]"></div>
            </div>
        </div>
    </div>
</section>

<!-- PILLAR SECTIONS -->
<?php foreach ($pillars as $i => $p) :
  $num    = $i + 1;
  $roman  = $p[0];
  $name   = $p[1];
  $tag    = $p[2];
  $bg     = $p[3];
  $hl     = $p[4];
  $body1  = $p[5];
  $body2  = $p[6];
  $stats  = $p[7];
  $bullets= $p[8];
  $alt    = ($num % 2 === 0); // alternate layout
?>
<section id="pillar-<?php echo $num; ?>" class="border-t border-[rgba(245,241,232,.14)] py-28 lg:py-40"
    style="background:<?php echo $bg; ?>">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            <!-- Image block -->
            <div class="lg:col-span-5 reveal <?php echo $alt ? 'lg:order-2' : ''; ?>">
                <div class="relative aspect-[4/5] overflow-hidden bg-[rgba(0,0,0,.3)]">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="font-serif-i italic text-[#F5F1E8] opacity-[.06]"
                            style="font-size:clamp(100px,14vw,200px);line-height:1"><?php echo esc_html($roman); ?></span>
                    </div>
                    <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-black/70 to-transparent">
                        <div class="eyebrow mb-2">Pillar <?php echo sprintf('%02d',$num); ?></div>
                        <div class="font-display text-xl"><?php echo wp_kses_post($name); ?></div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:col-span-7 reveal <?php echo $alt ? 'lg:order-1' : ''; ?>" style="transition-delay:.15s">
                <div class="eyebrow mb-6">Pillar <?php echo sprintf('%02d',$num); ?> &mdash;
                    <?php echo esc_html($tag); ?></div>
                <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05]">
                    <?php echo wp_kses_post(str_replace(['&','<','>',"'"],['&amp;','&lt;','&gt;','&#39;'],$hl)); ?>
                </h2>
                <p class="mt-8 text-white/70 leading-relaxed text-[15px] max-w-xl"><?php echo esc_html($body1); ?></p>
                <p class="mt-5 text-white/70 leading-relaxed text-[15px] max-w-xl"><?php echo esc_html($body2); ?></p>

                <?php if (!empty($stats)) : ?>
                <div
                    class="mt-10 grid grid-cols-<?php echo count($stats); ?> gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
                    <?php foreach($stats as $s) : ?>
                    <div class="p-5 bg-[#0B1220]">
                        <div class="num text-3xl text-[#D4B574]"><?php echo esc_html($s[0]); ?></div>
                        <div class="eyebrow mt-2"><?php echo esc_html($s[1]); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="mt-8 space-y-3">
                    <?php foreach($bullets as $b) : ?>
                    <div class="flex items-start gap-3">
                        <div class="w-1 h-1 rounded-full bg-[#B89248] mt-2 flex-shrink-0"></div>
                        <p class="text-sm text-white/60"><?php echo wp_kses_post($b); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- CLOSING CTA -->
<section class="py-32 border-t border-[rgba(245,241,232,.14)] text-center">
    <div class="max-w-[800px] mx-auto px-6 reveal">
        <p class="eyebrow">Ready to begin?</p>
        <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mt-8">
            All six pillars. <span class="font-serif-i italic text-[#D4B574]">For your son</span>.
        </h2>
        <p class="mt-8 text-white/60 text-lg max-w-xl mx-auto leading-relaxed">Each boy who joins Gathathiini enters the
            formation system. Four years later, a man emerges — grounded, capable, and ready to leave his mark on Kenya
            and the world.</p>
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
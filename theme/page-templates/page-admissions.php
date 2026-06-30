<?php
/**
 * Template Name: Admissions
 * Template Post Type: page
 */
get_header();

$phone = gbhs_phone(); $email = gbhs_email();
$adm_welcome = gbhs_field('adm_welcome','Choosing the right school for your son is one of the most consequential decisions a family will make. We welcome you to explore Gathathiini — and to discover why so many families have trusted us with that responsibility.');
$fees_text = gbhs_field('adm_fees_text','<p>As a government county boarding school, our fees are structured and regulated in accordance with the Ministry of Education guidelines. We are committed to ensuring that cost is not a barrier to a quality education. For the current and most accurate fee structure, please contact our admissions office directly.</p>');

$faqs = [];
if (function_exists('get_field')) { $acf_faqs = get_field('faqs'); if ($acf_faqs) $faqs = $acf_faqs; }
if (empty($faqs)) {
  $faqs = [
    ['question'=>'Is Gathathiini a government or private school?','answer'=>'Gathathiini Boys High School is a government county boarding school regulated by the Ministry of Education, Kenya. This means fees are subsidised and the school is accountable to national educational standards.'],
    ['question'=>'What KCPE score does my son need?','answer'=>'As a county school, admission is primarily for students from Nyeri County. Entry requirements vary by year depending on available places. Contact our admissions office for the minimum score for the current intake year.'],
    ['question'=>'Can students from outside Nyeri County apply?','answer'=>'Priority is given to students from Nyeri County. However, a limited number of national quota places may be available. Please contact our admissions office to discuss your son\'s situation.'],
    ['question'=>'Are mobile phones allowed?','answer'=>'No. In line with the Ministry of Education regulations and our school policy, mobile phones are not permitted for students. This protects focus and maintains the boarding school culture we have built.'],
    ['question'=>'Can parents visit during the term?','answer'=>'Yes. Official visiting days are scheduled each term and communicated at the start of the school year. Parents may also contact the school office to enquire about emergency visits or to speak with their son\'s form teacher.'],
    ['question'=>'What bursary support is available?','answer'=>'Nyeri County Government offers bursary funds for needy students. The national HSSF also provides support. Our school office assists qualifying families with the application process.'],
  ];
}

$requirements = [
  ['KCPE Certificate',                 'Kenya Certificate of Primary Education results slip. We consider the overall grade plus performance in English, Mathematics and Science.'],
  ['Birth Certificate',                'Original or certified copy of the student\'s birth certificate as issued by the Registration Office.'],
  ['Primary School Leaving Certificate','Certificate of completion from the primary school attended, signed by the head teacher.'],
  ['Medical Certificate',              'A certificate of medical fitness from a registered medical practitioner confirming the student is fit for boarding school life.'],
  ['4 Passport Photographs',           'Recent colour passport-size photographs of the student for school records.'],
];

$joining_items = [
  ['Uniform',    'Full school uniform as per the official school requirement list. Details provided in the joining letter.'],
  ['Bedding',    'Three sets of bed sheets, two blankets, one pillow and pillowcase, and a mattress cover.'],
  ['Stationery', 'Exercise books (as per booklist), textbooks, pens, pencils, rulers and geometry set.'],
  ['Toiletries', 'Soap, toothbrush, toothpaste, shampoo, deodorant and other personal hygiene items for the term.'],
  ['Games Kit',  'Sports shoes, shorts and t-shirts for physical education and co-curricular sports activities.'],
];
?>

<!-- HERO -->
<section class="relative py-32 lg:py-44 overflow-hidden border-b border-[rgba(245,241,232,.14)]">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10 text-center">
        <p class="eyebrow mb-8">Admissions &middot; Intake 2026</p>
        <h1 class="font-display text-5xl md:text-7xl lg:text-[96px] tracking-[-0.03em] leading-[0.96]">
            Your son's<br /><span class="font-serif-i italic text-[#D4B574]">transformation</span><br />starts here.
        </h1>
        <p class="mt-10 text-white/65 text-lg max-w-2xl mx-auto leading-relaxed">
            We have limited places for Form One intake each year. Every application is reviewed with care. We are not
            looking for perfect boys &mdash; we are looking for boys who are ready to become.
        </p>
        <div class="mt-12 flex flex-wrap justify-center gap-4">
            <a href="#process" class="btn-gold px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">See How
                to Apply</a>
            <a href="#enquiry" class="btn-ghost px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">Send an
                Enquiry</a>
        </div>
    </div>
</section>

<!-- WELCOME QUOTE -->
<section class="py-20 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[900px] mx-auto px-6 lg:px-10 text-center reveal">
        <p class="font-serif-i italic text-2xl lg:text-3xl text-white/75 leading-relaxed">
            &ldquo;<?php echo wp_kses_post($adm_welcome); ?>&rdquo;</p>
        <div class="mt-8 flex items-center justify-center gap-4">
            <div class="w-12 h-px bg-[#B89248]"></div>
            <span class="eyebrow">The Principal</span>
            <div class="w-12 h-px bg-[#B89248]"></div>
        </div>
    </div>
</section>

<!-- PROCESS STEPS -->
<section id="process" class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-xl mb-16">
            <p class="eyebrow">01 &mdash; How to apply</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">Four steps to <span
                    class="font-serif-i italic text-[#D4B574]">joining us</span>.</h2>
        </div>
        <div
            class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <?php
      $steps = [
        ['Enquire',             'Contact our admissions office by phone, email, or by completing the enquiry form below. We will respond within two working days.',       'Contact','0703 639 230'],
        ['Campus Visit',        'Schedule a visit to our campus in Kirurumi. Tour the facilities, meet key staff, and get a feel for the environment your son may call home.','Duration','Half day visit'],
        ['Application',         'Complete the formal application form and submit your son\'s KCPE results certificate, birth certificate and primary school leaving certificate.','Documents','3 required'],
        ['Offer &amp; Enrolment','Successful candidates receive a formal offer letter. Acceptance is confirmed upon payment of the joining fee and submission of all required documents.','Response','Within 5 days'],
      ];
      foreach($steps as $n=>$s):
        $bg = ($n===3) ? 'bg-[#1F3A2E]' : 'bg-[#0B1220]';
        $delay = $n ? ' style="transition-delay:'.($n*.1).'s"' : '';
      ?>
            <div class="p-8 <?php echo $bg; ?> reveal" <?php echo $delay; ?>>
                <div class="num text-6xl text-white/[.06] font-display leading-none mb-6">0<?php echo $n+1; ?></div>
                <h3 class="font-display text-xl mb-3"><?php echo $s[0]; ?></h3>
                <p class="text-sm text-white/55 leading-relaxed mb-6"><?php echo esc_html($s[1]); ?></p>
                <div class="mt-auto pt-4 border-t border-[rgba(245,241,232,.1)]">
                    <div class="eyebrow mb-1"><?php echo $s[2]; ?></div>
                    <div class="text-sm text-white/60"><?php echo $s[3]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- REQUIREMENTS -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16">
        <div class="reveal">
            <p class="eyebrow">02 &mdash; Entry requirements</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">What we look <span
                    class="font-serif-i italic text-[#D4B574]">for in a boy</span>.</h2>
            <p class="mt-8 text-white/70 leading-relaxed max-w-xl">We admit students based on KCPE performance,
                character assessment and available places. We welcome boys from all backgrounds. What matters is not
                perfection — it is potential, attitude, and a family aligned with our values.</p>
            <div class="mt-10 space-y-px border border-[rgba(245,241,232,.14)]">
                <?php foreach($requirements as $r) : ?>
                <div
                    class="flex items-start gap-4 p-5 bg-[#0B1220] border-b border-[rgba(245,241,232,.08)] last:border-0">
                    <div class="w-5 h-5 border border-[#B89248] flex items-center justify-center flex-shrink-0 mt-0.5">
                        <div class="w-1.5 h-1.5 bg-[#B89248] rounded-full"></div>
                    </div>
                    <div>
                        <div class="font-display text-sm mb-1"><?php echo $r[0]; ?></div>
                        <p class="text-xs text-white/55 leading-relaxed"><?php echo esc_html($r[1]); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <p class="eyebrow mb-6">What to bring on joining</p>
            <div class="space-y-px border border-[rgba(245,241,232,.14)]">
                <?php foreach($joining_items as $j) : ?>
                <div class="p-5 bg-[#0B1220] border-b border-[rgba(245,241,232,.08)] last:border-0">
                    <div class="eyebrow mb-2"><?php echo $j[0]; ?></div>
                    <p class="text-sm text-white/55 leading-relaxed"><?php echo esc_html($j[1]); ?></p>
                </div>
                <?php endforeach; ?>
                <div class="p-5 bg-[#1F3A2E]">
                    <div class="eyebrow mb-2">Note</div>
                    <p class="text-sm text-white/60 leading-relaxed">All items must be labelled with the student's name.
                        A full joining list is provided with the acceptance letter. Mobile phones are not permitted.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEES -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16 items-start">
        <div class="reveal">
            <p class="eyebrow">03 &mdash; School fees</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">Transparent, <span
                    class="font-serif-i italic text-[#D4B574]">government-regulated</span>.</h2>
            <div class="mt-8 text-white/70 leading-relaxed max-w-xl space-y-4"><?php echo wp_kses_post($fees_text); ?>
            </div>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                    class="btn-gold px-6 py-3.5 font-display text-[12px] tracking-[0.22em] uppercase">Call
                    Admissions</a>
                <a href="mailto:<?php echo esc_attr($email); ?>"
                    class="btn-ghost px-6 py-3.5 font-display text-[12px] tracking-[0.22em] uppercase">Email Us</a>
            </div>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <div class="border border-[rgba(245,241,232,.14)] divide-y divide-[rgba(245,241,232,.08)]">
                <?php
        $fee_items = [
          ['Tuition',             'Government-subsidised tuition as per the Ministry of Education guidelines for county boarding schools.'],
          ['Boarding &amp; Catering','Three meals daily, dormitory accommodation and house utilities. Regulated by the school board.'],
          ['Activity Fees',       'Co-curricular activities, medical cover, library access and examination registration. Itemised in the joining letter.'],
          ['HELB / Bursary',      'Students from needy families are encouraged to apply for county bursary funds and CDF educational support. Our office assists with the process.'],
        ];
        foreach($fee_items as $f) :
        ?>
                <div class="p-6 bg-[#111827]">
                    <div class="eyebrow mb-2"><?php echo $f[0]; ?></div>
                    <p class="text-sm text-white/60 leading-relaxed"><?php echo $f[1]; ?></p>
                </div>
                <?php endforeach; ?>
                <div class="p-6 bg-[#1F3A2E]">
                    <div class="eyebrow mb-2">For exact current fees</div>
                    <p class="text-sm text-white/70 leading-relaxed">Contact our admissions office: <a
                            href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                            class="text-[#D4B574] link-underline"><?php echo esc_html($phone); ?></a> or <a
                            href="mailto:<?php echo esc_attr($email); ?>"
                            class="text-[#D4B574] link-underline"><?php echo esc_html($email); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KEY DATES -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-xl mb-16">
            <p class="eyebrow">04 &mdash; Key dates 2026</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">Plan ahead. <span
                    class="font-serif-i italic text-[#D4B574]">Act early</span>.</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <?php
      $dates = [
        ['Nov&ndash;Dec','KCPE Results Released',    'Kenya National Examinations Council releases KCPE results. Begin your admissions enquiry immediately.','bg-[#0B1220]'],
        ['December',    'Enquiry &amp; Campus Visits','Contact the school, schedule your campus visit, and collect the application form. Early enquiries receive priority scheduling.','bg-[#0B1220]'],
        ['Jan (Early)', 'Application Deadline',       'All application forms and supporting documents must be submitted. Late applications may be considered subject to available places.','bg-[#0B1220]'],
        ['Jan (Mid)',   'Offer Letters Issued',       'Successful candidates receive formal offer letters. Response and fee payment required within five working days.','bg-[#0B1220]'],
        ['Late January','Form One Reporting Date',    'New students report to school with all required documents and items. The journey begins.','col-span-full bg-[#1F3A2E]'],
      ];
      foreach($dates as $i=>$d):
      ?>
            <div class="p-7 <?php echo $d[3]; ?> reveal"
                <?php echo $i ? ' style="transition-delay:'.($i*.1).'s"' : ''; ?>>
                <div class="num text-[#D4B574] text-3xl mb-3"><?php echo $d[0]; ?></div>
                <div class="font-display text-xl mb-2"><?php echo $d[1]; ?></div>
                <p class="text-sm text-white/55 leading-relaxed"><?php echo esc_html($d[2]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php $dates_note = gbhs_field('adm_dates_note','Exact dates are confirmed annually by the Ministry of Education. Contact us for the most current timetable.'); ?>
        <p class="mt-6 text-sm text-white/40 text-center"><?php echo esc_html($dates_note); ?></p>
    </div>
</section>

<!-- FAQ -->
<section class="py-28 lg:py-40 border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-10">
        <div class="reveal max-w-xl mb-16">
            <p class="eyebrow">05 &mdash; FAQ</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">Common <span
                    class="font-serif-i italic text-[#D4B574]">questions</span>.</h2>
        </div>
        <div x-data="{ open: null }" class="space-y-px border border-[rgba(245,241,232,.14)]">
            <?php foreach($faqs as $i=>$faq):
        $q = is_array($faq) ? ($faq['question']??'') : ($faq->question??'');
        $a = is_array($faq) ? ($faq['answer']  ??'') : ($faq->answer  ??'');
      ?>
            <div class="bg-[#111827]">
                <button @click="open === <?php echo $i; ?> ? open=null : open=<?php echo $i; ?>"
                    class="w-full flex items-center justify-between p-6 text-left gap-4">
                    <span class="font-display text-base"><?php echo esc_html($q); ?></span>
                    <span class="text-[#D4B574] text-xl flex-shrink-0"
                        x-text="open === <?php echo $i; ?> ? '&minus;' : '+'"></span>
                </button>
                <div x-show="open === <?php echo $i; ?>" x-transition
                    class="px-6 pb-6 text-sm text-white/60 leading-relaxed border-t border-[rgba(245,241,232,.08)] pt-4">
                    <?php echo esc_html($a); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ENQUIRY FORM -->
<section id="enquiry" class="py-28 lg:py-40 bg-[#111827] border-b border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-16">
        <div class="reveal">
            <p class="eyebrow">06 &mdash; Get in touch</p>
            <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">We are ready <span
                    class="font-serif-i italic text-[#D4B574]">to answer</span>.</h2>
            <p class="mt-8 text-white/70 leading-relaxed max-w-xl">Complete this form and our admissions team will
                contact you within two working days. Alternatively, call or email us directly.</p>
            <div class="mt-12 space-y-6">
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 border border-[rgba(245,241,232,.14)] flex items-center justify-center flex-shrink-0">
                        <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.07 9.81a19.79 19.79 0 01-3.07-8.68A2 2 0 013 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                        </svg></div>
                    <div>
                        <div class="eyebrow mb-1">Phone</div><a
                            href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                            class="text-white/70 hover:text-white transition"><?php echo esc_html($phone); ?></a>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 border border-[rgba(245,241,232,.14)] flex items-center justify-center flex-shrink-0">
                        <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg></div>
                    <div>
                        <div class="eyebrow mb-1">Email</div><a href="mailto:<?php echo esc_attr($email); ?>"
                            class="text-white/70 hover:text-white transition link-underline"><?php echo esc_html($email); ?></a>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 border border-[rgba(245,241,232,.14)] flex items-center justify-center flex-shrink-0">
                        <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg></div>
                    <div>
                        <div class="eyebrow mb-1">Address</div>
                        <p class="text-white/70"><?php echo nl2br(esc_html(gbhs_address())); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="reveal" style="transition-delay:.15s">
            <form id="enquiry-form" class="space-y-5" novalidate>
                <?php wp_nonce_field('gathathiini_contact_nonce','_wpnonce',false); ?>
                <input type="hidden" name="action" value="gathathiini_contact" />
                <input type="hidden" name="subject" value="Admissions Enquiry" />
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="eyebrow block mb-2">Parent / Guardian Name *</label><input type="text"
                            name="name" required placeholder="Full name"
                            class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                    </div>
                    <div><label class="eyebrow block mb-2">Student's Name</label><input type="text" name="student"
                            placeholder="Son's name"
                            class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                    </div>
                </div>
                <div><label class="eyebrow block mb-2">Phone Number *</label><input type="tel" name="phone" required
                        placeholder="07XX XXX XXX"
                        class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                </div>
                <div><label class="eyebrow block mb-2">Email Address</label><input type="email" name="email"
                        placeholder="your@email.com"
                        class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                </div>
                <div><label class="eyebrow block mb-2">KCPE Score (if available)</label><input type="text" name="score"
                        placeholder="e.g. 380"
                        class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                </div>
                <div><label class="eyebrow block mb-2">Message / Questions</label><textarea name="message" rows="4"
                        placeholder="Any questions or additional information..."
                        class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition resize-none"></textarea>
                </div>
                <button type="submit" data-submit-btn
                    class="w-full btn-gold py-4 font-display text-[12px] tracking-[0.24em] uppercase">Submit Enquiry
                    &rarr;</button>
                <p id="enquiry-success" class="hidden text-sm text-[#D4B574] text-center pt-2">Thank you. We will be in
                    touch within two working days.</p>
                <p id="enquiry-form-error" class="hidden text-sm text-red-400 text-center pt-2"></p>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
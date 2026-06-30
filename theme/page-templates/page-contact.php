<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 */
get_header();

$phone   = function_exists('get_field') && get_field('contact_phone')   ? get_field('contact_phone')   : gbhs_phone();
$email   = function_exists('get_field') && get_field('contact_email')   ? get_field('contact_email')   : gbhs_email();
$address = function_exists('get_field') && get_field('contact_address') ? get_field('contact_address') : gbhs_address();
$map_url = function_exists('get_field') ? get_field('contact_map_url') : '';
$map_url = $map_url ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.2!2d36.9703!3d-0.4167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182860!2sKirurumi%2C+Tetu%2C+Nyeri!5e0!3m2!1sen!2ske!4v1700000000000!5m2!1sen!2ske';
$wa_num  = gbhs_wa();
$admissions_url = ($page = get_page_by_path('admissions'))
    ? get_permalink($page->ID)
    : home_url('/admissions/');
    ?>

<!-- PAGE HERO -->
<section class="relative pt-40 pb-24 lg:pt-52 lg:pb-32 border-b border-[rgba(245,241,232,.14)] overflow-hidden">
    <div class="absolute inset-0 grain opacity-20"></div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-10 grid lg:grid-cols-12 gap-12 items-end">
        <div class="lg:col-span-7">
            <p class="eyebrow mb-6">Contact Us</p>
            <h1 class="font-display text-5xl md:text-7xl lg:text-[88px] tracking-[-0.03em] leading-[0.98]">
                We are ready<br />to <span class="font-serif-i italic text-[#D4B574]">hear from you</span>.
            </h1>
            <p class="mt-8 text-white/65 text-lg max-w-xl leading-relaxed">
                Whether you are a parent exploring options, a prospective student, an alumnus reconnecting, or a
                community partner &mdash; we welcome your message. Our office responds within two working days.
            </p>
        </div>
        <div class="lg:col-span-5 grid gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <a href="tel:+254<?php echo esc_attr( preg_replace('/\D/','',$phone) ); ?>"
                class="flex items-center gap-5 p-6 bg-[#111827] hover:bg-[#1F3A2E] transition group">
                <div
                    class="w-10 h-10 border border-[rgba(245,241,232,.14)] group-hover:border-[#B89248] flex items-center justify-center flex-shrink-0 transition">
                    <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                        <path
                            d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.07 9.81a19.79 19.79 0 01-3.07-8.68A2 2 0 013 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                    </svg>
                </div>
                <div>
                    <div class="eyebrow">Phone</div>
                    <div class="font-display text-base mt-1"><?php echo esc_html($phone); ?></div>
                </div>
            </a>
            <a href="mailto:<?php echo esc_attr($email); ?>"
                class="flex items-center gap-5 p-6 bg-[#111827] hover:bg-[#1F3A2E] transition group">
                <div
                    class="w-10 h-10 border border-[rgba(245,241,232,.14)] group-hover:border-[#B89248] flex items-center justify-center flex-shrink-0 transition">
                    <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <div>
                    <div class="eyebrow">Email</div>
                    <div class="font-display text-sm mt-1"><?php echo esc_html($email); ?></div>
                </div>
            </a>
            <div class="flex items-center gap-5 p-6 bg-[#111827]">
                <div
                    class="w-10 h-10 border border-[rgba(245,241,232,.14)] flex items-center justify-center flex-shrink-0">
                    <svg width="14" height="14" fill="none" stroke="#D4B574" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <div>
                    <div class="eyebrow">Address</div>
                    <div class="text-sm text-white/70 mt-1 leading-snug"><?php echo nl2br(esc_html($address)); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OFFICE HOURS CARDS -->
<section class="py-16 border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div
            class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-[rgba(245,241,232,.14)] border border-[rgba(245,241,232,.14)]">
            <div class="p-8 bg-[#0B1220] reveal">
                <div class="eyebrow mb-5">General Enquiries</div>
                <div class="space-y-3 text-sm text-white/70">
                    <div>
                        <div class="text-xs text-white/40 mb-1">Phone</div><a
                            href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                            class="link-underline"><?php echo esc_html($phone); ?></a>
                    </div>
                    <div>
                        <div class="text-xs text-white/40 mb-1">Email</div><a
                            href="mailto:<?php echo esc_attr($email); ?>"
                            class="link-underline break-all"><?php echo esc_html($email); ?></a>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-[#0B1220] reveal" style="transition-delay:.1s">
                <div class="eyebrow mb-5">Admissions Office</div>
                <div class="space-y-3 text-sm text-white/70">
                    <div>
                        <div class="text-xs text-white/40 mb-1">Phone</div><a
                            href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                            class="link-underline"><?php echo esc_html($phone); ?></a>
                    </div>
                    <div>
                        <div class="text-xs text-white/40 mb-1">Subject line</div><span>ADMISSIONS 2026</span>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-[#0B1220] reveal" style="transition-delay:.2s">
                <div class="eyebrow mb-5">Physical Address</div>
                <p class="text-sm text-white/70 leading-relaxed"><?php echo nl2br(esc_html($address)); ?></p>
            </div>
            <div class="p-8 bg-[#0B1220] reveal" style="transition-delay:.3s">
                <div class="eyebrow mb-5">Office Hours</div>
                <div class="space-y-2 text-sm text-white/70">
                    <div class="flex justify-between"><span>Mon &ndash; Fri</span><span class="text-white/50">8:00
                            &ndash; 17:00</span></div>
                    <div class="flex justify-between"><span>Saturday</span><span class="text-white/50">9:00 &ndash;
                            13:00</span></div>
                    <div class="flex justify-between"><span>Sunday</span><span class="text-white/50">Closed</span></div>
                    <div class="pt-3 border-t border-[rgba(245,241,232,.08)] text-xs text-white/40">Term-time hours may
                        vary.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FORM + MAP -->
<section class="border-b border-[rgba(245,241,232,.14)]">
    <div class="grid lg:grid-cols-2">

        <!-- Contact Form -->
        <div class="py-28 lg:py-40 px-6 lg:px-16 border-r border-[rgba(245,241,232,.14)]">
            <div class="max-w-lg reveal">
                <p class="eyebrow">01 &mdash; Send a message</p>
                <h2 class="font-display text-4xl lg:text-5xl tracking-[-0.02em] leading-[1.05] mt-6">
                    Start a <span class="font-serif-i italic text-[#D4B574]">conversation</span>.
                </h2>
                <p class="mt-6 text-white/60 leading-relaxed text-sm">We respond to every message. Call us or use this
                    form and we will be in touch within two working days.</p>

                <form id="contact-form" class="mt-10 space-y-5" novalidate>
                    <?php wp_nonce_field( 'gathathiini_contact_nonce', '_wpnonce', false ); ?>
                    <input type="hidden" name="action" value="gathathiini_contact" />
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="eyebrow block mb-2">Your Name *</label>
                            <input type="text" name="name" required placeholder="Full name"
                                class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                        </div>
                        <div>
                            <label class="eyebrow block mb-2">Phone</label>
                            <input type="tel" name="phone" placeholder="07XX XXX XXX"
                                class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                        </div>
                    </div>
                    <div>
                        <label class="eyebrow block mb-2">Email Address</label>
                        <input type="email" name="email" placeholder="your@email.com"
                            class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition" />
                    </div>
                    <div>
                        <label class="eyebrow block mb-2">Subject</label>
                        <select name="subject"
                            class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm text-white/60 bg-[#0B1220] focus:border-[rgba(184,146,72,.5)] outline-none transition">
                            <option value="General Enquiry">General Enquiry</option>
                            <option value="Admissions Enquiry">Admissions Enquiry</option>
                            <option value="Campus Visit Request">Campus Visit Request</option>
                            <option value="Fees &amp; Bursaries">Fees &amp; Bursaries</option>
                            <option value="Alumni Relations">Alumni Relations</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="eyebrow block mb-2">Message *</label>
                        <textarea name="message" rows="5" required placeholder="Your message&hellip;"
                            class="w-full border border-[rgba(245,241,232,.14)] px-4 py-3 text-sm placeholder:text-white/30 text-white bg-transparent focus:border-[rgba(184,146,72,.5)] outline-none transition resize-none"></textarea>
                    </div>
                    <button type="submit" data-submit-btn
                        class="w-full btn-gold py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                        Send Message &rarr;
                    </button>
                    <p id="contact-success" class="hidden text-sm text-[#D4B574] text-center pt-2">
                        Message received. We will respond within two working days.
                    </p>
                    <p id="contact-form-error" class="hidden text-sm text-red-400 text-center pt-2"></p>
                </form>
            </div>
        </div>

        <!-- Map + Directions -->
        <div class="flex flex-col">
            <div
                class="relative h-[420px] lg:h-[500px] bg-[#111827] border-b border-[rgba(245,241,232,.14)] overflow-hidden">
                <iframe src="<?php echo esc_url($map_url); ?>" class="w-full h-full border-0"
                    style="filter:grayscale(1) invert(1) brightness(.8) contrast(.9)" loading="lazy" allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade" title="Gathathiini Boys High School map"></iframe>
                <a href="https://maps.google.com/?q=Kirurumi,Tetu,Nyeri+County,Kenya" target="_blank" rel="noopener"
                    class="absolute bottom-4 right-4 btn-gold px-4 py-2 text-[10px] tracking-[0.2em] uppercase font-display">
                    Open in Maps &rarr;
                </a>
            </div>
            <div class="py-12 px-8 lg:px-12 reveal flex-1">
                <p class="eyebrow mb-6">02 &mdash; How to find us</p>
                <h3 class="font-display text-2xl lg:text-3xl tracking-[-0.02em] mb-8">
                    Kirurumi, <span class="font-serif-i italic text-[#D4B574]">Tetu Sub-County</span>
                </h3>
                <?php
        $directions = [
          ['From Nyeri Town',         'Take the Tetu road heading north-west from Nyeri town centre. Gathathiini Boys is approximately 18&nbsp;km from Nyeri town, near Kirurumi shopping centre.'],
          ['From Nairobi',            'Travel the Nairobi&ndash;Nyeri highway. Upon reaching Nyeri town, follow signs to Tetu Sub-County. Matatus from Nyeri bus park serve Kirurumi directly.'],
          ['By Public Transport',     'Regular matatu services operate from Nyeri bus park to Kirurumi. Ask the driver to drop you at Gathathiini Boys High School. Journey: ~30&ndash;40 minutes.'],
          ['Campus Visiting Days',    'Official visiting days are scheduled each term. For individual tours call <a href="tel:+254703639230" class="text-[#D4B574] link-underline">' . esc_html($phone) . '</a> to book a time.'],
        ];
        foreach ( $directions as $n => $d ) {
            echo '<div class="flex items-start gap-4 mb-6">';
            echo '<div class="w-8 h-8 border border-[rgba(245,241,232,.14)] flex items-center justify-center flex-shrink-0 mt-0.5">';
            echo '<span class="num text-xs text-[#D4B574]">0' . ($n+1) . '</span></div>';
            echo '<div><div class="font-display text-sm mb-1">' . esc_html($d[0]) . '</div>';
            echo '<p class="text-sm text-white/55 leading-relaxed">' . $d[1] . '</p></div></div>';
        }
        ?>
            </div>
        </div>

    </div>
</section>

<!-- SOCIAL + MINI CTA -->
<section class="py-28 lg:py-36 text-center border-b border-[rgba(245,241,232,.14)] bg-[#111827]">
    <div class="max-w-[760px] mx-auto px-6 reveal">
        <p class="eyebrow">Ready to take the next step?</p>
        <h2 class="font-display text-4xl lg:text-6xl tracking-[-0.03em] leading-[1.0] mt-8">
            Your son belongs <span class="font-serif-i italic text-[#D4B574]">here</span>.
        </h2>
        <p class="mt-8 text-white/60 text-lg max-w-lg mx-auto leading-relaxed">
            Four years from now, you will look back on this moment as the beginning of your son&rsquo;s transformation.
        </p>
        <div class="mt-12 flex flex-wrap justify-center gap-4">
            <a href="<?php echo esc_url($admissions_url); ?>"
                class="btn-gold px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">Start Application</a>
            <a href="tel:+254<?php echo esc_attr(preg_replace('/\D/','',$phone)); ?>"
                class="btn-ghost px-8 py-4 font-display text-[12px] tracking-[0.24em] uppercase">
                Call <?php echo esc_html($phone); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
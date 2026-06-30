<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */

/**
* Footer template — site footer + wp_footer().
* Called by get_footer() in every page template.
*/
if ( ! defined( 'ABSPATH' ) ) exit;

$school_phone = gbhs_phone();
$school_email = gbhs_email();
$school_addr = gbhs_address();
$wa_num = gbhs_wa();
$fb_url = gbhs_option( 'facebook_url', '#' );
$ig_url = gbhs_option( 'instagram_url', '#' );
$yt_url = gbhs_option( 'youtube_url', '#' );

// Nav page helpers
function gbhs_footer_link( string $title ): string {
$slug = sanitize_title( $title );

$page = get_page_by_path( $slug, OBJECT, 'page' );

$url = $page ? get_permalink( $page->ID ) : '#';

return '<li><a class="link-underline" href="' . esc_url( $url ) . '">'
        . esc_html( $title ) .
        '</a></li>';
}
?>

<!-- ════════════════════════════════════════════════════════
     SITE FOOTER
     ════════════════════════════════════════════════════════ -->
<footer class="bg-black border-t border-[rgba(245,241,232,.14)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 py-20 grid lg:grid-cols-12 gap-12">

        <!-- Brand -->
        <div class="lg:col-span-4">
            <div class="flex items-center gap-3">
                <span class="crest">
                    <span>
                        <?php
                        $logo_url = get_template_directory_uri() . '/assets/img/logo.avif';
                        $logo_alt = esc_attr__( 'Gathathi-ini Boys High School Logo', 'gathathiini' );
                        ?>
                        <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo $logo_alt; ?>" class="h-10">
                    </span>
                </span>
                <div class="leading-tight">
                    <div class="font-display text-sm tracking-[0.18em] uppercase">Gathathiini Boys</div>
                    <div class="text-[10px] tracking-[0.32em] uppercase text-[#D4B574]">High School &middot; Nyeri</div>
                </div>
            </div>
            <p class="mt-8 text-white/55 leading-relaxed max-w-sm text-[15px]">
                A county boarding school in Kirurumi, Nyeri, forming Kenyan boys into men of character, intellect and
                consequence.
            </p>
            <p class="font-serif-i italic text-[#D4B574] mt-8 text-xl">Vir Integer &mdash; the whole man.</p>
        </div>

        <!-- Quick Links -->
        <div class="lg:col-span-2">
            <div class="eyebrow">Explore</div>
            <ul class="mt-6 space-y-3 text-sm text-white/70">
                <?php
        echo gbhs_footer_link( 'About' );
        echo gbhs_footer_link( 'Academics' );
        echo gbhs_footer_link( 'Pillars' );
        echo gbhs_footer_link( 'Campus Life' );
        echo gbhs_footer_link( 'Admissions' );
        ?>
            </ul>
        </div>

        <!-- Contact -->
        <div class="lg:col-span-3">
            <div class="eyebrow">Contact</div>
            <ul class="mt-6 space-y-4 text-sm text-white/70">
                <?php
        $lines = array_filter( explode( "\n", $school_addr ) );
        if ( count( $lines ) >= 2 ) {
            echo '<li>' . esc_html( $lines[0] ) . '<br/>' . esc_html( $lines[1] ) . '</li>';
            if ( isset( $lines[2] ) ) echo '<li>' . esc_html( $lines[2] ) . '</li>';
        } else {
            echo '<li>' . nl2br( esc_html( $school_addr ) ) . '</li>';
        }
        ?>
                <li>
                    <a class="link-underline"
                        href="tel:+254<?php echo esc_attr( preg_replace( '/\D/', '', $school_phone ) ); ?>">
                        <?php echo esc_html( $school_phone ); ?>
                    </a>
                </li>
                <li>
                    <a class="link-underline" href="mailto:<?php echo esc_attr( $school_email ); ?>">
                        <?php echo esc_html( $school_email ); ?>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="lg:col-span-3">
            <div class="eyebrow">Newsletter</div>
            <p class="mt-6 text-sm text-white/60">Quarterly dispatches from the campus &mdash; academic, athletic and
                editorial.</p>
            <form class="mt-5 flex border border-[rgba(245,241,232,.14)]" onsubmit="return false;">
                <input type="email" placeholder="your@email.com"
                    class="flex-1 bg-transparent px-4 py-3 text-sm placeholder:text-white/30 focus:outline-none" />
                <button class="btn-gold px-5 text-[11px] tracking-[0.22em] uppercase font-display">Join</button>
            </form>
            <div class="mt-8 flex gap-3 text-[11px] tracking-[0.24em] uppercase text-white/60">
                <a href="<?php echo esc_url( $ig_url ); ?>" class="link-underline" target="_blank" rel="noopener">IG</a>
                <span>&middot;</span>
                <a href="<?php echo esc_url( $yt_url ); ?>" class="link-underline" target="_blank" rel="noopener">YT</a>
                <span>&middot;</span>
                <a href="<?php echo esc_url( $fb_url ); ?>" class="link-underline" target="_blank" rel="noopener">FB</a>
                <span>&middot;</span>
                <a href="https://wa.me/<?php echo esc_attr( $wa_num ); ?>" class="link-underline" target="_blank"
                    rel="noopener">WA</a>
            </div>
        </div>

    </div><!-- /grid -->

    <!-- Bottom bar -->
    <div class="border-t border-[rgba(245,241,232,.14)]">
        <div
            class="max-w-[1440px] mx-auto px-6 lg:px-10 py-6 flex flex-col md:flex-row items-center justify-between gap-3 text-[11px] tracking-[0.22em] uppercase text-white/40">
            <div>&copy; <?php echo date( 'Y' ); ?> Gathathiini Boys High School. All rights reserved.</div>
            <div class="flex gap-6">
                <a href="#" class="link-underline">Privacy</a>
                <a href="#" class="link-underline">Safeguarding</a>
                <?php
                $contact = get_page_by_path('contact');
                $url = $contact ? get_permalink($contact->ID) : home_url('/contact/');

                echo '<a href="' . esc_url($url) . '" class="link-underline">Contact</a>';
                ?>
            </div>
        </div>
    </div>

</footer>
<!-- end site footer -->
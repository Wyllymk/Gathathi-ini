<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">GB</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Gathathi-ini Boys</h3>
                        <p class="text-cyan-300 text-sm">High School</p>
                    </div>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-4">Transforming boys into men of purpose and
                    integrity through excellence in academics, sports, and character development.</p>
                <div class="flex space-x-3">
                    <a href="#"
                        class="w-10 h-10 bg-slate-700 hover:bg-cyan-500 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-slate-700 hover:bg-cyan-500 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-slate-700 hover:bg-cyan-500 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121L7.9 13.442l-2.97-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 text-cyan-400">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/academics')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Academics</a></li>
                    <li><a href="<?php echo esc_url(home_url('/admissions')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Admissions</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pillars')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Our Pillars</a></li>
                    <li><a href="<?php echo esc_url(home_url('/gallery')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Gallery</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">News & Events</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 text-cyan-400">Our Pillars</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/pillars#academic')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Academic Excellence</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/pillars#sports')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Sports & Talent</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pillars#arts')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Creative Arts</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pillars#digital')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Digital Literacy</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/pillars#social')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Social
                            Responsibility</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pillars#holistic')); ?>"
                            class="text-gray-300 hover:text-cyan-400 transition-colors text-sm">Holistic Development</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 text-cyan-400">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-cyan-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-gray-300 text-sm">Tetu, Nyeri County, Kenya</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-cyan-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span class="text-gray-300 text-sm">+254 705 419 982</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-cyan-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-gray-300 text-sm">info@gathathiini.sc.ke</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-700 pt-8 mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400 text-sm">© <?php echo date('Y'); ?> Gathathi-ini Boys High School. All rights
                    reserved.</p>
                <div class="flex space-x-6">
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"
                        class="text-gray-400 hover:text-cyan-400 text-sm transition-colors">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms')); ?>"
                        class="text-gray-400 hover:text-cyan-400 text-sm transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
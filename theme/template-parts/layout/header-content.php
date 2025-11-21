<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<header class="fixed w-full top-0 z-50 transition-all duration-300" x-data="{ scrolled: false, mobileMenuOpen: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50)"
    :class="scrolled ? 'bg-slate-900/95 backdrop-blur-md shadow-lg' : 'bg-transparent'">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-3">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center shadow-lg">
                    <span class="text-white font-bold text-xl">GB</span>
                </div>
                <div>
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="text-white font-bold text-xl tracking-tight">Gathathi-ini Boys</a>
                    <p class="text-cyan-300 text-xs font-medium">High School</p>
                </div>
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="text-white hover:text-cyan-400 transition-colors font-medium">Home</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>"
                    class="text-white hover:text-cyan-400 transition-colors font-medium">About</a>
                <a href="<?php echo esc_url(home_url('/academics')); ?>"
                    class="text-white hover:text-cyan-400 transition-colors font-medium">Academics</a>
                <a href="<?php echo esc_url(home_url('/pillars')); ?>"
                    class="text-white hover:text-cyan-400 transition-colors font-medium">Our Pillars</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                    class="text-white hover:text-cyan-400 transition-colors font-medium">Contact</a>
                <a href="<?php echo esc_url(home_url('/admissions')); ?>"
                    class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all">Apply
                    Now</a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-white p-2">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </nav>

        <div x-show="mobileMenuOpen" x-transition class="lg:hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white hover:text-cyan-400 py-2">Home</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>"
                    class="text-white hover:text-cyan-400 py-2">About</a>
                <a href="<?php echo esc_url(home_url('/academics')); ?>"
                    class="text-white hover:text-cyan-400 py-2">Academics</a>
                <a href="<?php echo esc_url(home_url('/pillars')); ?>" class="text-white hover:text-cyan-400 py-2">Our
                    Pillars</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                    class="text-white hover:text-cyan-400 py-2">Contact</a>
                <a href="<?php echo esc_url(home_url('/admissions')); ?>"
                    class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-6 py-3 rounded-full text-center font-semibold">Apply
                    Now</a>
            </div>
        </div>
    </div>
</header>
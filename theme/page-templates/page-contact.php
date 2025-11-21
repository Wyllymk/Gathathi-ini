<?php
/**
 * The template for displaying the contact page
 *
 * Template Name: Contact Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="bg-cyber-light dark:bg-cyber-dark min-h-screen">

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-gradient-to-br from-slate-900 via-cyan-900 to-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl">
            </div>
            <div
                class="absolute bottom-20 right-20 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Get In Touch</h1>
                <p class="text-xl text-gray-300 leading-relaxed">We would love to hear from you. Reach out to us for
                    admissions, inquiries, or any questions you may have.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form and Details -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-6">Send Us a Message</h2>
                        <form id="contact-form" class="space-y-6">

                            <!-- Honeypot (hidden field) -->
                            <input type="text" name="honeypot" class="hidden" style="display:none!important">

                            <div class="relative">
                                <label for="name" class="block text-slate-700 font-semibold mb-2">Your Name</label>
                                <input id="name" name="name" type="text" placeholder="Enter your full name"
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:border-cyan-500 transition-colors">
                            </div>

                            <div class="relative">
                                <label for="email" class="block text-slate-700 font-semibold mb-2">Email Address</label>
                                <input id="email" name="email" type="email" placeholder="Enter your email"
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:border-cyan-500 transition-colors">
                            </div>

                            <div class="relative">
                                <label for="phone" class="block text-slate-700 font-semibold mb-2">Phone Number</label>
                                <input id="phone" name="phone" type="tel" placeholder="Enter your phone number"
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:border-cyan-500 transition-colors">
                            </div>

                            <div class="relative">
                                <label for="subject" class="block text-slate-700 font-semibold mb-2">Subject</label>
                                <select id="subject" name="subject"
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:border-cyan-500 transition-colors">
                                    <option value="">Select a subject</option>
                                    <option>Admissions Inquiry</option>
                                    <option>Academic Information</option>
                                    <option>Facilities Tour</option>
                                    <option>General Question</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="relative">
                                <label for="message" class="block text-slate-700 font-semibold mb-2">Your
                                    Message</label>
                                <textarea id="message" name="message" rows="5"
                                    placeholder="Tell us more about your inquiry"
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:border-cyan-500 transition-colors resize-none"></textarea>
                            </div>

                            <button id="submit-btn" type="submit"
                                class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all flex items-center justify-center">

                                <span id="btn-icon" class="mr-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </span>

                                <span id="btn-text">Send Message</span>
                            </button>

                        </form>

                    </div>

                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-6">Contact Information</h2>
                        <div class="space-y-6 mb-8">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">School Location</h3>
                                    <p class="text-slate-600">Tetu, Nyeri County, Kenya</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Phone Number</h3>
                                    <p class="text-slate-600">+254 705 419 982</p>
                                    <p class="text-sm text-slate-500 mt-1">Monday - Friday: 8:00 AM - 5:00 PM</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 mb-2">Email Address</h3>
                                    <p class="text-slate-600">info@gathathiini.sc.ke</p>
                                    <p class="text-sm text-slate-500 mt-1">We respond within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8">
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Office Hours</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-slate-600">Monday - Friday</span>
                                    <span class="text-slate-900 font-semibold">8:00 AM - 5:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-600">Saturday</span>
                                    <span class="text-slate-900 font-semibold">9:00 AM - 1:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-600">Sunday</span>
                                    <span class="text-slate-900 font-semibold">Closed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mt-8">
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121L7.9 13.442l-2.97-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-slate-900 mb-4">Find Us</h2>
                    <p class="text-xl text-slate-600">Located in the beautiful region of Tetu, Nyeri County</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-xl">
                    <div class="aspect-video bg-slate-200 rounded-2xl overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7007774119197!2d36.84753587572726!3d-0.43980523528834203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182859d196648c8d%3A0x580a6001ed6ba354!2sGathathini%20High%20School!5e0!3m2!1sen!2ske!4v1763709261228!5m2!1sen!2ske"
                            class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Ready to Join Us?</h2>
                <p class="text-xl text-gray-300 mb-8">Start your application today and become part of our community.</p>
                <a href="<?php echo esc_url(home_url('/admissions')); ?>"
                    class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">Apply
                    for Admission</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); 
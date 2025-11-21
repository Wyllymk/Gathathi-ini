<?php
/**
 * The template for displaying the services page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
defined('ABSPATH') || exit;

get_header();
?>

<main
    class="min-h-screen bg-cyber-light dark:bg-cyber-dark transition-colors duration-400 ease-in-out overflow-x-hidden">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="navMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-cyber-light/90 dark:bg-cyber-dark/90 backdrop-blur-md drop-shadow-cyber-cyan 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- Hero Section -->
    <section
        class="pt-20 md:pt-0 min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-cyber-light via-white to-gray-100 dark:from-cyber-dark dark:via-gray-900 dark:to-black">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating code snippets -->
            <div class="absolute top-20 left-10 opacity-20 animate-pulse">
                <pre class="text-cyber-cyan text-xs font-mono"><code>&lt;div className="hero"&gt;</code></pre>
            </div>
            <div class="absolute top-40 right-20 opacity-15 animate-bounce">
                <pre class="text-cyber-pink text-xs font-mono"><code>const build = () =&gt; magic;</code></pre>
            </div>
            <div class="absolute bottom-32 left-32 opacity-25 animate-pulse">
                <pre class="text-cyber-blue text-xs font-mono"><code>function deploy() { success(); }</code></pre>
            </div>

            <!-- Geometric shapes -->
            <div class="absolute top-1/4 right-1/4 w-32 h-32 border-2 border-cyber-cyan/30 rotate-45 animate-spin-slow">
            </div>
            <div class="absolute bottom-1/3 left-1/6 w-20 h-20 bg-cyber-pink/20 rounded-full animate-pulse"></div>
            <div
                class="absolute top-1/2 left-1/4 w-16 h-16 bg-gradient-to-br from-cyber-blue/20 to-cyber-coral/20 transform rotate-12 animate-bounce">
            </div>
        </div>

        <div class="container mx-auto px-4 text-center z-10 relative">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-cyber-cyan/20 to-cyber-blue/20 
                    backdrop-blur-sm rounded-full text-cyber-blue dark:text-cyber-cyan font-manrope text-sm font-semibold
                    border border-cyber-cyan/30">
                    ✨ Full-Stack Developer & WordPress Expert
                </span>
            </div>

            <h1 class="font-nico text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight mb-8 
                leading-tight">
                <span class="block bg-gradient-to-r from-cyber-blue via-cyber-cyan to-cyber-pink 
                    bg-clip-text text-transparent animate-pulse">
                    Services That
                </span>
                <span class="block text-text-light dark:text-text-dark mt-2">
                    Power Your Vision
                </span>
            </h1>

            <p
                class="font-manrope text-xl md:text-2xl text-text-light-muted dark:text-text-dark-muted max-w-4xl mx-auto mb-12 leading-relaxed">
                From concept to deployment, I craft cutting-edge solutions that blend creativity with precision.
                Transform your ideas into digital experiences that drive results.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo esc_url(site_url('/contact/')); ?>" class="group px-8 py-4 bg-gradient-to-r from-cyber-blue to-cyber-coral 
                    dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope font-semibold rounded-full
                    hover:scale-105 transition-all duration-300 drop-shadow-cyber-cyan
                    relative overflow-hidden">
                    <span class="relative z-10">Let's Build Something Awesome</span>
                    <div
                        class="absolute inset-0 bg-white/20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    </div>
                </a>

                <a href="#services" class="px-8 py-4 border-2 border-cyber-blue dark:border-cyber-cyan text-cyber-blue dark:text-cyber-cyan
                    font-manrope font-semibold rounded-full hover:bg-cyber-blue hover:text-white
                    dark:hover:bg-cyber-cyan dark:hover:text-cyber-dark
                    transition-all duration-300">
                    Explore Services
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-cyber-cyan" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 16l-6-6h12l-6 6z" />
            </svg>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-cyber-dark">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2
                    class="font-nico text-4xl md:text-6xl font-black uppercase text-cyber-blue dark:text-cyber-cyan mb-6">
                    What I Offer
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-cyber-cyan to-cyber-pink mx-auto mb-6"></div>
                <p class="font-manrope text-lg text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                    Comprehensive digital solutions tailored to your business needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Full-Stack Development -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <!-- Background Pattern -->
                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-cyber-cyan">
                            <path d="M20,20 L80,20 L80,80 L20,80 Z M30,40 L70,40 M30,50 L70,50 M30,60 L70,60"
                                stroke="currentColor" stroke-width="2" fill="none" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyber-cyan/20 to-cyber-blue/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-cyber-blue dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            Full-Stack Development
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            End-to-end web solutions with seamless front-end and back-end integration using modern
                            technologies.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">React, Node.js,
                                    PHP Development</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Database Design &
                                    Optimization</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Scalable
                                    Architecture</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-cyber-cyan/10 text-cyber-cyan rounded-full text-xs font-semibold">
                                Full-Stack
                            </span>
                        </div>
                    </div>
                </div>

                <!-- WordPress Solutions -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-cyber-pink">
                            <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="2" fill="none" />
                            <path d="M35,35 Q50,20 65,35 Q50,50 35,35" stroke="currentColor" stroke-width="2"
                                fill="none" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyber-pink/20 to-cyber-coral/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-cyber-pink dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.469 6.825c.084.062.159.138.222.225.249.349.145.987-.208 1.248L13.469 14.4c-.28.2-.52.4-.809.557-1.33.724-2.7-.062-2.7-1.538V8.567c0-1.476 1.37-2.262 2.7-1.538.289.157.529.357.809.557l8.014-6.102c.353-.261.991-.141 1.248.208.062.084.138.159.222.225-.041-.097-.097-.184-.166-.258-.069-.074-.159-.138-.262-.184-.145-.062-.309-.062-.454 0-.145.062-.262.166-.325.291l-8.014 6.102c-.28-.2-.52-.4-.809-.557C12.637 5.587 11 6.373 11 8.567v5.852c0 2.194 1.637 2.98 2.923 2.256.289-.157.529-.357.809-.557l8.014 6.102c.063.125.18.229.325.291.145.062.309.062.454 0 .103-.046.193-.11.262-.184.069-.074.125-.161.166-.258z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            WordPress Solutions
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Custom themes, plugins, and WooCommerce solutions optimized for performance and user
                            experience.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Custom Theme
                                    Development</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">WooCommerce
                                    Integration</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Performance
                                    Optimization</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-cyber-pink/10 text-cyber-pink rounded-full text-xs font-semibold">
                                WordPress
                            </span>
                        </div>
                    </div>
                </div>

                <!-- API & Integration -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-cyber-blue">
                            <path d="M20,50 L40,30 L40,45 L80,45 L80,55 L40,55 L40,70 Z" stroke="currentColor"
                                stroke-width="2" fill="none" />
                            <circle cx="85" cy="50" r="5" fill="currentColor" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyber-blue/20 to-cyber-cyan/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-cyber-blue dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.5 12c0 .3-.1.6-.2.8l1.4 1.1c.1.1.2.3.1.5l-1.3 2.3c-.1.2-.3.2-.5.1l-1.6-.7c-.3.3-.7.5-1.1.6l-.2 1.7c0 .2-.2.4-.4.4h-2.6c-.2 0-.4-.2-.4-.4L10.5 17c-.4-.1-.8-.3-1.1-.6l-1.6.7c-.2.1-.4 0-.5-.1l-1.3-2.3c-.1-.2 0-.4.1-.5l1.4-1.1c-.1-.2-.1-.5-.1-.8s0-.6.1-.8L6.1 10.4c-.1-.1-.2-.3-.1-.5l1.3-2.3c.1-.2.3-.2.5-.1l1.6.7c.3-.3.7-.5 1.1-.6L10.7 6c0-.2.2-.4.4-.4h2.6c.2 0 .4.2.4.4l.2 1.6c.4.1.8.3 1.1.6l1.6-.7c.2-.1.4 0 .5.1l1.3 2.3c.1.2 0 .4-.1.5l-1.4 1.1c.1.2.2.5.2.8zm-5.5 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            API & Integration
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Connect systems seamlessly with robust APIs, third-party integrations, and cloud solutions.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">RESTful API
                                    Development</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">AWS & Cloud
                                    Integration</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Third-party
                                    Connections</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-cyber-blue/10 text-cyber-blue rounded-full text-xs font-semibold">
                                Integration
                            </span>
                        </div>
                    </div>
                </div>

                <!-- E-Commerce Solutions -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-cyber-coral">
                            <path d="M25,35 L75,35 L70,65 L30,65 Z M35,25 L40,35 M60,35 L65,25" stroke="currentColor"
                                stroke-width="2" fill="none" />
                            <circle cx="35" cy="75" r="5" fill="currentColor" />
                            <circle cx="65" cy="75" r="5" fill="currentColor" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-cyber-coral/20 to-cyber-pink/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-cyber-coral dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.5-1.1 2.2c-.1.3-.2.6-.2.9 0 1.1.9 2 2 2h12v-2H7.4c-.1 0-.2-.1-.2-.2l.03-.12L8.1 13h7.4c.8 0 1.5-.4 1.9-1.1L21.7 4H5.2L4.3 2H1zm16 16c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            E-Commerce Solutions
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Complete online store development with payment gateways, inventory management, and
                            user-friendly interfaces.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">WooCommerce
                                    Development</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Payment Gateway
                                    Integration</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Inventory
                                    Management</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-cyber-coral/10 text-cyber-coral rounded-full text-xs font-semibold">
                                E-Commerce
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Performance Optimization -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-green-500">
                            <path d="M20,80 Q30,60 40,70 Q60,40 80,50" stroke="currentColor" stroke-width="3"
                                fill="none" />
                            <circle cx="80" cy="50" r="5" fill="currentColor" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-500/20 to-cyber-cyan/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-green-500 dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13,9H18.5L13,3.5V9M6,2H14L20,8V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V4C4,2.89 4.89,2 6,2M15,18V16H6V18H15M18,14V12H6V14H18Z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            Performance Optimization
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Speed up your website with advanced optimization techniques, caching, and performance
                            monitoring.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Site Speed
                                    Optimization</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Caching
                                    Implementation</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Database
                                    Optimization</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-xs font-semibold">
                                Performance
                            </span>
                        </div>
                    </div>
                </div>

                <!-- DevOps & Deployment -->
                <div class="group relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                    hover:shadow-2xl border border-gray-200 dark:border-gray-700
                    hover:border-cyber-cyan dark:hover:border-cyber-cyan
                    transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                    overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-purple-500">
                            <rect x="20" y="40" width="60" height="20" rx="5" stroke="currentColor" stroke-width="2"
                                fill="none" />
                            <circle cx="35" cy="50" r="3" fill="currentColor" />
                            <circle cx="50" cy="50" r="3" fill="currentColor" />
                            <circle cx="65" cy="50" r="3" fill="currentColor" />
                        </svg>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500/20 to-cyber-pink/20 
                            rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-purple-500 dark:text-cyber-cyan" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1H5C3.9 1 3 1.9 3 3V21C3 22.1 3.9 23 5 23H19C20.1 23 21 22.1 21 21V9M19 21H5V3H13V9H19V21Z" />
                            </svg>
                        </div>

                        <h3
                            class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4 
                            group-hover:text-cyber-coral dark:group-hover:text-cyber-pink transition-colors duration-300">
                            DevOps & Deployment
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Streamlined deployment pipelines, server management, and continuous integration for reliable
                            delivery.
                        </p>

                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">AWS Cloud
                                    Deployment</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">CI/CD
                                    Pipelines</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 bg-cyber-blue rounded-full"></div>
                                <span class="text-sm font-manrope text-text-light dark:text-text-dark">Server
                                    Management</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <span
                                class="inline-block px-3 py-1 bg-purple-500/10 text-purple-500 rounded-full text-xs font-semibold">
                                DevOps
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section
        class="py-20 bg-gradient-to-r from-cyber-light to-white dark:from-cyber-dark dark:to-gray-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-10 left-10 w-20 h-20 border-2 border-cyber-cyan rotate-45 animate-spin-slow">
                </div>
                <div class="absolute top-32 right-20 w-16 h-16 bg-cyber-pink/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-20 left-1/3 w-12 h-12 bg-cyber-blue/20 transform rotate-12"></div>
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2
                    class="font-nico text-4xl md:text-6xl font-black uppercase text-cyber-blue dark:text-cyber-cyan mb-6">
                    My Process
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-cyber-cyan to-cyber-pink mx-auto mb-6"></div>
                <p class="font-manrope text-lg text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                    A proven methodology that transforms ideas into powerful digital solutions
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 relative">
                <!-- Connection Lines -->
                <div
                    class="hidden md:block absolute top-16 left-1/3 right-1/3 h-0.5 bg-gradient-to-r from-cyber-cyan to-cyber-pink">
                </div>

                <!-- Step 1: Discovery -->
                <div class="relative group">
                    <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                        hover:shadow-2xl border border-gray-200 dark:border-gray-700
                        hover:border-cyber-cyan dark:hover:border-cyber-cyan
                        transition-all duration-500 hover:-translate-y-2">

                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-br from-cyber-cyan to-cyber-blue rounded-full 
                                flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300
                                shadow-lg group-hover:shadow-cyber-cyan/50">
                                <span class="font-nico text-2xl font-black text-white">1</span>
                            </div>
                        </div>

                        <h3 class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4">
                            Discovery
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Understanding your goals, target audience, and technical requirements through detailed
                            consultation.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">Requirements
                                    Analysis</span>
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">Project Planning</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Design & Build -->
                <div class="relative group">
                    <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                        hover:shadow-2xl border border-gray-200 dark:border-gray-700
                        hover:border-cyber-cyan dark:hover:border-cyber-cyan
                        transition-all duration-500 hover:-translate-y-2">

                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-br from-cyber-pink to-cyber-coral rounded-full 
                                flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300
                                shadow-lg group-hover:shadow-cyber-pink/50">
                                <span class="font-nico text-2xl font-black text-white">2</span>
                            </div>
                        </div>

                        <h3 class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4">
                            Design & Build
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Creating wireframes, designs, and developing your solution with precision and attention to
                            detail.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">UI/UX Design</span>
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">Development</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Launch & Scale -->
                <div class="relative group">
                    <div class="text-center p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                        hover:shadow-2xl border border-gray-200 dark:border-gray-700
                        hover:border-cyber-cyan dark:hover:border-cyber-cyan
                        transition-all duration-500 hover:-translate-y-2">

                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-cyber-cyan rounded-full 
                                flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300
                                shadow-lg group-hover:shadow-green-500/50">
                                <span class="font-nico text-2xl font-black text-white">3</span>
                            </div>
                        </div>

                        <h3 class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-4">
                            Launch & Scale
                        </h3>

                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                            Deploying your solution and providing ongoing support to ensure optimal performance and
                            growth.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">Deployment</span>
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm">
                                <div class="w-2 h-2 bg-cyber-pink rounded-full"></div>
                                <span class="font-manrope text-text-light dark:text-text-dark">Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Toolkit Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white dark:from-gray-900 dark:to-cyber-dark">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2
                    class="font-nico text-4xl md:text-6xl font-black uppercase text-cyber-blue dark:text-cyber-cyan mb-6">
                    My Tech Toolkit
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-cyber-cyan to-cyber-pink mx-auto mb-6"></div>
                <p class="font-manrope text-lg text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                    Cutting-edge technologies and tools I use to build exceptional digital experiences
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 justify-items-center">
                <?php
                $tech_stack = [
                    ['name' => 'HTML', 'image' => 'html-5.008cf296.svg', 'category' => 'Frontend'],
                    ['name' => 'SCSS', 'image' => 'scss.98aab7f4.svg', 'category' => 'Styling'],
                    ['name' => 'Tailwind', 'image' => 'tailwind-css.41e68952.svg', 'category' => 'Framework'],
                    ['name' => 'JavaScript', 'image' => 'javascript.bf9de660.svg', 'category' => 'Programming'],
                    ['name' => 'TypeScript', 'image' => 'typescript-icon.svg', 'category' => 'Programming'],
                    ['name' => 'PHP', 'image' => 'php.a1592ac5.svg', 'category' => 'Backend'],
                    ['name' => 'MySQL', 'image' => 'mysql.c01bedfc.svg', 'category' => 'Database'],
                    ['name' => 'Github', 'image' => 'github.93f8e2ad.svg', 'category' => 'Version Control'],
                    ['name' => 'AWS', 'image' => 'aws.svg', 'category' => 'Cloud'],
                    ['name' => 'WordPress', 'image' => 'icons8-wordpress-94.png', 'category' => 'CMS'],
                ];
                
                foreach ($tech_stack as $index => $tech) {
                    $invert_class = $tech['name'] === 'Github' ? 'dark:filter-none filter invert' : '';
                    $delay = $index * 0.1;
                    
                    echo '<div class="group relative p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-lg 
                        hover:shadow-2xl border border-gray-200 dark:border-gray-700
                        hover:border-cyber-cyan dark:hover:border-cyber-cyan
                        transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan
                        transform opacity-0 animate-fade-in-up" style="animation-delay: ' . $delay . 's;">
                        
                        <div class="relative">
                            <img src="' . esc_url(get_template_directory_uri() . '/assets/img/' . $tech['image']) . '" 
                                class="w-16 h-16 object-contain mx-auto group-hover:scale-110 transition-transform duration-300 ' . esc_attr($invert_class) . '" 
                                alt="' . esc_attr($tech['name']) . '">
                        </div>
                        
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 
                            transition-all duration-300 pointer-events-none">
                            <div class="bg-cyber-dark dark:bg-white text-white dark:text-cyber-dark 
                                px-3 py-2 rounded-lg shadow-lg text-center min-w-max">
                                <div class="font-semibold text-sm">' . esc_html($tech['name']) . '</div>
                                <div class="text-xs opacity-75">' . esc_html($tech['category']) . '</div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section
        class="py-20 bg-gradient-to-r from-cyber-blue to-cyber-cyan dark:from-cyber-dark dark:to-gray-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute top-10 left-10 w-32 h-32 border-2 border-white rotate-45 animate-spin-slow"></div>
                <div class="absolute top-32 right-20 w-24 h-24 bg-white/20 rounded-full animate-pulse"></div>
                <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-white/10 transform rotate-12 animate-bounce"></div>
            </div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="font-nico text-4xl md:text-6xl font-black uppercase text-white mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="font-manrope text-xl text-white/90 max-w-3xl mx-auto mb-12 leading-relaxed">
                Let's transform your vision into a digital reality. Get in touch today and let's build something
                extraordinary together.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="<?php echo esc_url(site_url('/contact/')); ?>" class="group px-8 py-4 bg-white text-cyber-blue font-manrope font-bold rounded-full
                    hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-2xl
                    relative overflow-hidden">
                    <span class="relative z-10">Get Started Today</span>
                    <div
                        class="absolute inset-0 bg-gray-100 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    </div>
                </a>

                <a href="<?php echo esc_url(site_url('/projects/')); ?>" class="px-8 py-4 border-2 border-white text-white font-manrope font-bold rounded-full
                    hover:bg-white hover:text-cyber-blue transition-all duration-300">
                    View My Work
                </a>
            </div>
        </div>
    </section>

</main>

<!-- Custom CSS for animations -->
<style>
@keyframes spin-slow {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-spin-slow {
    animation: spin-slow 8s linear infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}
</style>

<?php
get_footer();
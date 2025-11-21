<?php
/*
Template Name: Academics Page
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl">
            </div>
            <div
                class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    <?php esc_html_e( 'Academic Excellence', 'gathathiini' ); ?></h1>
                <p class="text-xl text-gray-300 leading-relaxed">
                    <?php esc_html_e( 'Empowering students with knowledge, skills, and values for a successful future through rigorous academics and innovative teaching methods.', 'gathathiini' ); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Curriculum Overview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                        <?php esc_html_e( 'Our Curriculum', 'gathathiini' ); ?></h2>
                    <p class="text-xl text-slate-600">
                        <?php esc_html_e( 'Following the Kenyan 8-4-4 and CBC systems for comprehensive education', 'gathathiini' ); ?>
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 mb-6">
                            <?php esc_html_e( 'Comprehensive Subject Offering', 'gathathiini' ); ?></h3>
                        <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                            <?php esc_html_e( 'We offer a wide range of subjects designed to cater to diverse student interests and career aspirations. Our curriculum balances core subjects with electives, ensuring students receive a well-rounded education.', 'gathathiini' ); ?>
                        </p>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            <?php esc_html_e( 'Our experienced teachers use modern pedagogical approaches, combining traditional teaching methods with technology-enhanced learning to maximize student engagement and understanding.', 'gathathiini' ); ?>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-6 hover:shadow-xl transition-shadow">
                            <div class="text-4xl mb-3">📚</div>
                            <h4 class="font-bold text-slate-900 mb-2">
                                <?php esc_html_e( 'Core Subjects', 'gathathiini' ); ?></h4>
                            <p class="text-sm text-slate-600">
                                <?php esc_html_e( 'Mathematics, English, Kiswahili', 'gathathiini' ); ?></p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 hover:shadow-xl transition-shadow">
                            <div class="text-4xl mb-3">🔬</div>
                            <h4 class="font-bold text-slate-900 mb-2"><?php esc_html_e( 'Sciences', 'gathathiini' ); ?>
                            </h4>
                            <p class="text-sm text-slate-600">
                                <?php esc_html_e( 'Biology, Chemistry, Physics', 'gathathiini' ); ?></p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 hover:shadow-xl transition-shadow">
                            <div class="text-4xl mb-3">🌍</div>
                            <h4 class="font-bold text-slate-900 mb-2">
                                <?php esc_html_e( 'Humanities', 'gathathiini' ); ?></h4>
                            <p class="text-sm text-slate-600">
                                <?php esc_html_e( 'History, Geography, CRE', 'gathathiini' ); ?></p>
                        </div>
                        <div
                            class="bg-gradient-to-br from-orange-50 to-yellow-50 rounded-2xl p-6 hover:shadow-xl transition-shadow">
                            <div class="text-4xl mb-3">💼</div>
                            <h4 class="font-bold text-slate-900 mb-2"><?php esc_html_e( 'Business', 'gathathiini' ); ?>
                            </h4>
                            <p class="text-sm text-slate-600">
                                <?php esc_html_e( 'Business Studies, Commerce', 'gathathiini' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subject Categories -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-slate-900 mb-4">
                        <?php esc_html_e( 'Subject Categories', 'gathathiini' ); ?></h2>
                </div>

                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                    <?php esc_html_e( 'Mathematics', 'gathathiini' ); ?></h3>
                                <p class="text-slate-600 mb-4">
                                    <?php esc_html_e( 'Building strong analytical and problem-solving skills through comprehensive mathematics education.', 'gathathiini' ); ?>
                                </p>
                                <ul class="grid md:grid-cols-2 gap-2">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Pure Mathematics', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Applied Mathematics', 'gathathiini' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                    <?php esc_html_e( 'Sciences', 'gathathiini' ); ?></h3>
                                <p class="text-slate-600 mb-4">
                                    <?php esc_html_e( 'Hands-on laboratory work and theoretical knowledge in all three main sciences.', 'gathathiini' ); ?>
                                </p>
                                <ul class="grid md:grid-cols-3 gap-2">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Biology', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Chemistry', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Physics', 'gathathiini' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                    <?php esc_html_e( 'Languages', 'gathathiini' ); ?></h3>
                                <p class="text-slate-600 mb-4">
                                    <?php esc_html_e( 'Developing communication skills and cultural awareness through language studies.', 'gathathiini' ); ?>
                                </p>
                                <ul class="grid md:grid-cols-2 gap-2">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'English Language', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Kiswahili', 'gathathiini' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                    <?php esc_html_e( 'Humanities & Social Sciences', 'gathathiini' ); ?></h3>
                                <p class="text-slate-600 mb-4">
                                    <?php esc_html_e( 'Understanding society, culture, and human development through comprehensive study.', 'gathathiini' ); ?>
                                </p>
                                <ul class="grid md:grid-cols-3 gap-2">
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'History', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Geography', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-slate-700"><?php esc_html_e( 'CRE', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Business Studies', 'gathathiini' ); ?></span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span
                                            class="text-slate-700"><?php esc_html_e( 'Commerce', 'gathathiini' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-slate-900 mb-4">
                        <?php esc_html_e( 'Modern Learning Facilities', 'gathathiini' ); ?></h2>
                    <p class="text-xl text-slate-600">
                        <?php esc_html_e( 'State-of-the-art infrastructure supporting quality education', 'gathathiini' ); ?>
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 text-center hover:shadow-xl transition-shadow">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">
                            <?php esc_html_e( 'Science Laboratories', 'gathathiini' ); ?></h3>
                        <p class="text-slate-600">
                            <?php esc_html_e( 'Fully equipped labs for Biology, Chemistry, and Physics practical sessions.', 'gathathiini' ); ?>
                        </p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 text-center hover:shadow-xl transition-shadow">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">
                            <?php esc_html_e( 'Library', 'gathathiini' ); ?></h3>
                        <p class="text-slate-600">
                            <?php esc_html_e( 'Extensive collection of books, reference materials, and digital resources.', 'gathathiini' ); ?>
                        </p>
                    </div>

                    <div
                        class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 text-center hover:shadow-xl transition-shadow">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">
                            <?php esc_html_e( 'Computer Lab', 'gathathiini' ); ?></h3>
                        <p class="text-slate-600">
                            <?php esc_html_e( 'Modern computers and internet connectivity for digital learning.', 'gathathiini' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-white mb-6">
                    <?php esc_html_e( 'Ready to Excel Academically?', 'gathathiini' ); ?></h2>
                <p class="text-xl text-gray-300 mb-8">
                    <?php esc_html_e( 'Join us and experience world-class education that prepares you for success.', 'gathathiini' ); ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>"
                        class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
                        <?php esc_html_e( 'Apply Now', 'gathathiini' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                        class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all border border-white/20">
                        <?php esc_html_e( 'Learn More', 'gathathiini' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
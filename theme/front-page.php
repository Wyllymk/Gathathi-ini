<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays the front page by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gathathiini
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="main">

	<!-- Hero Section -->
	<section
		class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900">
		<div class="absolute inset-0 opacity-20">
			<div
				class="absolute top-20 left-20 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl animate-blob">
			</div>
			<div
				class="absolute top-40 right-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000">
			</div>
			<div
				class="absolute bottom-20 left-1/2 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000">
			</div>
		</div>

		<div class="container mx-auto px-4 relative z-10 pt-20">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
					<div x-show="show" x-transition:enter="transition ease-out duration-1000"
						x-transition:enter-start="opacity-0 -translate-y-10"
						x-transition:enter-end="opacity-100 translate-y-0">
						<h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
							<?php
							printf(
								esc_html__( 'Transforming Boys Into %1$sMen of Purpose%2$s', 'gathathiini' ),
								'<span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">',
								'</span>'
							);
							?>
						</h1>
						<p class="text-xl text-gray-300 mb-8 leading-relaxed">
							<?php esc_html_e( 'Building tomorrow\'s leaders through academic excellence, character development, and holistic education at Gathathi-ini Boys High School.', 'gathathiini' ); ?>
						</p>
						<div class="flex flex-col sm:flex-row gap-4">
							<a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>"
								class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all text-center">
								<?php esc_html_e( 'Apply Now', 'gathathiini' ); ?>
							</a>
							<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
								class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all text-center border border-white/20">
								<?php esc_html_e( 'Learn More', 'gathathiini' ); ?>
							</a>
						</div>
					</div>
				</div>

				<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)" class="relative">
					<div x-show="show" x-transition:enter="transition ease-out duration-1000 delay-300"
						x-transition:enter-start="opacity-0 translate-x-10"
						x-transition:enter-end="opacity-100 translate-x-0">
						<div class="relative">
							<div
								class="absolute -inset-4 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl blur-2xl opacity-30">
							</div>
							<div
								class="relative bg-slate-800/50 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
								<div class="grid grid-cols-2 gap-6">
									<div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl p-6 text-white">
										<div class="text-4xl font-bold mb-2">440+</div>
										<div class="text-sm opacity-90">
											<?php esc_html_e( 'Students Enrolled', 'gathathiini' ); ?></div>
									</div>
									<div
										class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-6 text-white">
										<div class="text-4xl font-bold mb-2">20+</div>
										<div class="text-sm opacity-90">
											<?php esc_html_e( 'Qualified Teachers', 'gathathiini' ); ?></div>
									</div>
									<div
										class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-6 text-white">
										<div class="text-4xl font-bold mb-2">10+</div>
										<div class="text-sm opacity-90">
											<?php esc_html_e( 'Sports Activities', 'gathathiini' ); ?></div>
									</div>
									<div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-6 text-white">
										<div class="text-4xl font-bold mb-2">6</div>
										<div class="text-sm opacity-90">
											<?php esc_html_e( 'Core Pillars', 'gathathiini' ); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
			<svg class="w-8 h-8 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
				</path>
			</svg>
		</div>
	</section>

	<!-- Vision & Mission Section -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="text-center mb-16">
				<h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
					<?php esc_html_e( 'Our Vision & Mission', 'gathathiini' ); ?></h2>
				<div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-600 mx-auto"></div>
			</div>

			<div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto mb-12">
				<div
					class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 hover:shadow-2xl transition-shadow">
					<div
						class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
							</path>
						</svg>
					</div>
					<h3 class="text-2xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Our Vision', 'gathathiini' ); ?></h3>
					<p class="text-slate-600 leading-relaxed text-lg">
						<?php esc_html_e( 'To become the school of choice in molding individuals to become responsible members of society.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-2xl transition-shadow">
					<div
						class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M13 10V3L4 14h7v7l9-11h-7z"></path>
						</svg>
					</div>
					<h3 class="text-2xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Our Mission', 'gathathiini' ); ?></h3>
					<p class="text-slate-600 leading-relaxed text-lg">
						<?php esc_html_e( 'We receive boys and transform them into men who have conquered both academically and socially. We focus on developing talents and life skills.', 'gathathiini' ); ?>
					</p>
				</div>
			</div>

			<div class="text-center">
				<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
					class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
					<?php esc_html_e( 'Learn More About Us', 'gathathiini' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Six Pillars Preview -->
	<section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800">
		<div class="container mx-auto px-4">
			<div class="text-center mb-16">
				<h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
					<?php esc_html_e( 'Our Six Pillars', 'gathathiini' ); ?></h2>
				<p class="text-gray-300 text-lg max-w-2xl mx-auto">
					<?php esc_html_e( 'The foundation of excellence at Gathathi-ini Boys High School', 'gathathiini' ); ?>
				</p>
			</div>

			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto mb-12">
				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-cyan-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3">
						<?php esc_html_e( 'Academic Excellence', 'gathathiini' ); ?></h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Fostering a culture of academic excellence through mentorship, enrichment programs, and recognition.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-blue-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3">
						<?php esc_html_e( 'Sports & Talent', 'gathathiini' ); ?></h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Creating a supportive environment where students explore and excel in sports and discover their unique talents.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-purple-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Creative Arts', 'gathathiini' ); ?>
					</h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Staging theatrical productions and participating in national drama and music festivals to nurture creative expression.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-green-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3">
						<?php esc_html_e( 'Digital Literacy', 'gathathiini' ); ?></h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Equipping students with essential digital skills to use, understand, and critically evaluate technology effectively.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-yellow-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3">
						<?php esc_html_e( 'Social Responsibility', 'gathathiini' ); ?></h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Championing environmental education, community service, and health wellness through various awareness campaigns.', 'gathathiini' ); ?>
					</p>
				</div>

				<div
					class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-red-500/50 transition-all hover:-translate-y-2">
					<div
						class="w-16 h-16 bg-gradient-to-br from-red-500 to-rose-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
						<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
							</path>
						</svg>
					</div>
					<h3 class="text-xl font-bold text-white mb-3">
						<?php esc_html_e( 'Holistic Development', 'gathathiini' ); ?></h3>
					<p class="text-gray-300 leading-relaxed">
						<?php esc_html_e( 'Focused on the complete transformation of the boy child, guiding them away from societal ills and distractions.', 'gathathiini' ); ?>
					</p>
				</div>
			</div>

			<div class="text-center">
				<a href="<?php echo esc_url( home_url( '/pillars' ) ); ?>"
					class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
					<?php esc_html_e( 'Explore All Pillars', 'gathathiini' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Stats Section -->
	<section class="py-20 bg-gradient-to-r from-cyan-500 to-blue-600">
		<div class="container mx-auto px-4">
			<div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
				<div class="text-center">
					<div class="text-5xl md:text-6xl font-bold text-white mb-2">440+</div>
					<div class="text-white/90 font-medium"><?php esc_html_e( 'Students', 'gathathiini' ); ?></div>
				</div>
				<div class="text-center">
					<div class="text-5xl md:text-6xl font-bold text-white mb-2">20+</div>
					<div class="text-white/90 font-medium"><?php esc_html_e( 'Teachers', 'gathathiini' ); ?></div>
				</div>
				<div class="text-center">
					<div class="text-5xl md:text-6xl font-bold text-white mb-2">10+</div>
					<div class="text-white/90 font-medium"><?php esc_html_e( 'Sports', 'gathathiini' ); ?></div>
				</div>
				<div class="text-center">
					<div class="text-5xl md:text-6xl font-bold text-white mb-2">6</div>
					<div class="text-white/90 font-medium"><?php esc_html_e( 'Core Pillars', 'gathathiini' ); ?></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Academics Preview -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div>
						<h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Excellence in Education', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'Our comprehensive curriculum combines academic rigor with practical skills development. We offer a wide range of subjects and programs designed to prepare students for university and beyond.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3 mb-8">
							<li class="flex items-center space-x-3">
								<div
									class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
									<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
										viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
								<span
									class="text-slate-700"><?php esc_html_e( '8-4-4 CBC Curriculum', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-center space-x-3">
								<div
									class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
									<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
										viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
								<span
									class="text-slate-700"><?php esc_html_e( 'Experienced Faculty Members', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-center space-x-3">
								<div
									class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
									<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
										viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
								<span
									class="text-slate-700"><?php esc_html_e( 'Modern Learning Facilities', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-center space-x-3">
								<div
									class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
									<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
										viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
											d="M5 13l4 4L19 7"></path>
									</svg>
								</div>
								<span
									class="text-slate-700"><?php esc_html_e( 'Individual Student Mentorship', 'gathathiini' ); ?></span>
							</li>
						</ul>
						<a href="<?php echo esc_url( home_url( '/academics' ) ); ?>"
							class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-2xl hover:scale-105 transition-all">
							<?php esc_html_e( 'View Academic Programs', 'gathathiini' ); ?>
						</a>
					</div>
					<div class="relative">
						<div
							class="absolute -inset-4 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl blur-2xl opacity-20">
						</div>
						<div class="relative bg-slate-800 rounded-3xl p-8 text-white">
							<h3 class="text-2xl font-bold mb-6"><?php esc_html_e( 'Our Subjects', 'gathathiini' ); ?>
							</h3>
							<div class="grid grid-cols-2 gap-4">
								<div class="bg-slate-700/50 rounded-xl p-4">
									<p class="font-semibold"><?php esc_html_e( 'Sciences', 'gathathiini' ); ?></p>
									<p class="text-sm text-gray-300">
										<?php esc_html_e( 'Biology, Chemistry, Physics', 'gathathiini' ); ?></p>
								</div>
								<div class="bg-slate-700/50 rounded-xl p-4">
									<p class="font-semibold"><?php esc_html_e( 'Mathematics', 'gathathiini' ); ?></p>
									<p class="text-sm text-gray-300">
										<?php esc_html_e( 'Pure & Applied Math', 'gathathiini' ); ?></p>
								</div>
								<div class="bg-slate-700/50 rounded-xl p-4">
									<p class="font-semibold"><?php esc_html_e( 'Languages', 'gathathiini' ); ?></p>
									<p class="text-sm text-gray-300">
										<?php esc_html_e( 'English, Kiswahili', 'gathathiini' ); ?></p>
								</div>
								<div class="bg-slate-700/50 rounded-xl p-4">
									<p class="font-semibold"><?php esc_html_e( 'Humanities', 'gathathiini' ); ?></p>
									<p class="text-sm text-gray-300">
										<?php esc_html_e( 'History, Geography, CRE', 'gathathiini' ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800">
		<div class="container mx-auto px-4">
			<div class="max-w-4xl mx-auto text-center">
				<h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
					<?php esc_html_e( 'Ready to Join Us?', 'gathathiini' ); ?></h2>
				<p class="text-xl text-gray-300 mb-8 leading-relaxed">
					<?php esc_html_e( 'Start your journey to becoming a man of purpose and integrity. Apply today for admission to Gathathi-ini Boys High School.', 'gathathiini' ); ?>
				</p>
				<div class="flex flex-col sm:flex-row gap-4 justify-center">
					<a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>"
						class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
						<?php esc_html_e( 'Apply Now', 'gathathiini' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
						class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all border border-white/20">
						<?php esc_html_e( 'Contact Us', 'gathathiini' ); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
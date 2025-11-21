<?php
/*
Template Name: Pillars Page
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>

	<!-- Hero Section -->
	<section class="relative pt-32 pb-20 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 overflow-hidden">
		<div class="absolute inset-0 opacity-10">
			<div
				class="absolute top-20 left-20 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl">
			</div>
			<div
				class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl">
			</div>
		</div>

		<div class="container mx-auto px-4 relative z-10">
			<div class="max-w-4xl mx-auto text-center">
				<h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
					<?php esc_html_e( 'Our Six Pillars', 'gathathiini' ); ?></h1>
				<p class="text-xl text-gray-300 leading-relaxed">
					<?php esc_html_e( 'The foundation of holistic development at Gathathi-ini Boys High School. Six pillars that guide our mission to transform boys into men of excellence.', 'gathathiini' ); ?>
				</p>
			</div>
		</div>
	</section>

	<!-- Academic Excellence -->
	<section id="academic" class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div>
						<div
							class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Academic Excellence', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We foster a culture of academic excellence through comprehensive mentorship programs, enrichment activities, and recognition of outstanding achievements.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Personalized student mentorship programs', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Academic enrichment and support sessions', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Recognition of outstanding academic performance', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Modern teaching methodologies and resources', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
					<div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-3xl p-12 text-center">
						<div class="text-6xl font-bold text-cyan-600 mb-4">
							<?php esc_html_e( 'Strong', 'gathathiini' ); ?></div>
						<p class="text-xl text-slate-700 font-semibold">
							<?php esc_html_e( 'University Entry Rate', 'gathathiini' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sports & Talent -->
	<section id="sports" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div class="order-2 lg:order-1 bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-12">
						<div class="grid grid-cols-2 gap-6">
							<div class="text-center">
								<div class="text-5xl font-bold text-blue-600 mb-2">10+</div>
								<p class="text-slate-700 font-semibold">
									<?php esc_html_e( 'Sports Activities', 'gathathiini' ); ?></p>
							</div>
							<div class="text-center">
								<div class="text-5xl font-bold text-purple-600 mb-2">20+</div>
								<p class="text-slate-700 font-semibold">
									<?php esc_html_e( 'Trophies Won', 'gathathiini' ); ?></p>
							</div>
						</div>
					</div>
					<div class="order-1 lg:order-2">
						<div
							class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Sports & Talent Development', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We create a supportive environment where students can explore and excel in various sports disciplines while discovering and nurturing their unique talents.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Football, volleyball, basketball, athletics', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Professional coaching and training facilities', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Inter-school competitions and tournaments', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Talent identification and development programs', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Creative Arts -->
	<section id="arts" class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div>
						<div
							class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Creative Arts', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We nurture creative expression through drama, music, and performing arts. Our students participate in national festivals, staging theatrical productions that showcase their artistic talents.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Drama club and theatrical productions', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Music festivals and competitions', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'National drama and music festivals participation', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-purple-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Visual arts and creative workshops', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
					<div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-12 text-center">
						<div class="text-6xl mb-6">🎭</div>
						<h3 class="text-2xl font-bold text-slate-900 mb-4">
							<?php esc_html_e( 'Award-Winning Performances', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Our drama and music teams consistently excel at regional and national festivals.', 'gathathiini' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Digital Literacy -->
	<section id="digital" class="py-20 bg-gradient-to-br from-slate-50 to-green-50">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div
						class="order-2 lg:order-1 bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-12 text-center">
						<div class="text-6xl mb-6">💻</div>
						<h3 class="text-2xl font-bold text-slate-900 mb-4">
							<?php esc_html_e( 'Modern Technology', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Equipped with modern computer labs and internet connectivity for 21st-century learning.', 'gathathiini' ); ?>
						</p>
					</div>
					<div class="order-1 lg:order-2">
						<div
							class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Digital Literacy', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We equip students with essential digital skills, enabling them to use, understand, and critically evaluate technology effectively in the modern world.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Computer programming and coding skills', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Internet safety and digital citizenship', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Digital content creation and multimedia', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Technology-enhanced learning platforms', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Social Responsibility -->
	<section id="social" class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div>
						<div
							class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Social Responsibility', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We champion environmental education, community service, and health wellness through various awareness campaigns and practical initiatives.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-yellow-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Environmental conservation programs', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-yellow-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Community service and outreach', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-yellow-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Health and wellness campaigns', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-yellow-500 flex-shrink-0 mt-1" fill="none"
									stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Leadership and civic education', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
					<div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-3xl p-12 text-center">
						<div class="text-6xl mb-6">🌍</div>
						<h3 class="text-2xl font-bold text-slate-900 mb-4">
							<?php esc_html_e( 'Building Better Communities', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Our students actively engage in initiatives that make positive impacts in society.', 'gathathiini' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Holistic Development -->
	<section id="holistic" class="py-20 bg-gradient-to-br from-slate-50 to-red-50">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="grid lg:grid-cols-2 gap-12 items-center">
					<div
						class="order-2 lg:order-1 bg-gradient-to-br from-red-50 to-rose-50 rounded-3xl p-12 text-center">
						<div class="text-6xl mb-6">🎯</div>
						<h3 class="text-2xl font-bold text-slate-900 mb-4">
							<?php esc_html_e( 'Complete Transformation', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Guiding students toward becoming responsible, well-rounded individuals prepared for life.', 'gathathiini' ); ?>
						</p>
					</div>
					<div class="order-1 lg:order-2">
						<div
							class="w-20 h-20 bg-gradient-to-br from-red-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6">
							<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
								</path>
							</svg>
						</div>
						<h2 class="text-4xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Holistic Development', 'gathathiini' ); ?></h2>
						<p class="text-lg text-slate-600 mb-6 leading-relaxed">
							<?php esc_html_e( 'We focus on the complete transformation of the boy child, guiding them away from societal ills and distractions toward becoming men of purpose and integrity.', 'gathathiini' ); ?>
						</p>
						<ul class="space-y-3">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Character development and moral education', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Life skills training and mentorship', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Emotional intelligence and resilience', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Social skills and peer relationships', 'gathathiini' ); ?></span>
							</li>
						</ul>
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
					<?php esc_html_e( 'Experience Holistic Education', 'gathathiini' ); ?></h2>
				<p class="text-xl text-gray-300 mb-8">
					<?php esc_html_e( 'Join us in this transformative journey guided by our six pillars of excellence.', 'gathathiini' ); ?>
				</p>
				<div class="flex flex-col sm:flex-row gap-4 justify-center">
					<a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>"
						class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
						<?php esc_html_e( 'Apply for Admission', 'gathathiini' ); ?>
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
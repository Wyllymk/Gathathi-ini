<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gathathiini
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id="primary">
	<main id="main">

		<section
			class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
			<div class="absolute inset-0 opacity-10">
				<div
					class="absolute top-20 left-20 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob">
				</div>
				<div
					class="absolute top-40 right-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000">
				</div>
				<div
					class="absolute bottom-20 left-1/2 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000">
				</div>
			</div>

			<div class="container mx-auto px-4 relative z-10 py-20">
				<div class="max-w-4xl mx-auto text-center">
					<div class="mb-12" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
						<div x-show="show" x-transition:enter="transition ease-out duration-1000"
							x-transition:enter-start="opacity-0 scale-90"
							x-transition:enter-end="opacity-100 scale-100">
							<div class="relative inline-block">
								<div
									class="absolute -inset-4 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-full blur-2xl opacity-30">
								</div>
								<h1
									class="relative text-9xl md:text-[12rem] font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600">
									404</h1>
							</div>
						</div>
					</div>

					<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
						<div x-show="show" x-transition:enter="transition ease-out duration-1000 delay-300"
							x-transition:enter-start="opacity-0 translate-y-10"
							x-transition:enter-end="opacity-100 translate-y-0">
							<h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Page Not Found</h2>
							<p class="text-xl text-gray-300 mb-8 leading-relaxed max-w-2xl mx-auto">The page you are
								looking for might have been removed, had its name changed, or is temporarily
								unavailable.</p>

							<div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
									class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">Go
									Home</a>
								<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
									class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all border border-white/20">Contact
									Us</a>
							</div>

							<div
								class="bg-slate-800/50 backdrop-blur-sm rounded-3xl p-8 border border-white/10 max-w-2xl mx-auto">
								<h3 class="text-2xl font-bold text-white mb-6">Quick Links</h3>
								<div class="grid md:grid-cols-2 gap-4">
									<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
										class="bg-slate-700/50 hover:bg-slate-700 rounded-xl p-4 transition-colors text-left group">
										<div class="flex items-center space-x-3">
											<div
												class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
												<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
													viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round"
														stroke-width="2"
														d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
													</path>
												</svg>
											</div>
											<div>
												<p class="text-white font-semibold">About Us</p>
												<p class="text-gray-400 text-sm">Learn about our school</p>
											</div>
										</div>
									</a>

									<a href="<?php echo esc_url( home_url( '/academics' ) ); ?>"
										class="bg-slate-700/50 hover:bg-slate-700 rounded-xl p-4 transition-colors text-left group">
										<div class="flex items-center space-x-3">
											<div
												class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
												<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
													viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round"
														stroke-width="2"
														d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
													</path>
												</svg>
											</div>
											<div>
												<p class="text-white font-semibold">Academics</p>
												<p class="text-gray-400 text-sm">Explore our programs</p>
											</div>
										</div>
									</a>

									<a href="<?php echo esc_url( home_url( '/pillars' ) ); ?>"
										class="bg-slate-700/50 hover:bg-slate-700 rounded-xl p-4 transition-colors text-left group">
										<div class="flex items-center space-x-3">
											<div
												class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
												<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
													viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round"
														stroke-width="2"
														d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
													</path>
												</svg>
											</div>
											<div>
												<p class="text-white font-semibold">Our Pillars</p>
												<p class="text-gray-400 text-sm">Six pillars of excellence</p>
											</div>
										</div>
									</a>

									<a href="<?php echo esc_url( home_url( '/admissions' ) ); ?>"
										class="bg-slate-700/50 hover:bg-slate-700 rounded-xl p-4 transition-colors text-left group">
										<div class="flex items-center space-x-3">
											<div
												class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
												<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
													viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round"
														stroke-width="2"
														d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
													</path>
												</svg>
											</div>
											<div>
												<p class="text-white font-semibold">Admissions</p>
												<p class="text-gray-400 text-sm">Apply to join us</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
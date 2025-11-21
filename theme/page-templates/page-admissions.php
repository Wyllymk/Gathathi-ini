<?php
/*
Template Name: Admissions Page
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>

	<!-- Hero Section -->
	<section class="relative pt-32 pb-20 bg-gradient-to-br from-slate-900 via-green-900 to-slate-900 overflow-hidden">
		<div class="absolute inset-0 opacity-10">
			<div class="absolute top-20 left-20 w-96 h-96 bg-green-500 rounded-full mix-blend-multiply filter blur-3xl">
			</div>
			<div
				class="absolute bottom-20 right-20 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl">
			</div>
		</div>

		<div class="container mx-auto px-4 relative z-10">
			<div class="max-w-4xl mx-auto text-center">
				<h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
					<?php esc_html_e( 'Admissions', 'gathathiini' ); ?></h1>
				<p class="text-xl text-gray-300 leading-relaxed">
					<?php esc_html_e( 'Begin your journey to excellence. Join Gathathi-ini Boys High School and transform into a man of purpose and integrity.', 'gathathiini' ); ?>
				</p>
			</div>
		</div>
	</section>

	<!-- Admission Process -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Admission Process', 'gathathiini' ); ?></h2>
					<p class="text-xl text-slate-600">
						<?php esc_html_e( 'Simple steps to join our school', 'gathathiini' ); ?></p>
				</div>

				<div class="grid md:grid-cols-4 gap-8">
					<div class="text-center">
						<div
							class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
							<span class="text-3xl font-bold text-white">1</span>
						</div>
						<h3 class="text-xl font-bold text-slate-900 mb-3">
							<?php esc_html_e( 'Submit Application', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Complete and submit the admission application form with all required documents.', 'gathathiini' ); ?>
						</p>
					</div>

					<div class="text-center">
						<div
							class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
							<span class="text-3xl font-bold text-white">2</span>
						</div>
						<h3 class="text-xl font-bold text-slate-900 mb-3">
							<?php esc_html_e( 'Review Process', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Our admissions team reviews your application and academic records.', 'gathathiini' ); ?>
						</p>
					</div>

					<div class="text-center">
						<div
							class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6">
							<span class="text-3xl font-bold text-white">3</span>
						</div>
						<h3 class="text-xl font-bold text-slate-900 mb-3">
							<?php esc_html_e( 'Interview', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Selected candidates attend an interview with the admissions committee.', 'gathathiini' ); ?>
						</p>
					</div>

					<div class="text-center">
						<div
							class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center mx-auto mb-6">
							<span class="text-3xl font-bold text-white">4</span>
						</div>
						<h3 class="text-xl font-bold text-slate-900 mb-3">
							<?php esc_html_e( 'Acceptance', 'gathathiini' ); ?></h3>
						<p class="text-slate-600">
							<?php esc_html_e( 'Receive admission letter and complete enrollment procedures.', 'gathathiini' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Requirements -->
	<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-4xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Admission Requirements', 'gathathiini' ); ?></h2>
					<p class="text-xl text-slate-600">
						<?php esc_html_e( 'Documents and qualifications needed', 'gathathiini' ); ?></p>
				</div>

				<div class="grid md:grid-cols-2 gap-8">
					<div class="bg-white rounded-2xl p-8 shadow-lg">
						<h3 class="text-2xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Form One Admission', 'gathathiini' ); ?></h3>
						<ul class="space-y-4">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'KCPE Certificate with minimum marks of 250', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Birth certificate or notification', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Completed application form', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Recent passport size photographs', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Medical examination report', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Primary school leaving certificate', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>

					<div class="bg-white rounded-2xl p-8 shadow-lg">
						<h3 class="text-2xl font-bold text-slate-900 mb-6">
							<?php esc_html_e( 'Transfer Students', 'gathathiini' ); ?></h3>
						<ul class="space-y-4">
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Transfer letter from previous school', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Academic transcripts and reports', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Recommendation letter from previous principal', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Birth certificate', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Completed application form', 'gathathiini' ); ?></span>
							</li>
							<li class="flex items-start space-x-3">
								<svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor"
									viewBox="0 0 24 24" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 13l4 4L19 7"></path>
								</svg>
								<span
									class="text-slate-700"><?php esc_html_e( 'Recent passport size photographs', 'gathathiini' ); ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Fees Structure -->
	<section class="py-20 bg-white">
		<div class="container mx-auto px-4">
			<div class="max-w-6xl mx-auto">
				<div class="text-center mb-16">
					<h2 class="text-4xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Fees Structure', 'gathathiini' ); ?></h2>
					<p class="text-xl text-slate-600">
						<?php esc_html_e( 'Affordable quality education', 'gathathiini' ); ?></p>
				</div>

				<div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 md:p-12">
					<div class="grid md:grid-cols-2 gap-8">
						<div>
							<h3 class="text-2xl font-bold text-slate-900 mb-6">
								<?php esc_html_e( 'Annual Fees Breakdown', 'gathathiini' ); ?></h3>
							<div class="space-y-4">
								<div class="flex justify-between items-center py-3 border-b border-slate-200">
									<span
										class="text-slate-700"><?php esc_html_e( 'Tuition Fees', 'gathathiini' ); ?></span>
									<span
										class="font-bold text-slate-900"><?php esc_html_e( 'Contact School', 'gathathiini' ); ?></span>
								</div>
								<div class="flex justify-between items-center py-3 border-b border-slate-200">
									<span
										class="text-slate-700"><?php esc_html_e( 'Boarding Fees', 'gathathiini' ); ?></span>
									<span
										class="font-bold text-slate-900"><?php esc_html_e( 'Contact School', 'gathathiini' ); ?></span>
								</div>
								<div class="flex justify-between items-center py-3 border-b border-slate-200">
									<span
										class="text-slate-700"><?php esc_html_e( 'Activity Fees', 'gathathiini' ); ?></span>
									<span
										class="font-bold text-slate-900"><?php esc_html_e( 'Contact School', 'gathathiini' ); ?></span>
								</div>
								<div class="flex justify-between items-center py-3 border-b border-slate-200">
									<span
										class="text-slate-700"><?php esc_html_e( 'Exam Fees', 'gathathiini' ); ?></span>
									<span
										class="font-bold text-slate-900"><?php esc_html_e( 'Contact School', 'gathathiini' ); ?></span>
								</div>
							</div>
						</div>

						<div>
							<h3 class="text-2xl font-bold text-slate-900 mb-6">
								<?php esc_html_e( 'Payment Information', 'gathathiini' ); ?></h3>
							<ul class="space-y-4">
								<li class="flex items-start space-x-3">
									<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none"
										stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
									<span
										class="text-slate-700"><?php esc_html_e( 'Fees can be paid in three installments', 'gathathiini' ); ?></span>
								</li>
								<li class="flex items-start space-x-3">
									<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none"
										stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
									<span
										class="text-slate-700"><?php esc_html_e( 'Bank transfer and M-Pesa accepted', 'gathathiini' ); ?></span>
								</li>
								<li class="flex items-start space-x-3">
									<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none"
										stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
									<span
										class="text-slate-700"><?php esc_html_e( 'Bursary programs available for needy students', 'gathathiini' ); ?></span>
								</li>
								<li class="flex items-start space-x-3">
									<svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="none"
										stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M5 13l4 4L19 7"></path>
									</svg>
									<span
										class="text-slate-700"><?php esc_html_e( 'Contact admissions office for detailed fee structure', 'gathathiini' ); ?></span>
								</li>
							</ul>

							<div class="mt-8 bg-white rounded-xl p-6">
								<p class="text-sm text-slate-600 mb-4">
									<?php esc_html_e( 'For detailed fee structure and payment plans, please contact:', 'gathathiini' ); ?>
								</p>
								<div class="space-y-2">
									<p class="font-semibold text-slate-900">+254 725 407 132</p>
									<p class="text-slate-600">gathathiini122@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Important Dates -->
	<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
		<div class="container mx-auto px-4">
			<div class="max-w-4xl mx-auto">
				<div class="text-center mb-12">
					<h2 class="text-4xl font-bold text-slate-900 mb-4">
						<?php esc_html_e( 'Important Dates', 'gathathiini' ); ?></h2>
					<p class="text-xl text-slate-600"><?php esc_html_e( 'Mark your calendar', 'gathathiini' ); ?></p>
				</div>

				<div class="bg-white rounded-3xl p-8 shadow-xl">
					<div class="space-y-6">
						<div class="flex items-start space-x-4 pb-6 border-b border-slate-200">
							<div
								class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
								<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
									aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
									</path>
								</svg>
							</div>
							<div class="flex-1">
								<h3 class="text-xl font-bold text-slate-900 mb-2">
									<?php esc_html_e( 'Application Deadline', 'gathathiini' ); ?></h3>
								<p class="text-slate-600">
									<?php esc_html_e( 'Contact admissions office for current deadlines', 'gathathiini' ); ?>
								</p>
							</div>
						</div>

						<div class="flex items-start space-x-4 pb-6 border-b border-slate-200">
							<div
								class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
								<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
									aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
									</path>
								</svg>
							</div>
							<div class="flex-1">
								<h3 class="text-xl font-bold text-slate-900 mb-2">
									<?php esc_html_e( 'Interview Dates', 'gathathiini' ); ?></h3>
								<p class="text-slate-600">
									<?php esc_html_e( 'Scheduled after application review', 'gathathiini' ); ?></p>
							</div>
						</div>

						<div class="flex items-start space-x-4">
							<div
								class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
								<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
									aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
								</svg>
							</div>
							<div class="flex-1">
								<h3 class="text-xl font-bold text-slate-900 mb-2">
									<?php esc_html_e( 'Reporting Date', 'gathathiini' ); ?></h3>
								<p class="text-slate-600">
									<?php esc_html_e( 'As per the Ministry of Education calendar', 'gathathiini' ); ?>
								</p>
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
				<h2 class="text-4xl font-bold text-white mb-6"><?php esc_html_e( 'Ready to Apply?', 'gathathiini' ); ?>
				</h2>
				<p class="text-xl text-gray-300 mb-8">
					<?php esc_html_e( 'Take the first step towards excellence. Contact us today to begin your admission process.', 'gathathiini' ); ?>
				</p>
				<div class="flex flex-col sm:flex-row gap-4 justify-center">
					<a href="tel:+254725407132"
						class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all">
						<?php esc_html_e( 'Call: +254 725 407 132', 'gathathiini' ); ?>
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
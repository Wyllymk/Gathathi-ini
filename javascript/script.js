/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

/**
 * Gathathiini Boys High School — main.js
 * Scroll animations · Nav behaviour · Subject bars · Contact form
 */
(function () {
	'use strict';

	/* ── SCROLL REVEAL ─────────────────────────────────────── */
	const io = new IntersectionObserver(
		(entries) => {
			entries.forEach((e) => {
				if (e.isIntersecting) {
					e.target.classList.add('is-in');
					io.unobserve(e.target);
				}
			});
		},
		{ threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
	);

	document.querySelectorAll('.reveal').forEach((el) => io.observe(el));

	/* ── SUBJECT / PERFORMANCE BARS ────────────────────────── */
	const barObs = new IntersectionObserver(
		(entries) => {
			entries.forEach((e) => {
				if (e.isIntersecting) {
					e.target
						.querySelectorAll('[data-bar-width]')
						.forEach((bar) => {
							setTimeout(() => {
								bar.style.width = bar.dataset.barWidth + '%';
							}, 300);
						});
					barObs.unobserve(e.target);
				}
			});
		},
		{ threshold: 0.3 }
	);

	document
		.querySelectorAll('[data-bars-section]')
		.forEach((s) => barObs.observe(s));

	/* ── HERO PARALLAX (subtle) ─────────────────────────────── */
	const heroContent = document.querySelector('[data-hero-content]');
	if (heroContent) {
		let ticking = false;
		window.addEventListener(
			'scroll',
			() => {
				if (!ticking) {
					requestAnimationFrame(() => {
						const s = window.scrollY;
						if (s < window.innerHeight) {
							heroContent.style.transform = `translateY(${s * 0.15}px)`;
						}
						ticking = false;
					});
					ticking = true;
				}
			},
			{ passive: true }
		);
	}

	/* ── CONTACT / ENQUIRY FORM (AJAX) ─────────────────────── */
	function initForm(formId, successId) {
		const form = document.getElementById(formId);
		if (!form) return;

		form.addEventListener('submit', async (e) => {
			e.preventDefault();
			const btn = form.querySelector('[data-submit-btn]');
			const successEl = document.getElementById(successId);
			const errorEl = document.getElementById(formId + '-error');

			if (btn) {
				btn.disabled = true;
				btn.textContent = 'Sending…';
			}

			const data = new FormData(form);
			data.append('action', 'gathathiini_contact');
			data.append(
				'nonce',
				typeof GBHSData !== 'undefined' ? GBHSData.nonce : ''
			);

			try {
				const res = await fetch(
					typeof GBHSData !== 'undefined'
						? GBHSData.ajaxUrl
						: '/wp-admin/admin-ajax.php',
					{ method: 'POST', body: data }
				);
				const json = await res.json();

				if (json.success) {
					if (successEl) {
						successEl.classList.remove('hidden');
					}
					form.reset();
					if (btn) {
						btn.textContent = 'Sent ✓';
					}
				} else {
					const msg =
						json.data && json.data.message
							? json.data.message
							: 'An error occurred. Please call us directly.';
					if (errorEl) {
						errorEl.textContent = msg;
						errorEl.classList.remove('hidden');
					}
					if (btn) {
						btn.disabled = false;
						btn.textContent = 'Try Again';
					}
				}
			} catch (err) {
				const msg = 'Network error. Please call 0703 639 230 directly.';
				if (errorEl) {
					errorEl.textContent = msg;
					errorEl.classList.remove('hidden');
				}
				if (btn) {
					btn.disabled = false;
					btn.textContent = 'Try Again';
				}
			}
		});
	}

	initForm('contact-form', 'contact-success');
	initForm('enquiry-form', 'enquiry-success');
	initForm('admission-form', 'admission-success');

	/* ── SMOOTH ANCHOR SCROLL ──────────────────────────────── */
	document.querySelectorAll('a[href^="#"]').forEach((a) => {
		a.addEventListener('click', (e) => {
			const target = document.querySelector(a.getAttribute('href'));
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	});
})();

// ✅ Start Alpine once
document.addEventListener('DOMContentLoaded', () => {
	Alpine.start();
});

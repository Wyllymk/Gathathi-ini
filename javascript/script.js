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

// SCROLL TO TOP
document.addEventListener('alpine:init', () => {
	Alpine.data('scrollToTop', () => ({
		visible: false,
		lastScrollY: window.scrollY,

		init() {
			window.addEventListener('scroll', this.onScroll.bind(this));
		},

		onScroll() {
			const currentScrollY = window.scrollY;

			if (currentScrollY > 200 && currentScrollY < this.lastScrollY) {
				this.visible = true;
			} else {
				this.visible = false;
			}

			this.lastScrollY = currentScrollY;
		},

		scrollTop() {
			const start = window.pageYOffset;
			const duration = 1000; // 1 second
			const startTime = performance.now();

			const easeInOutQuad = (t, b, c, d) => {
				t /= d / 2;
				if (t < 1) return (c / 2) * t * t + b;
				t--;
				return (-c / 2) * (t * (t - 2) - 1) + b;
			};

			const animateScroll = (currentTime) => {
				const timeElapsed = currentTime - startTime;
				const run = easeInOutQuad(timeElapsed, start, -start, duration);
				window.scrollTo(0, run);

				if (timeElapsed < duration) {
					requestAnimationFrame(animateScroll);
				} else {
					window.scrollTo(0, 0); // Ensure it ends exactly at top
				}
			};

			requestAnimationFrame(animateScroll);
		},
	}));
});

// ✅ Start Alpine once
document.addEventListener('DOMContentLoaded', () => {
	Alpine.start();
});

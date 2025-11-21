document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('contact-form');
	const submitBtn = document.getElementById('submit-btn');
	const btnText = document.getElementById('btn-text');
	const btnIcon = document.getElementById('btn-icon');

	if (!form) return;

	form.addEventListener('submit', async function (e) {
		e.preventDefault();

		// Check if contact_ajax object exists
		if (typeof contact_ajax === 'undefined') {
			console.error('Contact AJAX object not loaded');
			showMessage(
				'Form configuration error. Please refresh the page.',
				'error'
			);
			return;
		}

		if (!validateForm()) return;

		setLoading(true);

		try {
			const formData = new FormData(form);
			formData.append('action', 'submit_contact_form');
			formData.append('nonce', contact_ajax.nonce);

			const response = await fetch(contact_ajax.ajax_url, {
				method: 'POST',
				body: formData,
			});

			const result = await response.json();

			if (result.success) {
				showMessage(result.data.message, 'success');
				form.reset();
			} else {
				showMessage(result.data.message, 'error');
			}
		} catch (err) {
			console.error('Contact form error:', err);
			showMessage(
				'Network error. Please check your connection and try again.',
				'error'
			);
		} finally {
			setLoading(false);
		}
	});

	function validateForm() {
		const name = form.querySelector('#name').value.trim();
		const email = form.querySelector('#email').value.trim();
		const message = form.querySelector('#message').value.trim();

		clearErrors();

		let valid = true;

		if (!name) {
			showFieldError('name', 'Name is required');
			valid = false;
		}

		if (!email) {
			showFieldError('email', 'Email is required');
			valid = false;
		} else if (!isValidEmail(email)) {
			showFieldError('email', 'Please enter a valid email address');
			valid = false;
		}

		if (!message) {
			showFieldError('message', 'Message is required');
			valid = false;
		}

		return valid;
	}

	function showFieldError(fieldId, message) {
		const field = form.querySelector(`#${fieldId}`);
		const fieldContainer = field.closest('.relative');

		if (!fieldContainer) return;

		field.classList.add('border-red-500', 'focus:border-red-500');

		const errorDiv = document.createElement('div');
		errorDiv.className = 'text-red-500 text-sm mt-1';
		errorDiv.textContent = message;
		errorDiv.dataset.error = fieldId;

		fieldContainer.appendChild(errorDiv);
	}

	function clearErrors() {
		// Remove error messages
		form.querySelectorAll('[data-error]').forEach((el) => el.remove());

		// Remove error styles
		form.querySelectorAll('input, textarea, select').forEach((field) => {
			field.classList.remove('border-red-500', 'focus:border-red-500');
		});
	}

	function isValidEmail(email) {
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return emailRegex.test(email);
	}

	function showMessage(message, type) {
		// Remove existing messages
		document.querySelectorAll('.form-message').forEach((el) => el.remove());

		const messageDiv = document.createElement('div');
		messageDiv.className = `form-message p-4 mb-6 rounded-lg border ${
			type === 'success'
				? 'bg-green-50 border-green-200 text-green-800'
				: 'bg-red-50 border-red-200 text-red-800'
		}`;

		messageDiv.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 ${type === 'success' ? 'text-green-600' : 'text-red-600'}" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="${
						type === 'success'
							? 'M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z'
							: 'M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z'
					}" clip-rule="evenodd" />
                </svg>
                <span>${message}</span>
            </div>
        `;

		form.prepend(messageDiv);

		// Auto-remove success messages after 5 seconds
		if (type === 'success') {
			setTimeout(() => {
				messageDiv.remove();
			}, 5000);
		}
	}

	function setLoading(loading) {
		if (loading) {
			submitBtn.disabled = true;
			submitBtn.classList.add('opacity-70', 'cursor-not-allowed');
			btnText.textContent =
				contact_ajax.messages?.sending || 'Sending...';

			// Show loading spinner
			btnIcon.innerHTML = `
                <svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 8v4m8-8h-4M8 12H4"></path>
                </svg>
            `;
		} else {
			submitBtn.disabled = false;
			submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
			btnText.textContent = 'Send Message';

			// Restore original icon
			btnIcon.innerHTML = `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
            `;
		}
	}
});

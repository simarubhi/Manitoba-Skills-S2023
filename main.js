(function () {
	// Form
	const form = document.querySelector('.form');
	// Inital input
	const input = document.querySelector('.input-container.ticket-select');
	// Success message
	const message = document.querySelector(
		'.input-container.message-container'
	);

	// Checks for form being sucessfully submitted
	form.addEventListener('submit', () => {
		// hide input
		input.style.display = 'none';
		// Show success message
		message.style.display = 'block';
	});
})();

(function () {
	const menuBtn = document.querySelector('.menu-btn');
	const navLinks = document.querySelector('.nav-social-conatiner');

	menuBtn.addEventListener('click');
})();

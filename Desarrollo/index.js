// navbar toggle menu
const navToggle = document.querySelectorAll('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

navToggle.forEach((button) => {
	button.addEventListener('click', () => {
		navMenu.classList.toggle('nav-menu_visible');

		if (navMenu.classList.contains('nav-menu_visible')) {
			button.setAttribute('aria-label', 'Cerrar menú');
		} else {
			button.setAttribute('aria-label', 'Abrir menú');
		}
	});
});

// button add to cart
document.addEventListener('DOMContentLoaded', function (event) {
	const cartButtons = document.querySelectorAll('.cart-button');

	cartButtons.forEach((button) => {
		button.addEventListener('click', cartClick);
	});

	function cartClick() {
		let button = this;
		button.classList.add('clicked');
	}
});

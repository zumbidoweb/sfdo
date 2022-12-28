import './bootstrap';

import Alpine from 'alpinejs';


window.Alpine = Alpine;
Alpine.start();


import simpleParallax from 'simple-parallax-js';
document.addEventListener("DOMContentLoaded", function (event) { 
	var image = document.getElementsByClassName('parallax');
	if (image) {
		new simpleParallax(image, { 
			scale: 1.4,
			orientation: 'down'
		});
	}
});

import sal from 'sal.js'
sal();
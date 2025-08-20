// =====================
// sidebar
// =====================
const btnOpenSidebar = document.querySelector('.btn-bar');
const btnCloseSidebar = document.querySelector('.btn-close-sidebar');
const nav = document.querySelector('.nav');

function closeSidebar() {
	nav.classList.remove('show-sidebar');
}
function openSidebar() {
	nav.classList.add('show-sidebar');
}
btnOpenSidebar.addEventListener('click', () => {
	openSidebar();
});
btnCloseSidebar.addEventListener('click', () => {
	closeSidebar();
});

// =====================
// nav sticky
// =====================
const btnScrollTop = document.querySelector('.btn-scroll-top');
btnScrollTop.addEventListener('click', () => {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
});
window.addEventListener('scroll', () => {
	nav.classList.toggle('sticky', window.scrollY > 900);
	btnScrollTop.classList.toggle('show-btn', window.scrollY > 900);
});

// =====================
// nav lnik active
// =====================
const navLink = document.querySelectorAll('.nav__link');
const navMblLink = document.querySelectorAll('.mbl-nav__link');
function activeLink(el, id) {
	el.forEach((e) => {
		const target = e.href.split('#').slice(1).toString();
		e.classList.remove('active');
		if (id === target) {
			e.classList.add('active');
		}
	});
}
window.addEventListener('hashchange', () => {
	const id = window.location.hash.slice(1);
	activeLink(navLink, id);
	activeLink(navMblLink, id);
});
window.addEventListener('load', () => {
	const id = window.location.hash.slice(1);
	activeLink(navLink, id);
	activeLink(navMblLink, id);
});

// =====================
// swiper carousel
// =====================
// shots swiper 1
const swiper1 = new Swiper('.shots-swiper-1', {
	// Optional parameters
	loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 1000,
	},
	slidesPerView: 4,
	spaceBetween: 10,
	breakpoints: {
		40: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		540: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	},
});

// shots swiper 2
const swiper2 = new Swiper('.shots-swiper-2', {
	// Optional parameters
	loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 1000,
	},
	slidesPerView: 4,
	spaceBetween: 30,
	breakpoints: {
		40: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		540: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	},
});

// testimonial-swiper
const testimonial_swiper = new Swiper('.testimonial-swiper', {
	// Optional parameters
	loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	slidesPerView: 3,
	spaceBetween: 30,
	breakpoints: {
		40: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	},
});

// =====================
// portfolio filtering
// =====================
$(function () {
	$('.portfolio__mix').mixItUp();
});

// =====================
// skills bar
// =====================
(function ($) {
	'use strict';

	var $bars = $('.bar'),
		methods = {
			init: function () {
				// Bind events
				methods.bindEvents();
			},
			bindEvents: function () {
				// Loop through each of the bars...
				$bars.each(function () {
					var $bar = $(this),
						$pct = $bar.find('.pct'),
						data = $bar.data('bar');
					setTimeout(function () {
						$bar.css('background-color', data.color).animate(
							{
								// width: $pct.html(),
								width: $pct[0].innerText + '%',
							},
							data.speed || 3000,
							function () {
								$pct.css({
									color: data.color,
									opacity: 1,
								});
							}
						);
					}, data.delay || 0);
				});
			},
		};

	// Initialize on page load
	methods.init();
})(jQuery);

// =====================
// about and skills
// =====================
const aboutWrapper = document.querySelector('.about__modal');
const btnAbout = document.querySelector('.btn-about');
const btnSkills = document.querySelector('.btn-skills');

btnAbout.addEventListener('click', () => {
	aboutWrapper.classList.remove('show-skills');
	aboutWrapper.classList.add('show-about');
});
btnSkills.addEventListener('click', () => {
	aboutWrapper.classList.remove('show-about');
	aboutWrapper.classList.add('show-skills');
});

// =====================
// Venobox
// =====================
new VenoBox({
	selector: '.venobox',
});

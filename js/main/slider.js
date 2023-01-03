$(document).ready(() => {
	$(".slider").addClass("owl-carousel").owlCarousel({
		loop: true,
		dots: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
			},
			1260: {
				items: 1,
			},
		},
	});

	$(".slider__imoveis").addClass("owl-carousel").owlCarousel({
		loop: false,
		dots: true,
		nav: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
				margin: -90,
			},
			1260: {
				items: 3,
				margin: 16
			},
		},
	});
})
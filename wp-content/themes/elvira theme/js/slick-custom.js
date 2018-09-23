$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
	slidesToShow: 6,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: false,
	infinity: false,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 1086,
			settings:{
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				infinity: false
			}
		},
		{
			breakpoint: 992,
			settings:{
				slidesToShow: 4,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				infinity: false
			}
		},
		{
			breakpoint: 768,
			settings:{
				slidesToShow: 5,
				slidesToScroll: 1,
				dots: false,
				focusOnSelect: true,
				infinity: false
			}
		}
	]
});

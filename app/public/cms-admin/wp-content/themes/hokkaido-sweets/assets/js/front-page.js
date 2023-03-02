const circle = document.querySelector(".js-pickup-slider__circle");
var pickupDuration = 3000;
var $widowTop = $(window).scrollTop();

var pickupSlider = new Swiper(".js-fp-pickup-slider", {
	centeredSlides: true,
	loop: true,
	slidesPerView: 4,
	loopAdditionalSlides: 0,
	preventInteractionOnTransition: true,
	initialSlide: 1,
	spaceBetween: 20,
	/*
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	*/

	breakpoints: {
		768: {
			slidesPerView: 4,
		},
	},
});

frontPageHeader();

function frontPageHeader() {
	const $query = document.querySelector(".js-front-page-header");
	if (!$query) return;

	const $header = $(".js-front-page-header");
	const $mv = $(".fp-mv");
	const $pickup = $(".fp-pickup");
	var $headerHeight = $header.outerHeight();
	var $mvHeight = $mv.outerHeight();
	var $pickupHeight = $pickup.outerHeight();

	$(window).scroll(function () {
		var $widowTop = $(window).scrollTop();
		// console.log($widowTop, $mvHeight + $pickupHeight, $pickupHeight);
		if ($widowTop > $mvHeight + $pickupHeight + $headerHeight) {
			$header.addClass("is-show");
		} else {
			$header.removeClass("is-show");
		}
	});
}

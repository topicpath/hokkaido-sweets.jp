const circle = document.querySelector(".js-pickup-slider__circle");
var pickupDuration = 3000;
var $widowTop = $(window).scrollTop();
var $widowWidth = $(window).width();
var movieRatio = 16 / 9;

$(function () {
	var pickupSlider = new Swiper(".js-fp-pickup-slider", {
		centeredSlides: true,
		loop: true,
		slidesPerView: 1.8,
		loopAdditionalSlides: 0,
		preventInteractionOnTransition: true,
		spaceBetween: 15,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},

		breakpoints: {
			768: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
		},
	});

	frontPageHeader();
	modalSlider();
	if ($widowWidth >= 768) {
		movieAdjust();
	}
});

$(window).on("load resize", function () {
	var $widowWidth = $(window).width();
	if ($widowWidth >= 768) {
		movieAdjust();
	}
});

function frontPageHeader() {
	const $query = document.querySelector(".js-front-page-header");
	if (!$query) return;

	const $header = $(".js-front-page-header");
	$header.addClass("is-wait");
	const $mv = $(".fp-mv");
	const $pickup = $(".fp-pickup");
	var $headerHeight = $header.outerHeight();
	var $mvHeight = $mv.outerHeight();

	$(window).scroll(function () {
		var $pickupHeight = $pickup.outerHeight();
		var $widowTop = $(window).scrollTop();
		// console.log($widowTop, $mvHeight + $pickupHeight, $mvHeight, $pickupHeight);
		if ($widowTop > $mvHeight + $pickupHeight + $headerHeight) {
			$header.addClass("is-show");
		} else {
			$header.removeClass("is-show");
		}
	});
}

function modalSlider() {
	const $query = document.querySelector(".js-modal-slider");
	if (!$query) return;

	var $modals = document.querySelectorAll(".js-modal");

	$modals.forEach(($modal) => {
		var $slider = $modal.querySelector(".js-modal-slider");
		var $sliderThumb = $modal.querySelector(".js-modal-slider-thumb");

		const $sliderThumbnail = new Swiper($sliderThumb, {
			slidesPerView: 4.5,
			spaceBetween: 10,
			observer: true,
			observeParents: true,

			breakpoints: {
				768: {
					slidesPerView: 4,
					spaceBetween: 16,
				},
			},
		});

		var option = {
			slidesPerView: 1,
			preventInteractionOnTransition: true,
			spaceBetween: 20,
			observer: true,
			observeParents: true,

			navigation: {
				prevEl: ".js-modal-slider__prev",
				nextEl: ".js-modal-slider__next",
				clickable: true,
			},

			thumbs: {
				swiper: $sliderThumbnail,
			},
		};

		var $slides = $slider.querySelectorAll(".swiper-slide");
		var $sliderParent = $slider.parentNode;
		var $prev = $sliderParent.querySelector(".js-modal-slider__prev");
		var $next = $sliderParent.querySelector(".js-modal-slider__next");

		if ($slides.length > 1) {
			new Swiper($slider, option);
		} else {
			$prev.style.display = "none";
			$next.style.display = "none";
			$sliderThumb.style.display = "none";
		}
	});
}

function movieAdjust() {
	var adjustWidth = $(window).width();
	var adjustHeight = $(window).height();
	if (adjustHeight > adjustWidth / movieRatio) {
		adjustWidth = adjustHeight * movieRatio;
	}
	$(".js-mv").css({ width: adjustWidth, height: adjustWidth / movieRatio });
}

const circle = document.querySelector(".js-pickup-slider__circle");
var pickupDuration = 3000;
var $widowTop = $(window).scrollTop();

var pickupSlider = new Swiper(".js-fp-pickup-slider", {
	centeredSlides: true,
	loop: true,
	slidesPerView: 1.3,
	loopAdditionalSlides: 0,
	preventInteractionOnTransition: true,
	spaceBetween: 15,
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

modalSlider();

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

			breakpoints: {
				768: {
					slidesPerView: 4,
					spaceBetween: 16,
				},
			},
		});

		var option = {
			slidesPerView: 1,
			loop: true,
			loopAdditionalSlides: 0,
			preventInteractionOnTransition: true,
			spaceBetween: 20,

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

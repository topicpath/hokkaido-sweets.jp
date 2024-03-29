var $windowTop = $(window).scrollTop();
var $clickEventType = window.ontouchstart !== null ? "click" : "touchstart";
var $body = $("body");
var $break = "(max-width:767px)";
var $pc = "(min-width:768px)";

$(function () {
	pageTop();
	headerNav();
	modal();
	smoothScroll();
	checkbox();

	$(window).on("load scroll", function () {
		inView();
	});
});

function pageTop() {
	if ($windowTop > 0) {
		$(".page-top").addClass("is-show");
	} else {
		$(".page-top").removeClass("is-show");
	}

	$(".page-top").on($clickEventType, function () {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			300
		);
	});

	$(window).scroll(function () {
		var $windowTop = $(window).scrollTop();
		if ($windowTop > 0) {
			$(".page-top").addClass("is-show");
		} else {
			$(".page-top").removeClass("is-show");
		}
	});
}

function headerNav() {
	const $b = $(".js-header-nav__btn");
	const $c = $(".js-header-nav");

	$b.on($clickEventType, function () {
		$b.toggleClass("is-active");
		$c.toggleClass("is-show");
		$body.toggleClass("js-header-nav-show");
		return false;
	});

	$(".js-smooth-link").on($clickEventType, function () {
		if ($c.hasClass("is-show")) {
			$b.removeClass("is-active");
			$c.removeClass("is-show");
			$body.removeClass("js-header-nav-show");
			var speed = 300;
			var href = $(this).attr("href");
			var target = $(href == "#" || href == "" ? "html" : href);
			var header = $(".header").outerHeight();
			var position = target.offset().top - header;
			$("html, body").animate({ scrollTop: position }, speed, "swing");
			return false;
		}
	});
}

function inView() {
	const $query = document.querySelector(".js-inview");
	if (!$query) return;

	var $target = $(".js-inview");

	$target.each(function () {
		var $targetPos = $(this).offset().top;
		var $windowTop = $(window).scrollTop();
		var $windowHeight = $(window).height();

		if ($windowTop >= $targetPos - $windowHeight / 2 - 100) {
			$(this).addClass("is-show");
		}
	});

	$(".header-nav__link").on($clickEventType, function () {
		$target.each(function () {
			$(this).addClass("is-show");
		});
	});

	/*
	$(".js-inview").on("inview", function () {
		$(this).addClass("is-show");
	});
	*/
}

function modal() {
	const $query = document.querySelector(".js-modal-btn");
	if (!$query) return;

	var $btn = $(".js-modal-btn");
	var $btnClose = $(".js-modal-close");
	const $modal = $(".js-modal");
	const $modalBg = $(".js-modal-bg");

	$btn.on($clickEventType, function () {
		var $modalId = $(this).attr("data-modal-id");
		// console.log($modalId);

		$("#" + $modalId).addClass("is-show");
		$("body").css("overflow-y", "hidden");
		return false;
	});

	$btnClose.on($clickEventType, function () {
		$modal.removeClass("is-show");
		$("body").css("overflow-y", "auto");
		return false;
	});

	$modalBg.on($clickEventType, function () {
		$modal.removeClass("is-show");
		$("body").css("overflow-y", "auto");
		return false;
	});
}

function smoothScroll() {
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 300,
		header: ".header",
	});
}

function checkbox() {
	const $fieldset = $(".page-contact__radio");
	if ($fieldset.length === 0) return;

	const $input = $(".page-contact__radio input");
	const $label = $fieldset.find("label");

	$input.change(function () {
		var $result = $(this).prop("checked");
		if ($result) {
			$label.addClass("is-check");
		} else {
			$label.removeClass("is-check");
		}
	});
}

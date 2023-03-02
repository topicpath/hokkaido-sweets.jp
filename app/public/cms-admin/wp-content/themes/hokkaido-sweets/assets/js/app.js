var $windowTop = $(window).scrollTop();
var $clickEventType = window.ontouchstart !== null ? "click" : "touchstart";
const $body = $("body");
const $break = "(max-width:767px)";
const $pc = "(min-width:768px)";

$(function () {
	pageTop();
	// headerNav();

	$(window).scroll(function () {
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
	const $h = $(".js-header");
	const $b = $(".js-header-nav__btn");
	const $c = $(".js-header-nav__body");
	const $g = $(".js-header-nav__group");
	const $e = $(".js-header-nav__logo-element");

	$b.on($clickEventType, function () {
		$h.toggleClass("is-active");
		$b.toggleClass("is-active");
		$c.toggleClass("is-show");
		$body.toggleClass("js-header-nav-show");
		$g.toggleClass("is-show");
		$e.toggleClass("is-active");
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

		console.log($windowTop, $targetPos);

		if ($windowTop >= $targetPos - $windowHeight / 2) {
			$(this).addClass("is-show");
		}
	});

	/*
	$(".js-inview").on("inview", function () {
		$(this).addClass("is-show");
	});
	*/
}

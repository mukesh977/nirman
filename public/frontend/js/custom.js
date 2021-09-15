// FIXED HEADER
$(window).scroll(function () {
	if ($(window).scrollTop() >= 300) {
		$(".header-main").addClass("fixed-header");
	} else {
		$(".header-main").removeClass("fixed-header");
	}
});

/*global $ */
$(document).ready(function () {
	"use strict";

	$(".menu > ul > li:has( > ul)").addClass("menu-dropdown-icon");
	//Checks if li has sub (ul) and adds class for toggle icon - just an UI

	$(".menu > ul > li > ul:not(:has(ul))").addClass("normal-sub");
	//Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

	$(".menu > ul").before('<a href="#" class="menu-mobile">Category</a>');

	//Adds menu-mobile class (for mobile toggle menu) before the normal menu
	//Mobile menu is hidden if width is more then 959px, but normal menu is displayed
	//Normal menu is hidden if width is below 959px, and jquery adds mobile menu
	//Done this way so it can be used with wordpress without any trouble

	$(".menu > ul > li").hover(function (e) {
		if ($(window).width() > 991) {
			$(this).children("ul").stop(true, false).fadeToggle(150);
			e.preventDefault();
		}
	});
	//If width is more than 943px dropdowns are displayed on hover

	$(".menu > ul > li").click(function () {
		if ($(window).width() <= 991) {
			$(this).children("ul").fadeToggle(150);
		}
	});
	//If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

	$(".menu-mobile").click(function (e) {
		$(".menu > ul").toggleClass("show-on-mobile");
		e.preventDefault();
	});
	//when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)
});

// MAIN BANNER SLIDER
$(document).ready(function () {
	$(".main-banner-slider").slick({
		autoplay: true,
		autoplaySpeed: 4000,
		dots: false,
		infinite: true,
		speed: 1000,
		arrows: true,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
	});
});

// CATEGORY SLIDER
$(document).ready(function () {
	$(".main-category-slider").slick({
		autoplay: false,
		autoplaySpeed: 5000,
		speed: 900,
		slidesToShow: 5,
		arrows: true,
		dots: false,
		slidesToScroll: 1,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});
});

// NEW ARRIVAL SLIDER
$(document).ready(function () {
	$(".main-products-slider").slick({
		autoplay: false,
		autoplaySpeed: 5000,
		speed: 900,
		slidesToShow: 4,
		arrows: true,
		dots: false,
		rows: 2,
		slidesToScroll: 1,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});
});

// PARTNER SLIDER
$(document).ready(function () {
	$(".main-partners-slider").slick({
		autoplay: false,
		autoplaySpeed: 5000,
		speed: 900,
		slidesToShow: 5,
		arrows: false,
		dots: false,
		slidesToScroll: 1,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: false,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});
});

// COUNTER
$(".number").each(function () {
	var size = $(this).text().split(".")[1]
		? $(this).text().split(".")[1].length
		: 0;
	$(this)
		.prop("Counter", 0)
		.animate(
			{
				Counter: $(this).text(),
			},
			{
				delay: 1000,
				duration: 8000,
				step: function (func) {
					$(this).text(parseFloat(func).toFixed(size));
				},
			}
		);
});

// TESTIMONIALS SLIDER
$(document).ready(function () {
	$(".inner-testimonials-slider").slick({
		autoplay: false,
		autoplaySpeed: 5000,
		speed: 900,
		slidesToShow: 2,
		arrows: true,
		dots: false,
		slidesToScroll: 1,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});
});

// TO THE TOP BUTTON
$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1500) {
			$("#myTopbtn").fadeIn();
		} else {
			$("#myTopbtn").fadeOut();
		}
	});
	$("#myTopbtn").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
});

// SLIDER IMAGE FOR PRODUCT DISPLAY
$(document).ready(function () {
	$(".ips-image-larger").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		swipeToSlide: false,
		touchMove: false,
		autoplay: true,
		asNavFor: ".ips-image-thumbnails",
	});
});
$(document).ready(function () {
	$(".ips-image-thumbnails").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		asNavFor: ".ips-image-larger",
		centerMode: false,
		focusOnSelect: true,
	});
});

// FOR MAGNIFIER
!(function ($) {
	"use strict"; // jshint ;_;

	/* MAGNIFY PUBLIC CLASS DEFINITION
	 * =============================== */

	var Magnify = function (element, options) {
		this.init("magnify", element, options);
	};

	Magnify.prototype = {
		constructor: Magnify,

		init: function (type, element, options) {
			var event = "mousemove",
				eventOut = "mouseleave";

			this.type = type;
			this.$element = $(element);
			this.options = this.getOptions(options);
			this.nativeWidth = 0;
			this.nativeHeight = 0;

			this.$element.wrap('<div class="magnify" >');
			this.$element.parent(".magnify").append('<div class="magnify-large" >');
			this.$element
				.siblings(".magnify-large")
				.css(
					"background",
					"url('" + this.$element.attr("src") + "') no-repeat"
				);

			this.$element
				.parent(".magnify")
				.on(event + "." + this.type, $.proxy(this.check, this));
			this.$element
				.parent(".magnify")
				.on(eventOut + "." + this.type, $.proxy(this.check, this));
		},

		getOptions: function (options) {
			options = $.extend(
				{},
				$.fn[this.type].defaults,
				options,
				this.$element.data()
			);

			if (options.delay && typeof options.delay == "number") {
				options.delay = {
					show: options.delay,
					hide: options.delay,
				};
			}

			return options;
		},

		check: function (e) {
			var container = $(e.currentTarget);
			var self = container.children("img");
			var mag = container.children(".magnify-large");

			// Get the native dimensions of the image
			if (!this.nativeWidth && !this.nativeHeight) {
				var image = new Image();
				image.src = self.attr("src");

				this.nativeWidth = image.width;
				this.nativeHeight = image.height;
			} else {
				var magnifyOffset = container.offset();
				var mx = e.pageX - magnifyOffset.left;
				var my = e.pageY - magnifyOffset.top;

				if (
					mx < container.width() &&
					my < container.height() &&
					mx > 0 &&
					my > 0
				) {
					mag.fadeIn(100);
				} else {
					mag.fadeOut(100);
				}

				if (mag.is(":visible")) {
					var rx =
						Math.round(
							(mx / container.width()) * this.nativeWidth - mag.width() / 2
						) * -1;
					var ry =
						Math.round(
							(my / container.height()) * this.nativeHeight - mag.height() / 2
						) * -1;
					var bgp = rx + "px " + ry + "px";

					var px = mx - mag.width() / 2;
					var py = my - mag.height() / 2;

					mag.css({ left: px, top: py, backgroundPosition: bgp });
				}
			}
		},
	};

	/* MAGNIFY PLUGIN DEFINITION
	 * ========================= */

	$.fn.magnify = function (option) {
		return this.each(function () {
			var $this = $(this),
				data = $this.data("magnify"),
				options = typeof option == "object" && option;
			if (!data) $this.data("tooltip", (data = new Magnify(this, options)));
			if (typeof option == "string") data[option]();
		});
	};

	$.fn.magnify.Constructor = Magnify;

	$.fn.magnify.defaults = {
		delay: 0,
	};

	/* MAGNIFY DATA-API
	 * ================ */

	$(window).on("load", function () {
		$('[data-toggle="magnify"]').each(function () {
			var $mag = $(this);
			$mag.magnify();
		});
	});
})(window.jQuery);

// RELATED SLIDER
$(document).ready(function () {
	$(".ipsr-slider").slick({
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 900,
		slidesToShow: 4,
		arrows: true,
		dots: false,
		slidesToScroll: 1,
		prevArrow: "<i class='fas fa-angle-left'></i>",
		nextArrow: "<i class='fas fa-angle-right'></i>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: false,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});
});



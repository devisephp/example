$(function() {


	function addNavigationListener() {
		$(window).scroll(function (event) {
			var _scroll = $(window).scrollTop();

			if(_scroll > 440) {
				$('#navigation').css({
					top: 0,
					opacity: 1
				});
			} else {
				$('#navigation').css({
					top: -150,
					opacity: 0
				});
			}
		});
	}

	function addLocalScroll() {
		$.localScroll({
			duration: 1500

		});
	}

	function init() {
		addLocalScroll();
		addNavigationListener();
	}

	init();

});
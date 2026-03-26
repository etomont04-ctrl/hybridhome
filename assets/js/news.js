$(function () {
	const $btn = $('.conditions_btn');
	const $conditions = $('.conditions');
	const $list = $('.conditions_list');
	const mq = window.matchMedia('(max-width: 1050px)');

	const resetPcState = function () {
		$btn.removeClass('is-active');
		$conditions.removeClass('is-active');
		$list.stop(true, true).removeAttr('style');
	};

	$btn.on('click', function () {
		if (!mq.matches) return;

		$(this).toggleClass('is-active');
		$conditions.toggleClass('is-active');
		$list.stop(true, true).slideToggle();
	});

	const handleResize = function () {
		if (!mq.matches) {
			resetPcState();
		}
	};

	handleResize();
	$(window).on('resize', handleResize);
});
$(function () {
	const $category = $('.news_wrap .categorys');
	const $container = $('.news_wrap .base-wrap');

	if (!$category.length || !$container.length) return;

	const mq = window.matchMedia('(max-width: 1050px)');
	const fixedTop = 80;
	const absoluteTop = -80;
	const fixedLeftOffset = window.innerWidth * -0.0333;
	const bottomOffset = 220;

	const resetMobile = function () {
		$category.removeClass('is-fixed is-bottom').removeAttr('style');
	};

	const updateCategoryFollow = function () {
		if (mq.matches) {
			resetMobile();
			return;
		}

		const containerTop = $container.offset().top;
		const containerLeft = $container.offset().left;
		const containerHeight = $container.outerHeight();
		const categoryHeight = $category.outerHeight();
		const categoryWidth = $category.outerWidth();
		const scrollTop = $(window).scrollTop();

		const startFix = containerTop + absoluteTop - fixedTop;
		const endFix = containerTop + containerHeight - categoryHeight - fixedTop - bottomOffset;

		$category.removeClass('is-fixed is-bottom');

		if (scrollTop < startFix) {
			$category.css({
				position: 'absolute',
				top: absoluteTop,
				bottom: 'auto',
				left: ''
			});
		} else if (scrollTop >= startFix && scrollTop < endFix) {
			$category.addClass('is-fixed').css({
				position: 'fixed',
				top: fixedTop,
				left: containerLeft + fixedLeftOffset,
				//left: '0',
				bottom: 'auto'
			});
		} else {
			$category.addClass('is-bottom').css({
				position: 'absolute',
				top: 'auto',
				bottom: bottomOffset,
				left: ''
			});
		}
	};

	updateCategoryFollow();
	$(window).on('scroll resize load', updateCategoryFollow);
});
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
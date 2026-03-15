
document.addEventListener('DOMContentLoaded', function () {
const sliders = document.querySelectorAll('.pickup-slider');

if (!sliders.length) return;
if (typeof Splide === 'undefined') return;

sliders.forEach(function (slider) {
	if (slider.dataset.splideInitialized === 'true') return;

	const splide = new Splide(slider, {
		type: 'loop',
		destroy: true,
		gap: '16px',
		pagination: false,
		arrows: false,
		autoWidth: false,
		perPage: 1,
		breakpoints: {
			1050: {
				destroy: false,
				fixedWidth: '70vw',
				gap: '30px',
				autoplay: true,
				interval: 3500,
				easing: 'cubic-bezier(.22,1,.36,1)',
				speed: 1300,
			},
		},
	});

	/* --------------------------------------------------------------------------
		次スライドに is-next-up を付与
	-------------------------------------------------------------------------- */
	const setNextUpByIndex = function (baseIndex) {
		const slidesComp = splide.Components && splide.Components.Slides;
		if (!slidesComp) return;

		slider.querySelectorAll('.splide__slide.is-next-up').forEach(function (el) {
			el.classList.remove('is-next-up');
		});

		const realLen = slidesComp.getLength ? slidesComp.getLength() : 0;
		if (!realLen) return;

		const nextIndex = (baseIndex + 1) % realLen;
		const nextSlide = slidesComp.getAt(nextIndex);

		if (nextSlide && nextSlide.slide) {
			nextSlide.slide.classList.add('is-next-up');
		}
	};

	/* --------------------------------------------------------------------------
		イベント
	-------------------------------------------------------------------------- */
	splide.on('mounted', function () {
		setNextUpByIndex(splide.index);
	});

	splide.on('move', function (newIndex) {
		setNextUpByIndex(newIndex);
	});

	splide.on('updated resized', function () {
		if (window.innerWidth <= 1050) {
			setNextUpByIndex(splide.index);
		} else {
			slider.querySelectorAll('.splide__slide.is-next-up').forEach(function (el) {
				el.classList.remove('is-next-up');
			});
		}
	});

	splide.mount();
	slider.dataset.splideInitialized = 'true';
});
});

$(function(){
	$('.conditions_btn').click(function(){
        $(this).toggleClass('is-active');
        $(".conditions").toggleClass('is-active');
		$(".conditions_list").stop().slideToggle();
	});

    $('.sort').click(function(){
        $(this).next("div").stop().slideToggle(300);
        $(this).toggleClass("active");
    });

});
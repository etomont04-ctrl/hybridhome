/* ==========================================================================
	Splide init (smooth next-up)
	- autoWidth前提（幅＆gapはCSS）
	- centerなし
	- autoplayあり
	- next-upはindex計算で安定付与
========================================================================== */
(() => {
	const init = () => {
		const roots = document.querySelectorAll('.js-picks-splide');
		if (!roots.length) return;
		if (typeof window.Splide === 'undefined') return;

		roots.forEach((root) => {
			if (!root) return;
			if (root.dataset.splideInitialized === 'true') return;
			root.dataset.splideInitialized = 'true';

			const options = {
				type: 'loop',
				autoWidth: true,
				gap: 0,
				trimSpace: false,

				arrows: false,
				pagination: false,
				drag: true,
				snap: true,

				autoplay: true,
				interval: 3500,
				pauseOnHover: true,
				pauseOnFocus: true,

				speed: 1300,
				easing: 'cubic-bezier(.22,1,.36,1)',
			};

			const splide = new Splide(root, options);

			const setNextUpByIndex = (baseIndex) => {
				const slidesComp = splide.Components?.Slides;
				if (!slidesComp) return;

				// 既存リセット（clone含む）
				root.querySelectorAll('.splide__slide.is-next-up').forEach((el) => {
					el.classList.remove('is-next-up');
				});

				// 次のindex（loopで末尾超えたら0へ）
				const len = slidesComp.getLength(true); // trueでclones含めた管理長を使える環境が多い
				let nextIndex = baseIndex + 1;

				// getLength(true)が環境で合わない時があるのでフォールバック
				const realLen = slidesComp.getLength ? slidesComp.getLength() : null;
				const limit = realLen || len || 0;

				if (limit) nextIndex = nextIndex % limit;

				const next = slidesComp.getAt(nextIndex);
				if (next && next.slide) next.slide.classList.add('is-next-up');
			};

			// 初回：現在indexから次を上げる
			splide.on('mounted', () => {
				setNextUpByIndex(splide.index);
			});

			// ★移動開始で付け替える（横移動と同時に縦も動く）
			splide.on('move', (newIndex) => {
				setNextUpByIndex(newIndex);
			});

			splide.on('updated resized', () => {
				setNextUpByIndex(splide.index);
			});

			splide.mount();
		});
	};

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init, { once: true });
	} else {
		init();
	}
})();
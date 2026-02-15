window.addEventListener('load', () => {
	'use strict';

	/* ==========================================================================
		ページロード時のクラス制御（.load / .loaded / .loaded02 / .active）
	========================================================================== */

	const KEY = 'has_seen_loader';
	const html = document.documentElement;
	const loadTargets = document.querySelectorAll('.load');

	// 初回判定（このタブ内）
	const isFirst = sessionStorage.getItem(KEY) !== '1';

	/* --------------------------------------------------------------------------
		kv-slider -> .active（初回だけ遅延、次回以降は短め）
	-------------------------------------------------------------------------- */
	const kvDelay = isFirst ? 2500 : 1000;

	setTimeout(() => {
		document.querySelectorAll('.kv-slider').forEach((el) => {
			el.classList.add('active');
		});
	}, kvDelay);

	/* --------------------------------------------------------------------------
		.load があるページだけローディング演出
	-------------------------------------------------------------------------- */
	if (loadTargets.length) {
		if (!isFirst) {
			// 2回目以降：.load は出さない
			loadTargets.forEach((el) => {
				el.style.display = 'none';
			});
			html.classList.remove('is-loading');
			document.body.classList.add('loaded');
		} else {
			// 初回：ロード演出
			html.classList.add('is-loading');

			// .load -> .loaded（即時）
			loadTargets.forEach((el) => {
				el.classList.add('loaded');
			});

			// body -> .loaded（3.2秒後） + is-loading解除 + 初回フラグ保存
			setTimeout(() => {
				document.body.classList.add('loaded');
				html.classList.remove('is-loading');

				sessionStorage.setItem(KEY, '1');

				// 完全に消す（必要なら）
				loadTargets.forEach((el) => {
					el.style.display = 'none';
				});
			}, 3200);

			// .load -> .loaded02（4秒後）
			setTimeout(() => {
				loadTargets.forEach((el) => {
					el.classList.add('loaded02');
				});
			}, 4000);
		}
	}

	/* ==========================================================================
		KV画像：基準振幅 baseAmp の設定 & リサイズで更新（任意）
	========================================================================== */
	let baseAmp = window.innerWidth < 800 ? 4 : 10;
	window.addEventListener('resize', () => {
		baseAmp = window.innerWidth < 800 ? 4 : 10;
	});

	/* ==========================================================================
		KV Swiper（.kv-slider に active が付与で開始）
	========================================================================== */
	const SELECTOR = '.kv-slider';
	const INIT_FLAG = 'swiperInited';
	const TRIGGER_CLASS = 'active';

	const hasAncestorWith = (el, cls) => {
		let n = el;
		while (n && n !== document) {
			if (n.classList && n.classList.contains(cls)) return true;
			n = n.parentNode;
		}
		return false;
	};

	const initFadeSwiper = (container) => {
		if (!container || container.dataset[INIT_FLAG] === '1') return;
		if (typeof Swiper === 'undefined') {
			console.warn('[Swiper] not found');
			return;
		}

		const root = container.classList.contains('swiper')
			? container
			: container.querySelector('.swiper');

		if (!root) {
			console.warn('[Swiper] .swiper not found in', container);
			return;
		}

		const TITLES = ['OFFICE', 'SALON', 'CLINIC'];
		const pad2 = (n) => String(n).padStart(2, '0');

		const ON_DELAY_MS  = 2000;
		const OFF_DELAY_MS = 400;

		const timerMap = new Map();

		const hasPair = (slideEl) =>
			!!(slideEl && slideEl.querySelector('.before') && slideEl.querySelector('.after'));

		const setBefore = (slideEl) => {
			if (hasPair(slideEl)) slideEl.classList.remove('is-after');
		};
		const setAfter = (slideEl) => {
			if (hasPair(slideEl)) slideEl.classList.add('is-after');
		};

		const clearTimer = (slideEl) => {
			const id = timerMap.get(slideEl);
			if (id) {
				clearTimeout(id);
				timerMap.delete(slideEl);
			}
		};

		const clearAllTimers = (swiper) => {
			if (!swiper || !swiper.slides) return;
			swiper.slides.forEach((s) => clearTimer(s));
		};

		const scheduleOnForActive = (swiper) => {
			const active = swiper.slides[swiper.activeIndex];
			if (!active) return;
			clearTimer(active);
			setBefore(active);
			timerMap.set(
				active,
				setTimeout(() => setAfter(active), ON_DELAY_MS)
			);
		};

		const scheduleOffForPrev = (swiper) => {
			const prev = swiper.slides[swiper.previousIndex];
			if (!prev) return;
			clearTimer(prev);
			timerMap.set(
				prev,
				setTimeout(() => setBefore(prev), OFF_DELAY_MS)
			);
		};

		const inst = new Swiper(root, {
			effect: 'fade',
			fadeEffect: { crossFade: true },
			loop: true,
			speed: 400,
			autoplay: {
				delay: 6500,
				disableOnInteraction: false,
				pauseOnMouseEnter: false
			},
			pagination: {
				el: container.querySelector('.kv-slider_pagination'),
				clickable: true,
				renderBullet: (index, className) => {
					const no = pad2(index + 1);
					const title = TITLES[index] || '';
					return `
						<button type="button" class="${className}" aria-label="${no}. ${title}">
							<span class="kv-dot" aria-hidden="true"></span>
							<span class="kv-text">
								<span class="kv-num">${no}.</span>
								<span class="kv-title">${title}</span>
							</span>
						</button>
					`;
				}
			},
			allowTouchMove: false,
			watchOverflow: true,
			on: {
				init(sw) {
					scheduleOnForActive(sw);
				},
				slideChangeTransitionStart(sw) {
					scheduleOffForPrev(sw);
					scheduleOnForActive(sw);
				},
				update(sw) {
					scheduleOnForActive(sw);
				},
				destroy(sw) {
					clearAllTimers(sw);
				}
			}
		});

		container.dataset[INIT_FLAG] = '1';
		container._swiper = inst;

		const mover = container;

		const ob = new MutationObserver(() => {
			if (mover.classList.contains(TRIGGER_CLASS)) {
				inst.autoplay.start();
				const active = inst.slides[inst.activeIndex];
				if (active) {
					clearTimer(active);
					setBefore(active);
					timerMap.set(
						active,
						setTimeout(() => setAfter(active), ON_DELAY_MS)
					);
				}
			} else {
				inst.autoplay.stop();
				clearAllTimers(inst);
			}
		});
		ob.observe(mover, { attributes: true, attributeFilter: ['class'] });
	};

	const setupKV = () => {
		const targets = document.querySelectorAll(SELECTOR);
		if (!targets.length) return;

		targets.forEach((el) => {
			if (el.classList.contains(TRIGGER_CLASS) || hasAncestorWith(el, TRIGGER_CLASS)) {
				initFadeSwiper(el);
				return;
			}

			const observer = new MutationObserver((mutations) => {
				for (const m of mutations) {
					if (m.type === 'attributes' && m.attributeName === 'class') {
						const t = m.target;
						if (
							t.classList.contains(TRIGGER_CLASS) &&
							(t === el || t.contains(el))
						) {
							initFadeSwiper(el);
							observer.disconnect();
							break;
						}
					}
				}
			});
			observer.observe(document.body, {
				attributes: true,
				attributeFilter: ['class'],
				subtree: true
			});
		});
	};

	/* ==========================================================================
		interview-slider：sp-slide版（あなたの既存）
	========================================================================== */
	const initInterviewSplide = (rootSel = '.js-interview-splide') => {
		const root = document.querySelector(rootSel);
		if (!root || root.dataset.interviewSplideInited === '1') return;

		if (typeof Splide === 'undefined') {
			console.warn('[Splide] not found');
			return;
		}

		const mqSp = window.matchMedia('(max-width: 800px)');
		const isSp = () => mqSp.matches;

		const splide = new Splide(root, {
			type: 'loop',
			autoWidth: true,
			gap: '40px',
			speed: 500,
			autoplay: true,
			interval: 3500,
			pauseOnHover: true,
			pagination: false,
			arrows: false,
			updateOnMove: true,
			focus: isSp() ? 0 : 'center',
			start: isSp() ? 0 : 1,
			breakpoints: {
				800: {
					gap: '20px',
					focus: 0
				}
			}
		});

		splide.on('mounted', () => {
			if (isSp()) {
				requestAnimationFrame(() => {
					splide.refresh();
				});
			}
		});

		splide.mount();

		root.dataset.interviewSplideInited = '1';
		root._interviewSplide = splide;
	};

	/* ==========================================================================
		実行（ここは必ず走る）
	========================================================================== */
	setupKV();
	initInterviewSplide('.js-interview-splide');
});

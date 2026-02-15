
$(function() {
	$('#js-hamburger').on('click', function() {
		if($('body').hasClass('nav-open')){
			$("body").removeClass("nav-open");
			$("body").addClass("nav-close");
		}else{
			$("body").removeClass("nav-close");
			$("body").addClass("nav-open");
		}
	});
  $('.c-button').on('click', function(){
    const $btn = $(this);
    const $target = $btn.next('.oc_area');

    $btn.toggleClass('active');
    $target.stop(true, true).slideToggle();
  });
});


document.addEventListener('DOMContentLoaded', () => {
	const header = document.querySelector('.head');

	if (!header) return;

	let headerHeight = header.offsetHeight || 0;

	// ヘッダー高さを更新
	const updateHeaderHeight = () => {
		headerHeight = header.offsetHeight || 0;
	};

	const checkScroll = () => {
		const scrollY = window.scrollY || window.pageYOffset;
		const opThreshold = headerHeight + 200; // .head の高さ + 200px

		// ① 画面高さ分スクロールしたら .fix 付与
		if (scrollY > window.innerHeight) {
			header.classList.add('fix');
		} else {
			header.classList.remove('fix');
		}

		// ② .head の高さ + 200px スクロールしたら .op 付与
		if (scrollY > opThreshold) {
			header.classList.add('op');
		} else {
			header.classList.remove('op');
		}
	};

	window.addEventListener('scroll', checkScroll);

	window.addEventListener('load', () => {
		updateHeaderHeight();
		checkScroll();
	});

	window.addEventListener('resize', () => {
		updateHeaderHeight();
		checkScroll();
	});
});


$(document).ready(function(){
	$('.sp-toggle').on('click', function(){
		const $toggle = $(this);
    const $inr = $toggle.next('.inr'); // 隣接する.inrを取得

    $inr.slideToggle(300); // アニメーション付きで表示/非表示
    $toggle.toggleClass('active'); // activeクラスをトグル
});
});

//svgをインラインへ
window.onload = function() {
	"use strict";

	var desvg = function(selector, removeInlineCss) {
		removeInlineCss = removeInlineCss || false;

		var images,
		imagesLength,
		sortImages = {},

            // load svg file
		loadSvg = function (imgURL, replaceImages) {
                // set up the AJAX request
			var xhr = new XMLHttpRequest();
			xhr.open('GET', imgURL, true);

			xhr.onload = function() {
				var xml,
				svg,
				paths,
				replaceImagesLength;

                    // get the response in XML format
				xml = xhr.responseXML;
				replaceImagesLength = replaceImages.length;

                    // bail if no XML
				if (!xml) {
					return;
				}

                    // this will be the <svg />
				svg = xml.documentElement;

                    // get all the SVG paths
				paths = svg.querySelectorAll('path');

				if (removeInlineCss) {
                        // if `removeInlineCss` is true then remove the style attributes from the SVG paths
					for (var i = 0; i < paths.length; i++) {
						paths[i].removeAttribute('style');
					}
				}
				svg.removeAttribute('xmlns:a');

				while(replaceImagesLength--) {
					replaceImgWithSvg(replaceImages[replaceImagesLength], svg.cloneNode(true));
				}
			};

			xhr.send();
		},

            // replace the original <img /> with the new <svg />
		replaceImgWithSvg = function (img, svg) {
			var imgID = img.id,
			imgClasses = img.getAttribute('class');

			if (imgID) {
                    // re-assign the ID attribute from the <img />
				svg.id = imgID;
			}

			if (imgClasses) {
                    // re-assign the class attribute from the <img />
				svg.setAttribute('class', imgClasses + ' replaced-svg');
			}

			img.parentNode.replaceChild(svg, img);
		};



        // grab all the elements from the document matching the passed in selector
		images = document.querySelectorAll(selector);
		imagesLength = images.length;

        // sort images array by image url
		while (imagesLength--) {
			var _img = images[imagesLength],
			_imgURL;

			if (_img.getAttribute('data-src')) {
				_imgURL = _img.getAttribute('data-src')
			} else {
				_imgURL = _img.getAttribute('src')
			}

			if (sortImages[_imgURL]) {
				sortImages[_imgURL].push(_img);
			} else {
				sortImages[_imgURL] = [_img];
			}
		}

        // loops over the matched urls
		for (var key in sortImages) {
			if (sortImages.hasOwnProperty(key)) {
				loadSvg(key, sortImages[key]);
			}
		}

	};

	window.deSVG = desvg;

    // Call deSVG function after window is loaded
	deSVG('.svg', true);
};

$(document).ready(function() {
	$('.inview').on('inview', function() {
		$(this).addClass('move');
	});
});

document.addEventListener('DOMContentLoaded', function () {
	const ua = window.navigator.userAgent;

  // iOS Safari or macOS Safari を判定（Chromeや他のブラウザを除外）
	const isSafari = /^((?!chrome|android).)*safari/i.test(ua);

	if (isSafari) {
		document.body.classList.add('is-safari');
	}

});

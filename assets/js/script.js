
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

	let headerHeight = 0;
	let readyThreshold = 0;

	const fixOffset = 200;	// readyからfixまで
	const opOffset = 400;	// fixからopまで

	const updateValues = () => {
		headerHeight = header.offsetHeight || 0;
		readyThreshold = header.getBoundingClientRect().top + window.scrollY + headerHeight;
	};

	const checkScroll = () => {
		const scrollY = window.scrollY || window.pageYOffset;

		if (scrollY <= readyThreshold) {
			header.classList.remove('ready', 'fix', 'op');
			return;
		}

		// ① 見えなくなった直後
		header.classList.add('ready');

		// ② 少しあとで fixed 化
		if (scrollY > readyThreshold + fixOffset) {
			header.classList.add('fix');
		} else {
			header.classList.remove('fix', 'op');
			return;
		}

		// ③ さらに少しあとで表示
		if (scrollY > readyThreshold + fixOffset + opOffset) {
			header.classList.add('op');
		} else {
			header.classList.remove('op');
		}
	};

	window.addEventListener('scroll', checkScroll, { passive: true });

	window.addEventListener('load', () => {
		updateValues();
		checkScroll();
	});

	window.addEventListener('resize', () => {
		updateValues();
		checkScroll();
	});

	updateValues();
	checkScroll();
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

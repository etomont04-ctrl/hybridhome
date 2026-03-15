<?php
$TITLE         = '施工実績';
$DESCRIPTION   = '';
$KEYWORDS      = '';
$swiper = "false";
$Ymd = date("Ymd-Hi");
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
	// ローカル環境
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else if($host == 'as-check.jp') {
	// デモ環境
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else {
	// 本番環境
	include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/root.php');
}
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="../assets/css/works.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="../assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="../assets/js/works.js?'.$Ymd.'"></script>';
$uri = "works";
$this_img_path = $img_path .  "works/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<body id="top">
<div class="of-wrap">
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<main>
	<section class="fv inview">
		<div class="inr -m2000">
			<figure class="fv-img -small">
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>fv-sp.webp">
					<img src="<?= $this_img_path; ?>fv.webp" alt="" class="fit_img">
				</picture>
			</figure>
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="施工実績" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>施工実績</p>
			</div>
		</div>
	</section><!-- /fv -->
	<section class="pickup">
		<div class="inr -w1300">
			<div class="splide pickup-slider">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<article class="pick-card">
								<a class="pick-card__link" href="#">
									<div class="pick-card__photo soto">
										<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
									</div>
									<div class="pick-card__body">
										<h3 class="pick-card__title">愛車と同居できる家</h3>
										<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
										<span class="pick-card__area">町田市</span>
									</div>
								</a>
							</article>
						</li><!--/splide__slide -->
						<li class="splide__slide">
							<article class="pick-card">
								<a class="pick-card__link" href="#">
									<div class="pick-card__photo uchi">
										<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
									</div>
									<div class="pick-card__body">
										<h3 class="pick-card__title">庭がカフェになる家</h3>
										<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
										<span class="pick-card__area">町田市</span>
									</div>
								</a>
							</article>
						</li><!--/splide__slide -->
						<li class="splide__slide">
							<article class="pick-card">
								<a class="pick-card__link" href="#">
									<div class="pick-card__photo soto">
										<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
									</div>
									<div class="pick-card__body">
										<h3 class="pick-card__title">犬と暮らしやすい家</h3>
										<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
										<span class="pick-card__area">町田市</span>
									</div>
								</a>
							</article>
						</li><!--/splide__slide -->
					</ul><!-- /splide__list -->
				</div><!-- /splide__track -->
			</div><!-- /splide -->
		</div><!-- /inr -->
		<div class="pickup-loop">
			<div class="pickup-loop__track">
				<div class="pickup-loop__unit">
					<img src="<?= $this_img_path; ?>pickup-loop_txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="pickup-loop__img">
				</div>
				<div class="pickup-loop__unit">
					<img src="<?= $this_img_path; ?>pickup-loop_txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="pickup-loop__img">
				</div>
			</div>
		</div><!--/intro-loop -->
	</section>
	<section class="works">
		<div class="inr -w1400 round-con">
			<div class="conditions_wrap">
				<div class="conditions_btn">
					<h2><img src="<?= $this_img_path; ?>fillter_title.webp" alt="条件で絞り込み" decoding="async"></h2>
					<spna class="en">Filter / Category</spna>
					<span class="btn"></span>
				</div>
				<div class="conditions_list">
					<!-- <ul>
						<li>
							<h3>エリア</h3>
							<div class="text_area">
								<div class="item"><input name="area[]" id="area1" type="checkbox" value="岡山市北区" class="checkbox"><label for="area1">岡山市北区</label></div>
								<div class="item odd"><input name="area[]" id="area2" type="checkbox" value="岡山市中区" class="checkbox"><label for="area2">岡山市中区</label></div>
								<div class="item"><input name="area[]" id="area3" type="checkbox" value="岡山市南区" class="checkbox"><label for="area3">岡山市南区</label></div>
								<div class="item odd"><input name="area[]" id="area4" type="checkbox" value="岡山市東区" class="checkbox"><label for="area4">岡山市東区</label></div>
								<div class="item"><input name="area[]" id="area5" type="checkbox" value="倉敷市" class="checkbox"><label for="area5">倉敷市</label></div>
								<div class="item odd"><input name="area[]" id="area6" type="checkbox" value="玉野市" class="checkbox"><label for="area6">玉野市</label></div>
								<div class="item"><input name="area[]" id="area7" type="checkbox" value="赤磐市" class="checkbox"><label for="area7">赤磐市</label></div>
								<div class="item odd"><input name="area[]" id="area8" type="checkbox" value="瀬戸内市" class="checkbox"><label for="area8">瀬戸内市</label></div>
								<div class="item"><input name="area[]" id="area9" type="checkbox" value="浅口市" class="checkbox"><label for="area9">浅口市</label></div>
								<div class="item odd"><input name="area[]" id="area10" type="checkbox" value="津山市" class="checkbox"><label for="area10">津山市</label></div>
								<div class="item"><input name="area[]" id="area11" type="checkbox" value="総社市" class="checkbox"><label for="area11">総社市</label></div>
								<div class="item odd"><input name="area[]" id="area12" type="checkbox" value="早島町" class="checkbox"><label for="area12">早島町</label></div>
								<div class="item"><input name="area[]" id="area13" type="checkbox" value="備前市" class="checkbox"><label for="area13">備前市</label></div>
							</div>
						</li>
					</ul> -->
				</div><!-- conditions_list" -->
				<figure class="duck sb inview"><img src="<?= $this_img_path; ?>conditions_duck.webp" alt="" decoding="async"></figure>
			</div><!-- /conditions_wrap -->
			<ul class="works_list">
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo soto">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo soto">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo soto">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo soto">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
				<li>
					<article class="card">
						<a class="card__link" href="#">
							<div class="card__photo uchi">
								<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
							</div>
							<div class="card__body">
								<h3 class="card__title">愛車と同居できる家</h3>
								<div class="card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
								<span class="card__area">町田市</span>
							</div>
						</a>
					</article>
				</li>
			</ul>
			<div class="archive-pager_wrap">
				<ol class="archive-pager_num">
					<li><a class="archive-pager__page is-current" href="#">1</a></li>
					<li><a class="archive-pager__page" href="#">2</a></li>
					<li><a class="archive-pager__page" href="#">…</a></li>
					<li><a class="archive-pager__page" href="#">3</a></li>
				</ol><!-- /archive-pager -->
				<div class="archive-pager_nav">
					<a href="#" class="nav-btn prev is-disabled -texure">
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</a>
					<a href="#" class="nav-btn next -texure">
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</a>
				</div><!-- /archive-pager_nav -->
			</div><!-- /archive-pager -->
		</div><!-- /inr -->
	</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
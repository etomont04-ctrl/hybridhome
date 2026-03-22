<?php
$TITLE         = 'お知らせ';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/news.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="../assets/js/news.js?'.$Ymd.'"></script>';
$uri = "news";
$this_img_path = $img_path .  "news/";
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
	<section class="news-fv inview">
		<div class="inr -m2000">
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="お知らせ" decoding="async"></h1>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>お知らせ</p>
			</div>
			<figure class="cloud -left"><img src="<?= $img_path; ?>news/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>news/fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->
	<section class="news_wrap">
		<div class="inr -w1400 round-con -detail">
			<div class="bird-area">
				<figure class="bird bird01"><img src="<?= $this_img_path; ?>fv-bird01.webp" alt="" decoding="async"></figure>
				<figure class="bird bird02 inview sb"><img src="<?= $this_img_path; ?>fv-bird02.webp" alt="" decoding="async"></figure>
			</div>
			<nav class="categorys">
				<div class="tit_area conditions_btn">
					<h2><img src="<?= $this_img_path; ?>category_title.webp" alt="記事" decoding="async"></h2>
					<span class="en en-tit">Category</span>
					<span class="btn"></span>
				</div>
				<ul class="conditions_list">
					<li><a href="#">すべて<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">お知らせ<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">よくある質問<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">お客様アンケート<span class="en">（ 10 ）</span></a></li>
				</ul>
			</nav>
			<div class="detail_wrap">
				<figure class="main-image">
					<img src="<?= $this_img_path; ?>detail-dummy.png" alt="" decoding="async" class="fit_img">
				</figure>

			</div>
		</div><!-- /inr -->
	</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
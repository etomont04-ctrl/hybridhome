<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE         = 'お探しのページは見つかりませんでした';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/news.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/news.js?'.$Ymd.'"></script>';
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
			<h1 class="title-text inview"><span class="ja">404 not found</span></h1>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>404 not found</p>
			</div>
			<figure class="cloud -left"><img src="<?= $img_path; ?>news/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>news/fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->
	<section class="news_wrap">
		<div class="inr -w1400 round-con base-wrap -nf">
			<div class="bird-area">
				<figure class="bird bird01 tab_off"><img src="<?= $this_img_path; ?>fv-bird01.webp" alt="" decoding="async"></figure>
				<figure class="bird bird02 inview sb"><img src="<?= $this_img_path; ?>fv-bird02.webp" alt="" decoding="async"></figure>
			</div>

			<div class="archive_wrap -wrap_404">
				<h3>お探しのページは見つかりませんでした</h3>
				<p class="text-404">お探しのページは見つかりませんでした。<br>
お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。</p>
				<a href="<?= $ROOT_DIR; ?>" class="link_wrap">
					<p class="link_btn -blue">
						<span class="text">TOPへ戻る</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div>
		</div><!-- /inr -->
	</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>

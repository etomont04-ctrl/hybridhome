<?php
$TITLE         = '';
$DESCRIPTION   = '';
$KEYWORDS      = '';
$swiper = "true";
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
$UNIQUE_CSS = '<link rel="stylesheet" href="assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="assets/css/top.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="assets/js/top.js?'.$Ymd.'"></script>';
$uri = "index";
$this_img_path = $img_path .  "top/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<body id="top">
<div class="of-wrap">
<!-- 	<div class="load">
		<div class="logo-area">
			<figure class="symbol -top"><img src="<?= $img_path; ?>common/logo-symbol-top.svg" alt="" decoding="async"></figure>
			<figure class="text"><img src="<?= $img_path; ?>common/logo-text.svg" alt="" decoding="async"></figure>
			<figure class="symbol -bottom"><img src="<?= $img_path; ?>common/logo-symbol-bottom.svg" alt="" decoding="async"></figure>
		</div>
	</div> -->
	<?php /*include($root_path . 'assets/inc/menu.php');*/ ?>
	<main>

	<section id="kv" class="inview">
		<div class="inr">
			<figure class="bird bird01"><img src="<?= $img_path; ?>common/illust/bird01.webp" alt="" decoding="async"></figure>
			<figure class="bird bird02"><img src="<?= $img_path; ?>common/illust/bird02.webp" alt="" decoding="async"></figure>
			<h1 class="kv_logo"><img src="<?= $img_path; ?>common/logo.png" alt="ハイブリッドホーム HYBRID HOME" decoding="async"></h1>
			<h2 class="kv_chatch"><img src="<?= $this_img_path; ?>chatch.webp" alt="WELCOME TO HYBRID HOME!" decoding="async"></h2>
			<div class="yane-area">
				<h3 class="kv_sub-chatch"><img src="<?= $this_img_path; ?>sub-chatch.webp" alt="ようこそ！ハイブリットホームへ" decoding="async"></h3>
				<figure class="yane"><img src="<?= $img_path; ?>common/illust/yane.webp" alt="" decoding="async"></figure>
			</div>


		</div>
			<div class="town_bg"></div>


	</section>
	</main>
<?php /*include($root_path . '/assets/inc/footer.php');*/ ?>

</div><!-- /of_wrap -->
</body>
</html>
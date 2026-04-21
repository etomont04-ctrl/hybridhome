<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
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
$UNIQUE_CSS = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/works.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/works.js?'.$Ymd.'"></script>';
$uri = "works";
$this_img_path = $img_path .  "works/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<body id="top">
<?php include($root_path . 'assets/inc/gtag.php'); ?>
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
	<?php if (!is_paged()) : ?>
		<?php get_template_part('inc/pickup-slider'); ?>
	<?php endif; ?>
	<section class="works">
	<div class="inr -w1400 round-con">
		<?php get_template_part('inc/sort'); ?>
		<?php get_template_part('inc/works-loop'); ?>
	</div><!-- /inr -->
</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
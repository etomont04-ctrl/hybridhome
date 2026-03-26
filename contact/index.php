<?php
$TITLE         = '';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/contact.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "contact";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="お問い合わせ" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>お問い合わせ</p>
			</div>
		</div>
	</section><!-- /fv -->
	<div class="contact_wrap">
		<figure class="kumonchu sb"><img src="<?= $this_img_path; ?>kumonchu.webp" alt="" decoding="async"></figure>
		<div class="inr -w1400">
			<p class="intro_txt">
				ハイブリッドホームのホームページへのご訪問、誠にありがとうございます。ご相談・お見積りは無料です。お気軽にお問い合わせください。
			</p>
			<section class="round-con -tell">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>telephone_title.png" alt="お電話でのお問い合わせ" decoding="async"></h2>
					<p class="en">Telephone</p>
				</div>
				<div class="tel_area">
					<a href="tel:08001118146"><p class="line">Tel.</p><span>0800-111-8146</span></a>
					<p class="btm_txt"><span>営業時間</span>：9:00～18:00</p>
					<p class="btm_txt"><span>定休日</span>：日曜・月曜・祝祭日</p>
				</div>
			</section>
		</div><!-- /inr -->
	</div><!--/contact_wrap -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
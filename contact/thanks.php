<?php
$TITLE         = 'お問い合わせ';
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
		<figure class="kumonchu sb inview"><img src="<?= $this_img_path; ?>kumonchu.webp" alt="" decoding="async"></figure>
		<div class="inr -w1400">
			<section class="round-con form -conf">
				<figure class="bird tab_off"><img src="<?= $this_img_path; ?>form-bird.webp" alt="" decoding="async"></figure>
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>form_title.png" alt="メールでお問い合わせ" decoding="async"></h2>
					<p class="en">Mail Form</p>
				</div>
				<ol class="step -conf">
					<li>
						<span class="en">step 01</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text01.png" alt="内容入力" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 02</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text02.png" alt="内容確認" decoding="async"></p>
					</li>
					<li class="this">
						<span class="en">step 03</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text03.png" alt="送信完了" decoding="async"></p>
					</li>
				</ol>
				<h2 class="thanks_tit">お問い合わせを送信いたしました</h2>
				<p class="thanks_txt">お問合わせを送信いたしました。ありがとうございました。<br>
					ご入力されたメールアドレス宛に確認のメールを送信いたしましたのでご確認ください。<br>
					<br>
					また、一日経過してもメールが届かない場合には、ご入力時のメールアドレスが間違っている場合がありますので、<br class="tab_off">まことに恐縮ですが再度のご連絡をよろしくお願いします。
				</p>

				<a href="<? $ROOT_DIR; ?>" class="link_wrap">
					<p class="link_btn -blue">
						<span class="text">TOPへ戻る</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</section>
		</div><!-- /inr -->
	</div><!--/contact_wrap -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
<script>
// grecaptcha.ready(function () {
// 	grecaptcha.execute('6Lcz4w0rAAAAAE59wrLSq3kTCiKfuO77Tswn-Ax5', { action: 'contact' }).then(function (token) {
// 	// トークンをフォームに追加
// 	var form = document.getElementById("form");
// 	var input = document.createElement("input");
// 	input.type = "hidden";
// 	input.name = "recaptcha_token";
// 	input.value = token;
// 	form.appendChild(input);
// 	});
// });
</script>
</body>
</html>
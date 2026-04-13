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
		<figure class="kumonchu sb inview"><img src="<?= $this_img_path; ?>kumonchu.webp" alt="" decoding="async"></figure>
		<div class="inr -w1400">
			<section class="round-con -form -conf">
				<figure class="bird tab_off"><img src="<?= $this_img_path; ?>form-bird.webp" alt="" decoding="async"></figure>
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>form_title.png" alt="メールでお問い合わせ" decoding="async"></h2>
					<p class="en">Mail Form</p>
					<p class="n_txt">送信完了しました。</p>
				</div>
				<ol class="step -conf">
					<li>
						<span class="en">step 01</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text01.png" alt="内容入力" decoding="async"></p>
					</li>
					<li class="this">
						<span class="en">step 02</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text02.png" alt="内容確認" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 03</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text03.png" alt="送信完了" decoding="async"></p>
					</li>
				</ol>
				<?php if (!empty($errors)) : ?>
					<div class="error_wrap">
						<p>入力内容に不備があります。</p>
						<ul>
							<?php foreach ($errors as $error) : ?>
								<li><?= h($error); ?></li>
							<?php endforeach; ?>
						</ul>
						<p><a href="javascript:history.back();">入力画面に戻る</a></p>
					</div>
				<?php else : ?>
				<div class="form_wrap -contact">
					<div class="box -full">
						<div class="form_tit req"><label>お問い合わせ種別</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($shubetsu); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit req"><label for="name">お名前</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($name); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit req"><label for="kana">ふりがな</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($kana); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit req"><label for="todoufuken">住所：都道府県</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($todoufuken); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit req"><label for="shichouson">住所：市区町村</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($shichouson); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit req"><label for="mail">メールアドレス</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($mail); ?></p></div>
					</div>
					<div class="box">
						<div class="form_tit"><label for="tel">お電話番号</label></div>
						<div class="form_input -conf"><p class="form-item"><?= h($tel); ?></p></div>
					</div>
					<div class="box -full">
						<div class="form_tit req"><label for="message">ご相談・お問い合わせ内容</label></div>
						<div class="form_input -conf"><p class="form-item"><?= nl2br(h($message)); ?></p></div>
					</div>

					<div class="btn_wrap -conf">
						<form action="entry.php" method="post">
							<input type="hidden" name="shubetsu" value="<?= h($shubetsu); ?>">
							<input type="hidden" name="name" value="<?= h($name); ?>">
							<input type="hidden" name="kana" value="<?= h($kana); ?>">
							<input type="hidden" name="todoufuken" value="<?= h($todoufuken); ?>">
							<input type="hidden" name="shichouson" value="<?= h($shichouson); ?>">
							<input type="hidden" name="mail" value="<?= h($mail); ?>">
							<input type="hidden" name="tel" value="<?= h($tel); ?>">
							<input type="hidden" name="message" value="<?= h($message); ?>">
							<p class="link_btn -blue -send" id="submit_wrap">
								<span class="text">送信する</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
								<input type="submit" class="submit-btn" id="submit-btn" value="">
							</p>
						</form>
						<form action="./" method="post">
							<input type="hidden" name="shubetsu" value="<?= h($shubetsu); ?>">
							<input type="hidden" name="name" value="<?= h($name); ?>">
							<input type="hidden" name="kana" value="<?= h($kana); ?>">
							<input type="hidden" name="todoufuken" value="<?= h($todoufuken); ?>">
							<input type="hidden" name="shichouson" value="<?= h($shichouson); ?>">
							<input type="hidden" name="mail" value="<?= h($mail); ?>">
							<input type="hidden" name="tel" value="<?= h($tel); ?>">
							<input type="hidden" name="message" value="<?= h($message); ?>">
							<p class="link_btn -gray -rev" id="submit_wrap">
								<span class="text">修正する</span>
								<i class="arrow -rev"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
								<input type="submit" class="submit-btn" id="submit-btn" value="">
							</p>
						</form>
					</div>

				</div><!-- /form_wrap -->
				<?php endif; ?>
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
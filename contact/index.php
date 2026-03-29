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
					<div class="btm_txt">
						<p><span>営業時間</span>：9:00～18:00</p>
						<p><span>定休日</span>：日曜・月曜・祝祭日</p>
					</div>
				</div>
			</section>
			<section class="round-con -form">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>form_title.png" alt="メールでお問い合わせ" decoding="async"></h2>
					<p class="en">Mail Form</p>
					<p class="n_txt">入力内容をご確認の上、確認ボタンを押してください。<br>1～3営業日以内に、担当よりメールにて返信させていただきます。</p>
				</div>
				<ol class="step">
					<li class="this">
						<span class="en">step 01</span>
						<p class="step-text"><img src="<?= $this_img_path; ?>step-text01.png" alt="内容入力" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 02</span>
						<p class="step-text"><img src="<?= $this_img_path; ?>step-text02.png" alt="内容確認" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 03</span>
						<p class="step-text"><img src="<?= $this_img_path; ?>step-text03.png" alt="送信完了" decoding="async"></p>
					</li>
				</ol>
				<form id="form" action="conf.php" method="post">
					<div class="form_wrap">
						<div class="box -full">
							<div class="form_tit req"><label>お問い合わせ種別</label></div>
							<ul class="form-list input-radio">
								<li>
									<label><input type="radio" name="shubetsu" value="ご相談・お申し込み" checked> <span>ご相談・お申し込み</span></label>
								</li>
								<li>
									<label><input type="radio" name="shubetsu" value="質問"> <span>質問</span></label>
								</li>
								<li>
									<label><input type="radio" name="shubetsu" value="その他"> <span>その他</span></label>
								</li>
							</ul>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="name">お名前</label></div>
							<div class="form_input">
								<input name="name" id="name" type="text" class="form-item" placeholder="フルネームでご入力ください" required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="kana">ふりがな</label></div>
							<div class="form_input">
							<input name="kana" id="kana" type="text" class="form-item" placeholder="たなか たろう"  required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="todoufuken">住所：都道府県</label></div>
							<div class="form_input">
							<input name="todoufuken" id="todoufuken" type="text" class="form-item" placeholder="住所：都道府県" required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="shichouson">住所：市区町村</label></div>
							<div class="form_input">
							<input name="shichouson" id="shichouson" type="text" class="form-item" placeholder="住所：市区町村"  required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="mail">メールアドレス</label></div>
							<div class="form_input">
							<input name="mail" id="mail" type="email" class="form-item" required placeholder="半角英数字でご入力ください">
							</div>
						</div>
						<div class="box">
							<div class="form_tit"><label for="tel">お電話番号</label></div>
							<div class="form_input">
							<input name="tel" id="tel" type="tel" class="form-item" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}"placeholder="0800-111-8146">
							</div>
						</div>
						<div class="box -full">
							<div class="form_tit req"><label for="message">ご相談・お問い合わせ内容</label></div>
							<div class="form_input b-item">
							<textarea name="message" id="message" type="text" class="form-item" placeholder="お困りのこと、気になることなど、お気軽にお問い合わせください。" required></textarea>
							</div>
						</div>
						<div class="btn_wrap">
							<p class="link_btn -blue -send" id="submit_wrap">
								<span class="text">送信内容の確認</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
								<input type="submit" class="submit-btn" id="submit-btn" value="">
							</p>
						</div>
					</div><!-- /form_wrap -->
				</form><!--/ form-->
			</section>
		</div><!-- /inr -->
	</div><!--/contact_wrap -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
<script>
document.addEventListener('DOMContentLoaded', function () {
	const fields = document.querySelectorAll('#form input, #form textarea, #form select');

	fields.forEach(function (field) {
		field.addEventListener('invalid', function () {
			if (field.validity.valueMissing) {
				field.setCustomValidity('入力してください');
			} else if (field.validity.typeMismatch) {
				field.setCustomValidity('正しい形式で入力してください');
			} else if (field.validity.patternMismatch) {
				field.setCustomValidity('入力形式が正しくありません');
			} else {
				field.setCustomValidity('');
			}
		});

		field.addEventListener('input', function () {
			field.setCustomValidity('');
		});
	});
});
</script>
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
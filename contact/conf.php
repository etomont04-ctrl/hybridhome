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

session_start();

function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
/* ==========================================================================
	直接アクセス対策
========================================================================== */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: ./');
	exit;
}

/* ==========================================================================
	値の取得
========================================================================== */
$shubetsu = isset($_POST['shubetsu']) ? trim($_POST['shubetsu']) : '';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$kana = isset($_POST['kana']) ? trim($_POST['kana']) : '';
$todoufuken = isset($_POST['todoufuken']) ? trim($_POST['todoufuken']) : '';
$shichouson = isset($_POST['shichouson']) ? trim($_POST['shichouson']) : '';
$mail = isset($_POST['mail']) ? trim($_POST['mail']) : '';
$tel = isset($_POST['tel']) ? trim($_POST['tel']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$recaptcha_token = isset($_POST['recaptcha_token']) ? trim($_POST['recaptcha_token']) : '';

/* ==========================================================================
	reCAPTCHA v3 検証
========================================================================== */
$recaptcha_secret = '6LdDJMIsAAAAAMlMo7e9oiLlnihtHBbcoDn7M11v';

if ($recaptcha_token === '') {
	$errors[] = 'reCAPTCHAの認証に失敗しました。';
} else {
	$verify_url = 'https://www.google.com/recaptcha/api/siteverify';

	$post_data = array(
		'secret'	=> $recaptcha_secret,
		'response'	=> $recaptcha_token,
		'remoteip'	=> $_SERVER['REMOTE_ADDR'] ?? '',
	);

	$context = stream_context_create(array(
		'http' => array(
			'method'	=> 'POST',
			'header'	=> "Content-type: application/x-www-form-urlencoded\r\n",
			'content'	=> http_build_query($post_data),
			'timeout'	=> 10,
		),
	));

	$response = file_get_contents($verify_url, false, $context);
	$result = json_decode($response, true);

	if (
		empty($result['success']) ||
		!isset($result['score']) ||
		$result['score'] < 0.5 ||
		empty($result['action']) ||
		$result['action'] !== 'contact_form'
	) {
		$errors[] = 'reCAPTCHAの認証に失敗しました。';
	}
}
/* ==========================================================================
	バリデーション
========================================================================== */
$errors = array();

if ($shubetsu === '') $errors[] = 'お問い合わせ種別を選択してください。';
if ($name === '') $errors[] = 'お名前を入力してください。';
if ($kana === '') $errors[] = 'ふりがなを入力してください。';
if ($todoufuken === '') $errors[] = '住所：都道府県を入力してください。';
if ($shichouson === '') $errors[] = '住所：市区町村を入力してください。';
if ($mail === '') $errors[] = 'メールアドレスを入力してください。';
if ($message === '') $errors[] = 'ご相談・お問い合わせ内容を入力してください。';

if ($mail !== '' && !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'メールアドレスの形式が正しくありません。';
}

if ($tel !== '' && !preg_match('/^\d{2,4}-?\d{2,4}-?\d{3,4}$/', $tel)) {
	$errors[] = 'お電話番号の形式が正しくありません。';
}

/* ==========================================================================
	エラー時は入力画面へ戻す
========================================================================== */
if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['old'] = $_POST;
	header('Location: ./');
	exit;
}

/* ==========================================================================
	セッションに保存
========================================================================== */
$_SESSION['contact'] = array(
	'shubetsu'	=> $shubetsu,
	'name'		=> $name,
	'kana'		=> $kana,
	'todoufuken'=> $todoufuken,
	'shichouson'=> $shichouson,
	'mail'		=> $mail,
	'tel'		=> $tel,
	'message'	=> $message,
);
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
					<p class="n_txt">入力内容をご確認の上、送信ボタンを押してください。<br>1～3営業日以内に、担当よりメールにて返信させていただきます。</p>
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
							<input type="hidden" name="recaptcha_token" id="recaptcha_token_conf" value="">
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
							<p class="link_btn -gray -rev" id="submit_wrap02">
								<span class="text">修正する</span>
								<i class="arrow -rev"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
								<input type="submit" class="submit-btn" id="submit-btn02" value="">
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
<script src="https://www.google.com/recaptcha/api.js?render=6LdDJMIsAAAAAI_nv1ejVZB_cWbyr9VOLLj_5kMa"></script>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		const form = document.querySelector('.btn_wrap.-conf form[action="entry.php"]');
		const tokenField = document.querySelector('#recaptcha_token_conf');

		if (!form || !tokenField || typeof grecaptcha === 'undefined') return;

		form.addEventListener('submit', (e) => {
			e.preventDefault();

			grecaptcha.ready(() => {
				grecaptcha.execute('6LdDJMIsAAAAAI_nv1ejVZB_cWbyr9VOLLj_5kMa', { action: 'contact_submit' }).then((token) => {
					tokenField.value = token;
					form.submit();
				});
			});
		});
	});
</script>
</body>
</html>
<?php
session_start();

/* ==========================================================================
	文字コード設定
========================================================================== */
mb_language('Japanese');
mb_internal_encoding('UTF-8');

/* ==========================================================================
	PHPMailer読み込み
========================================================================== */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../phpmailer/src/Exception.php';
require __DIR__ . '/../phpmailer/src/PHPMailer.php';
require __DIR__ . '/../phpmailer/src/SMTP.php';

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
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$kana = isset($_POST['kana']) ? trim($_POST['kana']) : '';
$age = isset($_POST['age']) ? trim($_POST['age']) : '';
$mail = isset($_POST['mail']) ? trim($_POST['mail']) : '';
$tel = isset($_POST['tel']) ? trim($_POST['tel']) : '';
$yubin = isset($_POST['yubin']) ? trim($_POST['yubin']) : '';
$shubetsu = isset($_POST['shubetsu']) ? trim($_POST['shubetsu']) : '';
$shokushu = isset($_POST['shokushu']) ? trim($_POST['shokushu']) : '';
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
		$result['action'] !== 'contact_submit'
	) {
		$errors[] = 'reCAPTCHAの認証に失敗しました。';
	}
}

if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	$_SESSION['old'] = $_POST;
	header('Location: ./');
	exit;
}
/* ==========================================================================
	バリデーション
========================================================================== */
$errors = array();

if ($name === '') $errors[] = 'お名前を入力してください。';
if ($kana === '') $errors[] = 'ふりがなを入力してください。';
if ($age === '') $errors[] = 'ご年齢を入力してください。';
if ($mail === '') $errors[] = 'メールアドレスを入力してください。';
if ($shubetsu === '') $errors[] = '希望雇用形態を選択してください。';
if ($shokushu === '') $errors[] = '希望職種を選択してください。';

if ($mail !== '' && !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'メールアドレスの形式が正しくありません。';
}

if ($tel !== '' && !preg_match('/^\d{2,4}-?\d{2,4}-?\d{3,4}$/', $tel)) {
	$errors[] = 'お電話番号の形式が正しくありません。';
}

if ($yubin !== '' && !preg_match('/^\d{3}-?\d{4}$/', $yubin)) {
	$errors[] = '郵便番号の形式が正しくありません。';
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
	メール設定
========================================================================== */
$admin_mail = 'hp@hybridhome.co.jp';
$from_mail = 'hp@hybridhome.co.jp';
$site_name = '採用エントリーフォーム';

/* ==========================================================================
	SMTP設定
========================================================================== */
$smtp_host = 'sv14923.xserver.jp';
$smtp_port = 465;
$smtp_secure = PHPMailer::ENCRYPTION_SMTPS;
$smtp_username = 'hp@hybridhome.co.jp';
$smtp_password = 'p5ERPNmLPJhr5EhH';

/* ==========================================================================
	件名
========================================================================== */
$subject_admin = '【' . $site_name . '】エントリーを受け付けました';
$subject_user = '【' . $site_name . '】エントリーありがとうございます';

/* ==========================================================================
	管理者宛本文
========================================================================== */
$body_admin = <<<EOT
{$site_name} よりエントリーがありました。

【お名前】
{$name}

【ふりがな】
{$kana}

【ご年齢】
{$age}

【メールアドレス】
{$mail}

【お電話番号】
{$tel}

【郵便番号】
{$yubin}

【希望雇用形態】
{$shubetsu}

【希望職種】
{$shokushu}

EOT;

/* ==========================================================================
	自動返信本文
========================================================================== */
$body_user = <<<EOT
{$name} 様

このたびはエントリーいただきありがとうございます。
以下の内容で受け付けいたしました。

【お名前】
{$name}

【ふりがな】
{$kana}

【ご年齢】
{$age}

【メールアドレス】
{$mail}

【お電話番号】
{$tel}

【郵便番号】
{$yubin}

【希望雇用形態】
{$shubetsu}

【希望職種】
{$shokushu}

内容を確認のうえ、担当よりご連絡いたします。
しばらくお待ちください。

※このメールは自動送信です。

EOT;
/* ==========================================================================
	メール送信
========================================================================== */
try {
	/* --------------------------------------------------------------------------
		管理者宛
	-------------------------------------------------------------------------- */
	$mailer = new PHPMailer(true);
	$mailer->isSMTP();
	$mailer->Host = $smtp_host;
	$mailer->SMTPAuth = true;
	$mailer->Username = $smtp_username;
	$mailer->Password = $smtp_password;
	$mailer->SMTPSecure = $smtp_secure;
	$mailer->Port = $smtp_port;
	$mailer->CharSet = 'UTF-8';

	// デバッグが必要なときだけ有効化
	//$mailer->SMTPDebug = 2;

	$mailer->setFrom($from_mail, $site_name);
	$mailer->addAddress($admin_mail);
	$mailer->addReplyTo($mail, $name);

	$mailer->Subject = $subject_admin;
	$mailer->Body = $body_admin;

	$is_admin_sent = $mailer->send();

	/* --------------------------------------------------------------------------
		自動返信
	-------------------------------------------------------------------------- */
	$mailer_user = new PHPMailer(true);
	$mailer_user->isSMTP();
	$mailer_user->Host = $smtp_host;
	$mailer_user->SMTPAuth = true;
	$mailer_user->Username = $smtp_username;
	$mailer_user->Password = $smtp_password;
	$mailer_user->SMTPSecure = $smtp_secure;
	$mailer_user->Port = $smtp_port;
	$mailer_user->CharSet = 'UTF-8';

	// デバッグが必要なときだけ有効化
	//$mailer_user->SMTPDebug = 2;

	$mailer_user->setFrom($from_mail, $site_name);
	$mailer_user->addAddress($mail);
	$mailer_user->addReplyTo($from_mail, $site_name);

	$mailer_user->Subject = $subject_user;
	$mailer_user->Body = $body_user;

	$is_user_sent = $mailer_user->send();

} catch (Exception $e) {
	echo '<pre>';
	echo '送信エラーが発生しました。' . "\n";
	echo $e->getMessage() . "\n";
	echo '</pre>';
	exit;
}

/* ==========================================================================
	送信結果確認
========================================================================== */
if (!$is_admin_sent || !$is_user_sent) {
	echo '<pre>';
	echo '管理者宛: ' . ($is_admin_sent ? '成功' : '失敗') . "\n";
	echo '自動返信: ' . ($is_user_sent ? '成功' : '失敗') . "\n";
	echo '</pre>';
	exit;
}

/* ==========================================================================
	完了後セッション破棄
========================================================================== */
unset($_SESSION['errors']);
unset($_SESSION['old']);
unset($_SESSION['contact']);

/* ==========================================================================
	完了ページへ
========================================================================== */
header('Location: ./thanks.php');
exit;
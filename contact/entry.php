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
$shubetsu = isset($_POST['shubetsu']) ? trim($_POST['shubetsu']) : '';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$kana = isset($_POST['kana']) ? trim($_POST['kana']) : '';
$todoufuken = isset($_POST['todoufuken']) ? trim($_POST['todoufuken']) : '';
$shichouson = isset($_POST['shichouson']) ? trim($_POST['shichouson']) : '';
$mail = isset($_POST['mail']) ? trim($_POST['mail']) : '';
$tel = isset($_POST['tel']) ? trim($_POST['tel']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

/* ==========================================================================
	改行コード統一
========================================================================== */
$message = str_replace(array("\r\n", "\r"), "\n", $message);

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
	メール設定
========================================================================== */
$admin_mail = 'hp@hybridhome.co.jp';
$from_mail = 'hp@hybridhome.co.jp';
$site_name = 'お問い合わせフォーム';

/* ==========================================================================
	SMTP設定
	※ ここにご共有いただいた情報を入れる
========================================================================== */
$smtp_host = 'sv14923.xserver.jp';
$smtp_port = 465;
// $smtp_secure = PHPMailer::ENCRYPTION_STARTTLS; // 465なら PHPMailer::ENCRYPTION_SMTPS
$smtp_secure = PHPMailer::ENCRYPTION_SMTPS; // 465なら PHPMailer::ENCRYPTION_SMTPS
$smtp_username = 'hp@hybridhome.co.jp';
$smtp_password = 'p5ERPNmLPJhr5EhH';

/* ==========================================================================
	件名
========================================================================== */
$subject_admin = '【' . $site_name . '】お問い合わせを受け付けました';
$subject_user = '【' . $site_name . '】お問い合わせありがとうございます';

/* ==========================================================================
	管理者宛本文
========================================================================== */
$body_admin = <<<EOT
{$site_name} よりお問い合わせがありました。

【お問い合わせ種別】
{$shubetsu}

【お名前】
{$name}

【ふりがな】
{$kana}

【住所：都道府県】
{$todoufuken}

【住所：市区町村】
{$shichouson}

【メールアドレス】
{$mail}

【お電話番号】
{$tel}

【ご相談・お問い合わせ内容】
{$message}

EOT;

/* ==========================================================================
	自動返信本文
========================================================================== */
$body_user = <<<EOT
{$name} 様

このたびはお問い合わせいただきありがとうございます。
以下の内容で受け付けいたしました。

【お問い合わせ種別】
{$shubetsu}

【お名前】
{$name}

【ふりがな】
{$kana}

【住所：都道府県】
{$todoufuken}

【住所：市区町村】
{$shichouson}

【メールアドレス】
{$mail}

【お電話番号】
{$tel}

【ご相談・お問い合わせ内容】
{$message}

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
	// $mailer_user->SMTPDebug = 2;

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
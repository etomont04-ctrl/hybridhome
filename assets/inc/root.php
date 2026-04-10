<?php
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
	$ROOT_DIR = 'http://localhost/hybridhome/';
} else if ($host === 'as-check.jp') {
	$ROOT_DIR = 'https://as-check.jp/hybridhome/';
} else {
	$ROOT_DIR = '/';
}
$root_path = $_SERVER['DOCUMENT_ROOT'] . parse_url($ROOT_DIR, PHP_URL_PATH);

//////////以下現在のディレクトリと同じimage-pathを取得//////////
// 現在のスクリプトのパスを取得
$path = $_SERVER['PHP_SELF'];
// パスからディレクトリ部分を取得
$directory = dirname($path);
// ディレクトリから最後の要素（ディレクトリ名）を取得
$this_path = basename($directory);
$img_path      = $ROOT_DIR . 'assets/img/';
// $this_img_path = $img_path . $this_path . "/";

// 現在のURLのパスだけ取り出す
$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ドメイン 以降を取得
$relative_path = str_ireplace('/hybridhome/', '', $url_path);

// パスを / で分割
$segments = explode('/', trim($relative_path, '/'));

// ファイル名（.php）が含まれていれば除外
if (preg_match('/\.php$/', end($segments))) {
  array_pop($segments);
}

$target_dir = '';
if (isset($segments[0])) {
  $target_dir .= $segments[0] . '/';
}
if (isset($segments[1]) && $segments[1] !== '') {
  $target_dir .= $segments[1] . '/';
}
if (isset($segments[2]) && $segments[2] !== '') {
  $target_dir .= $segments[2] . '/';
}
// 最終的な画像パス
$this_img_path = $ROOT_DIR . 'assets/img/' . $target_dir;

//////////WP読み込み//////////
if (!defined('ABSPATH')) {
	// wp-load.php の実パス（/shishi/wp-new/wp-load.php）
	$wp_load = $root_path . 'wp-new/wp-load.php';

	if (file_exists($wp_load)) {
		require_once $wp_load;
	}
}


//////////以下細々とした変数//////////
//電話・メールなど
$tels = array(
    'text' => '#',
    'link' => '#',
);
$mail = "#";

$business_hours = "9:00～18:00（日・月曜・祝祭日定休）";

//外部リンク
$map_link = "https://maps.app.goo.gl/LQ2RPs2KQAe8apW97";
$map_hon = "https://maps.app.goo.gl/nAJmoiXcoLQdkX1W8";
$map_machida = "https://maps.app.goo.gl/668Lpuf4FxtQJpbT6";
$map_yirigaoka = "https://maps.app.goo.gl/FDMnrxKxHHvfGSnP6";
$map_link_omiya = "https://maps.app.goo.gl/Npsx5kPraqatgR929";

//内部リンク
$about_link = $ROOT_DIR . 'about/';
$reform_link = $ROOT_DIR . 'reform/';
$works_link = $ROOT_DIR . 'works/';
$voice_link = $ROOT_DIR . 'voice/';
$staff_link = $ROOT_DIR . 'staff/';
$partner_link = $ROOT_DIR . 'partner/';
$news_link = $ROOT_DIR . 'news/';
$company_link = $ROOT_DIR . 'company/';
$recruit_link = $ROOT_DIR . 'recruit/';
$contact_link = $ROOT_DIR . 'contact/';

//

?>
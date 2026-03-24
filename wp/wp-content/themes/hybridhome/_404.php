<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE = 'お探しのページは見つかりませんでした';
$DESCRIPTION   = "株式会社獅子お知らせ一覧ページです。お知らせ・お役立ち情報・子供むけレシピブックなどカテゴリごとに紐付けされた記事の一覧を表示しています。";
$KEYWORDS      = '';
$swiper = "false";
$Ymd = date("Ymd-Hi");
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
	// ローカル環境
	include($_SERVER['DOCUMENT_ROOT'] . '/shishi/assets/inc/root.php');
} else if($host == 'as-check.jp') {
	// デモ環境
	include($_SERVER['DOCUMENT_ROOT'] . '/shishi/assets/inc/root.php');
} else {
	// 本番環境
	include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/root.php');
}
$UNIQUE_CSS    = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/news.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "news";
$this_img_path = $img_path .  "news/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<div class="of-wrap">
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<main>
	<header class="fv -detail -nf">
		<div class="inr -w1360">
			<h1 class="nf">お探しのページは見つかりませんでした</h1>
			<p class="paren-label -xlarge -theme"><span>404 Not Found</span></p>
			<p class="logo-symbol"><img src="<?= $img_path; ?>common/logo-symbol.svg" alt="" class="svg" decoding="async"></p>
			<p class="n_txt -mid -large">お探しのページは見つかりませんでした。<br>お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。
			</p>

		</div>
	</header>
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>
</div><!-- /of_wrap -->
</body>
</html>

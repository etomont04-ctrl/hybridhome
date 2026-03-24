<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE         = get_the_title() . '｜お知らせ';
$excerpt = get_the_excerpt();
$DESCRIPTION   = wp_trim_words($excerpt, $num_words = 100, $more = "...");
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
$this_img_path = $img_path .  "blog/";

//以下出力用
// アイキャッチURLを取得（フルサイズ）
$thumb_url = get_the_post_thumbnail_url( null, 'full' );

// フォールバック（アイキャッチが無い場合）
$thumb_fallback = $img_path . 'common/kiji-dummy.webp';
$thumb_src = $thumb_url ? $thumb_url : $thumb_fallback; // サムネイル用

 // 投稿に紐づく category を取得
$cats = get_the_category();

// --- NEW判定（公開から14日以内） ---
//$is_new = ( get_the_time('U') >= current_time('timestamp') - 14 * DAY_IN_SECONDS );

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
	<header class="fv -detail">
		<div class="inr -w1360">
			<h1 class="sY95"><?php the_title(); ?></h1>
			<p class="logo-symbol"><img src="<?= $img_path; ?>common/logo-symbol.svg" alt="" class="svg" decoding="async"></p>
			<div class="meta_area">
				<span class="day"><?php the_time('Y.m.d'); ?></span>
			<?php
$cats = get_the_category(); // 今の投稿に紐づくカテゴリ一覧

if (!empty($cats)) :
	foreach ($cats as $cat) :
		$cat_link = get_category_link($cat->term_id);
		?>
		<a href="<?php echo esc_url($cat_link); ?>" class="cate"><?php echo esc_html($cat->name); ?></a>
		<?php
	endforeach;
endif;
?>
			</div>
			<div class="pan">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<a href="<?= $news_link; ?>">お知らせ</a>
				<p class="-sY95"><?php echo esc_html( wp_trim_words( get_the_title(), 15, '…' ) ); ?></p>
			</div><!-- /pan -->
		</div><!-- /inr -->
		<figure class="fv_img inr -h1320 -w1440">
			<img src="<?php echo esc_url( $thumb_src ); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" class="fit_img">
		</figure><!--/fv_img -->
	</header><!-- /fv -->
	<article class="news-kiji_wrap inr -w1360">
		<div class="kiji_area">
			<?php the_content(); ?>
		</div><!--/ kiji_area -->
		<aside class="category_area inview">
			<figure class="shishishi -rl">
				<img src="<?= $img_path; ?>common/shishishi10.svg" alt="" decoding="async">
			</figure>
			<?php
			$cats = get_the_category(); // WP標準：投稿のカテゴリ取得
			if (!empty($cats)) {
				foreach ($cats as $cat) {
					$cat_link = get_category_link($cat->term_id);
					$cat_name = $cat->name;
					?>
					<a href="<?= esc_url($cat_link); ?>" class="link_wrap">
						<p class="link_btn -black">
							<span class="text"><?= esc_html($cat_name); ?></span>
							<i class="arrow -white -w17" aria-hidden="true">
								<img src="<?= esc_url($img_path); ?>common/arrow.svg" alt="" decoding="async" class="svg">
							</i>
						</p>
					</a>
					<?php
				}
			}
			?>
		</aside><!-- /category_area -->
	</article><!-- /news-kiji_wrap -->
	<footer class="news-kiji_link_footer inr -w1360 -detail">
		<a href="<?= $news_link; ?>" class="link_wrap -list-link">
			<p class="link_btn -black -xlarge">
				<span class="en -ls12">news list</span>
				<i class="arrow -white -w17 -blank" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
			</p>
		</a>
		<div class="archive-pager_nav">
		<?php
		$prev_post = get_previous_post();
		$next_post = get_next_post();
		// 矢印アイコン
		$arrow_html = '<i class="arrow -white -w17" aria-hidden="true"><img src="' . esc_url($img_path . 'common/arrow.svg') . '" alt="" decoding="async" class="svg"></i>';
		// 前
		$prev_url = $prev_post ? get_permalink($prev_post->ID) : '';
		$prev_class = 'prev only-arrow' . ( $prev_post ? '' : ' is-disabled' );
		?>
		<a
			class="<?php echo esc_attr($prev_class); ?>"
			<?php if ($prev_post) : ?>
				href="<?php echo esc_url($prev_url); ?>"
			<?php else : ?>
				aria-disabled="true"
				tabindex="-1"
				role="link"
			<?php endif; ?>
		><?php echo $arrow_html; ?></a>
		<?php
		// 次
		$next_url = $next_post ? get_permalink($next_post->ID) : '';
		$next_class = 'next only-arrow' . ( $next_post ? '' : ' is-disabled' );
		?>
		<a
			class="<?php echo esc_attr($next_class); ?>"
			<?php if ($next_post) : ?>
				href="<?php echo esc_url($next_url); ?>"
			<?php else : ?>
				aria-disabled="true"
				tabindex="-1"
				role="link"
			<?php endif; ?>
		><?php echo $arrow_html; ?></a>
		</div>
	</footer><!-- /news-kiji_link_footer -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
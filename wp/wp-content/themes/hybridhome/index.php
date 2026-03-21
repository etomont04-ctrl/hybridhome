<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
if ( is_category() ) {
	$TITLE = 'お知らせ｜' . single_cat_title( '', false );
} else {
	$TITLE = 'お知らせ';
}
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
	<header class="fv no-img">
		<div class="inr -w1360">
			<h1><img src="<?= $this_img_path; ?>page-title.svg" alt="お知らせ" decoding="async"></h1>
			<p class="paren-label -xlarge -theme"><span>news</span></p>
			<p class="logo-symbol"><img src="<?= $img_path; ?>common/logo-symbol.svg" alt="" class="svg" decoding="async"></p>
			<div class="category_links">
				<nav class="category_links_inr">
					<?php
					$categories = get_categories([
						'orderby'	=> 'name',
						'order'		=> 'ASC',
						'hide_empty'=> true,
					]);

					// 現在のカテゴリID（カテゴリページのみ）
					$current_cat_id = 0;
					if (is_category()) {
						$current_cat_id = (int) get_queried_object_id();
					}

					// 「カテゴリ一覧じゃない（= カテゴリページ以外）」なら「すべての記事」に this
					$all_class = is_category() ? '' : ' class="this"';

					// 「すべての記事」リンク（投稿一覧ページにしたいURLへ）
					// 例：ブログトップが home_url('/blog/') の場合などに変更してOK
					$all_link = get_post_type_archive_link('post');
					if (!$all_link) {
						$all_link = home_url('/');
					}
					?>
					<a href="<?php echo esc_url($all_link); ?>"<?php echo $all_class; ?>>すべての記事</a>

					<?php foreach ($categories as $cat) :
						$cat_link = get_category_link($cat->term_id);
						$cat_name = $cat->name;

						$is_current = ($current_cat_id && (int) $cat->term_id === $current_cat_id);
						$class_attr = $is_current ? ' class="this"' : '';
						?>
						<a href="<?php echo esc_url($cat_link); ?>"<?php echo $class_attr; ?>>
							<?php echo esc_html($cat_name); ?>
						</a>
					<?php endforeach; ?>
				</nav><!-- /category_links_inr -->
			</div><!-- /category_links -->
			<div class="pan">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p class="-sY95"><?= $TITLE; ?></p>
			</div><!-- /pan -->
			<p class="counter">
				<?php
				// 全投稿（postタイプ）の“公開済み”件数
				$total_posts = (int) wp_count_posts( 'post' )->publish;
				// トップだけで表示したい場合
				if ( is_front_page() || is_home() ) : ?>
					<span class="total"><?php echo number_format_i18n( $total_posts ); ?></span>
				<?php endif; ?>
				<?php if ( is_category() ) : ?>
				<?php
				global $wp_query; // カテゴリアーカイブのメインクエリ
				$cat_count = isset($wp_query->found_posts) ? (int) $wp_query->found_posts : 0;
				echo number_format_i18n( $cat_count ); ?>
				<?php endif; ?>
			</p>
		</div><!-- /inr -->
	</header>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php
		// NEW判定（公開から14日以内）
		$is_new = ( get_the_time('U') >= current_time('timestamp') - 14 * DAY_IN_SECONDS );

		// カテゴリ名（未分類・未設定対策）
		$category  = get_the_category();
		$cat_name  = !empty($category) ? $category[0]->cat_name : '';
		$cat_slug  = !empty($category) ? $category[0]->slug : '';

		//サムネイル取得
		$top_slug = function_exists('get_top_category_slug_for_post')
			? get_top_category_slug_for_post( get_the_ID() )
			: '';
		$thumb = get_the_post_thumbnail_url(null, 'full');
		$img_src = $thumb ?: $img_path . 'common/kiji-dummy.webp';

		//本文取得
		$content = get_the_content();
		$content = wp_strip_all_tags($content);
		$content = preg_replace('/\s+/', ' ', $content);

	?>
	<article class="news-kiji_link_wrap inr -w1360 inview bt">
		<a href="<?php the_permalink(); ?>" class="news-kiji_link">
			<div class="img-area <?php if ( $is_new ) : ?>new<?php endif; ?>">
				<figure class="img"><img src="<?php echo esc_url( $img_src ); ?>" class="fit_img" alt="" decoding="async"></figure>
			</div>
			<div class="text-area">
				<span class="day"><?php the_time('Y.m.d'); ?></span>
				<p class="cate"><?php echo esc_html( $cat_name ); ?></p>
				<h2><?php the_title(); ?></h2>
				<p class="n_txt -mid"><?php echo esc_html(mb_strimwidth($content, 0, 100, '…', 'UTF-8')); ?></p>
				<p class="only-arrow -large">
					<i class="arrow -white -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
				</p>
			</div>
		</a><!-- news-kiji_link-->
	</article><!-- /news-kiji_link_wrap -->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); // カスタムWP_Queryを使っている場合のみ ?>
	<?php else : ?>
		<p class="no-post">ただいま記事の準備中です</p>
	<?php endif; ?>
	<footer class="news-kiji_link_footer inr -w1360">
		<?php dq_render_archive_pager(); ?>
	</footer><!-- /news-kiji_link_footer -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>
</div><!-- /of_wrap -->
</body>
</html>

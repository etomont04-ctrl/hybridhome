<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE         = 'お知らせ';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/news.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/news.js?'.$Ymd.'"></script>';
$uri = "news";
$this_img_path = $img_path .  "news/";
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
	<section class="news-fv inview">
		<div class="inr -m2000">
			<?php if (is_home()) : ?>
			<h1 class="inview">
				<img src="<?= $this_img_path; ?>title.webp" alt="お知らせ" decoding="async">
			</h1>
			<?php elseif (is_category()) : ?>
			<?php $current_term = get_queried_object(); ?>
			<h1 class="title-text inview">
				<span class="en">Category</span>
				<span class="ja scaleX-text"><?= esc_html($current_term->name); ?></span>
			</h1>
			<?php endif; ?>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>お知らせ</p>
			</div>
			<figure class="cloud -left"><img src="<?= $img_path; ?>news/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>news/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->
	<section class="news_wrap">
		<div class="inr -w1400 round-con base-wrap -archive">
			<div class="bird-area">

				<figure class="bird bird01 <?php if  (is_category()) : ?> tab_off<?php endif; ?>"><img src="<?= $this_img_path; ?>fv-bird01.webp" alt="" decoding="async"></figure>

				<figure class="bird bird02 inview sb"><img src="<?= $this_img_path; ?>fv-bird02.webp" alt="" decoding="async"></figure>
			</div>
			<?php get_template_part('inc/category'); ?>
			<?php if ( have_posts() ) : ?>
			<div class="archive_wrap">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				$categories = get_the_category();
				$category_name = ! empty( $categories ) ? $categories[0]->name : '';				?>

				<a href="<?php the_permalink(); ?>" class="news-link">
					<div class="img_area">
						<figure class="img_inr">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium', array( 'class' => 'fit_img' ) ); ?>
							<?php else : ?>
								<img src="<?= $img_path; ?>common/news-dummy.jpg" alt="" decoding="async" class="fit_img">
							<?php endif; ?>
						</figure>
					</div>
					<div class="link_text">
						<div>
							<span class="en"><?php echo get_the_date( 'Y m.d' ); ?></span>
							<?php if ( $category_name ) : ?>
								<span class="cate"><?php echo esc_html( $category_name ); ?></span>
							<?php endif; ?>
							<p><?php the_title(); ?></p>
						</div>
					</div>
				</a>
			<?php endwhile; ?>
			</div>
			<?php get_template_part( 'inc/pagination' ); ?>
			<!-- /archive-pager -->

			<?php else : ?>
				<div class="archive_wrap">
					<p class="non-text">記事がありません。</p>
				</div>
			<?php endif; ?>
		</div><!-- /inr -->
	</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>

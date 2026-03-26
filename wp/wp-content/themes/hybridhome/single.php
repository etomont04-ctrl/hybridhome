<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE         = get_the_title() . '｜お知らせ';
$DESCRIPTION   = "";
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
<div class="of-wrap">
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<main>
	<section class="news-fv inview">
		<div class="inr  -detail -m2000">
			<?php
			$categories = get_the_category();
			?>
			<span class="en day"><?php echo get_the_date('Y. m.d'); ?></span>
			<?php if ( ! empty( $categories ) ) : ?>
				<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="cate">
					<?php echo esc_html( $categories[0]->name ); ?>
				</a>
			<?php endif; ?>
			<h1 class="inview"><?php the_title(); ?></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>news/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>news/fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->
	<section class="news_wrap">
		<div class="inr -w1400 base-wrap">
			<div class="bird-area">
				<figure class="bird bird01 tab_off"><img src="<?= $this_img_path; ?>fv-bird01.webp" alt="" decoding="async"></figure>
				<figure class="bird bird02 inview sb tab_off"><img src="<?= $this_img_path; ?>fv-bird02.webp" alt="" decoding="async"></figure>
			</div>
			<?php get_template_part('inc/category'); ?>
			<div class="detail_wrap round-con">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php
				$news_main_image = SCF::get('news_main-image');
				$news_main_image_url = '';
				$news_main_image_alt = '';

				if (!empty($news_main_image)) {
					if (is_array($news_main_image)) {
						$news_main_image_url = !empty($news_main_image['url']) ? $news_main_image['url'] : '';
						$news_main_image_alt = !empty($news_main_image['alt']) ? $news_main_image['alt'] : '';
					} else {
						$news_main_image_url = wp_get_attachment_image_url($news_main_image, 'full');
						$news_main_image_alt = get_post_meta($news_main_image, '_wp_attachment_image_alt', true);
					}
				}
				?>

				<figure class="main-image">
					<?php if (!empty($news_main_image_url)) : ?>
						<img src="<?= esc_url($news_main_image_url); ?>" alt="<?= esc_attr($news_main_image_alt); ?>" decoding="async" class="fit_img">
					<?php else : ?>
						<img src="<?= $this_img_path; ?>detail-dummy.jpg" alt="" decoding="async" class="fit_img">
					<?php endif; ?>
				</figure>


				<div class="kiji_area">
						<?php the_content(); ?>
				</div>
				<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();
				?>
				<div class="d-pager_wrap">

					<?php if ( $prev_post ) : ?>
						<a href="<?= esc_url( get_permalink( $prev_post->ID ) ); ?>" class="pager_link -prev">
							<figure class="img">
								<?php if ( has_post_thumbnail( $prev_post->ID ) ) : ?>
									<?= get_the_post_thumbnail( $prev_post->ID, 'medium', array( 'class' => 'fit_img' ) ); ?>
								<?php else : ?>
									<img src="<?= $img_path; ?>common/news-dummy.jpg" alt="" decoding="async" class="fit_img">
								<?php endif; ?>
							</figure>
							<div class="text_area">
								<div>
									<span class="en">
										<i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>
										Prev
									</span>
									<p><?= esc_html( wp_trim_words( get_the_title( $prev_post->ID ), 20, '…' ) ); ?></p>
								</div>
							</div>
						</a>
					<?php endif; ?>
					<?php if ( $next_post ) : ?>
						<a href="<?= esc_url( get_permalink( $next_post->ID ) ); ?>" class="pager_link -next">
							<figure class="img">
								<?php if ( has_post_thumbnail( $next_post->ID ) ) : ?>
									<?= get_the_post_thumbnail( $next_post->ID, 'medium', array( 'class' => 'fit_img' ) ); ?>
								<?php else : ?>
									<img src="<?= $img_path; ?>common/news-dummy.jpg" alt="" decoding="async" class="fit_img">
								<?php endif; ?>
							</figure>
							<div class="text_area">
								<div>
									<span class="en">
										Next
										<i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>
									</span>
									<p><?= esc_html( wp_trim_words( get_the_title( $next_post->ID ), 20, '…' ) ); ?></p>
								</div>
							</div>
						</a>
					<?php endif; ?>
					<a href="<?= esc_url( $news_link ); ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">ブログ一覧</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div><!-- d-pager_area -->

				<?php endwhile; endif; ?>
			</div><!-- /detail_wrap -->

		</div><!-- /inr -->
	</section><!-- / news_wrap -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
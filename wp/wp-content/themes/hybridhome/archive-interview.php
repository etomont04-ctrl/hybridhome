<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE = '社員インタビュー';
$DESCRIPTION   = "株式会社獅子 社員インタビュー一覧ページです。各社員インタビュー記事の一覧を表示しています。";
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
$UNIQUE_CSS    = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/interview.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "interview";
$this_img_path = $img_path .  "interview/";
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
	<header class="fv no-img">
		<div class="inr -w1360">
			<h1><img src="<?= $this_img_path; ?>page-title.svg" alt="社員インタビュー" decoding="async"></h1>
			<p class="paren-label -xlarge -theme"><span>interview</span></p>
			<div class="pan">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p class="-sY95"><?= $TITLE; ?></p>
			</div>
		</div>
		<p class="logo-symbol"><img src="<?= $img_path; ?>common/logo-symbol.svg" alt="" class="svg" decoding="async"></p>
	</header>
	<!-- /fv -->
	<div class="interview_link_wrap">
	<div class="inr -w1380">
		<ul class="interview_links">
			<?php
			// 全件表示（ページネーション無し）
			$q = new WP_Query([
				'post_type'			=> 'interview',
				'posts_per_page'	=> -1,
				'post_status'		=> 'publish',
				'orderby'	=> 'menu_order',
				'order'		=> 'DEC',
				'no_found_rows'		=> true,
			]);

			if ($q->have_posts()) :
				$i = 1;
				while ($q->have_posts()) :
					$q->the_post();

					$post_id = get_the_ID();

					// num（01,02...）
					$num = sprintf('%02d', $i);

					// サムネイル
					$thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					if (!$thumb_url) {
						// サムネが無い時の保険（必要なら差し替え）
						$thumb_url = '';
					}

					// SCF（Smart Custom Fields）
					$name		= trim((string) SCF::get('name'));
					$initial	= trim((string) SCF::get('initial'));
					$roma		= trim((string) SCF::get('roma'));
					$job		= trim((string) SCF::get('job'));
					$join		= trim((string) SCF::get('join'));
					$birthplace	= trim((string) SCF::get('birthplace'));

					// 表示名：initial があれば initial、無ければ記事タイトル
					$use_initial = ($initial !== '');
					$disp_name = $use_initial ? $initial : get_the_title();

					// eng：roma を出す。ただし initial がある場合は出さない（＝name優先の時だけ出す）
					$show_roma = ($initial === '' && $roma !== '');

					// data： join年入社／birthplace県出身
					$data_parts = [];
					if ($join !== '') {
						$data_parts[] = esc_html($join) . '年入社';
					}
					if ($birthplace !== '') {
						$data_parts[] = esc_html($birthplace) . '出身';
					}
					$data_text = implode('／', $data_parts);
					?>
					<li class="inview bt_one">
						<a href="<?php the_permalink(); ?>">
							<p class="num"><span><?php echo esc_html($num); ?></span></p>

							<div class="img_area shift-bg -rb -little">
								<figure class="">
									<?php if ($thumb_url) : ?>
										<img src="<?php echo esc_url($thumb_url); ?>" class="fit_img" alt="<?php echo esc_attr(get_the_title()); ?>">
									<?php endif; ?>
								</figure>

								<?php if ($job !== '') : ?>
									<span class="post"><?php echo esc_html($job); ?></span>
								<?php endif; ?>
							</div>

							<div class="text_area">
								<?php if ($disp_name !== '') : ?>
									<p class="name<?php echo $use_initial ? ' initial' : ''; ?>">
										<?php echo esc_html($disp_name); ?>
									</p>
								<?php endif; ?>
								<?php if ($show_roma) : ?>
									<p class="eng"><?php echo esc_html($roma); ?></p>
								<?php endif; ?>

								<?php if ($data_text !== '') : ?>
									<p class="data"><?php echo $data_text; ?></p>
								<?php endif; ?>
							</div>
						</a>
					</li>
					<?php
					$i++;
					endwhile;
					wp_reset_postdata();
					endif;
					?>
				</ul>
			</div><!-- inr -->
		</div><!-- /interview_link_wrap -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>
</div><!-- /of_wrap -->
</body>
</html>

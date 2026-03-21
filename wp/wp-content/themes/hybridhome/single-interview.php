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
$UNIQUE_CSS    = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS    .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/interview.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/interview.js?'.$Ymd.'"></script>';

$uri = "interview";
$this_img_path = $img_path .  "interview/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
	<?php wp_head(); ?>
</head>
<body id="top">
<div class="of-wrap">
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<main>

	<?php


the_post();

$post_id = get_the_ID();

// メイン画像（基本は添付ID）
$main_id = SCF::get('main-image', $post_id);

$fv_img = '';
if (is_numeric($main_id) && (int) $main_id > 0) {
	$fv_img = wp_get_attachment_image_url((int) $main_id, 'full');
}

// 保険：取れなければアイキャッチ
if (!$fv_img) {
	$fv_img = get_the_post_thumbnail_url($post_id, 'full');
}

// SCF
$name		= trim((string) SCF::get('name', $post_id));
$initial	= trim((string) SCF::get('initial', $post_id));
$roma		= trim((string) SCF::get('roma', $post_id));
$job		= trim((string) SCF::get('job', $post_id));
$join		= trim((string) SCF::get('join', $post_id));
$birthplace	= trim((string) SCF::get('birthplace', $post_id));

// 表示名：initial、無ければ ページタイトル
$disp_name = $initial !== '' ? $initial : get_the_title();
$show_roma = ($initial === '' && $roma !== '');

// data： join年入社／birthplace県出身
$data_parts = [];
if ($join !== '') {
	$data_parts[] = $join . '年入社';
}
if ($birthplace !== '') {
	$data_parts[] = $birthplace . '県出身';
}
$data_text = implode('／', array_map('esc_html', $data_parts));
?>
	<header class="interview-fv">
		<div class="inr -w1360">
			<div class="img_area inview">
				<figure class="shift-bg -rt">
					<img src="<?php echo esc_url($fv_img); ?>" class="fit_img" alt="">
				</figure>
				<div class="pan">
					<a href="<?php echo esc_url($ROOT_DIR); ?>">TOP</a>
					<a href="<?php echo esc_url($interview_link); ?>">社員インタビュー</a>
					<p class="-sY95">個人インタビュー</p>
				</div>
			</div>

			<div class="text_area">
				<div>
					<?php if ($job !== '') : ?>
						<p class="post -sY90">
							<i class="dq-icon -semi-large">
								<img src="<?php echo esc_url($img_path . 'common/dq-icon.svg'); ?>" class="svg" alt="" decoding="async">
							</i>
							<?php echo esc_html($job); ?>
						</p>
					<?php else: ?>
						<p class="post -none">
							<i class="dq-icon -semi-large">
								<img src="<?php echo esc_url($img_path . 'common/dq-icon.svg'); ?>" class="svg" alt="" decoding="async">
							</i>
						</p>
					<? endif; ?>

					<h1 class="-sY90"><?php echo esc_html($disp_name !== '' ? $disp_name : get_the_title()); ?></h1>

					<?php if ($show_roma) : ?>
						<span class="eng -sY90"><?php echo esc_html($roma); ?></span>
					<?php endif; ?>

					<ul class="data">
						<?php if ($join !== '') : ?>
							<li><?php echo esc_html($join); ?>年入社</li>
						<?php endif; ?>
						<?php if ($birthplace !== '') : ?>
							<li><?php echo esc_html($birthplace); ?>出身</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>

		<p class="logo-symbol">
			<img src="<?php echo esc_url($img_path . 'common/logo-symbol.svg'); ?>" alt="" class="svg" decoding="async">
		</p>
	</header>
	<!-- /fv -->
	<section class="qa">
		<figure class="shishishi inr -w1420">
			<img src="<?= $img_path; ?>common/shishishi01.svg" alt="" decoding="async">
		</figure>
		<?php

if (!class_exists('SCF')) return;

$post_id = get_the_ID();

// 繰り返しグループ "questions" を取得（配列）
$questions = SCF::get('questions', $post_id);
if (empty($questions) || !is_array($questions)) return;

$per_slide = 6;
$qa_num = 1;
$total = count($questions);
?>

		<div class="qa-splide inr -w1360">
			<div>
				<ul>

							<li class="qa_slide">
					<?php for ($i = 0; $i < $total; $i++) : ?>
						<?php
						$item = $questions[$i];

						// SCFのサブフィールド名
						$question = isset($item['question']) ? $item['question'] : '';
						$comment  = isset($item['comment'])  ? $item['comment']  : ''; // 回答

						// 6件ごとにスライド開始
						if ($i % $per_slide === 0) :
							?>
							<?php
						endif;
						?>

							<?php
							// 両方空ならスキップしたい場合はここで continue でもOK（番号処理注意）
							?>

							<div class="qa_item">
								<p class="num "><span class="-sY95"><?= esc_html(str_pad((string) $qa_num, 2, '0', STR_PAD_LEFT)); ?></span></p>

								<?php if ($question !== '') : ?>
									<p class="question"><?= esc_html($question); ?></p>
								<?php endif; ?>

								<?php if ($comment !== '') : ?>
									<p class="answer">
										<i class="dq-icon -small">
											<img src="<?= esc_url($img_path . 'common/dq-icon.svg'); ?>" class="svg" alt="" decoding="async">
										</i>
										<?= nl2br(esc_html($comment)); ?>
									</p>
								<?php endif; ?>
							</div><!--/qa_item -->

						<?php
						$qa_num++;
							?>
					<?php endfor; ?>
							</li>


				</ul>
			</div>
			<div class="qa_nav">
			<?php
			$prev = get_previous_post(false);
			$next = get_next_post(false);

			$prev_url = $prev ? get_permalink($prev) : '';
			$next_url = $next ? get_permalink($next) : '';
			?>

			<a
				href="<?= $prev_url ? esc_url($prev_url) : '#'; ?>"
				class="qa_btn -prev<?= $prev_url ? '' : ' -disabled'; ?>"
				<?= $prev_url ? '' : 'aria-disabled="true" tabindex="-1"'; ?>
			>
				<i class="arrow -white -w17" aria-hidden="true">
					<img src="<?= esc_url($img_path); ?>common/arrow.svg" alt="" decoding="async" class="svg">
				</i>
				<span class="sY90">PREV</span>
			</a>

			<a
				href="<?= $next_url ? esc_url($next_url) : '#'; ?>"
				class="qa_btn -next<?= $next_url ? '' : ' -disabled'; ?>"
				<?= $next_url ? '' : 'aria-disabled="true" tabindex="-1"'; ?>
			>
				<span class="sY90">NEXT</span>
				<i class="arrow -white -w17" aria-hidden="true">
					<img src="<?= esc_url($img_path); ?>common/arrow.svg" alt="" decoding="async" class="svg">
				</i>
			</a>
<!-- 				<button type="button" class="qa_btn -prev" data-qa-prev><i class="arrow -white -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i><span class="sY90">PREV</span></button>
				<button type="button" class="qa_btn -next" data-qa-next><span class="sY90">NEXT</span><i class="arrow -white -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></button> -->
			</div>
		</div>
	</section><!-- /qa -->

	<?php include($root_path . '/assets/inc/interview.php'); ?>
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
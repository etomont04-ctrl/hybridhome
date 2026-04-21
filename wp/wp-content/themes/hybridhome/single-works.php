<?php
ob_start();//出力バッファリングを有効にする
wp_head();// echo
$wp_head = ob_get_contents();   // 変数に代入
ob_end_clean();
$URL = get_the_permalink();
$TITLE         = get_the_title() . '｜施工実績';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/BeerSlider.css">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/works.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/BeerSlider.min.js"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/works.js?'.$Ymd.'"></script>';
$uri = "works";
$this_img_path = $img_path .  "works/";
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
	<section class="works_d-fv inview">
		<div class="inr -m2000">
			<?php
			$works_main_image = SCF::get('works_main-image');
			$works_main_image_url = '';
			if (!empty($works_main_image)) {
				$works_main_image_url = wp_get_attachment_image_url($works_main_image, 'full');
			}
			?>
			<figure class="fv-img">
				<?php if (!empty($works_main_image_url)) : ?>
					<img src="<?= esc_url($works_main_image_url); ?>" alt="" class="fit_img">
				<?php else : ?>
					<img src="<?= $img_path; ?>news/detail-dummy.jpg" alt="" class="fit_img">
				<?php endif; ?>
			</figure>
			<figure class="cloud -risu inview sb"><img src="<?= $this_img_path; ?>works_d-fv-risu.webp" alt="" decoding="async"></figure>
			<figure class="cloud -duck inview"><img src="<?= $this_img_path; ?>works_d-fv-duck.webp" alt="" decoding="async"></figure>
			<div class="d-info_area">
				<h1 class="inview">
					<span class="scaleX-wrap">
						<span
							class="scaleX"
							data-scale="0.75"
							data-text="<?php the_title_attribute(); ?>"
						><?php the_title(); ?></span>
					</span>
				</h1>
				<div class="cates">
			<?php
$renovation_terms = get_the_terms(get_the_ID(), 'renovation');
$area_terms = get_the_terms(get_the_ID(), 'area');

$area_term = (!empty($area_terms) && !is_wp_error($area_terms)) ? $area_terms[0] : null;
$area_link = ($area_term) ? get_term_link($area_term) : '';
?>

<?php if (!empty($renovation_terms) && !is_wp_error($renovation_terms)) : ?>
	<?php foreach ($renovation_terms as $renovation_term) : ?>
		<?php
		$renovation_slug = $renovation_term->slug;
		$renovation_link = get_term_link($renovation_term);

		if (is_wp_error($renovation_link)) continue;
		if ($area_term && is_wp_error($area_link)) $area_term = null;

		if ($renovation_slug !== 'uchi' && $renovation_slug !== 'soto') continue;
		?>

		<div class="area-links">
			<?php if ($renovation_slug === 'uchi') : ?>
				<a href="<?= esc_url($renovation_link); ?>" class="area-links_item -reno -uchi">
					<picture>
						<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>works_d-uchi-sp.png">
						<img src="<?= $this_img_path; ?>works_d-uchi.png" alt="うちリノ">
					</picture>
				</a>

			<?php elseif ($renovation_slug === 'soto') : ?>
				<a href="<?= esc_url($renovation_link); ?>" class="area-links_item -reno -soto">
					<picture>
						<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>works_d-soto-sp.png">
						<img src="<?= $this_img_path; ?>works_d-soto.png" alt="そとリノ">
					</picture>
				</a>
			<?php endif; ?>

			<?php if ($area_term) : ?>
				<a href="<?= esc_url($area_link); ?>" class="area-links_item -town"><?= esc_html($area_term->name); ?></a>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
					<?php
					$commitment_terms = get_the_terms(get_the_ID(), 'commitment');
					?>

					<?php if (!empty($commitment_terms) && !is_wp_error($commitment_terms)) : ?>
						<div class="tags">
							<?php foreach ($commitment_terms as $commitment_term) : ?>
								<?php $commitment_link = get_term_link($commitment_term); ?>
								<a href="<?= esc_url($commitment_link); ?>">#<?= esc_html($commitment_term->name); ?></a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php
			$read_text = SCF::get('read-text');
			$read_image = SCF::get('read-image');
			$read_image_url = '';
			$read_image_alt = '';
			if (!empty($read_image)) {
				$read_image_url = wp_get_attachment_image_url($read_image, 'full');
				$read_image_alt = get_post_meta($read_image, '_wp_attachment_image_alt', true);
			}
			?>
			<?php if (!empty($read_text)) : ?>
				<div class="read">
					<?php if (!empty($read_image_url)) : ?>
						<div class="img_area">
							<div class="img_wrap">
								<figure class="img">
									<img
										src="<?= esc_url($read_image_url); ?>"
										alt="<?= esc_attr($read_image_alt); ?>"
										decoding="async"
										class="fit_img"
									>
								</figure>
							</div>
						</div>
					<?php endif; ?>

					<p><?= nl2br(esc_html($read_text)); ?></p>
				</div>
			<?php endif; ?>
				<div class="data">
					<div class="tit_area">
						<h3><span class="scaleX-only">物件情報</span></h3>
						<span class="en">Data</span>
					</div>
					<?php
				$works_data = SCF::get('works-data');
							?>

			<?php if (!empty($works_data) && is_array($works_data)) : ?>
				<?php
					$works_data_first = array_slice($works_data, 0, 4);
					$works_data_second = array_slice($works_data, 4);
				?>

				<?php if (!empty($works_data_first)) : ?>
					<dl class="data-list">
						<?php foreach ($works_data_first as $item) : ?>
							<?php
								$data_title = !empty($item['data-title']) ? $item['data-title'] : '';
								$data_text = !empty($item['data-text']) ? $item['data-text'] : '';
							?>
							<?php if ($data_title || $data_text) : ?>
								<div class="data_row">
									<dt class="data_head"><?= esc_html($data_title); ?></dt>
									<dd class="data_body"><?= nl2br(esc_html($data_text)); ?></dd>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</dl>
				<?php endif; ?>

				<?php if (!empty($works_data_second)) : ?>
					<dl class="data-list">
						<?php foreach ($works_data_second as $item) : ?>
							<?php
								$data_title = !empty($item['data-title']) ? $item['data-title'] : '';
								$data_text = !empty($item['data-text']) ? $item['data-text'] : '';
							?>
							<?php if ($data_title || $data_text) : ?>
								<div class="data_row">
									<dt class="data_head"><?= esc_html($data_title); ?></dt>
									<dd class="data_body"><?= nl2br(esc_html($data_text)); ?></dd>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</dl><!-- /data-list -->
				<?php endif; ?>
			<?php endif; ?>
				</div>
			</div>
		</div>
	</section><!-- /works-d_fv -->
<?php
$works_free_group = SCF::get( 'works-free' );
?>

<?php if ( ! empty( $works_free_group ) && is_array( $works_free_group ) ) : ?>
	<?php foreach ( $works_free_group as $item ) : ?>
		<?php
		$before_img_id = ! empty( $item['before-img'] ) ? (int) $item['before-img'] : 0;
		$after_img_id = ! empty( $item['after-img'] ) ? (int) $item['after-img'] : 0;
		$works_free_text = ! empty( $item['works-free-texts'] ) ? $item['works-free-texts'] : '';

		$before_img_url = $before_img_id ? wp_get_attachment_image_url( $before_img_id, 'full' ) : '';
		$after_img_url = $after_img_id ? wp_get_attachment_image_url( $after_img_id, 'full' ) : '';

		$before_img_alt = $before_img_id ? get_post_meta( $before_img_id, '_wp_attachment_image_alt', true ) : '';
		$after_img_alt = $after_img_id ? get_post_meta( $after_img_id, '_wp_attachment_image_alt', true ) : '';
		?>
		<section class="bf_area kiji inr -w1400">
			<?php if ( $after_img_url && $before_img_url ) : ?>
				<div class="beer-slider">
					<img src="<?php echo esc_url( $after_img_url ); ?>" alt="<?php echo esc_attr( $after_img_alt ); ?>" decoding="async">

					<div class="beer-reveal">
						<img src="<?php echo esc_url( $before_img_url ); ?>" alt="<?php echo esc_attr( $before_img_alt ); ?>" decoding="async">
					</div>
				</div>
				<!-- /beer-slider -->
			<?php endif; ?>

			<div class="kiji_area">
				<?php
				if ( ! empty( $works_free_text ) ) {
					echo apply_filters( 'the_content', $works_free_text );
				}
				?>
			</div>
		</section>
	<?php endforeach; ?>
<?php endif; ?>

	<div class="works-detail">
		<div class="inr -w1400 round-con">
<?php
$works_plans_group = SCF::get( 'works-plans' );
?>
<?php if ( ! empty( $works_plans_group ) && is_array( $works_plans_group ) ) : ?>
	<?php foreach ( $works_plans_group as $item ) : ?>
		<?php
		$works_plans_title = ! empty( $item['works-plans_title'] ) ? $item['works-plans_title'] : '';
		$works_plans_en = ! empty( $item['works-plans_en'] ) ? $item['works-plans_en'] : '';
		$works_plans_texts = ! empty( $item['works-plans_texts'] ) ? $item['works-plans_texts'] : '';

		if ( is_array( $works_plans_texts ) ) {
			$works_plans_texts = ! empty( $works_plans_texts[0] ) ? $works_plans_texts[0] : '';
		}
		?>
		<section class="works-detail_sec">
			<div class="tit_area">
				<h2 class="scaleX-wrap">
					<span
						class="scaleX"
						data-scale="0.75"
						data-text="<?php echo esc_attr( $works_plans_title ); ?>"
					><?php echo esc_html( $works_plans_title ); ?></span>
				</h2>
				<?php if ( $works_plans_en ) : ?>
					<span class="en"><?php echo esc_html( $works_plans_en ); ?></span>
				<?php endif; ?>
			</div>

			<div class="story_sec kiji_area">
				<?php
				if ( ! empty( $works_plans_texts ) ) {
					echo apply_filters( 'the_content', $works_plans_texts );
				}
				?>
			</div>
		</section><!-- /works-detail_sec -->
	<?php endforeach; ?>
<?php endif; ?>

		<?php
		$works_voice_tit01 = SCF::get('works-voice_tit01');
		$works_voice_list01 = SCF::get('works-voice_list01');

		$works_voice_tit02 = SCF::get('works-voice_tit02');
		$works_voice_list02 = SCF::get('works-voice_list02');

		$works_voice_tit03 = SCF::get('works-voice_tit03');
		$works_voice_list03 = SCF::get('works-voice_list03');
		?>
		<?php if (!empty($works_voice_tit01)) : ?>
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="お客様の声">お客様の声</span>
					</h2>
					<span class="en">Voice</span>
				</div>

				<?php if (!empty($works_voice_list01) && is_array($works_voice_list01)) : ?>
					<div class="voice-sec">
						<h3>
							<span class="scaleX-wrap">
								<span class="scaleX" data-scale="0.75" data-text="<?= esc_attr($works_voice_tit01); ?>"><?= esc_html($works_voice_tit01); ?></span>
							</span>
							<span class="balloon_tail"></span>
						</h3>

						<ul class="voice-qa">
							<?php foreach ($works_voice_list01 as $item) : ?>
								<?php
								$voice_icon = !empty($item['works-voice_icon01']) ? $item['works-voice_icon01'] : '';
								$voice_name = !empty($item['works-voice_name01']) ? $item['works-voice_name01'] : '';
								$voice_text = !empty($item['works-voice_text01']) ? $item['works-voice_text01'] : '';

								$voice_icon_url = '';
								$voice_icon_alt = '';

								if (!empty($voice_icon)) {
									$voice_icon_url = wp_get_attachment_image_url($voice_icon, 'full');
									$voice_icon_alt = get_post_meta($voice_icon, '_wp_attachment_image_alt', true);
								}
								?>
								<li>
									<div class="img_area">
										<div class="img_wrap">
											<figure class="img">
												<?php if (!empty($voice_icon_url)) : ?>
													<img src="<?= esc_url($voice_icon_url); ?>" alt="<?= esc_attr($voice_icon_alt); ?>" decoding="async" class="fit_img">
												<?php else : ?>
													<img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img">
												<?php endif; ?>
											</figure>
											<span class="name"><?= esc_html($voice_name); ?></span>
										</div>
									</div>
									<div class="text_area">
										<p><?= nl2br(esc_html($voice_text)); ?></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div><!-- / voice-sec -->
				<?php endif; ?>

				<?php if (!empty($works_voice_tit02) && !empty($works_voice_list02) && is_array($works_voice_list02)) : ?>
					<div class="voice-sec">
						<h3>
							<span class="scaleX-wrap">
								<span class="scaleX" data-scale="0.75" data-text="<?= esc_attr($works_voice_tit02); ?>"><?= esc_html($works_voice_tit02); ?></span>
							</span>
							<span class="balloon_tail"></span>
						</h3>

						<ul class="voice-qa">
							<?php foreach ($works_voice_list02 as $item) : ?>
								<?php
								$voice_icon = !empty($item['works-voice_icon02']) ? $item['works-voice_icon02'] : '';
								$voice_name = !empty($item['works-voice_name02']) ? $item['works-voice_name02'] : '';
								$voice_text = !empty($item['works-voice_text02']) ? $item['works-voice_text02'] : '';

								$voice_icon_url = '';
								$voice_icon_alt = '';

								if (!empty($voice_icon)) {
									$voice_icon_url = wp_get_attachment_image_url($voice_icon, 'full');
									$voice_icon_alt = get_post_meta($voice_icon, '_wp_attachment_image_alt', true);
								}
								?>
								<li>
									<div class="img_area">
										<div class="img_wrap">
											<figure class="img">
												<?php if (!empty($voice_icon_url)) : ?>
													<img src="<?= esc_url($voice_icon_url); ?>" alt="<?= esc_attr($voice_icon_alt); ?>" decoding="async" class="fit_img">
												<?php else : ?>
													<img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img">
												<?php endif; ?>
											</figure>
											<span class="name"><?= esc_html($voice_name); ?></span>
										</div>
									</div>
									<div class="text_area">
										<p><?= nl2br(esc_html($voice_text)); ?></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div><!-- / voice-sec -->
				<?php endif; ?>

				<?php if (!empty($works_voice_tit03) && !empty($works_voice_list03) && is_array($works_voice_list03)) : ?>
					<div class="voice-sec">
						<h3>
							<span class="scaleX-wrap">
								<span class="scaleX" data-scale="0.75" data-text="<?= esc_attr($works_voice_tit03); ?>"><?= esc_html($works_voice_tit03); ?></span>
							</span>
							<span class="balloon_tail"></span>
						</h3>

						<ul class="voice-qa">
							<?php foreach ($works_voice_list03 as $item) : ?>
								<?php
								$voice_icon = !empty($item['works-voice_icon03']) ? $item['works-voice_icon03'] : '';
								$voice_name = !empty($item['works-voice_name03']) ? $item['works-voice_name03'] : '';
								$voice_text = !empty($item['works-voice_text03']) ? $item['works-voice_text03'] : '';

								$voice_icon_url = '';
								$voice_icon_alt = '';

								if (!empty($voice_icon)) {
									$voice_icon_url = wp_get_attachment_image_url($voice_icon, 'full');
									$voice_icon_alt = get_post_meta($voice_icon, '_wp_attachment_image_alt', true);
								}
								?>
								<li>
									<div class="img_area">
										<div class="img_wrap">
											<figure class="img">
												<?php if (!empty($voice_icon_url)) : ?>
													<img src="<?= esc_url($voice_icon_url); ?>" alt="<?= esc_attr($voice_icon_alt); ?>" decoding="async" class="fit_img">
												<?php else : ?>
													<img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img">
												<?php endif; ?>
											</figure>
											<span class="name"><?= esc_html($voice_name); ?></span>
										</div>
									</div>
									<div class="text_area">
										<p><?= nl2br(esc_html($voice_text)); ?></p>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div><!-- / voice-sec -->
				<?php endif; ?>
			</section>
		<?php endif; ?>

<?php
$hitokoto_icon = SCF::get('hitokoto_icon');
$hitokoto_name = SCF::get('hitokoto_name');
$hitokoto_text = SCF::get('hitokoto_text');
$hitokoto_img = SCF::get('hitokoto_img');

$hitokoto_icon_url = '';
$hitokoto_icon_alt = '';
$hitokoto_img_url = '';
$hitokoto_img_alt = '';

if (!empty($hitokoto_icon)) {
	$hitokoto_icon_url = wp_get_attachment_image_url($hitokoto_icon, 'full');
	$hitokoto_icon_alt = get_post_meta($hitokoto_icon, '_wp_attachment_image_alt', true);
}

if (!empty($hitokoto_img)) {
	$hitokoto_img_url = wp_get_attachment_image_url($hitokoto_img, 'full');
	$hitokoto_img_alt = get_post_meta($hitokoto_img, '_wp_attachment_image_alt', true);
}
?>

<?php if (!empty($hitokoto_text)) : ?>
	<section class="works-detail_sec">
		<div class="voice-sec -hitokoto">
			<h3>
				<span class="scaleX-wrap">
					<span class="scaleX" data-scale="0.75" data-text="担当者からひとこと">担当者からひとこと</span>
				</span>
				<span class="balloon_tail"></span>
			</h3>

			<ul class="voice-qa -photo">
				<li>
					<div class="img_area">
						<div class="img_wrap">
							<figure class="img">
								<?php if (!empty($hitokoto_icon_url)) : ?>
									<img src="<?= esc_url($hitokoto_icon_url); ?>" alt="<?= esc_attr($hitokoto_icon_alt); ?>" decoding="async" class="fit_img">
								<?php else : ?>
									<img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img">
								<?php endif; ?>
							</figure>
							<span class="name"><?= esc_html($hitokoto_name); ?></span>
						</div>
					</div>

					<div class="text_area">
						<p><?= nl2br(esc_html($hitokoto_text)); ?></p>
					</div>
				</li>
				<?php if (!empty($hitokoto_img_url)) : ?>
				<li>
					<div class="photo_area">
						<figure class="img">
							<img src="<?= esc_url($hitokoto_img_url); ?>" alt="<?= esc_attr($hitokoto_img_alt); ?>" decoding="async" class="fit_img">
						</figure>
					</div>
				</li>
				<?php endif; ?>
			</ul>
		</div><!-- / voice-sec -->
	</section>
<?php endif; ?>
			<div class="d-pager_wrap">
				<?php
$current_id = get_the_ID();

$works_posts = get_posts(array(
	'post_type' => 'works',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'ASC',
	'fields' => 'ids',
));

$prev_post = null;
$next_post = null;

if (!empty($works_posts)) {
	$current_index = array_search($current_id, $works_posts, true);

	if ($current_index !== false) {
		if (isset($works_posts[$current_index - 1])) {
			$prev_post = get_post($works_posts[$current_index - 1]);
		}

		if (isset($works_posts[$current_index + 1])) {
			$next_post = get_post($works_posts[$current_index + 1]);
		}
	}
}

$works_link = get_post_type_archive_link('works');
if (!$works_link) {
	$works_link = home_url('/works/');
}
?>

	<?php if (!empty($prev_post)) : ?>
		<?php
		$prev_link = get_permalink($prev_post->ID);
		$prev_title = get_the_title($prev_post->ID);
		$prev_thumb = get_the_post_thumbnail_url($prev_post->ID, 'medium_large');
		?>
		<a href="<?= esc_url($prev_link); ?>" class="pager_link -prev">
			<figure class="img">
				<?php if (!empty($prev_thumb)) : ?>
					<img src="<?= esc_url($prev_thumb); ?>" alt="<?= esc_attr($prev_title); ?>" decoding="async" class="fit_img">
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
					<p><?= esc_html(wp_trim_words($prev_title, 20, '…')); ?></p>
				</div>
			</div>
		</a>
	<?php endif; ?>
	<?php if (!empty($next_post)) : ?>
		<?php
		$next_link = get_permalink($next_post->ID);
		$next_title = get_the_title($next_post->ID);
		$next_thumb = get_the_post_thumbnail_url($next_post->ID, 'medium_large');
		?>
		<a href="<?= esc_url($next_link); ?>" class="pager_link -next">
			<figure class="img">
				<?php if (!empty($next_thumb)) : ?>
					<img src="<?= esc_url($next_thumb); ?>" alt="<?= esc_attr($next_title); ?>" decoding="async" class="fit_img">
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
					<p><?= esc_html(wp_trim_words($next_title, 20, '…')); ?></p>
				</div>
			</div>
		</a>
	<?php endif; ?>
		<a href="<?= esc_url($works_link); ?>" class="link_wrap">
		<p class="link_btn -blue">
			<span class="text">施工事例一覧</span>
			<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
		</p>
	</a>
		</div><!-- d-pager_area -->
	</div><!-- /inr -->
</div><!-- / works-detail -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
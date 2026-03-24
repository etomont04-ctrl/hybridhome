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
					<img src="<?= $this_img_path; ?>fv-dummy.webp" alt="" class="fit_img">
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
					<div class="area-links">
					<?php
					$renovation_terms = get_the_terms(get_the_ID(), 'renovation');

					if (!empty($renovation_terms) && !is_wp_error($renovation_terms)) :
						$renovation_term = $renovation_terms[0];
						$renovation_slug = $renovation_term->slug;
						$renovation_link = get_term_link($renovation_term);
					?>

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
					<?php endif; ?>
					<?php
					$area_terms = get_the_terms(get_the_ID(), 'area');
					if (!empty($area_terms) && !is_wp_error($area_terms)) :
						$area_term = $area_terms[0];
						$area_link = get_term_link($area_term);
					?>
						<a href="<?= esc_url($area_link); ?>" class="area-links_item -town"><?= esc_html($area_term->name); ?></a>
					<?php endif; ?>
					</div>
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

	<section class="bf_area kiji inr -w1400">
		<div class="beer-slider">
			<img src="<?php echo $this_img_path; ?>after-img.webp" alt="" decoding="async">
			<div class="beer-reveal">
				<img src="<?php echo $this_img_path; ?>before-img.webp" alt="" decoding="async">
			</div>
		</div>
		<!-- /beer-slider -->
		<p>築40年を迎え、より快適に安心して暮らせるように耐震補強を計画。補強工事に伴い外壁の解体が必要となる為、モルタルから耐久性の良いサイディングに張替え、屋根も重い瓦から軽いスレートに葺き替えました。併せて、サッシも交換し、屋根や壁には断熱材を入れて、家全体の断熱性能も向上させました。</p>
	</section>

	<section class="bf_area kiji inr -w1400">
		<div class="beer-slider">
			<img src="<?php echo $this_img_path; ?>after-img.webp" alt="" decoding="async">
			<div class="beer-reveal">
				<img src="<?php echo $this_img_path; ?>before-img.webp" alt="" decoding="async">
			</div>
		</div>
		<!-- /beer-slider -->
		<p>築40年を迎え、より快適に安心して暮らせるように耐震補強を計画。補強工事に伴い外壁の解体が必要となる為、モルタルから耐久性の良いサイディングに張替え、屋根も重い瓦から軽いスレートに葺き替えました。併せて、サッシも交換し、屋根や壁には断熱材を入れて、家全体の断熱性能も向上させました。</p>
	</section>


	<div class="works-detail">
		<div class="inr -w1400 round-con">
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="リフォームプランリフォームプランリフォームプラン">リフォームプランリフォームプランリフォームプラン</span>
					</h2>
					<span class="en">Plan</span>
				</div>
				<p class="n_txt">プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。</p>
				<div class="column-image -full">
					<div>
						<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="着工から完成まで">着工から完成まで</span>
					</h2>
					<span class="en">Story</span>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="解体工事">解体工事</span>
						</span>
					</h3>
					<p>長年お世話になった建物を解体し、構造体だけの姿にしていきます。今回は思い出の残る和室の欄間をきれいに解体し保存し改装時に使用しました。</p>
					<div class="column-image -third">
						<div>
							<div class="img">
								<img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async">
							</div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="こだわりのリフォーム">こだわりのリフォーム</span>
					</h2>
					<span class="en">My Reform Style</span>
				</div>
				<p>リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。</p>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="木の香りが漂う和モダンなリビングダイニング。">木の香りが漂う和モダンなリビングダイニング。</span>
						</span>
					</h3>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
							<p>長年お世話になった建物を解体し、構造体だけの姿にしていきます。今回は思い出の残る和室の欄間をきれいに解体し保存し改装時に使用しました。</p>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -half">
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>

						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
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

				<li>
					<div class="photo_area">
						<figure class="img">
							<?php if (!empty($hitokoto_img_url)) : ?>
								<img src="<?= esc_url($hitokoto_img_url); ?>" alt="<?= esc_attr($hitokoto_img_alt); ?>" decoding="async" class="fit_img">
							<?php else : ?>
								<img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img">
							<?php endif; ?>
						</figure>
					</div>
				</li>
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
					<img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img">
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

	<a href="<?= esc_url($works_link); ?>" class="link_wrap">
		<p class="link_btn -blue">
			<span class="text">施工事例一覧</span>
			<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
		</p>
	</a>

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
					<img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img">
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

			</div><!-- d-pager_area -->
		</div><!-- /inr -->
	</ddiv><!-- / works-detail -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
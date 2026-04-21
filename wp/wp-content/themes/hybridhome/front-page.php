<?php
$TITLE         = '';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="assets/css/top.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="assets/js/top.js?'.$Ymd.'"></script>';
$uri = "index";
$this_img_path = $img_path .  "top/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<body id="top">
<?php include($root_path . 'assets/inc/gtag.php'); ?>
<div class="of-wrap">
	<main>
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<section id="kv" class="inview">
		<div class="inr -m2000">
			<div class="index_head_link-area">
				<nav class="main-nav tab_off">
					<a href="<?= $about_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>私たちについて</a>
					<a href="<?= $reform_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>リフォーム＆リノベーション</a>
					<a href="<?= $works_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>施工事例</a>
					<a href="<?= $voice_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お客様の声</a>
					<a href="<?= $staff_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>社員紹介</a>
					<a href="<?= $partner_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>ハイブリッドの仲間たち</a>
					<p class="en copy">(C) Hybrid Home inc.</p>
				</nav>
				<div class="info-nav tab_off">
					<a href="<?= $company_link; ?>" class="w_link">会社概要</a>
					<a href="<?= $recruit_link; ?>" class="w_link">採用情報</a>
					<a href="<?= $contact_link; ?>" class="contact_link"><img src="<?= $img_path; ?>common/head_contact-btn_txt.png" alt="お問い合わせ" decoding="async"></a>
				</div>
			</div>
			<h1 class="kv_logo"><img src="<?= $img_path; ?>common/logo.png" alt="ハイブリッドホーム HYBRID HOME" decoding="async"></h1>
			<h2 class="kv_chatch"><img src="<?= $this_img_path; ?>chatch.webp" alt="WELCOME TO HYBRID HOME!" decoding="async"></h2>
			<div class="yane-area">
				<h3 class="kv_sub-chatch"><img src="<?= $this_img_path; ?>sub-chatch.webp" alt="ようこそ！ハイブリットホームへ" decoding="async"></h3>
				<figure class="yane">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>fv-yane_sp.webp">
						<img src="<?= $this_img_path; ?>fv-yane.webp" alt="">
					</picture>
			</div>
			<!-- <a href="#" class="blog-link_area">
				<figure class="img_area"><img src="<?= $this_img_path; ?>blog-dummy.png" alt="" decoding="async" class="fit_img"></figure>
				<div class="text_area">
					<div>
						<span class="en">2025 12.30</span>
						<p>ブログの最新記事が１件のみ表示されます。</p>
					</div>
				</div>
			</a> -->
			<?php
			/* ==========================================================================
				ブログ最新記事を1件取得
			========================================================================== */
			$latest_post_query = new WP_Query(array(
				'post_type'				=> 'post',
				'posts_per_page'		=> 1,
				'post_status'			=> 'publish',
				'ignore_sticky_posts'	=> true,
			));
			if ($latest_post_query->have_posts()) :
				while ($latest_post_query->have_posts()) :
					$latest_post_query->the_post();
					$post_url		= get_permalink();
					$post_title		= get_the_title();
					$post_date		= get_the_date('Y.m.d');
					$thumb_url		= get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
			<a href="<?= esc_url($post_url); ?>" class="blog-link_area">
				<figure class="img_area">
					<?php if ($thumb_url) : ?>
						<img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($post_title); ?>" decoding="async" class="fit_img">
					<?php else : ?>
						<img src="<?= $this_img_path; ?>blog-dummy.png" alt="" decoding="async" class="fit_img">
					<?php endif; ?>
				</figure>
				<div class="text_area">
					<div>
						<span class="en"><?= esc_html($post_date); ?></span>
						<p><?= esc_html(mb_strimwidth($post_title, 0, 60, '…', 'UTF-8')); ?></p>
					</div>
				</div>
			</a>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
			<figure class="bird bird01"><img src="<?= $img_path; ?>common/illust/bird01.webp" alt="" decoding="async"></figure>
			<figure class="bird bird02 tab_off"><img src="<?= $img_path; ?>common/illust/bird02.webp" alt="" decoding="async"></figure>
			<?php
			$month = (int) date('n');
			$season = '-winter';
			if ($month >= 3 && $month <= 5) {
				$season = '-spring';
			} elseif ($month >= 6 && $month <= 8) {
				$season = '-summer';
			} elseif ($month >= 9 && $month <= 11) {
				$season = '-autumn';
			} else {
				$season = '-winter';
			}
			?>
			<div class="bg-leaf_area <?= $season; ?>">
				<div class="bg-leaf leaf01 tab_off"></div>
				<div class="bg-leaf leaf02"></div>
				<div class="bg-leaf leaf03"></div>
				<div class="bg-leaf leaf04"></div>
				<div class="bg-leaf leaf05 tab_off"></div>
			</div>
			<div class="bg-cloud_area">
				<figure class="bg-cloud bgcloud01"><img src="<?= $this_img_path; ?>fv-bg_cloud01.png" alt="" decoding="async"></figure>
				<figure class="bg-cloud bgcloud02"><img src="<?= $this_img_path; ?>fv-bg_cloud02.png" alt="" decoding="async"></figure>
			</div>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02 tab_off"><img src="<?= $this_img_path; ?>fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud03"><img src="<?= $this_img_path; ?>fv-cloud03.webp" alt="">
			</figure>
			<div class="town_bg"></div>
			<figure class="cloud cloud04">
				<picture>
					<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>fv-cloud04-sp.webp">
					<img src="<?= $this_img_path; ?>fv-cloud04.webp" alt="">
				</picture>
			</figure>
			<figure class="cloud cloud05"><img src="<?= $this_img_path; ?>fv-cloud05.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud06"><img src="<?= $this_img_path; ?>fv-cloud06.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud07 tab_on"><img src="<?= $this_img_path; ?>fv-cloud07.webp" alt="" decoding="async"></figure>
		</div>
	</section><!-- /kv -->
	<section class="sv">
		<div class="inr -m2000">
			<figure class="sv-house tab_off"><img src="<?= $this_img_path; ?>sv-house.webp" alt="" decoding="async"></figure>
			<figure class="sv-cloud"><img src="<?= $this_img_path; ?>sv-cloud.webp" alt="" decoding="async"></figure>
		</div>
	</section><!-- /sv -->
	<section class="intro">
		<div class="inr -m2000 -rg">
			<figure class="yane tab_off"><img src="<?= $this_img_path; ?>intro_yane.webp" alt="" decoding="async"></figure>
			<div class="intro-contents_wrap">
				<figure class="yane tab_on"><img src="<?= $this_img_path; ?>intro_yane-sp.webp" alt="" decoding="async"></figure>
				<div class="intro-text_area">
					<h2><img src="<?= $this_img_path; ?>intro_title.webp" alt="ハイブリッドホームは、家を大切に住みつぎたい人のためのリフォーム&リノベーション会社です。" decoding="async"></h2>
					<p class="intro-text -mid">家を大切にすることは、<br class="pc_off">そこに住む自分を大切にすること。<br>そこで暮らした時間ごと大切にするために、<br class="pc_off">再び家へ息吹を吹き込みましょう。<br><br class="pc_off">わたしたちハイブリッドホームが全力でお手伝いいたします。
					</p>
					<a href="<?= $about_link ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">私たちについて</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div>
				<figure class="bird tab_on"><img src="<?= $img_path; ?>common/illust/bird02.webp" alt="" decoding="async"></figure>
				<figure class="tab-kumo kumo01 tab_on">
					<img src="<?= $this_img_path; ?>intro_tab-kumo01.webp" alt="" decoding="async">
				</figure>
				<figure class="tab-kumo kumo02 tab_on">
					<img src="<?= $this_img_path; ?>intro_tab-kumo02.webp" alt="" decoding="async">
				</figure>
				<figure class="tab-kumo kumo03 tab_on">
					<img src="<?= $this_img_path; ?>intro_tab-kumo03.webp" alt="" decoding="async">
				</figure>
				<div class="intro-house_area">
					<figure class="house_wrap">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>intro_illust-wrap-sp.webp">
							<img src="<?= $this_img_path; ?>intro_illust-wrap.webp" alt="">
						</picture>
					</figure>
					<div class="intro-house-illust_area">
						<figure class="move-illust tori01"><img src="<?= $this_img_path; ?>intro_tori01.webp" alt="" decoding="async"></figure>
						<figure class="move-illust tori_kage01"><img src="<?= $this_img_path; ?>intro_tori01-kage.webp" alt="" decoding="async"></figure>
						<figure class="move-illust tori02"><img src="<?= $this_img_path; ?>intro_tori02.webp" alt="" decoding="async"></figure>
						<figure class="move-illust tori_kage02"><img src="<?= $this_img_path; ?>intro_tori02-kage.webp" alt="" decoding="async"></figure>
						<div class="move-illust man-area">
							<figure><img src="<?= $this_img_path; ?>intro_man-area.webp" alt="" decoding="async"></figure>
							<figure class="move-illust man"><img src="<?= $this_img_path; ?>intro_man.webp" alt="" decoding="async"></figure>
						</div>
						<div class="move-illust duck-area">
							<figure><img src="<?= $this_img_path; ?>intro_duck-base.webp" alt="" decoding="async"></figure>
							<figure class="move-illust pc"><img src="<?= $this_img_path; ?>intro_duck-pc.webp" alt="" decoding="async"></figure>
							<figure class="move-illust duck"><img src="<?= $this_img_path; ?>intro_duck.webp" alt="" decoding="async"></figure>
						</div>
						<figure class="move-illust hebi"><img src="<?= $this_img_path; ?>intro_hebi.webp" alt="" decoding="async"></figure>
						<figure class="move-illust girl"><img src="<?= $this_img_path; ?>intro_girl.webp" alt="" decoding="async"></figure>
						<figure class="move-illust risu01"><img src="<?= $this_img_path; ?>intro_risu01.webp" alt="" decoding="async"></figure>
						<figure class="move-illust risu02"><img src="<?= $this_img_path; ?>intro_risu02.webp" alt="" decoding="async"></figure>
						<figure class="move-illust tora"><img src="<?= $this_img_path; ?>intro_tora.webp" alt="" decoding="async"></figure>
						<figure class="illust_base"><img src="<?= $this_img_path; ?>intro_illust-base.webp"></figure>
					</div><!-- /intro-house_illust_area -->
				</div><!-- /intro-house_area -->
				<figure class="kumo kumonchu sb inview"><img src="<?= $this_img_path; ?>intro_kumonchu.webp" alt="" decoding="async"></figure>
				<figure class="kumo duck sb inview"><img src="<?= $this_img_path; ?>intro_kumoduck.webp" alt="" decoding="async"></figure>

			</div><!-- /intro-contents_wrap -->
		</div><!-- /inr -->
	</section><!-- /intro -->
	<section class="project">
		<div class="inr -m2000 -lrg">
			<div class="title_area">
				<h2><img src="<?= $this_img_path; ?>project_title.webp" alt="施工事例" decoding="async"></h2>
				<span class="en">Featured project</span>
				<a href="<?= $works_link ?>" class="link_wrap tab_off">
					<p class="link_btn -red">
						<span class="text">事例一覧へ</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div><!-- /title_area -->
			<?php
			/* ==========================================================================
				pick up works 取得
			========================================================================== */
			$pickup_query = new WP_Query(array(
				'post_type'				=> 'works',
				'posts_per_page'		=> 3,
				'post_status'			=> 'publish',
				'ignore_sticky_posts'	=> true,
			));

			if ($pickup_query->have_posts()) :
			?>
			<section class="picks">
				<div class="splide js-picks-splide" aria-label="おすすめ事例">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
							while ($pickup_query->have_posts()) :
								$pickup_query->the_post();

								$post_id			= get_the_ID();
								$post_url			= get_permalink();
								$post_title			= get_the_title();
								$thumb_url			= get_the_post_thumbnail_url($post_id, 'full');

								/* --------------------------------------------------------------------------
									renovation タクソノミー（クラス用）
								-------------------------------------------------------------------------- */
								$renovation_terms	= get_the_terms($post_id, 'renovation');
								$photo_class		= '';

								if (!empty($renovation_terms) && !is_wp_error($renovation_terms)) {
									$photo_class = $renovation_terms[0]->slug;
								}

								/* --------------------------------------------------------------------------
									area タクソノミー（1件表示）
								-------------------------------------------------------------------------- */
								$area_terms			= get_the_terms($post_id, 'area');
								$area_name			= '';

								if (!empty($area_terms) && !is_wp_error($area_terms)) {
									$area_name = $area_terms[0]->name;
								}

								/* --------------------------------------------------------------------------
									commitment タクソノミー（複数表示）
								-------------------------------------------------------------------------- */
								$commitment_terms	= get_the_terms($post_id, 'commitment');
							?>
							<li class="splide__slide">
								<article class="pick-card">
									<a class="pick-card__link" href="<?= esc_url($post_url); ?>">
										<div class="pick-card__photo <?= esc_attr($photo_class); ?>">
											<?php if ($thumb_url) : ?>
												<img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($post_title); ?>" decoding="async" class="fit_img">
											<?php else : ?>
												<img src="<?= $this_img_path; ?>project_img.webp" alt="" decoding="async" class="fit_img">
											<?php endif; ?>
										</div>

										<div class="pick-card__body">
											<h3 class="pick-card__title"><?= esc_html($post_title); ?></h3>

											<div class="pick-card__tags">
												<?php
												if (!empty($commitment_terms) && !is_wp_error($commitment_terms)) :
													foreach ($commitment_terms as $term) :
												?>
													<span>#<?= esc_html($term->name); ?></span>
												<?php
													endforeach;
												endif;
												?>
											</div>

											<?php if ($area_name) : ?>
												<span class="pick-card__area"><?= esc_html($area_name); ?></span>
											<?php endif; ?>
										</div>
									</a>
								</article>
							</li><!-- /splide__slide -->
							<?php endwhile; ?>
						</ul><!-- /splide__list -->
					</div><!-- /splide__track -->
				</div><!-- /splide -->
			</section><!-- /picks -->
			<?php
				wp_reset_postdata();
			endif;
			?>
			<a href="<?= $works_link ?>" class="link_wrap tab_on">
				<p class="link_btn -red">
					<span class="text">事例一覧へ</span>
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</p>
			</a>
			<figure class="project_base">
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>project_base-sp.webp">
					<img src="<?= $this_img_path; ?>project_base.webp" alt="">
				</picture>
			</figure>
			<figure class="risu inview">
				<picture>
					<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>project-risu-sp.webp">
					<img src="<?= $this_img_path; ?>project-risu.webp" alt="">
				</picture>
			</figure>
			<figure class="kumo">
				<img src="<?= $this_img_path; ?>project-kumo.webp" alt="" decoding="async">
			</figure>
		</div><!-- /inr -->
	</section><!-- /project -->
	<section class="reform">
		<div class="inr -m2000 -lrg">
			<div class="reform-bath_area">
				<figure class="bubble">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>reform-bubble-sp.webp">
						<img src="<?= $this_img_path; ?>reform-bubble.webp" alt="">
					</picture>
				</figure>
				<figure class="wani sb inview">
					<img src="<?= $this_img_path; ?>reform-wani.webp" alt="" decoding="async">
				</figure>
				<figure class="pillar tab_on">
					<img src="<?= $this_img_path; ?>reform_sp-pillar.webp" alt="" decoding="async">
				</figure>
				<figure class="illust_base sb inview">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>reform_illust-base-sp.webp">
						<img src="<?= $this_img_path; ?>reform_illust-base.webp" alt="">
					</picture>
				</figure>
			</div><!--/reform-bus_area -->
			<div class="reform-contents_area">
				<div class="reform-light_area">
					<figure class="light light01">
						<img src="<?= $this_img_path; ?>reform-light01.webp" alt="" decoding="async">
					</figure>
					<figure class="light light02">
						<img src="<?= $this_img_path; ?>reform-light02.webp" alt="" decoding="async">
					</figure>
					<figure class="light light03">
						<img src="<?= $this_img_path; ?>reform-light03.webp" alt="" decoding="async">
					</figure>
				</div>
				<figure class="photo_area">
					<img src="<?= $this_img_path; ?>reform_photo.webp" alt="" decoding="async">
				</figure>
				<h2>
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>reform_title-sp.webp">
						<img src="<?= $this_img_path; ?>reform_title.webp" alt="リフォーム&リノベーション Reform&Renovation">
					</picture>
				</h2>
				<div class="text_area">
					<p class="n_txt">ハイブリッドホームのリフォーム・リノベーションは単なる改修ではありません。<br>お客様一人ひとりの「暮らしやすい住まい」を、これまでの経験とプロの目線に裏打ちされたプランを作成し、本当にお客様が暮らしやすい住まいを実現します。</p>
					<a href="<?= $reform_link ?>" class="link_wrap">
						<p class="link_btn -red">
							<span class="text">詳細ページへ</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div>
				<div class="reform-loop">
					<div class="reform-loop__inner">
						<div class="reform-loop__img">
							<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async">
							<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async">
						</div>
						<div class="reform-loop__img">
							<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async">
							<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async">
						</div>
					</div>
				</div>
				<figrure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>reform-contents_base-sp.webp">
						<img src="<?= $this_img_path; ?>reform-contents_base.webp" alt="">
					</picture>
				</figure>
			</div><!-- /reform-contents_area -->
		</div><!-- /inr -->
	</section><!-- /reform -->
	<section class="staff">
		<div class="inr -m2000 -lrg">
			<div class="staff-kitchen_area">
				<figure class="kuma">
					<img src="<?= $this_img_path; ?>staff-kuma.webp" alt="" decoding="async">
				</figure>
				<figure class="table">
					<img src="<?= $this_img_path; ?>staff-table.webp" alt="" decoding="async">
				</figure>
				<figure class="men">
					<img src="<?= $this_img_path; ?>staff-men.webp" alt="" decoding="async">
				</figure>
				<figure class="kemuri">
					<img src="<?= $this_img_path; ?>staff-kemuri.webp" alt="" decoding="async">
				</figure>
				<figure class="pillar tab_on">
					<img src="<?= $this_img_path; ?>staff_sp-pillar.webp" alt="" decoding="async">
				</figure>
				<figure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>staff_illust-base-sp.webp">
						<img src="<?= $this_img_path; ?>staff_illust-base.webp" alt="">
					</picture>
				</figure>
			</div><!--/staff-bus_area -->
			<div class="staff-contents_area">
				<div class="staff-loop">
					<div class="staff-loop__inner">
						<img src="<?= $this_img_path; ?>staff_loop-img01.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img02.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img03.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img04.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img05.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img06.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img07.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img08.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img09.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img10.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img11.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img12.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img13.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img14.webp" decoding="async"  class="staff-loop__img">
					</div>
					<div class="staff-loop__inner">
						<img src="<?= $this_img_path; ?>staff_loop-img01.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img02.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img03.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img04.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img05.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img06.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img07.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img08.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img09.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img10.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img11.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img12.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img13.webp" decoding="async"  class="staff-loop__img">
						<img src="<?= $this_img_path; ?>staff_loop-img14.webp" decoding="async"  class="staff-loop__img">
					</div>
				</div>
				<div class="text_area">
				<h2><img src="<?= $this_img_path; ?>staff_title.webp" alt="社員紹介 Staff Profiles" decoding="async"></h2>
					<p class="n_txt">ハイブリッドホームのリフォーム・リノベーションは単なる改修ではありません。<br>お客様一人ひとりの「暮らしやすい住まい」を、これまでの経験とプロの目線に裏打ちされたプランを作成し、本当にお客様が暮らしやすい住まいを実現します。</p>
					<a href="<?= $staff_link ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">詳細ページへ</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div>
				<figure class="risu sb inview"><img src="<?= $this_img_path; ?>staff-risu.webp" alt="" decoding="async"></figure>
				<figure class="kaidan"><img src="<?= $this_img_path; ?>staff-kaidan.webp" alt="" decoding="async"></figure>
				<figrure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>staff-contents_base-sp.webp">
						<img src="<?= $this_img_path; ?>staff-contents_base.webp" alt="">
					</picture>
				</figure>
			</div><!-- /staff-contents_area -->
			<figure class="kumo tab_on"><img src="<?= $this_img_path; ?>staff-kumo.webp" alt="" decoding="async"></figure>

		</div><!-- /inr -->
	</section><!-- /staff -->
	<section class="partners">
		<div class="inr -m2000 -lrg">
			<div class="partners-construction_area">
				<figure class="duck">
					<img src="<?= $this_img_path; ?>partners-duck.webp" alt="" decoding="async">
				</figure>
				<figure class="risu"><img src="<?= $this_img_path; ?>partners-risu.webp" alt="" decoding="async"></figure>
				<figure class="risu-kage"><img src="<?= $this_img_path; ?>partners-risu-kage.webp" alt="" decoding="async"></figure>
				<figure class="pillar tab_on">
					<img src="<?= $this_img_path; ?>partners_sp-pillar.webp" alt="" decoding="async">
				</figure>
				<figure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>partners_illust-base-sp.webp">
						<img src="<?= $this_img_path; ?>partners_illust-base.webp" alt="">
					</picture>
				</figure>
			</div><!--/partners-construction_area -->
			<div class="partners-contents_area">
				<h2><img src="<?= $this_img_path; ?>partners_title.webp" alt="ハイブリッドの仲間たち Our Partners" decoding="async"></h2>
				<div class="text_area">
					<p class="n_txt">ハイブリッドホームでは一つの工事を仕上げるのに、多くの職人たちと連携しています。<br class="pc_off">
それぞれの専門の分野で活躍する腕利きの職人たちにハイブリッドホームの家づくりについて話を聞きました。</p>
					<a href="<?= $partner_link; ?>" class="link_wrap">
						<p class="link_btn -red">
							<span class="text">詳細ページへ</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div>
				<figure class="light inview"><img src="<?= $this_img_path; ?>partners-light.webp" alt="" decoding="async"></figure>
				<div class="photo_area inview bt">
					<figure class="photo photo01"><img src="<?= $this_img_path; ?>partners-photo01.webp" alt="" decoding="async"></figure>
					<figure class="photo photo02">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>partners-photo02-sp.webp">
							<img src="<?= $this_img_path; ?>partners-photo02.webp" alt="">
						</picture>
					</figure>
					<figure class="photo photo03">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>partners-photo03-sp.webp">
							<img src="<?= $this_img_path; ?>partners-photo03.webp" alt="">
						</picture>
					</figure>
				</div>
				<figrure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>partners-contents_base-sp.webp">
						<img src="<?= $this_img_path; ?>partners-contents_base.webp" alt="">
					</picture>
				</figure>
				<div class="partners-loop">
					<div class="partners-loop__track">
						<div class="partners-loop__unit">
							<img src="<?= $this_img_path; ?>partners_loop-txt.webp" alt="Our Partner" decoding="async" class="partners-loop__img">
							<img src="<?= $this_img_path; ?>partners_loop-txt.webp" alt="Our Partner" decoding="async" class="partners-loop__img -second">
						</div>
						<div class="partners-loop__unit">
							<img src="<?= $this_img_path; ?>partners_loop-txt.webp" alt="Our Partner" decoding="async" class="partners-loop__img">
							<img src="<?= $this_img_path; ?>partners_loop-txt.webp" alt="Our Partner" decoding="async" class="partners-loop__img -second">
						</div>
					</div>
				</div>
			</div><!-- /partners-contents_area -->
			<figure class="kumo kumonchu"><img src="<?= $this_img_path; ?>partners-kumonchu.webp" alt="" decoding="async"></figure>
			<figure class="kumo risu sb inview"><img src="<?= $this_img_path; ?>partners-kumorisu.webp" alt="" decoding="async"></figure>
		</div><!-- /inr -->
	</section><!-- /partners -->
	<section class="news">
		<div class="inr -m2000 -lrg">
			<div class="news-balcony_area">
				<figure class="leaf">
					<img src="<?= $this_img_path; ?>news-leaf.webp" alt="" decoding="async">
				</figure>
				<figure class="chou chou01"><img src="<?= $this_img_path; ?>news-chou01.webp" alt="" decoding="async"></figure>
				<figure class="chou chou02"><img src="<?= $this_img_path; ?>news-chou02.webp" alt="" decoding="async"></figure>
				<figure class="girl"><img src="<?= $this_img_path; ?>news-girl.webp" alt="" decoding="async"></figure>
				<figure class="pillar tab_on">
					<img src="<?= $this_img_path; ?>news_sp-pillar.webp" alt="" decoding="async">
				</figure>
				<figure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>news_illust-base-sp.webp">
						<img src="<?= $this_img_path; ?>news_illust-base.webp" alt="">
					</picture>
				</figure>
			</div><!--/partners-construction_area -->
			<div class="news-contents_area">
				<div class="text_area">
					<h2>
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>news_title-sp.webp">
							<img src="<?= $this_img_path; ?>news_title.webp" alt="お知らせ NEWS">
						</picture>
					</h2>
					<a href="<?= $news_link; ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text"><span>お知らせ</span>一覧へ</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
					<?php
				/* ==========================================================================
					最新のお知らせを3件取得
				========================================================================== */
				$news_query = new WP_Query(array(
					'post_type'				=> 'post',
					'posts_per_page'		=> 3,
					'post_status'			=> 'publish',
					'ignore_sticky_posts'	=> true,
				));

				if ($news_query->have_posts()) :
					while ($news_query->have_posts()) :
						$news_query->the_post();

						$post_id		= get_the_ID();
						$post_url		= get_permalink();
						$post_title		= get_the_title();
						$post_date		= get_the_date('Y m.d');
						$thumb_url		= get_the_post_thumbnail_url($post_id, 'full');
						$categories		= get_the_category();
						$cat_name		= '';

						if (!empty($categories)) {
							$cat_name = $categories[0]->name;
						}
				?>
						<a href="<?= esc_url($post_url); ?>" class="news-link">
							<div class="img_area">
								<figure class="img_inr">
									<?php if ($thumb_url) : ?>
										<img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($post_title); ?>" decoding="async" class="fit_img">
									<?php else : ?>
										<img src="<?= $this_img_path; ?>blog-dummy.png" alt="" decoding="async" class="fit_img">
									<?php endif; ?>
								</figure>
							</div>

							<div class="link_text">
								<div>
									<span class="en"><?= esc_html($post_date); ?></span>

									<?php if ($cat_name) : ?>
										<span class="cate"><?= esc_html($cat_name); ?></span>
									<?php endif; ?>

									<p><?= esc_html(mb_strimwidth($post_title, 0, 82, '…', 'UTF-8')); ?></p>
								</div>
							</div>
						</a>
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
				</div>
				<figrure class="illust_base">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>news_contents-base-sp.webp">
						<img src="<?= $this_img_path; ?>news_contents-base.webp" alt="">
					</picture>
				</figure>
			</div><!-- /partners-contents_area -->
		</div><!-- /inr -->
		<figure class="kumo kumo01"><img src="<?= $this_img_path; ?>news-kumo01.webp" alt="" decoding="async"></figure>
		<figure class="kumo kumo02"><img src="<?= $this_img_path; ?>news-kumo02.webp" alt="" decoding="async"></figure>
		<figure class="bird inview bt_one"><img src="<?= $this_img_path; ?>lv-bird.webp" alt="" decoding="async"></figure>
	</section><!-- /partners -->
	<section class="lv">
		<div class="inr -m2000 -lrg">
			<figure class="lv-house">
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>lv-house-sp.webp">
					<img src="<?= $this_img_path; ?>lv-house.webp" alt="">
				</picture>
			</figure>
			<div class="sc-area">
				<div class="town-area">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>lv-town-tab.webp">
						<img src="<?= $this_img_path; ?>lv-town.webp" alt="">
					</picture>

				</div>
				<figure class="lv-cloud cloud01"><img src="<?= $this_img_path; ?>lv-cloud01.webp" alt="" decoding="async"></figure>
				<figure class="lv-cloud cloud02"><img src="<?= $this_img_path; ?>lv-cloud02.webp" alt="" decoding="async"></figure>
				<figure class="lv-cloud cloud03"><img src="<?= $this_img_path; ?>lv-cloud03.webp" alt="" decoding="async"></figure>
				<figure class="lv-cloud cloud04"><img src="<?= $this_img_path; ?>lv-cloud04.webp" alt="" decoding="async"></figure>
				<figure class="lv-cloud cloud05"><img src="<?= $this_img_path; ?>lv-cloud05.webp" alt="" decoding="async"></figure>
				<figure class="lv-cloud cloud06"><img src="<?= $this_img_path; ?>lv-cloud06.webp" alt="" decoding="async"></figure>
			</div>
		</div>
	</section><!-- /lv -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
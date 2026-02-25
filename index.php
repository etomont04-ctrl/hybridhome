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
<div class="of-wrap">
<!-- 	<div class="load">
		<div class="logo-area">
			<figure class="symbol -top"><img src="<?= $img_path; ?>common/logo-symbol-top.svg" alt="" decoding="async"></figure>
			<figure class="text"><img src="<?= $img_path; ?>common/logo-text.svg" alt="" decoding="async"></figure>
			<figure class="symbol -bottom"><img src="<?= $img_path; ?>common/logo-symbol-bottom.svg" alt="" decoding="async"></figure>
		</div>
	</div> -->
	<main>
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<section id="kv" class="inview">
		<div class="inr -m2000">
			<div class="index_head_link-area">
				<nav class="main-nav">
					<a href="<?= $about_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>私たちについて</a>
					<a href="<?= $reform_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>リフォーム＆リノベーション</a>
					<a href="<?= $works_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>施工事例</a>
					<a href="<?= $voice_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お客様の声</a>
					<a href="<?= $staff_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>社員紹介</a>
					<a href="<?= $member_link; ?>" class="hv_ar"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>ハイブリッドの仲間たち</a>
					<p class="en copy">(C) Hybrid Home inc.</p>
				</nav>
				<div class="info-nav">
					<a href="<?= $company_link; ?>" class="w_link">会社概要</a>
					<a href="<?= $recruit_link; ?>" class="w_link">採用情報</a>
					<a href="<?= $contact_link; ?>" class="contact_link"><img src="<?= $img_path; ?>common/head_contact-btn_txt.png" alt="お問い合わせ" decoding="async"></a>
				</div>
			</div>
			<h1 class="kv_logo"><img src="<?= $img_path; ?>common/logo.png" alt="ハイブリッドホーム HYBRID HOME" decoding="async"></h1>
			<h2 class="kv_chatch"><img src="<?= $this_img_path; ?>chatch.webp" alt="WELCOME TO HYBRID HOME!" decoding="async"></h2>
			<div class="yane-area">
				<h3 class="kv_sub-chatch"><img src="<?= $this_img_path; ?>sub-chatch.webp" alt="ようこそ！ハイブリットホームへ" decoding="async"></h3>
				<figure class="yane"><img src="<?= $this_img_path; ?>fv-yane.webp" alt="" decoding="async"></figure>
			</div>
			<a href="#" class="blog-link_area">
				<figure class="img_area"><img src="<?= $this_img_path; ?>blog-dummy.png" alt="" decoding="async" class="fit_img"></figure>
				<div class="text_area">
					<div>
						<span class="en">2025 12.30</span>
						<p>ブログの最新記事が１件のみ表示されます。</p>
					</div>
				</div>
			</a>
			<figure class="bird bird01"><img src="<?= $img_path; ?>common/illust/bird01.webp" alt="" decoding="async"></figure>
			<figure class="bird bird02"><img src="<?= $img_path; ?>common/illust/bird02.webp" alt="" decoding="async"></figure>
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
				<div class="bg-leaf leaf01"></div>
				<div class="bg-leaf leaf02"></div>
				<div class="bg-leaf leaf03"></div>
				<div class="bg-leaf leaf04"></div>
				<div class="bg-leaf leaf05"></div>
			</div>
			<div class="bg-cloud_area">
				<figure class="bg-cloud bgcloud01"><img src="<?= $this_img_path; ?>fv-bg_cloud01.png" alt="" decoding="async"></figure>
				<figure class="bg-cloud bgcloud02"><img src="<?= $this_img_path; ?>fv-bg_cloud02.png" alt="" decoding="async"></figure>
			</div>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud03"><img src="<?= $this_img_path; ?>fv-cloud03.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
			<figure class="cloud cloud04"><img src="<?= $this_img_path; ?>fv-cloud04.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud05"><img src="<?= $this_img_path; ?>fv-cloud05.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud06"><img src="<?= $this_img_path; ?>fv-cloud06.webp" alt="" decoding="async"></figure>
		</div>

	</section><!-- /kv -->
	<section class="sv">
		<div class="inr -m2000">
			<figure class="sv-house"><img src="<?= $this_img_path; ?>sv-house.webp" alt="" decoding="async"></figure>
			<figure class="sv-cloud"><img src="<?= $this_img_path; ?>sv-cloud.webp" alt="" decoding="async"></figure>
		</div>
	</section><!-- /sv -->
	<section class="intro">
		<div class="inr -m2000 -rg">
			<figure class="yane"><img src="<?= $this_img_path; ?>intro_yane.webp" alt="" decoding="async"></figure>
			<div class="intro-contents_wrap">
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
				<div class="intro-house_area">
					<figure class="house_wrap"><img src="<?= $this_img_path; ?>intro_illust-wrap.webp" alt="" decoding="async">
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

			</div><!-- /intro-contents_wrap -->
		</div><!-- /inr -->
	</section><!-- /intro -->
	<section class="project">
		<div class="inr -m2000 -lrg">
			<div class="title_area">
				<h2><img src="<?= $this_img_path; ?>project_title.webp" alt="施工事例" decoding="async"></h2>
				<span class="en">Featured project</span>
				<a href="<?= $about_link ?>" class="link_wrap">
					<p class="link_btn -red">
						<span class="text">私たちについて</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div><!-- /title_area -->
			<section class="picks">
				<div class="splide js-picks-splide" aria-label="おすすめ事例">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<article class="pick-card">
									<a class="pick-card__link" href="#">
										<div class="pick-card__photo soto">
											<img src="<?= $this_img_path; ?>project_img.webp" alt="" decoding="async" class="fit_img">
										</div>
										<div class="pick-card__body">
											<h3 class="pick-card__title">愛車と同居できる家</h3>
											<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
											<span class="pick-card__area">町田市</span>
										</div>
									</a>
								</article>
							</li><!--/splide__slide -->
							<li class="splide__slide">
								<article class="pick-card">
									<a class="pick-card__link" href="#">
										<div class="pick-card__photo uchi">
											<img src="<?= $this_img_path; ?>project_img.webp" alt="" decoding="async" class="fit_img">
										</div>
										<div class="pick-card__body">
											<h3 class="pick-card__title">庭がカフェになる家</h3>
											<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
											<span class="pick-card__area">町田市</span>
										</div>
									</a>
								</article>
							</li><!--/splide__slide -->
							<li class="splide__slide">
								<article class="pick-card">
									<a class="pick-card__link" href="#">
										<div class="pick-card__photo soto">
											<img src="<?= $this_img_path; ?>project_img.webp" alt="" decoding="async" class="fit_img">
										</div>
										<div class="pick-card__body">
											<h3 class="pick-card__title">犬と暮らしやすい家</h3>
											<div class="pick-card__tags"><span>#ウッドデッキ</span>　<span>#エクステリア</span></div>
											<span class="pick-card__area">町田市</span>
										</div>
									</a>
								</article>
							</li><!--/splide__slide -->
						</ul><!--/splide__likst-->
					</div><!--/splide-->
				</div><!--/splide-->
			</section><!--/picks -->
			<figure class="project_base"><img src="<?= $this_img_path; ?>project_base.webp" alt="" decoding="async"></figure>
			<figure class="risu inview">
				<img src="<?= $this_img_path; ?>project-risu.webp" alt="" decoding="async">
			</figure>
		</div><!-- /inr -->
	</section><!-- /project -->
	<section class="reform">
		<div class="inr -m2000 -lrg">
			<div class="reform-bath_area">
				<figure class="bubble">
					<img src="<?= $this_img_path; ?>reform-bubble.webp" alt="" decoding="async">
				</figure>
				<figure class="wani">
					<img src="<?= $this_img_path; ?>reform-wani.webp" alt="" decoding="async">
				</figure>
				<figure class="illust_base">
					<img src="<?= $this_img_path; ?>reform_illust-base.webp" alt="" decoding="async">
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
				<h2><img src="<?= $this_img_path; ?>reform_title.webp" alt="リフォーム&リノベーション Reform&Renovation" decoding="async"></h2>
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
						<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async"  class="reform-loop__img">
						<img src="<?= $this_img_path; ?>reform_roop-txt.webp" alt="Reform&Renov" decoding="async"  class="reform-loop__img -second">
					</div>
				</div>
				<figrure class="illust_base">
					<img src="<?= $this_img_path; ?>reform-contents_base.webp" alt="" decoding="async">
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
				<figure class="illust_base">
					<img src="<?= $this_img_path; ?>staff_illust-base.webp" alt="" decoding="async">
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
				<figure class="risu"><img src="<?= $this_img_path; ?>staff-risu.webp" alt="" decoding="async"></figure>
				<figure class="kaidan"><img src="<?= $this_img_path; ?>staff-kaidan.webp" alt="" decoding="async"></figure>
				<figrure class="illust_base">
					<img src="<?= $this_img_path; ?>staff-contents_base.webp" alt="" decoding="async">
				</figure>
			</div><!-- /staff-contents_area -->
		</div><!-- /inr -->
	</section><!-- /staff -->

	</main>
<?php /*include($root_path . '/assets/inc/footer.php');*/ ?>

</div><!-- /of_wrap -->
</body>
</html>
<?php
$TITLE         = '';
$DESCRIPTION   = '';
$KEYWORDS      = '';
$swiper = "true";
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
		<div class="inr -m2000">
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
						<figure class="move-illust tori02"><img src="<?= $this_img_path; ?>intro_tori02.webp" alt="" decoding="async"></figure>
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
	</section>

	</main>
<?php /*include($root_path . '/assets/inc/footer.php');*/ ?>

</div><!-- /of_wrap -->
</body>
</html>
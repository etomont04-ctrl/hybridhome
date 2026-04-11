<header class="head <?= ($uri === 'index') ? 'index' : '' ?> <?= isset($head_class) ? htmlspecialchars($head_class) : '' ?>">
	<p class="logo"><a href="<?= $ROOT_DIR; ?>">
		<img src="<?= $ROOT_DIR; ?>assets/img/common/logo-y.png" alt="ハイブリットホーム HYBRID HOME" />
	</a></p>
	<div class="head_link-area">
		<nav class="g-nav">
			<div class="main-nav">
				<a href="<?= $about_link; ?>" class="text">私たちについて</a>
				<a href="<?= $reform_link; ?>" class="text">リフォーム&amp;リノベーション</a>
				<a href="<?= $works_link; ?>" class="text">施工事例</a>
				<a href="<?= $voice_link; ?>" class="text">お客様の声</a>
				<a href="<?= $staff_link; ?>" class="text">社員紹介</a>
				<a href="<?= $partner_link; ?>" class="text">ハイブリッドの仲間たち</a>
			</div>
			<div class="info-nav">
				<a href="<?= $company_link; ?>" class="w_link">会社概要</a>
				<a href="<?= $recruit_link; ?>" class="w_link">採用情報</a>
				<a href="<?= $contact_link; ?>" class="contact_link"><img src="<?= $img_path; ?>common/head_contact-btn_txt.png" alt="お問い合わせ" decoding="async"></a>
			</div>
		</nav><!-- /g-nav -->
	</div><!-- /head_link-area -->
	<span class="corner"><img src="<?= $img_path; ?>common/corner.png" alt="" decoding="async"></span>
</header>
<nav class="global-nav">
	<div class="nav_inr">
		<div class="links">
			<a href="<?= $ROOT_DIR; ?>" class="nav_link -full"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>トップページ</a>
			<a href="<?= $about_link; ?>" class="nav_link -full"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>私たちについて</a>
			<a href="<?= $reform_link; ?>" class="nav_link -full"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>リフォーム&amp;リノベーション</a>
			<a href="<?= $partner_link; ?>" class="nav_link -full"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>ハイブリッドの仲間たち</a>
			<a href="<?= $works_link; ?>" class="nav_link -full"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>施工事例</a>
			<a href="<?= $recruit_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>採用情報</a>
			<a href="<?= $voice_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お客様の声</a>
			<a href="<?= $staff_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>社員紹介</a>
			<a href="<?= $company_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>会社概要</a>
			<a href="<?= $news_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お知らせ</a>
			<a href="<?= $contact_link; ?>" class="nav_link -half"><i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お問い合わせ</a>

			<figure class="bird"><img src="<?= $img_path; ?>common/illust/bird02.webp" alt="" decoding="async"></figure>
		</div>
		<div class="info">
			<p class="logo"><img src="<?= $img_path; ?>common/logo-y.png" alt="ハイブリットホーム"></p>
			<p class="c_txt">株式会社ハイブリッドホーム<br>営業時間：<?= $business_hours; ?></p>
			<a href="<?= $about_link ?>" class="link_wrap">
				<p class="link_btn -blue">
					<span class="text">メールでお問い合わせ</span>
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</p>
			</a>
		</div>
	</div>
</nav><!-- /global-nav -->
<div class="hamburger" id="js-hamburger">
	<div class="line_area">
		<span class="border"></span>
		<span class="border"></span>
		<span class="border"></span>
	</div>
	<p class="en">MENU</p>
</div>
<div id="nav-overlay" class="nav-overlay"></div>

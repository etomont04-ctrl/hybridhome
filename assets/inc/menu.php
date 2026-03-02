<header class="head <?= ($uri === 'index') ? 'index' : '' ?> <?= isset($head_class) ? htmlspecialchars($head_class) : '' ?>">
	<?php if($uri === 'index'){ ?>

	<?php }else{ ?>
	<p class="logo"><a href="<?= $ROOT_DIR; ?>">
		<img src="<?= $ROOT_DIR; ?>assets/img/common/logo.svg" alt="ハイブリットホーム HYBRID HOME" />
	</a></p>
	<div class="head_link-area">
		<nav class="g-nav">
			<div class="main-nav">
				<a href="<?= $about_link; ?>" class="text -about"><img src="<?= $img_path; ?>common/text/menu_about.svg" class="svg" alt=""><span class="sr-only">私たちについて</span></a>
				<a href="<?= $service_link; ?>" class="text -service"><img src="<?= $img_path; ?>common/text/menu_service.svg" class="svg" alt=""><span class="sr-only">サービス紹介</span></a>
				<a href="<?= $data_link; ?>" class="text -data"><img src="<?= $img_path; ?>common/text/menu_data.svg" class="svg" alt=""><span class="sr-only">データで見る獅子</span></a>
				<a href="<?= $visit_journal_link; ?>" class="text -journal"><img src="<?= $img_path; ?>common/text/menu_journal.svg" class="svg" alt=""><span class="sr-only">お客様探訪録</span></a>
				<a href="<?= $interview_link; ?>" class="text -interview"><img src="<?= $img_path; ?>common/text/menu_interview.svg" class="svg" alt=""><span class="sr-only">社員インタビュー</span></a>
				<a href="<?= $news_link; ?>" class="text -news"><img src="<?= $img_path; ?>common/text/menu_news.svg" class="svg" alt=""><span class="sr-only">お知らせ</span></a>
			</div>
			<div class="company-nav">
				<a href="<?= $company_link; ?>" class="link_wrap">
					<p class="link_btn -border -black">
						<span class="text -company"><img src="<?= $img_path; ?>common/text/menu_company.svg" alt="" decoding="async" class="svg"></span>
						<span class="sr-only">会社情報</span>
						<i class="arrow -black" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
					</p>
				</a>
				<a href="<?= $recruit_link; ?>" class="link_wrap">
					<p class="link_btn -border -black">
						<span class="text -recruit"><img src="<?= $img_path; ?>common/text/menu_recruit.svg" alt="" decoding="async" class="svg"></span>
						<span class="sr-only">採用情報</span>
						<i class="arrow -black" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
					</p>
				</a>
			</div>
			<div class="contact-nav">
				<a href="<?= $contact_link; ?>" class="link_wrap">
					<p class="link_btn -menu -black">
						<span class="text"><img src="<?= $img_path; ?>common/text/menu_contact.svg" alt="" decoding="async" class="svg -white"></span>
						<span class="sr-only">お問い合わせ</span>
						<i class="arrow -white -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
					</p>
				</a>

			</div>
		</nav><!-- /g-nav -->
	</div><!-- /head_link-area -->
	<?php } ?>
</header>
<nav class="global-nav">
	<div class="nav_inr">
		<p class="menu-logo">
			<img src="<?= $ROOT_DIR; ?>assets/img/common/logo.svg" alt="獅子 SHISHIINC." />
		</p>
		<p class="paren-label -large -mid"><span>contents</span></p>
		<div class="global-nav_link-box">
			<a href="<?= $ROOT_DIR; ?>" class="global-nav_link ">トップページ<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $about_link; ?>" class="global-nav_link ">私たちについて<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $service_link; ?>" class="global-nav_link ">サービス紹介<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
			<i class="c-button"></i>
			<div class="oc_area">
				<a href="<?= $service01_link; ?>" class="global-nav_sub-link">マーケティング戦略</a>
				<a href="<?= $service02_link; ?>" class="global-nav_sub-link">ブランド構築支援</a>
				<a href="<?= $service03_link; ?>" class="global-nav_sub-link">市場創造ラボ</a>
			</div>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $data_link; ?>" class="global-nav_link ">データで見る獅子<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $visit_journal_link; ?>" class="global-nav_link ">お客様探訪録<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $interview_link; ?>" class="global-nav_link ">社員インタビュー<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
		</div>
		<div class="global-nav_link-box">
			<a href="<?= $news_link; ?>" class="global-nav_link ">お知らせ<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
			<i class="c-button"></i>

		</div>
		<div class="half-area">
			<div class="global-nav_link-box">
				<a href="<?= $company_link; ?>" class="global-nav_link ">会社概要<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
			</div>
			<div class="global-nav_link-box">
				<a href="<?= $recruit_link; ?>" class="global-nav_link ">採用情報<i class="arrow -black -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i></a>
			</div>
		</div><!-- /half-area -->
		<div class="contact-area">
			<p class="paren-label -midium -mid -blue"><span>contact</span></p>
			<h3>
				<i class="dq-icon -midium"><img src="<?= $img_path; ?>common/dq-icon.svg" alt="" decoding="async"></i><img src="<?= $img_path; ?>common/text/footer_contact_title.svg" alt="お問い合わせ" decoding="async"></h3>
			<p class="n_txt -regular -bld -sy95">お気軽にご相談ください。<br>お見積もり依頼も可能です。</p>
			<a href="<?= $contact_link; ?>" class="link_wrap">
				<p class="link_btn -xlarge -white">
					<span class="en -ls0">contact form</span>
					<i class="arrow -black -w19" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async" class="svg"></i>
				</p>
			</a>
			<div class="shishi_area inview">
				<figure class="shishishi -L -ut">
					<picture>
						<source media="(max-width: 800px)" srcset="<?= $img_path; ?>common/footer_contect-shishi-l_sp.webp">
						<img src="<?= $img_path; ?>common/footer_contect-shishi-l.webp" alt="">
					</picture>
				</figure>
				<figure class="shishishi -R -ut">
					<picture>
						<source media="(max-width: 800px)" srcset="<?= $img_path; ?>common/footer_contect-shishi-r_sp.webp">
						<img src="<?= $img_path; ?>common/footer_contect-shishi-r.webp" alt="">
					</picture>
				</figure>
			</div>
		</div><!-- /contact-area -->
	</div>
</nav><!-- /global-nav -->
<div class="hamburger" id="js-hamburger">
	<div class="line_area">
		<span class="border"></span>
		<span class="border"></span>
	</div>
	<p class="en"></p>
</div>
<div id="nav-overlay" class="nav-overlay"></div>

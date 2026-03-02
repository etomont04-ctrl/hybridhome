<footer class="footer <?= ($uri === 'index') ? 'index' : '' ?>" id="footer">
	<section class="contents_wrap inr -m2000 -lrg">
		<div class="inr -w1400 inview">
			<div class="contents">
				<div class="footer_logo-area">
					<h2><a href="<?= $ROOT_DIR; ?>"><img src="<?= $img_path; ?>common/logo.png" alt="ハイブリットホーム HYBRID HOME" decoding="async"></a></h2>
					<div class="footer_logo-area_text">
						<p class="n_txt -mid">株式会社ハイブリッドホーム<br>営業時間：9:00～18:00<span>（日・月曜・祝祭日定休）</span></p>
						<a href="<?= $about_link ?>" class="link_wrap">
							<p class="link_btn -blue">
								<span class="text">メールでお問い合わせ</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
							</p>
						</a>
					</div>
				</div><!-- /footer_logo-area -->
				<div class="footer_link-area">
					<div class="company-area">
						<a href="<?= $ROOT_DIR; ?>" class="n_link">トップページ</a>
						<a href="<?= $about_link; ?>" class="n_link">私たちについて</a>
						<a href="<?= $visit_journal_link; ?>" class="n_link">お客様探訪録</a>
						<a href="<?= $data_link; ?>" class="n_link">データで見る獅子</a>
						<a href="<?= $interview_link; ?>" class="n_link">社員インタビュー</a>
						<a href="<?= $company_link; ?>" class="n_link">会社情報</a>
						<a href="<?= $recruit_link; ?>" class="n_link">採用情報</a>
						<a href="<?= $contact_link; ?>" class="n_link">お問い合わせ</a>
					</div>
					<div class="r-area">
						<a href="<?= $service_link; ?>" class="n_link">サービス紹介</a>
						<a href="<?= $service01_link; ?>" class="s_link">マーケティング戦略</a>
						<a href="<?= $service02_link; ?>" class="s_link">ブランド構築支援</a>
						<a href="<?= $service03_link; ?>" class="s_link">市場創出ラボ</a>
						<a href="<?= $news_link; ?>" class="n_link">お知らせ</a>

						<span class="copy spv_txt">© SHI SHI inc. All Rights Reserved.</span>
					</div>
				</div><!-- /footer_link-area -->
			</div><!--/contents -->
		</div><!--/inr -->
		<a href="#top" class="pagetop"><i class="arrow -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async"></i><p class="v_txt spy_txt -sY90">pagetop</p></a>
		<figure class="footer_illust-area">
			<img src="<?= $img_path; ?>common/illust/footer-illust.webp" alt="" decoding="async">
		</figure>
	</section><!-- /inr -->
</footer>
<?php //if (function_exists('wp_footer')) { wp_footer(); } ?>

<footer class="footer <?= ($uri === 'index') ? 'index' : '' ?>" id="footer">
	<section class="contents_wrap inr -m2000 -lrg">
		<figure class="cloud tab_off"><img src="<?= $img_path; ?>common/illust/footer-cloud.webp" alt="" decoding="async"></figure>
		<div class="inr -w1400 inview">
			<div class="contents">
				<div class="footer_logo-area">
					<h2><a href="<?= $ROOT_DIR; ?>">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $img_path; ?>common/logo-y.png">
							<img src="<?= $img_path; ?>common/logo.png" alt="ハイブリットホーム HYBRID HOME">
						</picture>
					</a></h2>
					<div class="footer_logo-area_text">
						<p class="n_txt -mid">株式会社ハイブリッドホーム<br>営業時間：9:00～18:00<span>（日・月曜・祝祭日定休）</span></p>
						<a href="<?= $about_link ?>" class="link_wrap">
							<p class="link_btn -blue2">
								<span class="text">メールでお問い合わせ</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
							</p>
						</a>
					</div>
				</div><!-- /footer_logo-area -->
				<div class="footer_link-area">
					<div class="company-area">
						<div class="company-block">
							<h3>本社首都圏事業部</h3>
							<p class="n_txt">東京都千代田区神田鍛冶町3-7-6<br>翔和鍛冶町ビル4階<br>TEL：03-3252-8100　FAX：03-3252-8566
							</p>
							<a href="<?= $map_hon ?>" target="_blank" class="map_link">
								<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
									Google Map
							</a>
						</div>
						<div class="company-block">
							<h3>町田店</h3>
							<p class="n_txt">東京都町田市玉川学園2-11-1<br>ヴェルデ玉川<br>TEL：0800-111-8146　FAX：042-728-1253
							</p>
							<a href="<?= $map_hon ?>" target="_blank" class="map_link">
								<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
									Google Map
							</a>
						</div>
						<div class="company-block">
							<h3>新百合ヶ丘店</h3>
							<p class="n_txt">神奈川県川崎市麻生区<br>上麻生1-7-14 パストラル新百合Ⅱ<br>TEL：044-959-6630　FAX：044-959-6632
							</p>
							<a href="<?= $map_hon ?>" target="_blank" class="map_link">
								<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
									Google Map
							</a>
						</div>
					</div><!-- /company-area -->
					<ul class="link-area">
						<li>
							<a href="<?= $ROOT_DIR; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>トップページ</a>
							<a href="<?= $about_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>私たちについて</a>
							<a href="<?= $reform_link; ?>" class="hv_ar link -ls"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>リフォーム＆リノベーション</a>
							<a href="<?= $works_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>施工事例</a>
							<a href="<?= $voice_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お客様の声</a>
						</li>
						<li>
							<a href="<?= $staff_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>社員紹介</a>
							<a href="<?= $partner_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>ハイブリッドの仲間たち</a>
							<a href="<?= $company_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>会社概要</a>
							<a href="<?= $recruit_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>採用情報</a>
							<a href="<?= $contact_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>お問い合わせ</a>
						</li>
						<li>
							<a href="<?= $news_link; ?>" class="hv_ar link"><i class="arrow -w10"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>ブログ</a>
							<a href="<?= $news_link; ?>" class="s_link">お知らせ</a>
							<a href="<?= $news_link; ?>" class="s_link">よくある質問</a>
							<a href="<?= $news_link; ?>" class="s_link">動画配信サービス</a>
							<a href="<?= $news_link; ?>" class="s_link">お客様アンケート</a>
						</li>
					</ul><!--/link-area -->
				</div><!-- /footer_link-area -->
			<a href="#top" class="pagetop">
				<div class="arrow-area">
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-top.png" alt="" decoding="async"></i>
				</div>
				<div class="illust_area tab_off">
					<div class="tori">
						<img src="<?= $img_path; ?>common/illust/footer-tori.webp" alt="" decoding="async" class="bf">
						<img src="<?= $img_path; ?>common/illust/footer-tori_af.webp" alt="" decoding="async" class="af">
					</div>
					<figure class="post"><img src="<?= $img_path; ?>common/illust/footer-post.webp" alt="" decoding="async"></figure>
				</div>
			</a>
			</div><!--/contents -->
			<span class="en copy">©2026 Hybrid Home inc. <br class="tab_on">All Rights Reserved.</span>
		</div><!--/inr -->
		<figure class="footer_illust-area">
			<picture>
				<source media="(max-width: 1050px)" srcset="<?= $img_path; ?>common/illust/footer-illust-sp.webp">
				<img src="<?= $img_path; ?>common/illust/footer-illust.webp" alt="">
			</picture>
		</figure>
	</section><!-- /inr -->
</footer>
<?php //if (function_exists('wp_footer')) { wp_footer(); } ?>

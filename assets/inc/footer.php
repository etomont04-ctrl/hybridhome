<section class="footer-bridge inview">
	<figure class="footer-bridge_img">
		<picture>
			<source media="(max-width: 800px)" srcset="<?= $img_path; ?>common/footer-bridge_img-sp.webp">
			<img src="<?= $img_path; ?>common/footer-bridge_img.webp" alt="">
		</picture>
	</figure>
	<figure class="shishishi -rl">
		<img src="<?= $img_path; ?>common/shishishi02.svg" alt="" decoding="async">
	</figure>
	<div class="loop-text">
		<p><img src="<?= $img_path; ?>common/text/footer-bridge_loop-txt.svg" alt="Marketing designed to spark demand." decoding="async"></p>
		<p><img src="<?= $img_path; ?>common/text/footer-bridge_loop-txt.svg" alt="Marketing designed to spark demand." decoding="async"></p>
		<p><img src="<?= $img_path; ?>common/text/footer-bridge_loop-txt.svg" alt="Marketing designed to spark demand." decoding="async"></p>
	</div><!-- /loop-text -->
</section>
<footer class="footer" id="footer">
	<div class="footer_contact-area">
		<p class="paren-label -large -mid -blue"><span>contact</span></p>
		<h3>
			<i class="dq-icon -midium"><img src="<?= $img_path; ?>common/dq-icon.svg" alt="" decoding="async"></i><img src="<?= $img_path; ?>common/text/footer_contact_title.svg" alt="お問い合わせ" decoding="async"></h3>
		<p class="n_txt -regular -bld -sy95">お気軽にご相談ください。<br>お見積もり依頼も可能です。</p>
		<a href="<?= $contact_link; ?>" class="link_wrap">
			<p class="link_btn -midium -gray">
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
	</div><!-- /footer_contact-area -->
	<section class="inr -w1380">
		<div class="footer_link-area">
			<div class="l-area">
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
				<?php

				if (function_exists('get_categories')) {
					$cats = get_categories([
						'taxonomy'		=> 'category',
						'hide_empty'	=> true,   // 投稿があるカテゴリだけ（全部出すなら false）
						'orderby'		=> 'name',
						'order'			=> 'ASC',
					]);

					if (!empty($cats) && !is_wp_error($cats)) {
						foreach ($cats as $cat) {
							$news_link = get_category_link($cat->term_id);
							$cat_name  = $cat->name;

							if (is_wp_error($news_link) || empty($news_link)) continue;
							?>
							<a href="<?= esc_url($news_link); ?>" class="s_link"><?= esc_html($cat_name); ?></a>
							<?php
						}
					}
				}
				?>
				<!-- <a href="<?= $news_link; ?>" class="s_link">カテゴリ</a>
				<a href="<?= $news_link; ?>" class="s_link">カテゴリ</a>
				<a href="<?= $news_link; ?>" class="s_link">カテゴリ</a>
				<a href="<?= $news_link; ?>" class="s_link">カテゴリ</a> -->
				<span class="copy spv_txt">© SHI SHI inc. All Rights Reserved.</span>
			</div>
		</div><!-- /footer_link-area -->
		<div class="footer_logo-area">
			<h2><a href="<?= $ROOT_DIR; ?>"><img src="<?= $img_path; ?>common/logo-square.svg" alt="獅子 SHISHI INC" decoding="async"></a></h2>
			<div class="footer_logo-area_text">
				<p class="n_txt -mid">株式会社 獅子</p>
				<p class="btm_txt">〒812-0007<br>福岡県福岡市博多区東比恵4丁目3番8号<br>ミプラ東比恵7階<a href="<?= $map_link; ?>"><i class="icon"><img src="<?= $img_path; ?>common/map-icon.svg" alt="" decoding="async"></i>Google map</a></p>
			</div>
		</div><!-- /footer_logo-area -->
	</section><!-- /inr -->
	<a href="#top" class="pagetop"><i class="arrow -w17" aria-hidden="true"><img src="<?= $img_path; ?>common/arrow.svg" alt="" decoding="async"></i><p class="v_txt spy_txt -sY90">pagetop</p></a>
</footer>
<?php //if (function_exists('wp_footer')) { wp_footer(); } ?>

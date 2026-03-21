<?php
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
$uri = "works";
$this_img_path = $img_path .  "works/";
$commitment_terms = get_terms(array(
	'taxonomy' => 'commitment',
	'hide_empty' => true,
));

$area_terms = get_terms(array(
	'taxonomy' => 'area',
	'hide_empty' => true,
));
?>
<div class="conditions_wrap">
	<div class="conditions_btn">
		<h2><img src="<?= $this_img_path; ?>fillter_title.webp" alt="条件で絞り込み" decoding="async"></h2>
		<spna class="en">Filter / Category</spna>
		<span class="btn"></span>
	</div>

	<div class="conditions_list">
		<div class="conditions_link">
			<div class="conditions_head">
				種別
			</div>
			<div class="conditions_links -rino">
				<a href="<?= $ROOT_DIR; ?>news/renovation/uchi/">
					<p class="rino-tit"><img src="<?= $this_img_path; ?>works_sort-uchi.png" alt="" decoding="async"></p>
					<p class="n_txt">間取りや内装などをライフスタイルに合わせてより使いやすくする住宅に関するサービス</p>
				</a>
				<a href="<?= $ROOT_DIR; ?>news/renovation/soto/">
					<p class="rino-tit -soto"><img src="<?= $this_img_path; ?>works_sort-soto.png" alt="" decoding="async"></p>
					<p class="n_txt">外構のお手入れやウッドデッキ施工など屋外に関するサービス</p>
				</a>
			</div>
		</div>

		<div class="conditions_link">
			<div class="conditions_head">
				こだわり
			</div>
			<div class="conditions_links -commit">
				<a href="<?= esc_url(get_post_type_archive_link('works')); ?>"><span>#すべて</span></a>

				<?php if (!empty($commitment_terms) && !is_wp_error($commitment_terms)) : ?>
					<?php foreach ($commitment_terms as $term) : ?>
						<a href="<?= esc_url(get_term_link($term)); ?>">
							<span>#<?= esc_html($term->name); ?></span>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="conditions_link">
			<div class="conditions_head">
				エリア
			</div>
			<div class="conditions_links -area">
				<a href="<?= esc_url(get_post_type_archive_link('works')); ?>">すべて</a>

				<?php if (!empty($area_terms) && !is_wp_error($area_terms)) : ?>
					<?php foreach ($area_terms as $term) : ?>
						<a href="<?= esc_url(get_term_link($term)); ?>">
							<?= esc_html($term->name); ?>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div><!-- conditions_list" -->
	<figure class="duck sb inview"><img src="<?= $this_img_path; ?>conditions_duck.webp" alt="" decoding="async"></figure>
</div><!-- /conditions_wrap -->
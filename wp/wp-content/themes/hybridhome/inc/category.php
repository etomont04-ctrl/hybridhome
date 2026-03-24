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
$uri = "news";
$this_img_path = $img_path .  "news/";

$categories = get_categories(array(
	'taxonomy'   => 'category',
	'hide_empty' => false,
));
$total_posts = wp_count_posts('post');
$total_count = isset($total_posts->publish) ? (int) $total_posts->publish : 0;
?>
<nav class="categorys">
	<div class="tit_area conditions_btn">
		<h2><img src="<?= $this_img_path; ?>category_title.webp" alt="記事" decoding="async"></h2>
		<span class="en en-tit">Category</span>
		<span class="btn"></span>
	</div>

	<ul class="conditions_list">
		<li>
			<a href="<?= esc_url(get_post_type_archive_link('post') ? get_post_type_archive_link('post') : home_url('/blog/')); ?>">
				すべて<span class="en">（ <?= esc_html($total_count); ?> ）</span>
			</a>
		</li>

		<?php if ( ! empty($categories) ) : ?>
			<?php foreach ( $categories as $category ) : ?>
				<li>
					<a href="<?= esc_url(get_category_link($category->term_id)); ?>">
						<?= esc_html($category->name); ?>
						<span class="en">（ <?= esc_html($category->count); ?> ）</span>
					</a>
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
	</ul>
</nav>
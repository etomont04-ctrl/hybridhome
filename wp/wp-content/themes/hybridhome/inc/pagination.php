<?php
$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost' || $host === '127.0.0.1') {
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else if ($host == 'as-check.jp') {
	include($_SERVER['DOCUMENT_ROOT'] . '/hybridhome/assets/inc/root.php');
} else {
	include($_SERVER['DOCUMENT_ROOT'] . '/assets/inc/root.php');
}

global $wp_query;
if (!isset($wp_query) || (int) $wp_query->max_num_pages <= 1) {
	return;
}

$current = max(1, get_query_var('paged'));
$total = (int) $wp_query->max_num_pages;

$prev_link = get_previous_posts_page_link();
$next_link = get_next_posts_page_link($total);

$is_prev_disabled = ($current <= 1);
$is_next_disabled = ($current >= $total);

/* ==========================================================================
	表示するページ番号を作成
========================================================================== */
$display_pages = array();

// 現在のページ
$display_pages[] = $current;
if ($total <= 3) {
	// 総ページ数が少ないときは全部表示
	for ($i = 1; $i <= $total; $i++) {
		$display_pages[] = $i;
	}
} elseif ($current >= $total - 1) {
	// 最後付近のときは「1 ... 最後の1つ前 最後」
	$display_pages[] = 1;
	$display_pages[] = $total - 1;
	$display_pages[] = $total;
} else {
	// 通常時は「現在 次 ... 最後」
	$display_pages[] = $current;
	$display_pages[] = $current + 1;
	$display_pages[] = $total;
}

// 重複削除＆並び替え
$display_pages = array_values(array_unique($display_pages));
sort($display_pages);
?>

<div class="archive-pager_wrap">
	<div class="archive-pager">
		<ol class="archive-pager_num">
			<?php foreach ($display_pages as $index => $page_num) : ?>
				<?php
				// 「次のページ」と「最後のページ」の間が空くときだけ ... を入れる
				if ($index > 0) {
					$prev_page_num = $display_pages[$index - 1];
					if ($page_num - $prev_page_num > 1) {
						echo '<li><span class="archive-pager__page dots">...</span></li>';
					}
				}

				$is_current = ($page_num === $current);
				$page_url = get_pagenum_link($page_num);
				?>
				<li>
					<?php if ($is_current) : ?>
						<span class="archive-pager__page is-current"><?= esc_html($page_num); ?></span>
					<?php else : ?>
						<a href="<?= esc_url($page_url); ?>" class="archive-pager__page"><?= esc_html($page_num); ?></a>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ol><!-- /archive-pager_num -->

		<div class="archive-pager_nav">
			<?php if (!$is_prev_disabled && $prev_link) : ?>
				<a href="<?= esc_url($prev_link); ?>" class="nav-btn prev -texure">
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</a>
			<?php else : ?>
				<span class="nav-btn prev is-disabled -texure">
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</span>
			<?php endif; ?>

			<?php if (!$is_next_disabled && $next_link) : ?>
				<a href="<?= esc_url($next_link); ?>" class="nav-btn next -texure">
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</a>
			<?php else : ?>
				<span class="nav-btn next is-disabled -texure">
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</span>
			<?php endif; ?>
		</div><!-- /archive-pager_nav -->
	</div>
</div>
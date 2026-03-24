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

$page_links = paginate_links(array(
	'base'		=> str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
	'format'	=> '',
	'current'	=> $current,
	'total'		=> $total,
	'type'		=> 'array',
	'prev_next'	=> false,
	'mid_size'	=> 1,
	'end_size'	=> 1,
));

$prev_link = get_previous_posts_page_link();
$next_link = get_next_posts_page_link($total);

$is_prev_disabled = ($current <= 1);
$is_next_disabled = ($current >= $total);
?>

<?php if (!empty($page_links) && is_array($page_links)) : ?>
	<div class="archive-pager">
		<ol class="archive-pager_num">
			<?php foreach ($page_links as $page_link) : ?>
				<?php
				$is_current = strpos($page_link, 'current') !== false;
				$page_link = str_replace('page-numbers', 'archive-pager__page', $page_link);

				if ($is_current) {
					$page_link = str_replace('archive-pager__page current', 'archive-pager__page is-current', $page_link);
				}

				$page_link = str_replace('dots', 'archive-pager__page dots', $page_link);
				?>
				<li><?= $page_link; ?></li>
			<?php endforeach; ?>
		</ol><!-- /archive-pager -->

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
<?php endif; ?>
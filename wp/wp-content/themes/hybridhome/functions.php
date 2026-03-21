<?php
// --------------------------------------------------------------------------------
// WordPressのバージョン情報を非表示
// --------------------------------------------------------------------------------
remove_action('wp_head', 'wp_generator');

// --------------------------------------------------------------------------------
// <head>に入る不要なタグを削除
// --------------------------------------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// 絵文字
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// --------------------------------------------------------------------------------
// ログイン時の管理バーを非表示
// --------------------------------------------------------------------------------
add_filter( 'show_admin_bar', '__return_false' );

// --------------------------------------------------------------------------------
// ダッシュボードのWordPressへようこそ！を非表示
// --------------------------------------------------------------------------------
remove_action( 'welcome_panel', 'wp_welcome_panel' );

// --------------------------------------------------------------------------------
// 投稿時のオプション必要の無いもの非表示
// --------------------------------------------------------------------------------
function customize_admin_menu_and_meta_boxes() {
    // メタボックスの削除
    remove_meta_box('postexcerpt', 'post', 'normal'); // 抜粋
    remove_meta_box('trackbacksdiv', 'post', 'normal'); // トラックバック
    remove_meta_box('commentstatusdiv', 'post', 'normal'); // ディスカッション
    remove_meta_box('slugdiv', 'post', 'normal'); // スラッグ
    remove_meta_box('authordiv', 'post', 'normal'); // オーサー
    remove_meta_box('commentsdiv', 'post', 'normal'); // コメント

    // メニューの削除
    remove_menu_page('edit-tags.php?taxonomy=post_tag'); // タグメニューを非表示
}
add_action('admin_menu', 'customize_admin_menu_and_meta_boxes', 99); // 優先度を調整


//管理画面の「見出し１」等を削除する
function custom_editor_settings( $initArray ){
		$initArray['block_formats'] = "段落=p;大見出し=h2;アイコン有り中見出し=h3;アイコン無し中見出し=h4;";
		return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


// --------------------------------------------------------------------------------
// 管理画面 / ユーザー権限によるメニューの非表示設定
// --------------------------------------------------------------------------------
function remove_menus () {
	if (!current_user_can('activate_plugins')) { //編集者以下のユーザーに適用
		//remove_menu_page( 'index.php' ); // ダッシュボード.
		//remove_menu_page( 'edit.php' ); // 投稿.
		//remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' ); // 投稿 / カテゴリー
		remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' ); // 投稿 / タグ
		//remove_menu_page( 'upload.php' ); // メディア
		remove_menu_page( 'edit.php?post_type=page' ); // 固定
		remove_menu_page( 'edit-comments.php' ); // コメント
		remove_menu_page( 'themes.php' ); // 外観
		remove_menu_page( 'plugins.php' ); // プラグイン
		remove_menu_page( 'users.php' ); // ユーザー
		remove_menu_page( 'profile.php' ); // プロフィール
		remove_menu_page( 'tools.php' ); // ツール
		remove_menu_page( 'options-general.php' ); // 設定
		//remove_submenu_page( 'edit.php?post_type=buy', 'edit-tags.php?taxonomy=buy_type&amp;post_type=buy' ); // カスタム投稿 / カスタムタクソノミー
	}
}
add_action( 'admin_menu', 'remove_menus', 999 );

// --------------------------------------------------------------------------------
// 管理画面 / 管理者以外でバージョン更新案内を非表示
// --------------------------------------------------------------------------------
function update_nag_admin_only() {
	if ( ! current_user_can( 'administrator' ) ) {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
}
add_action( 'admin_init', 'update_nag_admin_only' );

// --------------------------------------------------------------------------------
// 管理画面 / 投稿一覧 / 表示カスタマイズ
// --------------------------------------------------------------------------------
if ( !function_exists( 'customize_admin_manage_posts_columns' ) ){
	function customize_admin_manage_posts_columns($columns) {
		//作成者カラムの削除
		//unset($columns['author']);
		//カテゴリーカラムの削除
		//unset($columns['categories']);
		//タグカラムの削除
		unset($columns['tags']);
		//コメントカラムの削除
		unset($columns['comments']);
		//日付カラムの削除
		//unset($columns['date']);
		return $columns;
	}
}
add_filter( 'manage_posts_columns', 'customize_admin_manage_posts_columns' );


// --------------------------------------------------------------------------------
// ログイン画面のロゴ変更
// --------------------------------------------------------------------------------
// function login_logo() {
// 	echo '<link rel="shortcut icon" type="image/x-icon" href="/assets/img/common/favicon.ico">' . "\n";
// 	echo '<style type="text/css">';
// 	echo '.login h1 a {background-image: url(/assets/img/common/logo.svg); width:80%;height:60px;background-size:60% auto;margin: 0 auto;}';
// 	echo 'body.login{background: #fff;}';
// 	echo '#login{width: 352px;}';
// 	echo '#nav,#backtoblog,.language-switcher{display: none;}';
// 	echo '</style>';
// }
// add_action('login_head', 'login_logo');


/* ==========================================================================
	<h2> / <h3> へアイコンを自動挿入（クラシックエディターでもOK）
========================================================================== */

// add_filter('the_content', 'dq_add_icon_to_headings', 20);

// function dq_add_icon_to_headings($content) {

// 	// 管理画面では加工しない（エディター表示など）
// 	if (is_admin()) {
// 		return $content;
// 	}

// 	// アイコンURL（指定どおり）
// 	$icon_url = trailingslashit(get_stylesheet_directory_uri()) . 'img/dq-icon.svg';

// 	// h2用（-midium）
// 	$icon_h2 = '<i class="dq-icon -midium"><img src="' . esc_url($icon_url) . '" class="svg" alt="" decoding="async"></i>';

// 	// h3用（-small）
// 	$icon_h3 = '<i class="dq-icon -small"><img src="' . esc_url($icon_url) . '" class="svg" alt="" decoding="async"></i>';

// 	// h2
// 	$pattern_h2 = '#<h2(?![^>]*\bdq-noicon\b)([^>]*)>(?!\s*<i[^>]*\bdq-icon\b)(.*?)</h2>#is';
// 	$content = preg_replace($pattern_h2, '<h2$1>' . $icon_h2 . '$2</h2>', $content);

// 	// h3
// 	$pattern_h3 = '#<h3(?![^>]*\bdq-noicon\b)([^>]*)>(?!\s*<i[^>]*\bdq-icon\b)(.*?)</h3>#is';
// 	$content = preg_replace($pattern_h3, '<h3$1>' . $icon_h3 . '$2</h3>', $content);

// 	return $content;
// }

/* ==========================================================================
	ページネーション（一覧/アーカイブ共通） - 既存マークアップ版
	- 数字（PC想定）
	- select（SP想定）
	- prev/next（無い場合も出力＋無効化）
========================================================================== */

function dq_render_archive_pager($query = null, $args = []) {

	// クエリ（未指定ならメインクエリ）
	if ($query === null) {
		global $wp_query;
		$query = $wp_query;
	}

	if (empty($query) || !($query instanceof WP_Query)) {
		return;
	}

	$total = (int) $query->max_num_pages;
	if ($total <= 1) {
		return;
	}

	$defaults = [
		'mid_size'	=> 1,
		'end_size'	=> 1,
	];
	$args = array_merge($defaults, (array) $args);

	$paged = max(1, (int) get_query_var('paged'));

	// paginate_links 用
	$big = 999999999;
	$base = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));
	$links = paginate_links([
		'base'		=> $base,
		'format'	=> '?paged=%#%',
		'current'	=> $paged,
		'total'		=> $total,
		'mid_size'	=> (int) $args['mid_size'],
		'end_size'	=> (int) $args['end_size'],
		'prev_next'	=> false, // ★これを追加（数字だけにする）
		'type'		=> 'array',
	]);
	if (empty($links) || !is_array($links)) {
		return;
	}

	// 矢印アイコン（$img_path が無い場合はテーマURLにフォールバック）
	$arrow_url = '';
	if (isset($GLOBALS['img_path']) && !empty($GLOBALS['img_path'])) {
		$arrow_url = $GLOBALS['img_path'] . 'common/arrow.svg';
	} else {
		$arrow_url = trailingslashit(get_stylesheet_directory_uri()) . 'img/common/arrow.svg';
	}

	$arrow_html = '<i class="arrow -white -w17" aria-hidden="true"><img src="' . esc_url($arrow_url) . '" alt="" decoding="async" class="svg"></i>';

	// prev/next URL
	$prev_url = ($paged > 1) ? get_pagenum_link($paged - 1) : '';
	$next_url = ($paged < $total) ? get_pagenum_link($paged + 1) : '';

	$prev_class = 'prev only-arrow' . ($prev_url ? '' : ' is-disabled');
	$next_class = 'next only-arrow' . ($next_url ? '' : ' is-disabled');

	?>
	<ol class="archive-pager_num">
		<?php
		foreach ($links as $link_html) {

			// dots（…）は li を出すならここで（不要なら continue で飛ばしてOK）
			if (strpos($link_html, 'dots') !== false) {
				echo '<li><span class="archive-pager__page is-dots">…</span></li>';
				continue;
			}

			// current
			if (strpos($link_html, 'current') !== false) {
				$label = wp_strip_all_tags($link_html);
				echo '<li><span class="archive-pager__page is-current" aria-current="page">' . esc_html($label) . '</span></li>';
				continue;
			}

			// 通常リンク（class差し替え）
			$link_html = str_replace('page-numbers', 'archive-pager__page', $link_html);
			echo '<li>' . $link_html . '</li>';
		}
		?>
	</ol>

	<div class="archive-pager_select">
		<div><p><?php echo esc_html($paged); ?></p><span>/</span><p><?php echo esc_html($total); ?></p></div>
		<select onchange="if(this.value){window.location.href=this.value;}">
			<?php
			for ($i = 1; $i <= $total; $i++) {
				$url = get_pagenum_link($i);
				echo '<option value="' . esc_url($url) . '"' . selected($i, $paged, false) . '>' . esc_html($i) . '</option>';
			}
			?>
		</select>
	</div>

	<div class="archive-pager_nav">
		<a
			<?php if ($prev_url) : ?>
				href="<?php echo esc_url($prev_url); ?>"
			<?php else : ?>
				aria-disabled="true" tabindex="-1" role="link"
			<?php endif; ?>
			class="<?php echo esc_attr($prev_class); ?>"
		>
			<?php echo $arrow_html; ?>
		</a>

		<a
			<?php if ($next_url) : ?>
				href="<?php echo esc_url($next_url); ?>"
			<?php else : ?>
				aria-disabled="true" tabindex="-1" role="link"
			<?php endif; ?>
			class="<?php echo esc_attr($next_class); ?>"
		>
			<?php echo $arrow_html; ?>
		</a>
	</div>
	<?php
}


// --------------------------------------------------------------------------------
// タグを非表示
// --------------------------------------------------------------------------------
// 投稿画面のテキストエディタ（Quicktags）から del / ins / code / more を除外
// add_action('load-post.php', 'my_customize_quicktags');
// add_action('load-post-new.php', 'my_customize_quicktags');
// function my_customize_quicktags() {
//   add_filter('quicktags_settings', function ($init, $editor_id) {
//     // エディタIDが content のときだけ（必要なら）
//     if ($editor_id !== 'content') return $init;

//     // 表示したいボタンだけを列挙（順序もここで決まる）
//     // 既定: strong,em,link,block,del,ins,img,ul,ol,li,code,more,close
//     $init['buttons'] = 'strong,em,link,block,img,ul,ol,li,close';
//     return $init;
//   }, 10, 2);
// }

// --------------------------------------------------------------------------------
// アイキャッチを有効化
// --------------------------------------------------------------------------------
add_theme_support('post-thumbnails');
	function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
	$content = get_the_post_thumbnail($post->ID, 'thumbnail') . $content;
	}
	return $content;
	}
	add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

// --------------------------------------------------------------------------------
// エディター編集
// --------------------------------------------------------------------------------
// Quicktags のボタンを削除（del / ins / code / more）
add_action( 'admin_print_footer_scripts', function () {
	if ( wp_script_is( 'quicktags' ) ) : ?>
		<script>
		if (window.QTags) {
			['del','ins','code','more'].forEach(function(id){
				QTags.removeButton(id);
			});
		}
		</script>
	<?php endif;
});

// --------------------------------------------------------------------------------
// ショートコードを削除
// --------------------------------------------------------------------------------
function content_excerpt($content,$num){
	$content = preg_replace('#\[[^\]]+\]#', '',$content);
	$content = strip_tags($content);
	$content = str_replace(array("\r\n","\n","\r"),"",$content);
	$content = mb_strcut($content,0,$num,'UTF-8');
	return $content;
}


// --------------------------------------------------------------------------------
// 画像についてくるpタグを削除
// --------------------------------------------------------------------------------
function remove_p_on_images($content){
return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'remove_p_on_images');

// --------------------------------------------------------------------------------
// 設置したeditor-style.cssをビジュアルエディターに適用
// --------------------------------------------------------------------------------
add_action('after_setup_theme', function () {
  add_theme_support('editor-styles');           // 念のため
  add_editor_style('editor-style.css');         // ビジュアルエディタ本体
});
/* ==========================================================================
	TinyMCE（全インスタンス）に editor-style.css を適用
========================================================================== */

add_filter('mce_css', function ($mce_css) {

	// editor-style.css のURL（配置場所に合わせて調整）
	// 例1：テーマ直下に editor-style.css がある場合
	$css_url = get_stylesheet_directory_uri() . '/editor-style.css';

	// 例2：/css/editor-style.css の場合はこっち
	// $css_url = get_stylesheet_directory_uri() . '/css/editor-style.css';

	$mce_css .= ($mce_css ? ',' : '') . $css_url;

	return $mce_css;
});

// --------------------------------------------------------------------------------
//editor-style.cssのキャッシュ除け
// --------------------------------------------------------------------------------

function extend_tiny_mce_before_init( $mce_init ) {
 $mce_init['cache_suffix']= 'v='.time();
 return $mce_init;
}
add_filter( 'tiny_mce_before_init', 'extend_tiny_mce_before_init' );


// 2) TinyMCE（テンプレのプレビュー含む）にも同じCSSを重複なく追加
add_filter('tiny_mce_before_init', function ($init) {
  $path = get_stylesheet_directory() . '/editor-style.css';
  $url  = get_stylesheet_directory_uri() . '/editor-style.css';
  if (file_exists($path)) {
    $ver = filemtime($path);
    $css_url = $url . '?ver=' . $ver;

    // 既に content_css がある場合は末尾に追加、重複チェック
    if (!empty($init['content_css'])) {
      $list = array_map('trim', explode(',', $init['content_css']));
      if (!in_array($css_url, $list, true)) {
        $list[] = $css_url;
      }
      $init['content_css'] = implode(',', $list);
    } else {
      $init['content_css'] = $css_url;
    }
  }

  // 不要なら cache_suffix は使わない（毎回変わると重い）
  // 使う場合は固定値にするなど（例：テーマ版数）
  // $init['cache_suffix'] = 'v=' . wp_get_theme()->get('Version');

  return $init;
});

// 3) 環境によっては mce_css が効くケースにも対応（重複なしで追記）
add_filter('mce_css', function ($mce_css) {
  $path = get_stylesheet_directory() . '/editor-style.css';
  $url  = get_stylesheet_directory_uri() . '/editor-style.css';
  if (!file_exists($path)) return $mce_css;

  $ver = filemtime($path);
  $css_url = $url . '?ver=' . $ver;

  $list = array_filter(array_map('trim', explode(',', (string)$mce_css)));
  if (!in_array($css_url, $list, true)) {
    $list[] = $css_url;
  }
  return implode(',', $list);
});

// --------------------------------------------------------------------------------
//サムネイル設定
// --------------------------------------------------------------------------------
// 最上位カテゴリのスラッグを返す
if ( ! function_exists('get_top_category_slug_for_post') ) {
	function get_top_category_slug_for_post( $post_id = null ) {
		$post_id = $post_id ?: get_the_ID();
		$cats = get_the_category( $post_id );
		if ( empty($cats) ) return '';

		$tops = [];
		foreach ( $cats as $c ) {
			$t = $c;
			while ( $t && (int) $t->parent !== 0 ) {
				$t = get_category( $t->parent );
				if ( is_wp_error($t) ) { $t = null; break; }
			}
			if ( $t ) $tops[ $t->slug ] = true;
		}
		// 任意の優先順位
		if ( isset($tops['news']) ) return 'news';
		if ( isset($tops['blog']) ) return 'blog';
		$keys = array_keys($tops);
		return $keys[0] ?? '';
	}
}

// 親スラッグ→ダミー画像パス
if ( ! function_exists('get_dummy_by_top_slug') ) {
	function get_dummy_by_top_slug( $top_slug, $base_path = '' ) {
		if ( $base_path === '' ) {
			$base_path = trailingslashit( get_stylesheet_directory_uri() ) . 'assets/img/';
		}
		$map = [
			'news' => 'common/news-dummy.webp',
			'blog' => 'common/blog-dummy.webp',
		];
		$filename = $map[ $top_slug ] ?? 'common/blog-dummy.webp';
		return $base_path . $filename;
	}
}
/* ==========================================================================
	renovation タクソノミーを1つだけ選択可能にする
========================================================================== */
function custom_admin_taxonomy_single_select_script() {
	$screen = get_current_screen();
	if (!$screen) return;

	if ($screen->post_type !== 'works') return;

	?>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const inputs = document.querySelectorAll('#taxonomy-renovation input[type="checkbox"]');
		if (!inputs.length) return;

		inputs.forEach((input) => {
			input.addEventListener('change', function () {
				if (!this.checked) return;

				inputs.forEach((other) => {
					if (other !== this) {
						other.checked = false;
					}
				});
			});
		});
	});
	</script>
	<?php
}
add_action('admin_footer-post.php', 'custom_admin_taxonomy_single_select_script');
add_action('admin_footer-post-new.php', 'custom_admin_taxonomy_single_select_script');

/* ==========================================================================
	works を 投稿ID ベースのパーマリンクに変更
========================================================================== */

function custom_works_post_type_link($post_link, $post) {
	if (!$post || $post->post_type !== 'works') {
		return $post_link;
	}

	return home_url('/works/' . $post->ID . '/');
}
add_filter('post_type_link', 'custom_works_post_type_link', 10, 2);


/* ==========================================================================
	works 用のリライトルール追加
========================================================================== */

function custom_works_rewrite_rule() {
	add_rewrite_rule(
		'^works/([0-9]+)/?$',
		'index.php?post_type=works&p=$matches[1]',
		'top'
	);
}
add_action('init', 'custom_works_rewrite_rule');


/* ==========================================================================
	Classic Editor / SCF の WYSIWYG で Quicktags を有効化
========================================================================== */
function my_enable_quicktags_for_all_editors( $settings, $editor_id ) {
	$settings['quicktags'] = true;
	$settings['tinymce'] = true;
	return $settings;
}
add_filter( 'wp_editor_settings', 'my_enable_quicktags_for_all_editors', 10, 2 );

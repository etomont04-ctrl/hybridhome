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
		$initArray['block_formats'] = "段落=p;大見出し=h2;小見出し=h3;";
		return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

/* ==========================================================================
	SCF の TinyMCE 書式プルダウンを 段落 / 見出し2 / 見出し3 のみに見せる
	※ 通常投稿本文のエディタには干渉しない
========================================================================== */
function my_limit_scf_tinymce_format_menu() {
	if ( ! is_admin() ) return;
	?>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const allowLabels = ['段落', '見出し2', '見出し3'];

		const normalizeText = (text) => {
			return (text || '').replace(/\s+/g, '').trim();
		};

		const hasScfEditor = () => {
			return !!document.querySelector(
				'.smart-cf-meta-box .wp-editor-wrap textarea.wp-editor-area:not(#content), ' +
				'.smart-custom-fields-meta-box .wp-editor-wrap textarea.wp-editor-area:not(#content), ' +
				'.scf-meta-box .wp-editor-wrap textarea.wp-editor-area:not(#content)'
			);
		};

		const isScfFormatMenuOpen = () => {
			const activeWrap = document.querySelector('.wp-editor-wrap.tmce-active');
			if (!activeWrap) return false;

			const textarea = activeWrap.querySelector('textarea.wp-editor-area');
			if (!textarea) return false;

			if (textarea.id === 'content') return false;

			return true;
		};

		const hideMenuItems = () => {
			if (!hasScfEditor()) return;
			if (!isScfFormatMenuOpen()) return;

			document.querySelectorAll('.mce-menu-item').forEach((item) => {
				const textEl = item.querySelector('.mce-text');
				if (!textEl) return;

				const label = normalizeText(textEl.textContent);

				if (!allowLabels.includes(label)) {
					item.style.display = 'none';
				} else {
					item.style.display = '';
				}
			});
		};

		document.addEventListener('click', function () {
			setTimeout(hideMenuItems, 0);
			setTimeout(hideMenuItems, 100);
		}, true);

		const observer = new MutationObserver(function () {
			hideMenuItems();
		});

		observer.observe(document.body, {
			childList: true,
			subtree: true
		});
	});
	</script>
	<?php
}
add_action( 'admin_footer', 'my_limit_scf_tinymce_format_menu', 100 );


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

/* ==========================================================================
	SCF / Classic Editor の TinyMCE に editor-style.css を追加
========================================================================== */
function my_add_editor_style_to_mce_css( $mce_css ) {
	$path = get_stylesheet_directory() . '/editor-style.css';
	$url = get_stylesheet_directory_uri() . '/editor-style.css';

	if ( ! file_exists( $path ) ) return $mce_css;

	$css_url = $url . '?ver=' . filemtime( $path );

	$list = array_filter( array_map( 'trim', explode( ',', (string) $mce_css ) ) );

	if ( ! in_array( $css_url, $list, true ) ) {
		$list[] = $css_url;
	}

	return implode( ',', $list );
}
add_filter( 'mce_css', 'my_add_editor_style_to_mce_css', 999 );
/* ==========================================================================
	SCF WYSIWYG iframe に editor-style.css を直接追加
========================================================================== */
function my_add_editor_style_to_scf_iframe() {
	$path = get_stylesheet_directory() . '/editor-style.css';
	$url = get_stylesheet_directory_uri() . '/editor-style.css';

	if ( ! file_exists( $path ) ) return;

	$css_url = esc_url( $url . '?ver=' . filemtime( $path ) );
	?>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const cssUrl = '<?= $css_url; ?>';

		const appendCssToIframe = (iframe) => {
			if (!iframe) return;

			const doc = iframe.contentDocument || iframe.contentWindow.document;
			if (!doc || !doc.head) return;

			if (doc.querySelector('link[data-scf-editor-style="true"]')) return;

			const link = doc.createElement('link');
			link.rel = 'stylesheet';
			link.href = cssUrl;
			link.setAttribute('data-scf-editor-style', 'true');
			doc.head.appendChild(link);
		};

		const scanIframes = () => {
			document.querySelectorAll('iframe').forEach((iframe) => {
				try {
					appendCssToIframe(iframe);
				} catch (e) {}
			});
		};

		scanIframes();

		const observer = new MutationObserver(() => {
			scanIframes();
		});

		observer.observe(document.body, {
			childList: true,
			subtree: true
		});
	});
	</script>
	<?php
}
add_action( 'admin_footer', 'my_add_editor_style_to_scf_iframe', 100 );

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
	if ( ! is_admin() ) return $settings;

	$settings['quicktags'] = true;
	$settings['tinymce'] = true;
	$settings['media_buttons'] = true;

	return $settings;
}
add_filter( 'wp_editor_settings', 'my_enable_quicktags_for_all_editors', 99, 2 );
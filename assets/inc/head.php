	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="width=device-width, initial-scale=1, user-scalable=yes, viewport-fit=cover, maximum-scale=1.0" name="viewport">
	<meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
	<meta name="format-detection" content="telephone=no"><?php
	$currentUrl = "http" . (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url = $currentUrl;
	?>
	<meta property="og:title" content="<?php
		if ( $url == "https://shishi-w.com/" ) {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社';
		} else {
			if ($TITLE) echo $TITLE, '｜住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社';
		}
	?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:image" content="<?php
		if ( isset($IMAGE))  {
			echo $IMAGE;
		} else {
			echo $ROOT_DIR, 'assets/img/common/ogp.jpg';
		}
	?>">
	<meta property="og:site_name" content="住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:description" content="<?php
		if ( $DESCRIPTION ) {
			echo $DESCRIPTION;
		} else {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）は東京・神奈川に拠点を置く総合リフォーム会社';
		}
	?>">
	<meta name="description" content="<?php
		if ( $DESCRIPTION ) {
			echo $DESCRIPTION;
		} else {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）は東京・神奈川に拠点を置く総合リフォーム会社';
		}
	?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php
		if ( $url === "https://shishi-w.com/" ) {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社';
		} else {
			if ($TITLE) echo $TITLE, '｜住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社';
		}
	?>">
	<meta name="twitter:description" content="<?php
		if ($DESCRIPTION) {
			echo $DESCRIPTION;
		} else {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）は東京・神奈川に拠点を置く総合リフォーム会社';
		}
	?>">
	<meta name="twitter:image" content="<?php
		if (isset($IMAGE)) {
			echo $IMAGE;
		} else {
			echo $ROOT_DIR, 'assets/img/common/ogp.jpg';
		}
	?>">
	<meta name="twitter:url" content="<?php echo $url; ?>">
	<title><?php
		if ( $url === "https://shishi-w.com/" ) {
			echo '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社';
		} else {
			echo ($TITLE ? $TITLE . '｜住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社' : '住まいの総合リフォーム HYBRID HOME（ハイブリッドホーム）｜東京・神奈川に拠点を置く総合リフォーム会社');
		}
	?></title>
	<?php if ( $swiper == "true" ) { ?><link rel="stylesheet" href="<?php echo $ROOT_DIR; ?>assets/css/swiper-bundle.min.css"><?php } ?>

	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/common/favicon.ico">
	<link rel="stylesheet" href="<?php echo $ROOT_DIR; ?>assets/css/common.css?<?php echo date("Ymd-Hi"); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">

	<?php if (isset($UNIQUE_CSS)) {echo $UNIQUE_CSS;} ?>

	<script src="<?php echo $ROOT_DIR; ?>assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo $ROOT_DIR; ?>assets/js/jquery.inview.min.js"></script>
	<script src="<?php echo $ROOT_DIR; ?>assets/js/script.js?<?php echo date("Ymd-Hi"); ?>"></script>
	<?php if ( $swiper == "true" ) { ?>
	<script src="<?php echo $ROOT_DIR; ?>assets/js/swiper-bundle.min.js"></script>
	<?php } ?>
	<?php if (isset($UNIQUE_SCRIPT)) {echo $UNIQUE_SCRIPT;} ?>
	<?php //if (function_exists('wp_head')) { wp_head(); } ?>
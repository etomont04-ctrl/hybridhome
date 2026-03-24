<?php
$TITLE         = 'お知らせ';
$DESCRIPTION   = '';
$KEYWORDS      = '';
$swiper = "false";
$Ymd = date("Ymd-Hi");
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/news.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="../assets/js/news.js?'.$Ymd.'"></script>';
$uri = "news";
$this_img_path = $img_path .  "news/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include($root_path . 'assets/inc/head.php'); ?>
</head>
<body id="top">
<div class="of-wrap">
	<?php include($root_path . 'assets/inc/menu.php'); ?>
	<main>
	<section class="news-fv inview">
		<div class="inr -m2000">
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="お知らせ" decoding="async"></h1>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>お知らせ</p>
			</div>
			<figure class="cloud -left"><img src="<?= $img_path; ?>news/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>news/fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->
	<section class="news_wrap">
		<div class="inr -w1400 base-wrap">
			<div class="bird-area">
				<figure class="bird bird01"><img src="<?= $this_img_path; ?>fv-bird01.webp" alt="" decoding="async"></figure>
				<figure class="bird bird02 inview sb"><img src="<?= $this_img_path; ?>fv-bird02.webp" alt="" decoding="async"></figure>
			</div>
			<nav class="categorys">
				<div class="tit_area conditions_btn">
					<h2><img src="<?= $this_img_path; ?>category_title.webp" alt="記事" decoding="async"></h2>
					<span class="en en-tit">Category</span>
					<span class="btn"></span>
				</div>
				<ul class="conditions_list">
					<li><a href="#">すべて<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">お知らせ<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">よくある質問<span class="en">（ 10 ）</span></a></li>
					<li><a href="#">お客様アンケート<span class="en">（ 10 ）</span></a></li>
				</ul>
			</nav>
			<div class="detail_wrap round-con">
				<figure class="main-image">
					<img src="<?= $this_img_path; ?>detail-dummy.png" alt="" decoding="async" class="fit_img">
				</figure>
				<div class="kiji_area">
					<h2>大きな見出しが入ります</h2>
					<div class="tit_area">
						<h2 class="scaleX-wrap">
							<span class="scaleX">こだわりのリフォーム</span>
						</h2>
						<span class="en">My Reform Style</span>
					</div>
					<p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。（通常）<br>
						<br>
						<strong>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。（太字）</strong>
					</p>
					<blockquote>
						<p>※注釈などがはいります。 <a href="#">リンク入り注釈はこちら</a></p>
					</blockquote>
					<h3>小さな見出しが入ります</h3>
					<div class="column-image -half">
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
					</div>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="https://placehold.jp/720x480.png" alt="" decoding="async"></div>
						</div>
					</div>
					<ul>
						<li>リスト項目</li>
						<li>リスト項目</li>
						<li>リスト項目</li>
						<li>リスト項目</li>
					</ul>
					<ol>
						<li>リスト項目</li>
						<li>リスト項目</li>
						<li>リスト項目</li>
						<li>リスト項目</li>
					</ol>
					<a href="<?= $reform_link ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">ボタンリンクボタンリンク</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
					<img src="https://placehold.jp/720x480.png" alt="" decoding="async">
				</div>
				<div class="d-pager_wrap">
					<a href="#" class="pager_link -prev">
						<figure class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img"></figure>
						<div class="text_area">
							<div>
								<span class="en">
									<i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>
									Prev
								</span>
								<p>豊かな風景を取り込む、自然素材の…</p>
							</div>
						</div>
					</a>
					<a href="#" class="pager_link -next">
						<figure class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img"></figure>
						<div class="text_area">
							<div>
								<span class="en">
									Next
									<i class="arrow"><img src="<?= $img_path; ?>common/arrow-g.png" alt="" decoding="async"></i>
								</span>
								<p>豊かな風景を取り込む、自然素材の…</p>
							</div>
						</div>
					</a>
					<a href="<?= $works_link ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">ブログ一覧</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div><!-- d-pager_area -->
			</div><!-- /detail_wrap -->

		</div><!-- /inr -->
	</section><!-- / works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
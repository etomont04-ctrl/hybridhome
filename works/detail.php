<?php
$TITLE         = '詳細ページ｜施工実績';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/splide.min.css?'.$Ymd.'">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/BeerSlider.css">';
$UNIQUE_CSS .= '<link rel="stylesheet" href="'.$ROOT_DIR.'assets/css/works.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '<script src="'.$ROOT_DIR.'assets/js/splide.min.js?'.$Ymd.'"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/BeerSlider.min.js"></script>';
$UNIQUE_SCRIPT .= '<script src="'.$ROOT_DIR.'assets/js/works.js?'.$Ymd.'"></script>';
$uri = "works";
$this_img_path = $img_path .  "works/";
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
	<section class="works_d-fv inview">
		<div class="inr -m2000">
			<figure class="fv-img">
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>fv-sp.webp">
					<img src="<?= $this_img_path; ?>fv.webp" alt="" class="fit_img">
				</picture>
			</figure>
			<figure class="cloud -risu inview sb"><img src="<?= $this_img_path; ?>works_d-fv-risu.webp" alt="" decoding="async"></figure>
			<figure class="cloud -duck inview"><img src="<?= $this_img_path; ?>works_d-fv-duck.webp" alt="" decoding="async"></figure>
			<div class="d-info_area">
				<h1 class="inview">
					<span class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="愛車と同居できる家">愛車と同居できる家</span>
					</span>
				</h1>
				<div class="cates">
					<div class="area-links">
						<a href="#" class="area-links_item -reno -uchi">
							<picture>
								<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>works_d-uchi-sp.png">
								<img src="<?= $this_img_path; ?>works_d-uchi.png" alt="うちリノ">
							</picture>
						</a>
						<a href="#" class="area-links_item -town">町田市</a>
					</div>
					<div class="tags">
						<a href="#">#ウッドデッキ</a>
						<a href="#">#エクステリア</a>
						<a href="#">#ウッドデッキ</a>
						<a href="#">#エクステリア</a>
						<a href="#">#ウッドデッキ</a>
						<a href="#">#エクステリア</a>
						<a href="#">#ウッドデッキ</a>
						<a href="#">#エクステリア</a>
					</div>
				</div>
				<div class="read">
					<div class="img_area">
						<div class="img_wrap">
							<figure class="img"><img src="<?= $this_img_path; ?>fv.webp" alt="" decoding="async" class="fit_img"></figure>
						</div>
					</div>
					<p>築40年を迎え、より快適に安心して暮らせるように耐震補強を計画。<br>補強工事に伴い外壁の解体が必要となる為、モルタルから耐久性の良いサイディングに張替え、屋根も重い瓦から軽いスレートに葺き替えました。併せて、サッシも交換し、屋根や壁には断熱材を入れて、家全体の断熱性能も向上させました。</p>
				</div>
				<div class="data">
					<div class="tit_area">
						<h3><span class="scaleX-only">物件情報</span></h3>
						<span class="en">Data</span>
					</div>
					<dl class="data-list">
						<div class="data_row">
							<dt class="data_head">所在地</dt>
							<dd class="data_body">町田市　Ｎ様邸</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">築年数</dt>
							<dd class="data_body">約40年</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">建坪</dt>
							<dd class="data_body">8坪</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">工事内容</dt>
							<dd class="data_body">耐震・断熱・外装・サッシ交換</dd>
						</div>
					</dl>
					<dl class="data-list">
						<div class="data_row">
							<dt class="data_head">工事期間</dt>
							<dd class="data_body">約60日</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">工事費</dt>
							<dd class="data_body">約800万円</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">担当者</dt>
							<dd class="data_body">Tハイブリッドホーム町田店　藤井 健</dd>
						</div>
					</dl><!-- /data-list -->
				</div>
			</div>
		</div>
	</section><!-- /works-d_fv -->

	<section class="bf_area kiji inr -w1400">
		<div class="beer-slider">
			<img src="<?php echo $this_img_path; ?>after-img.webp" alt="" decoding="async">
			<div class="beer-reveal">
				<img src="<?php echo $this_img_path; ?>before-img.webp" alt="" decoding="async">
			</div>
		</div>
		<!-- /beer-slider -->
		<p>築40年を迎え、より快適に安心して暮らせるように耐震補強を計画。補強工事に伴い外壁の解体が必要となる為、モルタルから耐久性の良いサイディングに張替え、屋根も重い瓦から軽いスレートに葺き替えました。併せて、サッシも交換し、屋根や壁には断熱材を入れて、家全体の断熱性能も向上させました。</p>
	</section>

	<section class="bf_area kiji inr -w1400">
		<div class="beer-slider">
			<img src="<?php echo $this_img_path; ?>after-img.webp" alt="" decoding="async">
			<div class="beer-reveal">
				<img src="<?php echo $this_img_path; ?>before-img.webp" alt="" decoding="async">
			</div>
		</div>
		<!-- /beer-slider -->
		<p>築40年を迎え、より快適に安心して暮らせるように耐震補強を計画。補強工事に伴い外壁の解体が必要となる為、モルタルから耐久性の良いサイディングに張替え、屋根も重い瓦から軽いスレートに葺き替えました。併せて、サッシも交換し、屋根や壁には断熱材を入れて、家全体の断熱性能も向上させました。</p>
	</section>


	<div class="works-detail">
		<div class="inr -w1400 round-con">
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="リフォームプランリフォームプランリフォームプラン">リフォームプランリフォームプランリフォームプラン</span>
					</h2>
					<span class="en">Plan</span>
				</div>
				<p class="n_txt">プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。プランの説明が入ります。</p>
				<div class="column-image -full">
					<div>
						<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="着工から完成まで">着工から完成まで</span>
					</h2>
					<span class="en">Story</span>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="解体工事">解体工事</span>
						</span>
					</h3>
					<p>長年お世話になった建物を解体し、構造体だけの姿にしていきます。今回は思い出の残る和室の欄間をきれいに解体し保存し改装時に使用しました。</p>
					<div class="column-image -third">
						<div>
							<div class="img">
								<img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async">
							</div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="こだわりのリフォーム">こだわりのリフォーム</span>
					</h2>
					<span class="en">My Reform Style</span>
				</div>
				<p>リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。リフォームの説明がはいります。</p>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="木の香りが漂う和モダンなリビングダイニング。">木の香りが漂う和モダンなリビングダイニング。</span>
						</span>
					</h3>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
							<p>長年お世話になった建物を解体し、構造体だけの姿にしていきます。今回は思い出の残る和室の欄間をきれいに解体し保存し改装時に使用しました。</p>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -half">
						<div>
							<div class="img -vertical"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img -vertical"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
				<div class="story_sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="補強工事／基礎補強">補強工事／基礎補強</span>
						</span>
					</h3>
					<p>鉄の５倍の引張り強さをもつアラミド繊維を高い接着力をもつ樹脂で基礎の上から固める補強工事。</p>
					<div class="column-image -third">
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>

						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
						<div>
							<div class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async"></div>
						</div>
					</div>
				</div>
			</section><!-- /works-detail_sec -->
			<section class="works-detail_sec">
				<div class="tit_area">
					<h2 class="scaleX-wrap">
						<span class="scaleX" data-scale="0.75" data-text="お客様の声">お客様の声</span>
					</h2>
					<span class="en">Voice</span>
				</div>

				<div class="voice-sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="住んで18年目の悩みに寄り添う">住んで18年目の悩みに寄り添う</span>
						</span>
						<span class="balloon_tail"></span>
					</h3>
					<ul class="voice-qa">
						<li>
							<div class="img_area">
								<div class="img_wrap">
									<figure class="img"><img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img"></figure>
									<span class="name">ハイブリットホーム</span>
								</div>
							</div>
							<div class="text_area">
								<p>最初にご相談いただいたのは、リビングの窓でした。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。</p>
							</div>
						</li>
						<li>
							<div class="img_area">
								<div class="img_wrap">
									<figure class="img"><img src="<?= $this_img_path; ?>voice_img-client.webp" alt="" decoding="async" class="fit_img"></figure>
									<span class="name">ハイブリットホーム</span>
								</div>
							</div>
							<div class="text_area">
								<p>最初にご相談いただいたのは、リビングの窓でした。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。した。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。した。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。</p>
							</div>
						</li>
					</ul>
				</div><!-- / voice-sec -->

				<div class="voice-sec">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="住んで18年目の悩みに寄り添う">住んで18年目の悩みに寄り添う</span>
						</span>
						<span class="balloon_tail"></span>
					</h3>
					<ul class="voice-qa">
						<li>
							<div class="img_area">
								<div class="img_wrap">
									<figure class="img"><img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img"></figure>
									<span class="name">ハイブリットホーム</span>
								</div>
							</div>
							<div class="text_area">
								<p>最初にご相談いただいたのは、リビングの窓でした。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。</p>
							</div>
						</li>
						<li>
							<div class="img_area">
								<div class="img_wrap">
									<figure class="img"><img src="<?= $this_img_path; ?>voice_img-client.webp" alt="" decoding="async" class="fit_img"></figure>
									<span class="name">ハイブリットホーム</span>
								</div>
							</div>
							<div class="text_area">
								<p>最初にご相談いただいたのは、リビングの窓でした。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。した。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。した。西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。</p>
							</div>
						</li>
					</ul>
				</div><!-- / voice-sec -->
				<div class="voice-sec -hitokoto">
					<h3>
						<span class="scaleX-wrap">
							<span class="scaleX" data-scale="0.75" data-text="担当者からひとこと">担当者からひとこと</span>
						</span>
						<span class="balloon_tail"></span>
					</h3>
					<ul class="voice-qa -photo">
						<li>
							<div class="img_area">
								<div class="img_wrap">
									<figure class="img"><img src="<?= $this_img_path; ?>voice_img-hybrid.webp" alt="" decoding="async" class="fit_img"></figure>
									<span class="name">ハイブリットホーム</span>
								</div>
							</div>
							<div class="text_area">
								<p>最防火・耐震性を確保すると、以前より窓の数やサイズに制約がでてしまうので、できるだけ陽の光が差し込むように工夫をしました。リフォームを通して、H様の暮らしが安心・安全で楽しくなるお手伝いができてうれしく思います。</p>
							</div>
						</li>
						<li>
							<div class="photo_area">
								<figure class="img"><img src="<?= $this_img_path; ?>after-img.webp" alt="" decoding="async" class="fit_img"></figure>
							</div>
						</li>
					</ul>
				</div><!-- / voice-sec -->
			</section>
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
						<span class="text">施工事例一覧</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div><!-- d-pager_area -->
		</div><!-- /inr -->
	</ddiv><!-- / works-detail -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
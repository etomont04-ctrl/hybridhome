<?php
$TITLE         = 'ハイブリッドの仲間たち';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/partner.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "partner";
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
	<section class="fv inview">
		<div class="inr -m2000">
			<figure class="fv-img">
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>fv-sp.webp">
					<img src="<?= $this_img_path; ?>fv.webp" alt="" class="fit_img">
				</picture>
			</figure>
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="ハイブリッドの仲間たち" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>ハイブリッドの仲間たち</p>
			</div>
		</div>
	</section><!-- /fv -->
	<section class="intro">
		<div class="inr -w980">
			<div class="text_wrap">
				<h2>
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>intro_title-sp.webp">
						<img src="<?= $this_img_path; ?>intro_title.webp" alt="工事はわたしたちにおまかせください。">
					</picture>
				</h2>
				<p>住まいのリノベーションでは、実際にお客様の家にうかがい、現場で工事をする「職人」の存在がとても大切です。<br>ハイブリッドホームでは、経験豊かな職人・会社と協力業者会をつくり、フィードバックを行っています。常に技術力とチームワークの向上をすることで、顧客満足度アップを目指しています。毎年のCS大会（顧客満足）で常に“優秀職方”に選ばれる腕利きの職人たちに話を聞きました。</p>
			</div>
			<figure class="bird bird01"><img src="<?= $this_img_path; ?>intro-bird01.webp" alt="" decoding="async"></figure>
			<figure class="bird bird02"><img src="<?= $this_img_path; ?>intro-bird02.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>intro-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>intro-cloud02.webp" alt="" decoding="async"></figure>
		</div><!-- / inr -->
		<div class="town-bg"></div>
		<figure  class="btm_risu">
			<img src="<?= $this_img_path; ?>intro-btm_risu.webp" alt="" decoding="async">
		</figure>
		<div class="intro-loop">
			<div class="intro-loop__inner">
				<img src="<?= $this_img_path; ?>intro-loop_img01.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img02.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img03.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img04.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img05.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img06.webp" decoding="async"  class="intro-loop__img">
			</div>
			<div class="intro-loop__inner">
				<img src="<?= $this_img_path; ?>intro-loop_img01.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img02.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img03.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img04.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img05.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img06.webp" decoding="async"  class="intro-loop__img">
			</div>
		</div><!-- /intro-loop -->
		<figure class="btm_cloud">
			<img src="<?= $this_img_path; ?>intro-cloud03.webp" alt="" decoding="async">
		</figure>
	</section><!-- /intro -->

	<section class="voice">
		<div class="inr -w1300">
			<div class="illust_area">
				<figure class="duck inview sb"><img src="<?= $this_img_path; ?>voice-duck.webp" alt="" decoding="async"></figure>
				<figure class="craftsman inview"><img src="<?= $this_img_path; ?>voice-craftsman.webp" alt="" decoding="async"></figure>
			</div>
			<h2><img src="<?= $this_img_path; ?>voice-title.webp" alt="職人の声" decoding="async"></h2>
			<span class="en en-tit">Partner Voice</span>

			<div class="partner-box -box01">
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice-img01.webp" alt="" decoding="async"></figure>
				</div><!-- img_area -->
				<div class="text_area">
					<div class="bubble_area -bubble01 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kikuchi.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_kikuchi.png" alt="大工 菊池さん" decoding="async"></p>
						</div>
						<div class="bubble_box  -white">
							<p class="n_txt">リフォームやリノベーションは、イレギュラーなことがたくさん起きます。そんな時に対応できる力が、わたしたちには必要とされますね</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble02 -bl inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-nagata.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_nagata.png" alt="大工 長田さん" decoding="async"></p>
						</div>
						<div class="bubble_box -bubble02 -green -br">
							<p class="n_txt">例えば壁を開けてみたら、想定していた構造と違ったとか。やっぱり図面じゃ追tいつかないことが出てくるんですよね。その時に、正直にお客さんに説明するようにしています。実際見てもらいながら、こんなふうにすれば長持ちしますよ、と伝えると、納得してくれる方が多いです</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_area -->
				</div><!-- text_area -->
			</div><!-- /box01 -->
			<div class="partner-box -box02 -rev">
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice-img02.webp" alt="" decoding="async"></figure>
				</div><!-- img_area -->
				<div class="text_area">
					<div class="bubble_area -bubble03 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kashima.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_kashima.png" alt="外構 鹿島さん" decoding="async"></p>
						</div>
						<div class="bubble_box -green02">
							<p class="n_txt">住みながらの工事も多いから、どんな作業をしているのか、お客さんも気になりますよね。できる限りわかりやすいようお伝えするようには心がけていますね</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble04 -bl inview bt">
						<div class="bubble_box -bubble02 -white">
							<p class="n_txt">お客さんとわたしたちをつないでくれるのは、ハイブリッドホームの現場監督の力。コミュニケーションが取りやすい空気をつくってくれているのは、ありがたい</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
					<div class="bubble_area -bubble05 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-asanuma.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_asanuma.png" alt="内装 浅沼さん" decoding="async"></p>
						</div>
						<div class="bubble_box -green">
							<p class="n_txt">ハイブリッドホームの社員さんは、毎日現場を回ってくれるので、困った時にすぐに相談ができる。するとすぐに対処ができて、工事もスムーズです</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble06 -bl inview bt">
						<div class="bubble_box -bubble02 -white">
							<p class="n_txt">感心するのは、どの職人も熱心な人を集めているなぁということ。自分の工程以外の職人も、みんな安心して任せられる人を揃えていると思います</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
				</div><!-- text_area -->
			</div><!-- /box02 -->
			<div class="partner-box -box03">
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice-img03.webp" alt="" decoding="async"></figure>
				</div><!-- img_area -->
				<div class="text_area">
					<div class="bubble_area -bubble07 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kashima.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_kashima.png" alt="外構 鹿島さん" decoding="async"></p>
						</div>
						<div class="bubble_box -green02">
							<p class="n_txt">住みながらの工事も多いから、どんな作業をしているのか、お客さんも気になりますよね。できる限りわかりやすいようお伝えするようには心がけていますね</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble08 -bl inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kikuchi.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_kikuchi.png" alt="大工 菊池さん" decoding="async"></p>
						</div>
						<div class="bubble_box -bubble02 -white">
							<p class="n_txt">お客さんとわたしたちをつないでくれるのは、ハイブリッドホームの現場監督の力。コミュニケーションが取りやすい空気をつくってくれているのは、ありがたい</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
				</div><!-- text_area -->
			</div><!-- /box03 -->
		</div><!-- / inr -->
		<div class="inr -w980">
			<h3><img src="<?= $this_img_path; ?>voice_btm-title.webp" alt="多くの職人たちとともに働いています" decoding="async"></h3>
			<p class="n_txt">一つの工事を仕上げるのに、多くの職人たちと連携しています。<br>それぞれの専門の分野で、クオリティの高い工事を提供しています。</p>
		</div><!-- /inr -->


		<div class="voice-loop -loop01">
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img01.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img02.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img03.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img04.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img05.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img06.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img07.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img01.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img02.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img03.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img04.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img05.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img06.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img07.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img">
			</div>
		</div><!-- /intro-loop -->
		<div class="voice-loop -loop02">
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img10.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img11.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img12.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img13.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img14.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img15.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img16.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img10.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img11.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img12.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img13.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img14.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img15.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img16.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img">
			</div>
		</div><!-- /intro-loop -->
		<div class="voice-loop -loop03">
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img19.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img20.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img21.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img22.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img23.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img24.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img25.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img26.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img27.webp" decoding="async"  class="voice-loop__img">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img19.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img20.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img21.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img22.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img23.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img24.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img25.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img26.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img27.webp" decoding="async"  class="voice-loop__img">
			</div>
		</div><!-- /intro-loop -->
	</section>


	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
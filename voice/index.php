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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/voice.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "voice";
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
	<section class="voice-fv inview">
		<div class="inr -m2000">
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="お客様の声" decoding="async"></h1>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>お客様の声</p>
			</div>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/n-fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/n-fv-cloud02.webp" alt="" decoding="async"></figure>
			<figure class="illust"><img src="<?= $this_img_path; ?>fv-illust.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>

			<div class="main-links">
				<a href="#voice01" class="link">
					<span class="name"><img src="<?= $this_img_path; ?>main-link01_name.png" alt="川崎市 H様" decoding="async"></span>
					<p class="title"><img src="<?= $this_img_path; ?>main-link01_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async">
						<p class="link_btn -blue">
						<span class="text">事例一覧へ</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
					<figure class="img">
						<img src="<?= $this_img_path; ?>main-link01_bg.webp" alt="" decoding="async">
					</figure>
				</a>
				<a href="#voice02" class="link">
					<span class="name"><img src="<?= $this_img_path; ?>main-link02_name.png" alt="川崎市 H様" decoding="async"></span>
					<p class="title"><img src="<?= $this_img_path; ?>main-link02_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async">
						<p class="link_btn -blue">
						<span class="text">事例一覧へ</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
					<figure class="img">
						<img src="<?= $this_img_path; ?>main-link02_bg.webp" alt="" decoding="async">
					</figure>
				</a>
				<a href="#voice03" class="link">
					<span class="name"><img src="<?= $this_img_path; ?>main-link03_name.png" alt="川崎市 H様" decoding="async"></span>
					<p class="title"><img src="<?= $this_img_path; ?>main-link03_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async">
						<p class="link_btn -blue">
						<span class="text">事例一覧へ</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
					<figure class="img">
						<img src="<?= $this_img_path; ?>main-link03_bg.webp" alt="" decoding="async">
					</figure>
				</a>

			</div>
		</div>
	</section><!-- /fv -->
	<section class="intro">
		<div class="inr -w980">
			<div class="text_wrap">
				<h2>
					<img src="<?= $this_img_path; ?>intro_title.webp" alt="工事はわたしたちにおまかせください。">
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
					<figure class="cloud"><img src="<?= $this_img_path; ?>voice-cloud01.webp" alt="" decoding="async"></figure>
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
					<figure class="cloud"><img src="<?= $this_img_path; ?>voice-cloud02.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>voice-img02.webp" alt="" decoding="async"></figure>
				</div><!-- img_area -->
				<div class="text_area">
					<div class="bubble_area -bubble03 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kashima.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_kashima.png" alt="外構 鹿島さん" decoding="async"></p>
						</div>
						<div class="bubble_box -bubble03 -green02">
							<p class="n_txt">住みながらの工事も多いから、どんな作業をしているのか、お客さんも気になりますよね。できる限りわかりやすいようお伝えするようには心がけていますね</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble04 -bl inview bt">
						<div class="bubble_box -bubble04 -bubble02 -white">
							<p class="n_txt">お客さんとわたしたちをつないでくれるのは、ハイブリッドホームの現場監督の力。コミュニケーションが取りやすい空気をつくってくれているのは、ありがたい</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
					<div class="bubble_area -bubble05 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-asanuma.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_asanuma.png" alt="内装 浅沼さん" decoding="async"></p>
						</div>
						<div class="bubble_box -bubble05 -green">
							<p class="n_txt">ハイブリッドホームの社員さんは、毎日現場を回ってくれるので、困った時にすぐに相談ができる。するとすぐに対処ができて、工事もスムーズです</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble06 -bl inview bt">
						<div class="bubble_box -bubble06 -bubble02 -white">
							<p class="n_txt">感心するのは、どの職人も熱心な人を集めているなぁということ。自分の工程以外の職人も、みんな安心して任せられる人を揃えていると思います</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
				</div><!-- text_area -->
			</div><!-- /box02 -->
			<div class="partner-box -box03">
				<div class="img_area">
					<figure class="cloud"><img src="<?= $this_img_path; ?>voice-cloud01.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>voice-img03.webp" alt="" decoding="async"></figure>
				</div><!-- img_area -->
				<div class="text_area">
					<div class="bubble_area -bubble07 inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-yomogida.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_yomogida.png" alt="外構 蓬田さん" decoding="async"></p>
						</div>
						<div class="bubble_box -green02">
							<p class="n_txt">ぼくたちは毎日の仕事ですが、お客さんにとっては一度きりの工事かもしれない。だから大切に、お客さんの立場に立って作業しないといけないなと思いますよ</p>
							<span class="balloon_tail -bl"></span>
						</div>
					</div><!-- bubble_box -->
					<div class="bubble_area -bubble08 -bl inview bt">
						<div class="people-box">
							<img src="<?= $this_img_path; ?>voice-kikuchi.webp" alt="" decoding="async">
							<p class="name"><img src="<?= $this_img_path; ?>voice-name_koyama.png" alt="大工 小山さん" decoding="async"></p>
						</div>
						<div class="bubble_box -bubble02 -white">
							<p class="n_txt">以前担当したお客さんの家に、数年ぶりに別の工事で入ることがあります。そんな時に『前回はありがとうございました。使い勝手がいいです』と言われると、真面目に仕事してよかったなと思います</p>
							<span class="balloon_tail -br"></span>
						</div>
					</div><!-- bubble_area -->
				</div><!-- text_area -->
			</div><!-- /box03 -->
		</div><!-- / inr -->
		<div class="inr -w980">
			<h3><img src="<?= $this_img_path; ?>voice_btm-title.webp" alt="多くの職人たちとともに働いています" decoding="async"></h3>
			<p class="n_txt">一つの工事を仕上げるのに、多くの職人たちと連携しています。<br>それぞれの専門の分野で、クオリティの高い工事を提供しています。</p>
			<figure class="risu inview sb"><img src="<?= $this_img_path; ?>voice-btm_risu.webp" alt="" decoding="async"></figure>
			<figure class="kumonchu inview sb"><img src="<?= $this_img_path; ?>voice-btm_kumonchu.webp" alt="" decoding="async"></figure>
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
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img tab_off" >
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img tab_off">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img01.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img02.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img03.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img04.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img05.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img06.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img07.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img tab_off">
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img tab_off">
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
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img tab_off">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img tab_off">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img10.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img11.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img12.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img13.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img14.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img15.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img16.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img tab_off">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img tab_off">
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
				<img src="<?= $this_img_path; ?>voice-loop_img26.webp" decoding="async"  class="voice-loop__img tab_off">
				<img src="<?= $this_img_path; ?>voice-loop_img27.webp" decoding="async"  class="voice-loop__img tab_off">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img19.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img20.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img21.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img22.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img23.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img24.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img25.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img26.webp" decoding="async"  class="voice-loop__img tab_off">
				<img src="<?= $this_img_path; ?>voice-loop_img27.webp" decoding="async"  class="voice-loop__img tab_off">
			</div>
		</div><!-- /intro-loop -->
		<div class="voice-loop -loop04">
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img26.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img27.webp" decoding="async"  class="voice-loop__img">
			</div>
			<div class="voice-loop__inner">
				<img src="<?= $this_img_path; ?>voice-loop_img08.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img09.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img17.webp" decoding="async"  class="voice-loop__img">
				<img src="<?= $this_img_path; ?>voice-loop_img18.webp" decoding="async"  class="voice-loop__img">
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
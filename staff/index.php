<?php
$TITLE         = '';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/staff.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "staff";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="社員紹介" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>社員紹介</p>
			</div>
		</div>
	</section><!-- /fv -->

	<section class="intro">
		<figure class="top_cloud cloud01"><img src="<?= $this_img_path; ?>intro-top_cloud01.webp" alt="" decoding="async"></figure>
		<figure class="top_cloud cloud02 tab_off"><img src="<?= $this_img_path; ?>intro-top_cloud02.webp" alt="" decoding="async"></figure>
		<div class="inr -w1140">
			<div class="text_wrap">
				<h2>
					<img src="<?= $this_img_path; ?>intro_title.webp" alt="わたしたちと一緒にお客様の暮らしをつくりましょう">
				</h2>
			</div>
			<figure class="kumonchu kumonchu01 sb inview"><img src="<?= $this_img_path; ?>intro-kumonchu01.webp" alt="" decoding="async"></figure>
			<figure class="kumonchu kumonchu02 sb inview"><img src="<?= $this_img_path; ?>intro-kumonchu02.webp" alt="" decoding="async"></figure>
		</div><!-- / inr -->
		<div class="intro-loop">
			<div class="intro-loop__inner">
				<img src="<?= $this_img_path; ?>intro-loop_img01.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img02.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img03.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img04.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img05.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img06.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img07.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img08.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img09.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img10.webp" decoding="async"  class="intro-loop__img">
			</div>
			<div class="intro-loop__inner">
				<img src="<?= $this_img_path; ?>intro-loop_img01.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img02.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img03.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img04.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img05.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img06.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img07.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img08.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img09.webp" decoding="async"  class="intro-loop__img">
				<img src="<?= $this_img_path; ?>intro-loop_img10.webp" decoding="async"  class="intro-loop__img">
			</div>
		</div>
		<div class="town-bg"></div>
		<figure  class="btm_risu">
			<img src="<?= $this_img_path; ?>intro-btm_risu.webp" alt="" decoding="async">
		</figure>
		<figure class="btm_cloud">
			<picture>
				<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>intro-btm_cloud-sp.webp">
				<img src="<?= $this_img_path; ?>intro-btm_cloud.webp" alt="">
			</picture>
		</figure>
	</section><!-- /intro -->

	<div class="profile-wrap">
		<div class="inr -w1400 round-con">
			<article class="profile-box -box01">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#01</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile01-title-sp.webp">
							<img src="<?= $this_img_path; ?>profile01-title.webp" alt="限られた空間を有効利用するご提案が得意です">
						</picture>
					</span>
					<span class="title02 tab_on">
						<img src="<?= $this_img_path; ?>profile01-title02-sp.webp" alt="ご提案が得意です">
					</span>

				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile01-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -director"><img src="<?= $this_img_path; ?>profile-job_director.png" alt="ディレクター" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile01-name.png" alt="木村正二" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">心の安全基地、でしょうか。</p>
				</div>
				<div class="question-box">
					<p class="question question02"><img src="<?= $this_img_path; ?>profile01-Q02.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">建物・外構を含め、トータルな住まいのご提案ができます。どんな些細なことでもご要望を真摯に受け止め、＋αのご提案をスピーディに行っています。</p>
				</div>
				<div class="question-box">
					<p class="question question03"><img src="<?= $this_img_path; ?>profile01-Q03.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">お住まいに愛着があり、暮らすことに興味や関心のある方は、ぜひハイブリッドホームにお越しください</p>
				</div>
			</article><!-- box01 -->
			<article class="profile-box -box02 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#02</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile02-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile02-title01.webp" alt="30年くらいで、全面リフォームを検討の方、">
						</picture>
					</span>
					<span class="title02">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile02-title02-sp.webp">
							<img src="<?= $this_img_path; ?>profile02-title02.webp" alt="">
						</picture>
					</span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile02-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -director"><img src="<?= $this_img_path; ?>profile-job_director.png" alt="ディレクター" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile02-name.png" alt="日下部達也" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">家族との安らぎや関係を、自分のセンスでつくった「家」という場所で実現するものだと思います。</p>
				</div>
				<div class="question-box">
					<p class="question question02"><img src="<?= $this_img_path; ?>profile02-Q02.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">地域に密着型の店舗で、経験豊かなスタッフがお客様に寄り添い、いい提案ができること。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">耐震断熱に関する知識や資格を持っており、建物の性能向上リノベーション工事が得意です。また鉄骨造やRC造の工事もおまかせください。</p>
				</div>
			</article><!-- box02 -->
			<article class="profile-box -box03">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#03</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile03-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile03-title01.webp" alt="ともにいいものを創り上げたいお客様は、">
						</picture>
					</span>
					<span class="title02">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile03-title02-sp.webp">
							<img src="<?= $this_img_path; ?>profile03-title02.webp" alt="ぜひ当社へ！">
						</picture>
					</span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud01 tab_off"><img src="<?= $this_img_path; ?>profile-cloud01.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile03-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -director"><img src="<?= $this_img_path; ?>profile-job_director.png" alt="ディレクター" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile03-name.png" alt="西田功" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">くつろげる空間。居心地のよい空間。</p>
				</div>
				<div class="question-box">
					<p class="question question02"><img src="<?= $this_img_path; ?>profile01-Q02.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">お客様と一緒に、ここちよい空間をつくり出すこと。建設会社の中には、お客様とのコミュニケーションを苦手としているところもありますが、ハイブリッドホーム社員も職人も、お客様との打ち合わせや会話が大好きだと思います。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">お客様のイメージが湧きやすいように、その場で絵や図をスケッチして、ご説明すること。</p>
				</div>
			</article><!-- box03 -->
			<article class="profile-box -box04 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#04</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile04-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile04-title.webp" alt="ご希望をなんでもお聞かせください">
						</picture>
					</span>
					<span class="title02 tab_on">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile04-title02-sp.webp">
							<img src="<?= $this_img_path; ?>profile04-title02.webp" alt="ぜひお声がけください">
						</picture>
					</span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile04-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -senior-planner"><img src="<?= $this_img_path; ?>profile-job_senior-planner.png" alt="シニアプランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile04-name.png" alt="岩嵜勝士" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">家族みんなの心の拠り所であり、自分自身を取り戻す場所</p>
				</div>
				<div class="question-box">
					<p class="question question02"><img src="<?= $this_img_path; ?>profile02-Q02.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">一人ひとりがお客様と信頼関係を築いて奮闘できること</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile02-Q05.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">楽器を演奏するのが好きです。ブラジルのタンバリン「パンデイロ」も得意です。</p>
				</div>
			</article><!-- box04 -->
			<article class="profile-box -box05">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#05</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile05-title.webp" alt="プランニングならおまかせください" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile-dummy.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -senior-planner"><img src="<?= $this_img_path; ?>profile-job_senior-planner.png" alt="シニアプランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile05-name.png" alt="岡田美幸" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">一日のストレスや疲れを解消して、明日に備える場所。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">お客様の立場に立って考え、計画中から工事中まで、リフォームを楽しんでいただけるよう気配りをすること。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile01-Q05.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">一泊弾丸旅行を計画して実施するのが好きです。</p>
				</div>
			</article><!-- box05 -->
			<article class="profile-box -box06 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#06</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile06-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile06-title01.webp" alt="">
						</picture>
					</span>
					<span class="title02">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile06-title02-sp.webp">
							<img src="<?= $this_img_path; ?>profile06-title02.webp" alt="ゆいところに手が届くプランニングをしています">
						</picture>
					</span>
					<span class="title03">
						<img src="<?= $this_img_path; ?>profile06-title03-sp.webp" alt="" decoding="async">
					</span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud02 tab_off"><img src="<?= $this_img_path; ?>profile-cloud02.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile06-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -senior-planner"><img src="<?= $this_img_path; ?>profile-job_senior-planner.png" alt="シニアプランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile06-name.png" alt="木村香" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">「伴侶」のような存在。自分の生き方が色濃く反映される場所です。自分自身と一緒に成長・変化する、人生をともにする大切な存在です。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">リフォーム後の暮らしを想像しながら、プランニングのご提案ができることです。お客様の家で「もしも私が住むとしたら…」という想像をいつも働かせています。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile02-Q05.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">ちょこちょこリフォーム＋DIYで、自分仕様に住まいを変えています。2匹の猫対策として造作した棚や格子建具で囲ったキッチンスペース、天井のクロスをコツコツ剥がしてコンクリートを見せたリビングがお気に入りです。</p>
				</div>
			</article><!-- box06 -->
			<article class="profile-box -box07">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#07</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile07-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile07-title.webp" alt="お客様と笑顔でお話しするのが得意です">
						</picture>
				</span>
				<span class="title02"><img src="<?= $this_img_path; ?>profile07-title02-sp.webp" alt="" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile07-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -planner"><img src="<?= $this_img_path; ?>profile-job_planner.png" alt="プランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile07-name.png" alt="安藤凛" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">早く帰りたい！と思わせてくれる、癒やしの場所。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">お客様と笑顔でお話しすること。</p>
				</div>
				<div class="question-box">
					<p class="question question06"><img src="<?= $this_img_path; ?>profile01-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">自分の部屋です。ベッドでゴロゴロも好きですし、窓の近くにある机でメイクをするのも好きです。</p>
				</div>
			</article><!-- box07 -->
			<article class="profile-box -box08 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#08</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile08-title.webp" alt="末永くお客様に寄り添いたい" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile08-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -planner"><img src="<?= $this_img_path; ?>profile-job_planner.png" alt="プランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile08-name.png" alt="上岡仁" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">一日が始まり、終わる場所。旅行も大好きですが、やはり自宅以上にリラックスできる環境はありません。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">老若男女どんな方とも明るく話ができることです。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile02-Q06.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">一人暮らしながら、寝室とダイニング以外にもう一部屋あるところ。ソファーでくつろぎながら映画を見られる、リラックスできる環境がお気に入りです。</p>
				</div>
			</article><!-- box08 -->
			<article class="profile-box -box09">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#09</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile09-title.webp" alt="アットホームな会社です" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud01 tab_off"><img src="<?= $this_img_path; ?>profile-cloud01.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile09-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -planner"><img src="<?= $this_img_path; ?>profile-job_planner.png" alt="プランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile09-name.png" alt="田中有希子" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">家族と時間を過ごす場所。安心して自分らしくいられる場所。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">お困りのことなどを聞くと、ついついお客様に共感してしまいます。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile01-Q05.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">いろんなことに興味があります。空間心理学、ミシン、模様替えなどなど。</p>
				</div>
			</article><!-- box09 -->
			<article class="profile-box -box10 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#10</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile10-title.webp" alt="高品質なリフォームを提供します！" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile10-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -planner"><img src="<?= $this_img_path; ?>profile-job_planner.png" alt="プランナー" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile10-name.png" alt="西谷幸貴" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">人々に安心・安全・快適な環境を与え、様々な生活スタイルを実現してくれる存在。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">気になることはとことん調べること。お客様のご要望に応えるために、時間を惜しまず、自分の言葉で説明できるまで調べて、最高のプランをご提案します。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile02-Q06.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">台所で、毎朝コーヒーを挽き、ゆっくり淹れている時が至福の時間です。</p>
				</div>
			</article><!-- box10 -->
			<article class="profile-box -box11">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#11</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile11-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile11-title.webp" alt="大切なお住まいの話を聞かせてください">
						</picture>
					</span>
					<span class="title02">
						<img src="<?= $this_img_path; ?>profile11-title02-sp.webp" alt="" decoding="async">
					</span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile11-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -engineer"><img src="<?= $this_img_path; ?>profile-job_engineer.png" alt="エンジニア" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile11-name.png" alt="西谷幸貴" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">心身ともに癒やされる、空間や生活を豊かにする、生活の砦</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">増築や改築など、既存の建物とうまく納める方法を提案して解決することが得意です。</p>
				</div>
				<div class="question-box">
					<p class="question question06"><img src="<?= $this_img_path; ?>profile01-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">自分で製作した木工椅子に座って、グラス片手に心を無にしてお酒を飲むのが好きです。</p>
				</div>
			</article><!-- box11 -->
			<article class="profile-box -box12 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#12</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile12-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile12-title.webp" alt="">
						</picture>
					</span>
					<span class="title02">
						<img src="<?= $this_img_path; ?>profile12-title02-sp.webp" alt="">
					</span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud02 tab_off"><img src="<?= $this_img_path; ?>profile-cloud02.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile12-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -engineer"><img src="<?= $this_img_path; ?>profile-job_engineer.png" alt="エンジニア" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile12-name.png" alt="若林大樹" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">外部から身を守る場所。心が安らぐ場所。自分に活力を蓄え、豊かにしてくれる存在。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">場を和ませることが得意です。みなさんと穏やかに話すことができます。</p>
				</div>
				<div class="question-box">
					<p class="question question05"><img src="<?= $this_img_path; ?>profile02-Q05.png" alt="興味があること、好きなことは？" decoding="async"></p>
					<p class="n_txt">サラブレッドを見たり応援したりするのが好きです。好きが高じて、一口馬主の会員になっています。</p>
				</div>
			</article><!-- box12 -->
			<article class="profile-box -box13">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#13</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile13-title01.webp" alt="明確なビジョンをお持ちのお客様、" decoding="async"></span>
					<span class="title02"><img src="<?= $this_img_path; ?>profile13-title02.webp" alt="ぜひご一緒しましょう" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile13-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -assistant"><img src="<?= $this_img_path; ?>profile-job_assistant.png" alt="アシスタント" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile13-name.png" alt="遠藤靖恵" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">安心で安全な、くつろげる空間。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">既存図のない家の立面図を描くのが得意です</p>
				</div>
				<div class="question-box">
					<p class="question question06"><img src="<?= $this_img_path; ?>profile01-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">古いものが好きで、博物館や美術館へ行ったり、骨董市を眺めたりします。</p>
				</div>
			</article><!-- box13 -->
			<article class="profile-box -box14 -rev">
				<div class="text_area">
					<p class="en num">
						Hybrid home’s Staff Profiles <span class="line">#14</span>
					</p>
					<h2 class="title-box">
						<span class="title01"><img src="<?= $this_img_path; ?>profile14-title.webp" alt="お客様の悩みに、親身になって寄り添います" decoding="async"></span>
					</h2>
					<div class="question-box">
						<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
						<p class="n_txt">最大にリラックスできる場所。ほっとできる場所。家族が集まる場所。</p>
					</div>
					<div class="question-box">
						<p class="question question04"><img src="<?= $this_img_path; ?>profile02-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
						<p class="n_txt">クリエイティブな発想が得意です。</p>
					</div>
					<div class="question-box">
						<p class="question question06"><img src="<?= $this_img_path; ?>profile02-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
						<p class="n_txt">夫と2人で立てるキッチンがお気に入りです。音楽を聴きながら、ビールを飲みながら、一緒に料理ができます。</p>
					</div>
				</div><!-- /text_area -->
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile-dummy.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -assistant"><img src="<?= $this_img_path; ?>profile-job_assistant.png" alt="アシスタント" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile14-name.png" alt="遠藤靖恵" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
			</article><!-- box14 -->
			<article class="profile-box -box15">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#15</span>
				</p>
				<h2 class="title-box">
					<span class="title01"><img src="<?= $this_img_path; ?>profile15-title.webp" alt="コツコツとした作業が好きです" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud01 tab_off"><img src="<?= $this_img_path; ?>profile-cloud01.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile-dummy.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -assistant"><img src="<?= $this_img_path; ?>profile-job_assistant.png" alt="アシスタント" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile15-name.png" alt="中田奈美恵" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">自分とそのほかの世界の境界。住んでいる人が反映されてしまう場所でもありますね。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">営業担当が手描きしたものを、CADで描き起こしています。集中して作業するのが得意です。</p>
				</div>
				<div class="question-box">
					<p class="question question06"><img src="<?= $this_img_path; ?>profile01-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">古い建物ですが、南向きに広いベランダがあり、緑色のカーテンを掛けています。中国茶をゆっくり淹れて飲むのが好きです。</p>
				</div>
			</article><!-- box15 -->
			<article class="profile-box -box16 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#16</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile16-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile16-title.webp" alt="">
						</picture>
					</span>
					<span class="title02"><img src="<?= $this_img_path; ?>profile16-title02-sp.webp" alt="" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile16-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -partner-support"><img src="<?= $this_img_path; ?>profile-job_partner-support.png" alt="ディレクター" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile16-name.png" alt="中村由美子" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">家族の生活が豊かになるための居場所。掃除をしたり、手入れをしたり、思い思いに誂えたりすることで、より心地いい空間になっていきます。</p>
				</div>
				<div class="question-box">
					<p class="question question06"><img src="<?= $this_img_path; ?>profile02-Q06.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">リビングです。最近観葉植物を育てており、お気に入りの北欧アンティーク家具とコーディネートして楽しんでいます。</p>
				</div>
				<div class="question-box">
					<p class="question question03"><img src="<?= $this_img_path; ?>profile02-Q03.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">毎日の暮らしをより快適tにすることを、大切に思っているお客様と出会いたいです。たとえリフォームしたいけれどなにから手をつけていいかわからないという方でも、じっくりお話を聞き、一緒に理想の住まいを作っていきたいと思います。</p>
				</div>
			</article><!-- box16 -->
			<article class="profile-box -box17">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#17</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile17-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile17-title.webp" alt="">
						</picture>
					</span>
					<span class="title02"><img src="<?= $this_img_path; ?>profile17-title02-sp.webp" alt="コツコツとした作業が好きです" decoding="async"></span>
				</h2>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>profile17-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -president"><img src="<?= $this_img_path; ?>profile-job_president.png" alt="代表取締役社長" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile17-name.png" alt="星野康次" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile01-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">ご夫婦、ご家族、それぞれの家庭にいろんな形はありますが、「絆」を深めることができる場所ではないでしょうか。</p>
				</div>
				<div class="question-box">
					<p class="question question04"><img src="<?= $this_img_path; ?>profile01-Q04.png" alt="あなたが得意なことは？" decoding="async"></p>
					<p class="n_txt">建物に対するお客様の要望を、具体的な形にすることを通して、感動していただくこと。</p>
				</div>
				<div class="question-box">
					<p class="question question03"><img src="<?= $this_img_path; ?>profile01-Q03.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">包み隠さずにご自身のお考えや求めることをお話いただける方には、きっとご満足いただける仕事ができます。</p>
				</div>
			</article><!-- box15 -->
			<article class="profile-box -box18 -rev">
				<p class="en num">
					Hybrid home’s Staff Profiles <span class="line">#18</span>
				</p>
				<h2 class="title-box">
					<span class="title01">
						<picture>
							<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>profile18-title01-sp.webp">
							<img src="<?= $this_img_path; ?>profile18-title01.webp" alt="">
						</picture>
					</span>
					<span class="title02">
						<picture>
							<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>profile18-title02-sp.webp">
							<img src="<?= $this_img_path; ?>profile18-title02.webp" alt="熱を持って取り組みます">
						</picture>
					</span>
					<span class="title03">
						<img src="<?= $this_img_path; ?>profile18-title03-sp.webp" alt="">
					</span>
				</h2>
				<div class="img_area">
					<figure class="cloud cloud02 tab_off"><img src="<?= $this_img_path; ?>profile-cloud02.webp" alt="" decoding="async"></figure>
					<figure class="img"><img src="<?= $this_img_path; ?>profile18-img.webp" alt="" decoding="async"></figure>
					<div class="name_area">
						<span class="job -chairman"><img src="<?= $this_img_path; ?>profile-job_chairman.png" alt="会長" decoding="async"></span>
						<p class="name"><img src="<?= $this_img_path; ?>profile18-name.png" alt="古澤智一" decoding="async"></p>
					</div>
				</div><!-- /img_area -->
				<div class="question-box">
					<p class="question question01"><img src="<?= $this_img_path; ?>profile02-Q01.png" alt="住まいとはどんな存在？" decoding="async"></p>
					<p class="n_txt">家族や友人とともに過ごす時間を生み出す、人生舞台だと思います。</p>
				</div>
				<div class="question-box">
					<p class="question question02"><img src="<?= $this_img_path; ?>profile02-Q02.png" alt="ハイブリッドホームが得意なことは？" decoding="async"></p>
					<p class="n_txt">お客様のニーズを深く理解する力→柔軟なプランニング→高い技術力と職方の連携→安心のアフターフォロー</p>
				</div>
				<div class="question-box">
					<p class="question question03"><img src="<?= $this_img_path; ?>profile02-Q03.png" alt="自分の住まいの好きなところは？" decoding="async"></p>
					<p class="n_txt">自宅には水槽があり、海水魚の飼育をしています。3週間に一度の水換え作業は、心のリフレッシュになっています。園芸も好きで、町田店の花壇担当です！</p>
				</div>
			</article><!-- box16 -->
		</div><!-- /inr -->
	</div><!-- /profile-wrap -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
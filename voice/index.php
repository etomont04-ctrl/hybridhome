<?php
$TITLE         = 'お客様の声';
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
<?php include($root_path . 'assets/inc/gtag.php'); ?>
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
			<figure class="bird"><img src="<?= $this_img_path; ?>fv-bird.webp" alt="" decoding="async"></figure>
			<div class="town_bg"></div>
		</div>
	</section><!-- /fv -->

	<div class="main-links_wrap inr">
		<div class="main-links">
			<a href="#voice01" class="link link01">
				<span class="name"><img src="<?= $this_img_path; ?>main-link01_name.png" alt="川崎市 H様" decoding="async"></span>
				<p class="title"><img src="<?= $this_img_path; ?>main-link01_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async"></p>
					<p class="link_btn -blue">
					<span class="text">お客様の声を聞く</span>
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</p>
				<figure class="img">
					<img src="<?= $this_img_path; ?>main-link01_bg.webp" alt="" decoding="async">
				</figure>
			</a>
			<a href="#voice02" class="link link02">
				<span class="name"><img src="<?= $this_img_path; ?>main-link02_name.png" alt="川崎市 H様" decoding="async"></span>
				<p class="title"><img src="<?= $this_img_path; ?>main-link02_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async"></p>
				<p class="link_btn -blue">
					<span class="text">お客様の声を聞く</span>
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</p>
				<figure class="img">
					<img src="<?= $this_img_path; ?>main-link02_bg.webp" alt="" decoding="async">
				</figure>
			</a>
			<a href="#voice03" class="link link03">
				<span class="name"><img src="<?= $this_img_path; ?>main-link03_name.png" alt="川崎市 H様" decoding="async"></span>
				<p class="title"><img src="<?= $this_img_path; ?>main-link03_title.webp" alt="大胆に、細やかに。暮らしに寄り添う" decoding="async"></p>
					<p class="link_btn -blue">
					<span class="text">お客様の声を聞く</span>
					<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
				</p>
				<figure class="img">
					<img src="<?= $this_img_path; ?>main-link03_bg.webp" alt="" decoding="async">
				</figure>
			</a>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>main-links_cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>main-links_cloud02.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud03"><img src="<?= $this_img_path; ?>main-links_cloud03.webp" alt="" decoding="async"></figure>
		</div>
	</div><!-- main-link_wrap -->


	<div class="town-area -area01">
		<figure class="cloud"><img src="<?= $this_img_path; ?>town-area_cloud.webp" alt="" decoding="async"></figure>
		<figure class="bird bird01"><img src="<?= $this_img_path; ?>town-area_bird01.webp" alt="" decoding="async"></figure>
		<div class="town-bg"></div>
	</div><!-- /town-area -->
	<section class="voice-sec " id="voice01">
		<div class="inr -m2000 voice01">
			<div class="main-img_area">
				<figure class="img">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>voice01_main-img-sp.webp">
						<img src="<?= $this_img_path; ?>voice01_main-img.webp" alt="">
					</picture>
				</figure>
				<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec_cloud01.webp" alt="" decoding="async"></figure>
				<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec_cloud02.webp" alt="" decoding="async"></figure>
			</div>
			<div class="title_area">
				<h2><img src="<?= $this_img_path; ?>voice01_title.webp" alt="大胆に、細やかに。暮らしに寄り添うリノベーション" decoding="async"></h2>
				<p class="name"><img src="<?= $this_img_path; ?>voice01_name.webp" alt="川崎市 H様邸" decoding="async"></p>
				<figure class="duck sb inview"><img src="<?= $this_img_path; ?>voice-sec_duck.webp" alt="" decoding="async"></figure>
				<figure class="kumonchu01 sb inview"><img src="<?= $this_img_path; ?>voice-sec_kumonchu01.webp" alt="" decoding="async"></figure>
				<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec-cloud01.webp" alt="" decoding="async"></figure>
				<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec-cloud02.webp" alt="" decoding="async"></figure>
			</div>
			<div class="inr -w1400 round-con">
				<div class="data_area">
					<div class="data_box">
						<div class="tit_area">
							<h3><img src="<?= $this_img_path; ?>data-title.png" alt="リノベーション・データ" decoding="async"></h3>
							<span class="en">Data</span>
						</div>
						<dl class="data-list">
							<div class="data_row">
								<dt class="data_head">完成</dt>
								<dd class="data_body">2023年12月</dd>
							</div>
							<div class="data_row">
								<dt class="data_head">主な工事場所</dt>
								<dd class="data_body">断熱窓、浴室・洗面室、リビング、和室、外構</dd>
							</div>
						</dl><!-- /data-list -->
					</div><!-- data_box -->
					<div class="manager_box">
						<div class="tit_area">
							<h3><img src="<?= $this_img_path; ?>manager-title.png" alt="ハイブリットホーム担当" decoding="async"></h3>
							<span class="en">Manager</span>
						</div><!-- /tit_area -->
						<div class="manager">
							<div class="box">
								<figure class="img"><img src="<?= $this_img_path; ?>voice01-manager01.webp" alt="" decoding="async"></figure>
								<p><span>新百合ヶ丘店</span>　岡田美幸</p>
							</div>
							<div class="box">
								<figure class="img"><img src="<?= $this_img_path; ?>voice01-manager02.webp" alt="" decoding="async"></figure>
								<p><span>新百合ヶ丘店</span>　木村正二</p>
							</div>
						</div><!-- manager -->
					</div><!-- /manager_box -->
				</div><!-- /data_area -->

				<div class="voice-box box01">
					<p class="en num">
						Customer’s Voitce <span class="line">#01</span>
					</p>
					<h3 class="-green"><img src="<?= $this_img_path; ?>voice01-title01.webp" alt="住んで18年目の悩みに寄り添う" decoding="async"></h3>
					<div class="img_area">
						<figure class="img"><img src="<?= $this_img_path; ?>voice01-box01-img.webp" alt="" decoding="async"></figure>
						<figure class="risu sb inview"><img src="<?= $this_img_path; ?>voice-box-risu.webp" alt="" decoding="async"></figure>
					</div>
					<p class="bubble-txt -gray">ハイブリッドホーム</p>
					<p class="n_txt">最初にご相談いただいたのは、家全体の窓の性能アップでした。特にリビング窓は、西日が強く、結露もしやすいので断熱性能の高い窓へ替えたい、という内容でしたね。</p>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">はい。建売りで購入してから18年ほど住んでいたのですが、ずっと気になっていたことでした。ちょうど断熱リフォームの補助金が出ると知って、何社か見積もりをお願いしたうちの一社がハイブリッドホームさん。ハイブリッドホームで工事をしている家を地域で見かけていて親しみがあり、直接店舗へ伺いました。実際に家を見ていただいた後、いくつかのプランの中には西側の窓をなくしてはという案もありビックリ！</p>
					<p class="bubble-txt -gray">ハイブリッドホーム</p>
					<p class="n_txt">リビングには3ヶ所窓があり、東側と南側の窓を残せば、西側は壁にしても、通風と明るさは十分に得られると考えました。</p>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">最終的には、外観のデザインのポイントとなっている窓を残し、より高性能な複層ガラス入りの断熱サッシに交換したのですが、思いがけないアイデアを提案してくださる姿勢に感心して、ぜひお願いしたいと思いました。おかげさまで夏も冬も体感温度が大きく改善して、本当に過ごしやすくなったんですよ。</p>
				</div><!-- /box01 -->
				<div class="voice-box box02">
					<p class="en num">
						Customer’s Voitce <span class="line">#02</span>
					</p>
					<h3 class="-green"><img src="<?= $this_img_path; ?>voice01-title02.webp" alt="動線を見直せば、使いやすくなる" decoding="async"></h3>
					<div class="img_area">
						<figure class="img"><img src="<?= $this_img_path; ?>voice01-box02-img.webp" alt="" decoding="async"></figure>
						<figure class="cloud"><img src="<?= $this_img_path; ?>voice-box02-cloud.webp" alt="" decoding="async"></figure>
					</div>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">洗面室も悩みがありました。収納が少なく、動線も悪くて。そこに「浴室のドアの位置を変えましょう」という提案が出てきて、またびっくりでした（笑）。</p>
					<p class="bubble-txt -gray">ハイブリッドホーム</p>
					<p class="n_txt">浴室のドアを、標準の位置から10cm移動して、造作家具の収納キャビネットを設置しました。洗面台のメーカーから取手を取り寄せ、面材を選定し、既製品と統一感のある便利なキャビネットになりました。H様は「ここが不便」とはっきりとお話ししていただけるので、提案しやすいんですよ。</p>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">岡田さんは大胆なだけじゃなくて、すごく丁寧で細やかな提案もしてくださいます。キッチンの扉が傷んでいて相談したとき、他社はシステム全交換での見積もりでした。まだコンロやレンジフードは使えるのだけど、一体型だとしかたないのかなと諦めていたところ、岡田さんは「使えるものは使いましょう！」と扉と食洗機だけを取り替えるプランを提案してくれました。必要なものだけ替えることができたのもうれしいし、なにより費用がぐっと抑えられたのもありがたかったです。</p>
				</div><!-- /box02 -->
				<div class="voice-box box03">
					<p class="en num">
						Customer’s Voitce <span class="line">#03</span>
					</p>
					<h3 class="-green"><img src="<?= $this_img_path; ?>voice01-title03.webp" alt="住んで18年目の悩みに寄り添う" decoding="async"></h3>
					<div class="img_area">
						<figure class="img"><img src="<?= $this_img_path; ?>voice01-box03-img.webp" alt="" decoding="async"></figure>
						<figure class="duck sb inview"><img src="<?= $this_img_path; ?>voice-box-duck.webp" alt="" decoding="async"></figure>
						<figure class="cloud"><img src="<?= $this_img_path; ?>voice-box03-cloud.webp" alt="" decoding="async"></figure>
					</div>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">実際の工事の段階になると、まず大工さんたちの腕が良くて。岡田さんや木村さんが頻繁にやってきて的確に指示を出してくださるので、安心して任せることができました。</p>
					<p class="bubble-txt -gray">ハイブリッドホーム</p>
					<p class="n_txt">リフォームは「納まり」が大切です。既存に合わせるからこそ、職人さんたちと細かい打ち合わせが必要です。</p>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">大工さんたちも、作業内容や使う材料の説明も丁寧にしてくださって。余談ですが、うちの犬もかわいがってくれて、すっかり懐いていました（笑）。</p>
				</div><!-- /box03 -->
				<div class="voice-box box04">
					<p class="en num">
						Customer’s Voitce <span class="line">#04</span>
					</p>
					<h3 class="-green"><img src="<?= $this_img_path; ?>voice01-title04.webp" alt="住んで18年目の悩みに寄り添う" decoding="async"></h3>
					<figure class="cloud tab_on"><img src="<?= $this_img_path; ?>voice-box04-cloud.webp" alt="" decoding="async"></figure>

					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">岡田さんは、わたしたちの生活のしかたや、将来どう暮らしたいかを丁寧にヒアリングされるのが印象的でした。和室をクローゼットと家事に使うユーティリティルームにしたのですが、なにをどれだけ置くか、アイロンはどこで掛けるか、その近くのどの高さにコンセントがあれば作業しやすいかなど、徹底したヒアリングで、本当に使いやすい空間が完成しました。身支度もスムーズで、家事の効率もアップして、日々のストレスがなくなりました。</p>
					<p class="bubble-txt -gray">ハイブリッドホーム</p>
					<p class="n_txt">外構も担当させていただきました。もしも将来車椅子を使う生活になったときを想定して、門扉が開く向きを検討したり、お庭の手入れが楽になるように人工芝をご提案したり。「ずっと住む」ための視点を大切にしています。</p>
					<p class="bubble-txt -white">Hさま</p>
					<p class="n_txt">打ち合わせから完成まで、とにかく楽しかったです。自分でも気づいていなかったストレスが一つずつ消えていくと、こんなにも暮らしが軽くなるんだと実感しました。<br>このリビングのクロスもお気に入りです。岡田さんが選んでくれた色なんです。見るたびに嬉しくなりますね。</p>
					<div class="img_area">
						<figure class="img"><img src="<?= $this_img_path; ?>voice01-box04-img.webp" alt="" decoding="async"></figure>
						<figure class="duck sb inview"><img src="<?= $this_img_path; ?>voice-box-big_duck.webp" alt="" decoding="async"></figure>
						<figure class="risu"><img src="<?= $this_img_path; ?>voice-box-risu02.webp" alt="" decoding="async"></figure>
					</div>
					<a href="<?= $jirei_link01; ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="s_txt">川崎市 H様邸の</span>
							<span class="b_txt">施工事例ページを見る</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div><!-- /box04 -->
			</div><!-- round-con -->
		</div><!-- /inr.-m2000-->
	</section><!-- / voice-sec -->

	<div class="town-area -area02">
		<figure class="cloud"><img src="<?= $this_img_path; ?>town-area_cloud.webp" alt="" decoding="async"></figure>
		<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>town-area_cloud02.webp" alt="" decoding="async"></figure>
		<figure class="bird bird02"><img src="<?= $this_img_path; ?>town-area_bird02.webp" alt="" decoding="async"></figure>
		<div class="town-bg"></div>
	</div><!-- /town-area -->
	<section class="voice-sec" id="voice02">
		<div class="inr -m2000 voice02">
		<div class="main-img_area">
			<figure class="img">
				<picture>
					<source media="(max-width:1050px)" srcset="<?= $this_img_path; ?>voice02_main-img-sp.webp">
					<img src="<?= $this_img_path; ?>voice02_main-img.webp" alt="">
				</picture>
			</figure>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec_cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec_cloud02.webp" alt="" decoding="async"></figure>
		</div>
		<div class="title_area">
			<h2>
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>voice02_title-sp.webp">
					<img src="<?= $this_img_path; ?>voice02_title.webp" alt="暮らしと好きなものが同居する家">
				</picture>
			</h2>
			<p class="name"><img src="<?= $this_img_path; ?>voice02
				_name.webp" alt="町田市 HS邸" decoding="async"></p>
			<figure class="risu sb inview"><img src="<?= $this_img_path; ?>voice-sec_risu.webp" alt="" decoding="async"></figure>
			<figure class="kumonchu02 inview sb"><img src="<?= $this_img_path; ?>voice-sec_kumonchu02.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec-cloud02.webp" alt="" decoding="async"></figure>
		</div>
		<div class="inr -w1400 round-con">
			<div class="data_area">
				<div class="data_box">
					<div class="tit_area">
						<h3><img src="<?= $this_img_path; ?>data-title.png" alt="リノベーション・データ" decoding="async"></h3>
						<span class="en">Data</span>
					</div>
					<dl class="data-list">
						<div class="data_row">
							<dt class="data_head">完成</dt>
							<dd class="data_body">2019年12月</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">主な工事場所</dt>
							<dd class="data_body">全面改装、外構</dd>
						</div>
					</dl><!-- /data-list -->
				</div><!-- data_box -->
				<div class="manager_box">
					<div class="tit_area">
						<h3><img src="<?= $this_img_path; ?>manager-title.png" alt="ハイブリットホーム担当" decoding="async"></h3>
						<span class="en">Manager</span>
					</div><!-- /tit_area -->
					<div class="manager">
						<div class="box">
							<figure class="img"><img src="<?= $this_img_path; ?>voice02-manager01.webp" alt="" decoding="async"></figure>
							<p><span>町田店</span>　西田 功</p>
						</div>
						<div class="box">
							<figure class="img"><img src="<?= $this_img_path; ?>voice02-manager02.webp" alt="" decoding="async"></figure>
							<p><span>町田店</span>　木村 香</p>
						</div>
					</div><!-- manager -->
				</div><!-- /manager_box -->
			</div><!-- /data_area -->

			<div class="voice-box box01">
				<p class="en num">
					Customer’s Voitce <span class="line">#01</span>
				</p>
				<h3 class="-green"><img src="<?= $this_img_path; ?>voice02-title01.webp" alt="住んで18年目の悩みに寄り添う" decoding="async"></h3>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice02-box01-img.webp" alt="" decoding="async"></figure>
					<figure class="risu sb -sb02 inview"><img src="<?= $this_img_path; ?>voice-box-risu.webp" alt="" decoding="async"></figure>
				</div>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">実は、最初は別の業者さんにリノベーションをお願いしようとプランまでつくっていました。ただ見積りがあまりに大まかで…。予算の調整をしようにも、項目がわからないからどこを削ればよいのかも不明、外構が含まれているのかどうかすらわからないという状態で、「本当にこれで家づくりが進められるのかな？」という不安がありました。それで近所だったこともあって、ハイブリッドホームさんに相談してみようと。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">S様は、今回のリノベーションで「どう暮らしたいか」が、最初からとても明確だった印象です。大きくは、「大型犬と安心して暮らす」と「物を見せない収納」が最優先事項でした。</p>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">そうなんです。そのために、1階を大きな一つの空間に間取り変更して、リビングダイニングとパントリーを備えたキッチンを緩やかに仕切る、できる限り造作家具で、安全にたくさん収納できる場所を確保する、などの方法を採用しました。そしてなんといっても見積りの明細が明確だったので、検討しやすかったですね。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">ふだんからできるだけ項目別に詳細のお見積りを提示するようにしています。造作・外装・設備・断熱など細かく分類して、どの仕様・工法でつくるといくらかかるのかがわかると、検討しやすくなりますから。</p>
			</div><!-- /box01 -->
			<div class="voice-box box02">
				<p class="en num">
					Customer’s Voitce <span class="line">#02</span>
				</p>
				<h3 class="-green"><img src="<?= $this_img_path; ?>voice02-title02.webp" alt="動線を見直せば、使いやすくなる" decoding="async"></h3>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice02-box02-img.webp" alt="" decoding="async"></figure>
					<figure class="duck inview sb"><img src="<?= $this_img_path; ?>voice-box02-duck.webp" alt="" decoding="async"></figure>
					<figure class="cloud -cloud02"><img src="<?= $this_img_path; ?>voice-box02-cloud.webp" alt="" decoding="async"></figure>
				</div>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">S様のリノベーション工事では、改装プランと並行して、家としての質の向上を同時に考えていきました。もともと軽量鉄骨造であるため、耐震構造としては申し分ないのですが、断熱性能には劣る構造のお宅でした。<br>
そこで壁、床、屋根の断熱材の入れ替えと、サッシをすべて断熱性の高い窓に交換することにしました。<br>
ただ軽量鉄骨造でこの工事を施すためには、外壁をすべて新築のように作り直す必要があります。かなりの大工事になってしまいましたが、結果的に構造面でも断熱面でも安心できるお住まいをつくることができました。
</p>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">ウォークインクローゼットならぬ、ウォークスルークローゼットも、いいアイデアでしたよね。2階の廊下に沿ってクローゼットを配置し、カーテンで仕切ることでムダのない間取りに。ただわがやの犬が好奇心いっぱいにカーテンから首をつっこむことになるのは、想定外でした。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">施工当時はまだワンちゃんとの生活は始まっていませんでしたが、実際の暮らし心地はいかがですか？</p>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">快適に暮らしています。もともと2つに分かれていた部屋をひとつにまとめて、キッチンも移動。大きなワンフロアになることで、犬がのびのび動けるし、どこにいても様子が見えるんです。今もここで自由にしていますが、安心して見ていられます。<br>
造作家具もつくっていただいてよかった。あとから家具を入れると、地震で倒れる心配や、犬にとって危険がある可能性を考えました。最初から“どこに何をしまうか”を考えて造作してしまった方が、家の中の動線も、見た目も、気持ちもスッキリします。</p>
			</div><!-- /box02 -->
			<div class="voice-box box04">
				<p class="en num">
					Customer’s Voitce <span class="line">#03</span>
				</p>
				<h3 class="-green">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>voice02-title03-sp.webp">
						<img src="<?= $this_img_path; ?>voice02-title03.webp" alt="">
					</picture>
				</h3>
				<h4 class="-green tab_on"><img src="<?= $this_img_path; ?>voice02-title03-02-sp.webp" alt="" decoding="async"></h4>


				<figure class="cloud"><img src="<?= $this_img_path; ?>voice02-box04-cloud.webp" alt="" decoding="async"></figure>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">S様は鉄道模型をつくるご趣味がおありで、自室が趣味の部屋兼お仕事部屋になっています。この部屋をつくるのに、わたしたちもいろいろ教えていただきました。今では一般的になっていますが、当時は珍しかったスマホから操作できて明るさや色温度を変えられるダウンライトや、壁内を通してすっきりとモニターを掛けるための、長いHDMIケーブルなど、「これを使いたいのだけど」とS様からご提案いただくこともしばしば。</p>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">自分の中に「こういうふうにしたい」という具体的なイメージがあったので、一つひとつ相談しながら形にしていけたのは、よかったですね。「難しいかもしれない」と思うようなことでも、まずは受け止めて一緒に考えてくれる。そういう関係性があったから、納得しながら進められました。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">S様は目的が明確だったで、わたしたちはそれを実現させるためのディテールを追求し、仕様を提案し、選定することに集中できました。趣味の空間も生活の空間も、ご満足いただけたのなら、大変うれしいです。</p>
				<p class="bubble-txt -white">Sさま</p>
				<p class="n_txt">こうして暮らし始めて、家って建てたら終わりじゃないんだと実感しています。わたしたちの生活のしかたを理解してくれる方たちと出会えたのがよかったです。これからもよろしくお願いします。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">こちらこそ困ったことがあったら、すぐにご相談ください！</p>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice02-box04-img.webp" alt="" decoding="async"></figure>
					<figure class="duck sb inview"><img src="<?= $this_img_path; ?>voice-box-big_duck.webp" alt="" decoding="async"></figure>
					<figure class="risu"><img src="<?= $this_img_path; ?>voice-box-risu02.webp" alt="" decoding="async"></figure>
				</div>
				<a href="<?= $jirei_link02; ?>" class="link_wrap">
					<p class="link_btn -blue">
						<span class="s_txt">町田市 S様邸の</span>
						<span class="b_txt">施工事例ページを見る</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div><!-- /box04 -->
		</div><!-- round-con -->
	</div>
	</section><!-- / voice-sec -->

	<div class="town-area -area03">
		<figure class="cloud"><img src="<?= $this_img_path; ?>town-area_cloud.webp" alt="" decoding="async"></figure>
		<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>town-area_cloud02.webp" alt="" decoding="async"></figure>
		<figure class="bird bird01"><img src="<?= $this_img_path; ?>town-area_bird01.webp" alt="" decoding="async"></figure>
		<div class="town-bg"></div>
	</div><!-- /town-area -->
	<section class="voice-sec" id="voice03">
		<div class="inr -m2000 voice03">
		<div class="main-img_area">
			<figure class="img"><picture>
				<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>voice03_main-img-sp.webp">
				<img src="<?= $this_img_path; ?>voice03_main-img.webp" alt="">
			</picture>
		</figure>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec_cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec_cloud02.webp" alt="" decoding="async"></figure>
		</div>
		<div class="title_area">
			<h2>
				<picture>
					<source media="(max-width: 800px)" srcset="<?= $this_img_path; ?>voice03_title-sp.webp">
					<img src="<?= $this_img_path; ?>voice03_title.webp" alt="対話から生まれ、時間とともに育つ庭">
				</picture>
			</h2>
			<p class="name"><img src="<?= $this_img_path; ?>voice03_name.webp" alt="川崎市 T様邸" decoding="async"></p>
			<figure class="duck sb inview -duck02"><img src="<?= $this_img_path; ?>voice-sec_duck.webp" alt="" decoding="async"></figure>
			<figure class="kumonchu01 sb inview -kumonchu01-2"><img src="<?= $this_img_path; ?>voice-sec_kumonchu01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud01"><img src="<?= $this_img_path; ?>voice-sec-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud cloud02"><img src="<?= $this_img_path; ?>voice-sec-cloud02.webp" alt="" decoding="async"></figure>
		</div>
		<div class="inr -w1400 round-con">
			<div class="data_area">
				<div class="data_box">
					<div class="tit_area">
						<h3><img src="<?= $this_img_path; ?>data-title.png" alt="リノベーション・データ" decoding="async"></h3>
						<span class="en">Data</span>
					</div>
					<dl class="data-list">
						<div class="data_row">
							<dt class="data_head">完成</dt>
							<dd class="data_body">2016年4月</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">主な工事場所</dt>
							<dd class="data_body">外構</dd>
						</div>
					</dl><!-- /data-list -->
				</div><!-- data_box -->
				<div class="manager_box">
					<div class="tit_area">
						<h3><img src="<?= $this_img_path; ?>manager-title.png" alt="ハイブリットホーム担当" decoding="async"></h3>
						<span class="en">Data</span>
					</div><!-- /tit_area -->
					<div class="manager">
						<div class="box">
							<figure class="img"><img src="<?= $this_img_path; ?>voice03-manager01.webp" alt="" decoding="async"></figure>
							<p><span>新百合ヶ丘店</span>　岩嵜勝士</p>
						</div>
						<div class="box">

						</div>
					</div><!-- manager -->
				</div><!-- /manager_box -->
			</div><!-- /data_area -->

			<div class="voice-box box01">
				<p class="en num">
					Customer’s Voitce <span class="line">#01</span>
				</p>
				<h3 class="-green">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>voice03-title03-sp.webp">
						<img src="<?= $this_img_path; ?>voice03-title01.webp" alt="住んで18年目の悩みに寄り添う">
					</picture>
				</h3>
				<h4 class="-green tab_on"><img src="<?= $this_img_path; ?>voice03-title03-02-sp.webp" alt="" decoding="async"></h4>

				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice03-box01-img.webp" alt="" decoding="async"></figure>
					<figure class="risu inview sb -sb03"><img src="<?= $this_img_path; ?>voice-box-risu.webp" alt="" decoding="async"></figure>
					<figure class="cloud tab_off"><img src="<?= $this_img_path; ?>voice03-box01-cloud.webp" alt="" decoding="async"></figure>
				</div>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">以前ボストンに住んだことがあり、家を新築するにあたって、その雰囲気を取り入れたいと思いました。ボストンは、イギリスから移り住んだ方々の生活様式の影響で、直線だけではなく曲線を組み込んだ有機的なデザインが特徴です。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">弊社は外構を担当させていただきました。T様は「こういう庭にしたい」というイメージブックをつくっておられたので、最初からできあがりのすり合わせがうまくいきました。お住まいの素材もこだわって選ばれていて、それと調和するように考えていきました。</p>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">「遊歩道を散歩していたら、家があった」という趣きにしたいとお伝えしたら、曲線の階段で玄関へアプローチをするような動線を考えてくださいました。<br>その曲線のアプローチの中央に、シンボルツリーがあり、庭に軸が生まれました。<br>
				また石や鋳物、木材など、自然の素材を使用したいという希望もあり、いろいろ探していただきました。大変でしたか？</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">いえいえ、楽しかったですよ！　家に使われている漆喰や石の色が美しいので、それに合うものということでイタリアの花崗岩をご提案しました。部材もほとんどがヨーロッパのものです。</p>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">玄関先に屋根をつけていただいた事も、とてもよかったです。家の構造上、軒を出しにくかったため、ポリカーボネートで屋根をつくりました。陽の光を遮ることなく、雨を避け、玄関先で少しお待ちいただいたりと、便利に活用しています。</p>
			</div><!-- /box01 -->
			<div class="voice-box box02">
				<p class="en num">
					Customer’s Voitce <span class="line">#02</span>
				</p>
				<h3 class="-green"><img src="<?= $this_img_path; ?>voice03-title02.webp" alt="動線を見直せば、使いやすくなる" decoding="async"></h3>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice03-box02-img.webp" alt="" decoding="async"></figure>
					<figure class="duck -duck02 inview sb"><img src="<?= $this_img_path; ?>voice-box02-duck.webp" alt="" decoding="async"></figure>
					<figure class="cloud -cloud02 tab_on"><img src="<?= $this_img_path; ?>voice-box02-cloud.webp" alt="" decoding="async"></figure>
				</div>

				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">予定通りにいかなかったものもありました。それは植栽です。最近の気候の変化によって、当初植えた樹木の中にはなかなか定着しないものも。岩嵜さんは、わが家が完成してからも時折、様子を見に来られ、アドバイスや植え替えなどもしてくださっています。これはご近所ならではのボーナスポイントかもしれません。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">担当したお住まいは、「うまくなじんでくれるか」というのはとても気になります。特にお庭には時間や手間が必要となるので、管理がしやすくなるお手伝いをしたいと考えています。</p>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">岩嵜さんだけではなく、パートナーサポートさんも定期的に連絡をくださり、完成した後も見守っていただいている感覚です。なにかあればすぐに相談できると思うと、安心感があります。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">工事が終わった時が完成ではありませんから。その後のアフターフォローまで含めて、わたしたちの仕事です。</p>
			</div><!-- /box02 -->
			<div class="voice-box box04">
				<p class="en num">
					Customer’s Voitce <span class="line">#03</span>
				</p>
				<h3 class="-green"><img src="<?= $this_img_path; ?>voice03-title03.webp" alt="ともに街並みをつくっていく" decoding="async"></h3>

				<figure class="cloud -cloud02"><img src="<?= $this_img_path; ?>voice02-box04-cloud.webp" alt="" decoding="async"></figure>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">ちなみにわたしたちにご用命いただいたのは、なにか決め手がありましたか？</p>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">我が家の家づくりが、難易度が高い事は理解していました。けれど、岩嵜さんはとても興味を持って話を聞いてくださいました。その上、ハイブリッドホームさんにとってお仕事外の、家の構造や自然素材のことにも関心を寄せて下さり、「本当に家づくりが好きで、この仕事をされている」という姿勢が伝わりました。そのような方とご一緒したいと思いました。<br>ほかにも、車道に出ている縁石も、自治体に申請し交換していただきました。そのようなことができるとは思いもよらず、細やかなお心遣いがありがたかったです。見た目もスッキリしましたし、なによりお掃除がしやすくなりました。</p>
				<p class="bubble-txt -gray">ハイブリッドホーム</p>
				<p class="n_txt">そう言っていただけてうれしいです。T様のお住まいは、近隣ではまだ珍しかったオープン外構を採用したため、街に開かれた風通しのいい仕上がりになりましたね。</p>
				<p class="bubble-txt -white">Tさま</p>
				<p class="n_txt">そうなんです。やはり家は、個人が所有するものではありますが、街の景観に影響を与えるのだと、改めて感じます。その後ご近所に建った家も、オープン外構が増えているような…。もし街の景観に少しでもいい影響を与えられていたらうれしいですね。</p>
				<div class="img_area">
					<figure class="img"><img src="<?= $this_img_path; ?>voice03-box04-img.webp" alt="" decoding="async"></figure>
					<figure class="duck sb inview"><img src="<?= $this_img_path; ?>voice-box-big_duck.webp" alt="" decoding="async"></figure>
					<figure class="risu"><img src="<?= $this_img_path; ?>voice-box-risu02.webp" alt="" decoding="async"></figure>
				</div>
				<a href="<?= $jirei_link03; ?>" class="link_wrap">
					<p class="link_btn -blue">
						<span class="s_txt">川崎市 T様邸の</span>
						<span class="b_txt">施工事例ページを見る</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div><!-- /box04 -->
		</div><!-- round-con -->
	</div>
	</section><!-- / voice-sec -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
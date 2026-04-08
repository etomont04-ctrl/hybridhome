<?php
$TITLE         = 'リフォーム＆リノベーション';
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/reform.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "reform";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="リフォーム＆リノベーション" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>リフォーム＆リノベーション</p>
			</div>
		</div>
	</section><!-- /fv -->

	<section class="intro">
		<div class="inr -w1200">
			<div class="text_wrap">
				<h2>
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>intro_title-sp.webp">
						<img src="<?= $this_img_path; ?>intro_title.webp" alt="ハイブリッドホームのリフォーム&リノベーション">
					</picture>
				</h2>
				<p>暮らした時間ごと大切にするため、わたしたちハイブリッドホームは、<br>すべての工事を単なる改修に終わらせず、必ず新たな価値を創造いたします。</p>
			</div>
			<div class="about_wrap">
				<div class="circle_box -reform">
					<h3><img src="<?= $this_img_path; ?>intro_reform_tit.png" alt="リフォーム" decoding="async"></h3>
					<p><span>住んでいる住宅の<br>老朽化や不備を<br>修繕・改修すること</span></p>
				</div>
				<p class="line">&amp;</p>
				<div class="circle_box -renovation">
					<h3><img src="<?= $this_img_path; ?>intro_renovation_tit.png" alt="リフォーム" decoding="async"></h3>
					<p><span>いまある住宅に、<br>新しい価値や機能を<br>プラスすること</span></p>
				</div>
				<figure class="bird tab_off"><img src="<?= $this_img_path; ?>intro-bird.webp" alt="" decoding="async"></figure>
			</div>
			<figure class="kumonchu -kumonchu sb inview"><img src="<?= $this_img_path; ?>intro-kumonchu.webp" alt="" decoding="async"></figure>
			<figure class="kumonchu -duck sb inview"><img src="<?= $this_img_path; ?>intro-duck.webp" alt="" decoding="async"></figure>
		</div><!-- / inr -->
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
	<div class="feature">
		<section class="feature-intro inr -w1250">
			<figure class="img tab_off">
				<img src="<?= $this_img_path; ?>feature_intro-img.webp" alt="" decoding="async">
			</figure>
			<h2><img src="<?= $this_img_path; ?>feature_intro-title.webp" alt="たしたちは、みなさまの住まいのプランナーです。" decoding="async"></h2>
		</section><!-- /feature-intro -->

		<section class="feature-box_wrap -box01 inr -m2000">
			<div class="feature-box">
				<div class="text_area -v1">
					<p class="en num">
						Hybrid home’s Features <span class="line">#01</span>
					</p>
					<h2>
						<span>
							<picture>
								<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>features01-title-sp01.webp">
								<img src="<?= $this_img_path; ?>features01-title.webp" alt="本当の意味で、お客様本意の仕事を">
							</picture>
						</span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>features01-title-sp02.webp" alt="" decoding="async"></span>
					</h2>
					<p class="n_txt">わたしたちは、お客様のご要望に真摯に耳を傾けます。<br class="tab_off">
						「こんな暮らしをしたい」「この部屋の使い勝手をよくしたい」など、<br class="tab_off">
						日々の暮らしや人生設計の中から出てくる様々な言葉を手がかりに、考えています。<br >
						<br>
						しかし、お客様の要望がそのまま正解であるとは限りません。<br class="tab_off">
						本当はもっとよい解決方法があるかもしれない、<br class="tab_off">
						ご要望の通りだと将来使いにくくなるかもしれない。<br class="tab_off">これまでの経験とプロの目線に裏打ちされたプランを作成し、<br class="tab_off">
						本当にお客様が暮らしやすい住まいを実現します。<br>
						<br>
						「想像していた以上のものができあがって、感動した」と言っていただくことが、<br class="tab_off">
						わたしたちのよろこびです。
					</p>
				</div>
				<div class="img_area -v1">
					<figre class="img"><img src="<?= $this_img_path; ?>features01-img.webp" alt="" decoding="async"></figre>
					<figure class="risu inview sb">
						<img src="<?= $this_img_path; ?>feature-risu.webp" alt="" decoding="async">
					</figure>
				</div>
				<figure class="cloud">
					<img src="<?= $this_img_path; ?>feature-cloud.webp" alt="" decoding="async">
				</figure>
			</div>
		</section><!-- /box01 -->
		<section class="feature-box_wrap -box02 inr -m2000">
			<div class="feature-box -rev">
				<div class="text_area -v2">
					<p class="en num">
						Hybrid home’s Features <span class="line">#02</span>
					</p>
					<h2>
						<span><img src="<?= $this_img_path; ?>features02-title.webp" alt="多様な視点からご提案" decoding="async"></span>
					</h2>
					<p class="n_txt">わたしたちはヒアリングの際、できる限り2人体制でうかがうようにしています。<br>
					それは、複数の耳で聞くことで確実にヒアリングし、<br>異なる立場から考えることで、プランの充実度を増すことができるからです。<br>
					<br>
					豊かな現場経験、生活経験を持つスタッフが、<br>お客様のニーズを汲み取り、的確なプランをご提案いたします。
					</p>
				</div>
				<div class="img_area -v2">
					<figre class="img"><img src="<?= $this_img_path; ?>features02-img.webp" alt="" decoding="async"></figre>
				</div>
			</div>
		</section><!-- /box02 -->
		<section class="feature-box_wrap -box03 inr -m2000">
			<div class="feature-box">
				<div class="text_area -v1">
					<p class="en num">
						Hybrid home’s Features <span class="line">#03</span>
					</p>
					<h2>
						<span>
							<picture>
								<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>features03-title-sp01.webp">
								<img src="<?= $this_img_path; ?>features03-title.webp" alt="時間軸と暮らし方からアドバイス">
							</picture>
						</span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>features03-title-sp02.webp" alt="" decoding="async"></span>
					</h2>
					<p class="n_txt">やりたいことがあっても、それをどうやって形にするかを言葉にするのは難しいもの。<br>
					そのような方こそ、安心してハイブリッドホームにご相談ください。<br>
					<br>
					わたしたちは、お客様がこれまでにどのように暮らしてきて、<br>
					これからどのように暮らしていきたいかという「時間軸」をもとに、<br>
					いま必要な工事、いずれ必要になるかもしれない工事などを、整理してプランニングいたします。<br>
					<br>
					またふだんのお住まい方や趣味、荷物の量などを丁寧にヒアリングし、<br>
					動線や収納の場所や量、コンセントの位置まで具体的に検討します。
					</p>
				</div>
				<div class="img_area -v1">
					<figre class="img"><img src="<?= $this_img_path; ?>features03-img.webp" alt="" decoding="async"></figre>
				</div>
			</div>
			<figure class="cloud">
				<img src="<?= $this_img_path; ?>feature-cloud02.webp" alt="" decoding="async">
			</figure>
			<figure class="duck inview sb">
				<img src="<?= $this_img_path; ?>feature-duck.webp" alt="" decoding="async">
			</figure>
		</section><!-- /box03 -->
		<section class="feature-box_wrap -box04 inr -m2000">
			<div class="feature-box -rev">
				<div class="text_area -v2">
					<p class="en num">
						Hybrid home’s Features <span class="line">#04</span>
					</p>
					<h2>
						<span><img src="<?= $this_img_path; ?>features04-title.webp" alt="細かすぎるのが自慢です" decoding="async"></span>
					</h2>
					<p class="n_txt">わたしたちは現地調査の際、細かく寸法をとったうえで、プランニングします。<br>
					それは、いまの住宅の現状を正確に把握することが、<br>
					よいプランをつくるために必要不可欠だからです。<br>
					<br>
					わたしたちはほぼ毎日、工事現場に出向きます。<br>
					現場の職人たちと細かく進捗を確認し、お客様とコミュニケーションをとることが、<br>満足いくリノベーションには大切だと考えているからです。
					</p>
				</div>
				<div class="img_area -v2">
					<figre class="img"><img src="<?= $this_img_path; ?>features04-img.webp" alt="" decoding="async"></figre>
				</div>
			</div>
		</section><!-- /box04 -->
		<section class="feature-box_wrap -box05 inr -m2000">
			<div class="feature-box">
				<div class="text_area -v1">
					<p class="en num">
						Hybrid home’s Features <span class="line">#05</span>
					</p>
					<h2>
						<span>
							<picture>
								<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>features05-title-sp01.webp">
								<img src="<?= $this_img_path; ?>features05-title.webp" alt="信頼のおける専任協力業者がいます">
							</picture>
						</span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>features05-title-sp02.webp" alt="" decoding="async"></span>
					</h2>
					<p class="n_txt">人手不足が進むいま、信頼できる職人を確保するのは、工事を成功させる必須条件です。<br>
					リフォーム＆リノベーションには、様々な状況に対応できる高い技術力が必要です。<br>
					ハイブリッドホームは、60社以上80人以上の優れた専任協力業者、<br>職人たちと連携しています。
					</p>
				</div>
				<div class="img_area -v1">
					<figre class="img"><img src="<?= $this_img_path; ?>features05-img.webp" alt="" decoding="async"></figre>
				</div>
			</div>
			<figure class="kumonchu inview sb">
				<img src="<?= $this_img_path; ?>feature-kumonchu.webp" alt="" decoding="async">
			</figure>
			<figure class="risu inview sb">
				<img src="<?= $this_img_path; ?>feature05-risu.webp" alt="" decoding="async">
			</figure>

		</section><!-- /box03 -->
	</div><!-- /feature -->

	<div class="process">
		<div class="inr -w1200">
			<h2>
				<picture>
					<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>process_title-sp.webp">
					<img src="<?= $this_img_path; ?>process_title.webp" alt="リフォーム&リノベーションの流れ">
				</picture>
			</h2>
			<span class="en en-tit">Renovation Process</span>
			<ul class="process_list inview bt">
				<li class="list01">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">01</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process01-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process01-title.png" alt="お問い合わせ" decoding="async"></h3>
							<p class="n_txt">お電話またはホームページからお問い合わせください。ハイブリッドホーム担当者から、折り返しご連絡いたします。</p>
						</div>
					</div>
				</li>
				<li class="list02">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">02</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process02-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process02-title.png" alt="現地調査・ヒアリング" decoding="async"></h3>
							<p class="n_txt">的確なプランをご提案するため、基本的に現地にて調査をしながらご相談をお受けしています。実際のお住まいを見ながら、ご要望をお伝えください。</p>
						</div>
					</div>
				</li>
				<li class="list03">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">03</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process03-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process03-title.png" alt="プランニング・お見積り" decoding="async"></h3>
							<p class="n_txt">ご要望やお困りごとを解決するプランをご提案いたします。内容について、納得いくまで担当者におたずねください。</p>
						</div>
					</div>
				</li>
				<li class="list04">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">04</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process04-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process04-title.png" alt="ご契約" decoding="async"></h3>
							<p class="n_txt">最終プランと工事金額をご確認いただき、契約書を取り交わします。なお、ご契約までのやりとりは、無料で対応いたしております。</p>
						</div>
					</div>
				</li>
				<li class="list05">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">05</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process05-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process05-title.png" alt="工事" decoding="async"></h3>
							<p class="n_txt">ハイブリッドホームの現場監督と専任指定業者が、責任を持って工事を行います。工事中でもわからない点があれば、なんでもおたずねください。</p>
						</div>
					</div>
				</li>
				<li class="list06">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">06</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process06-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process06-title.png" alt="お引き渡し" decoding="async"></h3>
							<p class="n_txt">お客様立会いのもと、完成検査を実施いたします。十分にご納得いただいた後、保証書を発行いたします。</p>
						</div>
					</div>
				</li>
				<li class="list07">
					<div class="num_box">
						<p class="en">process</p>
						<p class="en num">07</p>
					</div>
					<div class="img_area">
						<figure class="img">
							<img src="<?= $this_img_path; ?>process07-img.webp" alt="" decoding="async">
						</figure>
					</div>
					<div class="text_area">
						<div>
							<h3><img src="<?= $this_img_path; ?>process07-title.png" alt="アフターメンテナンス" decoding="async"></h3>
							<p class="n_txt">ハイブリッドホームでは独自に、構造体10年間・外装屋根5年間・内装2年間の保証をつけています。期間内は無償で修理対応いたします。また12ヶ月・24ヶ月で定期点検のご案内をお送りします。工事箇所だけでなく、住まいの疑問についてもご相談ください。</p>
						</div>
					</div>
				</li>
			</ul><!-- /process_list -->
		</div><!-- /inr -->
	</div><!--/ process -->
	<div class="works">
		<div class="inr -w1200">
			<div class="title_area">
				<h2><img src="<?= $this_img_path; ?>works_title.webp" alt="施工事例のPICK UP" decoding="async"></h2>
				<span class="en en-tit">Pick up Works</span>
				<a href="<?= $works_link ?>" class="link_wrap">
					<p class="link_btn -blue">
						<span class="text">事例一覧へ</span>
						<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
					</p>
				</a>
			</div>
			<div class="works_list-wrap">
				<figure class="duck sb inview bt_one"><img src="<?= $this_img_path; ?>works-duck.webp" alt="" decoding="async"></figure>
				<ul class="works_list inview bt">
					<li>
						<article class="card">
							<div class="card__link">
							<a class="link" href="#"></a>
								<div class="card__photo uchi">
									<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
								</div>
								<div class="card__body">
									<h3 class="card__title">愛車と同居できる家</h3>
									<div class="card__tags"><a href="#d">#ウッドデッキ</a>　<a href="#">#エクステリア</a></div>
									<a href="#c" class="card__area">町田市</a>
								</div>
							</div>
						</article>
					</li>
					<li>
						<article class="card">
							<div class="card__link">
							<a class="link" href="#"></a>
								<div class="card__photo uchi">
									<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
								</div>
								<div class="card__body">
									<h3 class="card__title">愛車と同居できる家</h3>
									<div class="card__tags"><a href="#d">#ウッドデッキ</a>　<a href="#">#エクステリア</a></div>
									<a href="#c" class="card__area">町田市</a>
								</div>
							</div>
						</article>
					</li>
					<li>
						<article class="card">
							<div class="card__link">
							<a class="link" href="#"></a>
								<div class="card__photo uchi">
									<img src="<?= $img_path; ?>top/project_img.webp" alt="" decoding="async" class="fit_img">
								</div>
								<div class="card__body">
									<h3 class="card__title">愛車と同居できる家</h3>
									<div class="card__tags"><a href="#d">#ウッドデッキ</a>　<a href="#">#エクステリア</a></div>
									<a href="#c" class="card__area">町田市</a>
								</div>
							</div>
						</article>
					</li>
				</ul><!--/works-list -->
			</div>
			<a href="<?= $qa_link; ?>" class="qa-bnr">
				<i class="icon icon01"><img src="<?= $this_img_path; ?>qa-bnr_icon01.png" alt="" decoding="async"></i>
				<i class="icon icon02"><img src="<?= $this_img_path; ?>qa-bnr_icon02.png" alt="" decoding="async"></i>
				<i class="icon icon03"><img src="<?= $this_img_path; ?>qa-bnr_icon03.png" alt="" decoding="async"></i>
				<i class="icon icon04"><img src="<?= $this_img_path; ?>qa-bnr_icon04.png" alt="" decoding="async"></i>
				<p class="text text01">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>qa-bnr_txt01-sp.webp">
						<img src="<?= $this_img_path; ?>qa-bnr_txt01.webp" alt="リフォーム&リノベーションのあれこれ、お答えします！">
					</picture>
				</p>
				<p class="text text02"><img src="<?= $this_img_path; ?>qa-bnr_txt02.webp" alt="" decoding="async"></p>
				<figure class="man"><img src="<?= $this_img_path; ?>qa-bnr_man.webp" alt="" decoding="async"></figure>
				<figure class="girl"><img src="<?= $this_img_path; ?>qa-bnr_girl.webp" alt="" decoding="async"></figure>
			</a>
		</div><!-- /inr -->
	</div><!-- /works -->

	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
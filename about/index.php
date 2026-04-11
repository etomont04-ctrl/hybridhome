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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/about.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "about";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="私たちについて" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>私たちについて</p>
			</div>
		</div>
	</section><!-- /fv -->
	<section class="intro">
		<div class="inr -w1300">
			<div class="title_area">
				<h2><img src="<?= $this_img_path; ?>intro_title.webp" alt="ハイブリッドホームは、家を大切に住みつぎたい人のためのリフォーム&リノベーション会社です。" decoding="async"></h2>
			</div>
			<figure class="cloud tab_on"><img src="<?= $this_img_path; ?>intro_cloud.webp" alt="" decoding="async"></figure>
			<figure class="bird bird02"><img src="<?= $this_img_path; ?>intro_bird.webp" alt="" decoding="async"></figure>
			<div class="intro-loopY">
				<div class="intro-loopY__track">
					<div class="intro-loopY__unit">
						<img src="<?= $this_img_path; ?>intro_loop-img01.webp" alt="" class="intro-loop-Y__img" decoding="async">
						<img src="<?= $this_img_path; ?>intro_loop-img02.webp" alt="" class="intro-loop-Y__img" decoding="async">
						<img src="<?= $this_img_path; ?>intro_loop-img03.webp" alt="" class="intro-loop-Y__img" decoding="async">
						<img src="<?= $this_img_path; ?>intro_loop-img04.webp" alt="" class="intro-loop-Y__img" decoding="async">
						<img src="<?= $this_img_path; ?>intro_loop-img05.webp" alt="" class="intro-loop-Y__img" decoding="async">
						<img src="<?= $this_img_path; ?>intro_loop-img06.webp" alt="" class="intro-loop-Y__img" decoding="async">
					</div>
					<div class="intro-loopY__unit">
					<img src="<?= $this_img_path; ?>intro_loop-img01.webp" alt="" class="intro-loop-Y__img" decoding="async">
					<img src="<?= $this_img_path; ?>intro_loop-img02.webp" alt="" class="intro-loop-Y__img" decoding="async">
					<img src="<?= $this_img_path; ?>intro_loop-img03.webp" alt="" class="intro-loop-Y__img" decoding="async">
					<img src="<?= $this_img_path; ?>intro_loop-img04.webp" alt="" class="intro-loop-Y__img" decoding="async">
					<img src="<?= $this_img_path; ?>intro_loop-img05.webp" alt="" class="intro-loop-Y__img" decoding="async">
					<img src="<?= $this_img_path; ?>intro_loop-img06.webp" alt="" class="intro-loop-Y__img" decoding="async">
					</div>
				</div>
			</div>
		</div><!--/inr -->
		<div class="intro-loop">
			<div class="intro-loop__track">
				<div class="intro-loop__unit">
					<img src="<?= $this_img_path; ?>intro_loop-txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="intro-loop__img">
				</div>
				<div class="intro-loop__unit">
					<img src="<?= $this_img_path; ?>intro_loop-txt.webp" alt="We at Hybrid Home care deeply for your home." decoding="async" class="intro-loop__img">
				</div>
			</div>
		</div><!--/intro-loop -->
	</section><!--/intro -->
	<section class="policy">
		<div class="inr -w1400 round-con">
			<div class="policy-sec -sec01">
				<h2>
					<img src="<?= $this_img_path; ?>policy_tit01.webp" alt="ハイブリットホームが" decoding="async">
					<img src="<?= $this_img_path; ?>policy_tit02.webp" alt="大切にしている、" decoding="async">
					<img src="<?= $this_img_path; ?>policy_tit03.webp" alt="3つのこと" decoding="async">
				</h2>
				<div class="text_area">
					<p class="en sub-tit">Hybrid home’s Policy <img src="<?= $this_img_path; ?>policy_num01.png" alt="#01" decoding="async"></p>
					<h3>
						<span class="tab_off"><img src="<?= $this_img_path; ?>policy_sec-tit01.webp" alt="家を大切にする＝自分を大切にすること" decoding="async"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit01-tab01.webp" alt="家を大切にする＝" decoding="async" class="-sp_tit01"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit01-tab02.webp" alt="自分を大切にすること" decoding="async" class="-sp_tit02"></span>
					</h3>
					<p class="n_txt">家とは不思議なものです。<br class="tab_off">機能だけを考えれば、雨風を防ぎ、安全に過ごせる場所であれば十分なはず。<br>
					ところが家はそれだけの存在にとどまりません。<br>
					いつしか自分の気配がにじみだし、家族の気配と混ざり合って、<br class="tab_off">
					たんなる木や石でできた箱を越えた、<br class="tab_off">
					唯一無二の場所になります。<br>
					<br>
					家を大切にすることは、そこに住む自分を大切にすること。<br class="tab_off">
					そこで暮らした時間ごと大切にするために、<br class="tab_off">
					再び家へ息吹を吹き込みましょう。<br>
					わたしたちハイブリッドホームが全力でお手伝いいたします。</p>
					<a href="<?= $reform_link ?>" class="link_wrap">
						<p class="link_btn -blue">
							<span class="text">リノベーション・リフォームページへ</span>
							<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
						</p>
					</a>
				</div><!--/text_area -->
				<figure class="kumo kumonchu sb inview"><img src="<?= $this_img_path; ?>policy01_kumonchu.webp" alt="生涯を共にする家のこと、" decoding="async"></figure>
				<figure class="kumo risu sb inview">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>policy01_risu-sp.webp">
						<img src="<?= $this_img_path; ?>policy01_risu.webp" alt="一緒に考えませんか？">
					</picture>
				</figure>
			</div><!--/policy-sec -->
			<div class="policy-sec -sec02">
				<div class="text_area">
					<p class="en sub-tit">Hybrid home’s Policy <img src="<?= $this_img_path; ?>policy_num02.png" alt="#02" decoding="async"></p>
					<h3 class="-tit02">
						<span class="tab_off"><img src="<?= $this_img_path; ?>policy_sec-tit02.webp" alt="家を大切にする＝自分を大切にすること" decoding="async"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit02-tab01.webp" alt="家を大切にする＝" decoding="async" class="-sp_tit01"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit02-tab02.webp" alt="長く続く関係" decoding="async" class="-sp_tit02"></span>
					</h3>
					<p class="n_txt">ハイブリッドホームには、<br>
						多くのリピーターのお客様がいらっしゃいます。<br>
						少しずつ住まいに手を入れながら暮らしている方が多いのは、<br>
						わたしたちを、住まいを一緒に守るパートナーだと考えてくださるから。<br>
						<br>
						職人たちとの関係も同じです。<br>
						ハイブリッドホームには、長く一緒に仕事を続けている職人が多くいます。<br>
						それは、腕がいいからだけではありません。<br>
						住む方の気持ちに寄り添うことを大切に考える職人たちもまた<br>
						お客様の住まいを支える大切なパートナーだからです。</p>
						<a href="<?= $voice_link ?>" class="link_wrap -slink01">
							<p class="link_btn -blue">
								<span class="text">お客様の声</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
							</p>
						</a>
						<a href="<?= $member_link ?>" class="link_wrap -slink02">
							<p class="link_btn -blue">
								<span class="text">ハイブリッドホームの仲間たち</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
							</p>
						</a>
				</div><!--/text_area -->
				<figure class="kumo kumonchu sb inview"><img src="<?= $this_img_path; ?>policy02_kumonchu.webp" alt="家のこと、未来のこと、" decoding="async"></figure>
				<figure class="kumo duck sb inview">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>policy02_duck-sp.webp">
						<img src="<?= $this_img_path; ?>policy02_duck.webp" alt="僕たちも一緒に考えます。">
					</picture>
				</figure>
			</div><!--/policy-sec -->
			<div class="policy-sec -sec03">
				<div class="text_area">
					<p class="en sub-tit">Hybrid home’s Policy <img src="<?= $this_img_path; ?>policy_num03.png" alt="#03" decoding="async"></p>
					<h3 class="-tit03">
						<span class="tab_off"><img src="<?= $this_img_path; ?>policy_sec-tit03.webp" alt="家を大切にする＝自分を大切にすること" decoding="async"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit03-tab01.webp" alt="家を住み継ぐことは、" decoding="async" class="-sp_tit01"></span>
						<span class="tab_on"><img src="<?= $this_img_path; ?>policy_sec-tit03-tab02.webp" alt="まちを大切にすること" decoding="async" class="-sp_tit02"></span>
					</h3>
					<p class="n_txt">
						リノベーションをしながら家を住み継ぐということは、<br class="tab_off">
						実は1軒の家のことにとどまりません。<br>
						家を大切に住んでいる方がいる。<br class="tab_off">
						その輪が広がり、まち全体の風景と空気をつくります。<br>
						丁寧に住み継がれた家が一軒あると、隣の家も、またその隣も、<br class="tab_off">
						「このまちを大切にしたい」という気持ちが連鎖していきます。<br>
						<br>
						新しいものに建て替えるだけでは残らない、<br class="tab_off">
						その土地ならではの表情や暮らしのリズム、人と人の温かな距離感。<br class="tab_off">
						そうしたものが、家とともに形作られていきます。<br>
						<br>
						だからこそハイブリッドホームは、<br>
						住まいを次へ受け渡す時間に寄り添いながら、<br class="pc_off">地域とともに家づくりを続けています。
					</p>
				</div><!--/text_area -->
				<figure class="kumo duck sb inview"><img src="<?= $this_img_path; ?>policy03_duck.webp" alt="家づくりだけじゃなく、" decoding="async"></figure>
				<figure class="kumo risu sb inview">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>policy01_risu-sp.webp">
						<img src="<?= $this_img_path; ?>policy01_risu.webp" alt="一緒に考えませんか？">
					</picture>
				</figure>
			</div><!--/policy-sec -->
		</div>
	</section><!--/policy -->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
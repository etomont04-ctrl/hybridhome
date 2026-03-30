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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/recruit.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "recruit";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="採用情報" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>採用情報</p>
			</div>
		</div>
	</section><!-- /fv -->

	<section class="intro">
		<div class="inr -w1400">
			<div class="text_wrap">
				<h2>
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>intro_title-sp.webp">
						<img src="<?= $this_img_path; ?>intro_title.webp" alt="わたしたちと一緒にお客様の暮らしをつくりましょう">
					</picture>
				</h2>
				<p>
					ハイブリッドホームは、単なるリノベーション会社ではありません。<br>お客様一人ひとりの「暮らしやすい住まい」を、丁寧に形にしていく会社です。<br>
					だからこそ、住宅業界の経験者はもちろん、お客様に寄り添いながら「暮らしをつくる」ことに関心のある未経験の方とも、出会いたいと考えています。<br>
					<br>
					20年にわたり、まちに根づいて仕事をしてきました。気づけば、顔見知りのお客様や仲間が増え、まちのあちこちにハイブリッドホームの種が根づき、芽吹いている実感があります。誠実に仕事をしてきたからこそ、いまがあります。<br>
					<br>
					これからも、まちと一緒に育っていく会社です。その歩みに加わってくれる方をお待ちしています。
				</p>
			</div>
			<figure class="tori"><img src="<?= $this_img_path; ?>intro-tori.webp" alt="" decoding="async"></figure>
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
			</div>
		</div>
		<div class="town-bg"></div>
		<figure  class="cloud-bg">
			<img src="<?= $this_img_path; ?>intro-cloud_bg.webp" alt="" decoding="async">
		</figure>
		<figure class="btm_cloud cloud01"><img src="<?= $this_img_path; ?>intro-btm_cloud01.webp" alt="" decoding="async"></figure>
		<figure class="btm_cloud cloud02"><img src="<?= $this_img_path; ?>intro-btm_cloud02.webp" alt="" decoding="async"></figure>
	</section><!-- /intro -->

	<div class="recruit-wrap">
		<div class="inr -w1400 round-con">
			<section class="attractive">
				<h2>
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>attractive-title-sp.webp">
						<img src="<?= $this_img_path; ?>attractive-title.webp" alt="ハイブリッドホームで働く力">
					</picture></h2>
				<span class="en en-tit">Attractive points </span>
				<ul class="attractive_list">
					<li class="list01 inview bt">
						<p class="en num">
							Hybrid home’s Points <span class="line">#01</span>
						</p>
						<h3><img src="<?= $this_img_path; ?>attractive01-title.webp" alt="お客様のよろこび" decoding="async"></h3>
						<figure class="points-img"><img src="<?= $this_img_path; ?>attractive_img01.webp" alt="" decoding="async"></figure>
						<p class="n_txt">目の前で「ありがとう」と言ってもらえる瞬間が、最大のやりがいです。</p>
					</li>
					<li class="list02 inview bt">
						<p class="en num">
							Hybrid home’s Points <span class="line">#02</span>
						</p>
						<h3><img src="<?= $this_img_path; ?>attractive02-title.webp" alt="自分の発想を形に" decoding="async"></h3>
						<figure class="points-img"><img src="<?= $this_img_path; ?>attractive_img02.webp" alt="" decoding="async"></figure>
						<p class="n_txt">ゼロからアイデアを形にする、ものづくりの楽しさがあります。</p>
					</li>
					<li class="list03 inview bt">
						<p class="en num">
							Hybrid home’s Points <span class="line">#03</span>
						</p>
						<h3><img src="<?= $this_img_path; ?>attractive03-title.webp" alt="未経験でもチャレンジ" decoding="async"></h3>
						<figure class="points-img"><img src="<?= $this_img_path; ?>attractive_img03.webp" alt="" decoding="async"></figure>
						<p class="n_txt">先輩が丁寧に教えるので、安心して一歩を踏み出せます。</p>
					</li>
					<li class="list04 inview bt">
						<p class="en num">
							Hybrid home’s Points <span class="line">#04</span>
						</p>
						<h3><img src="<?= $this_img_path; ?>attractive04-title.webp" alt="建 ・インテリアの知識が身につく" decoding="async"></h3>
						<figure class="points-img"><img src="<?= $this_img_path; ?>attractive_img04.webp" alt="" decoding="async"></figure>
						<p class="n_txt">建築士やインテリアコーディネーターのスキルを学び、仕事の幅が広がります。</p>
					</li>
				</ul>
			</section><!-- /attractive -->
			<section class="flow">
				<h2><img src="<?= $this_img_path; ?>flow-title.webp" alt="採用フロー" decoding="async"></h2>
				<span class="en en-tit">Flow</span>
				<ul class="flow_list inview bt">
					<li class="list01">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">01</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow01-title.png" alt="お問い合わせ" decoding="async"></h3>
						<p class="n_txt">応募フォームより必要事項を入力のうえ、エントリーしてください。</p>
						<a href="#form" class="link_wrap">
							<p class="link_btn -blue">
								<span class="text">エントリーはこちら</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
							</p>
						</a>
					</li>
					<li class="list02">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">02</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow02-title.png" alt="書類選考" decoding="async"></h3>
						<p class="n_txt">履歴書・職務経歴書をご提出いただき、選考を行います。</p>
					</li>
					<li class="list03">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">03</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow03-title.png" alt="適性検査" decoding="async"></h3>
						<p class="n_txt">WEBテストを受検いただきます。</p>
					</li>
					<li class="list04">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">04</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow04-title.png" alt="1次面接" decoding="async"></h3>
						<p class="n_txt">店舗へご来社いただき、会社説明／質疑応答／面接（ディレクター）を実施します。</p>
					</li>
					<li class="list05">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">05</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow05-title.png" alt="2次面接" decoding="async"></h3>
						<p class="n_txt">代表による最終面接を行います。</p>
					</li>
					<li class="list06">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">06</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow06-title.png" alt="内定" decoding="async"></h3>
						<p class="n_txt">選考結果はメールまたはお電話にてご連絡します。</p>
					</li>
					<li class="list07">
						<div class="num_box">
							<p class="en">process</p>
							<p class="en num">07</p>
						</div>
						<h3><img src="<?= $this_img_path; ?>flow07-title.png" alt="入社" decoding="async"></h3>
						<p class="n_txt">条件の確認後、入社手続きを行います。入社後は3か月間の研修期間（試用期間あり）があります。</p>
					</li>
				</ul>
			</section><!-- /flow -->

			<section class="description">
				<h2><img src="<?= $this_img_path; ?>description-title.png" alt="募集要項" decoding="async"></h2>
				<span class="en en-tit">Job Description</span>

				<div class="data-list_wrap -mid">
					<h3><img src="<?= $this_img_path; ?>midcareer-title.jpg" alt="中途採用情報" decoding="async"></h3>
					<dl class="data-list">
						<div class="data_row">
							<dt class="data_head">雇用形態</dt>
							<dd class="data_body">男女正社員・契約社員・パート</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">応募資格</dt>
							<dd class="data_body">
								<ul class="data_business">
									<li>大学、短期大学、専門学校を卒業している方</li>
									<li>26～49歳の方</li>
									<li>普通自動車免許をお持ちの方</li>
									<li>経験者及び1～２級建築士・１～２級施工管理技士・インテリアコーディネーター・宅地建物取引士等の資格をお持ちの方は歓迎します</li>
								</ul>
							</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">職務内容</dt>
							<dd class="data_body">

								<ul class="data_business">
									<li>住宅リフォーム＆リノベーションの営業（現調・商談・積算見積・契約・着工～完工の検査立ち合い）</li>
									<li>プランニング（建築設計・エクステリア設計）</li>
									<li>施工管理（工程表作成と管理・施工方法の検証・実行予算管理・発注業務）</li>
									<li>アフターサービス<br>９：００～１８：００（実働８時間）</li>
								</ul>
								</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">勤務地</dt>
							<dd class="data_body">本社・町田店・新百合ヶ丘店</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">勤務時間</dt>
							<dd class="data_body">９：００～１８：００（実働８時間）</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">給与・賞与</dt>
							<dd class="data_body">当社規定による<br>※職務能力を十分に考慮の上、話し合いの上決定します。<br>※経験・年齢を考慮の上、優遇いたします。</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">諸手当</dt>
							<dd class="data_body">交通手当・資格手当　等</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">福利厚生</dt>
							<dd class="data_body">
								社会保険完備、厚生年金基金、慶弔見舞金、社員旅行　等
							</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">休日・休暇</dt>
							<dd class="data_body">年間休日124日　（令和7年度）<br>
								週休２日制（日・月曜日）<br>
								祝日、創立記念日、年末年始休暇、夏季休暇、年次有給休暇、慶弔休暇　等</dd>
						</div>
						<div class="data_row">
							<dt class="data_head">応募方法</dt>
							<dd class="data_body">
								応募フォームより、必要事項の記入と履歴書及び職務経歴書をご提出ください。<br>書類選考の上、追って採用担当者より面接の日時等をご連絡致します。
								<a href="#form" class="link_wrap">
									<p class="link_btn -blue">
										<span class="text">中途採用にエントリーする</span>
										<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
									</p>
								</a>
							</dd>
						</div>
					</dl><!-- /data-list -->
				</div><!-- /data-list_wrap -->
				<div class="data-list_wrap -news">
					<h3><img src="<?= $this_img_path; ?>newgraduate-title.jpg" alt="新卒採用情報" decoding="async"></h3>
					<div class="data-list">
						<p class="non-text">現在募集しておりません。</p>
					</div>
				</div><!-- /data-list_wrap -->
			</section><!-- /description-->
		</div><!-- / inr -->
		<div class="contact_wrap">
			<div class="inr -w1400">
			<section class="round-con form">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>form_title.png" alt="エントリーフォーム" decoding="async"></h2>
					<p class="en">Entry form</p>
					<p class="n_txt">入力内容をご確認の上、確認ボタンを押してください。<br>1～3営業日以内に、担当よりメールにて返信させていただきます。</p>
				</div>
				<ol class="step">
					<li class="this">
						<span class="en">step 01</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text01.png" alt="内容入力" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 02</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text02.png" alt="内容確認" decoding="async"></p>
					</li>
					<li>
						<span class="en">step 03</span>
						<p class="step-text"><img src="<?= $img_path; ?>common/step-text03.png" alt="送信完了" decoding="async"></p>
					</li>
				</ol>
				<form id="form" action="conf.php" method="post">
					<div class="form_wrap -recruit">
						<div class="box">
							<div class="form_tit req"><label for="name">お名前</label></div>
							<div class="form_input">
								<input name="name" id="name" type="text" class="form-item" placeholder="フルネームでご入力ください" required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="kana">ふりがな</label></div>
							<div class="form_input">
							<input name="kana" id="kana" type="text" class="form-item" placeholder="たなか たろう"  required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="age">ご年齢</label></div>
							<div class="form_input">
							<input name="age" id="age" type="text" class="form-item" placeholder="35歳" required>
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label for="mail">メールアドレス</label></div>
							<div class="form_input">
							<input name="mail" id="mail" type="email" class="form-item" required placeholder="半角英数字でご入力ください">
							</div>
						</div>
						<div class="box">
							<div class="form_tit"><label for="tel">お電話番号</label></div>
							<div class="form_input">
							<input name="tel" id="tel" type="tel" class="form-item" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}"placeholder="0800-111-8146">
							</div>
						</div>
						<div class="box">
							<div class="form_tit"><label for="yubin">郵便番号</label></div>
							<div class="form_input">
							<input name="yubin" id="yubin" type="yubin" class="form-item" pattern="\d{3}-?\d{4}" placeholder="101-0045">
							</div>
						</div>
						<div class="box">
							<div class="form_tit req"><label>希望雇用形態</label></div>
							<ul class="form-list input-radio">
								<li>
									<label><input type="radio" name="shubetsu" value="正社員" checked> <span>正社員</span></label>
								</li>
								<li>
									<label><input type="radio" name="shubetsu" value="契約社員"> <span>契約社員</span></label>
								</li>
								<li>
									<label><input type="radio" name="shubetsu" value="パート"> <span>パート</span></label>
								</li>
							</ul>
						</div>
						<div class="box">
							<div class="form_tit req"><label>希望職種</label></div>
							<select name="shokushu[]" id="k-select">
								<option value="" selected disabled>希望職種を選択してください</option>
								<option value="職種1">職種1</option>
								<option value="職種2">職種2</option>
								<option value="職種3">職種3</option>
								<option value="職種4">職種4</option>
							</select>
						</div>
						<div class="btn_wrap">
							<p class="link_btn -blue -send" id="submit_wrap">
								<span class="text">送信内容の確認</span>
								<i class="arrow"><img src="<?= $img_path; ?>common/arrow-w.png" alt="" decoding="async"></i>
								<input type="submit" class="submit-btn" id="submit-btn" value="">
							</p>
						</div>
					</div><!-- /form_wrap -->
				</form><!--/ form-->
			</section>
		</div>
	</div>
	</div><!-- recruit-rap-->
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
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
$UNIQUE_CSS = '<link rel="stylesheet" href="../assets/css/company.css?'.$Ymd.'">';
$UNIQUE_SCRIPT = '';
$uri = "company";
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
			<h1 class="inview"><img src="<?= $this_img_path; ?>title.webp" alt="会社概要" decoding="async"></h1>
			<figure class="cloud -left"><img src="<?= $img_path; ?>common/illust/fv-cloud01.webp" alt="" decoding="async"></figure>
			<figure class="cloud -right"><img src="<?= $img_path; ?>common/illust/fv-cloud02.webp" alt="" decoding="async"></figure>
			<div class="pan inview bt_one">
				<a href="<?= $ROOT_DIR; ?>">TOP</a>
				<p>会社概要</p>
			</div>
		</div>
	</section><!-- /fv -->
	<div class="company-wrap">
		<div class="inr -w1400 round-con">
			<figure class="kumo -risu"><img src="<?= $this_img_path; ?>fv-risu.webp" alt="" decoding="async"></figure>
			<figure class="kumo -kumonchu"><img src="<?= $this_img_path; ?>fv-kumonchu.webp" alt="" decoding="async"></figure>
			<section class="company-sec -message">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>message_title.webp" alt="代表のご挨拶" decoding="async"></h2>
					<p class="en">Message</p>
				</div>
				<div class="img_area">
					<figure class="img">
						<img src="<?= $this_img_path; ?>message_img.webp" alt="" decoding="async">
					</figure>
					<figure class="risu"><img src="<?= $this_img_path; ?>message_risu.webp" alt="" decoding="async"></figure>
				</div>
				<div class="text_area">
					<p class="n_txt">株式会社ハイブリッドホームは、おかげさまで創業から20年を超える歩みを重ねてまいりました。創業当初から掲げる経営理念は、「お客様にご満足いただくことが、わたしたちの報酬です」。この理念は、お客様はもちろん、関係するすべてのみなさまの満足があってこそ叶うものです。これまで支えてくださったお客様、そしてともに歩んでくださった関係者のみなさまに、心より感謝申し上げます。<br>
					<br>
					わたしたちは、企業として常に「まっとうであること」を信条としています。迷ったときには、たとえ困難でも正しい方向を選ぶ。人として会社として、誠実で透明性のある企業運営を通じて、信頼に応え続けます。<br>
					そしてこれまで以上に、地域とお客様、職人、そして社員がともに成長できる企業を目指します。仕事の見える化や働きやすい環境づくりを進め、一つひとつの現場にまっすぐに向き合ってまいります。<br>
					<br>
					日々の感謝を忘れず、地域に根ざし、みなさまの暮らしに寄り添える企業に。ハイブリッドホームはこれからもともに歩みを続けてまいります。<br>
					<br>
					<span class="r_txt">株式会社ハイブリッドホーム</span>
					<span class="r_txt">代表取締役　星野 康次</span>
					</p>
				</div>
			</section><!-- /-message -->
			<section class="company-sec -company">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>company_title.webp" alt="会社概要" decoding="async"></h2>
					<p class="en">Company</p>
				</div>
				<figure class="kumo -kumonchu02"><img src="<?= $this_img_path; ?>company-kumonchu.webp" alt="" decoding="async"></figure>
				<dl class="data-list">
					<div class="data_row">
						<dt class="data_head">社名</dt>
						<dd class="data_body">株式会社ハイブリッドホーム</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">本社所在地</dt>
						<dd class="data_body">
							〒101-0045　東京都千代田区神田鍛冶町 3-7-6　翔和鍛冶町ビル 4 階<br class="tab_on">
							<a href="<?= $map_hon ?>" target="_blank" class="map_link">
								<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
									Google Map
							</a>
						</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">電話</dt>
						<dd class="data_body">TEL：03-3252-8100</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">代表者</dt>
						<dd class="data_body">代表取締役 星野 康次</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">設立</dt>
						<dd class="data_body">2004 年 5 月 5 日</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">資本金</dt>
						<dd class="data_body">99,000,000 円</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">従業員数</dt>
						<dd class="data_body">19 名（2025 年 8 月末）</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">登録免許</dt>
						<dd class="data_body">
							建設業許可　国土交通大臣許可（般）第 21277 号<br>（建築工事業・大工工事業・屋根工事業・タイルれんがブロック工事業・内装仕上工事業）<br>二級建築事務所登録　東京都知事登録　第 14722 号
						</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">加盟団体</dt>
						<dd class="data_body">一般社団法人日本住宅リフォーム産業協会（JERCO）</dd>
					</div>
					<div class="data_row">
						<dt class="data_head">事業内容</dt>
						<dd class="data_body">
							<ul class="data_business">
								<li>戸建て（木造・RC 造・S 造）新築・増改築リフォーム・フルリノベーションの設計・施工・アフター管理</li>
								<li>マンションリフォーム・フルリノベーションの設計・施工・アフター管理</li>
								<li>賃貸アパート・マンションの（木造・RC 造・S 造）新築・リフォーム・フルリノベーションの設計・施工</li>
								<li>ビル・マンション大規模修繕工事の設計・施工・アフター管理</li>
								<li>外構・造園・エクステリア設計・施工・アフター管理</li>
							</ul>
						</dd>
					</div>
				</dl><!-- /data-list -->
			</section><!-- /-message -->
			<section class="company-sec -office">
				<div class="tit_area">
					<h2><img src="<?= $this_img_path; ?>office_title.webp" alt="店舗・営業所一覧" decoding="async"></h2>
					<p class="en">Office</p>
				</div>
				<figure class="duck inview sb">
					<picture>
						<source media="(max-width: 1050px)" srcset="<?= $this_img_path; ?>office-duck-sp.webp">
						<img src="<?= $this_img_path; ?>office-duck.webp" alt="">
					</picture>
				</figure>
				<ul>
					<li>
						<figure class="img"><img src="<?= $this_img_path; ?>office_img01.webp" alt="" decoding="async"></figure>
						<h3>本社 首都圏事業部</h3>
						<p class="n_txt">東京都千代田区神田鍛冶町3-7-6翔和鍛冶町ビル4階<br>TEL：03-3252-8100　FAX：03-3252-8566
						</p>
						<a href="<?= $map_hon; ?>" target="_blank" class="map_link">
							<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
								Google Map
						</a>
					</li>
					<li>
						<figure class="img"><img src="<?= $this_img_path; ?>office_img02.webp" alt="" decoding="async"></figure>
						<h3>町田店</h3>
						<p class="n_txt">東京都町田市玉川学園2-11-1ヴェルデ玉川<br>TEL：0800-111-8146　FAX：042-728-1253
						</p>
						<a href="<?= $map_machida; ?>" target="_blank" class="map_link">
							<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
								Google Map
						</a>
					</li>
					<li>
						<figure class="img"><img src="<?= $this_img_path; ?>office_img03.webp" alt="" decoding="async"></figure>
						<h3>新百合ヶ丘店</h3>
						<p class="n_txt">神奈川県川崎市麻生区上麻生1-7-14 パストラル新百合Ⅱ<br>TEL：044-959-6630　FAX：044-959-6632
						</p>
						<a href="<?= $map_yirigaoka; ?>" target="_blank" class="map_link">
							<i class="map_icon"><img src="<?= $img_path; ?>common/map_icon.webp" alt="" decoding="async"></i>
								Google Map
						</a>
					</li>
				</ul>
			</section><!-- /--office -->
		</div><!--/company-wrap -->
	</div>
	</main>
<?php include($root_path . '/assets/inc/footer.php'); ?>

</div><!-- /of_wrap -->
</body>
</html>
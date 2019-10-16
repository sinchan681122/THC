<?php

$_ENV['inquiry']=array(
	 1=> array(
	 	'name'  => 'クラブに関するお問い合わせ',
	 	'email' => 'as365dolphin@yahoo.co.jpp'
	 ),
	 2=> array(
	 	'name'  => '共同オーナーに関するお問い合わせ',
	 	'email' => 'as365dolphin@yahoo.co.jp'
	 ),
	 3=> array(
	 	'name'  => 'その他クラブに関するお問い合わせ',
	 	'email' => 'as365dolphin@yahoo.co.jp'
	 ),
	 
);

$_ENV['pref']=array(
	1=>'北海道',	2=>'青森県',	3=>'岩手県',	4=>'宮城県',	5=>'秋田県',
	6=>'山形県',	7=>'福島県',	8=>'茨城県',	9=>'栃木県',	10=>'群馬県',
	11=>'埼玉県',	12=>'千葉県',	13=>'東京都',	14=>'神奈川県',	15=>'新潟県',
	16=>'富山県',	17=>'石川県',	18=>'福井県',	19=>'山梨県',	20=>'長野県',
	21=>'岐阜県',	22=>'静岡県',	23=>'愛知県',	24=>'三重県',	25=>'滋賀県',
	26=>'京都府',	27=>'大阪府',	28=>'兵庫県',	29=>'奈良県',	30=>'和歌山県',
	31=>'鳥取県',	32=>'島根県',	33=>'岡山県',	34=>'広島県',	35=>'山口県',
	36=>'徳島県',	37=>'香川県',	38=>'愛媛県',	39=>'高知県',	40=>'福岡県',
	41=>'佐賀県',	42=>'長崎県',	43=>'熊本県',	44=>'大分県',	45=>'宮崎県',
	46=>'鹿児島県',	47=>'沖縄県',	48=>'海外',
);



if($_POST['mode']) $mode = $_POST['mode'];

if($mode == 'confirm') {
	//入力チェック
	if(!$_POST['inquiry'])
		$err['inquiry'] = '<br /><span style="color:#FF0000; font-size:10px;">※「お問い合わせ内容」を入力してください</span>';
	
	if(!$_POST['name'])
		$err['name'] = '<br /><span style="color:#FF0000; font-size:10px;">※「ご氏名（漢字）」を入力してください</span>';
	
	if(!$_POST['kana'])
		$err['kana'] = '<br /><span style="color:#FF0000; font-size:10px;">※「ご指名（フリガナ）」を入力してください</span>';
	
	if(!$_POST['email']) {
		$err['email'] = '<br /><span style="color:#FF0000; font-size:10px;">※「メールアドレス」を入力してください</span>';
	}
	else if(preg_match('/^[a-zA-Z0-9_¥.¥-]+?@[A-Za-z0-9_¥.¥-]+$/', $_POST['email']) != 1) {
		$err['email'] = '<br /><span style="color:#FF0000; font-size:10px;">※「メールアドレス」を正しく入力してください</span>';
	}
	
	if(!$_POST['tel'])
		$err['tel'] = '<br /><span style="color:#FF0000; font-size:10px;">※「電話番号」を入力してください</span>';

	if(!$_POST['zip'])
		$err['zip'] = '<br /><span style="color:#FF0000; font-size:10px;">※「郵便番号」を入力してください</span>';
	
	if(!$_POST['pref'])
		$err['pref'] = '<br /><span style="color:#FF0000; font-size:10px;">※「都道府県」を入力してください</span>';
	
	if(!$_POST['addr'])
		$err['addr'] = '<br /><span style="color:#FF0000; font-size:10px;">※「ご住所」を入力してください</span>';

	if(!$_POST['comment'])
		$err['comment'] = '<br /><span style="color:#FF0000; font-size:10px;">※「お問合せ内容」を選択してください</span>';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>東京ヘリコプタークラブ - 東京ヘリコプタークラブについて</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/lower.css">

<!--&#91;if lt IE 9&#93;>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<!&#91;endif&#93;-->

<!-- jQuery.jsの読み込み -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
<!--
function SubmitBack() {
	document.Form.mode.value = 'back';
	document.Form.submit();
}
//-->
</script>   
</head>
<body class="all__outer">
<div class="all">
  <div class="all__inner clearfix" id="top">
    <div class="header">
      <header>
        <h1 class="logo"><a href="../index.html"><img src="../img/logo.jpg" class="logo__img" alt="東京ヘリコプタークラブ"></a></h1>
        <div class="header__copy">東京から一番近いヘリコプタークラブ<br>
        ～大空の夢を諦めない人のためのクラブ～</div>
      </header>
    </div>
    <div class="gnav">
      <nav>
        <ul class="gnav--main">
          <li class="gnav__menu"><a href="./about.html" class="menu-001"><img alt="東京ヘリコプタークラブについて" src="../img/menu-001.gif" /></a></li>
          <li class="gnav__menu"><a href="./service.html" class="menu-002"><img alt="サービス概要" src="../img/menu-002.gif" /></a></li>
          <li class="gnav__menu"><a href="./price.html" class="menu-003"><img alt="料金について" src="../img/menu-003.gif" /></a></li>
          <li class="gnav__menu"><a href="./facility.html" class="menu-004"><img alt="施設概要" src="../img/menu-004.gif" /></a></li>
          <li class="gnav__menu gnav__menu--current"><a class="menu-005"><img alt="資料請求・お問い合わせ" src="../img/menu-005.gif" /></a></li>
        </ul>
        <ul class="gnav--sub">
          <li class="gnav__menu"><a href="voice.html" class="menu-101"><img alt="推薦者／体験者の声" src="../img/menu-101.jpg" /></a></li>
          <li class="gnav__menu"><a href="faq.html" class="menu-102"><img alt="Q&amp;A" src="../img/menu-102.jpg" /></a></li>
          <li class="gnav__menu"><a href="https://www.facebook.com/%E6%9D%B1%E4%BA%AC%E3%83%98%E3%83%AA%E3%82%B3%E3%83%97%E3%82%BF%E3%83%BC%E3%82%AF%E3%83%A9%E3%83%96-675546629251613/?ref=hl" class="menu-103" target="_blank"><img alt="BLOG" src="../img/menu-103.jpg" /></a></li>
          <li class="gnav__menu"><a href="http://weather.yahoo.co.jp/weather/jp/12/4510/12217/2770822.html" class="menu-104" target="_blank"><img alt="気象情報" src="../img/menu-104.jpg" /></a></li>
        </ul>
      </nav>
    </div>
    <div class="content">
      <div class="header--sub">
        <h1 class="entry__ttl">資料請求・お問い合わせ</h1>
        <div class="entry__ttl--en">Price</div>
      </div>
      <div class="breadcrumb clearfix">
        <nav>
          <ul>
            <li class="breadcrumb__list"><a href="../index.html">HOME</a></li>
            <li class="breadcrumb__list breadcrumb__list--current">資料請求・お問い合わせ</li>
          </ul>
        </nav>
      </div>
      <div class="content__inner">
        <div class="entry">
          <article>
            <h1 class="entry__ttl--sub"><span>資料請求・お問い合わせ</span></h1>
            
            
            
            <?php
	if(!$mode || $mode == 'back' || $err) {
?>
<form name="Form" action="" method="post">
<input type="hidden" name="mode" value="confirm" />

<table width=700 border=0 cellpadding=10 cellspacing=0>
<tr>
<td height="30">■お問い合わせ内容</td>
<td height="30">
<select name="inquiry">
<option value="">▼内容をお選びください</option>
<?php
$p='inquiry';
$a=array();
foreach($_ENV[$p] as $k=>$v){
	$c=($_POST[$p]==$k) ? ' selected="selected"' : NULL;
	echo '<option value="'.$k.'"'.$c.' />'.$v['name'].'</option>'."¥n";
}
unset($c,$k,$v);
?>
</select><?=$err['inquiry']?>
</td>
</tr>
<tr>
<td height="30">■氏名（漢字）</td>
<td height="30"><input type=text name="name" value="<?=$_POST['name']?>" size=40 /><?=$err['name']?></td>
</tr>
<tr>
<td height="30">■氏名（フリガナ）</td>
<td height="30"><input type=text name="kana" value="<?=$_POST['kana']?>" size=40 /><?=$err['kana']?></td>
</tr>
<tr>
<td height="30">■メールアドレス</td>
<td height="30"><input type=text name="email" value="<?=$_POST['email']?>" size=40 /><?=$err['email']?></td>
</tr>
<tr>
<td height="30">■メールアドレス（確認用）</td>
<td height="30"><input type=text name="email_chk" value="<?=$_POST['email_chk']?>" size=40 /><?=$err['email_chk']?></td>
</tr>
<tr>
<td height="30">■お電話番号</td>
<td height="30"><input type=text name="tel" value="<?=$_POST['tel']?>" size=10 /><?=$err['tel']?></td>
</tr>
<tr>
<td height="30">■郵便番号</td>
<td height="30"><input type=text name="zip" value="<?=$_POST['zip']?>" size=10 /><?=$err['zip']?></td>
</tr>
<tr>
<td height="30">■ご住所（都道府県）</td>
<td>
<select name="pref">
<option value="" selected="selected">▼お選び下さい</option>
<?php
$p='pref';
$a=array();
foreach($_ENV[$p] as $k=>$v){
	$c=($_POST[$p]==$k) ? ' selected="selected"' : NULL;
	echo '<option value="'.$k.'"'.$c.' />'.$v.'</option>'."¥n";
}
unset($c,$k,$v);
?>
</select><?=$err['pref']?>
</td>
</tr>
<tr>
<td height="30">■ご住所</td>
<td height="30"><input type=text name="addr" value="<?=$_POST['addr']?>" size=40 /><?=$err['addr']?></td>
</tr>
<tr>
<td height="30" valign="top">■ご質問内容</td>
<td>
<TEXTAREA NAME="comment" ROWS="7" COLS="65" WRAP=OFF ><?=$_POST['comment']?></TEXTAREA><?=$err['comment']?>
</td>
</tr>
<tr>
<td colspan=2>
<!-- ネスケとＩＥの動作の違いによるトラブル防止のため、WRAP=OFF を設定しましょう -->
<input type=submit value="　　送信　　"></td>
</tr>
</table>
</form>

<?php
	}
	else if($mode == 'confirm') {
?>
<p>下記の内容をご確認の上、送信してください。</p>

<form name="Form" action="" method="post">
<input type="hidden" name="mode" value="send">

<input type="hidden" name="inquiry" value="<?=$_POST['inquiry']?>" />
<input type="hidden" name="name" value="<?=$_POST['name']?>" />
<input type="hidden" name="kana" value="<?=$_POST['kana']?>" />
<input type="hidden" name="email" value="<?=$_POST['email']?>" />
<input type="hidden" name="tel" value="<?=$_POST['tel']?>" />
<input type="hidden" name="zip" value="<?=$_POST['zip']?>" />
<input type="hidden" name="pref" value="<?=$_POST['pref']?>" />
<input type="hidden" name="addr" value="<?=$_POST['addr']?>" />
<input type="hidden" name="comment" value="<?=$_POST['comment']?>" />

<table width=700 border=0 cellpadding=10 cellspacing=0>
<tr>
<td>■お問い合わせ内容</td>
<td><?=$_ENV['inquiry'][$_POST['inquiry']]['name']?></td>
</tr>
<tr>
<td>■氏名（漢字）</td>
<td><?=$_POST['name']?></td>
</tr>
<tr>
<td>■氏名（フリガナ）</td>
<td><?=$_POST['kana']?></td>
</tr>
<tr>
<td>■メールアドレス</td>
<td><?=$_POST['email']?></td>
</tr>
<tr>
<td>■お電話番号</td>
<td><?=$_POST['tel']?></td>
</tr>
<tr>
<td>■郵便番号</td>
<td><?=$_POST['zip']?></td>
</tr>
<tr>
<td>■ご住所（都道府県）</td>
<td><?=$_ENV['pref'][$_POST['pref']]?></td>
</tr>
<tr>
<td>■ご住所</td>
<td><?=$_POST['addr']?></td>
</tr>
<tr>
<td>■ご質問内容</td>
<td><?=$_POST['comment']?></td>
</tr>
<tr>
<td><input type="button" value="戻る" onclick="SubmitBack()" />&nbsp;&nbsp;&nbsp;<input type="submit" value="送信する" /></td>
</tr>
</table>
</form>

<?php
	}
	else if($mode == 'send') {
		//メール送信
		mb_language("Japanese");
		mb_internal_encoding("utf-8");


		//メール送信：ユーザ宛
		$mail_content_usr = <<<EOM
		
----------------------------------------------------------------

【東京ヘリコプタークラブ】
		
お問い合わせ誠にありがとうございます。
こちらは自動返信メールです。

--お申し込み内容------------------------------------------------

○お問い合わせ内容
{$_ENV['inquiry'][$_POST['inquiry']]['name']}

○氏名（漢字）
{$_POST['name']}

○氏名（フリガナ）
{$_POST['kana']}

○メールアドレス
{$_POST['email']}

○お電話番号
{$_POST['tel']}

○郵便番号
{$_POST['zip']}

○ご住所（都道府県）
{$_ENV['pref'][$_POST['pref']]}

○ご住所
{$_POST['addr']}

○ご質問内容
{$_POST['comment']}

----------------------------------------------------------------
東京ヘリコプタークラブ
EOM;

		$form_usr = <<<EOF
From:{$_ENV['inquiry'][$_POST['inquiry']]['email']}
EOF;

		mb_send_mail($_POST['email'], 'THCへのお問い合わせ誠にありがとうございます', $mail_content_usr, $form_usr);


		//メール送信：管理者宛
		$mail_content_mng = <<<EOM
お問い合わせがありました


○お問い合わせ内容
{$_ENV['inquiry'][$_POST['inquiry']]['name']}

○氏名（漢字）
{$_POST['name']}

○氏名（フリガナ）
{$_POST['kana']}

○メールアドレス
{$_POST['email']}

○お電話番号
{$_POST['tel']}

○郵便番号
{$_POST['zip']}

○ご住所（都道府県）
{$_ENV['pref'][$_POST['pref']]}

○ご住所
{$_POST['addr']}

○ご質問内容
{$_POST['comment']}

----------------------------------------------------------------
以上
EOM;

		$form_mng = <<<EOF
From:{$_POST['email']}
EOF;

		mb_send_mail($_ENV['inquiry'][$_POST['inquiry']]['email'], '[THC]お問い合わせがありました', $mail_content_mng, $form_mng);
?>
<p>お問い合わせ誠にありがとうございます。担当者よりご連絡さしあげます。</p>
<?php
	}
?>
            
            
            
            
          </article>
        </div>
      </div>
    </div>
    <div class="pagetop"><a href="#top"><img class="pagetop__btn" alt="" src="../img/pagetop.gif" /></a></div>
  </div>
  <div class="footer">
    <footer>
      <p class="footer__copy">Copyright &copy;Tokyo Helicopter Club. All Rights Reserved.</p>
      <p class="footer__txt">東京ヘリコプタークラブ / 株式会社布施ヘリポート<br>
        〒277-0822 千葉県柏市布施下121番地<br>
        TEL：04-7199-2035 FAX:04-7199-2036</p>
    </footer>
  </div>
</div>
<script>

// スムーススクロール
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
</script>
</body>
</html>
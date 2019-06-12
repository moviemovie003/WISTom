<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>WISTom</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/icon.png">
<script type="text/javascript" src="js/openclose.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
            });
        });
</script>

</head>

<body>

<header>
<div class="inner">
<h1 id="logo"><a href="index.html"><img src="images/toplogo.png" alt="Sample Company"></a><br>あなたの見たい映画がここにある</h1>
<h1 class="subtitle">～WIST on movie～</h1>
<div id="contact">
<div class="searchArea" id="makeImg">
  <input type="text" id="inText" class="searchText">
  <div class="searchButton">
    <img src="images/search.png" class="searchImg">
    <span>検索</span>
  </div>
</div>
<br>
<input type="button" onclick="location.href='member.html'"value="会員登録・ログイン" class="login">
</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul class="inner">
<li class="current"><a href="movie.php">作品紹介</a></li>
<li><a href="review.php">映画レビュー</a></li>
<li><a href="momed.php">おすすめ映画診断</a></li>
<li><a href="otoku.php">お得カレンダー</a></li>
<li><a href="act.php">俳優カレンダー</a></li>
<li><a href="theasea.php">劇場検索</a></li>
<li><a href="contact.html">キャンペーン</a></li>
</ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li class="current"><a href="index.html">作品紹介</a></li>
<li><a href="company.html">映画レビュー</a></li>
<li><a href="review.php">おすすめ映画診断</a></li>
<li><a href="recruit.html">お得カレンダー</a></li>
<li><a href="link.html">俳優カレンダー</a></li>
<li><a href="contact.html">劇場検索</a></li>
<li><a href="contact.html">キャンペーン</a></li>
</ul>
</nav>

<div class="mainall">
<!--プライムニュース-->
<aside id="prime">
 <ul class="sidemenu">
  <li class="day"><span id="view_todayE"></span></li>
   <li id="sidemenutitle"><u><b>TODAY's BIRTHDAY</b></u><br><img src="images/001.jpg" width="90" height="100" alt="" align="left"><p>Benedict Cumberbatch</p></li>
   <li id="sidemenutitle"><u><b>TODAY's THEATER</b></u><br><img src="images/002.jpg" width="90" height="100" alt="" align="left"><p>ハッピーナイト</p><div id="todayt"><p>夜8時以降なら誰でも1100円</p></div></li>
  </ul>
    <br>
    <a href="http://eigaz.net/prediction/2019.php"><img src="images/academi.jpg"width="230" height="40"></a>
            <br>
            <br>
    <a href="https://www.disney.co.jp/movie/sugarrush-ol.html">
        <img src="images/rush.jpg"width="230" height="40"></a>
</aside>

<!--メインイメージ-->
<div id="main">

<div class="contents">
<div class="inner">


<section id="new">
<h2 id="newinfo_hdr" class="close">採用情報</h2>
<img src="images/adopt.jpg" vspace="20">
<p><b>Let's work with us!</b></p>
<P>私たちは、映画情報サイト「WISTom」を通じて映画の良さや魅力を知ってもらうことを目的として活動しています。最終的には映画業界全体としての向上を目指しています。私たちと一緒に働いてみませんか</P>

 <table border="1">
    <tr>
<th>会社名</th>
<td>株式会社WIST</td>

</tr>
<tr>
<th>電話番号</th>
<td>040-9765-5233</td>

</tr>
<tr>
<th>事業内容</th>
<td>映画情報サイト「WISTom」の提供・運営</td>
</tr>
<tr>
<th>雇用形態</th>
<td>正社員<br>※5か月の試用期間があります。<br> その間の待遇・給与に変更はありません。</td>
</tr>
<tr>
<th>勤務地</th>
<td>東京本社<br>（東京都千代田区大手町1丁目7-1 旧読売新聞東京本社跡地）</td>
</tr>
<tr>
<th>応募資格</th>
<td>毎日本社に来れる方、遅刻せずに出社できる方<br>※映画を好まない方はご遠慮ください</td>
</tr>
<tr>
<th>語学力</th>
<td>日本語、英語は日常会話程度<br>その他日常会話程度の語学力がある場合は優遇</td>
</tr>
<tr>
<th>勤務時間</th>
    <td>正社員　：9時～15時<br>休憩時間：リーダーの指示（基本的にOK）</td>
</tr>
<tr>
<th>休日・休暇</th>
<td>完全週休2日制</td>
</tr>
<tr>
<th>給与</th>
<td>完全歩合制</td>
</tr>
<tr>
<th>待遇</th>
<td>ありません</td>

</tr>

</table>
<p>気軽にお電話ください。</p>    
</section>





</div>
<!--/inner-->
</div>
<!--/contents-->
</div>

  </div>

<p id="pagetop" class="inner"><a href="#">↑</a></p>

<footer>

    <div id="footermenu" class="inner">
      <ul>
        <li><a href="wist.php">会社概要</a></li>
      </ul>
      <ul>
        <li><a href="adopt.php">採用情報</a></li>
      </ul>
      
    </div>
    <!--/footermenu-->

    <div id="copyright">
      <small>Copyright&copy; <a href="index.html">株式会社WIST</a> All Rights Reserved.</small>
      <span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
    </div>

  </footer>

<!--スマホ用更新情報　800px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 800) {
	open_close("newinfo_hdr", "newinfo");
}
</script>

<!--メニューの３本バー-->
<div id="menubar_hdr" class="close"><span></span><span></span><span></span></div>
<!--メニューの開閉処理条件設定　800px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--日時-->
<script type="text/javascript">
document.getElementById("view_todayE").innerHTML = getTodayE();

function getTodayE() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth(); //１足さない
	var day = now.getDate();
	var you = now.getDay(); //曜日(0～6=日～土)

	//曜日の選択肢
	var youbi = new Array("Sun","Mon","Tue","Wed","Thurs","Fri","Sat");
	//月名の選択肢
	var month = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

	//出力用
	var s = month[mon] + "<br>" + day + " (" +youbi[you] + ")";
	return s;
}
</script>

</body>
</html>

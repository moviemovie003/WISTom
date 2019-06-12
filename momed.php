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
    <link rel="stylesheet" href="css/momed.css">
  <script type="text/javascript" src="js/openclose.js"></script>
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.slider').bxSlider({
        auto: true,
        pause: 5000,
      });
    });
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script>
    var yesCount = 0;
    var btn = 0;

    jQuery.noConflict();
    (function($) {
      $(function() {
        $(".btn").on("click", function() {
          $(this).closest("div").css("display", "none");
          id = $(this).attr("href");

          $(id).addClass("positionFit").show("fast");

          // yes btnだったら
          if ($(this).hasClass("yes")) {
            yesCount = yesCount + 1;
          }

          // lastbtnだったら
          if ($(this).hasClass("lastbtn")) {
            if (yesCount >= 5) {
              $("#a_01").show("fast");
            } else if (yesCount >= 4) {
              $("#a_02").show("fast");
            } else if (yesCount >= 3) {
              $("#a_03").show("fast");
            } else if (yesCount >= 2) {
              $("#a_04").show("fast");
            } else {
              $("#a_05").show("fast");
            }
            yesCount = 0;
          }

        });
      });
    })(jQuery)
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
        <input type="button" onclick="location.href='member.html'" value="会員登録・ログイン" class="login" style="pointer-events: none;" disabled>
      </div>
    </div>
  </header>

  <!--PC用（801px以上端末）メニュー-->
  <nav id="menubar">
    <ul class="inner">
      <li><a href="movie.php">作品紹介</a></li>
      <li><a href="review.php">映画レビュー</a></li>
      <li class="current"><a href="momed.php">おすすめ映画診断</a></li>
      <li><a href="otoku.php">お得カレンダー</a></li>
      <li><a href="act.php">俳優カレンダー</a></li>
      <li><a href="theasea.php">劇場検索</a></li>
      <li><a href="Error.html" style="pointer-events: none;">キャンペーン</a></li>
    </ul>
  </nav>
  <!--小さな端末用（800px以下端末）メニュー-->
  <nav id="menubar-s">
    <ul>
      <li><a href="Error.html">作品紹介</a></li>
      <li class="current"><a href="review.html">映画レビュー</a></li>
      <li><a href="momed.php">おすすめ映画診断</a></li>
      <li><a href="Error.html">お得カレンダー</a></li>
      <li><a href="Error.html">俳優カレンダー</a></li>
      <li><a href="Error.html">劇場検索</a></li>
      <li><a href="Error.html">キャンペーン</a></li>
    </ul>
  </nav>

  <div class="mainall">
    <!--プライムニュース-->
    <aside id="prime">
      <ul class="sidemenu">
        <li class="day"><span id="view_todayE"></span></li>
        <li id="sidemenutitle"><u><b>TODAY's BIRTHDAY</b></u><br><img src="images/001.jpg" width="90" height="100" alt="" align="left">
          <p>Benedict Cumberbatch</p>
        </li>
        <li id="sidemenutitle"><u><b>TODAY's THEATER</b></u><br><img src="images/002.jpg" width="90" height="100" alt="" align="left">
          <p>ハッピーナイト</p>
          <div id="todayt">
            <p>夜8時以降なら誰でも1100円</p>
          </div>
        </li>
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

          <aside class="slidersize">
            <h2 id="newinfo_hdr" class="close">おすすめ映画診断<span>Movie Medical</span></h2>
              <img src="images/the.jpg">
            
              <div class="yesno clearfix">
    <div id="q_01" class="positionFit" style="">
      <p>Q1.タイムスリップ出来るとしたらどっち？</p>
      <ul>
        <li class="even"><a class="btn yes" href="#q_02">未来</a></li>
        <li class="odd"><a class="btn" href="#q_02">過去</a></li>
      </ul>
    </div>

    <div id="q_02" style="display: none;" class="positionFit">
      <p>今週末の予定は？</p>
      <ul>
        <li class="even"><a class="btn yes" href="#q_03">お出かけ</a></li>
        <li class="odd"><a class="btn" href="#q_03">家でのんびり</a></li>
      </ul>
    </div>

    <div id="q_03" style="display: none;" class="positionFit">
      <p>生まれ変わるとしたら？</p>
      <ul>
        <li class="even"><a class="btn yes" href="#q_04">人間</a></li>
        <li class="odd"><a class="btn" href="#q_04">動物</a></li>
      </ul>
    </div>

    <div id="q_04" style="display: none;" class="positionFit">
      <p>旅行をするなら？</p>
      <ul>
        <li class="even"><a class="btn yes" href="#q_05">海外</a></li>
        <li class="odd"><a class="btn" href="#q_05">日本</a></li>
      </ul>
    </div>

    <div id="q_05" style="display: none;" class="positionFit">
      <p>夢や目標をいつまでも追いかけていたい？</p>
      <ul>
        <li class="even"><a class="btn lastbtn yes">Yes</a></li>
        <li class="odd"><a class="btn lastbtn">No</a></li>
      </ul>
    </div>




    <div id="a_01" style="display: none;" class="positionFit">
        <p align="center"><b>診断結果：アクション映画</b></p>
        
      <ul>

        <li class="even"><a class="btn" href="#q_01">最初に戻る</a></li>
      </ul>
    </div>

    <div id="a_02" style="display: none;" class="positionFit">
        <p align="center"><b>診断結果：アニメ映画</b></p>
      <ul>
        <li class="even"><a class="btn" href="#q_01">最初に戻る</a></li>
      </ul>
    </div>

    <div id="a_03" style="display: none;" class="positionFit">
        <p align="center"><b>診断結果：ミュージカル映画</b></p>
      <ul>
        <li class="even"><a class="btn" href="#q_01">最初に戻る</a></li>
      </ul>
    </div>

    <div id="a_04" style="display: none;" class="positionFit">
        <p align="center"><b>診断結果：ファンタジー映画</b></p>
      <ul>
        <li class="even"><a class="btn" href="#q_01">最初に戻る</a></li>
      </ul>
    </div>

    <div id="a_05" style="display: none;" class="positionFit">
        <p align="center"><b>診断結果：冒険映画</b></p>
      <ul>
        <li class="even"><a class="btn" href="#q_01">最初に戻る</a></li>
      </ul>
    </div>
  </div>
              
              
              
          </aside>
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
      <small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
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
      var youbi = new Array("Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat");
      //月名の選択肢
      var month = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

      //出力用
      var s = month[mon] + "<br>" + day + " (" + youbi[you] + ")";
      return s;
    }
  </script>

</body>
</html>

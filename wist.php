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
        $(document).ready(function() {
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
                <input type="button" onclick="location.href='member.html'" value="会員登録・ログイン" class="login">
            </div>
        </div>
    </header>

    <!--PC用（801px以上端末）メニュー-->
    <nav id="menubar">
        <ul class="inner">
            <li><a href="movie.php">作品紹介</a></li>
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
            <li><a href="movie.php">作品紹介</a></li>
            <li><a href="company.html">映画レビュー</a></li>
            <li><a href="service.html">おすすめ映画診断</a></li>
            <li><a href="otoku.php">お得カレンダー</a></li>
            <li><a href="actor.php">俳優カレンダー</a></li>
            <li><a href="theasea.php">劇場検索</a></li>
            <li><a href="contact.html">キャンペーン</a></li>
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


                    <section id="new">
                        <h2 id="newinfo_hdr" class="close">会社情報</h2>

                        <table border="1">
                            <tr>
                                <th>社名</th>
                                <td>株式会社WIST</td>

                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>東京都千代田区大手町7-1　<br>（旧読売新聞東京本社跡地）</td>

                            </tr>
                            <tr>
                                <th>代表者</th>
                                <td>鳰川・チャンマン・裕也</td>
                            </tr>
                            <tr>
                                <th>設立</th>
                                <td>2003年10月23日</td>
                            </tr>
                            <tr>
                                <th>資本金</th>
                                <td>1億円</td>
                            </tr>
                            <tr>
                                <th>従業員数</th>
                                <td>220人（パート、アルバイト含む）</td>
                            </tr>
                            <tr>
                                <th>事業内容</th>
                                <td>映画情報の提供<br>映画情報サイトの運営</td>
                            </tr>
                            <tr>
                                <th>主要クライアント</th>
                                <td>株式会社アニプレックス<br>イオンエンターテイメント株式会社<br>ウォルト・ディズニー・ジャパン株式会社<br>株式会社NTTドコモ<br>株式会社エイガ・ドット・コム<br>株式会社キノフィルムズ<br>ギャガ株式会社<br>KDDI株式会社<br>松竹株式会社<br>株式会社松竹マルチプレックスシアターズ<br>株式会社ソニー・ピクチャーズエンターテイメント<br>株式会社電通<br>東映株式会社<br>株式会社東急レクリエーション<br>東宝株式会社<br>TOHOシネマズ株式会社<br>東宝東和株式会社<br>20世紀フォックス株式会社<br>株式会社ムービーウォーカー<br>公益財団法人ユニジャパン<br>ワーナーブラザーズジャパン合同会社</td>
                            </tr>

                        </table>
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
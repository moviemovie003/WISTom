<?php
    $link = null;
    $result = null;
    try{
        $link = mysqli_connect("localhost","jikkyo","pass","wistom");
        if($link == null){
            die("接続に失敗：".mysqli_connect_error());
        }
        mysqli_set_charset($link,"utf8");

?>


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
    <link rel="stylesheet" href="css/data.css">
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
                <input type="button" onclick="location.href='member.html'" value="会員登録・ログイン" class="login" style="pointer-events: none;" disabled>
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
            <li class="current"><a href="act.php">俳優カレンダー</a></li>
            <li><a href="theasea.php">劇場検索</a></li>
            <li><a href="contact.html">キャンペーン</a></li>
        </ul>
    </nav>
    <!--小さな端末用（800px以下端末）メニュー-->
    <nav id="menubar-s">
        <ul>
            <li class="current"><a href="movie.php">作品紹介</a></li>
            <li><a href="company.html">映画レビュー</a></li>
            <li><a href="service.html">おすすめ映画診断</a></li>
            <li><a href="recruit.html">お得カレンダー</a></li>
            <li><a href="link.html">俳優カレンダー</a></li>
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
                        <h2 id="newinfo_hdr" class="close">俳優詳細</h2>

                        <?php
                            $actorId = "1";
        $result = mysqli_query($link , "SELECT * FROM actors WHERE 俳優ID=" . $actorId);  
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        //正規のやり方ではない
        //1件だけをとる
        
        ?>
                        <p><big><?php echo "{$row['俳優名']}" ;?></big></p>

                        <table border="0" align="left">
                            <tr>
                                <td><img src="images/03aflo_AINA497579.jpg" width="190" height="60" vspace="30" hspace="45"></td>
                            </tr>
                        </table>
                        <br><br>
                        <table border="3" width="320" height="180">
                            <tr>
                                <th>誕生日</th>
                                <td><?php echo "{$row['誕生日']}" ;?></td>
                            </tr>
                            <tr>
                                <th>年齢</th>
                                <td>22歳</td>
                            </tr>

                            <tr>
                                <th>出身</th>
                                <td><?php echo "{$row['出身地']}" ;?></td>
                            </tr>
                            <tr>
                                <th>性別</th>
                                <td>女性</td>
                            </tr>
                        </table>
                        <br> <br> <br> <br>
                        <p><u><b>プロフィール</b></u></p>
                        <P><?php                 
                            echo "{$row['俳優詳細']}" ;?></P>
                        <br>
                        <p><U><b>主な出演作</b></U></p>
                        <table border="0">
                        <tr>
                        <td>
                        <img src="images/039.JPG"width="160" height="60"vspace="30" hspace="35">
                            </td><td><img src="images/pitch.jpg"width="149" height="60"vspace="30" hspace="35"></td><td><img src="images/true.jpg"width="160" height="90"vspace="30" hspace="35"></td>
                            </tr>
                            <tr>
                            <td align="center"><p>バンブルビー</p></td>
                            <td align="center"><p>ピッチ・パーフェクト2</p></td>
                            <td align="center"><p>トゥルー・グリット</p></td></tr>
                            <tr>
                            <td align="center" ><p>(2019)</p></td>
                            <td align="center"><p>(2015)</p></td>
                            <td align="center"><p>(2010)</p></td></tr>
                        </table>
                        <br>
                        <P align="right"><u>他の出演作を見る</u></P>
<?php
    }       
?>


                    </section>
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
    </div>
    <?php
        
    }catch(Exception $e){
        
    }finally{
       if($result != null){
        mysqli_free_result($result);
       }
        if($link != null){
        mysqli_close($link);
            
    }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <title>架空　dryflower shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ドライフラワー専門店の架空webサイトです。">
 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Josefin+Sans&family=Noto+Sans+JP&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
   
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/style.css">
  </head>

  <body>
    <div class="header">
      <header>
      
        <!--PC用ナビゲーション-->
        <nav id="nav">
          <a href="#" id="eternite" style="vertical-align:middle;">eternite</a>
          <div id="nav-a">
            <a href="#about"id="nav-about">about</a>
            <a href="#service" id="nav-item">item</a>
            <a href="#workshop" id="nav-workshop">work shop</a>
            <a href="contact.html" id="nav-contact">contact</a><!--style="vertical-align: -webkit-baseline-middle;"-->
          </div>
        </nav>
        <img id="menu-sp" src="images/menu.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">

        <nav id="nav-sp">
         <img id="close" src="images/menu-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
         <a id="a-about" class="menu" href="#about" onclick="document.getElementById('nav-sp').style.display = 'none'">about</a>
         <a class="menu" href="item.html" onclick="document.getElementById('nav-sp').style.display = 'none'">item</a>
         <a class="menu" href="work.html" onclick="document.getElementById('nav-sp').style.display = 'none'">work shop
           </a>
         <a id="a-contact" class="menu" href="contact.html"
           onclick="document.getElementById('nav-sp').style.display = 'none'">contact</a>
         <div id="sns" class="sns">
           <a href=""><img id="insta" src="images/Instagram_Glyph_Black.png" alt="instaのリンク"></a>
           <a href=""><img id="twitter" src="images/2021 Twitter logo - black.png" alt="twitterのリンク"></a>
         </div>
         <a id="logo-sp" href="#" onclick="document.getElementById('nav-sp').style.display = 'none'"><img id="logo-img" src="images/eternite brown.png"></a>
       </nav>
      </header>
    </div>
    
    <main>
      <article>
        <div class="carousel">
          <img class="main-img" src="images/carousel.1.png" alt="ドライフラワーの花束">
          <img class="main-img" src="images/carousel.2.png" alt="ブルーのリース">
          <img class="main-img" src="images/carousel 3.png" alt="ドライフラワーの集まり">
          <img class="main-img" src="images/carousel 4.png" alt="4種の植物">
        </div>
        <h1 id="about" class="theme-1">about</h1>
        <div id="subtitle1" class="sub-title">
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 class="title-h2">eterniteとは</h2>
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="About" class="scroll-up">
            <img id="about-img1" src="images/four photo.png" alt="ドライフラワー(暖色)">
            <div id="about-text">
              <h2 id="about-h2">あなたの暮らしに優しい彩りを</h2>
              <p>ドライフラワーや、<br>ドライフラワーを使ったオリジナルの小物の販売、<br>
                そしてお客様に実際に小物づくりを体験していただけるワークショップを
                不定期に実施しています。<br>
                お客様一人ひとりに寄り添って、<br>お好みのお花を見つけるお手伝いを致します。<br>
              </p>
            </div>
          <!--<img id="about-img2" src="images/square.png" alt="2つの四角">-->
        </section>

        <h1 id="service" class="theme-1">service</h1>
        <div class="sub-title scroll-up">
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 class="title-h2">商品販売</h2>
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="item-shop">
         <p class="scroll-up">おすすめのお花を厳選し、当店オリジナルで制作した作品を販売しています。<br>
            店舗と通販どちらでもお買い求めいただけます。<br>
            店舗の場合、時期によっては商品一覧に掲載されている商品でも在庫がない場合もございますので、<br>
            ご不安な方はお問い合わせページよりご連絡いただけますと幸いです。
         </p>
         <div id="item-block">
            <div id="item1" class="scroll-up timing03">
              <img src="images/marincolor wreath.jpg" alt="マリンカラーのリース">
              <p class="itemtext-1">dryflower wreath（リース）</p>
              <p class="itemtext-2">¥4,000～</p>
            </div>

            <div id="item2" class="scroll-up timing04">
              <img src="images/orange bouquet.jpg" alt="オレンジのブーケ">
              <p class="itemtext-1">dryflower bouquet（ブーケ）</p>
              <p class="itemtext-2">¥4,500～</p>
            </div>

            <div id="item3" class="scroll-up timing05">
              <img src="images/4 herbarium.jpg" alt="4つのハーバリウム">
              <p class="itemtext-1">dryflower herbarium（ハーバリウム）</p>
              <p class="itemtext-2">¥3,500～</p>
            </div>
         </div>
         <div>
            <a href="item.html"><img id="button-more1" class="button" src="images/more botton.png" alt="moreのボタン"></a>
         </div>
        </section>
        <div id="work-h2" class="sub-title scroll-up">
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 id="workshop" class="title-h2">ワークショップ</h2>
          <img src="images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="work-shop">
          <p class="scroll-up">
            完全予約制で、自分好みのドライフラワーを使った小物づくりを
            体験していただけるワークショップを行っています。<br>
            ご予約はお問い合わせからお願い致します。
          </p>
          <div class="small-title scroll-left">
            <span>Gallery-作品例-</span>
            <img src="images/square2.png" alt="小さめの2つの四角" style="margin-bottom: -20px;">
            <img class="dot-line" src="images/dot.png" alt="ドット" style="width: 67%; margin-left: 20px;">
          </div>
          <ul class="slider">
            <li><img class="slider-img" src="images/example-1.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-2.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-3.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-4.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-1.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-2.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-3.jpg" alt=""></li>
            <li><img class="slider-img" src="images/example-4.jpg" alt=""></li>
          </ul>
          <div class="scroll-right">
            <img class="dot-line" src="images/dot.png" alt="ドット" style="width: 74%;">
            <a href="work.html"><img class="button" src="images/more botton.png" alt="moreのボタン"></a>
          </div>
          <div id="date" class="small-title scroll-left">
            <span>Date-日程-</span>
            <img src="images/square2.png" alt="小さめの2つの四角" style="margin-bottom: -20px;">
          </div>
          <div id="calendar-text">
            <div style="text-align: center;"  class="scroll-up">
              <img id="calendar" src="images/calendar.png" alt="カレンダー">
            </div>
            <div id="text-button">
              <div id="date-text">
                <p id="date-text1">ワークショップ実施日</p>
                <span><nobr>ブーケやリース、ハーバリウムからお好きなものをお作り頂けます。</nobr>（料金は一律5000円）</span>
                <p>10:00～12:00、14:00～16:00、17:00～19:00　　※完全予約制</p>
              </div>
              <div>
                <a href="contact.html"><img id="res-button" class="button" src="images/reserved botton.png" alt="予約ボタン"></a>
              </div>
            </div>
          </div>
        </section>
      </article>
      <footer>
        <div id="footer-logo">
          <img src="images/eternite brown.png" alt="eternite ブラウン">
        </div>
        <div id="footer-block">
          <!--<div>
            <img class="dot" src="images/点線.png" alt="点線" style="height: 160px;">
          </div>-->
            <div id="footer-link">
              <a href="index.html#about" class="footer-a" id="footer-about">about</a>
              <a href="index.html#service" class="footer-a" id="footer-item">item</a>
              <a href="index.html#workshop" class="footer-a" id="footer-workshop">work shop</a>
              <a href="index.html#contact" class="footer-a" id="footer-contact">contact</a>
            </div>
            
            <div id="footer-text">
              <p style="margin-top: -5px;">定休日　   毎週月曜日</p>
              <p style="margin-top: -5px;">営業時間　9:00～20:00</p>
              <p style="margin-top: -5px;">TEL　         123-4567-8910</p>
              <p style="margin-top: -5px;">住所　        東京都渋谷区○○3丁目1-2-23</p>
            </div>

            <div id="footer-sns">
              <div>
                <p id="sns">\SNSはこちら/</p>
              </div>
              <div id="sns-icon">
                <a href=""><img id="Insta" src="images/Instagram_Glyph_Black.png" alt="instagramのリンク" style="width: 50px; height: 50px; margin-right: 20px;"></a>
                <a href=""><img id="Twitter" src="images/2021 Twitter logo - black.png" alt="Twitterのリンク" style="width: 60px; height: 50px;"></a>
              </div>
            </div>
          <!--<div>
            <img class="dot" src="images/点線.png" alt="点線" style="height: 160px;">
          </div>-->
        </div>
        <span id="copyright">&copy; dryflower shop</span>
      </footer>
    </main>
    <a id="back-btn" class="fade" href="#">TOP</a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--自作のJS-->
   
  </body>
</html>
  
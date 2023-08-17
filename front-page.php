<?php get_header(); ?>
    <main>
      <article>
        <div class="carousel">
          <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/carousel.1.png" alt="ドライフラワーの花束">
          <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/carousel.2.png" alt="ブルーのリース">
          <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/carousel 3.png" alt="ドライフラワーの集まり">
          <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/carousel 4.png" alt="4種の植物">
        </div>
        <h1 id="about" class="theme-1">about</h1>
        <div id="subtitle1" class="sub-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 class="title-h2">eterniteとは</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="About" class="scroll-up">
            <img id="about-img1" src="<?php echo get_template_directory_uri(); ?>/images/four photo.png" alt="ドライフラワー(暖色)">
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
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 class="title-h2">商品販売</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="item-shop">
         <p class="scroll-up">おすすめのお花を厳選し、当店オリジナルで制作した作品を販売しています。<br>
            店舗と通販どちらでもお買い求めいただけます。<br>
            店舗の場合、時期によっては商品一覧に掲載されている商品でも在庫がない場合もございますので、<br>
            ご不安な方はお問い合わせページよりご連絡いただけますと幸いです。
         </p>
         <div id="item-block">
            <div id="item1" class="scroll-up timing03">
              <img src="<?php echo get_template_directory_uri(); ?>/images/marincolor wreath.jpg" alt="マリンカラーのリース">
              <p class="itemtext-1">dryflower wreath（リース）</p>
              <p class="itemtext-2">¥4,000～</p>
            </div>

            <div id="item2" class="scroll-up timing04">
              <img src="<?php echo get_template_directory_uri(); ?>/images/orange bouquet.jpg" alt="オレンジのブーケ">
              <p class="itemtext-1">dryflower bouquet（ブーケ）</p>
              <p class="itemtext-2">¥4,500～</p>
            </div>

            <div id="item3" class="scroll-up timing05">
              <img src="<?php echo get_template_directory_uri(); ?>/images/4 herbarium.jpg" alt="4つのハーバリウム">
              <p class="itemtext-1">dryflower herbarium（ハーバリウム）</p>
              <p class="itemtext-2">¥3,500～</p>
            </div>
         </div>
         <div>
            <a href="<?php echo home_url(); ?>/item"><img id="button-more1" class="button" src="<?php echo get_template_directory_uri(); ?>/images/more botton.png" alt="moreのボタン"></a>
         </div>
        </section>
        <div id="work-h2" class="sub-title scroll-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-right: 20px;">
          <h2 id="workshop" class="title-h2">ワークショップ</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 70px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section id="work-shop">
          <p class="scroll-up">
            完全予約制で、自分好みのドライフラワーを使った小物づくりを
            体験していただけるワークショップを行っています。<br>
            ご予約はお問い合わせからお願い致します。
          </p>
          <div class="small-title scroll-left">
            <span>Gallery-作品例-</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/square2.png" alt="小さめの2つの四角" style="margin-bottom: -20px;">
            <img class="dot-line" src="<?php echo get_template_directory_uri(); ?>/images/dot.png" alt="ドット" style="width: 67%; margin-left: 20px;">
          </div>
          <ul class="slider">
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-1.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-2.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-3.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-4.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-1.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-2.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-3.jpg" alt=""></li>
            <li><img class="slider-img" src="<?php echo get_template_directory_uri(); ?>/images/example-4.jpg" alt=""></li>
          </ul>
          <div class="scroll-right">
            <img class="dot-line" src="<?php echo get_template_directory_uri(); ?>/images/dot.png" alt="ドット" style="width: 74%;">
            <a href="<?php echo home_url(); ?>/workshop"><img class="button" src="<?php echo get_template_directory_uri(); ?>/images/more botton.png" alt="moreのボタン"></a>
          </div>
          <div id="date" class="small-title scroll-left">
            <span>Date-日程-</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/square2.png" alt="小さめの2つの四角" style="margin-bottom: -20px;">
          </div>
          <div id="calendar-text">
            <div style="text-align: center;"  class="scroll-up">
              <img id="calendar" src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" alt="カレンダー">
            </div>
            <div id="text-button">
              <div id="date-text">
                <p id="date-text1">ワークショップ実施日</p>
                <span><nobr>ブーケやリース、ハーバリウムからお好きなものをお作り頂けます。</nobr>（料金は一律5000円）</span>
                <p>10:00～12:00、14:00～16:00、17:00～19:00　　※完全予約制</p>
              </div>
              <div>
                <a href="<?php echo home_url(); ?>/contact"><img id="res-button" class="button" src="<?php echo get_template_directory_uri(); ?>/images/reserved botton.png" alt="予約ボタン"></a>
              </div>
            </div>
          </div>
        </section>
        <?php get_footer(); ?>
      </article>
  </body>
  
</html>
  
  
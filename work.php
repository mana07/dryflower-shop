<!--
Template Name: ワークショップ
-->
<?php get_header(); ?>
    <main>
      <article>
        <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/workshop main.png" alt="ワークショップメニューの作業風景画像">
        <div class="sub-title scroll-up">
          <h2 id="item-h2" class="title-h2">ワークショップ</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <section>
          <div id="workshop-about" class="scroll-up">
            <h2>ワークショップとは？</h2>
            <!--<img src="images/workshop about.png" alt="ワークショップとは">-->
            <p>お好きなお花を使って世界に一つだけの作品をお作り頂けます。<br>
              「センスに自信がない」「時間内に完成させられるか不安」という方でもご安心ください。<br>
              スタッフがお手伝いいたします♪</p>
          </div>
          <div id="workshop-block">
            <div id="workshop-img2">
              <img class="scroll-left" src="<?php echo get_template_directory_uri(); ?>/images/workshop-img.png" alt="作業中の写真" style="width: 70%;">
            </div>
            <div  id="title-text" class="scroll-right">
              <div id="workshop-h3">
                <h3>概要</h3>
              </div>
              <div id="workshop-text">
                <p>料金：一律5000円</p>
                <p>参加方法：完全予約制</p>
                <p>日程：不定期開催</p>
                <p>時間：1時間半</p>
              </div>
            </div>
            <!--<div>
              <img src="images/三角.png" alt="2つの三角">
            </div>-->
          </div>
        </section>
        <section>
          <div class="small-title scroll-up">
            <span>つくれるもの</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/square2.png" alt="小さめの2つの四角" style="margin-bottom: -20px;">
          </div>
          <div id="example-block">
            <div id="wreath" class="example-set scroll-up timing03">
              <h2>リース</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/example-wreath.png" alt="リース（作品例）">
            </div>
            <div id="bouquet" class="example-set scroll-up timing04">
              <h2>ブーケ</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/example-bouquet.png" alt="ブーケ（作品例）">
            </div>
            <div id="herbarium" class="example-set scroll-up timing05">
              <h2>ハーバリウム</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/example-herbarium.png" alt="ハーバリウム（作品例）">
            </div>
          </div>
          <p id="example-p">※写真は一例です<br>
            お客様にはリース、ブーケ、ハーバリウムの中からおひとつお選びいただき、<br>
            使うお花やアレンジに関しましてはご自由にカスタマイズしていただけます。
          </p>
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
      </article>
      
    </main>
    
    <?php get_footer(); ?>
    <a id="back-btn" class="fade" href="#">TOP</a>
  </body>
</html>
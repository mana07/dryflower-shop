<?php get_header(); ?>
    <main>
      <article>
        <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/メインビュー.png" alt="商品販売メニューのドライフラワー画像">
        <div class="sub-title scroll-up">
          <h2 id="item-h2" class="title-h2">商品一覧</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        <?php
            $args=array(

          'post_type'      =>'shopitem',

          'posts_per_page'  => 12,
           
            );
            $post=get_posts($args);
        ?>
          <section>
          <div id="line-1" class="line">
          <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post() ?>
            <div class="fade">
              <div id="item-img">
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
              <div id="itemtext-1">
                <?php the_title(); ?>
              </div>
              <div class="itemtext-2">
                <?php the_content()?>
              </div>
            </div>
           
            <?php endwhile; ?>
             <?php endif; ?>
          </div>
            
          <p id="item-p">店舗に在庫がない場合もございます。<br>
            在庫の確認をご希望の方はページ下部の電話番号よりご連絡ください。</p>
        </section>
      </article>
     
    </main>
    <a id="back-btn" class="fade" href="#">TOP</a>
    <?php get_footer(); ?>
  </body>
</html>

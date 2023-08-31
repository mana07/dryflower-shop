<!--
Template Name: アイテム
-->
<?php get_header(); ?>
    <main>
      <article>
        <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/メインビュー.png" alt="商品販売メニューのドライフラワー画像">
        <div class="sub-title scroll-up">
          <h2 id="item-h2" class="title-h2">商品一覧</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
        
          <section>
          <div id="item-array">
              <?php
                $args=array(

              'post_type'      =>'post',

              'category_name'  =>'shopitem',

              'posts_per_page'  => 8,
               
                );
                $posts=get_posts($args);
            ?>
            <?php foreach($posts as $post): ?>
              <?php setup_postdata($post);?>
              <a class="fade item-wrapper item" href="<?php echo get_permalink(); ?>">
                <div class="scroll-up">
                    <?php the_post_thumbnail( 'medium', ['class' => 'item1block-img'] ); ?>
                    <p class="itemtext-1"><?php the_title(); ?></p>
                    <p class="itemtext-2"><?php echo post_custom('price'); ?></p>
                </div>
              </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <p id="item-p">店舗に在庫がない場合もございます。<br>
            在庫の確認をご希望の方はページ下部の電話番号よりご連絡ください。</p>
        </section>
      </article>
     
    </main>
    
    <?php get_footer(); ?>
    <a id="back-btn" class="fade" href="#">TOP</a>
  </body>
</html>

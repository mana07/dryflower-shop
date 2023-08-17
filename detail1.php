<?php
/*Template Name: 商品詳細１(リース緑)
Template Post Type: post
*/
?>
<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
    <main>
      <article>
       <div id="detail-1block">
          <div>
            <?php the_post_thumbnail( 'large', ['class' => 'detail1block-img'] ); ?>
          </div>
         <div id="detail-text">
            <h2><?php the_title(); ?></h2>
            <div>
              <p id="postage">送料無料</p>
              <h3 id="price"><?php echo post_custom('price')?></h3>
            </div>
            <p id="item-explanation">
              <?php the_content()?>
            </p>
             <div id="p-button">
                <p>数量</p>
                <div class="count-button">
                  <span class="minus-button disabled">-</span>
                  <input class="count" type="number" min="0" max="5" value="0">
                  <span class="add-button">+</span>
                </div>
                <div id="div-cart">
                  <a id="cart" href="">かごに入れる</a>
                </div>
             </div>
            <p id="notice">※受注生産のため発送までにお時間を頂きます。ご了承の上ご購入ください。</p>
            <a href="<?php echo home_url(); ?>/item" style="text-decoration: none;"><p id="detail-return">一覧に戻る</p></a>
          </div>
       </div>
      </article>
    </main>
    <?php endwhile; ?>
    <?php endif; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php get_footer(); ?>
    <a id="back-btn" class="fade" href="#">TOP</a>
  </body>
</html>
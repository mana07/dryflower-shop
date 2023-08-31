<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		// do_action( 'woocommerce_before_main_content' );
	?>

<?php if (woocommerce_product_loop()) : ?>
  <?php while(have_posts()):the_post(); ?>
    
     <?php
       $price = get_post_meta(get_the_ID(), '_price', true);

       $thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
     ?>
    <main>
      <article>
       <div id="detail-1block">
          <div class="img">
            <img class="detail1block-img" src="<?php print $thumbnail; ?>" alt="" sizes="(max-width: 539px) 100vw, 539px">
          </div>
         <div id="detail-text">
            <h2><?php the_title(); ?></h2>
            <div>
              <p id="postage">送料無料</p>
              <h3 id="price"><?php echo $price; ?></h3>
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
                
								<form class="cart" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post" enctype="multipart/form-data">
                  <div class="quantity">
                    <label class="screen-reader-text" for="quantity_6192f42ac3082">Beanie 個</label>
                    <input type="number" id="quantity_6192f42ac3082" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="数" size="4" placeholder="" inputmode="numeric">
                  </div>	
                  <button type="submit" name="add-to-cart" value="537" class="single_add_to_cart_button button alt">かごに入れる</button>
                </form>
             </div>
            <p id="notice">※受注生産のため発送までにお時間を頂きます。ご了承の上ご購入ください。</p>
            <a href="<?php echo home_url(); ?>/product-category/product" style="text-decoration: none;"><p id="detail-return">一覧に戻る</p></a>
          </div>
       </div>
      </article>
    </main>
    <?php endwhile;  // end of the loop. ?>
    <?php endif; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

		

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

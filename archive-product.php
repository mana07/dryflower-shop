<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>
<?php get_header(); ?>
    <main>
      <article>
        <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/メインビュー.png" alt="商品販売メニューのドライフラワー画像">
        <div class="sub-title scroll-up">
          <h2 id="item-h2" class="title-h2">商品一覧</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/line.png" alt="線" style="width: 100px; padding-top: 38px; padding-bottom: 42px; margin-left: 20px;">
        </div>
				<ul id="item-array" class="c-product-list">
				  <?php 
					 // 商品が投稿されているか判断
					 if (woocommerce_product_loop()) :
					 // ループ開始
					 while (have_posts()) : the_post();
					 // サムネイル取得
					 $thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
					 // 価格取得
					 $price = get_post_meta(get_the_ID(), '_price', true);
				  ?>
				  <li class="scroll-up point item">
				    <a class="fade item-wrapper" href="<?php the_permalink(); ?>">
				      <div class="img"><img src="<?php print $thumbnail; ?>" alt="" sizes="(max-width: 300px) 100vw, 300px"></div>
				      <p class="name itemtext-1"><?php the_title(); ?></p>
				      <p class="price itemtext-2"><?php echo $price; ?> </p>
				    </a>
				  </li>
				  <?php
				  // ループ終了
				  endwhile;
				  endif;
				  ?>
				</ul>
				<p id="item-p">店舗に在庫がない場合もございます。<br>
            在庫の確認をご希望の方はページ下部の電話番号よりご連絡ください。</p>
       
      </article>

<header class="woocommerce-products-header">
	<!-- <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?> -->
		<!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
	<!-- <?php endif; ?> -->
	
	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	// do_action( 'woocommerce_archive_description' );
	?>
</header>

<?php



	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	// do_action( 'woocommerce_after_shop_loop' );

	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	// do_action( 'woocommerce_no_products_found' );


/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );

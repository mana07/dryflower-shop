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
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="header">
      <header>
      
        <!--PC用ナビゲーション-->
        <nav id="nav">
          <a href="<?php echo home_url(); ?>/" id="eternite" style="vertical-align:middle;">eternite</a>
          <div id="nav-a">
            <a href="<?php echo home_url(); ?>/" id="nav-about">about</a>
            <a href="<?php echo home_url(); ?>/product-category/product" id="nav-item">item</a>
            <a href="<?php echo home_url(); ?>/workshop" id="nav-workshop">work shop</a>
            <a href="<?php echo home_url(); ?>/contact" id="nav-contact">contact</a><!--style="vertical-align: -webkit-baseline-middle;"-->
          </div>
        </nav>
        <img id="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="ナビゲーションを開く">

        <nav id="nav-sp">
         <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/menu-close.png" alt="ナビゲーションを閉じる">
         <a id="a-about" class="menu" href="<?php echo home_url(); ?>/" >about</a>
         <a class="menu" href="<?php echo home_url(); ?>/product-category/product">item</a>
         <a class="menu" href="<?php echo home_url(); ?>/workshop">work shop
           </a>
         <a id="a-contact" class="menu" href="<?php echo home_url(); ?>/contact"
          >contact</a>
         <div id="sns" class="sns">
           <a href=""><img id="insta" src="<?php echo get_template_directory_uri(); ?>/images/Instagram_Glyph_Black.png" alt="instaのリンク"></a>
           <a href=""><img id="twitter" src="<?php echo get_template_directory_uri(); ?>/images/2021 Twitter logo - black.png" alt="twitterのリンク"></a>
         </div>
         <a id="logo-sp" href="#"><img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/eternite brown.png"></a>
       </nav>
      </header>
    </div>
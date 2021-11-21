<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="wclassth=device-wclassth,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <!-- noindex -->
  <meta name="“robots”" content="“noindex”" />
  <meta name="description" content="codeups" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.png" />
  <!-- フォント -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <figure class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.png" alt="トップロゴ" /></a>
      </figure>
      <!-- /.header__logo -->
      <nav class="header__nav gnav">
        <ul class="gnav__block">
          <li class="gnav__item"><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
          <!-- /.gnav__item -->
          <li class="gnav__item"><a href="<?php echo esc_url(home_url('content')); ?>">事業内容</a></li>
          <!-- /.gnav__item -->
          <li class="gnav__item"><a href="<?php echo get_post_type_archive_link('works'); ?>">制作実績</a></li>
          <!-- /.gnav__item -->
          <li class="gnav__item"><a href="<?php echo esc_url(home_url('overview')); ?>">企業概要</a></li>
          <!-- /.gnav__item -->
          <li class="gnav__item"><a href="<?php echo get_post_type_archive_link('blog-page'); ?>">ブログ</a></li>
          <!-- /.gnav__item -->
          <a class="gnav__box" href="<?php echo esc_url(home_url('contact')); ?>">
            <li class="gnav__item">お問い合わせ</li>
          </a>
          <!-- /.gnav__item -->
        </ul>
        <!-- /.gnav__block -->
      </nav>
      <!-- /.gnav header__nav -->
    </div>
    <!-- /.header__inner -->
  </header>
  <!-- /.header -->

  <!-- ハンバーガーメニュー -->
  <div class="hamburger">
    <div class="hamburger__btn openbtn js-openbtn">
      <span></span><span></span><span></span>
    </div>
    <nav class="hamburger__nav humnav js-humnav">
      <div class="humnav__list">
        <!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
        <ul class="humnav__block">
          <li class="humnav__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <li class="humnav__item"><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
          <li class="humnav__item"><a href="<?php echo esc_url(home_url('content')); ?>">事業内容</a></li>
          <li class="humnav__item"><a href="<?php echo get_post_type_archive_link('works'); ?>">制作実績</a></li>
          <li class="humnav__item"><a href="<?php echo esc_url(home_url('overview')); ?>">企業概要</a></li>
          <li class="humnav__item"><a href="<?php echo get_post_type_archive_link('blog-page'); ?>">ブログ</a></li>
          <li class="humnav__item"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- /.hamburger -->
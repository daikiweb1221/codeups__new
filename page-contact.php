<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-contact-page-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-contact-page-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->

  <h1 class="lower-mv__title">お問い合わせ</h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>

<main class="lower-main">
  <section class="contact-form contact-form-top">
    <div class="contactform__inner">
      <div class="contact-form__wrap contactform">

        <?php the_content(); ?>
      </div>
      <!-- /.contactform__wrap -->
    </div>
    <!-- /.contactform__inner -->
  </section>
  <!-- /.contact-form -->
</main>
<!-- /.lower-main -->


<footer class="footer footer-top">
  <div class="footer__inner">
    <div class="footer__block">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <figure class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.png" alt="ロゴの画像" />
        </figure>
      </a>
      <!-- /.footer__logo -->

      <nav class="footer__nav">
        <ul class="footer__items">
          <!-- /.footer__items -->
          <li class="footer__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <!-- /.footer__item -->
          <li class="footer__item"><a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a></li>
          <!-- /.footer__item -->
          <li class="footer__item"><a href="<?php echo esc_url(home_url('content')); ?>">事業内容</a></li>
          <!-- /.footer__item -->
          <li class="footer__item"><a href="<?php echo esc_url(home_url('overview')); ?>">企業概要</a></li>
          <!-- /.footer__item -->
          <li class="footer__item"><a href="<?php echo get_post_type_archive_link('blog-page'); ?>">ブログ</a></li>
          <!-- /.footer__item -->
          <li class="footer__item"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
          <!-- /.footer__item -->
        </ul>
      </nav>
      <!-- /.footer__nav -->
    </div>
    <!-- /.footer__block -->

    <div class="footer__copy copy">
      <small>&copy; 2021 CodeUps Inc.</small>
    </div>
    <!-- /.copy -->
  </div>
  <!-- /.footer__inner -->
</footer>
<!-- /.footer -->
<div class="page-top js-page-top"><a href="#"></a></div>




<?php wp_footer(); ?>
</body>

</html>
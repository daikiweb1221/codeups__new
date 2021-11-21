<?php get_header(); ?>


<main class="lower-main">
  <section class="contact-completion contact-completion-top">
    <div class="contact-completion__inner l-inner">
      <p class="contact-completion__text">お問い合わせ完了</p>
      <!-- /.contact-completion__text -->
      <p class="contact-completion__comment">
        3営業日以内に<br class="u-mobile">返信させて頂きます。
      </p>
      <!-- /.contact-completion__comment -->
      <div class="contact-completion__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">TOPへ</a>
        <!-- /.btn -->
      </div>
      <!-- /.contact-completion__btn -->
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.contact-completion -->
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
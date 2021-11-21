<section class="contact contact-top-bg">
  <div class="l-inner">
    <h2 class="contact__title section-title">お問い合わせ</h2>
    <!-- /.section-title -->

    <div class="contact__body">
      <p class="contact__text">
      <?php the_field('contact-text', 2933); ?>
      </p>
      <!-- /.contact__text -->
      <div class="contact__btn">
        <a href="<?php echo esc_url(home_url('contact')); ?>" class="btn contact__btn--pc">お問い合わせへ</a>
        <!-- /.btn -->
      </div>
      <!-- /.blog__btn -->
    </div>
    <!-- /.contact__body -->
  </div>
  <!-- /.l-inner -->
</section>
<!-- /.contact -->

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
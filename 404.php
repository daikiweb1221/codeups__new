<?php get_header(); ?>

<?php get_template_part('template/breadcrumb'); ?>

<main class="lower-main">
  <section class="not-found not-found-top">
    <div class="not-found__inner l-inner">
      <p class="not-found__en">404 Not Found</p>
      <!-- /.not-found__en -->
      <p class="not-found__ja">
        お探しのページは<br class="u-mobile" />見つかりませんでした。
      </p>
      <!-- /.not-found__ja -->
      <div class="not-found__btn l-not-found__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">TOPへ</a>
      </div>
      <!-- /.not-found__btn -->
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.not-found -->
</main>
<!-- /.lower-main -->

<?php get_footer(); ?>
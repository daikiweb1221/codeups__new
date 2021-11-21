<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-content-page-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-content-page-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->

  <h1 class="lower-mv__title"><?php the_title(); ?></h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>


<main class="lower-main">
  <section class="philosophy philosophy-top">
    <div class="l-inner">
      <div class="philosophy__box">
        <p class="philosophy__title">企業理念</p>
        <!-- /.philosophy__title -->
        <p class="philosophy__text">
          <?php the_field('philosophy0'); ?>
        </p>
        <!-- /.philosophy__text -->
      </div>
      <!-- /.philosophy__box -->
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.philosophy -->

  <section class="philosophy-media philosophy-media-top">
    <div class="philosophy-media__inner">
      <div class="philosophy__medias media">
        <?php
        // カスタムフィールドの値を取得
        $img_philosophy1 = get_field('philosophy1-img');
        if ($img_philosophy1) {
          // 画像・キャプションを出力
        ?>
          <figure class="media__img">
            <img src="<?php echo esc_url($img_philosophy1['url']) ?>" alt="<?php echo esc_attr($img_philosophy1['alt']) ?>" alt="企業理念の写真" />
          </figure><?php } ?>

        <!-- /.media__img -->
        <div class="media__body">
          <div class="media__body-inner">
            <p class="media__title">企業理念１</p>
            <!-- /.media__title -->
            <p class="media__text">
              <?php the_field('philosophy1-text'); ?>
            </p>
            <!-- /.media__text -->
          </div>
          <!-- /.media__body-inner -->
        </div>
        <!-- /.media__body -->
      </div>
      <!-- /.media -->

      <div class="philosophy__medias media">
        <?php
        // カスタムフィールドの値を取得
        $img_philosophy2 = get_field('philosophy2-img');
        if ($img_philosophy2) {
          // 画像・キャプションを出力
        ?>
          <figure class="media__img media__img--rev">
            <img src="<?php echo esc_url($img_philosophy2['url']) ?>" alt="<?php echo esc_attr($img_philosophy2['alt']) ?>" alt="企業理念の写真" />
          </figure><?php } ?>
        <!-- /.media__img -->
        <div class="media__body">
          <div class="media__body-inner">
            <p class="media__title">企業理念２</p>
            <!-- /.media__title -->
            <p class="media__text">
              <?php the_field('philosophy2-text'); ?>
            </p>
            <!-- /.media__text -->
          </div>
          <!-- /.media__body-inner -->
        </div>
        <!-- /.media__body -->
      </div>
      <!-- /.media -->

      <div class="philosophy__medias media">
        <?php
        // カスタムフィールドの値を取得
        $img_philosophy3 = get_field('philosophy3-img');
        if ($img_philosophy3) {
          // 画像・キャプションを出力
        ?>
          <figure class="media__img">
            <img src="<?php echo esc_url($img_philosophy3['url']) ?>" alt="<?php echo esc_attr($img_philosophy3['alt']) ?>" alt="企業理念の写真" />
          </figure><?php } ?>
        <!-- /.media__img -->
        <div class="media__body">
          <div class="media__body-inner">
            <p class="media__title">企業理念３</p>
            <!-- /.media__title -->
            <p class="media__text">
              <?php the_field('philosophy3-text'); ?>
            </p>
            <!-- /.media__text -->
          </div>
          <!-- /.media__body-inner -->
        </div>
        <!-- /.media__body -->
      </div>
      <!-- /.media -->
    </div>
    <!-- /.philosophy-media__inner -->
  </section>
  <!-- /.philosophy-media -->
</main>
<!-- /.lower-main -->

<?php get_footer(); ?>
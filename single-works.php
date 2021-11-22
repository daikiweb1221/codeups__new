<?php get_header(); ?>

<div class="breadcrumb--top">
  <?php get_template_part('template/breadcrumb'); ?>
</div>
<!-- /.breadcrumb--top -->
<main class="lower-main">
  <section class="works-single works-single-top">
    <div class="works-single__inner">
      <p class="works-single__name"><?php the_title(); ?>様 制作実績</p>
      <!-- /.works-single__name -->
      <div class="works-single__date-cat-block date-cat-block">
        <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <span><?php
              if ($terms = get_the_terms($post->ID, 'works_category')) {
                foreach ($terms as $term) {
                  echo esc_html($term->name);
                }
              }
              ?></span>
      </div>
      <!-- /.works-single__date-cat-block -->
    </div>
    <!-- /.works-single__inner -->
  </section>
  <!-- /.works-single -->

  <!-- スワイパー３ -->
  <div class="gallery">
    <div class="swiper-container gallery-slider slider3">
      <div class="swiper-wrapper">
        <?php
        // カスタムフィールドの値を取得
        $img_field0 = get_field('sub_pic0');
        if ($img_field0) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field0['url']) ?>" alt="<?php echo esc_attr($img_field0['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field1 = get_field('sub_pic1');
        if ($img_field1) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field1['url']) ?>" alt="<?php echo esc_attr($img_field1['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field2 = get_field('sub_pic2');
        if ($img_field2) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field2['url']) ?>" alt="<?php echo esc_attr($img_field2['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field3 = get_field('sub_pic3');
        if ($img_field3) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field3['url']) ?>" alt="<?php echo esc_attr($img_field3['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field04 = get_field('sub_pic4');
        if ($img_field4) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field4['url']) ?>" alt="<?php echo esc_attr($img_field4['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field5 = get_field('sub_pic5');
        if ($img_field5) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field5['url']) ?>" alt="<?php echo esc_attr($img_field5['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
      </div>
      <div class="swiper-button-prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn-left.png" alt="左ボタン" />
      </div>
      <div class="swiper-button-next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/btn-right.png" alt="右ボタン" />
      </div>
    </div>

    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <?php
        // カスタムフィールドの値を取得
        $img_field0 = get_field('sub_pic0');
        if ($img_field0) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field0['url']) ?>" alt="<?php echo esc_attr($img_field0['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field1 = get_field('sub_pic1');
        if ($img_field1) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field1['url']) ?>" alt="<?php echo esc_attr($img_field1['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field2 = get_field('sub_pic2');
        if ($img_field2) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field2['url']) ?>" alt="<?php echo esc_attr($img_field2['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field3 = get_field('sub_pic3');
        if ($img_field3) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field3['url']) ?>" alt="<?php echo esc_attr($img_field3['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field04 = get_field('sub_pic4');
        if ($img_field4) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field4['url']) ?>" alt="<?php echo esc_attr($img_field4['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
        <?php
        // カスタムフィールドの値を取得
        $img_field5 = get_field('sub_pic5');
        if ($img_field5) {
          // 画像・キャプションを出力
        ?>
          <div class="swiper-slide">
            <img src="<?php echo esc_url($img_field5['url']) ?>" alt="<?php echo esc_attr($img_field5['alt']) ?>" alt="制作実績の写真" />
          </div><?php } ?>
      </div>
    </div>
  </div>
  <!-- スワイパー３ここまで -->

  <section class="point-box">
    <div class="point-box__block">
      <div class="point-box__inner">
        <span class="point-box__title">制作のポイント</span>
        <!-- /.point-box__title -->
        <p class="point-box__desc">
          <?php the_field('point0'); ?>
        </p>
        <!-- /.point-box__desc -->
      </div>
      <!-- /point-box__inner -->
    </div>
    <!-- /.point-box__block -->
    <div class="point-box__block">
      <div class="point-box__inner">
        <span class="point-box__title">デザインのポイント</span>
        <!-- /.point-box__title -->
        <p class="point-box__desc">
          <?php the_field('point1'); ?>
        </p>
        <!-- /.point-box__desc -->
      </div>
      <!-- /.point-box__inner -->
    </div>
    <!-- /.point-box__block -->
    <div class="point-box__block">
      <div class="point-box__inner">
        <span class="point-box__title">その他 </span>
        <!-- /.point-box__title -->
        <p class="point-box__desc">
          <?php the_field('others'); ?>
        </p>
        <!-- /.point-box__desc -->
      </div>
      <!-- /.point-box__inner -->
    </div>
    <!-- /.point-box__block -->
  </section>
  <!-- /.point-box -->


  <!-- 個別ページページネーション  -->
  <div class="single-page-nation l-single-page-nation">
    <div class="single-page-nation__inner l-inner">
      <?php if (get_previous_post()) : ?>
        <?php previous_post_link('%link', 'PREV'); ?>
      <?php endif; ?>
      <a href="<?php echo get_post_type_archive_link('works'); ?>" class="single-page-nation__all page-nation-all">一覧</a>
      <!-- /.page-nation-all -->
      <?php if (get_next_post()) : ?>
        <?php next_post_link('%link', 'NEXT'); ?>
      <?php endif; ?>
    </div>
    <!-- /.l-inner -->
  </div>
  <!-- /.single-page-nation -->



  <section class="relation">
    <div class="relation__inner">
      <div class="relation__btn">
        <a href="<?php echo get_post_type_archive_link('blog-page'); ?>" class="r-btn">おすすめ記事</a>
      </div>
      <!-- /.relation__btn -->

      <div class="relation__cards r-cards">

        <?php $args = array(
          'post_type'      => array('blog-page'),
          'posts_per_page' => 4,
          'paged'          => 1,
          'orderby' => 'rand'
        );
        $ag_query = new WP_Query($args); ?>


        <?php if ($ag_query->have_posts()) : while ($ag_query->have_posts()) : $ag_query->the_post(); ?>



            <a class="r-cards__item r-card" href="<?php the_permalink(); ?>">
              <figure class="r-card__img">
                <!-- ーーーアイキャッチ画像の設定（アイキャッチ画像がない時にNOIMG表示）ーーー -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.jpg" alt="ノーイメージ">
                <?php endif; ?>
              </figure>
              <!-- /.r-card__img -->
              <div class="r-card__body">
                <h3 class="r-card__title">
                  <?php the_title(); ?>
                </h3>
                <!-- /.r-card__title -->
                <p class="r-card__desc">
                  <?php
                  if (mb_strlen($post->post_content, 'UTF-8') > 30) {
                    $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 30, 'UTF-8'));
                    echo $content . '…';
                  } else {
                    echo str_replace('\n', '', strip_tags($post->post_content));
                  }
                  ?>
                </p>
                <!-- /.r-card__desc -->
                <div class="r-card__cat-date-block">
                  <span class="r-card__cat"><?php
                                            if ($terms = get_the_terms($post->ID, 'blog_category')) {
                                              foreach ($terms as $term) {
                                                echo esc_html($term->name);
                                              }
                                            }
                                            ?></span>
                  <!-- /.r-card__cat -->
                  <time class="r-card__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <!-- /.r-card__date -->
                </div>
                <!-- /.r-card__cat-date-block -->
              </div>
              <!-- /.r-card__body -->
            </a>
            <!-- /.r-card -->
        <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
      <!-- /.relation__cards -->
    </div>
    <!-- /.relation__inner -->
  </section>
  <!-- /.relation -->
</main>
<!-- /.lower-main -->


<?php get_footer(); ?>
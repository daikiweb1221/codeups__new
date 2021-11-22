<?php get_header(); ?>

<div class="breadcrumb--top">
  <?php get_template_part('template/breadcrumb'); ?>
</div>

<main class="lower-main">
  <section class="blog-single blog-single-top">
    <div class="blog-single__block">
      <div class="blog-single__inner">
        <h2 class="blog-single__title">
          <?php wp_title(''); ?>
        </h2>
        <!-- /.blog-single__title -->
        <div class="blog-single__date-cat-block date-cat-block">
          <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
          <span><?php $category = get_the_category();
                if ($category[0]) {
                  echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                }    ?></span>
        </div>
        <!-- /.date-cat-block -->
      </div>
      <!-- /.blog-single__inner -->
    </div>
    <!-- /.blog-single__block -->

    <div class="blog-single__block">
      <div class="blog-single__img-inner">

        <figure class="blog-single__img">
          <!-- ーーーアイキャッチ画像の設定（アイキャッチ画像がない時にNOIMG表示）ーーー -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.jpg" alt="ノーイメージ">
          <?php endif; ?>
        </figure>
        <!-- /.blog-single__img -->
      </div>
      <!-- /.blog-single__img-inner -->
    </div>
    <!-- /.blog-single__block -->

    <div class="blog-single__block">
      <div class="blog-single__inner">
        <p class="blog-single__text">
          <?php the_field('top-pic-text'); ?>
        </p>
        <!-- /.blog-single__text -->

        <h2 class="blog-single__heading2"><?php the_field('heading2'); ?></h2>
        <!-- /.blog-single__heading2 -->
        <p class="blog-single__text">
          <?php the_field('heading2-text'); ?>
        </p>
        <!-- /.blog-single__text -->

        <h3 class="blog-single__heading3"><?php the_field('heading3'); ?></h3>
        <!-- /.blog-single__heading3 -->

        <p class="blog-single__text">
          <?php the_field('heading3-text'); ?>
        </p>
        <!-- /.blog-single__text -->
      </div>
      <!-- /.blog-single__inner -->

      <div class="blog-single__img-inner">
        <?php
        // カスタムフィールドの値を取得
        $img_field2 = get_field('heading3-pic');
        if ($img_field2) {
          // 画像・キャプションを出力
        ?>
          <figure class="blog-single__img">
            <img src="<?php echo esc_url($img_field2['url']) ?>" alt="<?php echo esc_attr($img_field2['alt']) ?>" alt="ブログの写真" />
          </figure><?php } ?>
        <!-- /.blog-single__img -->
      </div>
      <!-- /.blog-single__img-inner -->

      <div class="blog-single__inner">
        <ul class="blog-single__list1 list">
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
        </ul>
        <!-- /.blog-single__list1 -->

        <ol class="blog-single__list2 list">
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single__list__item -->
          <li class="list__item">
            <a href="#">リストが入ります。リストが入ります。リストが入ります。リストが入ります。</a>
          </li>
          <!-- /.blog-single-list__item -->
        </ol>
        <!-- /.blog-single__list2 -->
      </div>
      <!-- /.blog-single__inner -->
    </div>
    <!-- /.blog-single__block -->
  </section>
  <!-- /.blog-single -->

  <!-- 個別ページページネーション  -->
  <div class="single-page-nation l-single-page-nation">
    <div class="single-page-nation__inner l-inner">
      <?php if (get_previous_post()) : ?>
        <?php previous_post_link('%link', 'PREV'); ?>
      <?php endif; ?>
      <a href="<?php echo esc_url(home_url('news')); ?>" class="single-page-nation__all page-nation-all">一覧</a>
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
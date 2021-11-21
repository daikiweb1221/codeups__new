<?php get_header(); ?>

<!-- メインビジュアル -->
<div class="mv js-mv">
  <div class="mv__title title">
    <h1 class="title__main">メインタイトルが入ります</h1>
    <!-- /.title__main -->
    <p class="title__sub">サブタイトルが入ります</p>
    <!-- /.title__sub -->
  </div>
  <!-- /.title -->

  <!-- スワイパー  -->
  <div class="swiper swiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/p-mv.png" media="(min-width: 768px)" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/m-mv.png" alt="メインビジュアル" />
          </picture>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/p-mv1.png" media="(min-width: 768px)" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/m-mv1.png" alt="メインビジュアル" />
          </picture>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/p-mv2.png" media="(min-width: 768px)" />
            <!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/m-mv2.png" alt="メインビジュアル" />
          </picture>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
  </div>
</div>
<!-- スワイパーここまで -->

<div class="yellow-border"></div>
<!-- /.yellow-border -->
<main class="main">
  <section class="news news-top">
    <div class="l-inner">

      <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプを指定
        'posts_per_page' => 1 // 表示する記事数
      );
      $post_query = new WP_Query($args);
      if ($post_query->have_posts()) :
        while ($post_query->have_posts()) : $post_query->the_post();
      ?>
          <div class="news__block">
            <div class="news__body">
              <time class="news__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <!-- /.date -->
              <span class="news__tag"><?php $category = get_the_category();
                                      if ($category[0]) {
                                        echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                                      }    ?></span>
              <!-- /.tag -->
            </div>
            <!-- /.news__body -->
            <p class="news__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(''); ?>
              </a>
            </p>
            <!-- /.news__title -->
            <div class="news__btn">
              <a href="<?php echo esc_url(home_url('news')); ?>" class="news__button small-btn">すべて見る</a>
              <!-- /.btn -->
            </div>
            <!-- /.news__btn -->
          </div>
          <!-- /.news__block -->
        <?php endwhile;
      else : ?> <p>記事は見つかりませんでした</p>
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.news -->

  <section class="content content-top">
    <div class="l-inner">
      <h2 class="content__title section-title">事業内容</h2>
      <!-- /.section-title -->
    </div>
    <!-- /.l-inner -->

    <div class="content__box">
      <a href="<?php echo esc_url(home_url('content')); ?>">
        <figure class="content__link">
          <h3 class="content__link-title">経営理念ページへ</h3>
          <!-- /.content__link-title -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pic.png" alt="リンク画像" />
        </figure>
      </a>
      <!-- /.content__link -->
      <a href="<?php echo esc_url(home_url('content')); ?>">
        <figure class="content__link">
          <h3 class="content__link-title">理念1へ</h3>
          <!-- /.content__link-title -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pic1.png" alt="リンク画像1" />
        </figure>
      </a>
      <!-- /.content__link -->
      <a href="<?php echo esc_url(home_url('content')); ?>">
        <figure class="content__link">
          <h3 class="content__link-title">理念2へ</h3>
          <!-- /.content__link-title -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pic2.png" alt="リンク画像2" />
        </figure>
      </a>
      <!-- /.content__link -->
      <a href="<?php echo esc_url(home_url('content')); ?>">
        <figure class="content__link">
          <h3 class="content__link-title">理念3へ</h3>
          <!-- /.content__link-title -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/content-pic3.png" alt="リンク画像3" />
        </figure>
      </a>
      <!-- /.content__link -->
    </div>
    <!-- /.content__box -->
  </section>
  <!-- /.content -->

  <section class="works works-top">
    <div class="l-inner">
      <h2 class="works__title section-title">制作実績</h2>
      <!-- /.section-title -->
    </div>
    <!-- /.l-inner -->
    <div class="bg-color">
      <div class="pc-block-wrap">
        <div class="works__block">
          <!-- swiper2 -->
          <div class="swiper swiper2 works__swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <?php
                // カスタムフィールドの値を取得
                $img_field = get_field('top-img', 2933) ?>
                <img src="<?php echo esc_url($img_field['url']) ?>" alt="制作実績のイメージ" />
              </div>
              <div class="swiper-slide">
                <?php
                // カスタムフィールドの値を取得
                $img_field2 = get_field('top-img2', 2933) ?>
                <img src="<?php echo esc_url($img_field2['url']) ?>" alt="制作実績のイメージ" />
              </div>
              <div class="swiper-slide">
                <?php
                // カスタムフィールドの値を取得
                $img_field3 = get_field('top-img3', 2933) ?>
                <img src="<?php echo esc_url($img_field3['url']) ?>" alt="制作実績のイメージ" />
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-scrollbar"></div> -->
          </div>

          <div class="works__body">
            <div class="works__inner">
              <div class="works__heading heading">
                <h3 class="heading__title"><?php the_field('works-title', 2933); ?></h3>
                <!-- /.heading__title -->
                <p class="heading__text">
                  <?php the_field('works-text', 2933); ?>
                </p>
                <!-- /.heading__text -->
              </div>
              <!-- /.works__heading -->
              <div class="works__btn">
                <a href="<?php echo get_post_type_archive_link('works'); ?>" class="btn">詳しく見る</a>
                <!-- /.btn -->
              </div>
              <!-- /.works__btn -->
            </div>
            <!-- /.works__inner -->
          </div>
          <!-- /.works__body -->
        </div>
        <!-- /.works__block -->
      </div>
      <!-- /.pc-block-wrap -->
    </div>
    <!-- /.bg-color -->
  </section>
  <!-- /.works -->

  <div class="yellow-border2"></div>
  <!-- /.yellow-border2 -->
  <section class="overview overview-top">
    <div class="l-inner">
      <h2 class="overview__title section-title">企業概要</h2>
      <!-- /.section-title -->
    </div>
    <!-- /.l-inner -->

    <div class="bg-color bg-color--rev">
      <div class="pc-block-wrap">
        <div class="overview__block">
          <figure class="overview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/overview.png" alt="企業概要の写真" />
          </figure>
          <!-- /.overview__img -->
          <div class="overview__body">
            <div class="overview-inner">
              <div class="overview__heading heading">
                <h3 class="heading__title"><?php the_field('overview-title', 2933); ?></h3>
                <!-- /.heading__title -->
                <p class="heading__text">
                  <?php the_field('overview-text', 2933); ?>
                </p>
                <!-- /.heading__text -->
              </div>
              <!-- /.overview__heading -->
              <div class="overview__btn">
                <a href="<?php echo esc_url(home_url('overview')); ?>" class="btn">詳しく見る</a>
                <!-- /.btn -->
              </div>
              <!-- /.overview__btn -->
            </div>
            <!-- /.overview-inner -->
          </div>
          <!-- /.overview__body -->
        </div>
        <!-- /.overview__block -->
      </div>
      <!-- /.pc-block-wrap -->
    </div>
    <!-- /.bg-color -->
  </section>
  <!-- /.overview -->

  <section class="blog blog-top">
    <div class="l-inner">
      <h2 class="blog__title section-title">ブログ</h2>
      <!-- /.section-title -->

      <div class="blog__block cards">
        <?php $args = array(
          'post_type'      => array('blog-page'),
          'posts_per_page' => 3,
          'paged'          => 1,
          'orderby' => 'rand'
        );
        $ag_query = new WP_Query($args); ?>


        <?php if ($ag_query->have_posts()) : while ($ag_query->have_posts()) : $ag_query->the_post(); ?>

            <a class="cards__item card" href="<?php the_permalink(); ?>">
              <figure class="card__img">
                <!-- ーーーアイキャッチ画像の設定（アイキャッチ画像がない時にNOIMG表示）ーーー -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.jpg" alt="ノーイメージ">
                <?php endif; ?>
              </figure>
              <!-- /.card__img -->
              <div class="card__body">
                <h3 class="card__title">
                  <?php the_title(); ?>
                </h3>
                <!-- /.card__title -->
                <p class="card__desc">
                  <?php
                  if (mb_strlen($post->post_content, 'UTF-8') > 30) {
                    $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 30, 'UTF-8'));
                    echo $content . '…';
                  } else {
                    echo str_replace('\n', '', strip_tags($post->post_content));
                  }
                  ?>
                </p>

                <!-- /.card__desc -->
                <div class="card__cat-date-block">
                  <span class="card__cat"><?php
                                          if ($terms = get_the_terms($post->ID, 'blog_category')) {
                                            foreach ($terms as $term) {
                                              echo esc_html($term->name);
                                            }
                                          }
                                          ?></span>
                  <!-- /.card__cat -->
                  <time class="card__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <!-- /.card__date -->
                </div>
                <!-- /.card__cat-date-block -->
              </div>
              <!-- /.card__body -->
            </a>
            <!-- /.card -->
        <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- /.blog__block -->
      <div class="blog__btn">
        <a href="<?php echo get_post_type_archive_link('blog-page'); ?>" class="btn">詳しく見る</a>
        <!-- /.btn -->
      </div>
      <!-- /.blog__btn -->
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.blog -->
</main>
<!-- /.main -->

<?php get_footer(); ?>
<?php get_header(); ?>
<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-news-archive-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-news-archive-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->
  <h1 class="lower-mv__title"><?php the_title(); ?></h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>


<main class="lower-main">
  <section class="news-archive news-archive-top">
    <div class="news-archive__inner news">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $news = new WP_Query(array(
        'post_type' => 'post',
        'paged' => $paged,
        'post_status' => 'publish',
        'posts_per_page' => 10,
      ));
      if ($news->have_posts()) :
      ?>
        <?php while ($news->have_posts()) : $news->the_post(); ?>


          <div class="news__block">
            <div class="news__body news__archive--body">
              <time class="news__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <!-- /.date -->
              <span class="news__tag"><?php $category = get_the_category();
                                      if ($category[0]) {
                                        echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                                      }    ?></span>
              <!-- /.tag -->
            </div>
            <!-- /.news__body -->
            <p class="news__archive-title news__archive--hover">
              <a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 40) . '……'; ?>
              </a>
            </p>
            <!-- /.news-archive__title -->
          </div>
          <!-- /.news__block -->
        <?php endwhile;
      else : ?> <p>記事は見つかりませんでした</p>
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <!-- /.news-archive__inner -->
  </section>
  <!-- /.news-archive -->
</main>
<!-- /.lower-main -->

<div class="page-nation l-page-nation">
  <div class="page-nation__inner l-inner">
    <?php
    if (function_exists('wp_pagenavi')) {
      wp_pagenavi(array('query' => $news));
    }
    ?>

  </div>
  <!-- /.page-nation__inner -->
</div>
<!-- /.page-nation -->



<?php get_footer(); ?>
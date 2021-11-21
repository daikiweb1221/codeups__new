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
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
              </a>
            </p>
            <!-- /.news-archive__title -->
          </div>
          <!-- /.news__block -->
      <?php endwhile;
      endif; ?>
    </div>
    <!-- /.news-archive__inner -->
  </section>
  <!-- /.news-archive -->
</main>
<!-- /.lower-main -->


<div class="page-nation l-page-nation">
  <div class="page-nation__inner l-inner">
    <?php wp_pagenavi(); ?>

  </div>
  <!-- /.page-nation__inner -->
</div>
<!-- /.page-nation -->

<div class="single-page-nation l-single-page-nation">
  <div class="single-page-nation__inner l-inner">

    <a href="<?php echo esc_url(home_url('news')); ?>" class="single-page-nation__all">一覧</a>
    <!-- /.page-nation-all -->

  </div>
  <!-- /.l-inner -->
</div>
<!-- /.single-page-nation -->


<?php get_footer() ?>
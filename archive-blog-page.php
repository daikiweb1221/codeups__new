<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-blog-archive-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-blog-archive-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->

  <h1 class="lower-mv__title">ブログ</h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>

<main class="lower-main">
<div class="cat-wrap cat-wrap-top">
    <div class="cat-wrap__inner">
      <ul class="cat-wrap__items">
        <li class="cat-wrap__item cat-wrap--all"><a href="<?php echo get_post_type_archive_link('blog-page'); ?>">all</a></li>
        <?php
        $args = array(
          'taxonomy' => 'blog_category'
        );
        $categories = get_categories($args);
        foreach ($categories as $category) {
          echo '<li class="cat-wrap__item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        ?>

      </ul>
      <!-- /.cat-wrap__items -->
    </div>
    <!-- /.cat-wrap__inner -->
  </div>
  <!-- /.cat-wrap -->

  <section class="blog-archive blog-archive-top">
    <div class="blog-archive__inner l-inner">
      <div class="blog-archive__block cards">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $blog = new WP_Query(array(
          'post_type' => array('blog-page'),
          'paged' => $paged,
          'post_status' => 'publish',
          'posts_per_page' => 9,
        ));
        if ($blog->have_posts()) :
        ?>
          <?php while ($blog->have_posts()) : $blog->the_post(); ?>
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
      </div>
      <!-- /.archive-blog__block -->
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.blog-archive -->
</main>
<!-- /.lower-main -->


<div class="page-nation l-page-nation__blog-archive-top">
  <div class="page-nation__inner l-inner">
    <?php wp_pagenavi(); ?>

  </div>
  <!-- /.page-nation__inner -->
</div>
<!-- /.page-nation -->



<?php get_footer(); ?>
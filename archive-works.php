<?php get_header(); ?>

<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-works-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-works-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->

  <h1 class="lower-mv__title">制作実績</h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>

<main class="lower-main">
  <div class="cat-wrap cat-wrap-top">
    <div class="cat-wrap__inner">
      <ul class="cat-wrap__items">
        <li class="cat-wrap__item cat-wrap--all"><a href="<?php echo get_post_type_archive_link('works'); ?>">all</a></li>
        <?php
        $args = array(
          'taxonomy' => 'works_category'
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

  <section class="works-page-card works-page-card-top">
    <div class="works-page-card__pc-inner">
      <div class="works-page-card__items">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $works = new WP_Query(array(
          'post_type' => array('works'),
          'paged' => $paged,
          'post_status' => 'publish',
          'posts_per_page' => 6,
        ));
        if ($works->have_posts()) :
        ?>
          <?php while ($works->have_posts()) : $works->the_post(); ?>
            <a class="works-page-card__item" href="<?php the_permalink(); ?>">
              <div class="works-page-card__block">
                <span class="works-page-card__cat"><?php
                                                    if ($terms = get_the_terms($post->ID, 'works_category')) {
                                                      foreach ($terms as $term) {
                                                        echo esc_html($term->name);
                                                      }
                                                    }
                                                    ?></span>
                <!-- /.works-page-card__cat -->
                <figure class="works-page-card__img">
                  <!-- ーーーアイキャッチ画像の設定（アイキャッチ画像がない時にNOIMG表示）ーーー -->
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.jpg" alt="noimage">
                  <?php endif; ?>
                </figure>
                <!-- /.works-page-card__img -->
                <p class="works-page-card__title"><?php the_title(); ?></p>
                <!-- /.works-page-card__title -->
              </div>
            </a>
            <!-- /.works-page-card__item -->
        <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
      <!-- /.works-page-card__items-->
    </div>
    <!-- /.works-page-card__pc-inner -->
  </section>
  <!-- /.works-page-card -->
</main>
<!-- /.lower-main -->

<div class="page-nation l-page-nation">
  <div class="page-nation__inner l-inner">
    <?php wp_pagenavi(); ?>

  </div>
  <!-- /.page-nation__inner -->
</div>
<!-- /.page-nation -->





<?php get_footer(); ?>
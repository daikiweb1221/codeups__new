<?php get_header(); ?>


<!-- 下層ページMV -->
<div class="lower-mv js-mv">
  <picture class="lower-mv__img">
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/pc-overview-page-mv.png" media="(min-width: 768px)" />
    <!-- 幅768px以上なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sp-overview-page-mv.png" alt="メインビジュアル" />
  </picture>
  <!-- /.lower-mv__img -->

  <h1 class="lower-mv__title">企業概要</h1>
  <!-- /.lower-mv__title -->
</div>
<!-- /.lower-mv -->

<?php get_template_part('template/breadcrumb'); ?>

<main class="lower-main">
  <section class="overview-list overview-list-top">
    <div class="overview-list__inner">
      <dl class="overview-list__campany campany">
        <div class="company__desc">
          <dt>会社名</dt>
          <dd><?php the_field('company'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>設立</dt>
          <dd><?php the_field('company1'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>資本金</dt>
          <dd><?php the_field('company2'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>売上高</dt>
          <dd><?php the_field('company3'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>代表者</dt>
          <dd><?php the_field('company4'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>従業員数</dt>
          <dd><?php the_field('company5'); ?></dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>事業内容</dt>
          <dd>
          <?php the_field('company6'); ?>
          </dd>
        </div>
        <!-- /.company__desc -->
        <div class="company__desc">
          <dt>所在地</dt>
          <dd><?php the_field('company7'); ?></dd>
        </div>
        <!-- /.company__desc -->
      </dl>
    </div>
    <!-- /.overview-list__inner -->
  </section>
  <!-- /.overview-list -->

  <section class="company-map company-map-top">
    <div class="company__map-inner">
      <div class="company__map-block gmap-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.74779853328!2d139.74324421519992!3d35.65858483882126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1634560320028!5m2!1sja!2sjp" style="border: 0"  loading="lazy"></iframe>
      </div>
      <!-- /.company__map-block -->
    </div>
    <!-- /.company__map-inner -->
  </section>
  <!-- /.company-map -->
</main>
<!-- /.lower-main -->

<?php get_footer(); ?>
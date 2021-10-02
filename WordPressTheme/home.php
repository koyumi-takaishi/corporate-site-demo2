<?php get_header(); ?>

<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about-pc.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about-sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">TOPICS</h2>
    <span class="p-sub-mv__subtitle">最新情報</span>
  </div>
</div>



<section class="l-sub-topics p-topics">
  <div class="l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
    <div class="p-topics__items p-topics__items--wide">

      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="p-topics__item p-topic-info">
        <time datetime="<?php the_time( 'c' );?>" class="p-topic-info__date"><?php the_time('Y.m.d'); ?></time>
        <a href="<?php the_permalink();?>" class="p-topic-info__text"> <?php the_title(); ?></a>
      </div>
      <?php endwhile; ?>
      <?php else: ?>
      投稿無いよー
      <?php endif; ?>

    </div>
    <div class="l-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
<?php get_header(); ?>
<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about-pc.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about-sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">ARTICLE</h2>
    <span class="p-sub-mv__subtitle">記事の詳細</span>
  </div>
</div>
<div class="l-single p-single">
  <div class="p-single__inner l-inner">
    <div class="l-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
    <div class="p-single__title">
      <h2 class="c-section-title"><?php the_title(); ?></h2>
    </div>
    <time datetime="<?php the_time( 'c' );?>" class="p-single__date"><?php the_time('Y.m.d'); ?></time>
    
    <?php if(get_field('title')): ?>
    <div class="p-single__box01 p-box01">
      <span class="p-box01__title"><?php the_field('title'); ?></span>
      <p class="p-box01__text"><?php the_field('text'); ?></p>
    </div>
    <?php endif; ?>
    
    <?php if(get_field('title-2')): ?>
    <div class="p-single__box01 p-box01">
      <span class="p-box01__title"><?php the_field('title-2'); ?></span>
      <p class="p-box01__text"><?php the_field('text-2'); ?></p>
    </div>
    <?php endif; ?>
    
    <div class="p-single__body">
      <?php the_content(); ?>
    </div>
    <?php endwhile;?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
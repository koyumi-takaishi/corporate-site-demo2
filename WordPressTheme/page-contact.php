<?php get_header(); ?>

<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/contactpage_pc.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contactpage_sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">CONTACT</h2>
    <span class="p-sub-mv__subtitle">お問い合わせ</span>
  </div>
</div>

<?php if (have_posts()): while (have_posts()): the_post();
  the_content();
endwhile; endif; ?>

<?php get_footer(); ?>
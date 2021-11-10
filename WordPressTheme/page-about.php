<?php get_header(); ?>

<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img_about.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">ABOUT US</h2>
    <span class="p-sub-mv__subtitle">ENJOY inc.について</span>
  </div>
</div>

<section class="l-vision p-vision">
  <div class="p-vision__inner l-inner">
    <h2 class="c-section-title">vision</h2>
    <div class="p-vision__content">
      <h3 class="p-vision__subtitle">タイトルが入ります。</h3>
      <div class="p-vision__box">
        <p class="p-vision__text">テキストが入ります。テキストが入ります。</p>
        <p class="p-vision__text">テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p class="p-vision__text">テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。</p>
        <p class="p-vision__text">テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。<br>テキストが入ります。</p>
        <p class="p-vision__text">テキストが入ります。テキストが入ります。<br>テキストが入ります。テキストが入ります。</p>
        <p class="p-vision__text">テキストが入ります。</p>
      </div>
    </div>
  </div>
</section>


<section class="l-message p-message">
  <div class="p-message__inner">
    <div class="p-message__img">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/img_message.jpg" alt="女性が写っている写真">
    </div>
  </div>

  <div class="l-inner">
    <div class="p-message__wrapper">
      <h2 class="c-section-title">CEO MESSAGE</h2>
      <div class="p-message__content">
        <p class="p-message__text">テキストが入ります。</p>
        <p class="p-message__text">テキストが入ります。テキストが入ります。</p>
        <p class="p-message__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p class="p-message__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p class="p-message__text">テキストが入ります。テキストが入ります。</p>
        <p class="p-message__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </div>
  </div>
</section>

<section class="l-company p-company">
  <div class="l-inner">
    <h2 class="c-section-title">company</h2>
    <div class="p-company__wrapper">
      <dl class="p-company__info p-explain">

        <?php
        $info = SCF::get('information');
        foreach ($info as $detail ) { ?>

        <div class="p-explain__block">
          <dt class="p-explain__header"><?php echo $detail['info-title']; ?></dt>
          <dd class="p-explain__description"><?php echo $detail['info-text']; ?></dd>
        </div>
        
        <?php } ?>

      </dl>
    </div>
  </div>
</section>

<div class="l-map p-map">
  <div class="l-inner">
    <div class="p-map__iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12961.952053542942!2d139.7005713!3d35.6896067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1629982748789!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>

<?php get_footer(); ?>
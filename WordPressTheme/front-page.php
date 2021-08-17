<?php get_header(); ?>

<div class="l-mv p-mv js-mv">
  <picture class="p-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/kv-img.jpg" media="(min-width: 768px)"/>
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/kv-img-sp.jpg" alt="">
  </picture>
  <div class="p-mv__block">
    <span class="p-mv__subtitle">デザインで人を笑顔にする会社</span>
    <span class="p-mv__subtitle--en">DIGSMILE INC.</span>
    <h2 class="p-mv__title">DESIGN<br>FOR<br>SMILE.</h2>
  </div>
</div>

<section class="l-top-about p-about">
  <div class="p-about__inner">
    <div class="p-about__content">
      <h2 class="c-section-title">about us</h2>
      <div class="p-about__box">
        <p class="p-about__text">DIGSMILEは、デザインで人を笑顔にする会社。</p>
        <p class="p-about__text">なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。</p>
        <p class="p-about__text">DIGSMILEの社名にはそんな想いが込められています。</p>
      </div>
      <div class="p-about__btn">
        <a href="#" class="c-btn">read more</a>
      </div>
    </div>
  </div>
</section>

<div class="l-top-bgGray">
  <div class="l-top-bgGray__inner">
    <section class="l-top-box1 p-box1">
      <div class="p-box1__inner l-inner">
        <h2 class="c-section-title">works</h2>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works-img.jpg" alt="">
        </div>
        <div class="p-box1__body">
          <p class="c-text">DIGSMILEの制作実績を紹介します。</p>
          <div class="p-box1__btn">
            <a href="#" class="c-btn">read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="l-top-box1 p-box1">
      <div class="p-box1__inner l-inner">
        <h2 class="c-section-title">culture</h2>
        <div class="p-box1__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/culture-img.jpg" alt="">
        </div>
        <div class="p-box1__body">
          <p class="c-text">DIGSMILEの社内文化について紹介します。</p>
          <div class="p-box1__btn">
            <a href="#" class="c-btn">read more</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<section class="l-topics p-topics">
  <div class="l-inner">
    <h2 class="c-section-title">latest topics</h2>
    <div class="p-topics__items">
      <div class="p-topics__item p-topic-info">
        <time datetime="<?php the_time( 'c' );?>" class="p-topic-info__date">2020.02.01</time>
        <a href="" class="p-topic-info__text">イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」</a>
      </div>
      <div class="p-topics__item p-topic-info">
        <time datetime="<?php the_time( 'c' );?>" class="p-topic-info__date">2020.02.01</time>
        <a href="" class="p-topic-info__text">イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」</a>
      </div>
      <div class="p-topics__item p-topic-info">
        <time datetime="<?php the_time( 'c' );?>" class="p-topic-info__date">2020.02.01</time>
        <a href="" class="p-topic-info__text">イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」</a>
      </div>
    </div>
    <div class="p-topics__btn">
      <a href="#" class="c-btn">read more</a>
    </div>
  </div>
</section>

<section class="l-contact p-contact">
  <div class="l-inner">
    <div class="p-contact__wrapper">
      <div class="p-contact__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact-img.jpg" alt="">
      </div>
      <div class="p-contact__body">
        <h2 class="c-section-title">contact</h2>
        <div class="p-contact__text">
          <p class="c-text">制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。</p>
          <p class="c-text">まずはお気軽にご連絡ください。担当者から改めて返信いたします。</p>
        </div>
        <div class="p-contact__btn">
          <a href="#" class="c-btn">read more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
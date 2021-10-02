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

<section class="l-sub-contact p-sub-contact">
  <div class="l-inner p-sub-contact__inner">
    <div class="p-sub-contact__textBox">
      <p class="p-sub-contact__text">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</p>
    </div>
    <div class="p-sub-contact__contents">
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お問い合わせ種別</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-radio">
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>制作依頼</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>採用</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>IR</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>その他</span>
          </label>
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">会社名・団体名</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お名前</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">メールアドレス</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="email">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">電話番号</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="tel">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お問い合わせ内容</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-textarea">
          <textarea class="p-contact-textarea__text"></textarea>
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">PRIVACY POLICY</p>
        </div>
        <div class="p-sub-contact__item p-privacy-policy">
          <div class="p-privacy-policy__content">
            <p class="p-privacy-policy__text">
            個人情報保護方針<br>
            株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。<br>
            <br>
            1.個人情報の収集、利用<br>
            当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。<br>
            <br>
            2.個人情報の第三者への開示と提供<br>
            収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。<br>
            業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。<br>
            <br>
            3.個人情報の保護<br>
            当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。<br>
            <br>
            4.法令および関連規範の遵守<br>
            当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。<br>
            5.個人情報の開示・訂正・削除<br>
            当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。<br>
            <br>
            法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。<br>
            <br>
            お問い合わせ窓口<br>
            当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。<br>
            株式会社ファイアープレイス<br>
            044-589-4333</p>
          </div>
        </div>
      </div>
      <div class="p-sub-contact__content p-sub-contact__content--center p-contact-check">
        <label>
            <input class="p-contact-check__item" type="checkbox" name="check-name"><span>個人情報の取り扱いについて同意のうえ送信します。</span>
          </label>
      </div>
      <div class="p-sub-contact__content p-sub-contact__content--button p-contact-button">
        <input class="p-contact-button__submit" type="submit" value="送信">
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
<?php
/**
 * Header Content
 */

?>

<header class="l-header p-header">

<div class="p-header__inner">
  <div class="p-header__logo">
    <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/site-logo.svg" alt="タイトルロゴ">
  </div>
  <div class="p-header__drawer c-hamburger js-hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="p-header__menuText">
    <span>menu</span>
  </div>
  <div class="p-header__overlay js-overlay"></div>
  <div class="p-header__menu p-drawer-menu js-drawer-menu">
    <div class="p-drawer-menu__logo">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo-menu.svg" alt="">
    </div>
    <ul class="p-drawer-menu__items">
      <li class="p-drawer-menu__item">
        <a href="">about us</a>
      </li>
      <li class="p-drawer-menu__item">
        <a href="">works</a>
      </li>
      <li class="p-drawer-menu__item">
        <a href="">culture</a>
      </li>
      <li class="p-drawer-menu__item">
        <a href="">topics</a>
      </li>
      <li class="p-drawer-menu__item">
        <a href="">contact</a>
      </li>
    </ul>
  </div>
</div>

</header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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
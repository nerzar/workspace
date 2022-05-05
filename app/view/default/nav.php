<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
  global $services;
?>

      <nav class="navigation">
        <a href="/" id="logo">
          <img src="/dist/i/logo.png" width="1430px" height="355px" alt="Логотип Истринского завода металлоконструкций">
        </a>
        <div class="navigation__wrapper">
          <div class="navigation__top">
            <a href="tel:+7-495-994-42-78" class="link roistat-phone" id="tel"><span></span>+7-495-994-42-78</a>
            <a href="mailto:zakaz@istra-zmk.ru" class="link" id="email"><span></span>zakaz@istra-zmk.ru</a>
            <a href="javascript: off()" class="button" data-rf_from="tech_task">Отправить ТЗ</a>
          </div>
          <div class="navigation__bottom">
            <a href="/e-module-builds" class="link"><span id="new">new</span>Модульные здания для энергетики</a>
            <a href="/mezzanine" class="link"><span id="new">new</span>Мезонин</a>
            <a href="/istrion" class="link">Оптимизация проектов КМ</a>
            <a href="/to-customers" class="link">Заказчикам</a>
            <a href="/partners" class="link">Партнерам</a>
            <!-- <a href="/blog" class="link">Новости</a> -->
            <a href="/contacts" class="link">Контакты</a>
          </div>
        </div>
      </nav>

      <nav class="navigation fixed">
        <a href="/" id="logo">
          <img src="/dist/i/logo.png" width="1430px" height="355px" alt="Логотип Истринского завода металлоконструкций">
        </a>
        <div class="navigation__wrapper">
          <div class="navigation__bottom">
            <a href="/e-module-builds" class="link"><span id="new">new</span>Модульные здания для энергетики</a>
            <a href="/mezzanine" class="link"><span id="new">new</span>Мезонин</a>
            <a href="/istrion" class="link">Оптимизация проектов КМ</a>
            <a href="/to-customers" class="link">Заказчикам</a>
            <a href="/partners" class="link">Партнерам</a>
            <!-- <a href="/blog" class="link">Новости</a> -->
            <a href="/contacts" class="link">Контакты</a>
          </div>
        </div>
      </nav>


      <div class="navigation__mobile_wrapper">
        <a href="/" id="logo">
          <img src="/dist/i/logo.png" width="1430px" height="355px" alt="Логотип Истринского завода металлоконструкций">
        </a>
        <a href="tel:+7-495-994-42-78" class="link roistat-phone" id="tel"><span></span></a>
        <a href="mailto:zakaz@istra-zmk.ru" class="link" id="email"><span></span></a>
        <a href="javascript: off()" class="button" id="tt">Отправить ТЗ</a>
        <a href="javascript: off();" id="menu" data-rf_from="nav_mobile">
          <span>&nbsp;</span>
          <span>&nbsp;</span>
        </a>
      </div>
      <nav class="navigation__mobile_content" data-rf_to="nav_mobile">
        <div class="navigation__mobile_content__wrapper">
          <a href="/e-module-builds" class="link">Модульные здания для энергетики<span id="new">new</span></a>
          <a href="/mezzanine" class="link">Мезонин <span id="new">new</span></a>
          <a href="/istrion" class="link">Оптимизация проектов КМ</a>
          <a href="/to-customers" class="link">Заказчикам</a>
          <a href="/partners" class="link">Партнерам</a>
          <!-- <a href="/blog" class="link">Новости</a> -->
          <a href="/contacts" class="link">Контакты</a>
        </div>
      </nav>

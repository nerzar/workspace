<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
  global $services;
?>

    <main class="main__mezonin">
      <section class="contacts">
        <div class="contacts__content">
          <h1>Контакты:</h1>
          <h2>ТЕЛЕФОНЫ – EMAIL</h2>
          <a href="tel:+7 (499) 433-08-76"><span> </span> +7 (499) 433-08-76</a>
          <p>
            <span> </span> Отдел по работе с клиентами: <br>
            <a href="mailto:ask@istra-zmk.ru">ask@istra-zmk.ru</a>
          </p>
          <h2>АДРЕС ОФИСА И ПРОИЗВОДСТВЕННОЙ ПЛОЩАДКИ</h2>
          <address>
            <span> Московская область, г. Истра, Заводская улица, д. 5</span>
            <span>
               Координаты для GPS:
              <br> 55.918891, 36.815049</span>
          </address>
          <h3>Доставка и монтаж по всей России!</h3>
        </div>
        <form id="contact_list_form" action="javascript: off()" method="post" autocomplete="off" enctype="multipart/form-data">
          <legend>
            Если у вас есть предложение, вопросы по работе или претензия отправьте ее через эту форму.
            Все обращения рассматриваются и направляются в соответствующий отдел.
          </legend>
          <input type="text" name="name" value="" placeholder="Ваше имя *" required>
          <input type="email" name="email" value="" placeholder="E-mail *" required>
          <input type="tel" name="tel" value="" placeholder="Номер телефона *" required>
          <input type="text" name="corp" value="" placeholder="Организация">
          <textarea name="msg" placeholder="Сообщение:"></textarea>
          <input type="hidden" name="apiCommand" value="send-form">
          <button id="contact_list_button" type="submit" name="button">Отправить </button>
        </form>
      </section>
      <section class="ymap">
        <h2> Интерактивная карта проезда</h2>
        <div class="ymap_wrapper">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4d7664743f588e6a13c608e59d46a795c15354d6c9540aaf16a94fe04850c431&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
      </section>
    </main>

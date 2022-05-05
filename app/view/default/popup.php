<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
  global $services;
?>

    <!-- Референс лист -->
    <div class="popup" data-rf_to="reference_list">
      <a href="javascript: off();" id="close" data-rf_from="reference_list"></a>
      <form id="reference_list_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Оставьте контактные данные, наш менеджер отправит вам референс-лист ИЗМК:</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button id="reference_list_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>


    <!-- ТЗ -->
    <div class="popup" data-rf_to="tech_task">
      <a href="javascript: off();" id="close" data-rf_from="tech_task"></a>
      <form id="tech_task_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Отправьте техническое задание:</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="text" name="link" value="" placeholder="Ссылка на файл с ТЗ *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <!-- <input type="file" name="file_tt" value="" id="file">
        <label for="file" class="file_placeholder">Прикрепить файл </label> -->
        <button id="tech_task_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Мезонин - истрион -->
    <div class="popup" data-rf_to="mazonin_get_project">
      <a href="javascript: off();" id="close" data-rf_from="mazonin_get_project"></a>
      <form id="mezonin_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Для получения проекта, укажите куда нам следует направить документы.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button id="mezonin_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Уточнить характеристики -->
    <div class="popup" data-rf_to="customers_params">
      <a href="javascript: off();" id="close" data-rf_from="customers_params"></a>
      <form id="specifications_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Укажите контактные данные и тип интересующего здания, для уточнения характеристик строения.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="text" name="build_type" value="" placeholder="Укажите тип здания" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button id="specifications_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Сделать рассчет -->
    <div class="popup" data-rf_to="customers_price">
      <a href="javascript: off();" id="close" data-rf_from="customers_price"></a>
      <form id="calculation_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Укажите контактные данные и тип здания, для которого следует произвести рассчет.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="text" name="build_type" value="" placeholder="Укажите тип здания" required>
        <input type="text" name="link" value="" placeholder="Ссылка на файл с ТЗ *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <!-- <input type="file" name="file_tt" value="" id="file">
        <label for="file" class="file_placeholder">Прикрепить ТЗ </label> -->
        <button id="calculation_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Уточнить характеристики -->
    <div class="popup" data-rf_to="customers_search">
      <a href="javascript: off();" id="close" data-rf_from="customers_search"></a>
      <form id="manager_sup_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Укажите контактные данные, наш менеджер подберет для вас подходящее решение.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button id="manager_sup_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Условия сотрудничества -->
    <div class="popup" data-rf_to="partners_rules">
      <a href="javascript: off();" id="close" data-rf_from="partners_rules"></a>
      <form id="cooperation_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Узнайте о выгодах и условиях сотрудничества с ИЗМК.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button  id="cooperation_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

    <!-- Условия сотрудничества -->
    <div class="popup" data-rf_to="get_partner_status">
      <a href="javascript: off();" id="close" data-rf_from="get_partner_status"></a>
      <form id="condition_lip_form" action="javascript: off();" method="post" autocomplete="off" enctype="multipart/form-data">
        <legend>Станьте партнером Истринского ЗМК и развивайте бизнес вместе с нами.</legend>
        <input type="text" name="name" value="" placeholder="Ваше имя *" required>
        <input type="email" name="email" value="" placeholder="E-mail *" required>
        <input type="tel" name="tel" value="" placeholder="Номер для связи *" required>
        <input type="text" name="company" value="" placeholder="Название компании *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <button id="condition_lip_button" type="submit" name="button" class="button medium">Отправить </button>
      </form>
    </div>

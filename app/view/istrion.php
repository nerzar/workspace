<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
  global $services;
?>

      <header class="header__istrion">
        <img src="/dist/i/istrion-logo.png" width="360px" height="174px" alt="">
        <span>оптимизирует проекты</span>

        <h1>
          Программный комплекс для расчета несущих конструкций
          и оптимизации готовых проектов стальных зданий от Европейского разработчика
        </h1>
      </header>

      <main class="main__mezonin">
        <section class="istrion___stat">
          <div class="istrion___stat_count">
            <h3>--</h3>
            <p>-</p>
          </div>
          <div class="istrion___stat_content">
            <p>
              Конечный результат часто не совпадает с начальными планами.
              <br>
              Допустим, вы уже знаете, какой объект вам нужен.
              Казалось бы, осталось только разработать чертежи, получить
              МеталлоКонструкции и приступить к возведению здания.
            </p>

            <h4>Но на деле всё не так просто</h4>
            <p>
              Внесение любых правок (а они есть всегда!) потребует дополнительной
              проверки всего проекта. Именно от этого зависит, как пройдет
              строительство: без накладок и внеплановых затрат или в состоянии
              постоянного стресса!
            </p>
          </div>
        </section>

        <section class="istrion__advantages">
          <h2>Экономия вашего времени и точность расчетов</h2>
          <p>
            ISTRION позволяет проверить готовый КМ по основным критериям
            и внести исправления до начала реализации объекта. Вы удивитесь,
            сколько времени и лишних расходов сэкономит оптимизация.

            <br>

            Мы пересчитаем Ваш КМ на конструкции из ЕвроБалок или Балок
            Переменного Сечения, подготовим эскизные чертежи и все технические
            данные для корректного сравнения.
          </p>

          <h3>Как происходит расчет:</h3>
          <ol>
            <li>Сверяем готовый проект с изначальными потребностями.</li>
            <li>Проверяем соответствия загрузки ресурсов (чтобы не было лишних материалов). </li>
            <li>Рассчитываем итоговую стоимость проекта с учетом всех корректировок. </li>
            <li>Оцениваем риски: просчитываем вероятность не уложиться в требования тех. задания, не выполнить ряд задач или превысить бюджет.</li>
          </ol>
        </section>

        <section class="istrion___examples">
          <h2>Оптимизация проектов</h2>
          <div class="istrion___examples_wrapper">
            <div class="istrion___examples_item">
              <img src="/dist/i/istrion/1.jpg" width="1920px" height="1080px" alt="">
              <h3>ТЕРЕМСТРОИМ</h3>
              <span id="was">Было: 1 231 650</span>
              <span id="now">Стало: 1 071 000</span>
              <p>
                После сравнения готового проекта с изначальными потребностями
                Заказчика увеличили обьем здания за счет применения Еаробалок.
              </p>
            </div>

            <div class="istrion___examples_item">
              <img src="/dist/i/istrion/2.jpg" width="1920px" height="1080px" alt="">
              <h3>МСС</h3>
              <span id="was">Было: 27 540 000</span>
              <span id="now">Стало: 24 280 000</span>
              <p>
                С помощью ISTRION произвели подбор оптимальных сечений каркаса.
              </p>
            </div>

            <div class="istrion___examples_item">
              <img src="/dist/i/istrion/3.jpg" width="1920px" height="1080px" alt="">
              <h3>НПО Монолит</h3>
              <span id="was">Было: 5 046 900</span>
              <span id="now">Стало: 4 205 700</span>
              <p>
                Пересчитали проект на Балку Переменного Сечения в ISTRION.
              </p>
            </div>
          </div>
        </section>
        <section class="istrion__form white">
          <h2>Оптимизируйте свой проект в ISTRION уже сейчас</h2>
          <form id="istrion_list_form" action="javascript: off();" method="post" autocomplete="off">
            <input type="text" name="name" value="" placeholder="Ваше имя *" required>
            <input type="tel" name="tel" value="" placeholder="Телефон для связи *" required>
            <input type="email" name="email" value="" placeholder="E-mail *" required>
            <button  id="istrion_list_button" type="submit" name="button" class="button medium"> Получить показатели</button>
          </form>
        </section>
        <section class="istrion__form">

          <h2>ISTRION позволяет определить и устранить до 70% проблем уже на стадии разработки проекта КМ!</h2>
          <p>
             Наша компания обратилась в Истринский ЗМК с готовым проектом металлокаркаса промышленного холодильника. После того, как на провели оптимизацию проекта в ISTRION, его металлоемкость стала значительно ниже. Всем коллегам теперь советую проверять свой проект в ISTRION, чтобы избежать лишних трат  - рассказал Антон Синицин, представитель компании заказчика.
          </p>
        </section>
      </main>

<?php
  (defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
  global $services;
?>


      <header class="header_home">
        <h1 class="wow animate__fadeInDown" data-wow-duration=".5s">Здания из металлоконструкций</h1>
        <span id="sub_h1"class="wow animate__fadeInDown" data-wow-duration=".5s">по любым архитектурным решениям</span>

        <h2 class="wow animate__fadeInDown" data-wow-duration=".5s">
          Собственное производство металлокаркаса из Евробалок,
          балок переменного сечения, сортового проката
        </h2>
        <h3 class="wow animate__fadeInDown" data-wow-duration=".5s">Оптимизация проектов в ISTRION</h3>

        <a href="javascript: off()" data-rf_from="tech_task" data-wow-duration=".5s" class="button wow animate__fadeInDown" data-rf_from="tech_task_form">
          Отправить техническое задание
        </a>
      <main>
        <div class="header_home__stat">
          <div class="header_home__stat_item">
            <h4>400 м<sup>2</sup></h4>
            <span>в день</span>
          </div>
          <div class="header_home__stat_item">
            <h4>500 тонн</h4>
            <span>в месяц</span>
          </div>
          <div class="header_home__stat_item">
            <h4>6000 тонн</h4>
            <span>в год</span>
          </div>
        </div>
      </header>

      <section class="header_slider">
        <h2>Нас выбирают:</h2>
        <div class="swiper header_slider__content">
          <div class="swiper-wrapper">
            <?php
              for ($i=1; $i < 10; $i++) {
            ?>
            <div class="swiper-slide">
              <img src="/dist/i/clients/<?php echo $i ?>.gif" width="auto" width="auto" alt="Клиенты Истринского завода металлоконструкций">
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </section>

      <section class="sert">
        <div class="sert__wrapper">
          <h2 class="wow animate__backInRight" data-wow-offset="-10" data-wow-duration=".5s">Вся наша продукция сертифицирована</h2>
          <p class="wow animate__backInRight" data-wow-offset="-10" data-wow-duration=".8s">
            Наша компания прошла сертификацию в "Центре сертификации поставщиков"
            и включена в Реестр Проверенных Организаций.
            <br><br>
            Истринский ЗМК имеет аргументированное право на участие в тендерах
            и государственных заказах.
          </p>
        </div>
        <img class="wow animate__backInRight" data-wow-offset="-10" data-wow-duration="1s" src="/dist/i/homepage/sert-2.jpg" width="998px" height="1428px" alt="Сертификат Истринского ЗМК о включении в реестр проверенных организаций.">
      </section>

      <section class="today">
        <h2 class="wow animate__backInUp" data-wow-offset="-10" data-wow-duration=".8s">Истринский ЗМК сегодня</h2>
        <div class="today__cards">
          <div class="today__cards_item wow animate__backInRight" id="bg-1" data-wow-offset="-10" data-wow-duration=".7s">
            <div class="today__cards_item_filter">
              <h3>53</h3>
              <span>проекта федерального значения</span>
            </div>
          </div>
          <div class="today__cards_item wow animate__backInRight" id="bg-2" data-wow-offset="-10" data-wow-duration="1.0s">
            <div class="today__cards_item_filter">
              <h3>1200</h3>
              <span>довольных клиентов за все время работы</span>
            </div>
          </div>
          <div class="today__cards_item wow animate__backInRight" id="bg-3" data-wow-offset="-10" data-wow-duration="1.2s">
              <div class="today__cards_item_filter">
              <h3>500</h3>
              <span>тонн стали в месяц</span>
            </div>
          </div>
          <div class="today__cards_item wow animate__backInRight" id="bg-4" data-wow-offset="-10" data-wow-duration="1.5s">
            <div class="today__cards_item_filter">
              <h3>40%</h3>
              <span>клиентов приходят по рекомендации</span>
            </div>
          </div>
        </div>
        <h4 class="wow animate__backInUp" data-wow-offset="-10" data-wow-duration=".8s">Больше информации о нас и реализованных проектах <br> смотрите в нашем референс-листе</h3>
        <a href="javascript: off();" data-rf_from="reference_list" class="button medium wow animate__backInUp"data-wow-offset="-10" data-wow-duration="1s">Получить референс-лист </a>
      </section>

      <section class="advantages">
        <div class="advantages__content wow animate__fadeInUp" data-wow-offset="-10" data-wow-duration="1s">
          <div class="advantages__content_item">
            <h2>15 лет на рынке металлоконструкций</h2>
            <p>Наша компания представлена на рынке услуг с 2006 года</p>
          </div>
        </div>
        <div class="advantages__nav">
          <a href="javascript: off();" class="open" data-rf_adv-h="15 лет на рынке металлоконструкций" data-rf_adv-p="Наша компания представлена на рынке услуг с 2006 года" data-rf_adv-a=""><span></span> Опыт 15 лет</a>
          <a href="javascript: off();" data-rf_adv-h="Здание под ключ" data-rf_adv-p="Развитая сеть партнеров-строителей в 16 субъектах РФ" data-rf_adv-a="Партнерам" data-rf_adv-al="/partners"><span></span> Здание под ключ</a>
          <a href="javascript: off();" data-rf_adv-h="Авторский надзор" data-rf_adv-p="Наш инженер приедет и проведет проверку металлоконструкций через год после поставки" data-rf_adv-a=""><span></span> Авторский надзор</a>
          <a href="javascript: off();" data-rf_adv-h="Гарантия ФЗ №384" data-rf_adv-p="Гарантия на все металлоконструкции по ФЗ №384" data-rf_adv-a=""><span></span> Гарантия ФЗ №384</a>
        </div>
      </section>

      <section class="istrion">
        <div class="istrion__wrapper wow animate__fadeInUp" data-wow-offset="-10" data-wow-duration="1s">
          <h2>Оптимизация проектов в ISTRION</h2>
          <p>
            Инновационный программный комплекс, <br>
            который позволяет сократить затраты до 10%
          </p>
          <a href="/istrion" class="button medium">Узнать больше <span> </span> </a>
        </div>
      </section>

      <section class="istrion by_size">
        <div class="istrion__wrapper by_size wow animate__fadeInUp" data-wow-offset="-10" data-wow-duration="1s">
          <h2>Здание по вашим размерам</h2>
          <p>
            Рассчитаем несущую способность здания с учетом планируемой технологии,
            снеговой и ветровой нагрузок. Учтем ваши пожелания по срокам строительства
            и назначению здания. Предложим оптимальное решение из Евробалок,
            Балок переменного сечения или сортового проката.
          </p>
          <a href="javascript: off();" data-rf_from="tech_task" class="button medium">Заполнить техническое задание </a>
        </div>
      </section>
    </main>

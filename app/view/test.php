<?php
(defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
global $services;
?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet" />

<header class="header_home">
    <h1 class="wow animate__fadeInDown" data-wow-duration=".5s">Здания<br> из металлоконструкций</h1>
    <span id="sub_h1" class="wow animate__fadeInDown" data-wow-duration=".5s">по любым архитектурным решениям</span>

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
            for ($i = 1; $i < 10; $i++) {
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

<section class="catalogue">
    <div class="catalogue__wrapper">
        <h2 class="wow animate__fadeIn" data-wow-offset="-10" data-wow-duration="1.0s">
            Каталог продукции
        </h2>
        <div class="catalogue__items">
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="-10" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/1.jpg)"></div>
                <h3>Проектирование и разработка разделов КМ и КМД</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="-5" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/2.jpg)"></div>
                <h3>Изготовление металлоконструкций и металлокаркасов</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/3.jpg)"></div>
                <h3>Производственные здания</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/4.jpg)"></div>
                <h3>Торговые центры</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/5.jpg)"></div>
                <h3>Офисные и административные здания</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/6.jpg)"></div>
                <h3>Ангары</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/7.jpg)"></div>
                <h3>Склады</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/8.jpg)"></div>
                <h3>Цеха</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/9.jpg)"></div>
                <h3>Здания с/х назначения</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/10.jpg)"></div>
                <h3>Спортивные сооружения, арены</h3>
                <a href="#" class="button"> подробнее </a>
            </div>

            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/11.jpg)"></div>
                <h3>Автосервисы, автосалоны, автомойки</h3>
                <a href="#" class="button"> подробнее </a>
            </div>

            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/12.jpg)"></div>
                <h3>Мезонины и антресольные складские этажи</h3>
                <a href="#" class="button"> подробнее </a>
            </div>

            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/13.jpg)"></div>
                <h3>Модульные здания для энергетики</h3>
                <a href="#" class="button"> подробнее </a>
            </div>

            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/14.jpg)"></div>
                <h3>
                    Модульные здания для рентгенпрома и медицинского назначения
                </h3>
                <a href="#" class="button"> подробнее </a>
            </div>

            <div class="catalogue__items_item wow animate__fadeIn" data-wow-offset="0" data-wow-duration="1.0s">
                <div class="catalogue__cards_item_image" style="background-image: url(/dist/i/catalogue/15.jpg)"></div>
                <h3>Оптимизация проектов в Istrion</h3>
                <a href="#" class="button"> подробнее </a>
            </div>
        </div>
    </div>
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
    <h4 class="wow animate__backInUp" data-wow-offset="-10" data-wow-duration=".8s">Больше информации о нас и
        реализованных проектах <br> смотрите в нашем референс-листе</h3>
        <a href="javascript: off();" data-rf_from="reference_list" class="button medium wow animate__backInUp" data-wow-offset="-10" data-wow-duration="1s">Получить референс-лист </a>
</section>



<section class="stages">
    <h2 class="wow animate__backInUp" data-wow-offset="-10" data-wow-duration=".5s">
        Этапы работы
    </h2>
    <div class="stages_items">
        <div class="stages_item wow animate__backInLeft" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">1</p>
                <h3>
                    Формирование<br />
                    технического задания
                </h3>
                <p>
                    Путем консультации с инженером, подбираем оптимальное решение.
                    Наша команда описывает технические решения.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__backInDown" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">2</p>
                <h3>
                    Подготовка коммерческого<br />
                    предложения
                </h3>
                <p style="padding-bottom: 1vw">
                    Готовим сметы и расчет стоимости строительства согласно
                    технического задания и предоставляем Вам на согласование в день
                    обращения.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__backInRight" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">3</p>
                <h3>
                    Заключение<br />
                    договора
                </h3>
                <p>
                    Согласовываем наименование работ, сроки их выполнения, формат
                    оплаты и другие условия. Заключаем контракт.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__backInLeft" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">4</p>
                <h3>Проектирование</h3>
                <p>
                    Согласование результата работ с Заказчиком и при необходимости
                    его корректировка. Утверждение проекта в производство работ.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__fadeIn" data-wow-duration="3s" style="visibility: hidden">
            <div class="stages_item-wrapper">
                <p class="stages_number">5</p>
                <h3>Земляные работы</h3>
                <p>Планировка участка строительства.</p>
            </div>
        </div>

        <div class="stages_item wow animate__backInRight" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">6</p>
                <h3>Заливка фундамента</h3>
                <p>
                    Обустройство котлована: устройство опалубки, установка
                    армокаркаса с анкерной группой и заливка фундаментов с
                    последующей гидроизоляцией.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__backInLeft" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">7</p>
                <h3>Изготовление и доставка металлоконструкций</h3>
                <p>Сбор конструкций (установка, сварка, покраска).</p>
            </div>
        </div>

        <div class="stages_item wow animate__backInUp" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">8</p>
                <h3>Монтажные работы</h3>
                <p>
                    Выполняем строительно-монтажные работы по возведение
                    металлокаркаса, ограждающих конструкций стен и кровли. Установка
                    окон/ворот/дверей. Заливка полов, цоколя и отмостки.
                </p>
            </div>
        </div>

        <div class="stages_item wow animate__backInRight" data-wow-duration="1s">
            <div class="stages_item-wrapper">
                <p class="stages_number">9</p>
                <h3>Сдача объекта</h3>
                <p>
                    Передаём заказчику все сертификаты качества на материалы и
                    гарантийное обязательство на работы. При необходимости
                    осуществляем ввод объекта в эксплуатацию.
                </p>
            </div>
        </div>
    </div>
    <a href="javascript: off()" data-rf_from="customers_params" class="button medium"><span>Посмотреть, как
            изготавливаем металлоконструкции</span></a>
</section>


<section class="sert">
    <div class="sert__wrapper">
        <h2 class="wow animate__backInRight" data-wow-offset="-10" data-wow-duration=".5s">Вся наша продукция
            сертифицирована</h2>
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

<section class="advantages">
    <div class="advantages__content wow animate__fadeInUp" data-wow-offset="-10" data-wow-duration="1s">
        <div class="advantages__content_item">
            <h2>15 лет на рынке металлоконструкций</h2>
            <p>Наша компания представлена на рынке услуг с 2006 года</p>
        </div>
    </div>
    <div class="advantages__nav">
        <a href="javascript: off();" class="open" data-rf_adv-h="15 лет на рынке металлоконструкций" data-rf_adv-p="Наша компания представлена на рынке услуг с 2006 года" data-rf_adv-a=""><span></span> Опыт
            15 лет</a>
        <a href="javascript: off();" data-rf_adv-h="Здание под ключ" data-rf_adv-p="Развитая сеть партнеров-строителей в 16 субъектах РФ" data-rf_adv-a="Партнерам" data-rf_adv-al="/partners"><span></span> Здание под ключ</a>
        <a href="javascript: off();" data-rf_adv-h="Авторский надзор" data-rf_adv-p="Наш инженер приедет и проведет проверку металлоконструкций через год после поставки" data-rf_adv-a=""><span></span> Авторский надзор</a>
        <a href="javascript: off();" data-rf_adv-h="Гарантия ФЗ №384" data-rf_adv-p="Гарантия на все металлоконструкции по ФЗ №384" data-rf_adv-a=""><span></span> Гарантия ФЗ
            №384</a>
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

<section class="our_works">
    <h2 class="wow animate__fadeInDown" data-wow-offset="-10" data-wow-duration=".5s">
        наши работы
    </h2>
    <div class="our_works-works">
        <div class="our_works-row">
            <?php
            $j = 0.5;
            for ($i = 1; $i < 13; $i++) {

            ?>
                <div class="our_works-item wow animate__bounceInUp" data-wow-offset="-10" data-wow-duration="<?php echo $j ?>s" style="background-image: url(/dist/i/ourworks/<?php echo $i ?>.jpg)"></div>
            <?php
                $j = $j + 0.5;
                ($j > 1.5) ? $j = 0.5 : $j;
            }
            ?>
        </div>
    </div>
</section>
</main>
<?php
(defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
global $services;
?>

<div class="feedback wow animate__fadeInUp" data-wow-offset="-10" data-wow-duration="1s">
    <form id="footer_list_form" class="feedback__form" action="javascript: off();" method="post" autocomplete="off">
        <legend>Обратная связь</legend>
        <input type="text" name="name" value="" placeholder="*Ваше имя:" required>
        <input type="text" name="email" value="" placeholder="E-mail: *" required>
        <input type="text" name="tel" value="" placeholder="Телефон: *" required>
        <input type="hidden" name="apiCommand" value="send-form">
        <textarea name="msg" placeholder="Сообщение"></textarea>
        <button id="footer_list_button" type="submit" name="button" class="button">Отправить </button>
    </form>
    <img src="/dist/i/report.jpg" width="1080px" height="1080px" alt="Графити Истринского завода металлоконструкций">
</div>

<footer class="footer">
    <div class="footer__brand">
        <a href="/" id="logo">
            <img src="/dist/i/logo_w.png" width="1430px" height="355px"
                alt="Логотип Истринского завода металлоконструкций">
        </a>
        <h5>
            Информация, размещенная на сайте, не является публичной офертой.
        </h5>
    </div>
    <div class="footer__nav">
        <a href="/e-module-builds" class="link">Модульные здания для энергетики</a>
        <a href="/mezzanine" class="link">Мезонин</a>
        <a href="/istrion" class="link">Оптимизация проектов КМ</a>
        <a href="/to-customers" class="link">Заказчикам</a>
        <a href="/partners" class="link">Партнерам</a>
        <a href="/blog" class="link">Новости</a>
        <a href="/contacts" class="link">Контакты</a>
    </div>
    <div class="footer__info">
        <address>
            Мы находимся: <br>
            Московская область, г. Истра, ул. Заводская, д. 5 GPS: 55.918891, 36.815049
        </address>
        <a href="tel:+7-495-994-42-78" class="link roistat-phone" id="tel"><span></span>+7-495-994-42-78</a>
        <a href="mailto:zakaz@istra-zmk.ru" class="link" id="email"><span></span>zakaz@istra-zmk.ru</a>
        <div class="footer__info_socbar">
            <a href="https://vk.com/istrinskyzmk" target="_blank" rel="noopener"> <svg class="t-sociallinks__svg"
                    version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px"
                    viewBox="0 0 99 99" enable-background="new 0 0 99 99" xml:space="preserve">
                    <desc>VK</desc>
                    <path style="fill:#fff;" fill-rule="evenodd" clip-rule="evenodd"
                        d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98ZM22 34C22.4442 55.3198 33.1042 68.1323 51.7933 68.1323H52.8527V55.9351C59.7202 56.6182 64.9132 61.6409 66.9973 68.1323H76.7008C74.0359 58.4292 67.0314 53.0649 62.658 51.0149C67.0314 48.4866 73.1814 42.3367 74.6505 34H65.8353C63.922 40.7649 58.251 46.915 52.8527 47.4958V34H44.0374V57.6433C38.5707 56.2766 31.6692 49.6482 31.3617 34H22Z">
                    </path>
                </svg> </a>
            <a href="https://t.me/istrinskyzmk" target="_blank" rel="noopener"> <svg class="t-sociallinks__svg"
                    version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 60 60"
                    xml:space="preserve">
                    <desc>Telegram</desc>
                    <path style="fill:#fff;"
                        d="M30 0C13.4 0 0 13.4 0 30s13.4 30 30 30 30-13.4 30-30S46.6 0 30 0zm16.9 13.9l-6.7 31.5c-.1.6-.8.9-1.4.6l-10.3-6.9-5.5 5.2c-.5.4-1.2.2-1.4-.4L18 32.7l-9.5-3.9c-.7-.3-.7-1.5 0-1.8l37.1-14.1c.7-.2 1.4.3 1.3 1z">
                    </path>
                    <path style="fill:#434141;" d="M22.7 40.6l.6-5.8 16.8-16.3-20.2 13.3"></path>
                </svg> </a>
            <!-- <a href="https://www.instagram.com/istra.zmk/" target="_blank" title="Инстаграм Истринского завода металлоконструкций"></a>
          <a href="https://www.facebook.com/istrionzmk/" target="_blank" title="Фейсбук Истринского завода металлоконструкций"></a>-->
        </div>
    </div>
</footer>
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id;
    w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id +
        "/init?referrer=" + encodeURIComponent(d.location.href);
    var js = d.createElement(s);
    js.charset = "UTF-8";
    js.async = 1;
    js.src = p + h + u;
    var js2 = d.getElementsByTagName(s)[0];
    js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '62470d8fadfff24fe7c7be144fe7ee0d');
</script>
<script src="/dist/bundle.min.js" charset="utf-8"></script>


<!— Yandex.Metrika counter —>
    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(57373260, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/57373260" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!— /Yandex.Metrika counter —>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163917298-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-163917298-1');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '283571302860225');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=283571302860225&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
        </body>

        </html>
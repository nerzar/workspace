<?php
(defined('DSE') && defined('DIR_ROOT') && defined('DIR_APP')) or exit('Access denied!');
global $services;
?>
<style>
.today .today__cards {
    width: 100%;
    height: auto;
    padding: 0;
    margin: .5em auto;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    grid-column-gap: 2em;
    grid-row-gap: 2em;
}

.blog__item p {
    font-size: 1.1em;
    font-weight: 400;

    line-height: normal;
}

.blog__item {
    overflow: hidden;
    position: relative;
}

.blog__item svg {
    position: absolute;
    right: 15px;
    top: 15px;
    z-index: 1;
}

.readmore {
    justify-content: space-between;
    display: flex;
}

.blog__item a {
    text-decoration: none;
    color: black;

}

.blog__item a p {
    transition: opacity .3s;
}

.blog__item a:hover {
    color: #ff3b30;
}

.blog__item img {
    transition: transform .4s;
}

@media screen and (max-width: 1000px) {
    .today .today__cards {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        grid-row-gap: 1em;
    }
}

@media screen and (max-width: 720px) {
    .today .today__cards {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
        grid-row-gap: 1em;
    }
}
</style>
<main class="main__blog">
    <section class="partners__header blog__header">
        <h1>Новости</h1>
    </section>
    <section class="blog today ">
        <div class="today__cards blog__items ">
            <?php
            $groupIds = array(-211000125); // айди нужных групп через запятую
            $posts = array();

            foreach ($groupIds as &$gi) {
                $response = file_get_contents("https://api.vk.com/method/wall.get?owner_id=$gi&count=12&v=5.131&access_token=92e5480692e5480692e5480658929c0543992e592e54806f3db30e1bcb717bda36f0ce7"); //ввести токен вк
                $decoded_arr = json_decode($response, true);
                // формируем массив с постами
                for ($i = 0; $i < count($decoded_arr['response']['items']); $i++) {
                    $photoarray = $decoded_arr['response']['items'][$i]['attachments'][0]['photo']['sizes'];
                    $post = array(
                        'ownerId' => $decoded_arr['response']['items'][$i]['owner_id'],
                        'postId' => $decoded_arr['response']['items'][$i]['id'],
                        'hash' => $decoded_arr['response']['items'][$i]['hash'],
                        'views' => $decoded_arr['response']['items'][$i]['views']['count'],
                        'text' => $decoded_arr['response']['items'][$i]['text'],
                        'date' => date("d-m-Y", strtotime($decoded_arr['response']['items'][$i]['date'])),
                        'picture' => $photoarray[count($photoarray) - 1]['url']
                    );
                    array_push($posts, $post);
                }
            }

            // отрисовываем элементы
            foreach ($posts as &$p) {
                $p['picture'] ? $p['picture'] : $p['picture'] = "/dist/i/homepage/slider-bg-3.jpg"; // если в посте нет картинки ставим заглушку
            ?>
            <div class="blog__item vk_item animate__fadeIn animate__animated" stle="">
                <a href="https://vk.com/istrinskyzmk" title="Истринский ЗМК Вконтакте">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#new_logo_vk_with_text__a)">
                            <g clip-path="url(#new_logo_vk_with_text__b)">

                                <path
                                    d="M11.5 24h1c5.44 0 8.15 0 9.83-1.68C24 20.64 24 17.92 24 12.5v-1.02c0-5.4 0-8.12-1.67-9.8C20.65 0 17.93 0 12.5 0h-1C6.06 0 3.35 0 1.67 1.68 0 3.36 0 6.08 0 11.5v1.02c0 5.4 0 8.12 1.68 9.8C3.36 24 6.08 24 11.5 24z"
                                    fill="#07F"></path>
                                <path
                                    d="M12.77 17.29c-5.47 0-8.59-3.75-8.72-9.99h2.74c.09 4.58 2.11 6.52 3.71 6.92V7.3h2.58v3.95c1.58-.17 3.24-1.97 3.8-3.95h2.58a7.62 7.62 0 01-3.51 4.98 7.9 7.9 0 014.11 5.01h-2.84a4.94 4.94 0 00-4.14-3.57v3.57h-.31z"
                                    fill="#fff"></path>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="new_logo_vk_with_text__a">
                                <path fill="#fff" transform="translate(.001)" d="M0 0h136v24H0z"></path>
                            </clipPath>
                            <clipPath id="new_logo_vk_with_text__b">
                                <path fill="#fff" transform="translate(0 -12)" d="M0 0h136v48H0z"></path>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <img src="<? print $p['picture'] ?>" alt="" style="width:100%;" alt="Истринский ЗМК">
                <p>
                    <? print mb_strimwidth($p['text'], 0, 250, " ...") ?>
                </p>

                <p class="readmore"><small style="opacity:0.6;">
                        <? print $p['date'] ?>
                    </small><a
                        href="https://vk.com/istrinskyzmk?w=wall<? print $p['ownerId'] ?>_<? print $p['postId'] ?>">Читать
                        далее..</a></p>
            </div>
            <?

            }
            ?>
        </div>
    </section>

</main>
<?php
	/**
	 * Template Name: Home Page
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
    }

    $post_id = get_the_ID();

    $life = get_post_meta($post_id, 'life', 1 );
    $mtc = get_post_meta($post_id, 'mtc', 1 );
    $telegram = get_post_meta($post_id, 'telegram', 1 );
    $vk = get_post_meta($post_id, 'vk', 1 );
    $slider = get_post_meta($post_id, 'slider_item', 1 );

    $modal_image = get_post_meta($post_id, 'modal_image', 1 );
    $modal_title = get_post_meta($post_id, 'modal_title', 1 );
    $modal_description = get_post_meta($post_id, 'modal_description', 1 );
    $modal_input_error = get_post_meta($post_id, 'modal_input_error', 1 );
    $modal_success_title = get_post_meta($post_id, 'modal_success_title', 1 );
    $modal_success_description = get_post_meta($post_id, 'modal_success_description', 1 );
    $modal_error_title = get_post_meta($post_id, 'modal_error_title', 1 );
    $modal_error_description = get_post_meta($post_id, 'modal_error_description', 1 );
    $modal_button_title = get_post_meta($post_id, 'modal_button_title', 1 );
    $modal_button_again_title = get_post_meta($post_id, 'modal_button_again_title', 1 );
    $repair_title = get_post_meta($post_id, 'repair_title', 1 );
    $repair_description = get_post_meta($post_id, 'repair_description', 1 );
    $repair_image = get_post_meta($post_id, 'repair_image', 1 );
    $repair_list = get_post_meta($post_id, 'repair_list', 1 );
    $advantages_title_1 = get_post_meta($post_id, 'advantages_title_1', 1 );
    $advantages_description_1 = get_post_meta($post_id, 'advantages_description_1', 1 );
    $advantages_title_2 = get_post_meta($post_id, 'advantages_title_2', 1 );
    $advantages_description_2 = get_post_meta($post_id, 'advantages_description_2', 1 );
    $advantages_title_3 = get_post_meta($post_id, 'advantages_title_3', 1 );
    $advantages_description_3 = get_post_meta($post_id, 'advantages_description_3', 1 );
    $we_do_main_title = get_post_meta($post_id, 'we_do_main_title', 1 );
    $we_do_title_1 = get_post_meta($post_id, 'we_do_title_1', 1 );
    $we_do_description_1 = get_post_meta($post_id, 'we_do_description_1', 1 );
    $we_do_image_1 = get_post_meta($post_id, 'we_do_image_1', 1 );
    $we_do_title_2 = get_post_meta($post_id, 'we_do_title_2', 1 );
    $we_do_description_2 = get_post_meta($post_id, 'we_do_description_2', 1 );
    $we_do_image_2 = get_post_meta($post_id, 'we_do_image_2', 1 );
    $we_do_title_3 = get_post_meta($post_id, 'we_do_title_3', 1 );
    $we_do_description_3 = get_post_meta($post_id, 'we_do_description_3', 1 );
    $we_do_image_3 = get_post_meta($post_id, 'we_do_image_3', 1 );
    $we_do_title_4 = get_post_meta($post_id, 'we_do_title_4', 1 );
    $we_do_description_4 = get_post_meta($post_id, 'we_do_description_4', 1 );
    $we_do_image_4 = get_post_meta($post_id, 'we_do_image_4', 1 );

	get_header();
    if ( have_posts() ): ?>
<?php while ( have_posts() ): the_post() ?>
<script>
    const modalTitleSuccess = "<?= $modal_success_title;?>",
        modalDescriptionSuccess = "<?= $modal_success_description;?>",
        modalTitleError = "<?= $modal_error_title;?>",
        modalDescriptionError = "<?= $modal_error_description;?>",
        postId = '<?=$post_id;?>';
</script>
<header class="header">
    <div class="contacts">
        <div class="container contacts__container">
            <a class="contacts__logo"
               href="/">
                <div class="contacts__logo-image-wrapper">
                    <img class="contacts__logo-image"
                         src="/wp-content/themes/sm24/src/icons/edited.b2b9a8.svg"
                         alt="sm24.by"></div>
                <div class="contacts__logo-name">SM24.BY</div>
            </a>
            <div class="contacts__block">
                <div class="contacts__phones">
                    <a class="contacts__phones-item contacts__phones-item_life"
                       href="tel:<?=$life;?>"><?=$life;?></a>
                    <a class="contacts__phones-item contacts__phones-item_mts"
                       href="tel:<?=$mtc;?>"><?=$mtc;?></a>
                    <a class="contacts__phones-order-call"
                       href="javascript:void(0)">заказать звонок</a>
                </div>
                <div class="contacts__socials">
                    <a class="contacts__socials-item contacts__socials-item_telegram"
                       href="https://telegram.im/<?=$telegram;?>"
                       target="_blank"></a>
                    <a class="contacts__socials-item contacts__socials-item_vk"
                       href="<?=$vk;?>"
                       target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-slider">
        <div class="swiper-container main-slider__swiper">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $slide) :
                    $title = $slide['title'];
                    $image = $slide['image'];
                    $description = $slide['description'];
                    $button_title = $slide['button_title'];                    
                ?>
                <div class="swiper-slide main-slider__slide">
                    <div class="container main-slider__slide-container">
                        <div class="main-slider__slide-wrapper">
                            <div class="main-slider__content-item"
                                 data-swiper-parallax-y="-100"
                                 data-swiper-parallax-opacity="0">
                                <h2 class="main-slider__content-item-title"><?=$title;?></h2>
                                <p class="main-slider__content-item-description"><?=$description;?>
                                </p>
                                <a class="free-consultation"
                                   href="javascript:void(0)"><?=$button_title;?></a>
                            </div>
                            <img class="swiper-lazy main-slider__img"
                                 data-src="<?=$image;?>">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination main-slider__pagination"></div>
        </div>
    </div>
</header>
<main class="main">
    <div class="repair">
        <div class="container">
            <div class="repair__wrapper">
                <div class="repair__text">
                    <h4 class="repair__title"><?=$repair_title;?>
                    </h4>
                    <p class="repair__description"><?=$repair_description;?></p>
                    <ul class="repair__list">
                        <?php foreach ($repair_list as $repair_item) : ?>
                        <li class="repair__item"><?=$repair_item;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="repair__image-wrapper"><img class="repair__image"
                         src="<?=$repair_image;?>"></div>
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="container">
            <div class="advantages__wrapper">
                <div class="advantages__col">
                    <div class="advantage">
                        <div class="advantage__number">01</div>
                        <div class="advantage__text">
                            <h5 class="advantage__title"><?=$advantages_title_1;?></h5>
                            <p class="advantage__description"><?=$advantages_description_1;?></p>
                        </div>
                    </div>
                </div>
                <div class="advantages__col">
                    <div class="advantage">
                        <div class="advantage__number">02</div>
                        <div class="advantage__text">
                            <h5 class="advantage__title"><?=$advantages_title_2;?></h5>
                            <p class="advantage__description"><?=$advantages_description_2;?></p>
                        </div>
                    </div>
                </div>
                <div class="advantages__col">
                    <div class="advantage">
                        <div class="advantage__number">03</div>
                        <div class="advantage__text">
                            <h5 class="advantage__title"><?=$advantages_title_3;?></h5>
                            <p class="advantage__description"><?=$advantages_description_3;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="what-we-do">
        <div class="container">
            <div class="what-we-do__title"><?=$we_do_main_title;?></div>
            <div class="what-we-do__wrapper">
                <div class="what-we-do__col">
                    <div class="what-we-do-item">
                        <img class="what-we-do-item__icon"
                             src="<?=$we_do_image_1;?>">
                        <h6 class="what-we-do-item__title"><?=$we_do_title_1;?></h6>
                        <p class="what-we-do-item__description"><?=$we_do_description_1;?></p>
                    </div>
                </div>
                <div class="what-we-do__col">
                    <div class="what-we-do-item">
                        <img class="what-we-do-item__icon"
                             src="<?=$we_do_image_2;?>">
                        <h6 class="what-we-do-item__title"><?=$we_do_title_2;?></h6>
                        <p class="what-we-do-item__description"><?=$we_do_description_2;?></p>
                    </div>
                </div>
                <div class="what-we-do__col">
                    <div class="what-we-do-item">
                        <img class="what-we-do-item__icon"
                             src="<?=$we_do_image_3;?>">
                        <h6 class="what-we-do-item__title"><?=$we_do_title_3;?></h6>
                        <p class="what-we-do-item__description"><?=$we_do_description_3;?></p>
                    </div>
                </div>
                <div class="what-we-do__col">
                    <div class="what-we-do-item">
                        <img class="what-we-do-item__icon"
                             src="<?=$we_do_image_4;?>">
                        <h6 class="what-we-do-item__title"><?=$we_do_title_4;?></h6>
                        <p class="what-we-do-item__description"><?=$we_do_description_4;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="work-order">
        <div class="container">
            <div class="work-order__title">Порядок работы</div>
            <div class="work-order__wrapper">
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">01</div>
                        <div class="order-item__title">Вызов мастера</div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">02</div>
                        <div class="order-item__title">диагностика</div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">03</div>
                        <div class="order-item__title">Ремонт</div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">04</div>
                        <div class="order-item__title">оплата</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="destruction">
        <div class="container">
            <h5 class="destruction__title">Частые неисправности стиральных машин</h5>
            <p class="destruction__description">Рекомендуем получить бесплатную консультацию по
                неисправности Вашей техники</p>
            <div class="destruction__wrapper">
                <div class="destruction__image-wrapper"><img class="destruction__image"
                         src="/wp-content/themes/sm24/src/icons/item_2.9e3105.png"></div>
                <ul class="destruction__list">
                    <li class="destruction__item">Не включается стиральная машина</li>
                    <li class="destruction__item">Подсветка кода неисправности</li>
                    <li class="destruction__item">Неисправность двигателя</li>
                    <li class="destruction__item">Не вращается барабан</li>
                    <li class="destruction__item">Стиральная машина не открывается</li>
                    <li class="destruction__item">Протечки уплотнительной манжеты</li>
                    <li class="destruction__item">Не нагревается вода</li>
                    <li class="destruction__item">Протечки шлангов</li>
                    <li class="destruction__item">Течь из под люка</li>
                    <li class="destruction__item">Не работает слив</li>
                    <li class="destruction__item">Не включается стиральная машина</li>
                    <li class="destruction__item">Подсветка кода неисправности</li>
                    <li class="destruction__item">Неисправность двигателя</li>
                    <li class="destruction__item">Не вращается барабан</li>
                    <li class="destruction__item">Стиральная машина не открывается</li>
                    <li class="destruction__item">Протечки уплотнительной манжеты</li>
                    <li class="destruction__item">Не нагревается вода</li>
                    <li class="destruction__item">Протечки шлангов</li>
                    <li class="destruction__item">Течь из под люка</li>
                    <li class="destruction__item">Не работает слив</li>
                </ul>
                <div class="destruction__button-wrapper"><a
                       class="free-consultation destruction__button"
                       href="javascript:void(0)">Бесплатная Консультация</a></div>
            </div>
        </div>
    </div>
    <div class="marks">
        <div class="container">
            <h5 class="marks__title">Чиним все основные марки бытовой техники</h5>
            <p class="marks__description">Если вашей стиралки нету в списке, то мы всё равно ее
                починим</p>
            <div class="marks__list">
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m1.c47054.png">
                        <h6 class="mark__title">AEG</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m2.166302.png">
                        <h6 class="mark__title">Ardo</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m3.e861e0.png">
                        <h6 class="mark__title">Ariston</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m4.d8a26c.png">
                        <h6 class="mark__title">Miele</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m5.4a02e5.png">
                        <h6 class="mark__title">Neff</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m6.3f024f.png">
                        <h6 class="mark__title">Sumsung</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m7.2b3984.png">
                        <h6 class="mark__title">Siemens</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m8.5cc648.png">
                        <h6 class="mark__title">Smeg</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m9.d1a17d.png">
                        <h6 class="mark__title">Whirlpool</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m11.e612a5.png">
                        <h6 class="mark__title">Candy</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m12.9ae073.png">
                        <h6 class="mark__title">Electrolux</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m13.71d4f8.png">
                        <h6 class="mark__title">Gorenje</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m14.f660c9.png">
                        <h6 class="mark__title">Hansa</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m15.b79c3d.png">
                        <h6 class="mark__title">Indesit</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m16.aa87ac.png">
                        <h6 class="mark__title">Kaiser</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m17.83fed0.png">
                        <h6 class="mark__title">LG</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m18.252aa3.png">
                        <h6 class="mark__title">Zanussi</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m19.c4f955.png">
                        <h6 class="mark__title">Asko</h6>
                    </div>
                </div>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="/wp-content/themes/sm24/src/icons/m20.abfbef.png">
                        <h6 class="mark__title">Bosch</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-content">
        <div class="container">
            <div class="text-content__wrapper">
                <div class="text-content__image-wrapper "><img class="text-content__image"
                         src="/wp-content/themes/sm24/src/icons/item_3.5a2184.png"></div>
                <div class="text-content__text">
                    <div class="text-content__title">Можно ли отремонтировать машинку в Минске
                        по приемлемым ценам?</div>
                    <div class="text-content__description editor-content">
                        <p>Любая техника имеет свой срок службы и каждый агрегат рано или поздно
                            выходит из строя. Именно поэтому одной из самых распространенных
                            услуг является ремонт стиральных машин в Минске.</p>
                        <p>Вряд ли сейчас можно найти семью без столь нужного агрегата, различие
                            может быть только в объемах и частоте стирок, причем чем чаще
                            эксплуатируется агрегат, тем скорее приходят в негодность детали и
                            чаще требуется обслуживать вашу технику. Зачастую, цены на ремонт
                            стиралок в Минске не очень отличаются от области, но могут разниться
                            исходя из причины поломки, сложности починки, стоимости замененных
                            деталей и комплектующих. Услуга может стоить дешевле или дороже в
                            зависимости от того, где именно мастера берут запчасти, какая
                            наценка и пр.</p>
                        <p>В «SM24» обслуживание вашей техники с заменых деталей обходится
                            дешевле за счет прямых закупок, комплектующих по заводской цене от
                            большинства производителей.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-content">
        <div class="container">
            <div class="text-content__wrapper">
                <div class="text-content__image-wrapper text-content__image-wrapper_left"><img
                         class="text-content__image"
                         src="/wp-content/themes/sm24/src/icons/item_4.1f2e0e.png"></div>
                <div class="text-content__text">
                    <div class="text-content__title">95% ремонтов стиральных машин производится
                        на дому</div>
                    <div class="text-content__description editor-content">
                        <p>К счастью, уже нет необходимости везти технику в мастерскую, чтобы ее
                            починить. Практически любая работа в данной сфере услуг может быть
                            выполнена даже в день обращения, при условии, что владелец
                            максимально точно описал характер проблемы мастеру, а в сервисном
                            центре имеются запчасти для этой конкретной модели.</p>
                        <p>Но не только возможность исправить машинку в домашних условиях
                            привлекает людей – установка тоже требует внимательного отношения и
                            соответствующих навыков. Опыт работы «SM24» показывает, что именно
                            неправильное подключение приводит к скорому износу и в результате
                            требуется как ремонт самой стиральной машины, так и починка
                            проводки, настройка водопровода и слива.</p>
                        <p>Что касается цены на услугу в Минске, то она может отличаться не
                            только в связи со сложностью ремонтных работ, но и из-за стоимости
                            комплектующих, которые часто закупаются мастерами у перекупщиков, а
                            потому имеют двойную наценку.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-left"><a class="footer__top-home-link"
                   href="/">
                    <div class="footer__top-logo-wrapper"><img class="footer__top-logo"
                             src="/wp-content/themes/sm24/src/icons/edited.b2b9a8.svg"></div>
                    <div class="footer__top-name">SM24.BY </div>
                </a>
                <p class="footer__top-description">Поломка стиральной машины доставляет
                    значительные неудобства. Альтернатива тратить время на ручное полоскание
                    вещей в тазике выглядит неубедительно. При первых проявлениях признаков
                    неисправности рекомендуем сразу же обратиться к мастерам сервиса. Это
                    недорогой, быстрый и надежный способ решить проблему с вышедшей из строя
                    техникой. Выполняем ремонт стиральных машин в Минске с обслуживанием всех
                    районов столицы (Центральный, Партизанский, Октябрьский, Ленинский,
                    Советский, Первомайский, Заводской, Фрунзенский, Московский).</p>
            </div>
            <div class="footer__top-right">
                <div class="footer__top-title">5 причин довериться профессионалам:</div>
                <ul class="footer__top-list">
                    <li class="footer__top-item">Работаем только официально;</li>
                    <li class="footer__top-item">Перед ремонтом проводится диагностика;</li>
                    <li class="footer__top-item">Обладаем 10-летним опытом;</li>
                    <li class="footer__top-item">Отсутствие дополнительных несогласованных
                        расходов;</li>
                    <li class="footer__top-item">Оперативно выезжаем на вызов и быстро выполняем
                        работу.</li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom-block">
                <div class="footer__bottom-phones"><a
                       class="footer__phones-item footer__phones-item_life"
                       href="tel:+375 (25) 550-57-69">+375 (25) 550-57-69</a><a
                       class="footer__phones-item footer__phones-item_mts"
                       href="tel:+375 (29) 864-77-49">+375 (29) 864-77-49</a><a
                       class="footer__phones-order-call"
                       href="javascript:void(0)">заказать звонок</a></div>
                <div class="footer__bottom-socials"><a
                       class="footer__socials-item footer__socials-item_telegram"
                       href="telegram.me/@zankoav"> </a><a
                       class="footer__socials-item footer__socials-item_vk"
                       href="https://vk.com"> </a></div>
            </div>
            <div class="footer__bottom-button-wrapper"><a
                   class="free-consultation footer__bottom-button"
                   href="javascript:void(0)">Вызов мастера</a></div>
        </div>
        <div class="footer__copy"><span class="footer__copy-text">&copy; CopyRight
                2020</span><span class="footer__copy-developer-wrapper"><span
                      class="footer__copy-developer-before">By</span><a
                   class="footer__copy-developer"
                   href="https://lightning-soft.com"
                   target="_blank">Lightning Soft</a></span></div>
    </div>
</footer>
<div class="modal">
    <div class="modal__glass"></div>
    <div class="modal__card">
        <div class="call-me-form">
            <a class="call-me-form__close"
               href="javascript:void(0)">
                <img class="call-me-form__close-img"
                     src="/wp-content/themes/sm24/src/icons/cross.b39121.svg">
            </a>
            <img class="call-me-form__img"
                 src="<?=$modal_image;?>">
            <div class="call-me-form__card call-me-form__card_form">
                <h3 class="call-me-form__title"><?=$modal_title;?></h3>
                <p class="call-me-form__description"><?=$modal_description;?></p>
                <div class="call-me-form__input-group">
                    <img class="call-me-form__input-img"
                         src="/wp-content/themes/sm24/src/icons/flag.b04c8e.png">
                    <input class="call-me-form__input"
                           name="phone">
                </div>
                <div class="call-me-form__error-message"><?=$modal_input_error;?></div>
                <div class="call-me-form__button-wrapper">
                    <a class="free-consultation call-me-form__card-send-phone"
                       href="javascript:void(0)"><?=$modal_button_title;?></a>
                </div>
            </div>
            <div class="call-me-form__card call-me-form__card_loading call-me-form__card_hidden">
                <img class="call-me-form__card-spinner"
                     src="/wp-content/themes/sm24/src/icons/spinner.ab7b37.svg"><span
                      class="call-me-form__card-spinner-message">Отправка...</span>
            </div>
            <div class="call-me-form__card call-me-form__card_result call-me-form__card_hidden">
                <h4 class="call-me-form__card-result-title"></h4>
                <p class="call-me-form__card-result-description"></p>
                <div class="call-me-form__button-wrapper">
                    <a class="free-consultation call-me-form__card-result-again"
                       href="javascript:void(0)"><?=$modal_button_again_title;?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; 
    get_footer(); 
?>
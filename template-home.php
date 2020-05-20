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
    $order_title = get_post_meta($post_id, 'order_title', 1 );
    $order_title_1 = get_post_meta($post_id, 'order_title_1', 1 );
    $order_title_2 = get_post_meta($post_id, 'order_title_2', 1 );
    $order_title_3 = get_post_meta($post_id, 'order_title_3', 1 );
    $order_title_4 = get_post_meta($post_id, 'order_title_4', 1 );
    $faq_title = get_post_meta($post_id, 'faq_title', 1 );
    $faq_description = get_post_meta($post_id, 'faq_description', 1 );
    $faq_image = get_post_meta($post_id, 'faq_image', 1 );
    $faq_button_title = get_post_meta($post_id, 'faq_button_title', 1 );
    $faq_list = get_post_meta($post_id, 'faq_list', 1 );
    $marks_title = get_post_meta($post_id, 'marks_title', 1 );
    $marks_description = get_post_meta($post_id, 'marks_description', 1 );
    $marks_item = get_post_meta($post_id, 'marks_item', 1 );
    $content_right_title = get_post_meta($post_id, 'content_right_title', 1 );
    $content_right_image = get_post_meta($post_id, 'content_right_image', 1 );
    $content_right_description = wpautop(get_post_meta($post_id, 'content_right_description', 1 ));
    $content_left_title = get_post_meta($post_id, 'content_left_title', 1 );
    $content_left_image = get_post_meta($post_id, 'content_left_image', 1 );
    $content_left_description = wpautop(get_post_meta($post_id, 'content_left_description', 1 ));
    $footer_title = get_post_meta($post_id, 'footer_title', 1 );
    $footer_description = get_post_meta($post_id, 'footer_description', 1 );
    $footer_button_title = get_post_meta($post_id, 'footer_button_title', 1 );
    $footer_list = get_post_meta($post_id, 'footer_list', 1 );

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
            <div class="work-order__title"><?=$order_title;?></div>
            <div class="work-order__wrapper">
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">01</div>
                        <div class="order-item__title"><?=$order_title_1;?></div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">02</div>
                        <div class="order-item__title"><?=$order_title_2;?></div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">03</div>
                        <div class="order-item__title"><?=$order_title_3;?></div>
                    </div>
                </div>
                <div class="work-order__col">
                    <div class="order-item">
                        <div class="order-item__number">04</div>
                        <div class="order-item__title"><?=$order_title_4;?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="destruction">
        <div class="container">
            <h5 class="destruction__title"><?=$faq_title;?></h5>
            <p class="destruction__description"><?=$faq_description;?></p>
            <div class="destruction__wrapper">
                <div class="destruction__image-wrapper">
                    <img class="destruction__image"
                         src="<?=$faq_image;?>"></div>
                <ul class="destruction__list">
                    <?php foreach ( $faq_list as $faq_item) : ?>
                    <li class="destruction__item"><?=$faq_item;?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="destruction__button-wrapper"><a
                       class="free-consultation destruction__button"
                       href="javascript:void(0)"><?=$faq_button_title;?></a></div>
            </div>
        </div>
    </div>
    <div class="marks">
        <div class="container">
            <h5 class="marks__title"><?=$marks_title;?></h5>
            <p class="marks__description"><?=$marks_description;?></p>
            <div class="marks__list">
                <?php foreach ($marks_item as $mark_item) :
                    $title = $mark_item['title'];
                    $image = $mark_item['image'];                  
                ?>
                <div class="marks__col">
                    <div class="mark"><img class="mark__img"
                             src="<?=$image;?>">
                        <h6 class="mark__title"><?=$title;?></h6>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="text-content">
        <div class="container">
            <div class="text-content__wrapper">
                <div class="text-content__image-wrapper ">
                    <img class="text-content__image"
                         src="<?=$content_right_image;?>">
                </div>
                <div class="text-content__text">
                    <div class="text-content__title"><?=$content_right_title;?></div>
                    <div class="text-content__description editor-content">
                        <?=$content_right_description;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-content">
        <div class="container">
            <div class="text-content__wrapper">
                <div class="text-content__image-wrapper text-content__image-wrapper_left">
                    <img class="text-content__image"
                         src="<?=$content_left_image;?>">
                </div>
                <div class="text-content__text">
                    <div class="text-content__title"><?=$content_left_title;?></div>
                    <div class="text-content__description editor-content">
                        <?=$content_left_description;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-left">
                <a class="footer__top-home-link"
                   href="/">
                    <div class="footer__top-logo-wrapper">
                        <img class="footer__top-logo"
                             src="/wp-content/themes/sm24/src/icons/edited.b2b9a8.svg">
                    </div>
                    <div class="footer__top-name">SM24.BY</div>
                </a>
                <p class="footer__top-description"><?=$footer_description;?></p>
            </div>
            <div class="footer__top-right">
                <div class="footer__top-title"><?=$footer_title;?></div>
                <ul class="footer__top-list">
                    <?php foreach ( $footer_list as $footer_item) : ?>
                    <li class="footer__top-item"><?=$footer_item;?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom-block">
                <div class="footer__bottom-phones">
                    <a class="footer__phones-item footer__phones-item_life"
                       href="tel:<?= $life;?>"><?= $life;?></a>
                    <a class="footer__phones-item footer__phones-item_mts"
                       href="tel:<?= $mtc;?>"><?= $mtc;?></a>
                    <a class="footer__phones-order-call"
                       href="javascript:void(0)">заказать звонок</a>
                </div>
                <div class="footer__bottom-socials">
                    <a class="footer__socials-item footer__socials-item_telegram"
                       href="https://telegram.im/<?=$telegram;?>"
                       target="_blank"></a>
                    <a class="footer__socials-item footer__socials-item_vk"
                       href="<?=$vk;?>"
                       target="_blank"></a>
                </div>
            </div>
            <div class="footer__bottom-button-wrapper">
                <a class="free-consultation footer__bottom-button"
                   href="javascript:void(0)"><?=$footer_button_title;?></a>
            </div>
        </div>
        <div class="footer__copy">
            <span class="footer__copy-text">&copy; CopyRight <?=date('Y');?></span>
            <span class="footer__copy-developer-wrapper">
                <span class="footer__copy-developer-before">By</span>
                <a class="footer__copy-developer"
                   href="https://lightning-soft.com"
                   target="_blank">Lightning Soft</a>
            </span>
        </div>
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
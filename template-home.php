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
    Main
</main>
<footer class="footer">
    Footer
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
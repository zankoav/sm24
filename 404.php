<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
    }
    get_header();
    $post_id = get_option('page_on_front');

    $life = get_post_meta($post_id, 'life', 1 );
    $mtc = get_post_meta($post_id, 'mtc', 1 );
    $telegram = get_post_meta($post_id, 'telegram', 1 );
    $vk = get_post_meta($post_id, 'vk', 1 );

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

    $footer_title = get_post_meta($post_id, 'footer_title', 1 );
    $footer_description = get_post_meta($post_id, 'footer_description', 1 );
    $footer_button_title = get_post_meta($post_id, 'footer_button_title', 1 );
    $footer_list = get_post_meta($post_id, 'footer_list', 1 );
    $footer_unp = get_post_meta($post_id, 'footer_unp', 1 ); 

?>
<script>
    const modalTitleSuccess = "<?= $modal_success_title;?>",
        modalDescriptionSuccess = "<?= $modal_success_description;?>",
        modalTitleError = "<?= $modal_error_title;?>",
        modalDescriptionError = "<?= $modal_error_description;?>",
        postId = '<?=$post_id;?>';
</script>
<header class="header header_small">
    <div class="contacts">
        <div class="container contacts__container">
            <a class="contacts__logo"
               href="/">
                <div class="contacts__logo-image-wrapper">
                    <img class="contacts__logo-image"
                         src="/wp-content/themes/sm24/build/img/a29b2e08f98938136821.svg"
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
</header>
<main class="p404">
    <div class="container">
        <div class="p404__wrapper">
            <h1 class="p404__title">Ошибка 404!</h1>
            <h2 class="p404__subtitle">Страница не найдена</h2>
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
                             src="/wp-content/themes/sm24/build/img/a29b2e08f98938136821.svg">
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
            <span class="footer__copy-unp"><?=$footer_unp;?></span>
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
                     src="/wp-content/themes/sm24/build/img/e7e0f54b7ef09d503a5f.svg">
            </a>
            <img class="call-me-form__img"
                 src="<?=$modal_image;?>">
            <div class="call-me-form__card call-me-form__card_form">
                <h3 class="call-me-form__title"><?=$modal_title;?></h3>
                <p class="call-me-form__description"><?=$modal_description;?></p>
                <div class="call-me-form__input-group">
                    <img class="call-me-form__input-img"
                         src="/wp-content/themes/sm24/build/img/dee3d75fcb888689f04a.png">
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
                     src="/wp-content/themes/sm24/build/img/25b5835de3110fea8209.svg"><span
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
<?php get_footer(); ?>

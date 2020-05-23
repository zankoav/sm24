import './mainSlider.scss';
import $ from 'jquery';
import Swiper from 'swiper';
import { showModal } from './../modal/modal';

new Swiper('.main-slider__swiper', {
    autoplay: {
        delay: 6000,
    },
    loop: true,
    lazy: {
        loadPrevNext: true,
    },
    parallax: true,
    pagination: {
        el: '.main-slider__pagination',
        clickable: true,
        bulletClass: "main-slider__bullet",
        bulletActiveClass: "main-slider__bullet_active"
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    disableOnInteraction: false,
    allowTouchMove: true,
    speed: 800
});

$('.main-slider__content-item .free-consultation').on('click', showModal);
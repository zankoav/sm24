import './mainSlider.scss';
import $ from 'jquery';
import Swiper from 'swiper';

var mySwiper = new Swiper('.main-slider__swiper', {
    autoplay: {
        delay: 5000,
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
    allowTouchMove: false,
    speed: 800
});
import './modal.scss';
import $ from 'jquery';

export const showModal = () => {
    $('.modal').fadeIn();
}

export const hideModal = () => {
    $('.modal').fadeOut();
}
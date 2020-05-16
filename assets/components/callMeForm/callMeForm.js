import './callMeForm.scss';
import $ from 'jquery';
import IMask from 'imask';
import { hideModal } from './../modal/modal';

$('.call-me-form__close').on('click', hideModal);

const input = document.querySelector('.call-me-form__input');
var maskOptions = {
    mask: '+{375} (YY) XXX-XX-XX',
    lazy: false,
    blocks: {
        YY: {
            mask: IMask.MaskedEnum,
            placeholderChar: 'X',
            enum: ['25', '29', '33', '44']
        },
        XXX: {
            mask: '000',
            placeholderChar: 'Y',
        },
        XX: {
            mask: '00',
            placeholderChar: 'Y',
        }
    },
    autofix: true,
};
const mask = IMask(input, maskOptions);

$('.call-me-form__card-send-phone')
    .on('click', () => {
        if (isInValidPhone()) {
            showError();
        } else {
            sendPhone();
        }
    });

$('.call-me-form__input')
    .on('input', () => {
        hideError();
        if (!isInValidPhone()) {
            $('.call-me-form__input-group').addClass('call-me-form__input-group_success');
        } else {
            $('.call-me-form__input-group').removeClass('call-me-form__input-group_success');
        }
    })
    .on('blur', () => {
        if (isInValidPhone()) {
            showError();
        }
    });

$('.call-me-form__card-result-again').on('click', () => {
    $('.call-me-form__card_result').addClass('call-me-form__card_hidden');
    $('.call-me-form__card_form').removeClass('call-me-form__card_hidden');
    $('.call-me-form__input-group').removeClass('call-me-form__input-group_success');
    mask.value = '';
    $('.call-me-form__input').focus();
});

function showError() {
    $('.call-me-form__error-message').addClass('call-me-form__error-message_active');
    $('.call-me-form__input-group').addClass('call-me-form__input-group_error');
}

function hideError() {
    $('.call-me-form__error-message').removeClass('call-me-form__error-message_active');
    $('.call-me-form__input-group').removeClass('call-me-form__input-group_error');
}

function isInValidPhone() {
    const phone = mask.value;
    let invalid = false;
    if (phone.indexOf('X') > -1 || phone.indexOf('Y') > -1) {
        invalid = true;
    }
    return invalid;
}

async function sendPhone() {
    startLoading();
    $.ajax({
        type: "POST",
        url: landing_ajax.url,
        dataType: 'json',
        data: {
            phone: mask.value,
            id: postId,
            action: 'contact_form'
        },
        success: (response) => {
            console.log('response', response);
            showResult(response.status);
        },
        error: (x, y, z) => {
            console.log('x,y,z', x, y, z);
            showResult(0);
        }
    });
}

function startLoading() {
    $('.call-me-form__card_form').addClass('call-me-form__card_hidden');
    $('.call-me-form__card_loading').removeClass('call-me-form__card_hidden');
}

function stopLoading() {
    $('.call-me-form__card_loading').addClass('call-me-form__card_hidden');
}

function showResult(isSuccess) {

    const titleSuccess = modalTitleSuccess || 'Вызов принят!';
    const descriptionSuccess = modalDescriptionSuccess || 'Я скоро перезвоню';

    const titleError = modalTitleError || 'Упс!';
    const descriptionError = modalDescriptionError || 'Ошибка соединения, попробуте позже';

    stopLoading();
    if (!isSuccess) {
        $('.call-me-form__card-result-title').addClass('call-me-form__card-result-title_error');
    } else {
        $('.call-me-form__card-result-title').removeClass('call-me-form__card-result-title_error');
    }
    $('.call-me-form__card-result-title').html(isSuccess ? titleSuccess : titleError);
    $('.call-me-form__card-result-description').html(isSuccess ? descriptionSuccess : descriptionError);
    $('.call-me-form__card_result').removeClass('call-me-form__card_hidden');
}

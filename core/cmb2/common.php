<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 12/4/18
 * Time: 6:56 PM
 */
if (!defined('ABSPATH')) {
    exit();
}

add_action('cmb2_admin_init', 'common_metabox');
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function common_metabox()
{

    /**
     * Registers options page menu item and form.
     */
    $cmb_options = new_cmb2_box(array(
        'id' => THEME_NAME . '_home_page',
        'title' => 'Настройки страницы',
        'object_types' => array('page'),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ));

    $cmb_options->add_field(array(
        'name' => 'Контакты',
        'id' => 'contacts_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Life',
        'id' => 'life',
        'type' => 'text_medium'
    ));

    $cmb_options->add_field(array(
        'name' => 'MTC',
        'id' => 'mtc',
        'type' => 'text_medium'
    ));

    $cmb_options->add_field(array(
        'name' => esc_html__('Telegram', THEME_NAME),
        'id' => 'telegram',
        'type' => 'text_medium',
        'description' => 'Пример: @zankoav'
    ));

    $cmb_options->add_field(array(
        'name' => esc_html__('VK', THEME_NAME),
        'id' => 'vk',
        'type' => 'text_medium',
        'description' => 'Пример: https://vk.com/zankoav'
    ));

    $cmb_options->add_field(array(
        'name' => 'Главный слайдер',
        'id' => 'main_slider_title',
        'type' => 'title'
    ));

    $group_field_id = $cmb_options->add_field(array(
        'id' => 'slider_item',
        'type' => 'group',
        'options' => array(
            'group_title' => 'Слайд {#}',
            'add_button' => 'Добавить слайд',
            'remove_button' => 'Удалить слайд',
            'closed' => true,
            'sortable'          => true,
        ),
    ));


    $cmb_options->add_group_field($group_field_id, array(
        'name' => 'Заголовок',
        'id' => 'title',
        'type' => 'text',
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => 'Описание',
        'id' => 'description',
        'type' => 'textarea_small',
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => 'Название кнопки',
        'id' => 'button_title',
        'type' => 'text',
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => 'Картинка',
        'desc' => 'Рекомендуемый размер (800x600)',
        'id' => 'image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Модальное окно',
        'id' => 'modal_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка',
        'id' => 'modal_image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'modal_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Подзаголовок',
        'id' => 'modal_description',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => __('Email', THEME_NAME),
        'id' => 'email',
        'type' => 'text_email'
    ));

    $cmb_options->add_field(array(
        'name' => 'Ошибка ввода номера',
        'id' => 'modal_input_error',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок успешной отправке',
        'id' => 'modal_success_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Подзаголовок успешной отправке',
        'id' => 'modal_success_description',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок при ошибке',
        'id' => 'modal_error_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Подзаголовок при ошибке',
        'id' => 'modal_error_description',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Кнопка "Отправить"',
        'id' => 'modal_button_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Кнопка "Отпраить еще раз"',
        'id' => 'modal_button_again_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Недорогой и качественный ремонт',
        'id' => 'repair_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'repair_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'repair_description',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка',
        'id' => 'repair_image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Список',
        'id' => 'repair_list',
        'type' => 'text',
        'repeatable' => true
    ));

    $cmb_options->add_field(array(
        'name' => 'Приемущества',
        'id' => 'advantages_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 1',
        'id' => 'advantages_title_1',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 1',
        'id' => 'advantages_description_1',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 2',
        'id' => 'advantages_title_2',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 2',
        'id' => 'advantages_description_2',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 3',
        'id' => 'advantages_title_3',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 3',
        'id' => 'advantages_description_3',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Что мы делаем',
        'id' => 'we_do_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок секции',
        'id' => 'we_do_main_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 1',
        'id' => 'we_do_title_1',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 1',
        'id' => 'we_do_description_1',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка 1',
        'id' => 'we_do_image_1',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 2',
        'id' => 'we_do_title_2',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 2',
        'id' => 'we_do_description_2',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка 2',
        'id' => 'we_do_image_2',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 3',
        'id' => 'we_do_title_3',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 3',
        'id' => 'we_do_description_3',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка 3',
        'id' => 'we_do_image_3',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 4',
        'id' => 'we_do_title_4',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание 4',
        'id' => 'we_do_description_4',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка 4',
        'id' => 'we_do_image_4',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Порядок работ',
        'id' => 'order_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок Секции',
        'id' => 'order_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 1',
        'id' => 'order_title_1',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 2',
        'id' => 'order_title_2',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 3',
        'id' => 'order_title_3',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок 4',
        'id' => 'order_title_4',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Частые Неисправности',
        'id' => 'faq_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'faq_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'faq_description',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка',
        'id' => 'faq_image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок Кнопки',
        'id' => 'faq_button_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Список',
        'id' => 'faq_list',
        'type' => 'text',
        'repeatable' => true
    ));

    $cmb_options->add_field(array(
        'name' => 'Марки бытовой техники',
        'id' => 'marks_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'marks_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'marks_description',
        'type' => 'textarea_small'
    ));

    $marks_field_id = $cmb_options->add_field(array(
        'id' => 'marks_item',
        'type' => 'group',
        'options' => array(
            'group_title' => 'Марка {#}',
            'add_button' => 'Добавить марку',
            'remove_button' => 'Удалить марку',
            'closed' => true,
            'sortable'          => true,
        ),
    ));

    $cmb_options->add_group_field($marks_field_id, array(
        'name' => 'Заголовок',
        'id' => 'title',
        'type' => 'text',
    ));

    $cmb_options->add_group_field($marks_field_id, array(
        'name' => 'Картинка',
        'desc' => 'Рекомендуемый размер (160x80)',
        'id' => 'image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Текст с картинкой справа',
        'id' => 'content_right_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'content_right_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка',
        'desc' => 'Рекомендуемый размер (360x360)',
        'id' => 'content_right_image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'content_right_description',
        'type' => 'wysiwyg'
    ));

    $cmb_options->add_field(array(
        'name' => 'Текст с картинкой слево',
        'id' => 'content_left_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'content_left_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Картинка',
        'desc' => 'Рекомендуемый размер (360x360)',
        'id' => 'content_left_image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'content_left_description',
        'type' => 'wysiwyg'
    ));

    $cmb_options->add_field(array(
        'name' => 'Подвал',
        'id' => 'footer_t',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок',
        'id' => 'footer_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Описание',
        'id' => 'footer_description',
        'type' => 'textarea'
    ));

    $cmb_options->add_field(array(
        'name' => 'Заголовок Кнопки',
        'id' => 'footer_button_title',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => 'Список',
        'id' => 'footer_list',
        'type' => 'text',
        'repeatable' => true
    ));




    // $cmb_options->add_field(array(
    //     'name' => __('Paragraphs', THEME_NAME),
    //     'id' => 'paragraphs',
    //     'type' => 'textarea_small',
    //     'repeatable' => true,
    //     'text' => array(
    //         'add_row_text' => __('Add Another Paragraphs', THEME_NAME)
    //     )
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('Partners', THEME_NAME),
    //     'id' => 'partners_title',
    //     'type' => 'title'
    // ));

    // $group_field_id = $cmb_options->add_field(array(
    //     'id' => 'partners_group',
    //     'type' => 'group',
    //     'options' => array(
    //         'group_title' => __('Partner {#}', THEME_NAME),
    //         'add_button' => __('Add Partner', THEME_NAME),
    //         'remove_button' => __('Remove Partner', THEME_NAME),
    //         'sortable' => true,
    //         'closed' => true,
    //     ),
    // ));

    // $cmb_options->add_group_field($group_field_id, array(
    //     'name' => __('Name', THEME_NAME),
    //     'id' => 'name',
    //     'type' => 'text'
    // ));

    // $cmb_options->add_group_field($group_field_id, array(
    //     'name' => __('Image', THEME_NAME),
    //     'desc' => __('Recommended size (280x140)', THEME_NAME),
    //     'id' => 'image',
    //     'type' => 'file'
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('Resent Projects Section', THEME_NAME),
    //     'id' => 'recent_title',
    //     'type' => 'title'
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('All Products URL', THEME_NAME),
    //     'id' => 'all_products_url',
    //     'type' => 'text_url'
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('Privacy Policy & Cookies', THEME_NAME),
    //     'id' => 'privacy_title',
    //     'type' => 'title'
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('Privacy Policy Page', THEME_NAME),
    //     'id' => 'privacy_policy',
    //     'type' => 'select',
    //     'show_option_none' => true,
    //     'options_cb' => 'pages_list',
    // ));

    // $cmb_options->add_field(array(
    //     'name' => __('Cookies Page', THEME_NAME),
    //     'id' => 'cookies',
    //     'type' => 'select',
    //     'show_option_none' => true,
    //     'options_cb' => 'pages_list',
    // ));

}
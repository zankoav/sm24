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
        'id' => THEME_NAME . '_theme_options_page',
        'title' => __('Theme Settings', THEME_NAME),
        'object_types' => array('options-page'),
        'option_key' => THEME_NAME . '_theme_options',
        'icon_url' => 'dashicons-palmtree',
    ));

    $cmb_options->add_field(array(
        'name' => __('Slogan', THEME_NAME),
        'id' => 'slogan_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => __('Slogan', THEME_NAME),
        'id' => 'slogan',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => __('Contacts', THEME_NAME),
        'id' => 'contacts_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => __('Phone', THEME_NAME),
        'id' => 'phone',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => __('Email', THEME_NAME),
        'id' => 'email',
        'type' => 'text_email'
    ));

    $cmb_options->add_field(array(
        'name' => esc_html__('Telegram', THEME_NAME),
        'id' => 'telegram',
        'type' => 'text',
        'before' => '@'
    ));

    $cmb_options->add_field(array(
        'name' => esc_html__('Skype', THEME_NAME),
        'id' => 'skype',
        'type' => 'text'
    ));

    $cmb_options->add_field(array(
        'name' => __('Location', THEME_NAME),
        'id' => 'location',
        'type' => 'textarea_small'
    ));

    $cmb_options->add_field(array(
        'name' => __('Main Slider', THEME_NAME),
        'id' => 'main_slider_title',
        'type' => 'title'
    ));

    $group_field_id = $cmb_options->add_field(array(
        'id' => 'slider_item',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Slide {#}', THEME_NAME),
            'add_button' => __('Add Slide', THEME_NAME),
            'remove_button' => __('Remove Slide', THEME_NAME),
            'closed' => true,
        ),
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => __('Image', THEME_NAME),
        'desc' => __('Recommended size (1200x600)', THEME_NAME),
        'id' => 'image',
        'type' => 'file'
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => __('Title', THEME_NAME),
        'id' => 'title',
        'type' => 'text',
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => __('Description', THEME_NAME),
        'id' => 'description',
        'type' => 'textarea_small',
    ));

    $cmb_options->add_field(array(
        'name' => __('Contact Form', THEME_NAME),
        'id' => 'contact_form_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => __('Paragraphs', THEME_NAME),
        'id' => 'paragraphs',
        'type' => 'textarea_small',
        'repeatable' => true,
        'text' => array(
            'add_row_text' => __('Add Another Paragraphs', THEME_NAME)
        )
    ));

    $cmb_options->add_field(array(
        'name' => __('Partners', THEME_NAME),
        'id' => 'partners_title',
        'type' => 'title'
    ));

    $group_field_id = $cmb_options->add_field(array(
        'id' => 'partners_group',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Partner {#}', THEME_NAME),
            'add_button' => __('Add Partner', THEME_NAME),
            'remove_button' => __('Remove Partner', THEME_NAME),
            'sortable' => true,
            'closed' => true,
        ),
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => __('Name', THEME_NAME),
        'id' => 'name',
        'type' => 'text'
    ));

    $cmb_options->add_group_field($group_field_id, array(
        'name' => __('Image', THEME_NAME),
        'desc' => __('Recommended size (280x140)', THEME_NAME),
        'id' => 'image',
        'type' => 'file'
    ));

    $cmb_options->add_field(array(
        'name' => __('Resent Projects Section', THEME_NAME),
        'id' => 'recent_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => __('All Products URL', THEME_NAME),
        'id' => 'all_products_url',
        'type' => 'text_url'
    ));

    $cmb_options->add_field(array(
        'name' => __('Privacy Policy & Cookies', THEME_NAME),
        'id' => 'privacy_title',
        'type' => 'title'
    ));

    $cmb_options->add_field(array(
        'name' => __('Privacy Policy Page', THEME_NAME),
        'id' => 'privacy_policy',
        'type' => 'select',
        'show_option_none' => true,
        'options_cb' => 'pages_list',
    ));

    $cmb_options->add_field(array(
        'name' => __('Cookies Page', THEME_NAME),
        'id' => 'cookies',
        'type' => 'select',
        'show_option_none' => true,
        'options_cb' => 'pages_list',
    ));

}

function pages_list($field)
{

    $posts = get_posts([
        'post_type' => 'page',
        'numberposts' => -1
    ]);

    $result = [];

    foreach ($posts as $post) {

        $result[$post->ID] = $post->post_title;
    }

    return $result;
}
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

    add_action('cmb2_admin_init', 'project_metabox');

    function project_metabox() {


        $cmb_options = new_cmb2_box(array(
            'id'           => THEME_NAME . '_project',
            'title'        => __('Settings', THEME_NAME),
            'object_types' => ['project'],
        ));

        $cmb_options->add_field(array(
            'name'        => __('Release', 'zankoav'),
            'id'          => 'release',
            'type'        => 'text_date',
            'date_format' => 'd.m.Y',
        ));

        $cmb_options->add_field(array(
            'name'        => __('Gallery', 'zankoav'),
            'id'          => 'gallery',
            'type'        => 'file_list',
            'description' => 'Recommended size 810x540'
        ));


        $cmb_options->add_field(array(
            'name' => __('Spent time', 'zankoav'),
            'id'   => 'time',
            'type' => 'text',
        ));

        $cmb_options->add_field(array(
            'name'             => __('Team', 'zankoav'),
            'id'               => 'team',
            'type'             => 'select',
            'repeatable'       => true,
            'show_option_none' => true,
            'options_cb'       => 'team_list',
        ));

        $cmb_options->add_field(array(
            'name' => __('Demo URL', 'zankoav'),
            'id'   => 'demo',
            'type' => 'text_url',
        ));
    }

    function team_list($field) {

        $posts = get_posts([
            'post_type'   => 'worker',
            'numberposts' => -1
        ]);

        $result = [];

        foreach ($posts as $post) {

            $result[$post->ID] = $post->post_title;
        }

        return $result;
    }
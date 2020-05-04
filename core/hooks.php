<?php
    /**
     * Created by PhpStorm.
     * User: alexandrzanko
     * Date: 2/24/19
     * Time: 6:27 PM
     */
    if (!defined('ABSPATH')) {
        exit();
    }

    function before_footer_action() {
        if (!is_404()) {
            get_template_part('views/contact-form');
            get_template_part('views/partners');
        }
    }

    add_action('before_footer', 'before_footer_action');


    function share_vk_action() {
        echo '<script type="text/javascript">
                document.write(
                    VK.Share.button(
                        {
                            url:"' . get_the_permalink() . '",
                            title: "' . get_the_title() . '",
                            image: "' . wp_get_attachment_image_url(get_post_thumbnail_id(), "project-card-sm") . '",
                        }, {
            
                            type: "custom",
                            text: `<i class="fab fa-vk fa-lg"></i>`
                        }
                    ));
                </script>';
    }

    add_action('share_vk', 'share_vk_action');

    function share_facebook_action() { ?>
        <a target="_blank"
           href="https://www.facebook.com/sharer/sharer.php?app_id=796602214030449&amp;sdk=joey&amp;u=<?= get_the_permalink(); ?>&amp;display=popup&amp;ref=plugin&amp;src=share_button">
            <i class="fab fa-facebook-f fa-lg"></i>
        </a>
    <?php }

    add_action('share_facebook', 'share_facebook_action');

    function share_twitter_action() { ?>
        <a target="_blank"
           href="https://twitter.com/intent/tweet?text=<?= get_the_permalink(); ?>">
            <i class="fab fa-twitter fa-lg"></i>
        </a>
    <?php
    }

    add_action('share_twitter', 'share_twitter_action');
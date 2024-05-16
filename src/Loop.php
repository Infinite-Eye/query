<?php

namespace InfiniteEye\Query;

class Loop
{
    public static function content($name = null)
    {
        get_header();

        do_action('ie/loop/before');

        if (have_posts()) {
            while (have_posts()) {
                the_post();

                get_template_part('template-parts/content', $name);
            }
        }

        do_action('ie/loop/after');

        get_footer();
    }
}

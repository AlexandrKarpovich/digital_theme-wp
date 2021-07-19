<?php
/**
 *  Template name: home
 */

?>


<?php

get_header();

the_post();

//var_dump(get_field('homepage'));


$as_sections_settings = get_field('homepage');

foreach ($as_sections_settings as $section) {

    $section_type = $section['acf_fc_layout'];
    $available_sections = [
        'main-screen',
        'main-screen-2',
        'block__img-text',
        'text-block',
        'two-blocks'
    ];

    if (!in_array($section_type, $available_sections)) {
        continue;
    }

    get_template_part('sections/section', $section_type, $section);
}

get_footer();



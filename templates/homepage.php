<?php
/**
 *  Template name: home
 */

?>


<?php
get_header();
the_post();

//var_dump(get_field('homepage'));
?>

<main id="primary" class="site-main content">

    <?php
        $as_sections_settings = get_field('homepage');

        foreach ($as_sections_settings as $section) {

            $section_type = $section['acf_fc_layout'];
            $available_sections = [
                'main-screen',
                'img-text',
                'text-block',
                'two-blocks'
            ];

            if (!in_array($section_type, $available_sections)) {
                continue;
            }

            get_template_part('sections/section', $section_type, $section);
        }
    ?>
</main>

<?php get_footer(); ?>



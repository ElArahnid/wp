<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$fitness_exercise_hub_no_of_footer_col = get_theme_mod('fitness_exercise_hub_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$fitness_exercise_hub_col_lg_footer_class = 'col-lg-' . (12 / $fitness_exercise_hub_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$fitness_exercise_hub_col_md_footer_class = 'col-md-' . (12 / $fitness_exercise_hub_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'fitness-exercise-hub' ); ?>">
        <?php
        $fitness_exercise_hub_default_widgets = array(
            1 => 'search',
            2 => 'archives',
            3 => 'meta',
            4 => 'categories'
        );

        for ($fitness_exercise_hub_i = 1; $fitness_exercise_hub_i <= $fitness_exercise_hub_no_of_footer_col; $fitness_exercise_hub_i++) :
            $fitness_exercise_hub_lg_class = esc_attr($fitness_exercise_hub_col_lg_footer_class);
            $fitness_exercise_hub_md_class = esc_attr($fitness_exercise_hub_col_md_footer_class);
            echo '<div class="col-12 ' . $fitness_exercise_hub_lg_class . ' ' . $fitness_exercise_hub_md_class . '">';

            if (is_active_sidebar('footer-' . $fitness_exercise_hub_i)) {
                dynamic_sidebar('footer-' . $fitness_exercise_hub_i);
            } else {
                // Display default widget content if not active.
                switch ($fitness_exercise_hub_default_widgets[$fitness_exercise_hub_i] ?? '') {
                    case 'search':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Search', 'fitness-exercise-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Search', 'fitness-exercise-hub'); ?></h3>
                            <?php get_search_form(); ?>
                        </aside>
                        <?php
                        break;

                    case 'archives':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Archives', 'fitness-exercise-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Archives', 'fitness-exercise-hub'); ?></h3>
                            <ul><?php wp_get_archives(['type' => 'monthly']); ?></ul>
                        </aside>
                        <?php
                        break;

                    case 'meta':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Meta', 'fitness-exercise-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Meta', 'fitness-exercise-hub'); ?></h3>
                            <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                            </ul>
                        </aside>
                        <?php
                        break;

                    case 'categories':
                        ?>
                        <aside class="widget" role="complementary" aria-label="<?php esc_attr_e('Categories', 'fitness-exercise-hub'); ?>">
                            <h3 class="widget-title"><?php esc_html_e('Categories', 'fitness-exercise-hub'); ?></h3>
                            <ul><?php wp_list_categories(['title_li' => '']); ?></ul>
                        </aside>
                        <?php
                        break;
                }
            }

            echo '</div>';
        endfor;
        ?>
    </aside>
</div>
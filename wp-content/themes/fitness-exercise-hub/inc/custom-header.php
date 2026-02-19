<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

function fitness_exercise_hub_custom_header_setup() {
    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'description'   => __( 'Default Header Image', 'fitness-exercise-hub' ),
        ),
    ) );
}
add_action( 'after_setup_theme', 'fitness_exercise_hub_custom_header_setup' );

/**
 * Styles the header image based on Customizer settings.
 */
function fitness_exercise_hub_header_style() {
    $fitness_exercise_hub_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/sliderimage.png';

    $fitness_exercise_hub_height     = get_theme_mod( 'fitness_exercise_hub_header_image_height', 350 );
    $fitness_exercise_hub_position   = get_theme_mod( 'fitness_exercise_hub_header_background_position', 'center' );
    $fitness_exercise_hub_attachment = get_theme_mod( 'fitness_exercise_hub_header_background_attachment', 1 ) ? 'fixed' : 'scroll';

    $fitness_exercise_hub_custom_css = "
        .header-img, .single-page-img, .external-div .box-image-page img, .external-div {
            background-image: url('" . esc_url( $fitness_exercise_hub_header_image ) . "');
            background-size: cover;
            height: " . esc_attr( $fitness_exercise_hub_height ) . "px;
            background-position: " . esc_attr( $fitness_exercise_hub_position ) . ";
            background-attachment: " . esc_attr( $fitness_exercise_hub_attachment ) . ";
        }

        @media (max-width: 1000px) {
            .header-img, .single-page-img, .external-div .box-image-page img,.external-div,.featured-image{
                height: 250px !important;
            }
            .box-text h2{
                font-size: 27px;
            }
        }
    ";

    wp_add_inline_style( 'fitness-exercise-hub-style', $fitness_exercise_hub_custom_css );
}
add_action( 'wp_enqueue_scripts', 'fitness_exercise_hub_header_style' );

/**
 * Enqueue the main theme stylesheet.
 */
function fitness_exercise_hub_enqueue_styles() {
    wp_enqueue_style( 'fitness-exercise-hub-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fitness_exercise_hub_enqueue_styles' );
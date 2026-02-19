<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div class="slider-main-box">
		<?php do_action( 'fitness_exercise_hub_before_slider' ); ?>

		<?php get_template_part( 'template-parts/home/slider' ); ?>
		<?php do_action( 'fitness_exercise_hub_after_slider' ); ?>

		<?php get_template_part( 'template-parts/home/schedule' ); ?>
		<?php do_action( 'fitness_exercise_hub_after_schedule' ); ?>
	</div>
	
	<?php get_template_part( 'template-parts/home/services' ); ?>
	<?php do_action( 'fitness_exercise_hub_after_services' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'fitness_exercise_hub_after_home_content' ); ?>
</main>

<?php get_footer();
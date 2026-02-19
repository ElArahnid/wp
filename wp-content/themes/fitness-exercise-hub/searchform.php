<?php
/**
 * Template for displaying search forms in Fitness Exercise Hub
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */
?>

<?php $fitness_exercise_hub_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" id="<?php echo esc_attr( $fitness_exercise_hub_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fitness-exercise-hub' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'fitness-exercise-hub' ); ?></button>
</form>
<?php

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function fitness_exercise_hub_register_recommended_plugins() {
	$plugins = array(
		array(
            'name'             => __( 'Advanced Appointment Booking & Scheduling', 'fitness-exercise-hub' ),
            'slug'             => 'advanced-appointment-booking-scheduling',
            'required'         => false,
            'force_activation' => false,
        ),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fitness_exercise_hub_register_recommended_plugins' );

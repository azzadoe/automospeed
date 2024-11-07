<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function automobile_car_services_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'automobile-car-services' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	automobile_car_services_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'automobile_car_services_register_recommended_plugins' );
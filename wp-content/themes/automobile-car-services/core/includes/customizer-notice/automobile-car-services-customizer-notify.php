<?php

class Automobile_Car_Services_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $automobile_car_services_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $automobile_car_services_recommended_actions_title;
	
	private $automobile_car_services_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $automobile_car_services_install_button_label;
	
	private $automobile_car_services_activate_button_label;
	
	private $automobile_car_services_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Automobile_Car_Services_Customizer_Notify ) ) {
			self::$instance = new Automobile_Car_Services_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $automobile_car_services_customizer_notify_recommended_plugins;
		global $automobile_car_services_customizer_notify_automobile_car_services_recommended_actions;

		global $automobile_car_services_install_button_label;
		global $automobile_car_services_activate_button_label;
		global $automobile_car_services_deactivate_button_label;

		$this->automobile_car_services_recommended_actions = isset( $this->config['automobile_car_services_recommended_actions'] ) ? $this->config['automobile_car_services_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->automobile_car_services_recommended_actions_title = isset( $this->config['automobile_car_services_recommended_actions_title'] ) ? $this->config['automobile_car_services_recommended_actions_title'] : '';
		$this->automobile_car_services_recommended_plugins_title = isset( $this->config['automobile_car_services_recommended_plugins_title'] ) ? $this->config['automobile_car_services_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$automobile_car_services_customizer_notify_recommended_plugins = array();
		$automobile_car_services_customizer_notify_automobile_car_services_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$automobile_car_services_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->automobile_car_services_recommended_actions ) ) {
			$automobile_car_services_customizer_notify_automobile_car_services_recommended_actions = $this->automobile_car_services_recommended_actions;
		}

		$automobile_car_services_install_button_label    = isset( $this->config['automobile_car_services_install_button_label'] ) ? $this->config['automobile_car_services_install_button_label'] : '';
		$automobile_car_services_activate_button_label   = isset( $this->config['automobile_car_services_activate_button_label'] ) ? $this->config['automobile_car_services_activate_button_label'] : '';
		$automobile_car_services_deactivate_button_label = isset( $this->config['automobile_car_services_deactivate_button_label'] ) ? $this->config['automobile_car_services_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'automobile_car_services_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'automobile_car_services_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'automobile_car_services_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'automobile_car_services_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function automobile_car_services_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'automobile-car-services-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/automobile-car-services-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'automobile-car-services-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/automobile-car-services-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'automobile-car-services-customizer-notify-js', 'automobilecarservicesCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'automobile-car-services' ),
			)
		);

	}

	
	public function automobile_car_services_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/automobile-car-services-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Automobile_Car_Services_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Automobile_Car_Services_Customizer_Notify_Section(
				$wp_customize,
				'automobile-car-services-customizer-notify-section',
				array(
					'title'          => $this->automobile_car_services_recommended_actions_title,
					'plugin_text'    => $this->automobile_car_services_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function automobile_car_services_customizer_notify_dismiss_recommended_action_callback() {

		global $automobile_car_services_customizer_notify_automobile_car_services_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'automobile_car_services_customizer_notify_show' ) ) {

				$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions = get_option( 'automobile_car_services_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'automobile_car_services_customizer_notify_show', $automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions );

				
			} else {
				$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions = array();
				if ( ! empty( $automobile_car_services_customizer_notify_automobile_car_services_recommended_actions ) ) {
					foreach ( $automobile_car_services_customizer_notify_automobile_car_services_recommended_actions as $automobile_car_services_lite_customizer_notify_recommended_action ) {
						if ( $automobile_car_services_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions[ $automobile_car_services_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions[ $automobile_car_services_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'automobile_car_services_customizer_notify_show', $automobile_car_services_customizer_notify_show_automobile_car_services_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function automobile_car_services_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$automobile_car_services_lite_customizer_notify_show_recommended_plugins = get_option( 'automobile_car_services_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$automobile_car_services_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$automobile_car_services_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'automobile_car_services_customizer_notify_show_recommended_plugins', $automobile_car_services_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}

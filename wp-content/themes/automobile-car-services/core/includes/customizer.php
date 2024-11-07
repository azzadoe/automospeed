<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'automobile_car_services_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'automobile-car-services' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'automobile-car-services' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'automobile-car-services' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'automobile_car_services_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'automobile-car-services' ),
	) );

	Kirki::add_section( 'automobile_car_services_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'automobile-car-services' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_all_headings_typography',
		'section'     => 'automobile_car_services_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'automobile_car_services_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'automobile-car-services' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'automobile-car-services' ),
		'section'     => 'automobile_car_services_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_body_content_typography',
		'section'     => 'automobile_car_services_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'automobile_car_services_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'automobile-car-services' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'automobile-car-services' ),
		'section'     => 'automobile_car_services_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'automobile_car_services_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'automobile-car-services' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'automobile_car_services_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'automobile_car_services_dark_colors',
	    'section'     => 'automobile_car_services_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'automobile-car-services' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );


	// PANEL

	Kirki::add_panel( 'automobile_car_services_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'automobile-car-services' ),
	) );

		// COLOR SECTION

	Kirki::add_section( 'automobile_car_services_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_global_colors',
		'section'     => 'automobile_car_services_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'automobile_car_services_global_color',
		'label'       => __( 'choose your Appropriate Color', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_color',
		'default'     => '#fd7115',
	] );

	// Additional Settings

	Kirki::add_section( 'automobile_car_services_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'automobile_car_services_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'automobile-car-services' ),
			'Center' => esc_html__( 'Center', 'automobile-car-services' ),
			'Right'  => esc_html__( 'Right', 'automobile-car-services' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'automobile_car_services_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_automobile_car_services',
		'label'       => esc_html__( 'Menus Text Transform', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'automobile-car-services' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'automobile-car-services' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'automobile-car-services' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'None' => __('None','automobile-car-services'),
            'Zoominn' => __('Zoom Inn','automobile-car-services'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'automobile_car_services_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );
	
	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services'),
            'One Column' => __('One Column','automobile-car-services')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'automobile_car_services_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'automobile-car-services' ),
			'panel'          => 'automobile_car_services_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'automobile_car_services_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'automobile_car_services_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'automobile_car_services_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'automobile-car-services' ),
			'Center' => esc_html__( 'Center', 'automobile-car-services' ),
			'Right'  => esc_html__( 'Right', 'automobile-car-services' ),
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

}


	// POST SECTION

	Kirki::add_section( 'automobile_car_services_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'automobile_car_services_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'automobile-car-services' ),
		'section'  => 'automobile_car_services_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'automobile-car-services' ),
			'option2' => esc_html__( 'Post Title', 'automobile-car-services' ),
			'option3' => esc_html__( 'Post Content', 'automobile-car-services' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'automobile_car_services_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'automobile_car_services_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services'),
            'Three Column' => __('Three Column','automobile-car-services'),
            'Four Column' => __('Four Column','automobile-car-services'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','automobile-car-services'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','automobile-car-services'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','automobile-car-services')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','automobile-car-services'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-services'),
            'Three Column' => __('Three Column','automobile-car-services'),
            'Four Column' => __('Four Column','automobile-car-services'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','automobile-car-services'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','automobile-car-services'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','automobile-car-services')
		],
	] );

	Kirki::add_field( 'automobile_car_services_config', [
		'type'        => 'select',
		'settings'    => 'automobile_car_services_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'automobile-car-services' ),
				'2' => __( '2 Column', 'automobile-car-services' ),
			],
	] );
	// Breadcrumb
	Kirki::add_section( 'automobile_car_services_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_breadcrumb_heading',
		'section'     => 'automobile_car_services_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'automobile_car_services_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'automobile-car-services' ),
        'section'  => 'automobile_car_services_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'automobile_car_services_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_search_box_enable_1',
		'section'     => 'automobile_car_services_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Search Enable / Disable', 'automobile-car-services' ) . '</h3>',
	] );

	    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_search_box_enable',
		'section'     => 'automobile_car_services_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_socail_link',
		'section'     => 'automobile_car_services_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'automobile-car-services' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'automobile_car_services_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'automobile-car-services' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'automobile-car-services' ),
		'settings'     => 'automobile_car_services_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'automobile-car-services' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'automobile-car-services' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'automobile-car-services' ),
				'description' => esc_html__( 'Add the social icon url here.', 'automobile-car-services' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'automobile_car_services_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'automobile-car-services' ),
        'panel'          => 'automobile_car_services_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_heading',
		'section'     => 'automobile_car_services_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
			'off' => esc_html__( 'Disable', 'automobile-car-services' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_slider_heading',
		'section'     => 'automobile_car_services_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'automobile_car_services_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'automobile_car_services_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'automobile-car-services' ),
		'priority'    => 10,
		'choices'     => automobile_car_services_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_logo_text_22',
		'section'     => 'automobile_car_services_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Content Alignment', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'automobile-car-services' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'automobile-car-services' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'automobile-car-services' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_blog_slide_section',
		'default'     => '0.5',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'0' => esc_html__( '0', 'automobile-car-services' ),
			'0.1' => esc_html__( '0.1', 'automobile-car-services' ),
			'0.2' => esc_html__( '0.2', 'automobile-car-services' ),
			'0.3' => esc_html__( '0.3', 'automobile-car-services' ),
			'0.4' => esc_html__( '0.4', 'automobile-car-services' ),
			'0.5' => esc_html__( '0.5', 'automobile-car-services' ),
			'0.6' => esc_html__( '0.6', 'automobile-car-services' ),
			'0.7' => esc_html__( '0.7', 'automobile-car-services' ),
			'0.8' => esc_html__( '0.8', 'automobile-car-services' ),
			'0.9' => esc_html__( '0.9', 'automobile-car-services' ),
			'unset' => esc_html__( 'unset', 'automobile-car-services' ),
			

		],
	] );

	//WHAT WE DO SECTION

	Kirki::add_section( 'automobile_car_services_what_we_do_section', array(
	    'title'          => esc_html__( 'What We Do Settings', 'automobile-car-services' ),
	    'panel'          => 'automobile_car_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_what_we_do_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	    'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_enable_heading',
		'section'     => 'automobile_car_services_what_we_do_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable What We Do',  'automobile-car-services' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'automobile_car_services_what_we_do_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'automobile-car-services' ),
		'section'     => 'automobile_car_services_what_we_do_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'automobile-car-services' ),
			'off' => esc_html__( 'Disable',  'automobile-car-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'automobile_car_services_what_we_do_heading' ,
        'label'    => esc_html__( 'Heading',  'automobile-car-services' ),
        'section'  => 'automobile_car_services_what_we_do_section',
    ] );


    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_what_we_do_left_heading',
		'section'     => 'automobile_car_services_what_we_do_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Left side category dropdown', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'automobile_car_services_what_we_do_left_number',
		'label'       => esc_html__( 'Number of post to show', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_what_we_do_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'automobile_car_services_what_we_do_left_category',
		'label'       => esc_html__( 'Select the category to show left side post', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_what_we_do_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'automobile-car-services' ),
		'priority'    => 10,
		'choices'     => automobile_car_services_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_what_we_do_image_heading',
		'section'     => 'automobile_car_services_what_we_do_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Upload Image', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Image(
		[
			'settings'    => 'automobile_car_services_what_we_do_image',
			'section'     => 'automobile_car_services_what_we_do_section',
			'default'     => '',
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'automobile_car_services_what_we_do_right_heading',
		'section'     => 'automobile_car_services_what_we_do_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Right side category dropdown', 'automobile-car-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'automobile_car_services_what_we_do_right_number',
		'label'       => esc_html__( 'Number of post to show', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_what_we_do_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'automobile_car_services_what_we_do_right_category',
		'label'       => esc_html__( 'Select the category to show Right side post', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_what_we_do_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'automobile-car-services' ),
		'priority'    => 10,
		'choices'     => automobile_car_services_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'automobile_car_services_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'automobile-car-services' ),
        'panel'          => 'automobile_car_services_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'automobile-car-services' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'automobile-car-services' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'automobile_car_services_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'automobile-car-services' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'automobile_car_services_footer_enable_heading',
	'section'     => 'automobile_car_services_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'automobile-car-services' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'automobile_car_services_copyright_enable',
	'label'       => esc_html__( 'Section Enable / Disable', 'automobile-car-services' ),
	'section'     => 'automobile_car_services_footer_section',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'automobile-car-services' ),
		'off' => esc_html__( 'Disable', 'automobile-car-services' ),
	],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'automobile_car_services_footer_text_heading',
	'section'     => 'automobile_car_services_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'automobile-car-services' ) . '</h3>',
	'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'automobile_car_services_footer_text',
		'section'  => 'automobile_car_services_footer_section',
		'default'  => '',
		'priority' => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'automobile_car_services_footer_text_heading_2',
	'section'     => 'automobile_car_services_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'automobile-car-services' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'automobile_car_services_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'automobile-car-services' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'automobile-car-services' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'automobile-car-services' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'automobile-car-services' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'automobile_car_services_footer_text_heading_1',
	'section'     => 'automobile_car_services_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'automobile-car-services' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'automobile_car_services_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'automobile-car-services' ),
		'section'     => 'automobile_car_services_footer_section',
		'default'     => '',
	] );
}

/*
 *  Customizer Notifications
 */

$automobile_car_services_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'automobile-car-services' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'automobile-car-services' ) . '</strong>'
            ),
        ),
    ),
    'automobile_car_services_recommended_actions'       => array(),
    'automobile_car_services_recommended_actions_title' => esc_html__( 'Recommended Actions', 'automobile-car-services' ),
    'automobile_car_services_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'automobile-car-services' ),
    'automobile_car_services_install_button_label'      => esc_html__( 'Install and Activate', 'automobile-car-services' ),
    'automobile_car_services_activate_button_label'     => esc_html__( 'Activate', 'automobile-car-services' ),
    'automobile_car_services_deactivate_button_label'   => esc_html__( 'Deactivate', 'automobile-car-services' ),
);

Automobile_Car_Services_Customizer_Notify::init( apply_filters( 'automobile_car_services_customizer_notify_array', $automobile_car_services_config_customizer ) );
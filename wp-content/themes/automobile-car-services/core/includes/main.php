<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_automobile_car_services_dismissed_notice_handler', 'automobile_car_services_ajax_notice_handler' );

function automobile_car_services_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function automobile_car_services_deprecated_hook_admin_notice() {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_automobile-car-services-guide-page') {
             $automobile_car_services_comments_theme = wp_get_theme(); ?>
            <div class="automobile-car-services-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="automobile-car-services-notice">
				<div class="automobile-car-services-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'automobile-car-services'); ?>">
				</div>
				<div class="automobile-car-services-notice-content">
					<div class="automobile-car-services-notice-heading"><?php esc_html_e('Thanks for installing ','automobile-car-services'); ?><?php echo esc_html( $automobile_car_services_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'automobile-car-services'), esc_url(admin_url('themes.php?page=automobile-car-services-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'automobile_car_services_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'automobile_car_services_getting_started' );
function automobile_car_services_getting_started() {
	add_theme_page( esc_html__('Get Started', 'automobile-car-services'), esc_html__('Get Started', 'automobile-car-services'), 'edit_theme_options', 'automobile-car-services-guide-page', 'automobile_car_services_test_guide');
}

function automobile_car_services_admin_enqueue_scripts() {
	wp_enqueue_style( 'automobile-car-services-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'automobile-car-services-admin-script', get_template_directory_uri() . '/js/automobile-car-services-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'automobile-car-services-admin-script', 'automobile_car_services_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'automobile_car_services_admin_enqueue_scripts' );

if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_DOCS_FREE' ) ) {
define('AUTOMOBILE_CAR_SERVICES_DOCS_FREE',__('https://demo.misbahwp.com/docs/automobile-car-services-free-docs/','automobile-car-services'));
}
if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_DOCS_PRO' ) ) {
define('AUTOMOBILE_CAR_SERVICES_DOCS_PRO',__('https://demo.misbahwp.com/docs/automobile-car-services-pro-docs','automobile-car-services'));
}
if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_BUY_NOW' ) ) {
define('AUTOMOBILE_CAR_SERVICES_BUY_NOW',__('https://www.misbahwp.com/products/car-services-wordpress-theme','automobile-car-services'));
}
if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_SUPPORT_FREE' ) ) {
define('AUTOMOBILE_CAR_SERVICES_SUPPORT_FREE',__('https://wordpress.org/support/theme/automobile-car-services','automobile-car-services'));
}
if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_REVIEW_FREE' ) ) {
define('AUTOMOBILE_CAR_SERVICES_REVIEW_FREE',__('https://wordpress.org/support/theme/automobile-car-services/reviews/#new-post','automobile-car-services'));
}
if ( ! defined( 'AUTOMOBILE_CAR_SERVICES_DEMO_PRO' ) ) {
define('AUTOMOBILE_CAR_SERVICES_DEMO_PRO',__('https://demo.misbahwp.com/automobile-car-services/','automobile-car-services'));
}
if( ! defined( 'AUTOMOBILE_CAR_SERVICES_THEME_BUNDLE' ) ) {
define('AUTOMOBILE_CAR_SERVICES_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','automobile-car-services'));
}

function automobile_car_services_test_guide() { ?>
	<?php $automobile_car_services_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'automobile-car-services' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'automobile-car-services' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'automobile-car-services' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'automobile-car-services' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','automobile-car-services'); ?><?php echo esc_html( $automobile_car_services_theme ); ?>  <span><?php esc_html_e('Version: ', 'automobile-car-services'); ?><?php echo esc_html($automobile_car_services_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$automobile_car_services_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $automobile_car_services_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'automobile-car-services' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','automobile-car-services'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'automobile-car-services' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'automobile-car-services' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'automobile-car-services' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'automobile-car-services' ); ?></h3>
				<div class="inside theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','automobile-car-services'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','automobile-car-services'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','automobile-car-services'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( AUTOMOBILE_CAR_SERVICES_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'automobile-car-services' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','automobile-car-services'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','automobile-car-services'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','automobile-car-services'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','automobile-car-services'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>

<?php

// Automobile Meta Data
function automobile_car_services_custom_meta_services_icon() {
    add_meta_box( 
    	'bn_meta', __( 'Automobile Service Icon Meta Feilds', 'automobile-car-services' ), 
    	'automobile_car_services_meta_callback_services_icon', 
    	'post', 
    	'normal', 
    	'high' 
    );
}

/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'automobile_car_services_custom_meta_services_icon');
}

function automobile_car_services_meta_callback_services_icon( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'automobile_car_services_meta_nonce_services_icon' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $automobile_car_services_service_icon = get_post_meta( $post->ID, 'automobile_car_services_icon', true );
    ?>
    <div id="services_icon_meta">
        <table id="list">
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-8">
                    <td class="left">
                        <h3 style="margin:0"><?php esc_html_e( 'Services Icon', 'automobile-car-services' )?></h3>
                        <p style="margin-top:0"><?php esc_html_e( 'Add the fontawesome icon class. Example: "fas fa-car".', 'automobile-car-services' )?></p>
                        <input type="text" placeholder="fas fa-car" name="automobile_car_services_icon" id="automobile_car_services_icon" value="<?php echo esc_attr($automobile_car_services_service_icon); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/* Saves the custom meta input */
function automobile_car_services_meta_save_services_icon( $post_id ) {
    if (!isset($_POST['automobile_car_services_meta_nonce_services_icon']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['automobile_car_services_meta_nonce_services_icon']) ), basename(__FILE__))) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Package Amount
    if( isset( $_POST[ 'automobile_car_services_icon' ] ) ) {
        update_post_meta( $post_id, 'automobile_car_services_icon', strip_tags( wp_unslash( $_POST[ 'automobile_car_services_icon' ]) ) );
    }   
}
add_action( 'save_post', 'automobile_car_services_meta_save_services_icon' );
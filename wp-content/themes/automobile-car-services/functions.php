<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function automobile_car_services_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'google-fonts-montserrat',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'automobile_car_services_enqueue_google_fonts' );

if (!function_exists('automobile_car_services_enqueue_scripts')) {

	function automobile_car_services_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('automobile-car-services-style', get_stylesheet_uri(), array() );

		wp_style_add_data('automobile-car-services-style', 'rtl', 'replace');

		wp_enqueue_style(
			'automobile-car-services-media-css',
			get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'automobile-car-services-woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'automobile-car-services-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'automobile-car-services-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$automobile_car_services_css = '';

		if ( get_header_image() ) :

			$automobile_car_services_css .=  '
				#site-navigation,.page-template-frontpage #site-navigation{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'automobile-car-services-style', $automobile_car_services_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'automobile-car-services-style',$automobile_car_services_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'automobile_car_services_enqueue_scripts' );
}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('automobile_car_services_after_setup_theme')) {

	function automobile_car_services_after_setup_theme() {

		if ( ! isset( $automobile_car_services_content_width ) ) $automobile_car_services_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'automobile-car-services' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'automobile_car_services_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/automobile-car-services-customizer-notify.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );
require get_template_directory() .'/core/includes/meta-data.php';

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function automobile_car_services_logo_resizer() {

    $automobile_car_services_theme_logo_size_css = '';
    $automobile_car_services_logo_resizer = get_theme_mod('automobile_car_services_logo_resizer');

	$automobile_car_services_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($automobile_car_services_logo_resizer).'px !important;
			width: '.esc_attr($automobile_car_services_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'automobile-car-services-style',$automobile_car_services_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'automobile_car_services_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function automobile_car_services_global_color() {

    $automobile_car_services_theme_color_css = '';
    $automobile_car_services_global_color = get_theme_mod('automobile_car_services_global_color');
    $automobile_car_services_global_color_2 = get_theme_mod('automobile_car_services_global_color_2');
    $automobile_car_services_copyright_bg = get_theme_mod('automobile_car_services_copyright_bg');

	$automobile_car_services_theme_color_css = '
		.wp-block-button__link,.social-links,#main-menu ul.children ,#main-menu ul.sub-menu,p.slider-button a,.slider button.owl-prev i, .slider button.owl-next i,.what-we-do-left:hover i,.what-we-do-right:hover i,.scroll-up a,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.automobile-car-services-pagination span.current,.automobile-car-services-pagination span.current:hover,.automobile-car-services-pagination span.current:focus,.automobile-car-services-pagination a span:hover,.automobile-car-services-pagination a span:focus,.woocommerce nav.woocommerce-pagination ul li span.current,.comment-respond input#submit,.comment-reply a,.sidebar-area h4.title, .sidebar-area h1.wp-block-heading,.sidebar-area h2.wp-block-heading,.sidebar-area h3.wp-block-heading,.sidebar-area h4.wp-block-heading,.sidebar-area h5.wp-block-heading,.sidebar-area h6.wp-block-heading,.sidebar-area .wp-block-search__label,.sidebar-area .wp-block-search__button,.sidebar-area .tagcloud a, p.wp-block-tag-cloud a,.searchform input[type=submit],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce a.added_to_cart,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button {
		background: '.esc_attr($automobile_car_services_global_color).';
		}
		#site-navigation {
		    background: rgba(0, 0, 0, 0) linear-gradient(90deg, '.esc_attr($automobile_car_services_global_color).' 27.5%, rgba(0, 0, 0, 0) 27%) repeat scroll 0 0;
		}
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .menu-toggle, .dropdown-toggle,button.close-menu {
		        background: '.esc_attr($automobile_car_services_global_color).';
		    }
		}
		.searchform input[type=submit]:hover,.searchform input[type=submit]:focus{
		background-color: '.esc_attr($automobile_car_services_global_color).';
		}
		a:hover,a:focus,#main-menu a:hover,#main-menu ul li a:hover,#main-menu li:hover > a,#main-menu a:focus,#main-menu ul li a:focus,#main-menu li.focus > a,#main-menu li:focus > a,#main-menu ul li.current-menu-item > a,#main-menu ul li.current_page_item > a,#main-menu ul li.current-menu-parent > a,#main-menu ul li.current_page_ancestor > a,#main-menu ul li.current-menu-ancestor > a,.post-meta i,#what-we-do h2,.what-we-do-left i,.what-we-do-right i,.bread_crumb a:hover,.bread_crumb span,#what-we-do h2,.woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price {
			color: '.esc_attr($automobile_car_services_global_color).';
		}
		.blog_box h3{
			border-color: '.esc_attr($automobile_car_services_global_color).';
		}
    	.copyright {
			background: '.esc_attr($automobile_car_services_copyright_bg).';
		}
	';
    wp_add_inline_style( 'automobile-car-services-style',$automobile_car_services_theme_color_css );
    wp_add_inline_style( 'automobile-car-services-woocommerce-css',$automobile_car_services_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'automobile_car_services_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('automobile_car_services_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function automobile_car_services_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'automobile-car-services');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'automobile-car-services'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'automobile-car-services'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'automobile-car-services' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'automobile-car-services'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for automobile_car_services_comment()

if (!function_exists('automobile_car_services_widgets_init')) {

	function automobile_car_services_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','automobile-car-services'),
			'id'   => 'automobile-car-services-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'automobile-car-services'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','automobile-car-services'),
			'id'   => 'automobile-car-services-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'automobile-car-services'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','automobile-car-services'),
			'id'   => 'automobile-car-services-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'automobile-car-services'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','automobile-car-services'),
			'id'   => 'automobile-car-services-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'automobile-car-services'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'automobile_car_services_widgets_init' );

}

function automobile_car_services_get_categories_select() {
	$automobile_car_services_teh_cats = get_categories();
	$results = array();
	$automobile_car_services_count = count($automobile_car_services_teh_cats);
	for ($i=0; $i < $automobile_car_services_count; $i++) {
	if (isset($automobile_car_services_teh_cats[$i]))
  		$results[$automobile_car_services_teh_cats[$i]->slug] = $automobile_car_services_teh_cats[$i]->name;
	else
  		$automobile_car_services_count++;
	}
	return $results;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'automobile_car_services_loop_columns');
if (!function_exists('automobile_car_services_loop_columns')) {
	function automobile_car_services_loop_columns() {
		$automobile_car_services_columns = get_theme_mod( 'automobile_car_services_per_columns', 3 );
		return $automobile_car_services_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'automobile_car_services_per_page', 20 );
function automobile_car_services_per_page( $automobile_car_services_cols ) {
  	$automobile_car_services_cols = get_theme_mod( 'automobile_car_services_product_per_page', 9 );
	return $automobile_car_services_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'automobile_car_services_products_args' );
function automobile_car_services_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

add_action('after_switch_theme', 'automobile_car_services_setup_options');
function automobile_car_services_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

?>

<?php

$automobile_car_services_custom_css = '';


$automobile_car_services_is_dark_mode_enabled = get_theme_mod( 'automobile_car_services_is_dark_mode_enabled', false );

if ( $automobile_car_services_is_dark_mode_enabled ) {

    $automobile_car_services_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2) {';
    $automobile_car_services_custom_css .= 'background: #000;';
    $automobile_car_services_custom_css .= '}';

    $automobile_car_services_custom_css .= '.some {';
    $automobile_car_services_custom_css .= 'background: #000 !important;';
    $automobile_car_services_custom_css .= '}';

	$automobile_car_services_custom_css .= '.sticky .post-content{';
    $automobile_car_services_custom_css .= 'color: #000';
    $automobile_car_services_custom_css .= '}';

	$automobile_car_services_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a{';
    $automobile_car_services_custom_css .= 'color: #000 !important';
    $automobile_car_services_custom_css .= '}';

    $automobile_car_services_custom_css .= '.some{';
    $automobile_car_services_custom_css .= 'background: #fff;';
    $automobile_car_services_custom_css .= '}';

    $automobile_car_services_custom_css .= '.some {';
    $automobile_car_services_custom_css .= 'background: #fff !important;';
    $automobile_car_services_custom_css .= '}';
	

    $automobile_car_services_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span{';
    $automobile_car_services_custom_css .= 'color: #fff;';
    $automobile_car_services_custom_css .= '}';

    $automobile_car_services_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular{';
    $automobile_car_services_custom_css .= 'color: #fff !important;';
    $automobile_car_services_custom_css .= '}';

	$automobile_car_services_custom_css .= '.post-box{';
    $automobile_car_services_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $automobile_car_services_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$automobile_car_services_text_transform = get_theme_mod( 'menu_text_transform_automobile_car_services','UPPERCASE');

    if($automobile_car_services_text_transform == 'CAPITALISE'){

		$automobile_car_services_custom_css .='#main-menu ul li a{';

			$automobile_car_services_custom_css .='text-transform: capitalize ; font-size: 12px;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_text_transform == 'UPPERCASE'){

		$automobile_car_services_custom_css .='#main-menu ul li a{';

			$automobile_car_services_custom_css .='text-transform: uppercase ; font-size: 12px;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_text_transform == 'LOWERCASE'){

		$automobile_car_services_custom_css .='#main-menu ul li a{';

			$automobile_car_services_custom_css .='text-transform: lowercase ; font-size: 12px;';

		$automobile_car_services_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$automobile_car_services_menu_zoom = get_theme_mod( 'automobile_car_services_menu_zoom','None');

    if($automobile_car_services_menu_zoom == 'None'){

		$automobile_car_services_custom_css .='#main-menu ul li a{';

			$automobile_car_services_custom_css .='';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_menu_zoom == 'Zoominn'){

		$automobile_car_services_custom_css .='#main-menu ul li a:hover{';

			$automobile_car_services_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #fd7115;';

		$automobile_car_services_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$automobile_car_services_container_width = get_theme_mod('automobile_car_services_container_width');

			$automobile_car_services_custom_css .='body{';

				$automobile_car_services_custom_css .='width: '.esc_attr($automobile_car_services_container_width).'%; margin: auto;';

			$automobile_car_services_custom_css .='}';

			/*---------------------------Slider-content-alignment-------------------*/


			$automobile_car_services_slider_content_alignment = get_theme_mod( 'automobile_car_services_slider_content_alignment','LEFT-ALIGN');

			 if($automobile_car_services_slider_content_alignment == 'LEFT-ALIGN'){

					$automobile_car_services_custom_css .='.blog_box{';

						$automobile_car_services_custom_css .='text-align:left;';

					$automobile_car_services_custom_css .='}';


				}else if($automobile_car_services_slider_content_alignment == 'CENTER-ALIGN'){

					$automobile_car_services_custom_css .='.blog_box{';

						$automobile_car_services_custom_css .='text-align:center; right: 30%; left: 30%;';

					$automobile_car_services_custom_css .='}';


				}else if($automobile_car_services_slider_content_alignment == 'RIGHT-ALIGN'){

					$automobile_car_services_custom_css .='.blog_box{';

						$automobile_car_services_custom_css .='text-align:right; right: 20%; left: 50%;';

					$automobile_car_services_custom_css .='}';

				}


	/*---------------------------Copyright Text alignment-------------------*/

$automobile_car_services_copyright_text_alignment = get_theme_mod( 'automobile_car_services_copyright_text_alignment','LEFT-ALIGN');

 if($automobile_car_services_copyright_text_alignment == 'LEFT-ALIGN'){

		$automobile_car_services_custom_css .='.copy-text p{';

			$automobile_car_services_custom_css .='text-align:left;';

		$automobile_car_services_custom_css .='}';


	}else if($automobile_car_services_copyright_text_alignment == 'CENTER-ALIGN'){

		$automobile_car_services_custom_css .='.copy-text p{';

			$automobile_car_services_custom_css .='text-align:center;';

		$automobile_car_services_custom_css .='}';


	}else if($automobile_car_services_copyright_text_alignment == 'RIGHT-ALIGN'){

		$automobile_car_services_custom_css .='.copy-text p{';

			$automobile_car_services_custom_css .='text-align:right;';

		$automobile_car_services_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$automobile_car_services_related_product_setting = get_theme_mod('automobile_car_services_related_product_setting',true);

	if($automobile_car_services_related_product_setting == false){

		$automobile_car_services_custom_css .='.related.products, .related h2{';

			$automobile_car_services_custom_css .='display: none;';

		$automobile_car_services_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$automobile_car_services_scroll_top_position = get_theme_mod( 'automobile_car_services_scroll_top_position','Right');

	if($automobile_car_services_scroll_top_position == 'Right'){

		$automobile_car_services_custom_css .='.scroll-up{';

			$automobile_car_services_custom_css .='right: 20px;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_scroll_top_position == 'Left'){

		$automobile_car_services_custom_css .='.scroll-up{';

			$automobile_car_services_custom_css .='left: 20px;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_scroll_top_position == 'Center'){

		$automobile_car_services_custom_css .='.scroll-up{';

			$automobile_car_services_custom_css .='right: 50%;left: 50%;';

		$automobile_car_services_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$automobile_car_services_pagination_setting = get_theme_mod('automobile_car_services_pagination_setting',true);

	if($automobile_car_services_pagination_setting == false){

		$automobile_car_services_custom_css .='.nav-links{';

			$automobile_car_services_custom_css .='display: none;';

		$automobile_car_services_custom_css .='}';
	}

/*--------------------------- Slider Opacity -------------------*/

	$automobile_car_services_slider_opacity_color = get_theme_mod( 'automobile_car_services_slider_opacity_color','0.5');

	if($automobile_car_services_slider_opacity_color == '0'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.1'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.1';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.2'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.2';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.3'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.3';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.4'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.4';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.5'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.5';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.6'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.6';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.7'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.7';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.8'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.8';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == '0.9'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:0.9';

		$automobile_car_services_custom_css .='}';

		}else if($automobile_car_services_slider_opacity_color == 'unset'){

		$automobile_car_services_custom_css .='.blog_inner_box img{';

			$automobile_car_services_custom_css .='opacity:unset';

		$automobile_car_services_custom_css .='}';

		}

	/*---------------------------Woocommerce Pagination Alignment Settings-------------------*/

	$automobile_car_services_woocommerce_pagination_position = get_theme_mod( 'automobile_car_services_woocommerce_pagination_position','Center');

	if($automobile_car_services_woocommerce_pagination_position == 'Left'){

		$automobile_car_services_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$automobile_car_services_custom_css .='text-align: left;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_woocommerce_pagination_position == 'Center'){

		$automobile_car_services_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$automobile_car_services_custom_css .='text-align: center;';

		$automobile_car_services_custom_css .='}';

	}else if($automobile_car_services_woocommerce_pagination_position == 'Right'){

		$automobile_car_services_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$automobile_car_services_custom_css .='text-align: right;';

		$automobile_car_services_custom_css .='}';
	}
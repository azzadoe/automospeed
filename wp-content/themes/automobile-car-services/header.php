<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'automobile-car-services' ); ?></a>

<?php if ( get_theme_mod('automobile_car_services_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'automobile-car-services' ); ?></h1>
    </div>
<?php endif; ?>

	<div class="<?php if( get_theme_mod( 'automobile_car_services_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
<header id="site-navigation" class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center logo-bg">
				<div class="logo text-center text-md-start">
		    		<div class="logo-image">
		    			<?php echo the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('automobile_car_services_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('automobile_car_services_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
		   	<div class="col-lg-9 col-md-9 col-sm-9 align-self-center text-center text-md-end">
		   		<div class="link-box border-bottom">
		   		<?php if ( get_theme_mod('automobile_car_services_search_box_enable', true) == true ) : ?>
	                    <div class="header-search text-center">
	                        <form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
								<input placeholder="<?php esc_attr_e('Search Here....',  'automobile-car-services'); ?>" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
								<button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
							</form>
	                    </div>
	                <?php endif; ?>
		   		
			   		<?php $automobile_car_services_settings = get_theme_mod( 'automobile_car_services_social_links_settings' ); ?>
					<?php if ( is_array($automobile_car_services_settings) || is_object($automobile_car_services_settings) ){ ?>
						<div class="social-links">
					    	<?php foreach( $automobile_car_services_settings as $automobile_car_services_setting ) { ?>
						        <a href="<?php echo esc_url( $automobile_car_services_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $automobile_car_services_setting['link_text'] ); ?> me-3"></i>
						        </a>
					    	<?php } ?>
				    	</div>
					<?php } ?>
				</div>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'automobile-car-services' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
		   	</div>
	   	</div>
	</div>
</header>
</div>

<?php if ( get_theme_mod('automobile_car_services_what_we_do_section_enable',false) ) : ?>

<?php $automobile_car_services_left_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('automobile_car_services_what_we_do_left_category'),
  'posts_per_page' => get_theme_mod('automobile_car_services_what_we_do_left_number'),
); ?>

<?php $automobile_car_services_right_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('automobile_car_services_what_we_do_right_category'),
  'posts_per_page' => get_theme_mod('automobile_car_services_what_we_do_right_number'),
); ?>

	<div id="what-we-do" class="py-5">
		<div class="container">
			<?php if ( get_theme_mod('automobile_car_services_what_we_do_heading') ) : ?>
    		<h2 class="text-center mb-5"><?php echo esc_html(get_theme_mod('automobile_car_services_what_we_do_heading'));?></h2>
    	<?php endif; ?>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php $automobile_car_services_arr_posts = new WP_Query( $automobile_car_services_left_args );
				    if ( $automobile_car_services_arr_posts->have_posts() ) :
				      while ( $automobile_car_services_arr_posts->have_posts() ) :
				        $automobile_car_services_arr_posts->the_post();
				        ?>
						<div class="row text-center text-lg-end what-we-do-left">
							<div class="col-lg-9 col-md-12 col-sm-12 align-self-center order_one">
								<h3><?php the_title(); ?></h3>
								<p class="mb-0"><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
							</div>
							<div class="col-lg-3 col-md-12 col-sm-12 align-self-center text-center order_two">
								<?php if( get_post_meta($post->ID, 'automobile_car_services_icon', true) ) {?>
									<i class="<?php echo esc_attr(get_post_meta($post->ID,'automobile_car_services_icon',true)); ?>"></i>
      					<?php }?>
							</div>
						</div>
				      <?php
				    endwhile;
				    wp_reset_postdata();
				    endif; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php if ( get_theme_mod('automobile_car_services_what_we_do_image') ) : ?>
						<img src="<?php echo esc_url(get_theme_mod('automobile_car_services_what_we_do_image'));?>">
					<?php endif; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
					<?php $automobile_car_services_arr_posts = new WP_Query( $automobile_car_services_right_args );
				    if ( $automobile_car_services_arr_posts->have_posts() ) :
				      while ( $automobile_car_services_arr_posts->have_posts() ) :
				        $automobile_car_services_arr_posts->the_post();
				        ?>
						<div class="row text-center text-lg-start what-we-do-right">
							<div class="col-lg-3 col-md-12 col-sm-12 align-self-center text-center">
								<?php if( get_post_meta($post->ID, 'automobile_car_services_icon', true) ) {?>
									<i class="<?php echo esc_attr(get_post_meta($post->ID,'automobile_car_services_icon',true)); ?>"></i>
              					<?php }?>
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12 align-self-center">
								<h3><?php the_title(); ?></a></h3>
								<p class="mb-0"><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
							</div>
						</div>
				      <?php
				    endwhile;
				    wp_reset_postdata();
				    endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
